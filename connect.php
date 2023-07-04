<?php
$servername = "103.159.36.10";
$username = "gremlins_user";
$password = "gremlins_user";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>