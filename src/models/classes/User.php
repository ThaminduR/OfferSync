<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/salt.php';
$pepper = "#1q2w3e4r5t6@t9h8m7n6d5";


class User
{
    private $database;
    private $_SESSION;

    public function __construct()
    {   
        $this->database = new mysqli(server, user, password, db);
        if(mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
                exit;
        }
    }

    /*** for login process ***/
    public function check_login($username, $password){

        
        $sql1="SELECT id,hpassword,salt from users WHERE username='$username'";

        //checking if the username is available in the table
        $result = mysqli_query($this->database,$sql1);
        $user_data = mysqli_fetch_array($result);
        
        //getting user data from array
        $id = $user_data['id'];
        $db_hpassword = $user_data['hpassword'];
        $salt = $user_data['salt'];
        $hpassword = sha256($username,$password,$salt,$pepper);
        
        //compare two hashed passwords
        if (strcmp($hpassword,$db_hpassword) == 0) {
            // this login var will use for the session thing
            $this->_SESSION['login'] = true;
            $this->_SESSION['id'] = $user_data['id'];
            return true;
        }
        else{
            return false;
        }
    }


}