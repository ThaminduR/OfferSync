<?php

require_once("./includes/database_config.php");

class LoginService
{
    private $LoginGateway = NULL;

    public function __construct()
    {
        $this->LoginGateway = new LoginGateway();
    }

    public function getUserDetails()
    {

    }
}
