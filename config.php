<?php
	$server = "localhost";
	$username = "root";
	$password = "1997";
	$db = "mahebot";
	$con = mysqli_connect($server,$username,$password,$db);

	// Check connection
	if (!$con){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
