<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Update Employee Information</h2>

    <?php 
    if (isset($_GET['id']) && intval($_GET['id']) > 0) {
        $id = intval($_GET['id']);
        $sql = "SELECT * FROM `employees` WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultt = $stmt->get_result();
        $row = $resultt->fetch_assoc();
    }
    ?>

    <div class="card p-4 shadow">
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input value="<?php echo htmlspecialchars($row['name']); ?>" name="name" type="text" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Salary</label>
                <input value="<?php echo htmlspecialchars($row['salary']); ?>" name="salary" type="number" step="0.01" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input value="<?php echo htmlspecialchars($row['address']); ?>" name="address" type="text" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Off Days</label>
                <input value="<?php echo htmlspecialchars($row['off_days']); ?>" name="off_days" type="number" class="form-control" required>
            </div>

            <button type="submit" name="update" class="btn btn-success w-100">Update</button>
        </form>
    </div>

    <div class="text-center mt-3">
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
    </div>
</div>

<?php 
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $off_days = $_POST['off_days'];

    if (!empty($name) && !empty($address) && !empty($salary)) {
        $query = "UPDATE `employees` SET `name`=?, `address`=?, `salary`=?, `off_days`=? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssdii", $name, $address, $salary, $off_days, $id);
        $stmt->execute();

        echo "<script>alert('Employee updated successfully!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
