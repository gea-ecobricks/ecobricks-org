<?php

// Check if project_id is set in the URL
if (isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];

    // File upload directory
    $upload_dir = '../projects/featured/';

    // Check if file is uploaded successfully
    if (isset($_FILES['featured_img']) && $_FILES['featured_img']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['featured_img']['name'];
        $file_tmp = $_FILES['featured_img']['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        // Construct new file name
        $new_file_name = 'featured-img-project-' . $project_id . '.' . $file_ext;
        
        // Move uploaded file to the specified directory with the new name
        if (move_uploaded_file($file_tmp, $upload_dir . $new_file_name)) {
            // File uploaded successfully
            
            // Handle any additional operations if needed
            
            echo "File uploaded successfully and renamed to $new_file_name";
        } else {
            // Error occurred while moving the file
            echo "Error uploading file: " . $_FILES['featured_img']['error'];
        }
    } else {
        // No file uploaded or error occurred
        echo "Error: No file uploaded or file upload error occurred.";
    }
} else {
    // Redirect back to the form if project_id is not set
    header("Location: submit_project.php");
    exit();
}

?>
