<?php

require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/ViewController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/LoginController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RegisterController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/OfferController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/CheckingController.php');

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
    ['POST','/OfferController_Search',function(){OfferController::SearchOffer();}],
    ['POST','/checkUsername',function(){CheckingController::checkUsername();}],
    ['POST','/checkEmail',function(){CheckingController::checkEmail();}],
    ['POST','/checkPassword',function(){CheckingController::checkPassword();}],
    ['POST','/checkNumber',function(){CheckingController::checkNumber();}]
]

?>