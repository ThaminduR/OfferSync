<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $db = mysqli_connect("localhost:3306","root","", "1st_db") or die(mysql_error()); //connect to server & DB

    $username = mysqli_real_escape_string($db, $_POST['uname']);
    $password = mysqli_real_escape_string($db, $_POST['psw']);