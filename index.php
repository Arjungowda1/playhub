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

<body>
    
    <div class="top-content" style="background-image:linear-gradient(rgba(0,0,0,0.67),rgba(0,0,0,0.7)), url('img/login.jpg');">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 w3-animate-zoom">

                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3 class="usrhed">Login to our site</h3>
                                    <p>Enter username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-sign-in"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                            <div class="form-group" id="err_msg2"></div>
                                <form action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="logusername">Username</label>
                                        <input type="text" name="logusername" id="logusername" placeholder="Username..."
                                            class="form-username form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="logpassword">Password</label>
                                        <input type="password" name="logpassword" id="logpassword" placeholder="Password..."
                                            class="form-password form-control" >
                                    </div>
                                    <button type="button" class="btn" name="login" id="login">Sign in!</button>
                                </form>
                            </div>
                        </div>

                        <div class="container text-center social-login">
                            <h3>...or login with:</h3>
                            <div class="social-login-buttons">
                                <a class="btn btn-link-2 fbb" href="#">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                                <a class="btn btn-link-2 fbb" href="#">
                                    <i class="fa fa-twitter"></i> Linked-in
                                </a>
                                <a class="btn btn-link-2 fbb" href="#">
                                    <i class="fa fa-google"></i> Google
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-1 middle-border" style="height: 20px;"></div>
                    <div class="col-sm-1"></div>

                    <div class="col-sm-5 w3-animate-zoom">
                    
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3 class="usrhed">Sign up now</h3>
                                    <p>Fill in the form below to get instant access:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                            <div class="form-group" id="err_msg"></div>
                                <form  action="" method="post" class="registration-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Name..."
                                            class="form-first-name form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="u_name">Username</label>
                                        <input type="text" name="u_name" id="u_name"placeholder="Username..."
                                            class="form-last-name form-control" >

                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="text" name="email" id="email"placeholder="Email..."
                                            class="form-email form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="phone">Phone Number</label>
                                        <input type="text" name="mobile" id="mobile" placeholder="Phone number..."
                                            class="form-email form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" name="password" id="password" placeholder="Password..."
                                            class="form-email form-control">
                                    </div>
                                    <button type="button" class="btn" name="signup" id="signup_btn">Sign me up!</button>
                                    </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/queryexec.js"></script>
    
</body>

</html>