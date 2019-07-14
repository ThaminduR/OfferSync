<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Account/UserProfile.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/controllers/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/classes/User.php';



class AccountController extends Controller
{

    public function ViewAccount()
    {
        if (isset($_POST['Username'])) {
            DisplayUser($_POST['Username']);
        }
    }

    public function ResetPw()
    {
        if (isset($_POST['Username'])) {
            ResetPw();
        }
    }

    public function MyProfile()
    {
        if (isset($_POST['Username'])) {
            ViewMyProfile($_POST['Username']);
        }
    }

    public function ViewContact()
    {
        if (isset($_POST['Username'])) {
            DisplayContact($_POST['Username']);
        }
    }

    public function ViewRequests()
    {
        DisplayRequests();
    }

    public function MyAccRequests()
    {
        DisplayMyAccReq();
    }

    public function RequestsIAcc()
    {
        DisplayReqIAcc();
     }

     public function SentReq()
    {
        DisplaySentReq();
     }

    public function EditEmail(){

        $username = $_COOKIE['Username'];
        $user = new User($username);

        $email = $_POST['email'];

        $user->EditUserMail($email);
        
        

    }

    public function EditPassword(){
        $username = $_COOKIE['Username'];
        $user = new User($username);
        $password = $_POST['password'];
        $user->Edit_UserPW($password);

    }

    public function EditCity(){
        $username = $_COOKIE['Username'];
        $user = new User($username);
        $city = $_POST['city'];
        $user->EditUserCity($city);

    }

    public function EditNumber(){
        $username = $_COOKIE['Username'];
        $user = new User($username);
        $number = $_POST['number'];
        $user->EditUserMobile($number);

    }
}
