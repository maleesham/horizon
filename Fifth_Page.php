<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="Campus.css" type="text/css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            font-size: 28px;
            margin-top: 20px;
            color: #333;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
        }

        input[type="text"], input[type="password"], input[type="email"], input[type="date"], input[type="file"], input[type="number"], input[type="color"], input[type="range"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="radio"], input[type="checkbox"] {
            margin-right: 10px;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        button, input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 48%;
            margin: 10px 1%;
        }

        button:hover, input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #333;
        }

        footer strong {
            color: #00009C;
        }
    </style>
</head>
<body>

<h2>Admin Registration Form</h2>

<center>
<form id="registrationForm" action="process_Stu_reg.php" method="POST" enctype="multipart/form-data">

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstname" placeholder="Maleesha" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastname" placeholder="Senevirathne" required>

    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullname" placeholder="Maleesha Senevirathne" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="nic">National ID no:</label>
    <input type="text" id="nic" name="nic" required>

    <p>Gender:</p>
    <input type="radio" id="male" name="gender" value="male" required> Male
    <input type="radio" id="female" name="gender" value="female" required> Female

    <label for="email">Email address:</label>
    <input type="email" id="email" name="email" placeholder="E-mail address" required>

    <label for="olYear">O/L year:</label>
    <input type="number" id="olYear" name="ol_year" min="2018" max="2023" value="2020" required>

    <label for="alYear">A/L year:</label>
    <input type="number" id="alYear" name="al_year" min="2018" max="2023" value="2020" required>

    <p>Passed the A/L:</p>
    <input type="radio" id="pass" name="pass" value="pass" required> Pass
    <input type="radio" id="fail" name="pass" value="fail" required> Fail

    <p>Degree programme you like:</p>
    <input type="checkbox" name="weekdays" value="weekdays"> Weekdays
    <input type="checkbox" name="weekend" value="weekend"> Weekends

    <label for="degree">Select a degree you liked:</label>
    <select id="degree" name="Degree" required>
        <option value="Science">Science</option>
        <option value="IT">IT</option>
        <option value="Education">Education</option>
        <option value="Management">Management</option>
    </select>

    <label for="cv">Upload your CV:</label>
    <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>

    <label for="photo">Upload your photo:</label>
    <input type="file" id="photo" name="photo" accept="image/*" required>

    <label for="suggestions">Suggestions:</label>
    <textarea id="suggestions" name="suggestions"></textarea>

    <input type="reset" value="Reset form">
    <input type="submit" value="Submit form">
</form>
</center>
<div id="messageContainer" style="text-align: center; margin-top: 20px; font-size: 18px; color: green;"></div>
<footer>
    <center><strong>&copy; Maleesha Senevirathna. All Rights Reserved.</strong></center>
</footer>

<script>
   // Example form submission using JavaScript
const form = document.querySelector('form'); // Ensure you have a form element

form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    const formData = new FormData(form); // Create FormData object from the form

    // Now, you can send the form data to your PHP script using fetch or XMLHttpRequest
    fetch('process_Stu_reg.php', {
    method: 'POST',
    body: formData
})
.then(response => response.text())
.then(data => {
    // Display the server response in an alert or a designated area
    alert("sucess"); // This will show the success/error message as an alert
    // Alternatively, you can display it in a specific HTML element:
    // document.getElementById('messageContainer').innerText = data;
    document.getElementById('registrationForm').reset();
})
.catch(error => {
    console.error('Error:', error); // Handle errors
});
});

</script>


</body>
</html>
