<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/OfferService/OfferService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/controllers/Controller.php';

class OfferController extends Controller{
    public function PostOffer(){
        $restaurant = $_POST['Restaurant'];
        $offer=$_POST['Offer'];
        $price=$_POST['Price'];
        $city = $_POST['City'];
        $restaurantbranch = $_POST['RestaurantBranch'];
        $date= $_POST['Date'];
        $gender = $_POST['Gender'];
        
        Post_Offer($restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender);
 
    }
 

    public function SearchOffer1(){
        
        $restaurant = $_POST['Restaurant'];
        $city = $_POST['City'];
        Search($restaurant,$city);
        // echo $username,$offer,$price;
        header("location:/searchResult");

    }
}


