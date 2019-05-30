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
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="C:\Users\Mithun Wijethunga\Desktop\OfferSync\public\JS\modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>


<body>

    <div class="side-nav">
        <div class="list-group ">
        
            <a href="/" class="sideb list-group-item list-group-item-action waves-effect"><i class="fas fa-arrow-circle-left mr-2"></i>Home</a>
            <div class="space"></div>
            <a href="" class="sideb list-group-item list-group-item-action white black-text">
                <i class="fas fa-user mr-3"></i>Profile</a>

            <a href="/posts" id= offers class="sideb list-group-item list-group-item-action waves-effect" method="GET" class="sideb list-group-item list-group-item list-group-item-action waves-effect ">
                <i class="fas fa-hamburger mr-3"></i>My Offers</a>

            <a href="/requests " class="sideb list-group-item list-group-item-action waves-effect ">
                <i class="fas fa-envelope mr-3 "></i>Requests</a>
        </div>

        <a href="/Logout" class="sideb list-group-item list-group-item-action waves-effect">
            <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
    </div>


    <div class="bg">
        <div class="container">
            <div class="col-12">
                <section class="cd-hero">

                    <div class="cd-slider-nav">
                        <nav>
                            <span class="cd-marker item-1"></span>
                            <ul>
                                <li class="selected"><a href="#0">
                                        <div class="image-icon"><img src="img/featured-icon.png"></div>
                                        <h6>Email</h6>
                                    </a></li>
                                <li><a href="#0">
                                        <div class="image-icon"><img src="img/about-icon.png"></div>
                                        <h6>Password</h6>
                                    </a></li>
                                <li><a href="#0">
                                        <div class="image-icon"><img src="img/home-icon.png"></div>
                                        <h6>City</h6>
                                    </a></li>
                                <li><a href="#0">
                                        <div class="image-icon"><img src="img/contact-icon.png"></div>
                                        <h6>Phone</h6>
                                    </a></li>
                            </ul>
                        </nav>
                    </div> <!-- .cd-slider-nav -->

                    <ul class="cd-hero-slider">

                        <li class="selected">
                            <div class="heading">
                                <h1>Update Your Email</h1>
                                <form class="text-center p-5" action="/RegisterController" method="POST">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card Content -->
                            <div class="card-body mb-2">

                                <div class="md-form">
                                    <input name="email" onblur="checkemail()" type="email" id="email"
                                        class="form-control mb-4" required>
                                    <label for="email">Email</label>
                                    <span id="email-check"></span>
                                </div>

                                <button class="btn btn-info my-6 btn-block" type="submit" name="submit">Submit </button>
                                
                                
                            </div>
                        </div>
                    </form>

                            </div>



                        <li>
                            <div class="heading" >
                                <h1>Update Your Password</h1>
                                <form class="text-center p-5" action="/RegisterController" method="POST">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card Content -->
                            <div class="card-body mb-2">
                            <div class="md-form">
                                    <input name="password" type="password" onblur="checkpw()" id="password"
                                        class="form-control mb-4"
                                        aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                                    <label for="paasword">Password</label>
                                    <span id="password-check"></span>
                                </div>
                            <button class="btn btn-info my-6 btn-block" type="submit" name="submit">Submit </button>

                        </li>

                        <li>
                            <div class="heading">
                                <h1>Update Your City</h1>
                            </div>

                        </li>

                        <li>
                            <div class="heading">
                                <h1>Update Phone Number</h1>

                            </div>

                        <li>

                        </li>

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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="C:\Users\Mithun Wijethunga\Desktop\OfferSync\public\JS\jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/plugins.js"></script>
    <script src="JS/main.js"></script>

</body>

</html>