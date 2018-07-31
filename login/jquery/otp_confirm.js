$(document).ready(function(){
	$("#otp-button").click(function(){
		var otp= $("input[name= 'otp']").val();

		if( (otp=="")){
			$(".otp-alert").html("Otp is required...");
		}else{
			$(".otp-alert").html("Processing...");
			$.ajax({
					url:"otp_confirm.php",
					type: "POST",
					dataType: "text",
					data: {otp: otp},
					success: function(result){
						$(".otp-alert").html(result);
					}
			 	  });	
		}

	});

});