<?php
$host = 'localhost';
$dbname = 'company';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
