<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "admin";
$dbPassword = "raspberry";
$dbName     = "oss_diary";

// Create database connection
$db = mysqli_connect("localhost", "admin", "raspberry", "oss_diary");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
