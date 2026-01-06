<?php
$servername = "localhost"; // Back4app نفس الحاوية
$username   = "root";
$password   = "";          // فارغ للـ container
$dbname     = "php-crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
?>
