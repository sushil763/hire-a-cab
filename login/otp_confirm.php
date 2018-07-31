<?php

require 'core.ini.php';
require 'connect_db.php';

if( isset($_SESSION['otp']) && isset($_POST['otp']) ){
	
	$required_otp= $_SESSION['otp'];

	function test_input($data) {
  				$data = trim($data);
 				$data = stripslashes($data);
  				$data = htmlspecialchars($data);
  				$data = htmlentities($data);
  				return $data;
			}

	$otp= test_input($_POST['otp']);
	
	function register(){
		$first_name= $_SESSION['first_name'];
		$last_name= $_SESSION['last_name'];
		$email= $_SESSION['email'];
		$password_hash= $_SESSION['password_hash'];
		$city= $_SESSION['city'];
		$time= time();
		$date= date('d:m:Y', $time);
		global $con;
		$query= "INSERT INTO users (first_name, last_name, email, password, city, date) VALUES ('$first_name', '$last_name', '$email', '$password_hash', '$city', '$date')";

		if($query_run= mysqli_query($con, $query)){
			echo '<script> $(".register-alert").html("<br>Registered successfully.<br> Sign In to proceed.") </script>';
		}else{
			echo 'Database is under maintainence.<br>Please try again after some time.';
			die();
		}
	}

	if( ($otp==$required_otp) ){
		register();
	}else {
		echo 'Otp did not match.<br>Try again.';
	}

}

?>