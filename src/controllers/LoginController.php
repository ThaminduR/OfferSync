<?php
require_once '/../models/Login/LoginService.php';

$pepper = "#1l2v3y45@"

class LoginController
{
    private $LoginModel;

    public function __construct()
    {
        $this->LoginModel = new LoginService();
    }
    public static function GetData(){
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        // username and password sent from Form
        $username = mysqli_real_escape_string($obj->conn,$_POST['username']); 
        $temppassword = mysqli_real_escape_string($obj->conn,$_POST['password']); 
        $password = sha256($username,$temppassword,$pepper);
        
        return $username,$password;
        }
    }
}