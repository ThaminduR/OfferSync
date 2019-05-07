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
<<<<<<< HEAD
        // echo "Username: " . $offer["Username"]. "------ Offer: " . $offer["Offer"].  "------ Price: " . $offer["Price"]. "------ Restaurant: " . $offer["Restaurant"]."------ City: " . $offer["City"]."------ Restaurant Branch: " . $offer["Restaurant Branch"];
        // echo "<br>";
        // echo "<br>";

        $username = $offer["Username"];
        $offer =$offer["Offer"];
        $price = $offer["Price"];

        // echo $username,$offer,$price;
    
=======
        echo "Username: " . $offer["Username"]. "     ----- Restaurant: " . $offer["Restaurant"]. "    ----- Offer: " . $offer["Offer"].  "    ----- Price: " . $offer["Price"] ;
        echo "<br>";
>>>>>>> 052bd3ec5892b96c2ac704fab1c51ebec625795f
    }
}