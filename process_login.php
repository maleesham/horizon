<?php
require('database.php'); // Include the database connection

session_start(); // Start the session for storing login status

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the email and password from the form
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);

    // Check the database for a matching user
    $query = "SELECT * FROM `admin_reg` WHERE `email`='$email' AND `password`='" . md5($password) . "'";
    $result = mysqli_query($con, $query);

    // If the user is found
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Set session variables for the logged-in user
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['firstName'] . ' ' . $user['lastName'];

        // Redirect to welcome page
        header('Location: regInfo.php');
        exit();
    } else {
        // Set error message for invalid login
        $_SESSION['error_message'] = 'Invalid email or password';
        header('Location: login.php'); // Redirect back to login page
        exit();
    }
}
?>
