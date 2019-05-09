<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';

class CheckingController
{
    public function CheckUsername()
    {
        $database = Database::getDbConnection();
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            if ($username == '') {
                return;
            }
            $temp = $database->FindUserName($username);
            if ($temp) {
                echo "<span class='status-not-available text-monospace'> Username Not Available.</span>";
            } else {
                echo "<span class='status-available text-monospace'> Username Available.</span>";
            }
        }
    }

    public function CheckEmail()
    {
        $database = Database::getDbConnection();
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if ($email == '') {
                return;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<span class='status-not-available text-monospace'>Enter a valid email address !</span>";
                return;
            }
            $temp = $database->FindEmail($email);
            if ($temp) {
                echo "<span class='status-not-available text-monospace'>Email already exists.</span>";
            }
        }
    }
    public function CheckPassword()
    {
        if (isset($_POST['password'])) {
            $password = $_POST['password'];

            if (strlen($password) <= '8') {
                echo "<span class='status-not-available text-monospace'>Your Password Must Contain At Least 8 Characters!<br></span>";
            }
            if (!preg_match("#[0-9]+#", $password)) {
                echo "<span class='status-available text-monospace'>Your Password Must Contain At Least 1 Number!<br></span>";
            }
            if (!preg_match("#[A-Z]+#", $password)) {
                echo "<span class='status-available text-monospace'>Your Password Must Contain At Least 1 Capital Letter!<br></span>";
            }
            if (!preg_match("#[a-z]+#", $password)) {
                echo "<span class='status-available text-monospace'>Your Password Must Contain At Least 1 Lowercase Letter!<br></span>";
            }
        }
    }
}
