<?php
// process_training.php

include '../ecobricks_env.php';

// Knack API settings
$api_key = "360aa2b0-af19-11e8-bd38-41d9fc3da0cf";
$app_id = "5b8c28c2a1152679c209ce0c";
$training_id = $_POST['training_id'];

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
}

$base_url = "https://api.knack.com/v1/objects/object_48/records";
$page = 1;
$record_found = false;
$success = true;
$errors = [];

do {
    // Prepare the API request to retrieve multiple training records with pagination
    $url = $base_url . "?page=" . $page;

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "X-Knack-Application-Id: $app_id",
        "X-Knack-REST-API-Key: $api_key"
    ]);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if ($response === false) {
        $error = curl_error($ch);
        echo "<script>alert('Error fetching data from Knack API: " . addslashes($error) . "');</script>";
        curl_close($ch);
        exit;
    }

    // Close cURL session
    curl_close($ch);

    $data = json_decode($response, true);

    // Check if records were retrieved
    if (isset($data['records']) && count($data['records']) > 0) {
        foreach ($data['records'] as $record) {
            if (isset($record['field_1361']) && $record['field_1361'] == $training_id) {
                $record_found = true;
                // Extract the necessary data from the Knack payload
                $training_id = $record['field_1361'];
                $training_title = $record['field_1084'];

                // Prepare and bind
                $stmt = $conn->prepare("INSERT INTO tb_trainings (training_id, training_title) VALUES (?, ?)");
                $stmt->bind_param("ss", $training_id, $training_title);

                // Execute statement
                if (!$stmt->execute()) {
                    $success = false;
                    $errors[] = $stmt->error;
                }

                // Close the statement
                $stmt->close();
                break;
            }
        }
    }

    $page++;
} while (!$record_found && $page <= $data['total_pages']);

if ($record_found) {
    if ($success) {
        echo "<script>alert('Record added successfully.');</script>";
    } else {
        echo "<script>alert('Error: " . implode(", ", $errors) . "');</script>";
    }
} else {
    echo "<script>alert('No records found for the given Training ID.');</script>";
}

// Close the database connection
$conn->close();
?>
