<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';


function SearchOffers()
{
	if (isset($_POST["searchText"])) {
		$search = $_POST["searchText"];
		$connection = Database::getDBconnection(); 
		$result = $connection->FetchOffer($search);
		$count = mysqli_num_rows($result);
		if (mysqli_num_rows($result) > 0) {
			$GLOBALS['output']=$result;
			$GLOBALS['count']=$count;
			require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/SearchResult.php';
		}
	}
}
