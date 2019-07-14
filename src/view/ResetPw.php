<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Password Reset</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">

</head>

<body>


    <div class="bg col-12 row-12">
        <div class="jumbotron card card-image" style="background-image: url(/img/back1.jpg);">
            <div class="text-white text-center py-5 px-4">
                <div>
                    <form method="POST" action="/resetcheck">
                        <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Password Reset !</strong></h2>
                        <p class="mx-5 mb-5">Enter your Username and Email</p>
                        <div class="col-6">
                            <div class="white black-text mb-3">
                                <input name="username" type="text" id="username" class="form-control" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="white black-text">
                                <input name="email" type="text" id="email" class="form-control" required>
                                <label for="email">Email</label>
                            </div>

                            <button class="btn btn-black" name="submit" id="rbtn">Reset</button>

                            <span id="reset-check" class="red-text">
                                <P class="text-center"></P>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
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
        document.getElementById('rbtn').addEventListener("click", function() {
            var u = $(username).val();
            var e = $(email).val();
            $.ajax({
                type: "POST",
                url: "/resetcheck",
                data: {
                    username: u,
                    email: e
                },
                success: function(data) {
                    $('#reset-check').html(data);
                }
            })
        });
    </script>
</body>

</html>