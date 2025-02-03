<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM student_subject");
    $student_subject = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($student_subject);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM student_subject WHERE id = ?");
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($student ? $student : ["error" => "student not found"]);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    
    
    $stmt = $pdo->prepare("INSERT INTO student_subject (name, class, date_of_birth ,address,contact_info) VALUES (?, ?, ?, ?,?)");
    if ($stmt->execute([$data['name'], $data['class'],  $data['date_of_birth'], $data['address'], $data['contact_info']])) {
        http_response_code(201);
        echo json_encode(["message" => "student created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "student creation failed"]);
    }
}
if($_SERVER['REQUEST_METHOD']=='DELETE'  && isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM student_subject WHERE id = ?");
    $stmt->execute([$id]);


echo json_encode($id ? ["message" => "student deleted successfully"] : ["error" => "ID not found"]);}



if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['name'], $data['class'], $data['date_of_birth'], $data['address'], $data['contact_info'])) {
        echo json_encode(["error" => "Missing required fields"]);
        exit();
    }

    $stmt = $pdo->prepare("UPDATE student_subject SET name = ?, class = ?, date_of_birth = ?, address = ?, contact_info = ? WHERE id = ?");
    
    $stmt->execute([
        $data['name'], 
        $data['class'], 
        $data['date_of_birth'], 
        $data['address'], 
        $data['contact_info'], 
        $id
    ]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(["message" => "Student updated successfully"]);
    } else {
        echo json_encode(["error" => "ID not found or no changes made"]);
    }
}
?>