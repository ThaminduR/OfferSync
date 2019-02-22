<?php

/*Database connection settings */

//Database Settings
$server = "localhost";
$user = "root";
$password = "";
$db = "offersync";

//connect to the database
$Database = mysqli_connect($server,$user,$password,$db);

//error 
//mysqli_report(mysqli_report_error);

