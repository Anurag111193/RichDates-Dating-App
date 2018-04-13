<?php 
include("DbConnect.php");


$email=$_POST["Email"];

$query="select * from userregistration_tb where email='".$email."'";

 
 
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