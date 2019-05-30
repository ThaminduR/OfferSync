<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/User.php';

function UserSignUp($username, $firstname, $lastname, $email, $gender, $city, $password, $number)
{
    $user = new User($username);
    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $signup = $user->Reg_User($username, $firstname, $lastname, $email, $gender, $city, $password, $number);

        if ($signup) {
            header("Refresh: 0; url=/");
            $message = "Registration Successful. Please login to your account";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            header("Refresh: 0; url=/");
            $message = "Error occured ! Registration Failed. Please retry again";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}

