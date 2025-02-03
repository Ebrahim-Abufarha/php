<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['id'])) {
    $stmt = $pdo->query("SELECT * FROM exams");
    $exams = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($exams);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM exams WHERE id = ?");
    $stmt->execute([$id]);
    $exam = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($exam ? $exam : ["error" => "exam not found"]);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    
    
    $stmt = $pdo->prepare("INSERT INTO exams (subject_id , exam_date , max_score) VALUES (?, ?, ?)");
    if ($stmt->execute([$data['subject_id'],$data['exam_date'],$data['max_score']])) {
        http_response_code(201);
        echo json_encode(["message" => "exam created successfully"]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "exam creation failed"]);
    }
}
if($_SERVER['REQUEST_METHOD']=='DELETE'  && isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM exams WHERE id = ?");
    $stmt->execute([$id]);


echo json_encode($id ? ["message" => "exam deleted successfully"] : ["error" => "ID not found"]);}



if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['subject_id'],$data['exam_date'],$data['max_score'])) {
        echo json_encode(["error" => "Missing required fields"]);
        exit();
    }

    $stmt = $pdo->prepare("UPDATE exams SET subject_id = ?, exam_date = ?, max_score = ? WHERE id = ?");
    
    $stmt->execute([
        $data['subject_id'], 
        $data['exam_date'], 
        $data['max_score'], 
        $id
    ]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(["message" => "Student updated successfully"]);
    } else {
        echo json_encode(["error" => "ID not found or no changes made"]);
    }
}
?>