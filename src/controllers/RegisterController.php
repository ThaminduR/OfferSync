<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/Login/RegisterService.php';

class RegisterController
{
    public function SignUp()
    {   
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $password = $_POST['password'];
        
        UserSignUp($username,$firstname,$lastname,$email,$gender,$city,$password);
    }
?>
