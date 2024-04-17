<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../ecobricks_env.php'; // Ensure the correct path

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['project_id'])) {
    $project_id = intval($_POST['project_id']);
    handlePhotoUploads($project_id);
}

$projectId = intval($_GET['project_id'] ?? 0); // Get project ID from the URL
$projectData = fetchProjectData($projectId);

function fetchProjectData($projectId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tb_projects WHERE project_id = ?");
    $stmt->bind_param("i", $projectId);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function handlePhotoUploads($projectId) {
    global $conn;
    $upload_dir = '../projects/photos/';
    $thumbnail_dir = '../projects/tmbs/';
    $error_message = '';
    $db_fields = ['ready_to_show' => 1, 'logged_ts' => date("Y-m-d H:i:s")];

    for ($i = 1; $i <= 5; $i++) {
        $file_input_name = "photo{$i}_main";
        if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] === UPLOAD_ERR_OK) {
            $new_file_name_webp = "project-{$projectId}-{$i}.webp";
            $targetPath = $upload_dir . $new_file_name_webp;
            $thumbnailPath = $thumbnail_dir . $new_file_name_webp;

            if (move_uploaded_file($_FILES[$file_input_name]['tmp_name'], $targetPath)) {
                createThumbnail($targetPath, $thumbnailPath, 160, 160, 90);
                $db_fields["photo{$i}_main"] = $targetPath;
                $db_fields["photo{$i}_tmb"] = $thumbnailPath;
            } else {
                $error_message .= "Failed to upload image $i.<br>";
            }
        }
    }

    if ($error_message) {
        echo "<p>Error: $error_message</p>";
        return;
    }

    // Update database
    $query = "UPDATE tb_projects SET " . implode(", ", array_map(function($val, $key) { return "$key='$val'"; }, $db_fields, array_keys($db_fields))) . " WHERE project_id = $projectId";
    if ($conn->query($query) === TRUE) {
        echo "<p>Update successful.</p>";
    } else {
        echo "<p>Error updating record: " . $conn->error . "</p>";
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
</body>
</html>
