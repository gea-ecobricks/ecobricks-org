<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../ecobricks_env.php';

$error_message = '';
$full_urls = []; // Initialize array to store main image URLs
$thumbnail_paths = []; // Initialize array to store thumbnail URLs

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['project_id'])) {
        $project_id = $_POST['project_id'];
        $upload_dir = 'projects/featured/';
        $thumbnail_dir = 'projects/featured_tmbs/';

        $db_fields = []; // For storing database field names
        $db_values = []; // For storing corresponding values
        $db_types = ""; // For storing the types of the values for the prepared statement

        for ($i = 1; $i <= 5; $i++) {
            $file_input_name = "photo{$i}_main";
            if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] === UPLOAD_ERR_OK) {
                $file_extension = strtolower(pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));
                $new_file_name_webp = 'featured-img-project-' . $project_id . '-' . $i . '.webp';
                $targetPath = $upload_dir . $new_file_name_webp;

                if (resizeAndConvertToWebP($_FILES[$file_input_name]['tmp_name'], $targetPath, 1000, 77)) {
                    createThumbnail($targetPath, $thumbnail_dir . $new_file_name_webp, 160, 160, 77);
                    $full_urls[] = $targetPath; // Add main image URL to array
                    $thumbnail_paths[] = $thumbnail_dir . $new_file_name_webp; // Add thumbnail URL to array

                    // Update arrays for database query
                    array_push($db_fields, "photo{$i}_main", "photo{$i}_tmb");
                    array_push($db_values, $targetPath, $thumbnail_dir . $new_file_name_webp);
                    $db_types .= "ss"; // Add two string types
                } else {
                    $error_message .= "Error processing image {$i}.<br>";
                }
            }
        }

        if (!empty($db_fields)) {
            $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
            $update_sql = "UPDATE tb_projects SET {$fields_for_update} WHERE project_id = ?";
            $db_values[] = $project_id; // Add project_id to the end of the array
            $db_types .= "i"; // Add integer type for project_id

            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param($db_types, ...$db_values);
            if (!$update_stmt->execute()) {
                $error_message .= "Database update failed: " . $update_stmt->error;
            }
            $update_stmt->close();
        }

        if (!empty($error_message)) {
            http_response_code(400);
            echo json_encode(['error' => $error_message]);
        } else {
            // Prepare the response array with all image URLs included
            $response = array(
                'project_id' => $project_id,
                'project_name' => $_POST['project_name'] ?? null,
                'description' => $_POST['description'] ?? null,
                'start' => $_POST['start'] ?? null,
                'briks_used' => $_POST['briks_used'] ?? null,
                'full_urls' => $full_urls, // Array of main image URLs
                'thumbnail_paths' => $thumbnail_paths, // Array of thumbnail URLs
                'location_full' => $_POST['location_full'] ?? null
            );
            echo json_encode($response);
        }
    }
}



//FUNCTIONS


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
