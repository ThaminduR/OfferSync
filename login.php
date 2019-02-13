<?php
if($_SERVER["REQUEST_METHOD"]=="post"){
    $username = mysql_real_escape_string($_POST['uname']);
    $password = mysql_real_escape_string($_POST['psw']);
    $bool = true;

    mysql_connect("localhost","root","") or die(mysql_error()); //connect to server
    mysql_select_db("1st_db") or die("Can't connect to databse"); //connect to databse
    $query = mysql_query("Select * from users"); //query the user table
    while($row = mysql_fetch_array($query)) //display all rows from query
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
        mysql_query("INSERT INTO users (username, password) VALUES ('$username'.'$password')"); //insert values to table user
        Print '<script>alert("Successfully Registered !");</script>';
        Print '<script>window.location.assign("register.html");</script>';

    }
}
?>
