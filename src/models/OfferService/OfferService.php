<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/Offer.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/Database.php';

function Post_Offer($restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender){
    $username = $_COOKIE['Username'];
    $database= Database::getDbConnection();
    $offers = $database->PostOffer($username,$restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender);
    header("location:/");
   
 }
 

function SendRequests($receiver)
{
    $sender = $_COOKIE['Username'];
    $database= Database::getDbConnection();
    $database->InsertRequest($sender,$receiver);
    echo "Request Send !";

}

function SearchOffers()
{
	if (isset($_POST["searchText"])) {
		$search = $_POST["searchText"];
		$connection = Database::getDBconnection(); 
		$result = $connection->FetchOffer($search);
		$count = mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0) {
			require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/SearchResult.php';
		}
	}
}

function GetPosts($username)
{	
		$connection = Database::getDBconnection(); 
		$result = $connection->GetPosts($username);
		$count = mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0) {
			require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/postview.php';
	}
}
