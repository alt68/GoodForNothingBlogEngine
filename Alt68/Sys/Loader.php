<?php

/**
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Sys;

use Alt68\Sys\BaseObject;
use Alt68\Service\CommonService;

/**
 * This class is the soul of the application. It finds out
 * from the $_GET array values which controller's which method need to load.
 * It creates a new Controller object and call its actual action metod 
 * 
 * Based on idea of Nathan Davison. 
 * See: @link http://www.nathandavison.com/posts/view/11/custom-php-mvc-tutorial-part-1-introduction 
 */
class Loader extends BaseObject {

    /**
     * Stores controller name which need to load
     * 
     * @var string name of the controller
     */
    private $controller;

    /**
     * Stores the controller's namespace name
     * 
     * @var string name of the controller's namespace
     */
    private $controllerNamespaceName;

    /**
     * Stores controller's action method name which need to call
     * 
     * @var string name of the action method
     */
    private $action;

    /**
     * Stores $_GET array values
     * 
     * @var array stores URL values from $_GET array
     */
    private $urlvalues = array();

    /**
     * Strores URL values of $_GET
     * 
     * @param array $urlvalues $_GET array
     * @param string $controllerNamespaceName Controllers namespace name
     */
    public function __construct(array $urlvalues, $controllerNamespaceName = null) {
        parent::__construct();

        /*
         * Store whole $_GET array
         * Lowercase all array key
         */
        $this->urlvalues = array_change_key_case($urlvalues);

        /*
         * Store controller's namespace name
         */
        $this->controllerNamespaceName = $controllerNamespaceName;

        /*
         * Add controller namespace name to this controller variable before
         * add conroller class name. Need to autoload classes.
         */
        $this->controller = $controllerNamespaceName;

        /*
         * Create the name of Controller class and
         * it's action method name from URL values
         * If not success create default controller name and 
         * action method name from config 
         */

        if ((array_key_exists('controller', $this->urlvalues)) &&
                (array_key_exists('action', $this->urlvalues))) {

            $this->controller .= ucfirst($this->urlvalues['controller'] . 'Controller');
            $this->action = strtolower($this->urlvalues['action']);
        } else {
            
            
            $this->controller .= CommonService::getConfigValue('mainController');
            $this->action = CommonService::getConfigValue('mainMethod');
        }
    }

    /**
     * Create the requested method of the requested controller
     * 
     * If get any error go to the error page 
     *  
     * @return object a new controller object
     */
    public function CreateController(\Doctrine\ORM\EntityManager $entityManager) {

        //does the class exist?        
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            //does the class extend the controller class?
            if (in_array("Alt68\\Sys\\BaseController", $parents)) {
                //does the class contain the requested method?
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($entityManager, $this->action, $this->urlvalues);
                }
            }
        }

        // if any error create error page

        $this->controller = $this->controllerNamespaceName .
                CommonService::getConfigValue('mainController');
        $this->action = 'error';

        return new $this->controller($entityManager, $this->action, $this->urlvalues);
    }

}

?>
