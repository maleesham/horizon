<?php

	include_once'dbc.php';
	
	$fName = $_post['firstName'];
	$lName = $_post['lastName'];
	$email = $_post['email'];
	$pass = $_post['password'];
	
	$sql = "INSERT INTO members(firstName,lastName,email,password) VALUES ('$fName','$lName','$email','$pass')";
	$result = mysqli_query($connect, $sql);
	header("Location:connect.php?sighup=success");
	
?>