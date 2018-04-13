<?php 
include("DbConnect.php");

$selectGender="";
$email=$_POST["Email"];
$gender=$_POST["Gender"];
$query="";

if($gender=="Male")
{
	
	$query="select * from userregistration_tb where email in (select yourEmail from notification_girl_tb where myEmail='".$email."')";
}
else if($gender=="Female")
{
	
	$query="select * from userregistration_tb where email in (select myEmail from notification_girl_tb where yourEmail='".$email."')";
}


 
 $r=array();
 $result = mysqli_query($link,$query);
	$rows = mysqli_num_rows($result);
	if($rows>0)
	{


  		
 		while($res = mysqli_fetch_assoc($result))
 		{
	
			$r[]=$res;
		}
		echo json_encode(array('response'=>$r));
 
 	}
 else
 {
 	 echo $query;
 }

 
 
?>