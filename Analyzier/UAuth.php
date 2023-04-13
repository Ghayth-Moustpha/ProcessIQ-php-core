<?php 
session_start();
$current_user_type =  "ANYOM" ;  // defin
$current_user_name = "ANYOM" ; 
$isAuth = FALSE ; 
if (isset($_SESSION["usertype"])){ 
  $current_user_type = $_SESSION["usertype"]; 
  $current_user_name = $_SESSION["username"];  
  if ( $current_user_type  == "Analyzier") 
       $isAuth = TRUE ;  

}
if (!$isAuth)
  header("Location: ../Auth.php");

?> 