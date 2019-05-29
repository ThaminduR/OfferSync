<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/CheckingService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/OfferService/OfferService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/controllers/Controller.php';

class RequestController extends Controller
{

    //------------------------------------------- Validation ---------------------
    public function CheckUsername()
    {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            ValidateUsername($username);
        }
    }

    public function CheckEmail()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            ValidateEmail($email);
        }
    }
    public function CheckPassword()
    {
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            ValidatePassword($password);
        }
    }

    public function checkNumber()
    {
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            ValidateNumber($number);
        }
    }

    //------------------------------------------ Offers Searching ---------------------------

    //Searching offers from search page
    public function SearchOffers()
    {
        if (isset($_POST['searchText'])) {
            $search = $_POST['searchText'];
            SearchOffers();
        }
    }

    //Retrieving offers for certain profile
    public function GetMyOffers()
    {   
        $username = $_COOKIE['Username'];
        GetPosts($username);
        
    }

    //----------------------------------------Requests ---------------------------------------

    
    public function SendRequest()
    {
        if (isset($_POST['username'])) {
            $receiver = $_POST['username'];
            SendRequests($receiver);
        }
    }
}
