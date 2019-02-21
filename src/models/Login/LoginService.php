<?php

require_once "/../../includes/database_config.php";
require_once "./users.php";

class LoginService
{
    public function getData(){
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        // username and password sent from Form
        $username = mysqli_real_escape_string($obj->conn,$_POST['username']); 
        $temppassword = mysqli_real_escape_string($obj->conn,$_POST['password']); 
        $password = sha256($username,$temppassword,$pepper);
        
        return $username,$password;
        }
    }
  
    public function getDetails($username)
    {
        $sql1 = "SELECT id from users where username=$username";
        $result = mysqli_query($Database,$sql1);
        $user_data = mysqli_fetch_array($result);
        $count_rows = $result->num_rows;
    }
}
