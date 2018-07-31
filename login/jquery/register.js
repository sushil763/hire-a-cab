$(document).ready(function(){
	$(".register-button").click(function(){
		var first_name= $("input[name= 'first_name']").val();
		var last_name= $("input[name= 'last_name']").val();
		var email= $(".register-email").val();
		var password= $(".register-password").val();
		var city= $("input[name= 'city']").val();
		

		if( (email=="") || (password=="") || (first_name=="") || (last_name=="") || (city=="") ){
			$(".register-alert").html("Please fill out all fields...");
		}else{
			$(".register-alert").html("Processing...");
			$.ajax({
					url:"register-form.php",
					type: "POST",
					dataType: "text",
					data: {email: email, password: password, last_name: last_name, first_name: first_name, city: city},
					success: function(result){
						$(".register-alert").html(result);
					}
			 	  });	
		}

	});
});