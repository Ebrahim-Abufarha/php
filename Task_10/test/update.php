<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM Employees WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$employee = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $stmt = $conn->prepare("UPDATE Employees SET Name = ?, Address = ?, Salary = ? WHERE id = ?");
    $stmt->bind_param("ssii", $name, $address, $salary, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Update Employee</h1>
    <form method="POST">
        <label>Name: <input type="text" name="name" value="<?= $employee['Name'] ?>" required></label><br>
        <label>Address: <input type="text" name="address" value="<?= $employee['Address'] ?>" required></label><br>
        <label>Salary: <input type="number" name="salary" value="<?= $employee['Salary'] ?>" required></label><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
