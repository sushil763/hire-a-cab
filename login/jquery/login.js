$(document).ready(function(){
	$(".login-button").click(function(){
		var email= $(".login-email").val();
		var password= $(".login-password").val();
		

		if( (email=="") || (password=="") ){
			$(".login-alert").html("Please fill out all fields...");
		}else{
			$(".login-alert").html("Processing...");
			$.ajax({
					url:"login-form.php",
					type: "POST",
					dataType: "text",
					data: {email: email, password: password},
					success: function(result){
						$(".login-alert").html(result);
					}
			 	  });	
		}

	});
});