<?php
//TODO : implement database library (PDO)
//NOTE : If a function is needed comment it here
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';

class Database{
    private $Database;
    private $server;
    private $user;
    private $password;
    private $dbname;
    private $connection;

    public function __construct(){
        $this->Database = $this;
        $this->server = server;
        $this->user = user;
        $this->password = password;
        $this->dbname = db;
        $this->Connect(); 
    }
    private function Connect(){
        $this->connection = new mysqli($this->server, $this->user, $this->password, $this->dbname);
        if(mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
                exit;
        }
        
    }
    //Insert function - required parameter is an array of the data to to be inserted.
    public function InsertUserDetail($username,$firstname,$lastname,$gender,$email,$city){
        $sql="INSERT INTO users SET username='$username', firstname='$firstname', lastname='$lastname', city='$city', gender='$gender', email='$email'";
        $result = mysqli_query($this->connection,$sql) or die("Data cannot inserted");
        return $result;
    }

    public function InsertLoginData($username,$password,$salt){
        $sql="INSERT INTO userlogin SET username='$username', password='$password', salt='$salt'";
        $result = mysqli_query($this->connection,$sql) or die("Data cannot inserted");
        return $result;
    }
    
    public function FindUserDetail($username){
        $sql="SELECT * FROM userlogin WHERE username='$username'";
        $result = mysqli_query($this->connection,$sql);
        $user_data = mysqli_fetch_array($result);
        return $user_data;    
    }

    public function FindUser($username,$email){
        $sql="SELECT * FROM userlogin WHERE username='$username' or email='$email'";
        $result = mysqli_query($this->connection,$sql);
        if (empty($result)){
            return false;
        } else {
            return true;
        }
    }
}