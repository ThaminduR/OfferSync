<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Account/UserProfile.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/controllers/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/Account/User.php';



class AccountController extends Controller
{
    public function ViewAccount()
    {
        if (isset($_POST['Username'])) {
            DisplayUser($_POST['Username']);
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


    public function EditEmail(){
        $email = $_POST['email'];

        EditUserMail($email);
        
        

    }

    public function EditPassword(){
        $password = $_POST['password'];
        Edit_UserPW($password);

    }

    public function EditCity(){
        $city = $_POST['city'];
        EditUserCity($city);

    }

    public function EditNumber(){
        $number = $_POST['number'];
        EditUserMobile($number);

    }
}
