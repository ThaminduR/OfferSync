<?php
//TODO : implement database library (PDO)
//NOTE : If a function is needed comment it here
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';

class Database{
    private $server;
    private $user;
    private $password;
    private $dbname;
    private $connection;
    private $Database;

    public function __construct(){
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
        $username = mysqli_real_escape_string($this->connection,$username);
        $firstname = mysqli_real_escape_string($this->connection,$firstname);
        $lastname = mysqli_real_escape_string($this->connection,$lastname);
        $gender = mysqli_real_escape_string($this->connection,$gender);
        $email = mysqli_real_escape_string($this->connection,$email);
        $city = mysqli_real_escape_string($this->connection,$city);
        $sql="INSERT INTO users SET username='$username', firstname='$firstname', lastname='$lastname', city='$city', gender='$gender', email='$email'";
        $result = mysqli_query($this->connection,$sql) or die("Data cannot inserted");
        return $result;
    }

    public function InsertLoginData($username,$password,$salt){
        $username = mysqli_real_escape_string($this->connection,$username);
        $sql="INSERT INTO userlogin SET username='$username', password='$password', salt='$salt'";
        $result = mysqli_query($this->connection,$sql) or die("Data cannot inserted");
        return $result;
    }
    
    public function FindUserDetail($username){
        $username = mysqli_real_escape_string($this->connection,$username);
        $sql="SELECT * FROM userlogin WHERE username='$username'";
        $result = mysqli_query($this->connection,$sql);
        $user_data = mysqli_fetch_array($result);
        return $user_data;    
    }

    public function FindUser($username,$email){
        $username = mysqli_real_escape_string($this->connection,$username);
        $email = mysqli_real_escape_string($this->connection,$email);
        $sql="SELECT * FROM userlogin WHERE username='$username' or email='$email'";
        $result = mysqli_query($this->connection,$sql);
        if (empty($result)){
            return false;
        } else {
            return true;
        }
    }
    public function SearchOffer($restaurant,$city){
        $restaurant = mysqli_real_escape_string($this->connection,$restaurant);
        $city = mysqli_real_escape_string($this->connection,$city);
        $sql = "SELECT * FROM offers WHERE restaurant ='$restaurant' AND city = '$city'";
        $result = mysqli_query($this->connection,$sql);
        $offers = array();
        while($offer = mysqli_fetch_array($result)){
           $offers[] = $offer;
        }
        return $offers;
    }
}