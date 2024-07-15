<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';

$response = ['success' => false];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ecobrick_unique_id'])) {
    $ecobrick_unique_id = (int)$_POST['ecobrick_unique_id'];

    $sql = "DELETE FROM tb_ecobricks WHERE ecobrick_unique_id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $ecobrick_unique_id);
        if ($stmt->execute()) {
            $response['success'] = true;
        } else {
            $response['error'] = "Execute failed: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $response['error'] = "Prepare failed: " . $conn->error;
    }
} else {
    $response['error'] = "Invalid request.";
}

header('Content-Type: application/json');
echo json_encode($response);
?>
