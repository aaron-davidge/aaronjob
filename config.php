<?php
$servername = "localhost";
$username = "root";
$password = "password";

ini_set('display_errors', 1);

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
