<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Registration</title>
<link rel="stylesheet" href="Campus.css" type="text/css">

<style type="text/css">
	
	body{background-image: Linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('bgimg 15.jpg');
	
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
		background-color: white;
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
		height: 700px;
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
</p>
</div>

<script >
function emailValidation()
{
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 {
 alert("Not a valid e-mail address");
 return false;
 }
} 

function numberValidation()
{
var x=document.forms["myForm"]["pwd"].value;
if (isNaN(pwd)){
	document.getElementById("numloc").innerHTML = "Enter Numerical values Only";
 return false;
 }
 else{
	 return true;
 }
} </script>


<div class="container">
<h2 class="he"><u><center> <font size="15px" color="red"> Registration Form </font></center></u><h2>
<br><br>

<form name="myForm" action="getInfo.php" method="post" onsubmit="return  emailValidation(), return numberValidation()">

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
<b>Password </b> <input type="password" name="pwd" id="pwd" required placeholder="Enter new password">
</div>

<div class="form-group">
<b>Choose a faculty</b> </br>
  <select id="cars" name="cars">
    <option value="IT">IT</option>
    <option value="Management">Management</option>
    <option value="Science" selected>Science</option>
    <option value="Law">Law</option>
	<option value="Education">Education</option>
  </select>
</div>



<div class="form-group1">
<button type="submit"><b>Sign Up</b></button>
</div>
</br>

</form>
</div>
</br></br>

<?php include 'footer.php';?>

</body>
</html>