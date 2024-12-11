<?php
// Include the GoBrik server connection credentials
require_once '../gobrikconn_env.php';

try {
    // Check if a specific tran_id is requested
    $tran_id = isset($_GET['tran_id']) ? intval($_GET['tran_id']) : null;

    if ($tran_id) {
        // Fetch details for a single transaction
        $sql = "SELECT * FROM tb_brk_transaction WHERE tran_id = ?";
        $stmt = $gobrik_conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Failed to prepare statement: " . $gobrik_conn->error);
        }

        $stmt->bind_param("i", $tran_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            throw new Exception("Transaction not found.");
        }

        // Return transaction details as JSON
        echo json_encode($result->fetch_assoc());
    } else {
        // Existing DataTables logic for paginated results
        $start = intval($_POST['start'] ?? 0);
        $length = intval($_POST['length'] ?? 10);
        $orderColumnIndex = intval($_POST['order'][0]['column'] ?? 0);
        $orderDir = $_POST['order'][0]['dir'] ?? 'asc';
        $searchValue = $_POST['search']['value'] ?? '';

        $columns = [
            'tran_id',
            'send_ts',
            'sender',
            'receiver_or_receivers',
            'block_tran_type',
            'block_amt',
            'individual_amt',
            'ecobrick_serial_no'
        ];
        $orderColumn = $columns[$orderColumnIndex] ?? 'tran_id';

        $sql = "SELECT chain_ledger_id, tran_id, tran_name, individual_amt, status, send_ts, sender_ecobricker,
                block_tran_type, block_amt, sender, receiver_or_receivers, receiver_1, receiver_2, receiver_3,
                receiver_central_reserve, sender_central_reserve, ecobrick_serial_no, tran_sender_note, product,
                send_dt, accomp_payment, authenticator_version, expense_type, gea_accounting_category,
                shipping_cost_brk, product_cost_brk, total_cost_incl_shipping, shipping_with_currency,
                aes_officially_purchased, country_of_buyer, currency_for_shipping, credit_other_ecobricker_yn,
                catalyst_name
                FROM tb_brk_transaction";

        if (!empty($searchValue)) {
            $sql .= " WHERE tran_id LIKE ? OR sender LIKE ? OR receiver_or_receivers LIKE ?";
        }

        $sql .= " ORDER BY $orderColumn $orderDir LIMIT ?, ?";
        $stmt = $gobrik_conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Failed to prepare statement: " . $gobrik_conn->error);
        }

        if (!empty($searchValue)) {
            $searchParam = "%$searchValue%";
            $stmt->bind_param("sssii", $searchParam, $searchParam, $searchParam, $start, $length);
        } else {
            $stmt->bind_param("ii", $start, $length);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $totalQuery = "SELECT COUNT(*) as total FROM tb_brk_transaction";
        $totalResult = $gobrik_conn->query($totalQuery);
        $totalRecords = $totalResult->fetch_assoc()['total'];

        $response = [
            "draw" => intval($_POST['draw'] ?? 1),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalRecords,
            "data" => $data
        ];

        echo json_encode($response);
    }
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
