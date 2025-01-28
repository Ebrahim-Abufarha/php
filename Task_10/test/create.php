<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $stmt = $conn->prepare("INSERT INTO Employees (Name, Address, Salary) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $address, $salary);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>



<!-- if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (name , address , salary) VALUES ($name, $address,$salary)";

    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully!";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Add New Employee</h1>
    <form method="POST">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Address: <input type="text" name="address" required></label><br>
        <label>Salary: <input type="number" name="salary" required></label><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
