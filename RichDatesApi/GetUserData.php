<?php 
include("DbConnect.php");

$selectGender="";
$email=$_POST["Email"];
$gender=$_POST["Gender"];
if($gender=="Male")
{
	$selectGender="Female";
	$query="select * from userregistration_tb where gender='".$selectGender."' and email not in (select girls_email from like_tb where email='".$email."')";
}
else if($gender=="Female")
{
	$selectGender="Male";
	$query="select * from userregistration_tb where gender='".$selectGender."' and email not in (select  b_email from req_not where g_email='".$email."') and email in (select email from like_tb where girls_email='".$email."')";
}


 
 
 $result = mysqli_query($link,$query);
	$rows = mysqli_num_rows($result);
	if($rows>0)
	{


  	$r=array();
 	while($res = mysqli_fetch_assoc($result))
 {
	
	$r[]=$res;
	}
echo json_encode(array('response'=>$r));
 
 }
 else
 {
 	 echo "Something Went Wrong";
 }

 
 
?>