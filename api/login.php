<?php
include './headers.php';
include '../database/connection.php';
include '../database/login-service.php';

$db = new Database();
$userService = new User($db);

session_start();

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'GET' && isset($_GET['username']) && isset($_GET['userPassword'])) {
    $results = $userService->readOneUser($_GET['username'], $_GET['userPassword']);

    if ($results->num_rows > 0) {
        http_response_code(200);
        echo json_encode($results->fetch_all(MYSQLI_ASSOC)[0]);
        $_SESSION['username'] = $_GET['username'];
    }
    else{
        http_response_code(404);
    }

}
?>