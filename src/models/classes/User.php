<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/salt.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';


class User
{
    private $database;
    private $_SESSION;
    private $pepper = "#1q2w3e4r5t6@t9h8m7n6d5";

    public function __construct()
    {
        $this->database = new Database();
    }

    //For Login
    public function check_login($username, $password)
    {
        $user_data = $this->database->FindUserDetail($username);
        $db_hpassword = $user_data['password'];
        $salt = $user_data['salt'];
        $hpassword = base64_encode(hash('sha256', "$username.$password.$salt.$this->pepper", true));
        if (strcmp($hpassword, $db_hpassword) == 0) {
            return true;
        } else {
            return false;
        }
    }
    //For Registration
    public function Reg_User($username, $firstname, $lastname, $email, $gender, $city, $password,$number)
    {
        $salt = getSalt(25);
        $hpassword = base64_encode(hash('sha256', "$username.$password.$salt.$this->pepper", true));
        $check =  $this->database->FindUser($username, $email);
        echo $check;
        if (!($check)) {
            $result1 = $this->database->InsertUserDetail($username, $firstname, $lastname, $gender, $email, $city,$number);
            $result2 = $this->database->InsertLoginData($username, $hpassword, $salt);
            return $result1;
        } else {
            return false;
        }
    }
}

