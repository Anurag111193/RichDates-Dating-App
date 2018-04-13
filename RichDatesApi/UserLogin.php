<?php 
include("DbConnect.php");


$email=$_POST["Email"];

$password=$_POST["Password"];

$query="Select * from userregistration_tb where email='".$email."' && password='".$password."'";
	$result = mysqli_query($link,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
  $r=array();
 while($res = mysqli_fetch_assoc($result))
 {
	
	$r[]=$res;
}
echo json_encode(array('response'=>$r));

mysqli_close($link);
?>