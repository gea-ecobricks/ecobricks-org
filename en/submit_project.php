<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../ecobricks_env.php';

// Prepare SQL statement
$sql = "INSERT INTO tb_projects (name, description, start, briks_used, featured_img, tmb_featured_img, location_full) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssiiss", $name, $description, $start, $briks_used, $featured_img, $tmb_featured_img, $location_full);

// Set parameters and execute
$name = $_POST['name'];
$description = $_POST['description'];
$start = $_POST['start'];
$briks_used = $_POST['briks_used'];
$featured_img = $_POST['featured_img'];
$tmb_featured_img = $_POST['tmb_featured_img'];
$location_full = $_POST['location_full'];

$response_message = "";

if ($stmt->execute()) {
    $response_message = "Project submitted successfully.";
} else {
    $response_message = "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();

// Return response message to be displayed in modal
echo $response_message;
?>
