<?php

require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/ViewController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/LoginController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RegisterController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/OfferController.php');

$routes = [
    ['GET','/',function(){ViewController::CreateView('index');}],
    ['GET','/test',function(){ViewController::CreateView('home');}],
    ['GET','/profile',function(){ViewController::CreateView('profile');}],
    ['GET','/Register',function(){ViewController::CreateView('register');}],
    ['GET','/postOffer',function(){ViewController::CreateView('postOffer');}],
    ['GET','/search',function(){ViewController::CreateView('search');}],
    ['POST','/LoginController',function(){LoginController::LogIn();}],
    ['POST','/RegisterController',function(){RegisterController::SignUp();}],
    ['POST','/OfferController_Post',function(){OfferController::PostOffer();}],
    ['POST','/offercontroller_search',function(){OfferController::SearchOffer();}]
]

?>