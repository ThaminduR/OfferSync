<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/User.php';

public function UserSignUp($username,$firstname,$lastname,$email,$gender,$city,$password)
{
    $user = new User();
    if(isset($_REQUEST['submit']))
    {
        extract($_REQUEST);
        $signup = $user-> Reg_User($username,$firstname,$lastname,$email,$gender,$city,$password);

        if($signup){
            echo 'Registration Successful !';
        }
        else
        {
            echo 'Registration Failed !';
        }
    }
} 