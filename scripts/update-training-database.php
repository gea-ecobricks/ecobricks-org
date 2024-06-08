<?php
include '../ecobricks_env.php';

$training_id = $_GET['training_id'];
$db_fields = json_decode(urldecode($_GET['fields']), true);
$db_values = json_decode(urldecode($_GET['values']), true);
$db_types = urldecode($_GET['types']);

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<div class='message'>Starting database update</div>";
ob_flush(); flush();

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<div class='alert'>Connection failed: " . $conn->connect_error . "</div>");
}

if (!empty($db_fields)) {
    echo "<div class='message'>Updating database with new image data</div>";
    ob_flush(); flush();

    array_push($db_fields, "ready_to_show", "training_logged");
    array_push($db_values, 1, date("Y-m-d H:i:s"));
    $db_types .= "is";

    $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
    $update_sql = "UPDATE tb_trainings SET {$fields_for_update} WHERE training_id = ?";
    $db_values[] = $training_id;
    $db_types .= "s";

    echo "<div class='message'>SQL Query: " . htmlspecialchars($update_sql) . "</div>";
    echo "<div class='message'>Values: " . json_encode($db_values) . "</div>";
    echo "<div class='message'>Types: " . htmlspecialchars($db_types) . "</div>";
    ob_flush(); flush();

    if ($conn->ping()) {
        echo "<div class='message'>Database connection is alive</div>";
        ob_flush(); flush();
    } else {
        echo "<div class='alert'>Database connection is not alive, attempting to reconnect</div>";
        ob_flush(); flush();
        $conn->close();
        $conn = new mysqli($servername, $username, $password, $dbname);

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
        $error_message = "Database update failed: " . $update_stmt->error;
        echo "<div class='alert'>Database update failed: " . htmlspecialchars($update_stmt->error) . "</div>";
        ob_flush(); flush();
    } else {
        echo "<div class='message'>Database updated successfully</div>";
        ob_flush(); flush();
    }
    $update_stmt->close();
}

if (!empty($error_message)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
    exit;
} else {
    echo "<script>alert('Images processed and database updated successfully.'); window.location.href='training.php?training_id=$training_id';</script>";
    exit;
}

ob_end_flush();
?>
