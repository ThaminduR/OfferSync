<?php
require $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/models/classes/Offer.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/Database.php';

function Post_Offer($restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender){
    $username = $_COOKIE['Username'];
    $database= Database::getDbConnection();
    $offers = $database->PostOffer($username,$restaurant,$offer,$price,$restaurantbranch,$date,$city,$gender);
    header("location:/");
   
 }
 
function GetPosts($username){
 
    $database = Database::getDbConnection();
    $offers = $database->GetPosts($username);
    require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/view/postview.php';
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

function BringOffers()
{
		$search = $_COOKIE['Username'];
		$connection = Database::getDBconnection();
		$output = '';
		$result = $connection->GetOffers($search);
		$count = mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0) {
			$output .= '<hgroup class="mb20">
			<h3 class="lead text-white"><strong class="text-white">' . $count . '</strong> results were found for the search for
				<strong class="text-white">' . $search . '</strong></h3>
		</hgroup>
		<section class="col-xs-12 col-sm-6 col-md-12">';

			while ($row = mysqli_fetch_array($result)) {
				$output .= '
				<article class="row">
                    
				<div class="col-4 offerdetails">
					<ul >
					<form id="form1" action="/AccountView" method="POST">
					

						
						</form>
						<li class="mb-2 mt-2"><i class="fas fa-map-marker-alt"></i> <span class="ml-2">' . $row["City"] . '</span></li>		
						<li><i class="fas fa-building"></i><span class="ml-2">' . $row["Date"] . '</span></li>
						
					</ul>
				</div>
			  
				<div class="verticalLine"></div>
			
							  
				<div class="col-4 ml-3 mr-3 offerd2"  >
					<p><i class="fas fa-map-marker-alt mr-2"></i>' . $row["Restaurant"] . '</p>
					<p><i class="fas fa-utensils mr-2"></i>' . $row["Offer"] . '</p>
					<p><i class="fas fa-hand-holding-usd mr-2"></i>Rs.' . $row["Price"] . '</p>
				</div>

				<div class="verticalLine"></div>
		  
				 <div class="col-4 ml-5  reqbtn">
						<a class="btn btn-outline-black like" style="cursor: pointer;" onclick="SendRequest(\'' . $row["Username"] . '\')">Send Request
						<i class="far fa-paper-plane ml-2"></i></a>
				</div>
	   </article>     
					<br>
		';
			}
			echo $output;
		 
	}
}
