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

//PROCESSING

 // Set a fixed key value, replace this with actual loop key when processing multiple images
$key = 1; // Placeholder for future iterations

// Image was uploaded, proceed with processing
$featured_img_name = $_FILES['featured_img']['name'];
$featured_img_tmp = $_FILES['featured_img']['tmp_name'];

// Get the file extension and convert it to lowercase
$file_extension = strtolower(pathinfo($featured_img_name, PATHINFO_EXTENSION));

// Define new file names using the new naming convention
$new_featured_img_name_webp = 'featured-img-project-' . $project_id . '-' . $key . '.webp';
$targetPath = $upload_dir . $new_featured_img_name_webp;

if ($file_extension === 'jpg' || $file_extension === 'jpeg' || $file_extension === 'png') {
    // Attempt to resize and convert to WebP
    if (resizeAndConvertToWebP($featured_img_tmp, $targetPath, 1000, 77)) {
        // Success, now $targetPath holds the WebP image
        createThumbnail($targetPath, $thumbnail_dir . $new_featured_img_name_webp, 160, 160, 77);

        // Set the paths for database update
        $full_url = $targetPath; // Full image URL
        $thumbnail_path = $thumbnail_dir . $new_featured_img_name_webp; // Thumbnail URL
    } else {
        // Handle errors
    }
} else {
    // Handle non-supported image formats or skip conversion
}

// Update the database with the new image paths using the updated field names
$update_sql = "UPDATE tb_projects SET photo1_tmb = ?, photo1_main = ? WHERE project_id = ?";
$update_stmt = $conn->prepare($update_sql);
$update_stmt->bind_param("ssi", $thumbnail_path, $full_url, $project_id);
if (!$update_stmt->execute()) {
    // Handle database update failure
}

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

// Function to convert image to WebP format
function convertToWebP($source_path, $destination_path) {
    $image = imagecreatefromstring(file_get_contents($source_path));
    if ($image !== false) {
        imagepalettetotruecolor($image);
        imagewebp($image, $destination_path, 85);
        imagedestroy($image);
        return true;
    }
    return false;
}


// Function to resize original image if any of its dimensions are larger than 1500px.

function resizeAndConvertToWebP($sourcePath, $targetPath, $maxDim, $compressionQuality) {
    list($width, $height, $type, $attr) = getimagesize($sourcePath);
    $scale = min($maxDim/$width, $maxDim/$height);
    $newWidth = $width > $maxDim ? ceil($scale * $width) : $width;
    $newHeight = $height > $maxDim ? ceil($scale * $height) : $height;

    // Depending on the original image type, create a new image
    switch ($type) {
        case IMAGETYPE_JPEG:
            $src = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $src = imagecreatefrompng($sourcePath);
            break;
        default:
            // Unsupported type for conversion
            return false;
    }

    $dst = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    imagewebp($dst, $targetPath, $compressionQuality); // Save the image as WebP with specified compression quality

    imagedestroy($src);
    imagedestroy($dst);
    return true;
}



?>
