<?php
require_once("./includes/database_config.php");
class LoginGateway 
{
    private function openDb()
    {
        if(!$Database){
            throw new Exception("Connection to the database server failed");
        }
        if(!mysqli_select_db("users")){
            throw new Exception("No users database fond on database server");
        }
    }

    private function closeDb()
    {
        mysqli_close();
    }

    public function getDetails($username)
    {
        $sql1 = "SELECT id from users where username=$username";
        $result = mysqli_query($Database,$sql1);
        $user_data = mysqli_fetch_array($result);
        $count_rows = $result->num_rows;
    }
}