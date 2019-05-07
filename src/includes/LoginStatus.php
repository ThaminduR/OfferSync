<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/Login/LoginService.php';

function CheckLoginStatus()
{
    $database = new Database();
    $logged = false;
    if (isset($_COOKIE['login_details'])) {
        $username = $_COOKIE['login_details'];
        if (!empty($username)) {
            $result = $database->SearchSession($username);
            if (!empty($result)) {
                $logged = true;
            }
        }
    }
    return $logged;
}
