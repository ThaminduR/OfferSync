<?php

require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/ViewController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/LoginController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RegisterController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/OfferController.php');

$routes = [
    ['GET','/',function(){ViewController::CreateView('index');}],
    ['GET','/User',function(){ViewController::CreateViewR('logged');}],
    ['GET','/Profile',function(){ViewController::CreateViewR('profile');}],
    ['GET','/Register',function(){ViewController::CreateView('register');}],
    ['GET','/postOffer',function(){ViewController::CreateViewR('postOffer');}],
    ['GET','/searchResult',function(){ViewController::CreateView('search_result');}],
    ['GET','/search',function(){ViewController::CreateView('search');}],
    ['GET','/Logout',function(){LoginController::LogOut();}],
    ['POST','/LoginController',function(){LoginController::LogIn();}],
    ['POST','/RegisterController',function(){RegisterController::SignUp();}],
    ['POST','/OfferController_Post',function(){OfferController::PostOffer();}],
    ['POST','/OfferController_Search',function(){OfferController::SearchOffer();}]
]

?>