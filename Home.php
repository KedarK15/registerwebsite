<?php
session_start();
// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
header('Location: index.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: rgb(186, 204, 202);
line-height: 1.4;

margin: 0;
padding: 0;
}
.container {
max-width: 600px;
margin: auto;
padding: 20px;
background-color: #fff;
border-radius: 5px;
border: 1px solid #007BFF;
margin-top: 50px;
}
h2 {
color: #007BFF;
text-align: center;
}
p {
text-align: center;
margin-top: 20px;
}
.logout-btn {
display: block;
margin-top: 20px;
width: 100px;
padding: 10px;
background-color: #dc3545;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
text-align: center;
margin-left: auto;
margin-right: auto;
}
.logout-btn:hover {
background-color: #bd2130;
}
</style>
</head>
<body>

<div class="container">
<h2>Welcome to the Home Page!</h2>
<p>You are logged in.</p>
<form action="logout.php" method="post">
<button type="submit" class="logout-btn">Logout</button>
</form>
</div>
</body>
</html>