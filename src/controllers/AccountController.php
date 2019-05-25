<?php
class AccountController{
    public function ViewAccount(){
    if (isset($_POST['Username'])){
        header("location:/profilecard");
        // echo $_POST['Username'] ;
    }

    }
}