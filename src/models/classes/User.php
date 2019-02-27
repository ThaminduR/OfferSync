<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/salt.php';





class User
{
    private $database;
    private $_SESSION;
    private $pepper = "#1q2w3e4r5t6@t9h8m7n6d5";

    public function __construct()
    {   

        $this->database = new mysqli(server, user, password, db);
        if(mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
                exit;
        }
    }

    /*** for login ***/
    public function check_login($username, $password){

        
        $sql1="SELECT * FROM users WHERE username='$username'";

        //checking if the username is available in the table
        $result = mysqli_query($this->database,$sql1);
        $user_data = mysqli_fetch_array($result);
        //getting user data from array
        $useremail = $user_data['email'];
        $db_hpassword = $user_data['password'];
        $salt = $user_data['salt'];
        $hpassword = base64_encode(hash('sha256',"$username.$password.$salt.$this->pepper",TRUE));
        
        //compare two hashed passwords
        if (strcmp($hpassword,$db_hpassword) == 0) {
            // this login var will use for the session thing
            //$this->$_SESSION['login'] = TRUE;
            //$this->$_SESSION['id'] = $user_data['id'];
            return true;
        }
        else{
            return false;
        }
    }

    public function Reg_User($username,$firstname,$lastname,$email,$gender,$city,$password){
        $salt = getSalt(25);
        $hpassword = base64_encode(hash('sha256',"$username.$password.$salt.$this->pepper",TRUE));
        
        $sql2="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";
    
        //checking if the username or email is available in db
        $check =  mysqli_query($this->database,$sql2) ;
        
        //if the username is not in db then insert to the table
        if (empty($check)){
            $sql1="INSERT INTO users SET username='$username', password='$hpassword', salt='$salt', firstname='$firstname', lastname='$lastname', city='$city', gender='$gender', email='$email'";
            $result = mysqli_query($this->database,$sql1) or die("Data cannot inserted");
            //mysqli_connect_errno() - put this in die to find error code
            return $result;
        }
        else { return false;}
    }


}