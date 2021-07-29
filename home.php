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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-family: Poppins;">
	<div class="container-fluid py-1">
		<div class="row no-gutters  align-items-start  px-md-0">
			<div class="col-lg-12 d-block">
				<div class="row ">
					<div class="col-md-4 topper justify-content-center " style="position: relative;left:105px;">
						<div class="icon mr-2  justify-content-center "><span class="fa fa-phone"></span>
							<span class="text">+ 1235 2355 98</span></div>
					</div>
					<div class="col-md-4 pr-4  topper justify-content-center">
						<div class="icon mr-2  justify-content-center "><span class="fa fa-paper-plane pr-2"></span>
							<span class="text"> youremail@email.com</span></div>
					</div>
					<div class="col-md-4 pr-4  topper  justify-content-center">
						<span class="text">3-5 Business days delivery &amp; Free Returns</span>
					</div>
				</div>
			</div>
		</div>
		<!-- First part end-->

	</div>
	<!-- nav part begin -->
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



						<li class="nav-item"><a href="cart.php" class="nav-link" style="color:white;"><span
									class="fa fa-shopping-cart pr-1"></span>[<span class="bdje">0</span>]</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- nav part end -->
	<!-- images -->

	<div class="container-fluid" style="background-image: linear-gradient(rgba(0,0,0,0.67),rgba(0,0,0,0.7)),url('img/steam.jpg');height:760px;
	background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-5 pt-5"></div>
				<div class="col-md-12 mt-5 pt-5">
					<span class="subheading mb-4 animated slideInDown">#New Arrival</span><br>
					<h1 class="subsub animated slideInDown" style="color: white;">Game Collection 2019</h1>
					<p class="subsubsub mt-4 animated slideInDown" style="color: white;">Best in class games from Mario 1 to Call of Duty all games are 
						<br>available. Follow the button below to exlpore</p><br>
					<p><a href="shop.php" class="btn-custom animated slideInDown">Discover Now</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- images end -->

	<!-- info part -->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-lg-4 text-center d-flex align-self-stretch ">
					<div class="media block-6 services p-4 py-md-5">
						<div class=" d-flex justify-content-center align-items-center mb-4">
							<span class="fa fa-shopping-bag" style="font-size: 75px;"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Free Shipping</h3>
							<p>Promised free shipping on specific orders and also gift packaging available to surprise your loved ones</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ">
					<div class="media block-6 services p-4 py-md-5">
						<div class=" d-flex justify-content-center align-items-center mb-4">
							<i class="fa fa-ravelry" style="font-size: 75px;"></i>
						</div>
						<div class="media-body">
							<h3 class="heading">Support Customer</h3>
							<p>24/7 All time Support from higly professional people who will walk you through all your
								problems.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ">
					<div class="media block-6 services p-4 py-md-5">
						<div class="d-flex justify-content-center align-items-center mb-4">
							<i class="fa fa-qrcode" style="font-size: 75px;"></i>
						</div>
						<div class="media-body">
							<h3 class="heading">Secure Payments</h3>
							<p>Highly secured payment gateway which include Paytm, Gpay, Phonpe.</p>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- info end -->

	<!-- last but one sec -->
	<section class="ftco-section testimony-section" style="background: rgba(128, 128, 128, 0.075);">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="services-flow">

						<div class="row p-4 d-flex " style="background-color:rgba(210, 30, 30, 0.425);">
							<div class="icon">
								<i class="fa fa-gift" style="font-size: 80px;"></i>
							</div>
							<div class="text">
								<h3>Valuable Gifts</h3>
								<p class="mb-0">Get assured gifts on every purchase of above 5000</p>
							</div>
						</div>
						<div class="row p-4 d-flex " style="background-color:rgba(210, 177, 30, 0.5);">
							<div class="icon">
								<i class="fa fa-credit-card" style="font-size: 80px;"></i>
							</div>
							<div class="text">
								<h3>All Day Support</h3>
								<p class="mb-0">Support from trained professionals available 24/7</p>
							</div>
						</div>
						<div class="row p-4 d-flex " style="background-color:rgba(210, 105, 30, 0.377);">
							<div class="icon">
								<i class="fa fa-money" style="font-size: 80px;"></i>
							</div>
							<div class="text">
								<h3>Assured Cashback</h3>
								<p class="mb-0">Get huge Cashback on every purchase upto 25% </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="heading-section mb-5">
						<h2 class="mb-4">Our satisfied customer says</h2>
						<p>Feedback from users:</p>
						<div class="mt-5"
							style="background-image:url('img/sss.png');width: 650px;height: 150px;background-repeat: no-repeat;">
						</div>
						<div class="w3-card container mt-5">
							<div class="row">
							<img src="https://cdn2.iconfinder.com/data/icons/rcons-user/32/male-shadow-circle-512.png"
								class="mt-2 mb-2 ml-2" style="height: 45px;width:45px;" />
								<h5 class="usrhed mt-4 ml-2">Anonymous</h5>
							</div>
							<div class="row ml-2">
							<i class="fa fa-star estar" aria-hidden="true"></i><i class="fa fa-star estar"
								aria-hidden="true"></i><i class="fa fa-star estar" aria-hidden="true"></i><i
								class="fa fa-star estar" aria-hidden="true"></i><i class="fa fa-star-o estar"
								aria-hidden="true"></i> <p class="ml-2">11/10/19</p>
							</div>
							<div class="row mt-1 ml-1 mr-1 mb-5">
								Best experience with the website and products are delivered within the specified time with a proper packaging
								and amazing support from the helpline. All my queries were cleared properly and would suggest people to use 
								this shop  to buy their favourite games as it is filled with lots of them. Overall experience was too good.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- last but one sec end -->
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