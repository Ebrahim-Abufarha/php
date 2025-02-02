<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3>Add New Employee</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input name="salary" type="number" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Off Days</label>
                    <input name="Off_days" type="number" class="form-control" required>
                </div>

                <button type="submit" name="add" class="btn btn-success w-100">Add Employee</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $Off_days = $_POST['Off_days'];

    if (!empty($name) && !empty($address) && !empty($salary)) {
        $query = "INSERT INTO `employees`(`name`, `address`, `salary`, `off_days`) VALUES ('$name','$address','$salary','$Off_days')";
        $result = $conn->query($query);
        if ($result) {
            echo "<script>alert('Employee added successfully'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Error occurred while adding employee');</script>";
        }
    } else {
        echo "<script>alert('Please fill in all fields');</script>";
    }
}
?>
