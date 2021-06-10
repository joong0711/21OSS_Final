<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "oss_diary";

// Create database connection
$db = mysqli_connect("localhost", "root", "", "oss_diary");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>