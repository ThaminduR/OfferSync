<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/Offer.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/Database.php';

function Post_Offer($restaurant,$offerTitle,$offerDescription,$city,$gender){
    $database=new Database();
    $offers = $database->PostOffer($restaurant,$offerTitle,$offerDescription,$city,$gender);
    header("location:/");
   
 }
 
function Search($restaurant,$city){
    $database = new Database();
    $offers = $database->SearchOffer($restaurant,$city);
    foreach($offers as $offer) {
        // echo "Username: " . $offer["Username"]. "------ Offer: " . $offer["Offer"].  "------ Price: " . $offer["Price"]. "------ Restaurant: " . $offer["Restaurant"]."------ City: " . $offer["City"]."------ Restaurant Branch: " . $offer["Restaurant Branch"];
        // echo "<br>";
        // echo "<br>";

        $username = $offer["Username"];
        $offer =$offer["Offer"];
        $price = $offer["Price"];

        // echo $username,$offer,$price;
    
    }
}