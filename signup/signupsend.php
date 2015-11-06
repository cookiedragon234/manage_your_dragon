<?php
include('../functions/connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = 'SELECT * FROM `members` WHERE `username` = `$username`';
$result = mysqli_query('$connection', '$query');
if($result->num_rows){
	header('location: index.php?duplicateusername=true');
} else{

	$signupquery = 'INSERT INTO `members`(`name`, `username`, `email`, `password`) VALUES (`$name`, `$username`, `$email`, `$password`';
	$signupresult = mysqli_query('$connection', '$signupquery');

	if($signupresult){
		header('location: ../login');
	} else{
		echo 'Error';
	};
	
}

?>