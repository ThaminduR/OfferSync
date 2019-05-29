<?php

require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/ViewController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/LoginController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RegisterController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/OfferController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RequestController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/AccountController.php');

$routes = [
    ['GET','/',function(){ViewController::CreateView('index');}],
    ['GET','/Register',function(){ViewController::CreateView('register');}],
    ['GET','/postOffer',function(){ViewController::CreateViewR('postOffer');}],
    ['GET','/searchResult',function(){ViewController::CreateView('search_result');}],
    ['GET','/search',function(){ViewController::CreateView('search');}], 
    ['GET','/requests',function(){ViewController::CreateViewR('requests');}],
    ['GET','/Edit',function(){ViewController::CreateViewR('editProfile');}],
    ['GET','/profile',function(){ViewController::CreateViewR('profile');}],
    ['POST','/LoginController',function(){LoginController::LogIn();}],
    ['GET','/Logout',function(){LoginController::LogOut();}],
    ['GET','/myoffers',function(){RequestController::GetMyOffers();}],
    ['POST','/AccountView',function(){AccountController::ViewAccount();}],
    ['POST','/RegisterController',function(){RegisterController::SignUp();}],
    ['POST','/OfferController_Post',function(){OfferController::PostOffer();}],
    ['POST','/checkUsername',function(){RequestController::checkUsername();}],
    ['POST','/checkEmail',function(){RequestController::checkEmail();}],
    ['POST','/checkPassword',function(){RequestController::checkPassword();}],
    ['POST','/checkNumber',function(){RequestController::checkNumber();}],
    ['POST','/request',function(){RequestController::SendRequest();}],
    ['POST','/fetch',function(){RequestController::SearchOffer();}],
    ['POST','/OfferService',function(){RequestController::SearchOffer();}],
    ['POST','/viewRequests',function(){AccountController::ViewRequets();}]

]

?>