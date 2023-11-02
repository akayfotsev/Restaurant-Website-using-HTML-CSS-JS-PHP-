<?php

// Database connection information
$host = "localhost"; // Your database host 
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "restaurant"; // Your database name

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into "customer" table
$sql = "INSERT INTO customer (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "Thank you for your message!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);

?>

