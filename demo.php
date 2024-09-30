<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Authentication</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f0f0f0;
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
position: relative;
overflow: hidden;
}
.container {
background-color: #fff;
border-radius: 8px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
padding: 40px;
max-width: 400px;
width: 90%;
text-align: center;
position: relative;
z-index: 1;
}
h1 {
color: #007bff;
margin-bottom: 20px;
font-size: 24px;
}

button {
background-color: #007bff;
color: #fff;
border: none;
border-radius: 5px;
padding: 14px 28px;
cursor: pointer;
font-size: 16px;
transition: background-color 0.3s ease;
margin: 10px;
width: 45%;
font-weight: bold;
outline: none;
}
button:hover {
background-color: #0056b3;
}
a {
display: block;
text-align: center;
margin-top: 20px;
color: #007bff;
text-decoration: none;
font-size: 14px;
}
a:hover {
text-decoration: underline;
}
.btn-container {
display: flex;
justify-content: space-between;
margin-top: 30px;
}
.wave {
position: absolute;
bottom: 0;
left: 0;
width: 100%;
height: 150px;
background: linear-gradient(to bottom, #f0f0f0 20%, #fff 80%);
animation: wave 10s linear infinite;

transform: translate3d(0, 0, 0);
z-index: 0;
}
@keyframes wave {
0% {
background-position-x: 0;
}
100% {
background-position-x: 100%;
}
}
</style>
</head>
<body>
<div class="container">
<h1>Welcome to User Authentication</h1>
<div class="btn-container">
<button onclick="window.location.href='register.php'">Register</button>
<button onclick="window.location.href='login.php'">Login</button>
</div>
</div>
<div class="wave"></div>
</body>
</html>