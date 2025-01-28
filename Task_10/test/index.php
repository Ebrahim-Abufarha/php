<?php
require 'config.php';

// استرجاع جميع البيانات من جدول الموظفين
$query = "SELECT * FROM Employees";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Employees List</h1>
    <a href="create.php">Add New Employee</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
        <?php while ($employee = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $employee['id'] ?></td>
                <td><?= $employee['Name'] ?></td>
                <td><?= $employee['Address'] ?></td>
                <td><?= $employee['Salary'] ?></td>
                <td>
                    <a href="read.php?id=<?= $employee['id'] ?>">View</a>
                    <a href="update.php?id=<?= $employee['id'] ?>">Update</a>
                    <a href="delete.php?id=<?= $employee['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
