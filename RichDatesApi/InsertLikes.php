<?php 
include("DbConnect.php");

$myEmail=$_POST["MyEmail"];
$girlsEmail=$_POST["GirlsEmail"];



$query="insert into like_tb values('".$myEmail."','".$girlsEmail."')";
$Status=mysqli_query($link,$query);

	if($Status==1)
	{
		$response="Liked";
	}	
	else
	{
		$response="Error";
	}

echo $response;
mysqli_close($link);
?>