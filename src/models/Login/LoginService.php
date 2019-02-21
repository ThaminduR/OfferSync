<?php

require_once("./includes/database_config.php");

class LoginService
{
    private $LoginGateway = NULL;

    public function __construct()
    {
        $this->LoginGateway = new LoginGateway();
    }
    
    public function getDetails($username)
    {
        $sql1 = "SELECT id from users where username=$username";
        $result = mysqli_query($Database,$sql1);
        $user_data = mysqli_fetch_array($result);
        $count_rows = $result->num_rows;
    }
}
