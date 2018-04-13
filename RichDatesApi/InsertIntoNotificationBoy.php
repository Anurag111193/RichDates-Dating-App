<?php 
include("DbConnect.php");

$myEmail=$_POST["MyEmail"];
$yourEmail=$_POST["YourEmail"];
$myName=$_POST["MyName"];



$query="insert into notification_boy_tb (myEmail,yourEmail,myName) values('".$myEmail."','".$yourEmail."','".$myName."')";
$Status=mysqli_query($link,$query);
$query="insert into req_not (g_email,b_email) values('".$myEmail."','".$yourEmail."')";
mysqli_query($link,$query);

	if($Status==1)
	{
		$response="Requested";
	}	
	else
	{
		$response="Something Went Wrong";
	}

echo $response;
mysqli_close($link);
?>