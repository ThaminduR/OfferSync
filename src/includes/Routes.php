<?php

require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/ViewController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/LoginController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RegisterController.php');

$routes = [
    ['GET','/',function(){ViewController::CreateView('index');}],
    ['GET','/index.php',function(){ViewController::CreateView('index');}],
    ['GET','/Login',function(){ViewController::CreateView('Login');}],
    ['GET','/loggedIn',function(){ViewController::CreateView('loggedIn');}],
    ['GET','/Register',function(){ViewController::CreateView('Register');}],
    ['GET','/postOffer',function(){ViewController::CreateView('postOffer');}],
    ['GET','/search',function(){ViewController::CreateView('search');}],
    ['POST','/LoginController',function(){LoginController::LogIn();}],
    ['POST','/RegisterController',function(){RegisterController::SignUp();}]
]

?>