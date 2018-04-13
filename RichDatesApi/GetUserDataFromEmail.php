<?php 
include("DbConnect.php");


$email=$_POST["Email"];


$query="Select * from userregistration_tb where email='".$email."'";
	$result = mysqli_query($link,$query);
	$rows = mysqli_num_rows($result);
  $r=array();
 while($res = mysqli_fetch_assoc($result))
 {
	
	$r[]=$res;
}
echo json_encode(array('response'=>$r));
mysqli_close($link);
?>