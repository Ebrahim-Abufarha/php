<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Salary</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">Update Employee Salary</h2>

    <div class="card p-4 shadow">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="employee_id" class="form-label">Enter Employee ID (Leave empty for all employees):</label>
                <input type="number" name="employee_id" class="form-control" placeholder="Employee ID">
            </div>

            <div class="mb-3">
                <label for="salary_change" class="form-label">Enter Amount to Increase/Decrease:</label>
                <input type="number" name="salary_change" class="form-control" required placeholder="Enter a positive or negative value">
            </div>

            <button type="submit" name="update_salary" class="btn btn-primary w-100">Update Salary</button>
        </form>
    </div>

    <div class="text-center mt-3">
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
    </div>
</div>

<?php
if(isset($_POST['update_salary'])){
    $salary_change = $_POST['salary_change'];
    $employee_id = isset($_POST['employee_id']) && !empty($_POST['employee_id']) ? intval($_POST['employee_id']) : null;

    if ($employee_id) {
        $query_update = "UPDATE `employees` SET `salary` = `salary` + ? WHERE `id` = ?";
        $stmt = $conn->prepare($query_update);
        $stmt->bind_param("di", $salary_change, $employee_id);
    } else {
        $query_update = "UPDATE `employees` SET `salary` = `salary` + ?";
        $stmt = $conn->prepare($query_update);
        $stmt->bind_param("d", $salary_change);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Salary updated successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error updating salary. Please try again.');</script>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
