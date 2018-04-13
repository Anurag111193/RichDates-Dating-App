<?php 
include("DbConnect.php");


$email=$_POST["Email"];

$password=$_POST["Password"];

$query="Select * from userregistration_tb where email='".$email."' && password='".$password."'";
	$result = mysqli_query($link,$query) or die(mysql_error());
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
    echo 'Error';
}
mysqli_close($link);
?>