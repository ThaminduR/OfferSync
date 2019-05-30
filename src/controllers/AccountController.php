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

    }

    public function EditPassword(){

    }

    public function EditCity(){

    }

    public function EditNumber(){

    }
}
