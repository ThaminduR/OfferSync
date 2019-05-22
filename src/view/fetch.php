<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';


function SearchOffers()
{

if(isset($_POST["search_text"]))
{
    $search = $_POST["search_text"];
    $connection=Database::getDBconnection();

    $offers=$connection->FetchOffer($search);


}

	{
		$output .= '
			<tr>
				<td>'.$row["Username"].'</td>
				<td>'.$row["Restaurant"].'</td>
				<td>'.$row["City"].'</td>
				<td>'.$row["Price"].'</td>
				<td>'.$row["Date"].'</td>
			</tr>
		';
	}
	echo $output;
}



?>