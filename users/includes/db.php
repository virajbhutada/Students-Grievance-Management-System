<?php
$servername = "codembs.com";
$username = "codembsc_ritesh";
$password = "Ritesh@123";
$dbname = "codembsc_ritesh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

