<?php

/**
 * index.php
 *
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

use Alt68\Sys\Loader;

/*
 * Load own classes automatically
 * Directory structure is the same as the namespace structure
 */

spl_autoload_extensions(".php");
spl_autoload_register();

session_start();

/*
 * Doctrine bootstrap
 */
require_once 'bootstrap.php';
require_once './vendor/validator/Validator.php';

//$autoloader = new \Composer\Autoload\ClassLoader();
//$autoloader->add('Alt68', __DIR__);
//$autoloader->register();

/*
 * Create controller and call it's actual method
 */
$loader = new Loader($_GET, "\\Alt68\\Controllers\\");

$controller = $loader->CreateController($entityManager);
$controller->ExecuteAction();
?>
