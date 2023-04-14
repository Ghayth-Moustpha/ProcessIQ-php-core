<?php
session_start();

if (isset($_SESSION["usertype"])){ 
	$current_user_type = $_SESSION["usertype"]; 
	$url =  "location: ./" . $current_user_type . "/index.php"; 
	header($url) ; 
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> RMI Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./indexStyle/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./indexStyle/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./indexStyle/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./indexStyle/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./indexStyle/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./indexStyle/css/util.css">
	<link rel="stylesheet" type="text/css" href="./indexStyle/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="./indexStyle/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="login.php" >
					<span class="login100-form-title" >
						CMMI project  
						
					</span>
					<p class="text-center" style="font-size: 15px; margin:  20px;; width: 100%;;">
						 Software Engineering Development 
					</br>

				</p>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							جميع الحقوق محفوظة لصالح الجامعة السورية الخاصة SPU
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="./indexStyle/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./indexStyle/vendor/bootstrap/js/popper.js"></script>
	<script src="./indexStyle/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./indexStyle/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./indexStyle/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="./indexStyle/js/main.js"></script>

</body>
</html>