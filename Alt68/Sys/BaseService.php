<?php

namespace Alt68\Sys;

use Alt68\Sys\BaseObject;
use Doctrine\ORM\EntityManager;

/**
 * Abstract Base Service class
 * 
 * Parent of every service class
 */
abstract class BaseService extends BaseObject {

    /**
     * Entitymanager object
     * 
     * @var EntityManager
     */
    protected $em;

    /**
     * Validator
     * 
     * @var \Validator
     */
    protected $validator;

    public function __construct(EntityManager $em) {
        $this->validator = new \Validator();
        $this->em = $em;
    }

    /**
     * If any error occured, stores validator errors array to $_SESSION array 
     * and return true
     * 
     * @return boolean Return true if error occured
     */
    protected function hasErrors() {
        if ($this->validator->hasErrors()) {
            $_SESSION['value_array'] = $_POST;
            $_SESSION['error_array'] = $this->validator->getAllErrors();
            return true;
        }
        return false;
    }

}

?>
