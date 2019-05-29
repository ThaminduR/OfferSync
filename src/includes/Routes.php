<?php

require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/ViewController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/LoginController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RegisterController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/OfferController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/RequestController.php');
require ($_SERVER['DOCUMENT_ROOT']. '/..'. '/src/Controllers/AccountController.php');

$routes = [
    //Index Page for visitors
    ['GET','/',function(){ViewController::CreateView('index');}],
    
    //------------------------login logout register-----------------------------

    //Register UI
    ['GET','/Register',function(){ViewController::CreateView('register');}],

    //Loggin the user
    ['POST','/LoginController',function(){LoginController::LogIn();}],

    //Logging out the user
    ['GET','/Logout',function(){LoginController::LogOut();}],

    //Registering the user
    ['POST','/RegisterController',function(){RegisterController::SignUp();}],

    //---------------------------account related---------------------------------

    //Get the posted offer by user
    ['GET','/myoffers',function(){RequestController::GetMyOffers();}],

    //display a certain user
    ['POST','/AccountView',function(){AccountController::ViewAccount();}],

    //Edit Profile UI
    ['GET','/Edit',function(){ViewController::CreateViewR('editProfile');}],

    //Profile UI
    ['GET','/profile',function(){ViewController::CreateViewR('profile');}],

    //----------------------------offers related---------------------------------

    //Offer search UI
    ['GET','/search',function(){ViewController::CreateView('search');}], 

    //Posting offer
    ['GET','/postOffer',function(){ViewController::CreateViewR('postOffer');}],

    //Posting an offer
    ['POST','/OfferController_Post',function(){OfferController::PostOffer();}],

    //Retrieve the offer related to keyword
    ['POST','/fetch',function(){RequestController::SearchOffers();}],

    //-------------------------------Validation----------------------------------

    ['POST','/checkUsername',function(){RequestController::checkUsername();}],
    ['POST','/checkEmail',function(){RequestController::checkEmail();}],
    ['POST','/checkPassword',function(){RequestController::checkPassword();}],
    ['POST','/checkNumber',function(){RequestController::checkNumber();}],

    //----------------------------requests related-------------------------------

    //Requests UI
    ['GET','/requests',function(){ViewController::CreateViewR('requests');}],

    //Sending a request
    ['POST','/request',function(){RequestController::SendRequest();}],

    //Displaying incoming requests to user
    ['POST','/viewRequests',function(){AccountController::ViewRequets();}]

    
    

]

?>