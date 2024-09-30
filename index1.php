<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Search</title>
</head>
<body>
<!-- HTML form for user input -->
<form method="GET" action="">
<label for="search_name">Enter Employee Name:</label>
<input type="text" name="search_name" id="search_name" required>
<button type="submit">Search</button>
</form
<?php
// Create an indexed array of employee names
$employee_names = array(
"John",
"Jane",
"Michael",
"Emily",
"David",
"Sophia",
"William",
"Olivia",
"Daniel",
"Emma",
"Matthew",
"Ava",
"Christopher",
"Mia",
"Andrew",
"Ella",
"James",
"Grace",
"Logan",
"Lily"
);
// Check if a name exists in the array
if (isset($_GET['search_name']))
{
$search_name=$_GET['search_name'];
$result = in_array($search_name, $employee_names);
if ($result) {
echo "<p> {$search_name} is an Employee.</p>";
}
else {
echo "<p> {$search_name} is not found in the list of Employees.</p>";
}
} 
?>
</body>
</html>
