<?php

class LoginController
{
    public static function GetData(){
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        // username and password sent from Form
        $emailusername = mysqli_real_escape_string($obj->conn,$_POST['emailusername']); 
        $password = mysqli_real_escape_string($obj->conn,$_POST['password']); 
        $password = sha256($password);

        }
    }
}