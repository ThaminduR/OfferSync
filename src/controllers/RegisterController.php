<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/Login/RegisterService.php';

class RegisterController
{
    public function SignUp()
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];


        UserSignUp($username,$password);
    }
?>
