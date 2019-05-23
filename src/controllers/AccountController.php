<?php
class AccountController{
    public function ViewAccount(){
    if (isset($_POST['Username'])){
        echo $_POST['Username'] ;
    }

    }
}