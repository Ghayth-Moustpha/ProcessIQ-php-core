<<<<<<< HEAD
<?php
session_start();

if (isset($_SESSION["usertype"])){ 
	$current_user_type = $_SESSION["usertype"]; 
	$url =  "location: ./" . $current_user_type . "/index.php"; 
	header($url) ; 
  }else {
	$url =  "location: ./index.php"; 
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
			

				
    	
        		<h1>Error you dont have premesstion to rich this Directory </h1>
    	

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
=======
<?php
session_start();

if (isset($_SESSION["usertype"])){ 
	$current_user_type = $_SESSION["usertype"]; 
	$url =  "location: ./" . $current_user_type . "/index.php"; 
	header($url) ; 
  }else {
	$url =  "location: ./index.php"; 
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
			

				
    	
        		<h1>Error you dont have premesstion to rich this Directory </h1>
    	

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
>>>>>>> c981a0dc5ebf0873a25eacb9f9e49090f3424746
</html>