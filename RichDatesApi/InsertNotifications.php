<?php 
include("DbConnect.php");

$myEmail=$_POST["MyEmail"];
$yourEmail=$_POST["YourEmail"];
$myName=$_POST["MyName"];


$query="insert into notification_girl_tb (myEmail,yourEmail,myName) values('".$myEmail."','".$yourEmail."','".$myName."')";

$Status=mysqli_query($link,$query);

	if($Status==1)
	{
		$response="Confirmed";
	}	
	else
	{
		$response="Error";
	}

echo $response;
mysqli_close($link);
?>