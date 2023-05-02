<?php 
$Title = $_POST["Title"] ; 
$disc = $_POST["disc"] ;  
include "./connect.php"  ; 
// add user type 
$sql = "INSERT INTO usertype  ( Title , description ) VALUES ('$Title' , '$disc' ) " ; 
$con->query($sql) ; 
// done add user type ("Title,, Descript) 

// get the last ID for user Type 
$sql ="SELECT * FROM usertype order by id DESC " ; // Note neet to coorrecty   
$rese = $con->query($sql) ; 
$lasID = mysqli_fetch_assoc($rese) ; 
$lid = $lasID['id'] ; 

// add services to the user type  
$sql = "SELECT * from services" ; 
$res = $con->query($sql) ; 
while ($service = mysqli_fetch_assoc ($res) ) {
    $serid = $service['id'] ; 
    if ($_POST[$serid]) {
        $sqladdservicetotype = "INSERT INTO userservices (typeid, serviceid) VALUES ('$lid' , '$serid')" ;  
        $con->query($sqladdservicetotype) ; 
        
    

    }
}
header("Location: ../index.php")

?> 