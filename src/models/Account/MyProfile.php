<?php

function DisplayUser($username)
{
    $connection = Database::getDBconnection();
    $output = '';
    $user = $connection->FetchUser($username);

    $output .= '';


    echo $output;
}

function DisplayPosts()
{
    $connection = Database::getDBconnection();
    $output = '';
    $username = $_COOKIE['Username'];
    $result = $connection->GetPosts($username);
    $count = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '';
        }
        echo $output;
    } else {
        echo '0';
    }
}