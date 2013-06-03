<?php

return array(
    'basePath' => 'c:/xammp/htdocs/GoodForNothingBlogEngine/',
    'homeUrl' => 'http://localhost/goodfornothingblogengine/',
    'mainController' => 'SiteController',
    'mainMethod' => 'home',
    'db' => array(
        'dbname' => 'goodfornothingblogengine',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ),
    'smarty' => array(
        'templateDir' => './Alt68/views/',
        'smartyDir' => './vendor/smarty/libs/',
        'compileDir' => './vendor/smarty/templates_c/',
        'cacheDir' => './vendor/smarty/cache/',
        'configDir' => './vendor/smarty/configs/'
    ),
    'adminemail' => array(
        'email' => 'adminemail@gmail.com',
        'password' => 'password'
        )
);
?>
