<?php
	$server_name="localhost";
$user_name="root";
$pass="";

$db_name="richdates";
	$link=mysqli_connect($server_name,$user_name,$pass,$db_name);
	if(!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

?>