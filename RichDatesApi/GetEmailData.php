<?php 
include("DbConnect.php");

$selectGender="";
$email=$_POST["Email"];


	$query="select * from userregistration_tb where email='".$email."'";


 
 
 $result = mysqli_query($link,$query);
	$rows = mysqli_num_rows($result);
	if($rows>0)
	{


 
        echo "Present";
 
 }
 else
 {
     echo "Absent"; 
 }

 
 
?>