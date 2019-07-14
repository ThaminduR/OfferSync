<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/Database.php';

$connection = Database::getDBconnection();
$username = $_COOKIE['Username'];
$user = $connection->FetchUser($username);





?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/Profile.css" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="side-nav">
        <div class="list-group ">
            <a href="/" class="sideb list-group-item list-group-item-action waves-effect"><i class="fas fa-arrow-circle-left mr-2"></i>Home</a>
            <div class="space"></div>
            <a href="/profile" class="sideb list-group-item list-group-item-action white black-text">
                <i class="fas fa-user mr-3"></i>Profile</a>

            <a href="/posts" id=offers class="sideb list-group-item list-group-item-action waves-effect" method="GET" class="sideb list-group-item list-group-item list-group-item-action waves-effect ">
                <i class="fas fa-hamburger mr-3"></i>My Offers</a>

            <a href="/requests " class="sideb list-group-item list-group-item-action waves-effect ">
                <i class="fas fa-envelope mr-3 "></i>Requests</a>
        </div>

        <a href="/Logout " class="sideb list-group-item list-group-item-action waves-effect ">
            <i class="fas fa-sign-out-alt mr-3 "></i>Logout</a>
    </div>
    <div class="prof">
    <div class="card">

        <div class="modal-header" center>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($user['photo']); ?>" alt="Avatar" style="width:100%">
        </div>
        <!--Body-->
        <div class="modal-body text-center mb-1">

            <h3 class="mt-1 mb-1 black-text"><?= $user["username"] ?> </h3>
            <hr>
            <p class="black-text">Gender : <?= $user["gender"] ?></p>
            <p class="mt-1 black-text">City : <?= $user["city"] ?> </p>
            <p class="mt-1 black-text">Number : <?= $user["MobileNumber"] ?> </p>
            <p class="mt-1 black-text">Email : <?= $user["email"] ?> </p>
            <a class="btn-outline-black btn-lg" href="/Edit" >Edit Profile</a>

        </div>
    </div>




    <!-- Footer-->
    <footer class="page-footer fixed-bottom font-small black ">
        <div class="footer-copyright text-center py-3 ">© 2019 Copyright:
            <a href="/ "> OfferSync.com</a>
        </div>
    </footer>
    <!--/.Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript " src="js/jquery-3.4.0.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="js/mdb.min.js "></script>
    <!-- Initializations -->

    <script>
        function ViewAcc(p) {
            $.ajax({
                type: "POST",
                url: "/MyProfile",
                success: function(data) {
                    $('#Acccontent').html(data);
                }
            });
        }
    </script>
</body>

</html>