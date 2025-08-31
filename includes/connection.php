<?php
// includes/connection.php

$servername = "localhost";   // hosting par change karna hoga
$username   = "root";        // phpMyAdmin ka username
$password   = "";            // phpMyAdmin ka password (default empty in XAMPP)
$database   = "organ_donation";  // SQL file ka database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}
?>
