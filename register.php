<?php 
	session_start();
	include('dbconnect.php');
	
	$name=$_POST['name'];
	$u_name=$_POST['u_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$namever = "/^[A-Z][a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";


	if(empty($name) || empty($u_name) || empty($email) || empty($password) || empty($mobile)){
		echo "<div class='alert  alert-danger alert-dismissible' role='alert'>Please fill all the required fields!</div>";
		exit(0);
	}
	else{



		if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Please enter a valid mail-id</b>
			</div>
		";
		exit();
		}

		if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is too weak</b>
			</div>
		";
		exit();
		}

		if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is invalid</b>
			</div>
		";
		exit();
		}

		if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Invalid phone number.</b>
			</div>
		";
		exit();
		}

		//check for available user-details
		$sql = "SELECT uname FROM user_log WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($conn,$sql);
		$count_email = mysqli_num_rows($check_query);

		if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email is already taken</b>
			</div>
		";
		exit();
		}

		else {
					$password=md5($password);
					$sql="INSERT INTO user_log (Name, uname, email, phone, password) VALUES ('$name','$u_name','$email','$mobile','$password')";
					$run_query=mysqli_query($conn,$sql);
				
					if($run_query){
						
						$_SESSION['uname'] = $u_name;
						$_SESSION['email'] = $email;
						$_SESSION['phone'] = $mobile;
						$_SESSION['Name'] = $name;
						echo "
								<div class='alert alert-success'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									Success!! <b><a href='home.php' style='color:green;'>Click here to</a></b>Login
								</div>
						";
					}
			}
		}
	

	

	
 ?>