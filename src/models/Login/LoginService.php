<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/User.php';
function UserLogin($username,$password)
{
    session_start();
    
        $user = new User();
        if (isset($_REQUEST['submit'])) {
            extract($_REQUEST);
            $login = $user->check_login($username, $password);
            //echo $login;
            if ($login) {
                // Registration Success
                header("location:index.php");
                //echo 'Logged In !';
            } else {
                // Registration Failed
                echo 'Wrong username or password';
            }
        }
    }        