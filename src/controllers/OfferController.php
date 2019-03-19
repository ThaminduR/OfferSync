<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/OfferService/OfferService.php';
class OfferController {
    public function PostOffer(){
        $restaurant = $_POST['Restaurant'];
        $offerTitle=$_POST['Title'];
        $offerDesc=$_POST['Description'];
        $city = $_POST['City'];
        $gender=$_POST['Gender'];
        Post_Offer($restaurant,$offerTitle,$offerDesc,$city,$gender);
 
    }
 

    public function SearchOffer(){
        $restaurant = $_POST['Restaurant'];
        $city = $_POST['City'];
        Search($restaurant,$city);

    }
}