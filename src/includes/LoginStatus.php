<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Login/LoginService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/Session.php';


function CheckLoginStatus()
{

    $logged = false;
    if (isset($_COOKIE['PHPSESSID'])) {
        //retrieve data from cookie
        $id = $_COOKIE['PHPSESSID'];
        //getting relevant data
        $ip = $_SERVER['REMOTE_ADDR'];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if (!empty($id)) {
            $session = new Session();
            session_start();
            $data = null;
            //searching db for the session with the given id
            if (isset($_SESSION["data"])) {
                $data = $_SESSION["data"];
            }
            $tmp = base64_encode(hash('sha256', $ip . $agent, true));
            //comparing the session data from db and cookie
            if (strcmp($data, $tmp) == 0) {
                $logged = true;
            }
        }
    }
    return $logged;
}
