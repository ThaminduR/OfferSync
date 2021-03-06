<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Welcome <?= $_COOKIE['Username'] ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/welcome.css" rel="stylesheet">
</head>

<body>


  <div class="side-nav">
    <div class="list-group ">
      <div class="black list-group-item text-white waves-effect ml-2"> OFFERSYNC</div>
      <div class="space"></div>
      <a href="/profile" class="sideb list-group-item list-group-item-action waves-effect">
        <i class="fas fa-user mr-3"></i>Profile</a>
      <a href="/posts" class="sideb list-group-item  list-group-item list-group-item-action waves-effect">
        <i class="fas fa-hamburger mr-3"></i>My Offers</a>
      <a href="/requests" class="sideb list-group-item list-group-item-action waves-effect">
        <i class="fas fa-envelope mr-3"></i>Requests</a>
    </div>
    <div class="container col h-20">
    </div>
    <a href="/Logout" class="sideb list-group-item list-group-item-action waves-effect">
      <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
  </div>

  <div class="bg">
    <div class="mask ">
      <div class=" container-fluid d-flex align-items-center justify-content-center">
        <div class="row d-flex justify-content-center text-center">
          <!-- Card -->
          <div class="card">
            <!-- Card Content -->
            <div class="card-body h-flex">
              <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div>
                    <h3 class="black-text">Welcome <?= $_COOKIE['Username'] ?></h3>
                  </div>
                  <a class="btn btn-outline-black waves-effect" href="/search">Search Offer<i class="fas fa-search ml-2"></i></a>
                  <a class="btn btn-outline-black waves-effect" href="/postOffer">Post an Offer<i class="far fa-paper-plane ml-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          </form>
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
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->

</body>

</html>