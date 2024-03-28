<?php

// Include necessary environment setup
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare SQL statement
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, location_full) VALUES (?, ?, ?, ?, ?)";

    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $description, $start, $briks_used, $location_full);

    // Set parameters
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $location_full = $_POST['location_full'];

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Get the last inserted project_id
        $project_id = $conn->insert_id;

        // Close statement
        $stmt->close();

        // Close connection
        $conn->close();

        // Redirect to the next page
        echo "<script>window.location.href = 'upload-images.php?project_id=$project_id';</script>";
        exit();
    } else {
        $response_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
