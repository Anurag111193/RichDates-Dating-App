<?php 
include("DbConnect.php");


$email=$_POST["Email"];

$r=array();
$name="";
$query="Select  myName from notification_girl_tb where yourEmail='".$email."'";
$result = mysqli_query($link,$query) or die(mysql_error());
	if(mysqli_num_rows($result)>0)
	{
	    
	while($row=mysqli_fetch_array($result))
	{
	    
	    
	    $r[]=$row;
	    
	}

	echo json_encode(array('response'=>$r));

}
else
{
  echo "error";
}


mysqli_close($link);
?>