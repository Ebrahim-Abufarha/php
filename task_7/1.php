<?php
$servername = "localhost"; 
$username = "root";       
$password = "";        
$dbname = "student";        

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT first_name, middle_name, family_name FROM student ";

$result = $conn->query($sql);


 
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h2>" . $row['first_name'] . " " . $row['middle_name'] . " " . $row['family_name'] . "</h2>";
        }
    } else {
        echo "لا توجد بيانات.";
    }
    
    
?>

