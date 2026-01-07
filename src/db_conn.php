<?php
$servername = "localhost";  // لـ Back4app container
$username = "root";
$password = "";
$dbname = "php-crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
