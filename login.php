<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_data";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Form data
$email = $_POST['email'];

$password = $_POST['password'];
// SQL to check user credentials
$sql = "SELECT * FROM empTbl WHERE email='$email' AND
password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// User found, redirect to dashboard or any other page
$_SESSION['loggedin'] = true;
header('Location: home.php');
exit;
} else {
// User not found or incorrect credentials
echo "<script>alert('Invalid email or password. Please try again.');</script>";
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: rgb(186, 204, 202);
line-height: 1.4;
margin: 0;
padding: 0;
}
h2 {
color: #007BFF;
text-align: center;
}
.container {
max-width: 400px;
border-radius: 5px;
margin: auto;
padding: 20px;

border: 1px solid #007BFF;
margin-top: 50px;
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
<h2>Login Form</h2>
<form id="loginForm" method="post" action="login.php" onsubmit="return
validateForm()">
<label for="email">Email:</label>
<input type="email" id="email" name="email" placeholder="Enter your
email" required>
<label for="password">Password:</label>
<input type="password" id="password" name="password" placeholder="Enter
your password" required>
<button type="submit">Login</button>
</form>
<button class="goBack" onclick="window.location.href='index.php'">Go
Back</button>
</div>
</body>
</html>