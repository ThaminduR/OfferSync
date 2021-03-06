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
  <link href="css/Post.css" rel="stylesheet">

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
      <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">

          <form class="text-center p-5" action="/OfferController_Post" method="POST">
            <div class="card">

              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top z-depth-1" src="img/post-back.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Card content -->
              <div class="card-body mb-5">

                <!-- Title -->
                <h4 class="card-title">Post Offer</h4>
                <!-- Text -->

                <div class="md-form">
                  <input name="Restaurant" type="text" id="inputMDEx" class="form-control" required>
                  <label for="inputMDEx">Restaurant</label>
                </div>

                <div class="md-form">
                  <input name="Offer" type="text" id="inputMDEx" class="form-control" required>
                  <label for="inputMDEx">Offer</label>
                </div>

                <div class="md-form">
                  <input name="Price" type="text" id="inputMDEx" class="form-control" required>
                  <label for="inputMDEx">Price</label>
                </div>

                <div class="md-form ">
                  <input name="City" type="text" id="inputMDEx" class="form-control" required>
                  <label for="inputMDEx">City</label>
                </div>

                <div class="md-form">
                  <input name="Date" type="text" id="inputMDEx" class="form-control" required>
                  <label for="inputMDEx">Date</label>
                </div>

                <div class="md-form">
                  <input name="RestaurantBranch" type="text" id="inputMDEx" class="form-control" required>
                  <label for="inputMDEx">Restaurant Branch</label>
                </div>

                <p class="text-muted text-left mb-1 ">Prefered Gender :</p>

                <div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="Male" class="custom-control-input" id="defaultInline1"
                      name="Gender">
                    <label class="custom-control-label" for="defaultInline1">Male</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" value="Female" class="custom-control-input" id="defaultInline2"
                      name="Gender">
                    <label class="custom-control-label" for="defaultInline2">Female</label>
                  </div>

                </div>


              </div>
              <!-- Button -->
              <button class="btn btn-outline-black" type="submit">Post<i class="far fa-paper-plane ml-2"></i></button>

            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>


  <footer class="page-footer font-small unique-color-dark">
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
</body>

</html>