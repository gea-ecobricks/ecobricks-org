<?php

// Include necessary environment setup
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare SQL statement
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, featured_img, location_full) VALUES (?, ?, ?, ?, ?, ?)";

    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $description, $start, $briks_used, $featured_img, $location_full);

    // Set parameters
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $location_full = $_POST['location_full'];

    // Check if 'featured_img' file has been uploaded
    if (isset($_FILES['featured_img']) && $_FILES['featured_img']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['featured_img']['name'];
        $file_tmp = $_FILES['featured_img']['tmp_name'];
        
        // Read the file contents
        $file_content = file_get_contents($file_tmp);
        
        // Set the featured_img parameter
        $featured_img = $file_content;
    } else {
        // No file uploaded or error occurred
        $featured_img = null; // Or handle the error accordingly
    }

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Get the last inserted project_id
        $project_id = $conn->insert_id;
        $response_message = "The photos for Project $name are now being uploaded. This is project number $project_id";
        
        // Redirect to upload_images.php with project_id as a parameter
        header("Location: upload_images.php?project_id=$project_id");
        exit();
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
