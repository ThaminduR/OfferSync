<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OfferSync</title>
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
                                <h2 class="card-title">Edit Profile</h2>




                                <div class="md-form">
                                    <input name="email" onblur="checkemail()" type="email" id="email" class="form-control mb-4" required>
                                    <label for="email">Email</label>
                                    <span id="email-check"></span>
                                </div>


                                <div class="md-form">
                                    <input name="password" type="password" onblur="checkpw()" id="password" class="form-control mb-4" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                                    <label for="paasword">Password</label>
                                    <span id="password-check"></span>
                                </div>

                                <div class="md-form">
                                    <input name="city" type="text" id="city" class="form-control" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                                    <label for="city">City</label>

                                </div>

                                <div class="md-form">
                                    <input name="number" type="text" onblur="checknum()" id="number" class="form-control" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                                    <label for="number">Phone Number</label>
                                    <span id="number-check"></span>
                                </div>




                                <form action="src\view\upload.php" method="post" enctype="multipart/form-data">
                                    Select image to upload:
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <input type="submit" value="Upload Image" name="submit">
                                </form>
                                <br>
                                <br>


                                <a class="btn btn-outline-black">Submit Updates</a>
                            </div>
                        </div>


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