<?php
// PART 4: Database Update
include '../ecobricks_env.php';

$training_id = $_GET['training_id'];

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
}

echo "<div class='message'>Updating database with new image data</div>";
ob_flush(); flush();

$db_fields = [
    "training_photo0_main", "training_photo0_tmb",
    "training_photo1_main", "training_photo1_tmb",
    "training_photo2_main", "training_photo2_tmb",
    "training_photo3_main", "training_photo3_tmb",
    "training_photo4_main", "training_photo4_tmb",
    "training_photo5_main", "training_photo5_tmb",
    "training_photo6_main", "training_photo6_tmb",
    "ready_to_show", "training_logged"
];

$db_values = [];
$db_types = "";

// Generate the file paths
for ($i = 0; $i < 7; $i++) {
    $main_file_path = "../trainings/photos/training-{$training_id}-{$i}.webp";
    $thumbnail_file_path = "../trainings/tmbs/training-{$training_id}-{$i}.webp";
    $db_values[] = $main_file_path;
    $db_values[] = $thumbnail_file_path;
    $db_types .= "ss";
}

$db_values[] = 1; // ready_to_show
$db_values[] = date("Y-m-d H:i:s"); // training_logged
$db_types .= "is";

$fields_for_update = implode(", ", array_map(function ($field) {
    return "{$field} = ?";
}, $db_fields));
$update_sql = "UPDATE tb_trainings SET {$fields_for_update} WHERE training_id = ?";
$db_values[] = $training_id;
$db_types .= "s";

echo "<div class='message'>SQL Query: " . htmlspecialchars($update_sql) . "</div>";
echo "<div class='message'>Values: " . json_encode($db_values) . "</div>";
echo "<div class='message'>Types: " . htmlspecialchars($db_types) . "</div>";
ob_flush(); flush();

// Check if the connection is still alive
echo "<div class='message'>Checking database connection</div>";
ob_flush(); flush();
if ($conn->ping()) {
    echo "<div class='message'>Database connection is alive</div>";
    ob_flush(); flush();
} else {
    echo "<div class='alert'>Database connection is not alive, attempting to reconnect</div>";
    ob_flush(); flush();
    $conn->close();
    // Re-establish the database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection again
    if ($conn->connect_error) {
        echo "<div class='alert'>Reconnection failed: " . $conn->connect_error . "</div>";
        ob_flush(); flush();
        exit;
    } else {
        echo "<div class='message'>Reconnected to the database</div>";
        ob_flush(); flush();
    }
}

$update_stmt = $conn->prepare($update_sql);
if ($update_stmt === false) {
    echo "<div class='alert'>Prepare failed: " . htmlspecialchars($conn->error) . "</div>";
    ob_flush(); flush();
    exit;
}
$update_stmt->bind_param($db_types, ...$db_values);

if (!$update_stmt->execute()) {
    $error_message .= "Database update failed: " . $update_stmt->error;
    echo "<div class='alert'>Database update failed: " . htmlspecialchars($update_stmt->error) . "</div>";
    ob_flush(); flush();
} else {
    echo "<div class='message'>Database updated successfully</div>";
    ob_flush(); flush();
}
$update_stmt->close();

if (!empty($error_message)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
    exit;
} else {
    echo "<script>alert('Images processed and database updated successfully.'); window.location.href='training.php?training_id=$training_id';</script>";
    exit;
}
?>
</div>
</body>
</html>
