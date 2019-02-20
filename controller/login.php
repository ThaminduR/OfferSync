<?php

if(isset($_POST['loginbtn']))
{
    include_once 'database_config.php';

}
else
{
    header("Location: ../login.html");
    exit();
}