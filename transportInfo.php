<!DOCTYPE html>
<html>
<head><title>Retrieve Information</title></head>
<link rel="stylesheet" href="Campus.css" type="text/css">
<style type="text/css">
body{background-image:url('bgimg 3.jpg')
  }
#one{
      background-color:#FFFFFF;
      height:42px;
      border-top-style:solid;
      border-bottom-style:solid;
      border-width:thick;
      border-color:#00009C;
}

p.data{
	  width: 600px;
	  background-color:#E5E8FA;
      border-top-style:solid;
      border-bottom-style:solid;
      border-width:thin;
      border-color:#00009C;
}
</style>
</head>

<body bgcolor="#EAEAAE">


<div>



<div>
<p class="cover"> <img class="cover" src="logo.jpg" alt="LOGO" width="200" height="130">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<ins>HORIZON CAMPUS</ins>
</p></div>

<hr color="#00009C" size=5>
<p id="one">
        <br>
        <a href="Index_Page.php" class="button">Home</a>
        <a href="hostalInfo.php" class="button">Hostal Information</a>
        <a href="transportInfo.php" class="button">Transport Information</a>
        <a href="sportsInfo.php" class="button">Sports Information</a>
        <a href="libraryInfo.php" class="button">Library Information</a>
        <a href="stu_reg_info.php" class="button">Student Register Information</a>
    </p>

<center>
<p class="data">
</br>
<font size="5px" color="red">Information of transport registration</font>
</br></br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "horizon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstName, lastName, email, contactNumber, faculty FROM transport";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]."<br>". " - Name: ". $row["firstName"]. " " . $row["lastName"] . "<br> " ." - Email: ". $row["email"] . " <br>" ." - Contact Number: ". $row["contactNumber"] . "<br> " ." - Faculty: ". $row["faculty"] . "<br>";				
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</br></br>
</p>
</center>
<?php include 'footer.php';?>

</body>
</html>