<?php


if( isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['city']) ){

	require 'core.ini.php';
	require 'connect_db.php';

function test_input($data) {
  				$data = trim($data);
 				$data = stripslashes($data);
  				$data = htmlspecialchars($data);
  				$data = htmlentities($data);
  				return $data;
			}

$first_name= test_input($_POST['first_name']);
$last_name= test_input($_POST['last_name']);
$email= test_input($_POST['email']);
$password= test_input($_POST['password']);
$city= test_input($_POST['city']);
$password_hash= md5($password);


function allready_registered(){
	global $email;
	global $con;
	$query= "SELECT id FROM users WHERE email='$email' ";

	if($query_run= mysqli_query($con, $query)){

		if(mysqli_num_rows($query_run)==0){
			return false;
		}else{
			return true;
		}

	}else{
		echo 'There is some technical error.<br>Please try again after some time.';
		die();
	}

}

function generate_otp(){
	global $first_name;
	global $last_name;
	global $email;
	global $password_hash;
	global $city;
	$otp= rand(1000, 9999);
	$subject= 'Otp for registration.';
	$body= "$otp is your otp for registration at HIRE-A-CAB.\nThis is valid only for 30 minutes.\n\nIf you are not trying to register then delete this email.\n Do not share this otp with anyone.";
	$header= 'From: Sushil Chaudhary <isushil.work@gmail.com>';

	if( @mail($email, $subject, $body, $header) ){

		ini_set('session.gc_maxlifetime','1800');
		$_SESSION['email']= $email;
		$_SESSION['first_name']= $first_name;
		$_SESSION['last_name']= $last_name;
		$_SESSION['city']= $city;
		$_SESSION['password_hash']= $password_hash;
		$_SESSION['otp']= $otp;

		echo '
				<br> An otp has been sent to '.$email.'<br>
				<input type="text" name="otp" placeholder="Enter Otp*" data-toggle="tooltip" data-placement="top" title="Enter Otp">
				<p class="otp-alert"></p> <input type="button" id="otp-button" value="Submit Otp"> 
				<script type="text/javascript" src="jquery/otp_confirm.js"></script>
				<script> $(".register-button").css("display", "none"); </script>
				';


	}else{
		echo 'There is some problem in generating otp.<br>Please try again after some time.';
		die();
	}

}


if( !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($city) ){

	if(allready_registered()){
		echo 'Email allready registered.<br>Try again with another one.';
	}else{
		generate_otp();
	}

}else{
	echo 'All fields are required.<br>Please try again.';
}

}

?>
