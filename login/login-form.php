<?php

require 'core.ini.php';
require 'connect_db.php';

if(isset($_POST['email']) && isset($_POST['password'])){

	function test_input($data) {
  				$data = trim($data);
 				$data = stripslashes($data);
  				$data = htmlspecialchars($data);
  				$data = htmlentities($data);
  				return $data;
			}

	$email= test_input($_POST['email']);
	$password= test_input($_POST['password']);
	$password_hash= md5($password);

	if(!empty($email) && !empty($password)){
		$query= "SELECT id FROM users WHERE email= '$email' AND password='$password_hash' ";
		if($query_run= mysqli_query($con, $query)){
			if(mysqli_num_rows($query_run)==1){
				
				while($result= mysqli_fetch_assoc($query_run)){
					$user_id= $result['id'];
					$_SESSION['user_id']= $user_id;
					echo ' 
							<script type="text/javascript">
								window.location = "../profile";
							</script>
						 ';
				}

			}else{
				echo 'Your e-mail or password is incorrect. Please try again.';
			}
		}else{
			echo 'There is some technical issue. Please try again after some time.';
		}
	}else{
		echo 'All fields are required.';
	}

}else{
	header('Location: index.php');
}

?>
