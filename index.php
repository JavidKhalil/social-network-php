<?php 

//start session
session_start(); 

//Include config 
require('config.php');

//Require related files 
require('classes/Message.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('constrollers/share.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
$controller->executeAction();
} 