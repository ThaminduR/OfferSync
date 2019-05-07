<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/User.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/Session.php';

function UserLogin($username,$password)
{   
        $user = new User();
        if (isset($_REQUEST['submit'])) {
            extract($_REQUEST);
            $login = $user->check_login($username, $password);
            //echo $login;
            if ($login) {
                // Login Success
                $ip =$_SERVER['REMOTE_ADDR'];
                $agent =$_SERVER['HTTP_USER_AGENT'];
                $data = base64_encode(hash('sha256',$ip.$agent,true));
                $data = $ip.$agent;
                $Session = new Session($user);
                $Session->_write($username,$data);
                setcookie('login_details',$username,86400);
                header("location:/User");
                //echo 'Logged In !';
            } else {
                // Login Failed
                echo 'Wrong username or password';
            }
        }
    }

function UserLogout($username){
    $user = new User();
    $session = new Session($user);
    $session->_destroy($username);
}