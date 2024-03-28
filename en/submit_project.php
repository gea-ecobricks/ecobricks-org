<?php

// Include necessary environment setup
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare SQL statement
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, tmb_featured_img, location_full) VALUES (?, ?, ?, ?, ?, ?)";

    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $description, $start, $briks_used, $tmb_featured_img, $location_full);

    // Set parameters
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $tmb_featured_img = $_POST['tmb_featured_img'];
    $location_full = $_POST['location_full'];

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Get the last inserted project_id
        $project_id = $conn->insert_id;
        
        // File upload directory
        $upload_dir = '../projects/featured/';

        // Check if file is uploaded successfully
        if (isset($_FILES['featured_img']) && $_FILES['featured_img']['error'] === UPLOAD_ERR_OK) {
            $file_name = $_FILES['featured_img']['name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            
            // Construct new file name
            $new_file_name = 'featured-img-project-' . $project_id . '.' . $file_ext;
            
            // Rename the uploaded file
            if (rename($_FILES['featured_img']['tmp_name'], $upload_dir . $new_file_name)) {
                // File renamed successfully
                $response_message = "The photos for Project $name are now being uploaded. This is project number $project_id";
            } else {
                // Error occurred while renaming the file
                $response_message = "Error renaming the file.";
            }
        } else {
            // No file uploaded or error occurred
            $response_message = "Error uploading file: " . $_FILES['featured_img']['error'];
        }
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
