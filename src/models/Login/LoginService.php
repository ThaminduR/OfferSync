<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/Session.php';

function UserLogin($username, $password)
{
    $user = new User($username);
    $login = $user->check_login($username, $password);
    // Login Success
    if ($login) {
        setcookie('Username', $username);
        // Session data
        $ip = $_SERVER['REMOTE_ADDR'];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        //hashng data for security measures
        $data = base64_encode(hash('sha256', $ip . $agent, true));
        $session = new Session();
        session_start();
        //adding data to database
        $_SESSION["data"] = $data;
        //session_write_close();

        //redirecting to the user page
        echo "Login Success !";
    } else {
        // Login Failed\
        echo "Invalid Credentials !";
    }
}


function UserLogout()
{
    //to logout from the system
    $session = new Session();
    session_start();
    session_destroy();
    //destroying the session stored in the db
}
