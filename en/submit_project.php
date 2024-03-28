<?php

// Include necessary environment setup
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare SQL statement
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, featured_img, tmb_featured_img, location_full) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiiss", $name, $description, $start, $briks_used, $featured_img, $tmb_featured_img, $location_full);

    // Set parameters
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $featured_img = $_POST['featured_img'];
    $tmb_featured_img = $_POST['tmb_featured_img'];
    $location_full = $_POST['location_full'];

    // Execute the SQL statement
    if ($stmt->execute()) {
        $response_message = "The Project is submitted successfully.";
    } else {
        $response_message = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();

// Return response message to be displayed in modal
echo $response_message;
?>
