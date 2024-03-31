<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include necessary environment setup
include '../ecobricks_env.php';

// Initialize error message variable
$error_message = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if project_id is set
    if (isset($_POST['project_id'])) {
        $project_id = $_POST['project_id'];

        // File upload directories
        $upload_dir = '../projects/featured/';
        $thumbnail_dir = '../projects/featured_tmbs/';

        // Check if an image was uploaded
        if (!isset($_FILES['featured_img']) || $_FILES['featured_img']['error'] !== UPLOAD_ERR_OK) {
            // Handle file upload errors
            switch ($_FILES['featured_img']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    // File size exceeds the maximum upload size
                    $error_message = 'Error: File size exceeds the maximum upload size. Please try again with a smaller file.';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    // File upload was only partially completed
                    $error_message = 'Error: File upload was only partially completed. Please try again.';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    // No file was uploaded
                    $error_message = 'Error: No photo selected! Please try again.';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    // Missing temporary folder
                    $error_message = 'Error: Missing temporary folder. Please contact the site administrator.';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    // Failed to write file to disk
                    $error_message = 'Error: Failed to write file to disk. Please contact the site administrator.';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    // File upload stopped by extension
                    $error_message = 'Error: File upload stopped by extension. Please try again.';
                    break;
                default:
                    // Other unknown upload error
                    $error_message = 'Error: Unknown upload error. Please try again later.';
                    break;
            }

            // Return JSON response for error
            http_response_code(400);
            echo json_encode(array('error' => $error_message));
            exit; // Terminate script execution
        }

        // Image was uploaded, proceed with processing
        $featured_img_name = $_FILES['featured_img']['name'];
        $featured_img_tmp = $_FILES['featured_img']['tmp_name'];

        // Get the file extension
        $file_extension = pathinfo($featured_img_name, PATHINFO_EXTENSION);

        // New file name
        $new_featured_img_name = 'featured-img-project-' . $project_id . '.' . $file_extension;

        // Convert image to WebP format if original format is JPEG or PNG
        if ($file_extension === 'jpg' || $file_extension === 'jpeg' || $file_extension === 'png') {
            $new_featured_img_name_webp = 'featured-img-project-' . $project_id . '.webp';
            $new_featured_img_webp_path = $upload_dir . $new_featured_img_name_webp;
            // Convert and save image to WebP format
            if (!convertToWebP($featured_img_tmp, $new_featured_img_webp_path)) {
                $error_message .= "Error converting image to WebP format.<br>";
                http_response_code(400);
                echo json_encode(array('error' => $error_message));
                exit; // Terminate script execution
            }
            // Use WebP version for thumbnails
            createThumbnail($new_featured_img_webp_path, $thumbnail_dir . $new_featured_img_name_webp, 160, 160, 77);

            // Update the full URL with .webp extension
            $full_url = $upload_dir . $new_featured_img_name_webp; // Update full URL with .webp extension
        }

        // Move the uploaded file to the destination directory
        if (!move_uploaded_file($featured_img_tmp, $upload_dir . $new_featured_img_name)) {
            $error_message .= "Error moving uploaded image.<br>";
            http_response_code(400);
            echo json_encode(array('error' => $error_message));
            exit; // Terminate script execution
        }

        // Update the corresponding project record in the database
        $thumbnail_path = $thumbnail_dir . $new_featured_img_name_webp; // Use WebP version for thumbnail path
        $update_sql = "UPDATE tb_projects SET tmb_featured_img = ?, featured_img = ? WHERE project_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("ssi", $thumbnail_path, $full_url, $project_id);
        $update_stmt->execute();
        $update_stmt->close();

        // Fetch project data from the database
        $select_sql = "SELECT * FROM tb_projects WHERE project_id = ?";
        $select_stmt = $conn->prepare($select_sql);
        $select_stmt->bind_param("i", $project_id);
        $select_stmt->execute();
        $result = $select_stmt->get_result();
        $row = $result->fetch_assoc();

        // Assign fetched project data to variables
        $project_name = $row['name'];
        $description = $row['description'];
        $start = $row['start'];
        $briks_used = $row['briks_used'];
        $location_full = $row['location_full'];

        // Prepare success response with fetched project data
        $response = array(
            'project_id' => $project_id,
            'project_name' => $project_name,
            'description' => $description,
            'start' => $start,
            'briks_used' => $briks_used,
            'full_url' => $full_url,
            'thumbnail_path' => $thumbnail_path,
            'location_full' => $location_full
        );

        // Encode response as JSON and send
        echo json_encode($response);
        exit; // Terminate script execution after sending response
    }
}

// Function to create a thumbnail using GD library
function createThumbnail($source_path, $destination_path, $width, $height, $quality) {
    // Implementation remains the same
}

// Function to convert image to WebP format
function convertToWebP($source_path, $destination_path) {
    // Implementation remains the same
}

?>
