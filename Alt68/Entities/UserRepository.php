<?php

/**
 * Description of UserRepository
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Entities;

use Doctrine\ORM\EntityRepository;

/**
 * This class is a repository for User entity
 */
class UserRepository extends EntityRepository {

    /**
     * Check user password
     * 
     * @param string $email User email
     * @param string $password User password
     * @return Alt68\Entities\User A user object
     */
    public function checkPassword($email, $password) {

        return $this->getEntityManager()
                        ->getRepository('Alt68\Entities\User')
                        ->findOneBy(array(
                            'email' => $email,
                            'password' => $password));
    }

    /**
     * Check user email exists
     * 
     * @param string $email User email
     * @return Alt68\Entities\User A user object
     */
    public function emailExists($email) {

        return $this->getEntityManager()
                        ->getRepository('Alt68\Entities\User')
                        ->findOneBy(array('email' => $email));
    }

    /**
     * Check user registration verificationcode
     * 
     * @param string $email User email
     * @return Alt68\Entities\User A user object
     */
    public function checkVerificationCode($verificationcode) {

        return $this->getEntityManager()
                        ->getRepository('Alt68\Entities\User')
                        ->findOneBy(array('verificationcode' => $verificationcode));
    }

    /**
     * Check if user is verified or not
     * 
     * @param string $email User email
     * @return Alt68\Entities\User A user object
     */
    public function userIsVerified($email) {

        return $this->getEntityManager()
                        ->getRepository('Alt68\Entities\User')
                        ->findOneBy(array(
                            'email' => $email,
                            'verified' => true));
    }

    /**
     * Get a user by id
     * 
     * @param integer $id
     * @return type Alt68\Entities\User A user object
     */
    public function getUser($id) {
        return $this->getEntityManager()
                        ->getRepository('Alt68\Entities\User')
                        ->findOneBy(array(
                            'id' => $id));
    }

}

?>
