<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM teachers");
    $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($teachers);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM teachers WHERE id = ?");
    $stmt->execute([$id]);
    $teacher = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($teacher ? $teacher : ["error" => "teacher not found"]);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    
    
    $stmt = $pdo->prepare("INSERT INTO teachers (name, contact_info , subject_id ) VALUES (?,  ? ,?)");
    if ($stmt->execute([$data['name'], $data['contact_info'] , $data['subject_id']])) {
        http_response_code(201);
        echo json_encode(["message" => "teacher created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "teacher creation failed"]);
    }
}
if($_SERVER['REQUEST_METHOD']=='DELETE'  && isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM teachers WHERE id = ?");
    $stmt->execute([$id]);


echo json_encode($id ? ["message" => "teacher deleted successfully"] : ["error" => "ID not found"]);}



if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['name'], $data['subject_id'])) {
        echo json_encode(["error" => "Missing required fields"]);
        exit();
    }

    $stmt = $pdo->prepare("UPDATE teachers SET name = ? , subject_id = ? , contact_info = ? WHERE id = ? ");
    
    $stmt->execute([
        $data['name'], 
        $data['subject_id '],
        $data['contact_info'], 
        $id
    ]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(["message" => "teacher updated successfully"]);
    } else {
        echo json_encode(["error" => "teatcher not found or no changes made"]);
    }
}
?>