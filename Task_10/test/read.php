<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM Employees WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$employee = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Employee</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Employee Details</h1>
    <p><strong>ID:</strong> <?= $employee['id'] ?></p>
    <p><strong>Name:</strong> <?= $employee['Name'] ?></p>
    <p><strong>Address:</strong> <?= $employee['Address'] ?></p>
    <p><strong>Salary:</strong> <?= $employee['Salary'] ?></p>
    <a href="index.php">Back to List</a>
</body>
</html>
