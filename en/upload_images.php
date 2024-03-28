<?php

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
        $upload_dir = '../projects/';

        // Upload featured image
        if (isset($_FILES['featured_img']) && $_FILES['featured_img']['error'] === UPLOAD_ERR_OK) {
            $featured_img_name = $_FILES['featured_img']['name'];
            $featured_img_tmp = $_FILES['featured_img']['tmp_name'];
            if (!move_uploaded_file($featured_img_tmp, $upload_dir . 'featured/' . $featured_img_name)) {
                $error_message .= "Error uploading featured image.<br>";
            }
        } else {
            $error_message .= "No featured image uploaded or file upload error occurred.<br>";
        }

        // Upload thumbnail image
        if (isset($_FILES['thumbnail_img']) && $_FILES['thumbnail_img']['error'] === UPLOAD_ERR_OK) {
            $thumbnail_img_name = $_FILES['thumbnail_img']['name'];
            $thumbnail_img_tmp = $_FILES['thumbnail_img']['tmp_name'];
            if (!move_uploaded_file($thumbnail_img_tmp, $upload_dir . 'thumbnail/' . $thumbnail_img_name)) {
                $error_message .= "Error uploading thumbnail image.<br>";
            }
        } else {
            $error_message .= "No thumbnail image uploaded or file upload error occurred.<br>";
        }
    }

    // If there are errors, display them in the modal
    if (!empty($error_message)) {
        echo "<script>showFormModal('$error_message');</script>";
    }
}

?>
