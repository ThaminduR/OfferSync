<?php
require_once '/../models/Login/LoginService.php';

$pepper = "#1l2v3y45@"

class LoginController
{
    private $LoginModel;

    public function __construct()
    {
        $this->LoginModel = new LoginService();
    }
}