<?php 
include("DbConnect.php");

$myEmail=$_POST["MyEmail"];
$yourEmail=$_POST["YourEmail"];
$yourName=$_POST["YourName"];



$query="insert into notification_boy_tb (myEmail,yourEmail,yourName) values('".$myEmail."','".$yourEmail."','".$yourName."')";
$Status=mysqli_query($link,$query);

	if($Status==1)
	{
		$response="Requested";
	}	
	else
	{
		$response="Error";
	}

echo $response;
mysqli_close($link);
?>