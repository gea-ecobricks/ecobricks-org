



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
            // No image was uploaded or there was an error, return 400 status with an error message
            http_response_code(400);
            echo json_encode(array('error' => 'No photo selected! Please try again.'));
            exit; // Terminate script execution
        }

        // Image was uploaded, proceed with processing
        $featured_img_name = $_FILES['featured_img']['name'];
        $featured_img_tmp = $_FILES['featured_img']['tmp_name'];

        // Get the file extension
        $file_extension = pathinfo($featured_img_name, PATHINFO_EXTENSION);

        // New file name
        $new_featured_img_name = 'featured-img-project-' . $project_id . '.' . $file_extension;

        // Rename the uploaded file
        if (!rename($featured_img_tmp, $upload_dir . $new_featured_img_name)) {
            $error_message .= "Error re-naming featured image.<br>";
        } else {
            // Create thumbnail
            $thumbnail_path = $thumbnail_dir . $new_featured_img_name;
            createThumbnail($upload_dir . $new_featured_img_name, $thumbnail_path, 100, 100, 77);

            // Update the corresponding project record in the database
            $full_url = $upload_dir . $new_featured_img_name;
            $update_sql = "UPDATE tb_projects SET tmb_featured_img = ? WHERE project_id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("si", $thumbnail_path, $project_id);
            $update_stmt->execute();
            $update_stmt->close();

            // Prepare success response
            $response = array(
                'project_id' => $project_id,
                'project_name' => $_POST['project_name'] ?? null,
                'description' => $_POST['description'] ?? null,
                'start' => $_POST['start'] ?? null,
                'briks_used' => $_POST['briks_used'] ?? null,
                'full_url' => $full_url,
                'thumbnail_path' => $thumbnail_path,
                'location_full' => $_POST['location_full'] ?? null
            );
            echo json_encode($response);
            exit; // Terminate script execution after sending response
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

// Function to create a thumbnail using GD library
function createThumbnail($source_path, $destination_path, $width, $height, $quality) {
    list($source_width, $source_height, $source_type) = getimagesize($source_path);
    switch ($source_type) {
        case IMAGETYPE_JPEG:
            $source_image = imagecreatefromjpeg($source_path);
            break;
        case IMAGETYPE_PNG:
            $source_image = imagecreatefrompng($source_path);
            break;
        case IMAGETYPE_WEBP:
            $source_image = imagecreatefromwebp($source_path);
            break;
        default:
            return false;
    }
    $thumbnail = imagecreatetruecolor($width, $height);
    imagecopyresampled($thumbnail, $source_image, 0, 0, 0, 0, $width, $height, $source_width, $source_height);
    imagedestroy($source_image);
    imagejpeg($thumbnail, $destination_path, $quality);
    imagedestroy($thumbnail);
    return true;
}

?>

