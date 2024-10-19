<?php
require('database.php'); // Include the database connection

session_start(); // Start the session for handling messages

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data and sanitize it
    $firstName = stripslashes($_POST['firstName']);
    $firstName = mysqli_real_escape_string($con, $firstName);

    $lastName = stripslashes($_POST['lastName']);
    $lastName = mysqli_real_escape_string($con, $lastName);

    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);

    // Check if the email already exists in the database
    $query = "SELECT * FROM `admin_reg` WHERE `email`='$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Email already exists, show an error
        $_SESSION['register_error'] = 'Email already exists. Please try a different one.';
        header('Location: admin_register.php');
        exit();
    } else {
        // Insert new admin into the database
        $query = "INSERT INTO `admin_reg` (firstName, lastName, email, password) 
                  VALUES ('$firstName', '$lastName', '$email', '" . md5($password) . "')";
        
        if (mysqli_query($con, $query)) {
            // Registration successful, redirect to login page
            header('Location: login.php');
            exit();
        } else {
            // Registration failed, show an error
            $_SESSION['register_error'] = 'Registration failed. Please try again.';
            header('Location: admin_register.php');
            exit();
        }
    }
}
?>
