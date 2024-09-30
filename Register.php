<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tests";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die ("Connection failed: " . $conn->connect_error);
}
// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$phnumber = $_POST['phnumber'];
$password = $_POST['password'];

// SQL to insert data
$sql = "INSERT INTO registration (name, email, phnumber, password) VALUES
('$name', '$email', '$phnumber', '$password')";
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Registration successful!');
window.location='home.php?registered=true';</script>";
exit; // Terminate script execution after redirection
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup Page</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: rgb(186, 204, 202);
line-height: 1.4;
}
h2 {
color: #007BFF;
text-align: center;
margin-top:0;
}
.container {
max-width: 400px;
border-radius: 5px;
margin: auto;
padding: 20px;
border: 1px solid #007BFF;
margin-top: 30px;
background-color: #fff;
}

.container:hover {
box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
}
label {
display: block;
margin-bottom: 8px;
color: #333;
}
input {
width: 100%;
border-radius: 5px;
border: 1px solid #ced4da;
padding: 10px;
margin-bottom: 12px;
box-sizing: border-box;
}
button {
background-color: #007BFF;
color: white;
padding: 10px 15px;
width: 100%;
border: none;
border-radius: 4px;
cursor: pointer;
}
button:hover {
background-color: #0056b3;
}
.goBack {
background-color: #dc3545;
margin-top: 10px;
}
.goBack:hover {
background-color: #bd2130;
}
</style>
</head>
<body>

<div class="container">
<h2>Employee Registration Form</h2>
<form id="signupForm" method="post" action="register.php" onsubmit="return
validateForm()">
<label for="name">Name:</label>
<input type="text" id="name" name="name" placeholder="Enter your name"
required>
<label for="email">Email:</label>
<input type="email" id="email" name="email" placeholder="Enter your
email" required>
<label for="phnumber">phnumber:</label>
<input type="tel" id="phnumber" name="phnumber" placeholder="Enter your phnumber
number" required>
<label for="password">Password (8-15 characters):</label>
<input type="password" id="password" name="password" placeholder="Enter
your password" required>

<label for="password">Confirm Password:</label>
<input type="password" id="confPassword" name="confPassword"
placeholder="Re-enter your password" required>
<button type="submit">Sign Up</button>
</form>
<button class="goBack" onclick="window.location.href='index.php'">Go
Back</button>
</div>
<script>
function validateForm() {
var phnumberInput = document.getElementById('phnumber');
var phnumber = phnumberInput.value;

// Check if phnumber number is exactly 10 digits
if (phnumber.length !== 10) {
alert('phnumber number must be 10 digits.');
return false;
}

var passwordInput = document.getElementById('password');
var password = passwordInput.value;
var confPasswordInput =document.getElementById('confPassword');
var confPassword =confPasswordInput.value;
// Check if password is between 8 and 15
if (password.length < 8 || password.length > 15) {
alert('Password must be between 8 and 15 characters.');
return false;
}
//Check if Password = Confirm Password
if (password !== confPassword) {
alert('Confirm Password does not match!');
return false;
}
return true;
}
</script>
</body>
</html>                     