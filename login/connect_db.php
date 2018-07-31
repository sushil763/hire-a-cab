<?php  
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	$conn_error = 'Database is under maintainance.<br> Please try again after some time.';
	$mysql_db = 'first_database';
	if(!$con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db)){
		die($conn_error);
	}
	
?>