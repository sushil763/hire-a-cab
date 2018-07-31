

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
		<link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
	</head>

	
	<body>
		<div class="document">

		<section id="navbar">
			<div class="container-fluid">
				<a class="title" href=""><b>HIRE A CAB</b></a>
				<a class="login-button" href="">Sign In</a>
				<ul class="navlist">
					<li><a href="login/">SIGN IN</a></li>
					<li><a class="driver" href="">Become a Driver</a></li>
				</ul>
			</div>
		</section>


		<section id="main-container">
			<div class="container-fluid">
				<h1><b>Get there</b><br>Your day belongs to you</h1>
				<div class="main-img">
					<a class="login-link" href=""><p>Start riding with us.<br><br>Sign In</p></a>
				</div>
				<div class="reasons-to-ride">
					<div class="reason">
						<img src="images/easiest.png">
						<div class="reason-data">
							<h3>Easiest way around</h3>
							<p>One tap and a car comes directly to you. Hop in—your driver knows exactly where to go. And when you get there, just step out. Payment is completely seamless.</p>
						</div>
					</div>
					<div class="reason">
						<img src="images/anywhere.png">
						<div class="reason-data">
							<h3>Anywhere, Anytime</h3>
							<p>Daily commute. Errand across town. Early morning flight. Late night drinks. Wherever you’re headed, count on Uber for a ride—no reservations required.</p>
						</div>
					</div>
					<div class="reason">
						<img src="images/low-cost.png">
						<div class="reason-data">
							<h3>Low-cost to luxury</h3>
							<p>Economy cars at everyday prices are always available. For special occasions, no occasion at all, or when you just a need a bit more room, call a black car or SUV.</p>
						</div>
					</div>
				</div>

			<div>

		</section>

		<section id="app-data">
			<div class="container-fluid">
				<img src="images/where-to.png">
				<div class="data">
					<h4>The new app</h4>
					<h3><b>Gets you there faster</b></h3>
					<p>The updated app is rolling out now to cities around the world. And it’s filled with new features that make getting where you want to go faster and easier.</p>
				</div>
			</div>
		</section>

		<section id= "now-arriving">
			<div class="container-fluid">
				<h4>Now arriving</h4>
				<h3><b>Safe and modern cities </b></h3>
				<div class="sub-container">
					<img src="images/helping-cities.png">
					<div class="data">
						<h4>Helping cities thrive</h4>
						<p>A city with Uber gives people more ways to make money, has fewer drunk drivers on the road, and provides transportation anywhere, anytime.</p>
					</div>
				</div>
				<div class="sub-container">
					<img src="images/safe-rides.png">
					<div class="data">
						<h4>Safe rides for everyone</h4>
						<p>Whether riding in the backseat or driving up front, every part of the Uber experience is designed around your safety and security.</p>
					</div>
				</div>

			</div>
		</section>

		<div id="map"></div>
    	<script>
      	function initMap() {
        // Create a map object and specify the DOM element for display.
	        var map = new google.maps.Map(document.getElementById('map'), {
	          center: {lat: 28.7041, lng: 77.1025},
	          scrollwheel: false,
	          zoom: 8
	        });
	      }

	    </script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV1mUHMTXNR9yK_JeooeOLJ_vH-R-9_4M&callback=initMap"
	    async defer></script>




		</div>
	</body>

</html>