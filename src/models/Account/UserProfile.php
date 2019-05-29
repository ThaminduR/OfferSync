<?php

function DisplayUser($username)
{
    $connection = Database::getDBconnection();
    $output = '';
    $user = $connection->FetchUser($username);

    $output .= '
			

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/profilecard.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to OfferSync !</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <!-- <link href="css/Searchstyle.css" rel="stylesheet"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark black scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-arrow-circle-left mr-2"></i>OfferSync</a>
            <div class="collapse navbar-collapse " id="Nav">
                <ul class="navbar-nav mr-auto smooth-scroll">
                </ul>
            </div>
        </div>
	</nav>
	
	<div class="bg">
    </div>
            <div class="card">
            
			<img src="data:image/jpeg;base64,' . base64_encode($user['photo']) . '"/ style="width:100%">
			<h3>' . $user["username"] . '</p>
			<p class="title">' . $user["gender"] . '</h3>
			<p>' . $user["city"] . '</p>
	
			<p><button>Contact</button></p>
		</div>
		</body>';


    echo $output;
}

function DisplayRequests()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->SearchRequests($username);
    $count = mysqli_num_rows($result);
    $case = 1;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ViewRequests.php';
}

function DisplayPosts()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->GetOffers($username);
    $count = mysqli_num_rows($result);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/postview.php';
}

function Accept($id)
{
    $connection = Database::getDBconnection();
    $result = $connection->AcceptRequest($id);
    echo "AccSuccess";
}

function Decline($id)
{
    $connection = Database::getDBconnection();
    $result = $connection->DeclineRequest($id);
    echo "DecSuccess";
}

function DisplayMyAccReq()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->MyAcceptedRequests($username);
    $count = mysqli_num_rows($result);
    $case = 2;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ViewRequests.php';
}
function DisplayReqIAcc()
{
    $connection = Database::getDBconnection();
    $username = $_COOKIE['Username'];
    $result = $connection->RequestsIAccpeted($username);
    $count = mysqli_num_rows($result);
    $case = 3;
    require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/view/Result/ViewRequests.php';
}
