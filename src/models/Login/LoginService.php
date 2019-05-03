<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/User.php';
function UserLogin($username,$password)
{
    
        $user = new User();
        if (isset($_REQUEST['submit'])) {
            extract($_REQUEST);
            $login = $user->check_login($username, $password);
            //echo $login;
            if ($login) {
                // Login Success
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['logged'] = true;
                setcookie($username,);
                header("location:/User");
                //echo 'Logged In !';
            } else {
                // Login Failed
                echo 'Wrong username or password';
            }
        }
    }        