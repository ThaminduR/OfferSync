<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/salt.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/Session.php';



class User
{
    private $database;
    private $name;
    //pepper is to improve the security
    private $pepper = "#1q2w3e4r5t6@t9h8m7n6d5";

    public function __construct($username)
    {
        $this->database = Database::getDbConnection();
        $this->name = $username;
    }

    //For Login
    public function check_login($username, $password)
    {
        //retrieving the user data from db ; if available
        $user_data = $this->database->FindUserDetail($username);
        $db_hpassword = $user_data['password'];
        $salt = $user_data['salt'];
        $hpassword = base64_encode(hash('sha256', "$username.$password.$salt.$this->pepper", true));
        //comparing the hashed data
        if (strcmp($hpassword, $db_hpassword) == 0) {
            //login details confirmed
            return true;
        } else {
            //login failed
            return false;
        }
    }
    //For Registration
    public function Reg_User($username, $firstname, $lastname, $email, $gender, $city, $password,$number)
    {
        //generating salt
        $salt = getSalt(25);
        //hashing pw with salt and pepper
        $hpassword = base64_encode(hash('sha256', "$username.$password.$salt.$this->pepper", true));
        //checking for existing username
        $check1 =  $this->database->FindUserName($username);
        $check2 = $this->database->FindEmail($email);
        if (!($check1 && $check2)) {
            //register the user ; username is available
            
            $result1 = $this->database->InsertUserDetail($username, $firstname, $lastname, $gender, $email, $city,$number);
            
            $result2 = $this->database->InsertLoginData($username, $hpassword, $salt);
            return $result1;
        } else {
            return false;
        }
    }
}

