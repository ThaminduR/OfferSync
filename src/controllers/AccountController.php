<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/models/OfferService/fetch.php';



class AccountController{
    public function ViewAccount(){
    if (isset($_POST['Username'])){
    
     DisplayUser($_POST['Username']);
    }

    }
}