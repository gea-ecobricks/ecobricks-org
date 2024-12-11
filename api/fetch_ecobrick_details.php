<?php
// Include the GoBrik server connection credentials
require_once '../gobrikconn_env.php';

try {
    // Get the ecobrick_unique_id from the request
    $ecobrick_unique_id = $_GET['ecobrick_unique_id'] ?? null;

    if (!$ecobrick_unique_id) {
        throw new Exception("Ecobrick unique ID is required.");
    }

    // Query to fetch ecobrick details
    $sql = "SELECT ecobrick_unique_id, ecobrick_full_photo_url AS full_photo_url, weight_g, volume_ml, ecobricker_maker
            FROM tb_ecobricks
            WHERE ecobrick_unique_id = ?";
    $stmt = $gobrik_conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Failed to prepare statement: " . $gobrik_conn->error);
    }

    // Bind parameter as an integer
    $stmt->bind_param("i", $ecobrick_unique_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception("Ecobrick not found.");
    }

    // Return ecobrick details as JSON
    echo json_encode($result->fetch_assoc());
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
