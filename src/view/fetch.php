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
			<div class="card row">
                        <div class="col-xs-12 col-sm-12 col-md-2">
                            <ul class="meta-search">
								<li><i class="fas fa-user-circle"></i><span>' . $row["Username"] . '</span></li>
								<li><i class="fas fa-map-marker-alt"></i> <span>' . $row["City"] . '</span></li>
                                <li><i class="fas fa-building"></i><span>' . $row["Date"] . '</span></li>
                                
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
							<h3><a href="#" title="">' . $row["Offer"] . '</p></h3>
							<p>' . $row["Price"] . '</P>-p
                            <span class="plus"><a href="#" title="Send Request"><i class="fas fa-paper-plane"></i></a></span>
                        </div>
                        
					</div>
					<br>
		';
			}
			echo $output;
		} else {
			echo 'Data Not Found';
		}
	}
}
