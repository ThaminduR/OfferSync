<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/CheckingService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/OfferService/OfferService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Account/UserProfile.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/controllers/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Account/UserProfile.php';

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

    //------------------------------------------ Offers ---------------------------

    //Searching offers from search page
    public function SearchOffers()
    {
        if (isset($_POST['searchText'])) {
            $search = $_POST['searchText'];
            SearchOffers();
        }
    }

    public function DeleteOffers()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            DeleteOff($id);
        }
    }

    //Retrieving offers for certain profile
    public function GetMyOffers()
    {     
        DisplayPosts(); 
    }

    //----------------------------------------Requests ---------------------------------------

    public function SendRequest()
    {
        if (isset($_POST['username'])) {
            $receiver = $_POST['username'];
            $id = $_POST['id'];
            SendRequests($receiver,$id);
        }
    }

    public function AcceptRequest(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            Accept($id);
        }
    }

    public function DeclineRequest(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            Decline($id);
        }
    }
}
