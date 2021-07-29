<?php 
	include('dbconnect.php');
	session_start();

	$name = $_POST['logusername'];
	$pass = md5($_POST['logpassword']);
	
	
	$q = " select * from user_log  where uname = '$name' && password = '$pass' ";
	
	$result = mysqli_query($conn, $q);
	
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		$row=mysqli_fetch_array($result);
		$_SESSION['uname'] = $row['uname'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['Name'] = $row['Name'];
		echo "sucess";
		exit();
	
	
	}
	else{
	
		echo "error";
		exit();
	}

 ?>