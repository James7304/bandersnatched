<?php
$servername = "sql750.main-hosting.eu";
$username = "u202629177_admin";
$password = "Bandersnatched123";
$dbname = "u202629177_bandersnatched";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>