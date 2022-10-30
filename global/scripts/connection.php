<?php
$servername = "sql750.main-hosting.eu";
$username = "admin";
$password = "Bandersnatched123";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>