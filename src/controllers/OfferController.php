<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/OfferService/OfferService.php';
class OfferController {
    public function PostOffer(){
        $restaurant = $_POST['Restaurant'];
        $offer=$_POST['Offer'];
        $price=$_POST['Price'];
        $city = $_POST['City'];
        $restaurantbranch = $_POST['RestaurantBranch'];
        $date= $_POST['Date'];
        $gender = null;
        if (isset($_POST['GenderM'])){
            $gender='Male';
        }
        if (isset($_POST['GenderF'])){
            $gender='Female';
        }
        
        Post_Offer($restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender);
 
    }
 

    public function SearchOffer(){
        
        $restaurant = $_POST['Restaurant'];
        $city = $_POST['City'];
        Search($restaurant,$city);
        // echo $username,$offer,$price;
        header("location:/searchResult");

    }
}


