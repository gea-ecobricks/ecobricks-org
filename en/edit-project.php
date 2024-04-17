<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../ecobricks_env.php';



$projectId = isset($_GET['project_id']) ? intval($_GET['project_id']) : 0;
$projectData = null;

if ($projectId > 0) {
    $stmt = $conn->prepare("SELECT * FROM tb_projects WHERE project_id = ?");
    $stmt->bind_param("i", $projectId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $projectData = $result->fetch_assoc();
    } else {
        echo "Project not found.";
        exit;
    }
} else {
    echo "Invalid project ID.";
    exit;
}


$error_message = '';
$full_urls = [];
$thumbnail_paths = [];
$main_file_sizes = [];
$thumbnail_file_sizes = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['project_id'])) {
    $project_id = $_POST['project_id'];
    $upload_dir = '../projects/photos/';
    $thumbnail_dir = '../projects/tmbs/';

    $db_fields = [];
    $db_values = [];
    $db_types = "";

    for ($i = 1; $i <= 6; $i++) { // Increase to six photos
        $file_input_name = "photo{$i}_main";
        if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] === UPLOAD_ERR_OK) {
            $file_extension = strtolower(pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));
            $new_file_name_webp = "project-{$project_id}-{$i}.webp";
            $targetPath = $upload_dir . $new_file_name_webp;

            // Delete existing file if it exists
            if (file_exists($targetPath)) {
                unlink($targetPath);
            }

            if (resizeAndConvertToWebP($_FILES[$file_input_name]['tmp_name'], $targetPath, 1000, 88)) {
                createThumbnail($targetPath, $thumbnail_dir . $new_file_name_webp, 160, 160, 77);
                $full_urls[] = $targetPath;
                $thumbnail_paths[] = $thumbnail_dir . $new_file_name_webp;
                $main_file_sizes[] = filesize($targetPath) / 1024;
                $thumbnail_file_sizes[] = filesize($thumbnail_dir . $new_file_name_webp) / 1024;

                $db_fields[] = "photo{$i}_main";
                $db_fields[] = "photo{$i}_tmb";
                $db_values[] = $targetPath;
                $db_values[] = $thumbnail_dir . $new_file_name_webp;
                $db_types .= "ss";
            } else {
                $error_message .= "Error processing image {$i}. Please try again.<br>";
            }
        }
    }



    if (!empty($db_fields)) {
        $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
        $update_sql = "UPDATE tb_projects SET {$fields_for_update}, ready_to_show = 1, logged_ts = NOW() WHERE project_id = ?";
        $db_values[] = $project_id;
        $db_types .= "i";

        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param($db_types, ...$db_values);
        if (!$update_stmt->execute()) {
            $error_message .= "Database update failed: " . $update_stmt->error;
        }
        $update_stmt->close();
    }

    if (!empty($error_message)) {
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
    } else {
        $response = [
            'project_id' => $project_id,
            'full_urls' => $full_urls,
            'thumbnail_paths' => $thumbnail_paths,
            'main_file_sizes' => $main_file_sizes,
            'thumbnail_file_sizes' => $thumbnail_file_sizes
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}

// include '../project-photo-functions.php';


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
    // Correct orientation based on EXIF data
    correctImageOrientation($sourcePath);

    list($width, $height, $type, $attr) = getimagesize($sourcePath);
    $scale = min($maxDim/$width, $maxDim/$height);
    $newWidth = $width > $maxDim ? ceil($scale * $width) : $width;
    $newHeight = $height > $maxDim ? ceil($scale * $height) : $height;

    switch ($type) {
        case IMAGETYPE_JPEG:
            $src = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $src = imagecreatefrompng($sourcePath);
            break;
        default:
            return false; // Handle other types as needed
    }

    $dst = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    imagewebp($dst, $targetPath, $compressionQuality); // Save the image as WebP

    imagedestroy($src);
    imagedestroy($dst);
    return true;
}



function correctImageOrientation($filepath) {
    $exif = exif_read_data($filepath);
    if (!empty($exif['Orientation'])) {
        $image = imagecreatefromjpeg($filepath);
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

?>


<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<title>Edit Project Photos</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</HEAD>
<body>
<div class="container">
    <h1>Edit Project Photos</h1>
    <?php if ($projectData): ?>
    <div>
        <h2>Current Photos</h2>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <?php if (!empty($projectData["photo{$i}_main"])): ?>
                <img src="<?= $projectData["photo{$i}_main"] ?>" alt="Photo <?= $i ?>" style="max-width: 200px;">
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="project_id" value="<?= $projectId ?>">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div>
                <label for="photo<?= $i ?>_main">Photo <?= $i ?> Main:</label>
                <input type="file" id="photo<?= $i ?>_main" name="photo<?= $i ?>_main" <?= $i == 1 ? 'required' : '' ?>>
            </div>
        <?php endfor; ?>
        <button type="submit">Upload Photos</button>
    </form>
    <?php else: ?>
        <p>Project not found.</p>
    <?php endif; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('photoform');
    form.onsubmit = function(event) {
        // Prevent the form from submitting if validations fail
        event.preventDefault();

        // Clear previous error messages
        clearErrorMessages();

        // Validate the required photo1_main field
        var photo1Input = document.getElementById('photo1_main');
        if (!photo1Input.files.length) {
            showError('photo1_main', 'The main photo (Photo 1) is required.');
            return;
        }

        // Optional: Validate file sizes here before sending to the server
        var valid = true;
        for (var i = 1; i <= 5; i++) {
            var input = document.getElementById('photo' + i + '_main');
            if (input.files.length > 0) {
                var file = input.files[0];
                if (file.size > 8388608) { // 8 MB limit
                    showError('photo' + i + '_main', 'File size should not exceed 8 MB.');
                    valid = false;
                }
            }
        }

        if (!valid) {
            return; // Stop the form submission if there are errors
        }

        // If everything is valid, proceed to submit the form
        form.submit();
    };

    function showError(inputId, message) {
        var element = document.getElementById(inputId);
        if (element) {
            var errorSpan = document.createElement('span');
            errorSpan.textContent = message;
            errorSpan.style.color = 'red';
            errorSpan.className = 'error-message';
            element.parentNode.appendChild(errorSpan);
        }
    }

    function clearErrorMessages() {
        var errors = document.querySelectorAll('.error-message');
        errors.forEach(function(error) {
            error.parentNode.removeChild(error);
        });
    }
});
</script>


</body>
</html>
