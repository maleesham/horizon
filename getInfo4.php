<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Getting Information</title>
<link rel="stylesheet" href="Campus.css" type="text/css">
<style type="text/css">
 body{background-image:url('bgimg 17.jpg')
  }

 h3{
   font-size:30px;
   padding:12px;
   background-color:#70DBDB;
   border: 3px solid #6C4788;
   width:500px;
   float:center;
   height:120px;
   font-family:harrington;
 }
 
</style>
</head>

<body>

<div>

<p class="cover"> <img class="cover" src="logo.jpg" alt="LOGO" width="200" height="130">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<ins>HORIZON CAMPUS</ins>
</p></div>


<hr color="#00009C" size=5>
<p id="one">
<br>
<a href="Index_Page.php" class="button">Home</a>
<a href="Second_Page.php" class="button">Officers</a>
<a href="Third_Page.php" class="button">Courses</a>
<a href="Forth_Page.php" class="button">Facilities</a>
</p>

<body>


<?php


 require('database.php');
 // When form submitted, insert values into the database.


 if (isset($_REQUEST['fname'])) {
	 
 // removes backslashes
 //escapes special characters in a string

 //get first name
 $fname = stripslashes($_REQUEST['fname']);
 $fname = mysqli_real_escape_string($con, $fname);
 
 //get last name
 $lname = stripslashes($_REQUEST['lname']);
 $lname = mysqli_real_escape_string($con, $lname);


  //get email
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con, $email);

  //get contact number
 $num = stripslashes($_REQUEST['num']);
 $num = mysqli_real_escape_string($con, $num);

 //get faculty
 $faculty = stripslashes($_REQUEST['faculty']);
 $faculty = mysqli_real_escape_string($con, $faculty);



 $query = "INSERT into `sports` (firstName,lastName,email,contactNumber,faculty)
			VALUES ('$fname','$lname','$email','$num','$faculty')";
 $result = mysqli_query($con, $query);

 if ($result) {
 
 echo "<h3><center>You are registered successfully for sports in Horizon campus. </br> Congradulations!!!</center></h3><br/>
 </div>";
 } 
 
 else {
 echo "<h3 >Required fields are missing.</h3><br/>
 <p>Click here to <a href='Registration.php'>Registration</a></p>
 </div>";
 }
 } 
?> 



<?php include 'footer.php';?>

</body>
</html>