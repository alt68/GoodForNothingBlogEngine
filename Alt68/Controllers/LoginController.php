<?php

/*
 * Description of LoginController
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Controllers;

use Alt68\Sys\BaseController;

/**
 * This class controls all user login, registration, etc. activity
 */
class LoginController extends BaseController {

    /**
     * Controlls user login
     */
    public function login() {

        /*
         * If user already logged in send him to error page 
         */
        if ($this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $success = false;

        if (isset($_POST['login'])) {
            $success = $this->loginService->login();
        }

        if ($success) {
            header('Location: index.php?controller=site&action=home');
            exit();
        } else {
            $this->smarty->assign('title', 'Bejelentkezés');
            $this->smarty->assign('isLogged', $this->isLogged);
            $this->smarty->assign('content', 'login/login.tpl');
            $this->smarty->display('main.tpl');
            unset($_SESSION['value_array']);
            unset($_SESSION['error_array']);
        }
    }

    /**
     * Controlls user logout
     */
    public function logout() {

        /*
         * If user already logged out send him to error page 
         */

        if (!$this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $success = $this->loginService->logout();

        if ($success) {
            header('Location: index.php?controller=site&action=home');
            exit();
        } else {
            header('Location: index.php?controller=site&action=error');
            exit();
        }
    }

    /**
     * Controlls user registration
     */
    public function registration() {

        /*
         * If user already logged in send him to error page 
         */

        if ($this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $success = false;


        if (isset($_POST['registration'])) {
            $success = $this->loginService->registration();
        }

        if ($success) {
            header('Location: index.php?controller=login&action=successregistration');
            exit();
        } else {
            $this->smarty->assign('title', 'Regisztráció');
            $this->smarty->assign('isLogged', $this->isLogged);
            $this->smarty->assign('content', 'login/registration.tpl');
            $this->smarty->display('main.tpl');
            unset($_SESSION['value_array']);
            unset($_SESSION['error_array']);
        }
    }

    /**
     * After a successfully registration send a verification email to the user
     */
    public function successregistration() {

        /*
         * If user already logged in send him to error page 
         */

        if ($this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }
        
        $message = $this->loginService->successregistration();

        if (!$message) {
            header('Location: index.php?controller=site&action=error');
            exit();
        } else {

            $this->smarty->assign('title', 'Sikeres regisztráció');
            $this->smarty->assign('isLogged', $this->isLogged);
            $this->smarty->assign('content', 'login/successregistration.tpl');
            $this->smarty->display('main.tpl');
        }
    }

    /**
     * If a user gets an verification url
     * this method controlls the verification
     */
    public function verification() {

        /*
         * If user already logged in send him to error page 
         */

        if ($this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $success = $this->loginService->verification();

        if (!$success) {
            header('Location: index.php?controller=site&action=error');
            exit();
        } else {

            $this->smarty->assign('title', 'Regisztráció megerősítése');
            $this->smarty->assign('isLogged', $this->isLogged);
            $this->smarty->assign('content', 'login/verification.tpl');
            $this->smarty->display('main.tpl');
        }
    }

    public function profileedit() {
        
    }

}

?>
