<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/Offer.php';
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/Database.php';

public function Post_(){
    
}

public function Search($restaurant,$$city){
    $database = new Database();
    $offer_details = $database->SearchOffer($restaurant,$city);
    

}