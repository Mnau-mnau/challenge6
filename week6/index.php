<?php

//set error displaying for work version, delete or comment later
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

//defines a document root, home folder to start from, using a magic constant
define('DOCROOT', __DIR__);

//start the bootstrapping process
require_once(DOCROOT.'/system/project/config/bootstrap.php');

//start the application
//we get the name of the controller($_GET['page'], 'home', 'error404')
$controller_name = router::getControllerName();
var_dump($controller_name);

//we load the page file from the controller name
router::runController($controller_name);