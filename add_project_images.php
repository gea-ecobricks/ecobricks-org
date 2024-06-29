<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'ecobricks_env.php';

$error_message = '';
$full_urls = []; // Initialize array to store main image URLs
$thumbnail_paths = []; // Initialize array to store thumbnail URLs
$hasError = false; // Flag to track if there's an error

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
                    $hasError = true; // Set error flag
                }
            }
        }

        if (!empty($db_fields) && !$hasError) { // Check if there's something to update and no error occurred
            $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
            $update_sql = "UPDATE tb_projects SET {$fields_for_update} WHERE project_id = ?";
            $db_values[] = $project_id; // Add project_id to the end of the array
            $db_types .= "i"; // Add integer type for project_id

            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param($db_types, ...$db_values);
            if (!$update_stmt->execute()) {
                $error_message .= "Database update failed: " . $update_stmt->error;
                $hasError = true; // Set error flag
            }
            $update_stmt->close();
        }

        if ($hasError) {
            // If you have AJAX handling, you might return a JSON response here
            // For now, redirect back to the form with an error message
            header('Location: /en/add-project-photos.php?error=' . urlencode($error_message));
            exit;
        } else {
            // Redirect to the form page with a success message
            header('Location: /en/add-project-photos.php?status=success');
            exit;
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




// Function to create a thumbnail using GD library
function createNonSquareThumbnail($source_path, $destination_path, $max_dimension, $quality) {
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

    // Calculate the dimensions based on the max dimension while maintaining the aspect ratio
    if ($source_width > $source_height) {
        $thumbnail_width = $max_dimension;
        $thumbnail_height = (int) ($source_height * $max_dimension / $source_width);
    } else {
        $thumbnail_height = $max_dimension;
        $thumbnail_width = (int) ($source_width * $max_dimension / $source_height);
    }

    $thumbnail = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
    imagecopyresampled($thumbnail, $source_image, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $source_width, $source_height);
    imagedestroy($source_image);

    // Save the thumbnail
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
