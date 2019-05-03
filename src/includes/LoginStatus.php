<?php
function CheckLoginStatus()
{
    $database = new Database();
    $username = $_COOKIE['login_details'];
    $logged = false;
    if (!empty($username)) {
        $result = $database->SearchSession($username);
        if (!empty($result)) {
            $logged = true;
        }
    }
    return $logged;
}
