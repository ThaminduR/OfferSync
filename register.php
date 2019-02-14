<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $db = mysqli_connect("localhost:3306","root","", "1st_db") or die(mysql_error()); //connect to server & DB
    class user{
        private var $firstname;
        private var $lastname;
        private var $city;
        private var $username;
        private var $password;

        function __construct($first_name,$last_name,$_city,$uname,$psw){
            $this->firstname = $first_name;
            $this->lastname = $last_name;
            $this->city = $_city;
            $this->username = $uname;
            $this->password = $psw;

        function set_city($new_city){
            $this->city = $new_city;
        }

        }


    }
    $first_name = mysqli_real_escape_string($db, $_POST['firstname']);
    $last_name = mysqli_real_escape_string($db, $_POST['lastname']);
    $_city = mysqli_real_escape_string($db, $_POST['city']);
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    $psw = mysqli_real_escape_string($db, $_POST['password']);

    
    $bool = true;

    //mysql_select_db() or die("Can't connect to databse"); //connect to databse
    $query = mysqli_query($db, "Select * from users"); //query the user table
    while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) //display all rows from query
    {
        $table_user = $row['username']; //first username row is passed to the variable
        if($username==$table_user)
        {
            $bool = false;
            Print '<script>alert("Username has been taken !");</script>'; //prompt the user
            Print '<script>window.location.assign("register.html");</script>'; //redirects to register page

        }
    }
    if($bool)
    {
        mysqli_query($db, "INSERT INTO users (username, password) VALUES ('$username', '$password')"); //insert values to table user
        Print '<script>alert("Successfully Registered !");</script>';
        Print '<script>window.location.assign("index.html");</script>';

    }
}
?>
