<?php

$host = 'localhost'; // Your database host
$db = 'horizon'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fullname = $_POST['fullname'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $ol_year = $_POST['ol_year'];
    $al_year = $_POST['al_year'];
    $pass_status = isset($_POST['pass']) ? $_POST['pass'] : 'not specified'; // Default value if not set
 // Assume "pass" and "fail" are the radio inputs
    $weekdays = isset($_POST['weekdays']) ? 1 : 0; // Checkbox
    $weekend = isset($_POST['weekend']) ? 1 : 0; // Checkbox
    $degree = $_POST['Degree'];

    // Handle file uploads
    $cv_path = 'uploads/cv/' . basename($_FILES['cv']['name']);
    $photo_path = 'uploads/photos/' . basename($_FILES['photo']['name']);


    move_uploaded_file($_FILES['cv']['tmp_name'], $cv_path);
    move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);

    $sql = "INSERT INTO stu_reg (firstname, lastname, fullname, password, dob, nic, gender, email, ol_year, al_year, pass, weekdays, weekend, degree, cv_path, photo_path)
            VALUES ('$firstname', '$lastname', '$fullname', '$password', '$dob', '$nic', '$gender', '$email', $ol_year, $al_year, '$pass_status', $weekdays, $weekend, '$degree', '$cv_path', '$photo_path')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: Index_Page.php"); 
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
