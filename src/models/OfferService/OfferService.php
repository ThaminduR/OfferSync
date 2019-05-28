<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/Offer.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/Database.php';

function Post_Offer($restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender){
    $username = $_COOKIE['Username'];
    $database= Database::getDbConnection();
    $offers = $database->PostOffer($username,$restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender);
    header("location:/");
   
 }
 
function Search($restaurant,$city){
    $database = Database::getDbConnection();
    $offers = $database->SearchOffer($restaurant,$city);
    foreach($offers as $offer) {
        echo "Username: " . $offer["Username"]. "     ----- Restaurant: " . $offer["Restaurant"]. "    ----- Offer: " . $offer["Offer"].  "    ----- Price: " . $offer["Price"] ;
        echo "<br>";
    }
}

function SendRequests($receiver)
{
    $sender = $_COOKIE['Username'];
    $database= Database::getDbConnection();
    $database->InsertRequest($sender,$receiver);
    echo "Request Send !";

}