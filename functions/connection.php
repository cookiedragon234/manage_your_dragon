<?php
	//database credentials
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "password";
	$dbname = "manage_your_dragon_db";
	//connect to database
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//test if connected
	  if(mysqli_connect_errno()) {
	    die("Database connection failed: " . 
	         mysqli_connect_error() . 
	         " (" . mysqli_connect_errno() . ")"
	    );
	  }
?>