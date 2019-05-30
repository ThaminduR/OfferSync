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
    <!-- Modal -->
    <div class="modal fade" id="modalAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
            <div class="modal-content" id="Acccontent">
            </div>
        </div>
    </div>
    <!-- Modal -->


    <div class="side-nav">
        <div class="list-group ">
            <a href="/" class="sideb list-group-item list-group-item-action waves-effect"><i class="fas fa-arrow-circle-left mr-2"></i>Home</a>
            <div class="space"></div>
            <a href="/profile" class="sideb list-group-item list-group-item-action waves-effect">
                <i class="fas fa-user mr-3"></i>Profile</a>
            <a href="/posts" method="GET" class="sideb list-group-item  list-group-item list-group-item-action waves-effect">
                <i class="fas fa-hamburger mr-3"></i>My Offers</a>
            <a href="#" class="sideb list-group-item list-group-item-action white black-text">
                <i class="fas fa-envelope mr-3"></i>Requests</a>
        </div>

        <a href="/Logout" class="sideb list-group-item list-group-item-action waves-effect">
            <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
    </div>


    <div class="bg">
        <div class="container">
            <div class="col-12">
                <div class="row-9">
                    <ul class="nav nav-tabs md-tabs" id="myTab" role="tablist">
                        <li class="nav-item mr-1">
                            <a class="nav-link white black-text" id="newreq-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">New Requests</a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link white black-text" id="sent-tab" data-toggle="tab" href="#sent" role="tab" aria-controls="sent" aria-selected="false">Sent Requests</a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link white black-text" id="myreq-tab" data-toggle="tab" href="#myacc" role="tab" aria-controls="myacc" aria-selected="false">My Accpeted Requests</a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link white black-text" id="ireq-tab white black-text" data-toggle="tab" href="#Iacc" role="tab" aria-controls="Iacc" aria-selected="false">Requests I Accpeted</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="newreq-tab">
                            <div id="result"></div>
                        </div>
                        <div class="tab-pane fade" id="sent" role="tabpanel" aria-labelledby="sent-tab">
                            <div id="result4"></div>
                        </div>
                        <div class="tab-pane fade" id="myacc" role="tabpanel" aria-labelledby="myreq-tab">
                            <div id="result2"></div>
                        </div>
                        <div class="tab-pane fade" id="Iacc" role="tabpanel" aria-labelledby="ireq-tab">
                            <div id="result3"></div>
                        </div>

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

        function load_myrequests() {

            $.post({
                url: "/MyAccRequests",
                success: function(data) {
                    $('#result2').html(data);
                }
            });
        }

        function load_Irequests() {

            $.post({
                url: "/RequestsIAcc",
                success: function(data) {
                    $('#result3').html(data);
                }
            });
        }

        function load_Sentrequests() {

            $.post({
                url: "/SentReq",
                success: function(data) {
                    $('#result4').html(data);
                }
            });
        }

        load_requests();
        load_myrequests();
        load_Irequests();
        load_Sentrequests();

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
                        load_myrequests();
                        load_Irequests();
                        load_Sentrequests();
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
                        load_myrequests();
                        load_Irequests();
                        load_Sentrequests();
                    }
                }
            });
        }

        function ViewAcc(p) {
            $.ajax({
                type: "POST",
                url: "/AccountView",
                data: {
                    Username: p
                },
                success: function(data) {
                    $('#Acccontent').html(data);
                }
            });
        }

        function Contact(p) {
            $.ajax({
                type: "POST",
                url: "/ContactView",
                data: {
                    Username: p
                },
                success: function(data) {
                    $('#Acccontent').html(data);
                }
            });
        }
    </script>
</body>

</html>