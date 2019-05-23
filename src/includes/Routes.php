<?php

require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/ViewController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/LoginController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RegisterController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/OfferController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RequestController.php');

$routes = [
    ['GET','/',function(){ViewController::CreateView('index');}],
    ['GET','/Register',function(){ViewController::CreateView('register');}],
    ['GET','/postOffer',function(){ViewController::CreateViewR('postOffer');}],
    ['GET','/searchResult',function(){ViewController::CreateView('search_result');}],
    ['GET','/search',function(){ViewController::CreateView('search');}],
    ['GET','/profile',function(){ViewController::CreateViewR('profile');}],
    ['GET','/Logout',function(){LoginController::LogOut();}],
    ['POST','/LoginController',function(){LoginController::LogIn();}],
    ['POST','/RegisterController',function(){RegisterController::SignUp();}],
    ['POST','/OfferController_Post',function(){OfferController::PostOffer();}],
    ['POST','/checkUsername',function(){RequestController::checkUsername();}],
    ['POST','/checkEmail',function(){RequestController::checkEmail();}],
    ['POST','/checkPassword',function(){RequestController::checkPassword();}],
    ['POST','/checkNumber',function(){RequestController::checkNumber();}],
    ['POST','/request',function(){RequestController::SendRequest();}],
    ['POST','/fetch',function(){RequestController::SearchOffer();}]
]

?>