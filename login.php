<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $db = mysqli_connect("localhost:3306","root","", "1st_db") or die(mysql_error()); //connect to server & DB

    $username = mysqli_real_escape_string($db, $_POST['uname']);
    $password = mysqli_real_escape_string($db, $_POST['psw']);
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
            Print '<script>window.location.assign("login.php");</script>'; //redirects to register page

        }
    }
    if($bool)
    {
        mysqli_query($db, "INSERT INTO users (username, password) VALUES ('$username', '$password')"); //insert values to table user
        Print '<script>alert("Successfully Registered !");</script>';
        Print '<script>window.location.assign("login.html");</script>';

    }
}
?>
