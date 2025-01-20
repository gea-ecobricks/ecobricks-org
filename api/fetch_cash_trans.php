<?php
// Include database connection
include 'ecobricks_env.php';

if (isset($_GET['cash_tran_id'])) {
    $cashTranId = intval($_GET['cash_tran_id']); // Sanitize input
    $sql = "SELECT * FROM tb_cash_transaction WHERE cash_tran_id = ?";

    // Prepare and execute the query
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cashTranId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the transaction details as an associative array
        $transaction = $result->fetch_assoc();
        echo json_encode($transaction);
    } else {
        echo json_encode(['error' => 'No transaction found for the provided ID.']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['error' => 'No transaction ID provided.']);
}
?>
