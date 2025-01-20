<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the GoBrik server connection credentials
require_once '../gobrikconn_env.php';

// Check if `cash_tran_id` is provided in the GET request
if (!isset($_GET['cash_tran_id']) || empty($_GET['cash_tran_id'])) {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Transaction ID is required.']);
    exit;
}

// Sanitize the input to prevent SQL injection
$cashTranId = intval($_GET['cash_tran_id']); // Convert to integer (or use `mysqli_real_escape_string` if string)

// Prepare SQL query to fetch transaction details
$sql = "SELECT * FROM tb_cash_transaction WHERE cash_tran_id = ?";

$stmt = $gobrik_conn->prepare($sql);
if (!$stmt) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Failed to prepare database query: ' . $gobrik_conn->error]);
    exit;
}

// Bind the parameter and execute the query
$stmt->bind_param("i", $cashTranId);
$stmt->execute();
$result = $stmt->get_result();

// Check if the query returned any results
if ($result->num_rows > 0) {
    $transaction = $result->fetch_assoc(); // Fetch the transaction as an associative array
    echo json_encode($transaction);
} else {
    http_response_code(404); // Not Found
    echo json_encode(['error' => 'No transaction found for the provided ID.']);
}

// Clean up
$stmt->close();
$gobrik_conn->close();
?>
