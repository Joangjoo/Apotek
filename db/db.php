<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "apotek";

// Create connection
$conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n" . $conn->error);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>