<?php
$servername = "host.docker.internal"; // مهم: حتى تصل الحاوية لـ MySQL على جهازك
$username   = "root";
$password   = "";
$dbname     = "php-crud";

// Create connection
$conn = mysqli_connect("localhost", "root", "root", "php-crud");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>

