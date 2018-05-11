<?php
	$server = "https://databases.000webhost.com";
	$username = "id5725944_root";
	$password = "mahebot123";
	$db = "id5725944_mahebot";
	$con = mysqli_connect($server,$username,$password,$db);

	// Check connection
	if (!$con){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
