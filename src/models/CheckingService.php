<?php

function ValidateUsername($username)
{
    $database = Database::getDbConnection();
    if ($username == '') {
        return;
    }
    if (strlen($username) <= '3') {
        echo "<span class='badge badge-danger' >Username must be atleast 4 characters long</span>";
        return;
    }
    $temp = $database->FindUserName($username);
    if ($temp) {
        echo "<span class='badge badge-danger' >Username is not available</span>";
    } else {
        echo "<span class='badge badge-success'>Looks good!</span>";
    }
}

function ValidateEmail($email)
{
    $database = Database::getDbConnection();
    if ($email == '') {
        return;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='badge badge-danger'>Provide a valid email address</span>";
        return;
    }
    $temp = $database->FindEmail($email);
    if ($temp) {
        echo "<span class='badge badge-danger'>Email already in use</span>";
    } else {
        echo "<span class='badge badge-success'>Looks good!</span>";
    }
}

function ValidateNumber($number)
{
    if ($number == '') {
        return;
    }
    if (!is_numeric($number)) {
        echo "<span class='badge badge-danger'>Enter a valid phone number</span>";
        return;
    }
    if (strlen($number) != '10') {
        echo "<span class='badge badge-danger'>Enter a 10 digit phone number<br></span>";
    } else {
        echo "<span class='badge badge-success'>Looks good!</span>";
    }
}

function ValidatePassword($password)
{
    if ($password == '') {
        return;
    }
    if (strlen($password) <= '8') {
        $len = false;
        echo "<span class='badge badge-danger'>Your password must contain at least 8 characters</span><br>";
    } else {
        $len = true;
    }
    if (!preg_match("#[0-9]+#", $password)) {
        $num = false;
        echo "<span class='badge badge-danger'>Your password must contain at least 1 number<br></span><br>";
    } else {
        $num = true;
    }
    if (!preg_match("#[A-Z]+#", $password)) {
        $cap = false;
        echo "<span class='badge badge-danger'>Your password must contain at least 1 uppercase letter</span><br>";
    } else {
        $cap = true;
    }
    if (!preg_match("#[a-z]+#", $password)) {
        $sim = false;
        echo "<span class='badge badge-danger'>Your password must contain at least 1 lowercase letter<br></span><br>";
    } else {
        $sim = true;
    }
    if ($len && $num && $cap && $sim) {
        echo "<span class='badge badge-success'>Looks good!</span>";
    }
}

function resetcheck($username, $email)
{
    $database = Database::getDbConnection();
    $tmp = $database->CheckUserandEmail($username, $email);
    if ($tmp) {
        $username = $_COOKIE['Username'];
        $result = $database->ResetPw($username);
        echo "Check your email for new password";
    } else {
        echo "Invalid Username or Password";
    }
}
