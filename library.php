<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Registration for Library</title>
<link rel="stylesheet" href="Campus.css" type="text/css">

<style type="text/css">
	
	body{background-image: Linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('bgimg 2.jpg');
	
	}
	
	#one{
      background-color:#FFFFFF;
      height:42px;
      border-top-style:solid;
      border-bottom-style:solid;
      border-width:thick;
      border-color:#00009C;
	}
	
	*{box-sizing: border-box; }
	html, body{margin: 0; padding: 0}
	
	.container{
		margin: 10px 400px;
		background-color: #E0FFFF;
	}
	
	.form-group{
		border: solid 1px #eee;
		padding: 15px 10px;
		color: black;
	}
	
	input{
		width:100%;
		border: solid 1px #eee;
		padding: 15px 10px;
	}
	
	button{
		background: #fff;
		color: dodgerblue;
		border-radius: 35px;
		transition: all .40s ease-in-out;
		padding: 15px;
		margin-left: 250px;
	}
	
	button:hover{
		background:blue;
		color:#fff;
	}
	
	.container{
		width: 640px;
		height: 720px;
		align: center;
		border: 5px solid #339;
	}
	
 </style>
</head>

<body>



<p class="cover"> <img class="cover" src="logo.jpg" alt="LOGO" width="200" height="130">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<ins>HORIZON CAMPUS</ins>
</p>

<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<div>
<hr color="#00009C" size=5>
<p id="one">
<br>
<a href="Index_Page.php" class="button">Home</a>
<a href="Forth_Page.php" class="button">Back</a>
</p>
</div>

<div class="container">
<h2 class="he"><u><center><font size="15px" color="red"> Registration Form for Library </font></center></u><h2>
<br><br>

<form name="myForm" action="getInfo5.php" method="post" >

<div class="form-group">
<b>First Name </b> <input type="text" name="fname" id="fname" required placeholder="Enter first name">
</div>

<div class="form-group">
<b>Last Name </b> <input type="text" name="lname" id="lname" required placeholder="Enter last name">
</div>

<div class="form-group">
<b>Email Address </b> <input type="email" name="email" id="email" required placeholder="Enter email address" >
</div>

<div class="form-group">
<b>Contact No </b> <input type="text" name="num" id="num" required placeholder="Enter contact number">
</div>

<div class="form-group">
<b>Faculty Name </b> <input type="text" name="faculty" id="faculty" required placeholder="Enter faculty name">
</div>


<div class="form-group1">
<button type="submit"><b>Register</b></button>
</div>


</form>
</div>

</br>
<?php include 'footer.php';?>

</body>
</html>