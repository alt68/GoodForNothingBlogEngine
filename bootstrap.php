<?php

/**
 * bootstrap.php
 *
 * @author alt68
 * @version 1.0
 * @copyright public domain 
 */

/**
 * Found this file at @link http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/Alt68/Entities"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
// database configuration parameters


$conn = require './Alt68/config/config.php';

// obtaining the entity manager

$entityManager = EntityManager::create($conn["db"], $config);
?>