<?php

/*
 * Description of LoginService
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Service;

use Alt68\Entities\User;
use Alt68\Sys\BaseService;
use Alt68\Service\CommonService;

/**
 * This class is a service layer for user login, registration, etc.
 */
class LoginService extends BaseService {
    /**
     * Cookie expire time
     */

    const COOKIE_EXPIRE = 8640000; // 60 * 60 * 24 * 100

    /**
     * Cookie path
     */
    const COOKIE_PATH = "/";

    /**
     * Inspect if a user logs in
     * 
     * @return boolean return true if logged in
     */
    public function isLogged() {

        if (isset($_SESSION['user']['email']) && isset($_SESSION['user']['userhash']) && $_SESSION['user']['email'] != User::GUEST_NAME) {

            /**
             * Find user by email
             */
            /* @var $user User */
            $user = $this->em
                    ->getRepository('Alt68\Entities\User')
                    ->emailExists($_SESSION['user']['email']);

            if (!$user || $user->getUserhash() != $_SESSION['user']['userhash']) {
                unset($_SESSION['user']);
                return false;
            }
            return true;
        }

        if (isset($_COOKIE['cookiename']) && isset($_COOKIE['cookieid'])) {

            $user = $this->em
                    ->getRepository('Alt68\Entities\User')
                    ->emailExists($_COOKIE['cookiename']);

            if (!$user || $user->getUserhash() != $_COOKIE['cookieid']) {
                unset($_SESSION['user']);
                return false;
            }

            session_regenerate_id();

            $_SESSION['user']['email'] = $_COOKIE['cookiename'];
            $_SESSION['user']['userhash'] = $_COOKIE['cookieid'];
            $_SESSION['user']['id'] = $user->getId();

            return true;
        }
        return false;
    }

    /**
     * Logins user
     * 
     * @return boolean True if user login successfully
     */
    public function login() {

        $this->validator->required()->email()->validate('email');
        $this->validator->required()->validate('password');

        if ($this->hasErrors()) {
            return false;
        }

        /* @var $userIsVerified User */
        $userIsVerified = $this->em
                ->getRepository('Alt68\Entities\User')
                ->userIsVerified($_POST['email']);

        if (!$userIsVerified) {

            $_SESSION['error_array']['userisverified'] = User::ERROR_USER_IS_NOT_VERIFIED;
            return false;
        }

        /* @var $userEmailExists User */
        $userEmailExists = $this->em
                ->getRepository('Alt68\Entities\User')
                ->emailExists($_POST['email']);

        if (!$userEmailExists) {
            $_SESSION['error_array']['emailexists'] = User::ERROR_EMAIL_NOT_EXISTS;
            return false;
        }

        /* @var $loginUser User */
        $loginUser = $this->em
                ->getRepository('Alt68\Entities\User')
                ->checkPassword($_POST['email'], $_POST['password']);

        if (!$loginUser) {
            $_SESSION['error_array']['wrongpassword'] = User::ERROR_WRONG_EMAIL_OR_PASSWORD;
            return false;
        }

        session_regenerate_id();

        $_SESSION['user']['email'] = $loginUser->getEmail();
        $_SESSION['user']['id'] = $loginUser->getId();

        $loginUser->setUserhash(md5(microtime()));
        $_SESSION['user']['userhash'] = $loginUser->getUserhash();


        $this->em->flush();

        $rememberme = isset($_POST['rememberme']);

        if ($rememberme == 'true') {
            setcookie("cookiename", $loginUser->getEmail(), time() + self::COOKIE_EXPIRE, self::COOKIE_PATH);
            setcookie("cookieid", $loginUser->getUserhash(), time() + self::COOKIE_EXPIRE, self::COOKIE_PATH);
        }

        return true;
    }

    /**
     * Logs out the user
     */
    public function logout() {
        /*
         * If cookie was set, clear
         */
        if (isset($_COOKIE['cookiename']) && isset($_COOKIE['cookieid'])) {
            setcookie("cookiename", "", time() - self::COOKIE_EXPIRE, self::COOKIE_PATH);
            setcookie("cookieid", "", time() - self::COOKIE_EXPIRE, self::COOKIE_PATH);
        }
        /* clear user data from session */
        unset($_SESSION['user']);

        return true;
    }

    /**
     * Register a new user
     * 
     * If all user data are valid, persist them to the database. 
     * If any error occures, return false
     * 
     * @return boolean Retutrn true if the registration was successful
     */
    public function registration() {

        /*
         * Validate $_POST fields
         */
        $this->validator->required()->email()->validate('email');
        $this->validator->required()->validate('password');
        $this->validator->required()->matches('password')->validate('password2');
        $this->validator->required()->validate('name');

        /*
         * If error occured return false
         */
        if ($this->hasErrors()) {
            return false;
        }

        /*
         * If email already exists return false
         */

        $user = $this->em
                ->getRepository('Alt68\Entities\User')
                ->emailExists($_POST['email']);

        if ($user) {
            $_SESSION['error_array']['emailexist'] = User::ERROR_EMAIL_EXISTS;
            return false;
        }

        /*
         * Create new User
         */
        $newUser = new User();

        $newUser->setEmail(strtolower($_POST['email']));
        $newUser->setPassword($_POST['password']);
        $newUser->setName($_POST['name']);
        $newUser->setVerificationcode(md5(microtime()));

        /*
         * If email is admin's email set user level to admin level
         * Default is REGISTERED
         */
        if ($this->isAdminEmail($_POST['email'])) {
            $newUser->setUserlevel(User::ADMIN);
        }

        /*
         * Store data to database
         */
        $this->em->persist($newUser);
        $this->em->flush();

        $to = $newUser->getEmail();
        $from = CommonService::getConfigValue('adminemail');
        $from = $from['email'];
        $from_name = 'admin';
        $subject = 'Regisztráció megerősítése';

        $url = CommonService::getConfigValue('homeUrl');
        $url .= 'index.php?controller=login&amp;action=verification&amp;verificationcode=';
        $url .= $newUser->getVerificationcode();

        $smarty = CommonService::getMySmarty();
        $smarty->assign('url', $url);

        $body = $smarty->fetch('login/verificationemailbody.tpl');

        unset($smarty);

        if (($emailSendingError = CommonService::smtpmailer($to, $from, $from_name, $subject, $body)) !== true) {
            return $emailSendingError;
        }
        return true;
    }

    /**
     * If a user registration was success
     * 
     * @return true
     */
    public function successregistration() {
        return true;
    }

    /**
     * Check verification code from the url
     * 
     * @return boolean Verification was success or not
     */
    public function verification() {

        if (isset($_GET['verificationcode'])) {

            /* @var $user User */
            $user = $this->em
                    ->getRepository('Alt68\Entities\User')
                    ->checkVerificationCode($_GET['verificationcode']);

            if ($user) {
                $user->setVerified(true);
                $this->em->flush();
                return true;
            }
        }
        return false;
    }

    /**
     * Check if an email address is admin's email address from the config.php
     * 
     * @param string $email An email address
     * @return boolean 
     */
    protected function isAdminEmail($email) {

        $adminEmail = CommonService::getConfigValue('adminemail');

        return $adminEmail['email'] == strtolower($email);
    }

}

?>
