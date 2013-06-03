<?php

/**
 * cli-config.php
 *
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

require_once "bootstrap.php";

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));
?>
