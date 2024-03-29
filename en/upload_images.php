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

        // Check if a file has been uploaded
        if (!empty($_FILES['featured_img']['name'])) {
            // Upload featured image
            if ($_FILES['featured_img']['error'] === UPLOAD_ERR_OK) {
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
            } else {
                $error_message .= "Error uploading featured image: ";
                switch ($_FILES['featured_img']['error']) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_message .= "The uploaded file exceeds the upload_max_filesize directive in php.ini.";
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_message .= "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
                        break;
                    case UPLOAD_ERR_PARTIAL:
                        $error_message .= "The uploaded file was only partially uploaded.";
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        $error_message .= "No file was uploaded.";
                        break;
                    case UPLOAD_ERR_NO_TMP_DIR:
                        $error_message .= "Missing a temporary folder.";
                        break;
                    case UPLOAD_ERR_CANT_WRITE:
                        $error_message .= "Failed to write file to disk.";
                        break;
                    case UPLOAD_ERR_EXTENSION:
                        $error_message .= "A PHP extension stopped the file upload.";
                        break;
                    default:
                        $error_message .= "Unknown error.";
                        break;
                }
                $error_message .= "<br>";
            }
        } else {
            $error_message .= "Error: No photo selected! Please try again.<br>";
        }
    }

    // If there are errors, display them
    if (!empty($error_message)) {
        // Prepare error response
        $response = array(
            'error' => $error_message
        );
        echo json_encode($response);
        exit; // Terminate script execution after sending response
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
