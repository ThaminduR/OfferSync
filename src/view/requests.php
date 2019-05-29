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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/requests.css" rel="stylesheet">
</head>

<body>
    <div class="side-nav">
        <div class="list-group ">
            <a href="/" class="sideb list-group-item list-group-item-action waves-effect"><i class="fas fa-arrow-circle-left mr-2"></i>Home</a>
            <div class="space"></div>
            <a href="/profile" class="sideb list-group-item list-group-item-action waves-effect">
                <i class="fas fa-user mr-3"></i>Profile</a>
            <a href="/myoffers" class="sideb list-group-item  list-group-item list-group-item-action waves-effect">
                <i class="fas fa-hamburger mr-3"></i>My Orders</a>
            <a href="" class="sideb list-group-item list-group-item-action white black-text">
                <i class="fas fa-envelope mr-3"></i>Requests</a>
        </div>

        <a href="/Logout" class="sideb list-group-item list-group-item-action waves-effect">
            <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
    </div>


    <div class="bg">
        <div class="container">
            <div class="col-12">
                <div class="row-9">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link white black-text" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">New Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white black-text" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white black-text" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div id="result"></div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                            wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="page-footer fixed-bottom font-small black">
        <div class="footer-copyright  text-center py-3">© 2019 Copyright:
            <a href="/"> OfferSync.com</a>
        </div>
    </footer>
    <!--/.Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!-- Initializations -->
    <script>
        function load_requests() {

            $.post({
                url: "/viewRequests",
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        load_requests();

        function Accept(id) {
            $.ajax({
                type: "POST",
                url: "/accept",
                data: {
                    id: id
                },
                success: function(data) {
                    if (data == 'AccSuccess') {
                        load_requests();
                    }
                }
            });
        }

        function Decline(id) {
            $.ajax({
                type: "POST",
                url: "/decline",
                data: {
                    id: id
                },
                success: function(data) {
                    if (data == 'DecSuccess') {
                        load_requests();
                    }
                }
            });
        }
    </script>
</body>

</html>