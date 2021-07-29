<?php

session_start();
if(!isset($_SESSION['uname'])){
    header('location:index.php');
    }

    include('dbconnect.php');  
    
        $luidi = $_SESSION['uname'];
		$seql2 = "select sum(totprice) as maxim from cart where uname='$luidi'";
		$runq=mysqli_query($conn,$seql2);
		$rowss=mysqli_fetch_array($runq);
		$total=$rowss['maxim'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Playhub</title>
    <link rel="icon" href="img/Steam.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="font-family: Poppins;">
    <header>
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
    </header>

    <!-- description part -->

    <div class="container-fluid"
        style="background-image:linear-gradient(rgba(0,0,0,0.67),rgba(0, 0, 0, 0.205)),url('https://i.pinimg.com/originals/bf/d6/3f/bfd63f1d226d178725f6726e1cf57fdf.jpg') ;height: 400px;">
        <div class="row slider-text align-items-center justify-content-center" style="height: 400px;">
            <div class="col-md-12 text-center">
                <h2 class="animated slideInDown" style="color: white;font-size: 40px;">Checkout</h2>
                <h6 class="animated slideInDown" style="color: white;"><a href="cart.php" style="color: white;text-decoration: none;">Back to cart</a></h6>

            </div>
        </div>
    </div>
    <!-- des end -->
    <div class="mt-5 pt-5"></div>
    <div class="container w3-card mt-5"><h4 class="usrhed pt-3 pb-3 pl-4 ml-4 " style="text-transform: uppercase;color: black;letter-spacing: 2px;">Billing Details</h4></div>
    <div class="container w3-card pb-4">
            <div class="row justify-content-center">
                    <div class="col-xl-10">
                          <form  action="#"class="billing pt-3 pb-3">
                            <div class="row align-items-end">
                                <div class="col-md-6 pt-2 pb-2">
                              <div >
                                  <label  class="chckfrm">First Name</label>
                                <input type="text" class="form-control chektfrm" value="<?php echo $_SESSION['Name'];?>" style="font-weight: bold;">
                              </div>
                            </div>
                            <div class="col-md-6 pt-2 pb-2">
                              <div >
                                  <label  class="chckfrm">Last Name</label>
                                <input type="text" class="form-control" placeholder="" >
                              </div>
                          </div>
                          <div class="w-100"></div>
                              <div class="col-md-12 pt-2 pb-2">
                                  <div >
                                      <label  class="chckfrm">State / Country</label>
                                      <div class="select-wrap">
                                    <select name="" id="" class="form-control">
                                        <option value="">India</option>
                                      <option value="">China</option>
                                      <option value="">Pakistan</option>
                                      <option value="">Canada</option>
                                      <option value="">Mexico</option>
                                      <option value="">Japan</option>
                                    </select>
                                  </div>
                                  </div>
                              </div>
                              <div class="w-100"></div>
                              <div class="col-md-6 pt-2 pb-2">
                                  <div >
                                  <label  class="chckfrm">Street Address</label>
                                <input type="text" class="form-control" placeholder="House number and street name" >
                              </div>
                              </div>
                              <div class="col-md-6 pt-2 pb-2"> 
                                  <div >
                                <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)" >
                              </div>
                              </div>
                              <div class="w-100"></div>
                              <div class="col-md-6 pt-2 pb-2">
                                  <div >
                                  <label class="chckfrm">Town / City</label>
                                <input type="text" class="form-control" placeholder="" >
                              </div>
                              </div>
                              <div class="col-md-6 pt-2 pb-2">
                                  <div >
                                      <label class="chckfrm">Postcode / ZIP *</label>
                                <input type="text" class="form-control" placeholder="" >
                              </div>
                              </div>
                              <div class="w-100"></div>
                              <div class="col-md-6 pt-2 pb-2">
                              <div >
                                  <label lass="chckfrm">Phone</label>
                                <input type="text" class="form-control" value="<?php echo $_SESSION['phone'];?>" >
                              </div>
                            </div>
                            <div class="col-md-6 pt-2 pb-2">
                              <div >
                                  <label class="chckfrm">Email Address</label>
                                <input type="text" class="form-control" value="<?php echo $_SESSION['email'];?>">
                              </div>
                          </div>
                        
                          </div>
                        </form><!-- END -->
                        </div>
                        </div>
    </div>
    <div class="mt-5 pt-5"></div>
    <div class="container w3-card mt-5"><h4 class="usrhed pt-3 pb-3 pl-4 ml-4 " style="text-transform: uppercase;color: black;letter-spacing: 2px;">Payment and Summary</h4></div>         
    <div class="container">     
    <div class="row mt-2 mb-5 pt-3 d-flex w3-card">
                <div class="col-md-6 d-flex mb-3">
                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Cart Total</h3>
                        <p class="d-flex">
                                  <span class="mr-5 ml-5">Subtotal</span>
                                  <span class="ml-5"><?php echo $total?>/-</span>
                              </p>
                              <p class="d-flex">
                                  <span class="mr-5 ml-5">Delivery</span>
                                  <span class="ml-5 pl-1">0.00</span>
                              </p>
                             
                              <hr>
                              <p class="d-flex total-price">
                                  <span class="mr-5 ml-5">Total</span>
                                  <span class="ml-5 pl-4"><?php echo $total?>/-</span>
                              </p>
                              </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="cart-detail bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Payment Method</h3>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="checkbox">
                                             <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                          </div>
                                      </div>
                                  </div>
                                  <p><button type="button" id="checkout_btn" class="btn btn-primary  px-4" style='background-color:orangered'>Place an order</a></p>
                              </div>
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