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
                // Login Success
                $_SESSION['user'] = $username;
                header("location:/loggedIn");
                //echo 'Logged In !';
            } else {
                // Login Failed
                echo 'Wrong username or password';
            }
        }
    }        