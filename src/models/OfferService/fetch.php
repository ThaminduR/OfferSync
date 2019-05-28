<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';


function SearchOffers()
{
	if (isset($_POST["searchText"])) {
		$search = $_POST["searchText"];
		$connection = Database::getDBconnection();
		$output = '';
		$result = $connection->FetchOffer($search);
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
					
				
					<button class="unstyled-button"><li><i class="fas fa-user-circle"></i><span class="ml-2">' . $row["Username"] . '</span></li></button>
				  	
						<input type="hidden"  name="Username" value="' . $row["Username"] . '">
						
						</form>
						<li><i class="fas fa-map-marker-alt"></i> <span class="ml-2">' . $row["Restaurant"] . '</span></li>
						<li><i class="fas fa-map-marker-alt"></i> <span class="ml-2">' . $row["City"] . '</span></li>
						<li><i class="fas fa-building"></i><span class="ml-2">' . $row["Date"] . '</span></li>
						
					</ul>
				</div>
			  
				<div class="verticalLine"></div>
			
							  
				<div class="col-4 ml-3 mr-3 offerd2"  >
					<p>' . $row["Offer"] . '</p>
					<p>Rs.' . $row["Price"] . '</p>
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
		} else {
			echo 'Data Not Found';
		}
	}
}




