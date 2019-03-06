<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/Login/LoginService.php';

class LoginController
{
    public function LogIn()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        UserLogin($username,$password);
    }
}