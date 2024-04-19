<?php
header('Content-Type: application/json');

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

$search = $_GET['search'] ?? '';

if (!empty($search)) {
    $search = $conn->real_escape_string($search) . '%';
    $sql = "SELECT serial_no FROM tb_ecobricks WHERE serial_no LIKE ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $search);
        $stmt->execute();
        $result = $stmt->get_result();
        $serial_numbers = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($serial_numbers);
    } else {
        echo json_encode(['error' => 'Database query failed']);
    }
    $stmt->close();
} else {
    echo json_encode(['error' => 'No search term provided']);
}

$conn->close();
?>
