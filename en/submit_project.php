<?php

// Include necessary environment setup
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Set parameters from the form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $tmb_featured_img = $_POST['tmb_featured_img'];
    $location_full = $_POST['location_full'];

    // Check if file is uploaded successfully
    if (isset($_FILES['featured_img']) && $_FILES['featured_img']['error'] === UPLOAD_ERR_OK) {
        // Move uploaded file to the specified directory
        $upload_dir = '../projects/featured/';
        $file_tmp = $_FILES['featured_img']['tmp_name'];
        $file_ext = strtolower(pathinfo($_FILES['featured_img']['name'], PATHINFO_EXTENSION));
        $new_file_name = 'featured-img-project-' . uniqid() . '.' . $file_ext; // Generate unique file name
        if (move_uploaded_file($file_tmp, $upload_dir . $new_file_name)) {
            // File uploaded successfully
            $featured_img = $new_file_name;
        } else {
            // Error occurred while moving the file
            $response_message = "Error moving the file.";
            echo $response_message;
            exit();
        }
    } else {
        // No file uploaded or error occurred
        $response_message = "Error uploading file: " . $_FILES['featured_img']['error'];
        echo $response_message;
        exit();
    }

    // Prepare SQL statement
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, featured_img, tmb_featured_img, location_full) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiiss", $name, $description, $start, $briks_used, $featured_img, $tmb_featured_img, $location_full);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Project submitted successfully
        $response_message = "The project was submitted successfully.";
    } else {
        // Error occurred while executing SQL statement
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
