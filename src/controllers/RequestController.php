<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/CheckingService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/OfferService/fetch.php';
class RequestController
{
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

    public function SearchOffer(){
        if(isset($_POST['searchText'])){
            $search = $_POST['searchText'];
            SearchOffers($search);
        }
    }

    public function SendRequest(){
        if(isset($_POST['username'])){
            echo "<span class='badge badge-danger'>Your password must contain at least 8 characters</span><br>";
        }
    }
}

