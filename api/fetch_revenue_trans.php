<?php
// Include the GoBrik server connection credentials
require_once '../gobrikconn_env.php';

// Fetch data
$sql = "SELECT cash_tran_id,
               transaction_date_dt,
               sender_for_display,
               type_of_transaction,
               tran_name_desc,
               usd_amount,
               total_product_cost_incl_shipping,
               expense_accounting_type
        FROM tb_cash_transaction";

$result = $gobrik_conn->query($sql);

// Check for query execution errors
if (!$result) {
    http_response_code(500);
    echo json_encode(["error" => "Database query failed: " . $gobrik_conn->error]);
    exit;
}

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cash_tran_id = $row["cash_tran_id"];
        $data[] = [
            "ID" => '<a href="#" onclick="openDetailsPopup(\'' . $cash_tran_id . '\')">' . $cash_tran_id . '</a>',
            "Date" => $row["transaction_date_dt"],
            "Sender" => $row["sender_for_display"],
            "Category" => $row["type_of_transaction"],
            "Tran Name" => $row["tran_name_desc"],
            "Amount USD" => number_format((float)$row["usd_amount"], 2, '.', ','),
            "Final Amt" => number_format((float)$row["total_product_cost_incl_shipping"], 2, '.', ','),
            "Type" => $row["expense_accounting_type"],
        ];
    }
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode(["data" => $data]);

$gobrik_conn->close();
?>
