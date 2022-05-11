<?php
include './headers.php';
include '../database/connection.php';
include '../database/reg-service.php';

$db = new Database();
$regService = new Reg($db);

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'POST') {

    $data = json_decode(file_get_contents("php://input"));

    if($regService->create($data)) {
        http_response_code(200);
        echo json_encode(array("message" =>  "User was created", "status" => 200));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Error while creating user", "status" => 500));
    }
}
?>