<?php

ini_set('display_errors', 1); error_reporting(E_ALL);


// Include necessary environment setup
include '../ecobricks_env.php';

// Initialize error message variable
$error_message = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if project_id is set
    if (isset($_POST['project_id'])) {
        $project_id = $_POST['project_id'];

        // File upload directory
        $upload_dir = '../projects/featured/';

        // Upload featured image
        if (isset($_FILES['featured_img']) && $_FILES['featured_img']['error'] === UPLOAD_ERR_OK) {
            $featured_img_name = $_FILES['featured_img']['name'];
            $featured_img_tmp = $_FILES['featured_img']['tmp_name'];

            // Get the file extension
            $file_extension = pathinfo($featured_img_name, PATHINFO_EXTENSION);

            // New file name
            $new_featured_img_name = 'featured-img-project-' . $project_id . '.' . $file_extension;

            // Rename the uploaded file
            if (!rename($featured_img_tmp, $upload_dir . $new_featured_img_name)) {
                $error_message .= "Error renaming featured image.<br>";
            } else {
                // Update the corresponding project record in the database
                $full_url = $upload_dir . $new_featured_img_name;
                $update_sql = "UPDATE tb_projects SET featured_img = '$full_url' WHERE project_id = ?";
                $update_stmt = $conn->prepare($update_sql);
                $update_stmt->bind_param("i", $project_id);
                $update_stmt->execute();
                $update_stmt->close();
            }
        } else {
            $error_message .= "No photo selected! Please try again.<br>";
        }
    }

    // If there are errors, display them
    if (!empty($error_message)) {
        echo $error_message;
    } else {
        // If no errors, echo success message
        echo "Upload is successful!";
    }
}

?>
