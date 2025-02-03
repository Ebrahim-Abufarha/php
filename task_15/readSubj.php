<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM subjects");
    $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($subjects);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM subjects WHERE id = ?");
    $stmt->execute([$id]);
    $supject = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($supject ? $supject : ["error" => "supject not found"]);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    
    
    $stmt = $pdo->prepare("INSERT INTO subjects (name, description	) VALUES (?, ?)");
    if ($stmt->execute([$data['name'], $data['description']])) {
        http_response_code(201);
        echo json_encode(["message" => "supject created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "supject creation failed"]);
    }
}
if($_SERVER['REQUEST_METHOD']=='DELETE'  && isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM subjects WHERE id = ?");
    $stmt->execute([$id]);


echo json_encode($id ? ["message" => "supject deleted successfully"] : ["error" => "ID not found"]);}



if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['name'], $data['description'])) {
        echo json_encode(["error" => "Missing required fields"]);
        exit();
    }

    $stmt = $pdo->prepare("UPDATE subjects SET name = ?, description = ? WHERE id = ?");
    
    $stmt->execute([
        $data['name'], 
        $data['description'], 
        
        $id
    ]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(["message" => "Student updated successfully"]);
    } else {
        echo json_encode(["error" => "ID not found or no changes made"]);
    }
}
?>