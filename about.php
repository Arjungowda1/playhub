<?php

session_start();
if(!isset($_SESSION['uname'])){
    header('location:index.php');
    }
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
                            <a class="nav-link " style="color:white;" href="shop.php">Catalog</a>
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
                <h2 class="animated slideInDown" style="color: white;font-size: 40px;">About us</h2>
                <h6 class="animated slideInDown" style="color: white;"><a href="home.php" style="color: white;text-decoration: none;">Home</a> |
                    About</h6>

            </div>
        </div>
    </div>
    <!-- info card -->
    <div class="container-fluid pt-4 pb-4 mt-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="w3-card">
                        <img src="img/abt.jpg" style="width: 550px;height:450px;" />
                    </div>
                </div>
                <div class="col-md-6 pt-4 mt-4">
                    <h1><b>Established in 2007</b></h1>
                    <p>Our earlier titles were built on an innovative engine with world-class gameplay as their
                        paramount goal, and praised by critics as games that revitalized or even invented their genres.
                    </p>
                    <p>We have some new games in the works, too. A couple have been announced, while others remain top
                        secret.</p>
                    <p>Just as in software development, we conduct playtests and share prototypes with our partners and
                        players. We follow the results of this work all the way through the manufacturing process to
                        create products people are sure to enjoy.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- info end -->

    <!-- creators -->
    <div class="container-fluid mb-4" style="background: rgba(255, 127, 80, 0.062);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="https://img.icons8.com/plasticine/2x/user.png" class="usrico" />
                    <h4 class="usrhed">CEO</h4>
                    <p class="usrdes">Sometimes it takes a lowly, title-less man to humble the world. Kings, rulers, CEOs, judges, doctors, pastors, they are already expected to be greater and wiser.
                            No matter what the industry you choose to ultimately invest all your time and energy in, be sure you're the owner, founder, and CEO
                            Our industry does not respect tradition - it only respects innovation</p>
                </div>
            </div>
            <div class="row pt-4 mt-4">
                <div class="col-md-4 text-center">
                <img src="https://cdn.iconscout.com/icon/free/png-512/laptop-user-1-1179329.png" class="usrico" />
                <h4 class="usrhed">MANAGER</h4>
                <p class="usrdes">Followers think and talk about their problems....Leaders think and talk about the solutions.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://cdn.iconscout.com/icon/free/png-512/laptop-user-1-1179329.png" class="usrico" />
                <h4 class="usrhed">CONSULT</h4>
                <p class="usrdes">Leadership cannot just go along to get along. Leadership must meet the moral challenge of the day.</p></div>
             <div class="col-md-4 text-center">   
                    <h4 class="usrhed">OUR PARTNERS</h4>
                <img src="http://icons.iconarchive.com/icons/papirus-team/papirus-apps/512/amd-icon.png" class="prtnrico mr-4" />
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/4ad36332-03b9-4804-aad7-acc8455a1109/d473g95-69e436e6-18dd-4165-8c98-e234509c485f.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzRhZDM2MzMyLTAzYjktNDgwNC1hYWQ3LWFjYzg0NTVhMTEwOVwvZDQ3M2c5NS02OWU0MzZlNi0xOGRkLTQxNjUtOGM5OC1lMjM0NTA5YzQ4NWYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.4AgCJkCTPeSth8u7cbZbUpdFc1lJtUDZS164i4ZsHy4" class="prtnrico" /><br>
                <img src="http://icons.iconarchive.com/icons/bokehlicia/pacifica/256/nvidia-settings-icon.png" class="prtnrico mt-3 mr-4" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Rockstar_Games_Logo.svg/2000px-Rockstar_Games_Logo.svg.png" class="prtnrico mt-2" /><br>
                <img src="https://lh3.googleusercontent.com/r2-_2oE9tU_46_n4GIC21PmqNIqPMoQNRPhfVNnK1v8hmDfA_yLuRwCy_E1cf5Wh4oM" class="prtnrico mt-3 mr-4" />
                <img src="https://www.pngfind.com/pngs/m/49-499049_cloud9-logo-png-cloud9-transparent-png.png" class="prtnrico" />
            </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
            <h2 class="usrhed">Our Journey</h2>
        <img src="https://img1a.flixcart.com/www/promos/new/20161017-190224-20150824-132608-the-journey3.png"/>
    </div>
    <div class="container mt-5 mb-5">
        <h2 class="usrhed">DEMOGRAPHICS</h2>
            <table class="table table-striped text-center mt-2">
                    <thead>
                      <tr>
                        <th>Country</th>
                        <th>Percentage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>India</td>
                        <td>87%</td>
                      </tr>
                      <tr>
                        <td>Pakistan</td>
                        <td>13%</td>
                      </tr>
                      <tr>
                        <td>California</td>
                        <td>68%</td>
                      </tr>
                      <tr>
                            <td>Mexico</td>
                            <td>48%</td>
                          </tr>
                          <tr>
                                <td>Australia</td>
                                <td>45%</td>
                              </tr>
                              <tr>
                                    <td>London</td>
                                    <td>35%</td>
                                  </tr>
                                  <tr>
                                        <td>Greece</td>
                                        <td>98%</td>
                                      </tr>
                    </tbody>
                  </table>
                  <h5>Source: Admin Analisys</h5>
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