<?php

	require '../login/core.ini.php';
	require '../login/connect_db.php';

	if(!logged_in()){
		header('Location: ../login');
	}else {

		$id= $_SESSION['user_id'];
		$query= "SELECT * FROM users WHERE id= '$id'";
		if($query_run= mysqli_query($con, $query)){

			while($result= mysqli_fetch_assoc($query_run)){
					$email= $result['email'];
					$first_name= strtoupper($result['first_name']);
					$last_name= strtoupper($result['last_name']);
					$city= strtoupper($result['city']);
				}

		}else{
			echo 'There is some technical error.<br>
					Please try again after some time.';
			die();
		}

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
				<form action="../login/logout.php" method="Post"><input class="logout-button" type="submit" value="Sign Out" name="logout"></form>
			</div>
		</section>


		<section id="user-data">
			<div class="container-fluid">
				<h1>Get there<br>Your day belongs to you</h1>
				<h2> Welcome <b><?php echo $first_name.' '.$last_name; ?></b></h2><br>
				<h3>Your Email: <br><b><?php echo $email; ?></b></h3>
				<h3>Your current city: <br><b><?php echo $city; ?></b></h3>
				<h2>Cab services are not yet started in your city.<br>Stay tuned.</h2>
			</div>
		</section>
		

	    <div class="footer">
	    	<p>© <a href="../../">Internship Projects</a>. All rights reserved. Privacy Policy</p>
	    </div>




		</div>
	</body>

</html>


