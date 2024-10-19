<?php

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$birthday = $_POST['birthday'];
}	
	//DB connection
	$conn = new mysqli('localhost','root','','users');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(fname,lname,email,pwd,birthday) values (?,?,?,?,?)");
		$stmt->bind_param("ssssi",$fname,$lname,$email,$password,$birthday);
		$stmt->execute();
		echo "Registration Successfully";
		$stmt->close();
		Sconn->close();
	}

?>