<?php 
include("DbConnect.php");

$name=$_POST["Name"];
$email=$_POST["Email"];
$dob=$_POST["Dob"];
$contact=$_POST["Contact"];
$password=$_POST["Password"];
$gender=$_POST["Gender"];
$image=$_POST["Image"];

$upload_path_image="Uploads/".$contact.".jpg";

$query="insert into userregistration_tb(name,email,dob,contact,password,gender,image) values('".$name."','".$email."','".$dob."','".$contact."','".$password."','".$gender."','".$contact.".jpg')";
$Status=mysqli_query($link,$query);

	if($Status==1)
	{
		file_put_contents($upload_path_image,base64_decode($image));
		$response="Registered";
	}	
	else
	{
		$response="Error";
	}

echo $response;
mysqli_close($link);
?>