<?php

include 'OfferSync/Database/database_config.php' ;

/* Authentication class */
class Auth {
    private $Database;
    private $salt = '';

    //constructor

    function __construct($Database){
        $this->$Database = $Database;
    }

    //functions

    function validateLogin($user,$password){
        if ($stmt == $this->Database->prepare("SELECT * FROM users WHERE username = ? AND password = ?"))
        {
            $stmt->bind_param("ss",$user,$password);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0)
            {
                //success
                $stmt->close();
                return TRUE;
            }
            else
            {
                //fail
                $stmt->close();
                return FALSE;
            }
        }
        else {
            die("ERROR: Could not prepare MYSQLI statement");
        }
    }
    
    function checkLoginStatus()
    {
        if (isset($_SESSION['loggedin']))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function logout()
    {
        session_destroy();
        session_start();
    }
}