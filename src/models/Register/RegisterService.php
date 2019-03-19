<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/User.php';

function UserSignUp($username,$firstname,$lastname,$email,$gender,$city,$password,$number)
{
    $user = new User();
    if(isset($_REQUEST['submit']))
    {
        extract($_REQUEST);
        $signup = $user-> Reg_User($username,$firstname,$lastname,$email,$gender,$city,$password,$number);

        if($signup){
            echo 'Registration Successful !';
        }
        else
        {
            echo 'Registration Failed !';
        }
    }
}

?>