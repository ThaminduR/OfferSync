<?php

/*Database connection settings */

//Database Settings
$server = "localhost";
$user = "root";
$password = "1234";
$db = "offersync";

//connect to the database
$Database = new mysqli_connect($server,$user,$password,$db);

//error 
mysqli_report(mysqli_report_error);

