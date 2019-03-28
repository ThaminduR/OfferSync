<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/Offer.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/Database.php';

function Post_Offer($restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender){
    $database=new Database();
    $offers = $database->PostOffer($restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender);
    header("location:/");
   
 }
 
function Search($restaurant,$city){
    $database = new Database();
    $offers = $database->SearchOffer($restaurant,$city);
    foreach($offers as $offer) {
        echo "Username: " . $offer["Username"]. "     ----- Restaurant: " . $offer["Restaurant"]. "    ----- Offer: " . $offer["Offer"].  "    ----- Price: " . $offer["Price"] ;
        echo "<br>";
    }
}