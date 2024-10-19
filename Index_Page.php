<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INDEX</title>
<link rel="stylesheet" href="Campus.css" type="text/css">
<style type="text/css">
 body{background-image:url('bgimg 5.jpg')
  }

  img.photo1{
       float:right;
       margin: 10px;
 }
 p.paragraph1{
   font-size:20px;
   padding:15px;
   background-color:#70DBDB;
   border: 3px solid #6C4788;
 }
 p.paragraph2{
   float:left;
   font-size:20px;
   padding:15px;
   background-color:#E5E8FA;
   border: 2px solid #6C4788;
 }
 p.paragraph3{
   float:right;
   font-size:20px;
   padding:15px;
   background-color:#E5E8FA;
   border: 2px solid #6C4788;
 }
 
 .year{color:blue}
 .name{background-color:yellow}
 .degree{color:red}
 
 /* Button used to open the contact form - fixed at the top of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}


.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}    

</style>
</head>

<body>

<div>

<p class="cover"> <img class="cover" src="logo.jpg" alt="LOGO" width="200" height="130">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<ins>HORIZON CAMPUS</ins>
</p></div>


<div><p><nav> 
  <a href="First_Page.php">More</a> &nbsp&nbsp
  <a href="Second_Page.php">Officers</a> &nbsp&nbsp
  <a href="Third_Page.php">Courses</a> &nbsp&nbsp
  <a href="Forth_Page.php">Facilities</a> &nbsp&nbsp
  <a href="Registration.php">Registration</a> &nbsp&nbsp
</nav></p></div>


<div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p class="paragraph1"> <img class="photo1" src="photo 1.jpg" alt="Photo1" width="500" height="250">
<u><b><font size="20px" color="red">Overview of Horizon Campus</font></b></u>
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
An accredited & internationally recognized modern private higher educational institute in Sri Lanka.
Founded in 
<span class="year"> 2009 </span>, 
<span class="name">Horizon College of Business & Technology (Pvt) Limited (Horizon Campus)</span>
is a leading modern private higher education institute in the outskirts of Colombo, Sri Lanka, gread to
provide an inspiring learning experience to the student in a holistic university atmosphere. Currently 
Horizon offers <span class="degree"> 15 accredited Degree Programmes </span>
& more than 900 students have been enrolled tostudy for Sri Lanka, UK, Malaysia or US qualifications annually. Horizon Campus gurantees its
students of a nationally & internationally recognized qualifications which will open doors to their
global career & further education opportunities.
</p> 
</div>

<div><p class="paragraph2"> 
<i><font size="10px" color="red">Our vision</font></i>
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
To be the Center of excellence, in providing a truly inspired learning 
experience in a holistic.
</p>
<p class="paragraph3"> 
<i><font size="10px" color="red">Our mission</font></i>
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
Our Horizon campus's mission is to be the most preferred residential campus. 
</p>
</div>
 
<p><center><font color="#8E236B" size="10px"><u>Founder Member</u></font>
<br><br><br>
<font size="4px"><b>Horizon campus is a founder member of the Sri Lanka Association of Non-State Higher Education Institute (SLANSHEI)
and currently holds the Secretariat of SLANSHIE. 
</font></b></center></p>

<br><br>
<p><center><font color="#8E236B" size="10px"><u>Contact Us</u></font>
<br><br>
<font color="#0000000" size="5px">
<table border=0 bgcolor="white">
<tr><td> <center><b>Telephone<br>
          +94 716 613 613 <br>
          +94 114 365 555 <br><br></b> </td></tr>

<tr><td> <center><b>Facebook</b><br>
          <a href="https://touch.facebook.com/?_rdr">facebook.com/HorizonCampus</a> <br><br> </td></tr>

<tr><td> <center><b>Twitter</b><br>
          <a href="https://twitter.com/login">Twitter.com/@HorizonCampus</a> <br><br> </td></tr>

<tr><td> <center><b>Web site</b><br>
          <a href="https://horizoncampus.edu.lk>www.horizoncampus.lk</a> <br><br> </td></tr>

<tr><td> <center><b>Email</b><br>
          <a href="https://horizoncampus.lk/login/index.php>info@horizoncampus.edu.lk</a> <br><br> </td></tr>

<tr><td> <center><b>Horizon - Sri Lanka<br>
          Suhada Mawatha, Millennium Drive, Chandrika Kumarathunga Mawatha, Malabe, Sri Lanka <br><br> </td></b></tr>



</font>
</table>


<!-- <button class="open-button" onclick="openForm()">Login</button>

<div class="form-popup" id="myForm">
  <form action="regInfo.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script> -->


<?php include 'footer.php';?>

</body>
</html>