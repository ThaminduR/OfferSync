<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';


function SearchOffers()
{
    if (isset($_POST["searchText"])) {
        $search = $_POST["searchText"];
        $connection = Database::getDBconnection();
        $output='';
        $result = $connection->FetchOffer($search);
        if (mysqli_num_rows($result) > 0) {
            $output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>';
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
			<tr>
				<td>' . $row["Username"] . '</td>
				<td>' . $row["Restaurant"] . '</td>
				<td>' . $row["City"] . '</td>
				<td>' . $row["Offer"] . '</td>
				<td>' . $row["Gender"] . '</td>
			</tr>
		';
            }
            echo $output;
        } else {
            echo 'Data Not Found';
        }
    }
}
