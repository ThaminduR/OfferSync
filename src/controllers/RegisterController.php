<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/Register/RegisterService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/controllers/Controller.php';

class RegisterController extends Controller
{
    public function SignUp()
    {   
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $number = $_POST['number'];
        $password = $_POST['password'];
        UserSignUp($username,$firstname,$lastname,$email,$gender,$city,$password,$number);
    }
}

?>
