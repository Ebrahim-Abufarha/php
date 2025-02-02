<?php 
include("config.php");

if (isset($_GET['id']) && intval($_GET['id']) > 0) {
    $id = intval($_GET['id']); 

    // استخدام prepared statements لتحسين الأمان
    $query = "SELECT * FROM `employees` WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $new_salary = $row['salary'] - (($row['salary'] / 30) * $row['off_days']);
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
    <title>Calculate Net Salary</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .salary-card {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .salary-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>
<body class="bg-light">

<div class="container">
    <div class="card salary-card text-center bg-white">
        <h3 class="mb-4">Employee Salary Details</h3>

        <table class="table table-bordered">
            <tr>
                <th>Name:</th>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
            </tr>
            <tr>
                <th>Base Salary:</th>
                <td><?php echo htmlspecialchars($row['salary']); ?> JD</td>
            </tr>
            <tr>
                <th>Days Off:</th>
                <td><?php echo htmlspecialchars($row['off_days']); ?> days</td>
            </tr>
            <tr>
                <th>Net Salary:</th>
                <td class="salary-value"><?php echo number_format($new_salary, 2); ?> JD</td>
            </tr>
        </table>

        <a href="index.php" class="btn btn-primary mt-3">Back to Home</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
