<?php
$servername = "localhost"; // غيّر لـ localhost في Back4app
$username = "root";
$password = ""; // فارغ للـ container
$dbname = "php-crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>[code_file:1]
