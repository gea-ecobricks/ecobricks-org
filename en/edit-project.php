<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once '../ecobricks_env.php';

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

include '../project-photo-functions.php'; // Assuming your functions are in this file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 6; $i++) { // Handling up to six photos
        $fileInputName = "photo{$i}_main";
        if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
            $fileExtension = pathinfo($_FILES[$fileInputName]['name'], PATHINFO_EXTENSION);
            $newFileNameWebP = "project-{$projectId}-{$i}.webp";
            $targetPath = $upload_dir . $newFileNameWebP;

            // Delete existing file if it exists to replace it
            if (file_exists($targetPath)) {
                unlink($targetPath);
            }

            if (resizeAndConvertToWebP($_FILES[$fileInputName]['tmp_name'], $targetPath, 1000, 88)) {
                createThumbnail($targetPath, $thumbnail_dir . $newFileNameWebP, 160, 160, 77);
                // Update database with new file paths if needed
            } else {
                echo "Error processing image {$i}. Please try again.<br>";
            }
        }
    }
    // Redirect or notify of success
    echo "<script>alert('Photos updated successfully.'); window.location.href='edit-project.php?project_id={$projectId}';</script>";
}

?>

<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <META charset="UTF-8">
    <title>Edit Project Photos</title>
</HEAD>
<body>
    <div class="container">
        <h1>Edit Project Photos</h1>
        <?php if (isset($projectData)): ?>
            <div>
                <h2>Current Photos</h2>
                <?php for ($i = 1; $i <= 6; $i++): // Display up to six photos ?>
                    <?php $photoKey = "photo{$i}_main"; ?>
                    <?php if (!empty($projectData[$photoKey])): ?>
                        <img src="../<?= htmlspecialchars($projectData[$photoKey]) ?>" alt="Photo <?= $i ?>" style="max-width: 200px;">
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="project_id" value="<?= $projectId ?>">
                <?php for ($i = 1; $i <= 6; $i++): // Form fields for uploading photos ?>
                    <div>
                        <label for="photo<?= $i ?>_main">Photo <?= $i ?>:</label>
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
