<?php 
include("DbConnect.php");

$name=$_POST["Name"];
$contact=$_POST["Contact"];
$email=$_POST["Email"];
$dob=$_POST["Dob"];
$imageName=$_POST["ImageName"];
$image=$_POST["Image"];
$intrests=$_POST["Intrests"];

$upload_path_image="Uploads/".$imageName;




$query="update userregistration_tb set name = '".$name."', contact = '".$contact."', dob = '".$dob."', image = '".$imageName."', intrests = '".$intrests."' where email='".$email."'";
$status=mysqli_query($link,$query);

		
			


if($status==1)
{

	file_put_contents($upload_path_image,base64_decode($image));



	$response="Updated";
}
else
{
	$response="Error";
}
echo $response;

?>