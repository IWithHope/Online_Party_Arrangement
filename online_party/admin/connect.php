<?php
	$servername ="127.0.0.1";
	$username ="root";
	$password ="";
	$db = "LankaProperty";


	//Database Connection
	$conn = new mysqli($servername, $username, $password, $db);

	//check connection 

	if($conn->connect_error)
	{
		die("connection failed: ".$conn->connect_error);
	}
	else{
		//echo"Connected Successfull";
	}
	
?>
