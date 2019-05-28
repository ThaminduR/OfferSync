<?php

function DisplayUser($username)
{
    $connection = Database::getDBconnection();
    $output = '';
    $user = $connection->FetchUser($username);

    $output .= '
			
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/profilecard.css" rel="stylesheet">

<head>
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
			<img src="/img/poster.jpg" alt="John" style="width:100%">
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
    $output = '';
    $username = $_COOKIE['Username'];
    $result = $connection->SearchRequests($username);
    $count = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
				<article class="row">
                    
				<div class="col-4 offerdetails">
					<ul >
					<form id="form1" action="/AccountView" method="POST">
					
						<a href="javascript:submitform()"><li><i class="fas fa-user-circle"></i><span class="ml-2">' . $row["Sender"] . '</span></li></a>
						<input type="hidden"  name="Username" value="' . $row["Sender"] . '">
						
						</form>
						<li><i class="fas fa-map-marker-alt"></i> <span class="ml-2">' . $row["Date"] . '</span></li>
					</ul>
				</div>
				<div class="verticalLine"></div>
                
                <div class="col-4 ml-5  reqbtn">
						<a class="btn btn-outline-black like" style="cursor: pointer;" onclick="SendRequest(\'' . $row["Sender"] . '\')">Accept Request
                        <i class="far fa-paper-plane ml-2"></i></a>
                        <a class="btn btn-outline-black like" style="cursor: pointer;" onclick="SendRequest(\'' . $row["Sender"] . '\')">Decline Request
						<i class="far fa-paper-plane ml-2"></i></a>
				</div>
	   </article>     
					<br>
        ';
        }
        echo $output;
    } else {
        echo 'No Requests Found';
    }
}
