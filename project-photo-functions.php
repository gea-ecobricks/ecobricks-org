<?php

  
//FUNCTIONS

function handleFileUploadError($errorCode, $index) {
    $isRequired = ($index == 1); // Assuming photo1_main is index 1
    $errorType = "Photo " . $index;
    
    if (!$isRequired) {
        $errorType .= " (optional)"; // Marking the photo as optional in the error message
    }

    switch ($errorCode) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            return "{$errorType} exceeds the maximum file size allowed.<br>";
        case UPLOAD_ERR_PARTIAL:
            return "{$errorType} was only partially uploaded.<br>";
        case UPLOAD_ERR_NO_FILE:
            // Only report missing file for required photo
            if ($isRequired) {
                return "{$errorType} was not uploaded but is required.<br>";
            }
            break; // Optionally, you could ignore this error for optional photos
        case UPLOAD_ERR_NO_TMP_DIR:
            return "Missing a temporary folder on server.<br>";
        case UPLOAD_ERR_CANT_WRITE:
            return "{$errorType} could not be written to disk.<br>";
        case UPLOAD_ERR_EXTENSION:
            return "A PHP extension stopped the upload of {$errorType}.<br>";
        default:
            return "An unknown error occurred with {$errorType}.<br>";
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


// Function to create a thumbnail with height 200px while maintaining aspect ratio
function createTrainingThumbnail($source_path, $destination_path, $target_height, $quality) {
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
            echo "<script>console.log('Unsupported image type for $source_path');</script>";
            return false;
    }

    $aspect_ratio = $source_width / $source_height;
    $target_width = intval($target_height * $aspect_ratio); // Cast to integer

    $thumbnail = imagecreatetruecolor($target_width, intval($target_height)); // Cast to integer
    if (imagecopyresampled($thumbnail, $source_image, 0, 0, 0, 0, $target_width, $target_height, $source_width, $source_height)) {
        if (imagewebp($thumbnail, $destination_path, $quality)) {
            imagedestroy($source_image);
            imagedestroy($thumbnail);
            return true;
        } else {
            echo "<script>console.log('Failed to save thumbnail to $destination_path');</script>";
        }
    } else {
        echo "<script>console.log('Failed to create thumbnail for $source_path');</script>";
    }
    imagedestroy($source_image);
    imagedestroy($thumbnail);
    return false;
}








// Function to resize original image if any of its dimensions are larger than 1500px.
function resizeAndConvertToWebP($sourcePath, $targetPath, $maxDim, $compressionQuality) {
    // First check if the source is already a webp and simply copy if it is
    $fileType = strtolower(pathinfo($sourcePath, PATHINFO_EXTENSION));
    if ($fileType === 'webp') {
        // If already webp and no resizing is needed, just copy the file over.
        if (!file_exists($targetPath)) {
            copy($sourcePath, $targetPath);
        }
        return true;
    }

    // Correct orientation based on EXIF data for JPEGs only
    if ($fileType === 'jpeg' || $fileType === 'jpg') {
        correctImageOrientation($sourcePath);
    }

    list($width, $height, $type, $attr) = getimagesize($sourcePath);
    $scale = min($maxDim / $width, $maxDim / $height);
    $newWidth = $width > $maxDim ? ceil($scale * $width) : $width;
    $newHeight = $height > $maxDim ? ceil($scale * $height) : $height;

    $src = null;
    switch ($type) {
        case IMAGETYPE_JPEG:
            $src = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $src = imagecreatefrompng($sourcePath);
            break;
        default:
            // Optionally handle other image types or skip unsupported ones
            return false;
    }

    if ($src) {
        $dst = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagewebp($dst, $targetPath, $compressionQuality); // Save the image as WebP

        imagedestroy($src);
        imagedestroy($dst);
    }
    return true;
}


// Function to resize original image to 1020px width and convert to WebP format
function resizeAndConvertTrainingToWebP($sourcePath, $targetPath, $maxWidth, $compressionQuality) {
    $fileType = strtolower(pathinfo($sourcePath, PATHINFO_EXTENSION));

    // Correct orientation based on EXIF data for JPEGs only
    if ($fileType === 'jpeg' || $fileType === 'jpg') {
        correctImageOrientation($sourcePath);
    }

    list($width, $height, $type) = getimagesize($sourcePath);

    // Calculate new dimensions while maintaining aspect ratio
    if ($width > $maxWidth) {
        $newWidth = $maxWidth;
        $newHeight = intval(($height / $width) * $newWidth);
    } else {
        $newWidth = $width;
        $newHeight = $height;
    }

    // Initialize image source
    $src = null;
    switch ($type) {
        case IMAGETYPE_JPEG:
            $src = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $src = imagecreatefrompng($sourcePath);
            break;
        default:
            echo "<script>console.log('Unsupported image type');</script>";
            return false;
    }

    if ($src) {
        // Create a true color image for the destination
        $dst = imagecreatetruecolor($newWidth, $newHeight);
        imagealphablending($dst, false);
        imagesavealpha($dst, true);

        // Copy and resize the image
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        // Save the resized image as WebP
        if (imagewebp($dst, $targetPath, $compressionQuality)) {
            echo "<script>console.log('Image resized to: {$newWidth}px x {$newHeight}px and saved to {$targetPath}');</script>";
        } else {
            echo "<script>console.log('Failed to save image as WebP');</script>";
            imagedestroy($src);
            imagedestroy($dst);
            return false;
        }

        // Free up memory
        imagedestroy($src);
        imagedestroy($dst);

        // Verify the resized image
        list($newWidthVerified, $newHeightVerified) = getimagesize($targetPath);
        echo "<script>console.log('Verified resized dimensions: {$newWidthVerified}px x {$newHeightVerified}px');</script>";
    } else {
        echo "<script>console.log('Failed to create image resource');</script>";
        return false;
    }

    return true;
}









function correctImageOrientation($filepath) {
    $fileType = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
    if ($fileType !== 'jpeg' && $fileType !== 'jpg') {
        // Skip EXIF processing for non-JPEG files
        return;
    }

    $exif = @exif_read_data($filepath);  // Using error control operator to suppress errors
    if (!empty($exif['Orientation'])) {
        $image = imagecreatefromjpeg($filepath);
        if (!$image) return;  // Ensure the image was successfully created

        switch ($exif['Orientation']) {
            case 3:
                $image = imagerotate($image, 180, 0);
                break;
            case 6:
                $image = imagerotate($image, -90, 0);
                break;
            case 8:
                $image = imagerotate($image, 90, 0);
                break;
        }
        imagejpeg($image, $filepath, 90); // Save corrected image
        imagedestroy($image);
    }
}


function deleteProject($projectId, $conn) {
    if ($conn->connect_error) {
        return "Connection failed: " . $conn->connect_error;
    }

    $deleteStmt = $conn->prepare("DELETE FROM tb_projects WHERE project_id = ?");
    $deleteStmt->bind_param("i", $projectId);
    if (!$deleteStmt->execute()) {
        return "Error deleting project: " . $deleteStmt->error;
    }
    $deleteStmt->close();
    return true;
}




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'delete_training') {
    $training_id = $_POST['training_id'];
    $deleteResult = deleteTraining($training_id, $conn);
    if ($deleteResult === true) {
        echo "<script>alert('Training has been successfully deleted.'); window.location.href='add-training.php';</script>";
        exit;
    } else {
        echo "<script>alert('" . $deleteResult . "');</script>";
        exit;
    }
}



function deleteTraining($trainingId, $conn) {
    if ($conn->connect_error) {
        return "Connection failed: " . $conn->connect_error;
    }

    $deleteStmt = $conn->prepare("DELETE FROM tb_trainings WHERE training_id = ?");
    $deleteStmt->bind_param("i", $trainingId);
    if (!$deleteStmt->execute()) {
        return "Error deleting training: " . $deleteStmt->error;
    }
    $deleteStmt->close();
    return true;
}






?>
