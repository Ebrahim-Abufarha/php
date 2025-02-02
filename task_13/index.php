<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            position: relative;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Employee Management</h2>

    <div class="mb-3">
        <a href="add.php" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add New Employee</a>
        <a href="changeSalaryAll.php" class="btn btn-warning"><i class="fas fa-dollar-sign"></i> Update Salary</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Days Off</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM `employees`";
                    $result = $conn->query($sql);
                    foreach ($result as $x) {
                        echo "<tr>
                            <td>{$x['id']}</td>
                            <td>{$x['name']}</td>
                            <td>{$x['address']}</td>
                            <td>\${$x['salary']}</td>
                            <td>{$x['off_days']}</td>
                            <td>
                                <a href='read.php?id={$x['id']}' class='btn btn-info btn-sm'><i class='fas fa-eye'></i></a>
                                <a href='update.php?id={$x['id']}' class='btn btn-success btn-sm'><i class='fas fa-edit'></i></a>
                                <a href='delete.php?id={$x['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'><i class='fas fa-trash'></i></a>
                                <a href='cal.php?id={$x['id']}' class='btn btn-secondary btn-sm'><i class='fas fa-calculator'></i></a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        <form method="GET" class="d-flex">
            <input name="id" type="number" class="form-control me-2" placeholder="Enter Employee ID" required>
            <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i> Search</button>
        </form>
    </div>

    <div id="popup" class="popup-overlay">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h3>Employee Details</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Days Off</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `employees` WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $id);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($x = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>{$x['id']}</td>
                                    <td>{$x['name']}</td>
                                    <td>{$x['address']}</td>
                                    <td>\${$x['salary']}</td>
                                    <td>{$x['off_days']}</td>
                                </tr>";
                            }
                            echo "<script>document.getElementById('popup').style.display = 'flex';</script>";
                        } else {
                            echo "<tr><td colspan='5'>No employee found.</td></tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4 card p-3 shadow">
        <h4>Salary Statistics</h4>
        <?php 
        $sql = "SELECT MAX(salary) AS max_salary, MIN(salary) AS min_salary, COUNT(*) AS employee_count, SUM(salary) AS total_salary FROM `employees`";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            echo "<p><strong>Highest Salary:</strong> \$" . $row['max_salary'] . "</p>";
            echo "<p><strong>Lowest Salary:</strong> \$" . $row['min_salary'] . "</p>";
            echo "<p><strong>Total Employees:</strong> " . $row['employee_count'] . "</p>";
            echo "<p><strong>Total Salary Paid:</strong> \$" . $row['total_salary'] . "</p>";
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>

</body>
</html>
