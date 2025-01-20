<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the GoBrik server connection credentials
require_once '../gobrikconn_env.php';

// Fetch data for expenses
$sql = "SELECT cash_tran_id,
               transaction_date_dt,
               sender_for_display,
               type_of_transaction,
               tran_name_desc,
               usd_amount,
               idr_amount, -- Include amount_idr in the query
               expense_accounting_type -- Adjust for expenses
        FROM tb_cash_transaction
        WHERE expense_accounting_type IS NOT NULL"; // Filter for expenses

$result = $gobrik_conn->query($sql);

// Check for query execution errors
if (!$result) {
    http_response_code(500); // Internal Server Error
    echo json_encode(["error" => "Database query failed: " . $gobrik_conn->error]);
    exit;
}

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            "ID" => $row["cash_tran_id"], // Return raw ID (no HTML or JS)
            "Date" => $row["transaction_date_dt"],
            "Sender" => $row["sender_for_display"],
            "Category" => $row["type_of_transaction"],
            "Transaction" => $row["tran_name_desc"],
            "AmountUSD" => number_format((float)$row["usd_amount"], 2, '.', ','), // Format Amount USD
            "AmountIDR" => number_format((int)$row["idr_amount"], 0, '.', ','),  // Format Amount IDR
            "Type" => $row["expense_accounting_type"], // Adjust for expense type
        ];
    }
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode(["data" => $data]);

$gobrik_conn->close();
?>
