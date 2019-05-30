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
    ['POST','/myoffers',function(){RequestController::GetMyOffers();}],
   
    //display a certain user
    ['POST','/AccountView',function(){AccountController::ViewAccount();}],

    //Display a certain user's contact detials
    ['POST','/ContactView',function(){AccountController::ViewContact();}],

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

    //My Offers UI
    ['GET','/posts',function(){ViewController::CreateViewR('posts');}],

    //Sending a request
    ['POST','/request',function(){RequestController::SendRequest();}],

    //Accept request
    ['POST','/accept',function(){RequestController::AcceptRequest();}],

    //Decline request
    ['POST','/decline',function(){RequestController::DeclineRequest();}],

    //Displaying incoming requests to user
    ['POST','/viewRequests',function(){AccountController::ViewRequests();}],

    //Displaying requests accpeted by user
    ['POST','/RequestsIAcc',function(){AccountController::RequestsIAcc();}],

    //Displaying accepted requetst of user
    ['POST','/MyAccRequests',function(){AccountController::MyAccRequests();}],

    //Displaying sent requests of user
    ['POST','/SentReq',function(){AccountController::SentReq();}],

    //Displaying sent requests of user
    ['GET','/Error',function(){ViewController::CreateView('ErrorPage');}]

    
    

]

?>