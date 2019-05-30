<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="css/Registerstyle.css" rel="stylesheet">

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
        <div class="mask">
            <div class=" container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">

                    <form class="text-center p-5" action="/RegisterController" method="POST">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card Content -->
                            <div class="card-body mb-5">
                                <h2 class="card-title">Sign Up</h2>

                                <div class="md-form">
                                    <input name="firstname" type="text" id="FirstName" class="form-control" required>
                                    <label data-error="wrong" data-success="right" for="FirstName">First Name</label>
                                </div>

                                <div class="md-form">
                                    <input name="lastname" type="text" id="lastname" class="form-control" required>
                                    <label data-error="wrong" data-success="right" for="lastname">Last Name</label>
                                </div>

                                <div class="md-form">
                                    <input name="email" onblur="checkemail()" type="email" id="email"
                                        class="form-control mb-4" required>
                                    <label for="email">Email</label>
                                    <span id="email-check"></span>
                                </div>

                                <div class="md-form">

                                    <input name="username" onblur="checkusername()" type="text" id="username"
                                        class="form-control mb-4" required>
                                    <label for="username">Username</label>
                                    <span id="username-check"></span>
                                </div>

                                <div class="md-form">
                                    <input name="password" type="password" onblur="checkpw()" id="password"
                                        class="form-control mb-4"
                                        aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                                    <label for="paasword">Password</label>
                                    <span id="password-check"></span>
                                </div>

                                <div class="md-form">
                                    <input name="city" type="text" id="city" class="form-control"
                                        aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                                    <label for="city">City</label>

                                </div>

                                <div class="md-form">
                                    <input name="number" type="text" onblur="checknum()" id="number"
                                        class="form-control" aria-describedby="defaultRegisterFormPhoneHelpBlock"
                                        required>
                                    <label for="number">Phone Number</label>
                                    <span id="number-check"></span>
                                </div>

                                <p class="text-muted text-left mb-1 ">Gender :</p>

                                <div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" value="Male" class="custom-control-input"
                                            id="defaultInline1" name="gender">
                                        <label class="custom-control-label" for="defaultInline1">Male</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" value="Female" class="custom-control-input"
                                            id="defaultInline2" name="gender">
                                        <label class="custom-control-label" for="defaultInline2">Female</label>
                                    </div>

                                </div>
                                <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Sign </button>
                                <hr>
                                <p class="text-muted">By clicking <em>Sign up</em> you agree to our <a href=""
                                        target="_blank">terms of
                                        service</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer class="page-footer font-small  unique-color-dark">
        <div class="footer-copyright  text-center py-3">© 2019 Copyright:
            <a href="/"> OfferSync.com</a>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <script type="text/javascript" src="js/jquery.steps.js"></script>
    <script type="text/javascript" src="js/checking.js"></script>
</body>

</html>