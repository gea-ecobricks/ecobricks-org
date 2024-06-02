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

// Prepare the API request to retrieve training data
$url = "https://api.knack.com/v1/objects/object_48/records?filters=field_1361=" . $training_id; // Use the correct field key for the training ID
$options = [
    "http" => [
        "header" => "Authorization: " . $api_key . "\r\nX-Knack-Application-Id: " . $app_id . "\r\n",
        "method" => "GET"
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$data = json_decode($response, true);

// Check if records were retrieved
if (isset($data['records']) && count($data['records']) > 0) {
    $success = true;
    $errors = [];
    foreach ($data['records'] as $record) {
        // Extract the necessary data from the Knack payload
        $training_id = $record['field_1361']; // The ID of the training
        $training_title = $record['field_1084']; // The title of the training

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
    }
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
