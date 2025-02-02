<?php 
include("config.php");

if (isset($_GET['id']) && intval($_GET['id']) > 0) {
    $id = intval($_GET['id']);

    $query = "SELECT * FROM `employees` WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Employee not found!'); window.location='index.php';</script>";
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Employee Details</h2>

        <table class="table table-bordered">
            <tr>
                <th>ID:</th>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
            </tr>
            <tr>
                <th>Salary:</th>
                <td><?php echo htmlspecialchars($row['salary']); ?> JD</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo htmlspecialchars($row['address']); ?></td>
            </tr>
            <tr>
                <th>Off Days:</th>
                <td><?php echo htmlspecialchars($row['off_days']); ?></td>
            </tr>
        </table>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
