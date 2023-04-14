<?php 
session_start();

$usermail =  $_POST['email'] ;
$userpass=  $_POST['pass']; 
include 'connect.php' ; 
$sql = "SELECT * FROM users where username = '$usermail' and pass = '$userpass'  " ;
$res = $con->query($sql) ;   // OOP ,  for  
// user : id , name , mail , passwrod , type 
// 
if ( $user = $res->fetch_assoc()) { 
    $type = $user['type'] ;   
    $url =  "location: ./" . $type . "/index.php"; 
    $_SESSION["userinsystem"] = $user ;  
    $_SESSION['usertype'] = $type  ;   
    $_SESSION["username"] = $user["firstname"]. " " . $user["lastname"] ; 
    header($url);  // redirection 
   
}else printf ("no user ") ; 

?>