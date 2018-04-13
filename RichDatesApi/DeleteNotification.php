<?php 
include("DbConnect.php");

$myEmail=$_POST["MyEmail"];
$yourEmail=$_POST["YourEmail"];




$query="delete  from notification_boy_tb where yourEmail='".$myEmail."' and myEmail='".$yourEmail."'";
$Status=mysqli_query($link,$query);

	if($Status==1)
	{
		$response="Deleted";
	}	
	else
	{
		$response="Error";
	}

echo $response;
mysqli_close($link);
?>