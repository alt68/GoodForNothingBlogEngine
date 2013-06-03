<?php

/**
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Sys;

use Doctrine\ORM\EntityManager;
use Alt68\Service\CommonService;
use Alt68\Service\LoginService;

/**
 * Abstract Base Controller class
 * 
 * Parent of every controller class. It stores values from $_GET which need to make
 * a controller.
 */
abstract class BaseController extends BaseObject {

    /**
     *
     * @var string stores whole URL values from $_GET
     */
    protected $urlvalues = null;

    /**
     *
     * @var string stores which action method need run 
     */
    protected $action = null;

    /**
     *
     * @var \Smarty stores a new smarty object for the controller
     */
    protected $smarty = null;
    
    /**
     *
     * @var \Doctrine\ORM\EntityManager stores EntityManager object 
     */
    protected $em = null;
    
    /**
     *
     * @var boolean User already logs in or not
     */
    protected $isLogged = false;
    
    /**
     *
     * @var loginService stores LoginService object
     */
    protected $loginService;

    /**
     * When create a new controller stores which controller's action method
     * need to run, URL values from $_GET and create a new smarty 
     * object for the controller
     * 
     * @param \Doctrine\ORM\EntityManager $entityManager     
     * @param string $action
     * @param string $urlvalues
     */
    function __construct(EntityManager $entityManager, $action, array $urlvalues) {
        $this->action = $action;
        $this->urlvalues = $urlvalues;

        $this->smarty = CommonService::getMySmarty();
        
        $this->em = $entityManager;
        
        $this->loginService = new LoginService($this->em);
        $this->isLogged = $this->loginService->isLogged();
       
    }

    /**
     * Execute the proper action method
     * 
     * @return Controller
     */
    public function ExecuteAction() {
        return $this->{$this->action}();
    }
}
?>
