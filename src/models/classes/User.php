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
        $hpassword = hash('sha256',$username.$password.$salt.$pepper);
        echo 'THis is is',$id,$salt;
        
        //compare two hashed passwords
        if (strcmp($hpassword,$db_hpassword) == 0) {
            // this login var will use for the session thing
            $this->$_SESSION['login'] = true;
            $this->$_SESSION['id'] = $user_data['id'];
            return true;
        }
        else{
            return false;
        }
    }

    public function Reg_User($firstname,$lastname,$email,$gender,$city,$password){

        $password = hash('sha256',$password);
        $sql="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";
    
        //checking if the username or email is available in db
        $check =  $this->db->query($sql) ;
        $count_row = $check->num_rows;
    
        //if the username is not in db then insert to the table
        if ($count_row == 0){
            $sql1="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'";
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
            return $result;
        }
        else { return false;}
    }


}