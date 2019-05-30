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
    public function Reg_User($username, $firstname, $lastname, $email, $gender, $city, $password, $number)
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

            $result1 = $this->database->InsertUserDetail($username, $firstname, $lastname, $gender, $email, $city, $number);

            $result2 = $this->database->InsertLoginData($username, $hpassword, $salt);
            return $result1;
        } else {
            return false;
        }
    }

    //For Profile Edit
    public function Edit_UserPW($password)
    {
        $username = $_COOKIE['Username'];
        //generating salt
        $salt = getSalt(25);
        //hashing pw with salt and pepper
        $hpassword = base64_encode(hash('sha256', "$username.$password.$salt.$this->pepper", true));
        //checking for existing username
        $check1 =  $this->database->FindUserName($username);
        if ($check1) {

            $result1 = $this->database->EditLoginData($username, $hpassword, $salt);
            header("Refresh: 0; url=/Logout");
            $message = "Password Change Successful. Please login to your account";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            header("Refresh: 0; url=/Error");
        }
    }


    public function EditUserMail($email)
    {
        
        $check1 =  $this->database->FindUserName($this->name);
        $check2 = $this->database->FindEmail($email);
        if ($check1 && !($check2)) {
            //register the user ; username is available

            $result1 = $this->database->EditEmail($this->name, $email);
            header("Refresh: 0; url=/Edit");
            $message = "Email Changes Successful.";
            echo "<script type='text/javascript'>alert('$message');</script>";

            
        } else {
            header("Refresh: 0; url=/Error");
        }
    }

    public function EditUserCity($city)
    {
        
        $check1 =  $this->database->FindUserName($this->name);
        if ($check1) {
            //register the user ; username is available

            $result1 = $this->database->EditCity($this->name, $city);
            header("Refresh: 0; url=/Edit");
            $message = "City Changes Successful.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            header("Refresh: 0; url=/Error");
        }
    }


    public function EditUserMobile($number)
    {
       
        $check1 =  $this->database->FindUserName($this->name);
        if ($check1) {
            //register the user ; username is available

            $result1 = $this->database->EditPhone($this->name, $number);
            header("Refresh: 0; url=/Edit");
            $message = "Mobile Number Changes Successful.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            header("Refresh: 0; url=/Error");
        }
    }
}
