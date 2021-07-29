<?php
    session_start();
    if(!isset($_SESSION['uname'])){
    header('location:index.php');
    }

    include('dbconnect.php');


    

?>
<!DOCTYPE html>
<html>


<head>
    <title>Playhub</title>
    <link rel="icon" href="img/Steam.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="font-family: Poppins;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="home.php" style="color:white;"><img src="img\Steam.ico" class="lojo" />
                    Playhub</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav" style="font-family: Open Sans;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="home.php" class="nav-link" style="color:white;">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" style="color:white;" href="shop.php" >Catalog</a>
                        </li>
                        <li class="nav-item"><a href="about.php" class="nav-link" style="color:white;">About</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link" style="color:white;">Contact</a>
                        </li>
                        <li class="nav-item"><a href="profile.php" class="nav-link" style="color:white;">Profile</a>
                        </li>
                        <li class="nav-item"><a href="cart.php" class="nav-link"
                                style="color:white;"><span class="fa fa-shopping-cart pr-1"></span>[<span class="bdje">0</span>]</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- header end -->
    <div class="container-fluid"
        style="background-image:linear-gradient(rgba(0,0,0,0.67),rgba(0, 0, 0, 0.205)),url('https://i.pinimg.com/originals/bf/d6/3f/bfd63f1d226d178725f6726e1cf57fdf.jpg') ;height: 400px;">
        <div class="row slider-text align-items-center justify-content-center" style="height: 400px;">
            <div class="col-md-12 text-center">
                <h2 class="animated slideInDown" style="color: white;font-size: 40px;">Profile</h2>
                <h6 class="animated slideInDown" style="color: white;"><a href="home.php" style="color: white;text-decoration: none;">Home</a> |
                    Profile</h6>

            </div>
        </div>
    </div>
    <!-- profile pic  -->
    <br>
    <div class="container w3-card justify-content-center text-center mt-4 mb-4" style="height: 380px;">
        <div class="row justify-content-center text-center" style="height: 190px;">
            <div class="col-md-6 justify-content-center">
                <img src="https://cdn2.iconfinder.com/data/icons/rcons-user/32/male-shadow-circle-512.png" class=" mt-5"
                    style="height: 195px;width:195px;" /><br>
                            <h2 class="usrhed"><?php echo $_SESSION['Name'];?></h2>
            </div>
            <div class="col-md-6 justify-content-center text-center mt-5">

                <table class="table table-striped text-center mt-5" >
                <tbody>
                      <tr >
                        <th>email:</th>
                        <td><?php echo $_SESSION['email'];?></td>
                      </tr>
                      <tr>
                      <th>username</th>
                        <td><?php echo $_SESSION['uname'];?></td>
                      </tr>
                      <tr>
                      <th>phone</th>
                        <td><?php echo $_SESSION['phone'];?></td>
                      </tr>
                    </tbody>
                  </table>
                <a href="logout.php"class="btn btn-primary py-3 px-4 mt-4" style="width:40%;">Logout</a>
            </div>
        </div>
    </div>
    <!-- footer -->

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon" style="text-decoration: none;">
                        <div class="mouse-wheel" style="font-size: 22px;">^</div>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Playhub</h2>
                            <p>Best in class games available in cheaper rates</p>
                            <ul class="list-unstyled float-md-left float-lft mt-5">
                                <li><a href="#"><span class="fa fa-twitter pr-2" style="font-size: 20px;"></span></a>
                                    <a href="#"><span class="fa fa-facebook pr-2" style="font-size: 20px;"></span></a>
                                    <a href="#"><span class="fa fa-instagram pr-2" style="font-size: 20px;"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Menu</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">Shop</a></li>
                                <li><a href="#" class="py-2 d-block">About</a></li>
                                <li><a href="#" class="py-2 d-block">Journal</a></li>
                                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Help</h2>
                            <div class="d-flex">
                                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                    <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                    <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                    <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                    <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul style="list-style:none;">
                                    <li><span class="icon"></span><span class="text">203 Malibu point California,
                                            USA</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                                210</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span
                                                class="text">admin@infomail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            Designed and developed by A & A ©
                        </p>
                    </div>
                </div>
            </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/queryexec.js"></script>
    
  
  <script src="js/popper.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>