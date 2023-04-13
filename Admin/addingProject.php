
<?php 
include "../connect.php" ; 
$Title = $_POST["Title"] ; 
$desc = $_POST["disc"] ; 
$Deadline = $_POST["Deadline"] ; 
$nowDate = Date("Y-m-d") ; 
$note = "No comment" ; 
$Sql = "INSERT INTO projects (Title, description, Deadline, lunchDate, Notes)
     VALUES ( '$Title', '$desc', '$Deadline',  '$nowDate', '$note' ); " ; 
$res = $con->query($Sql) ; 
header("Location: ./projects.php"); 


?> 
