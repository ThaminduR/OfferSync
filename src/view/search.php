<!DOCTYPE html>
<html lang="en">

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
    <link href="css/Searchstyle.css" rel="stylesheet">
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
    <nav class="navbar navbar-expand-lg  fixed-top navbar-dark black scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-arrow-circle-left mr-2"></i>OfferSync</a>
            <div class="collapse navbar-collapse " id="Nav">
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <div class="toast toastsuc" style="position: absolute; top: 0; right: 0;" data-autohide="false">
                        <div class="toast-header">
                            <svg class="rounded mr-2" width="20" height="20" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                <rect fill="#007aff" width="100%" height="100%" /></svg>
                            <strong class="mr-auto">OfferSync</strong>
                            <small></small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            Request send successfully !
                        </div>
                    </div>
                    <div class="toast toastfail" style="position: absolute; top: 0; right: 0;" data-autohide="false">
                        <div class="toast-header">
                            <svg class="rounded mr-2" width="20" height="20" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                <rect fill="#007aff" width="100%" height="100%" /></svg>
                            <strong class="mr-auto">OfferSync</strong>
                            <small></small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            Request already sent !
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>


    <div class="bg">
        <div class="container">
            <div class="col-12">
                <div class="row-4">
                    <div class="col-5">
                        <br>
                        <div class="form-group">
                            <div class="input-group text-center">
                                <input type="text" name="restaurant" id="restaurant" placeholder="Search by Restaurant" class="form-control" />
                                <input type="text" name="city" id="city" placeholder="Search by City" class="form-control" />
                       
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-8">
                    <div class="col-12">
                        <hgroup class="mb20">
                            <div id="result"></div>
                            <div style="clear:both"></div>
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
    <script>
        $(document).ready(function() {

           

            function load_data1(query) {
                $.ajax({
                    url: "/fetchR",
                    method: "POST",
                    data: {
                        restaurant: query
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            }

            function load_data2(query) {
                $.ajax({
                    url: "/fetchC",
                    method: "POST",
                    data: {
                        city: query
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            }

            $('#restaurant').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data1(search);
                } else {
                    load_data1();
                }
            });
            
            $('#city').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data2(search);
                } else {
                    load_data2();
                }
            });
        });

        function SendRequest(p,id) {
            $.ajax({
                type: "POST",
                url: "/request",
                data: {
                    username: p,
                    id: id
                },
                success: function(data) {
                    if (data == 'failed') {
                        $('.toastfail').toast('show');
                        setTimeout(function() {
                            $('.toastfail').toast('hide');
                        }, 1000);
                    } else {
                        $('.toastsuc').toast('show');
                        setTimeout(function() {
                            $('.toastsuc').toast('hide');
                        }, 1000);
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
    </script>
</body>

</html>