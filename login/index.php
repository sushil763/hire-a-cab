<?php

	require 'core.ini.php';

	if(logged_in()){
		header('Location: ../profile');
	}

?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Hire A CAB</title>
  		<meta name="keywords" content="Cab, taxi">
		<meta name="description" content="We're finding better ways for cities to move, work, and thrive. Download the app and get a ride in minutes. Or become a driver and earn money on your schedule.">		
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	</head>

	
	<body>
		<div class="document">

		<section id="navbar">
			<div class="container-fluid">
				<a class="title" href="../"><b>HIRE A CAB</b></a>
				<ul class="navlist">
					<li><a class="driver" href="">Become a Driver</a></li>
				</ul>
			</div>
		</section>


		<section id="form-data">
			<div class="container-fluid">

				<div class="login-section">
					<h2>Ride with Us</h2>
					<h3>Sign In</h3>
					<form class="login-form">
						<input type="text" class="login-email" name="email" placeholder="Email*" data-toggle="tooltip" data-placement="top" title="Email" ><br><br>
						<input type="password"  class="login-password" name="password" placeholder="Password*" data-toggle="tooltip" data-placement="top" title="Password" ><br>
						<p class="login-alert"></p>
						<input type="button" class="login-button" value="Sign In"><br>
					</form>
					<h4>or Register if not yet registered.</h4>
				</div>

				<script type="text/javascript" src="jquery/login.js"></script>

				<div class="register-section">
					<h2>Register with Us</h2><br>
					<form class="register-form">
						<input type="text" name="first_name" placeholder="FIRST NAME*" data-toggle="tooltip" data-placement="top" title="FIRST NAME" ><br><br>
						<input type="text" name="last_name" placeholder="LAST NAME*" data-toggle="tooltip" data-placement="top" title="LAST NAME" ><br><br>
						<input type="text" class="register-email" name="email" placeholder="Email*" data-toggle="tooltip" data-placement="top" title="Email" ><br><br>
						<input type="password" class="register-password" name="password" placeholder="CREATE PASSWORD*" data-toggle="tooltip" data-placement="top" title="CREATE PASSWORD" ><br><br>
						<input type="text" name="city" placeholder="CITY*" data-toggle="tooltip" data-placement="top" title="CITY" ><br>
						<p class="register-alert"></p>
						<input type="button" class="register-button" value="Register"><br>

					</form>
					<h6>By proceeding, I agree that HIRE_A_CAB or its representatives may contact me by email, phone, or SMS (including by automatic telephone dialing system) at the email address or number I provide, including for marketing purposes. I have read and understand the relevant Driver Privacy Statement.</h6>
				</div>

				<script type="text/javascript" src="jquery/register.js"></script>

			</div>
		</section>




		</div>
	</body>

</html>


