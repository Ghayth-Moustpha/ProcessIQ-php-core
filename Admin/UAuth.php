<<<<<<< HEAD
<?php
session_start();
$current_user_type =  "ANYOM" ;  // defin
$current_user_name = "ANYOM" ; 
$isAuth = FALSE ; 
if (isset($_SESSION["usertype"])){ 
  $current_user_type = $_SESSION["usertype"]; 
  $current_user_name = $_SESSION["username"];  
  if ( $current_user_type  == "Admin") 
       $isAuth = TRUE ;  

}
if (!$isAuth)
  header("Location: ../Auth.php");
=======
<?php
session_start();
$current_user_type =  "ANYOM" ;  // defin
$current_user_name = "ANYOM" ; 
$isAuth = FALSE ; 
if (isset($_SESSION["usertype"])){ 
  $current_user_type = $_SESSION["usertype"]; 
  $current_user_name = $_SESSION["username"];  
  if ( $current_user_type  == "Admin") 
       $isAuth = TRUE ;  

}
if (!$isAuth)
  header("Location: ../Auth.php");
>>>>>>> c981a0dc5ebf0873a25eacb9f9e49090f3424746
?> 