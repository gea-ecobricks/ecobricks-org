<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

$project_id = $_GET['project_id'] ?? 0; // Ensure this matches the URL parameter

if ($project_id > 0) {
    $stmt = $conn->prepare("SELECT * FROM tb_projects WHERE project_id = ?");
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
    } else {
        echo "Project not found.";
        exit;
    }
    $stmt->close();
} else {
    echo "Invalid project ID.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../project-photo-functions.php'; // Ensure this path is correct
    $upload_dir = '../projects/photos/';
    $thumbnail_dir = '../projects/tmbs/';

    $location_full = $_POST['location_address'] ?? 'Default Location';
    $project_name = $_POST['project_name'];
    $description_short = $_POST['description_short'];
    $description_long = $_POST['description_long'];
    $project_type = $_POST['project_type'];
    $construction_type = $_POST['construction_type'];
    $community = $_POST['community'] ?? '';
    $project_admins = $_POST['project_admins'] ?? '';
    $start_dt = $_POST['start_dt'];
    $briks_used = $_POST['briks_used'];
    $est_avg_brik_weight = $_POST['est_avg_brik_weight'];
    $latitude = (double)$_POST['latitude'];
    $longitude = (double)$_POST['longitude'];
    $connected_ecobricks = $_POST['connected_ecobricks'] ?? '';

    $db_fields = [];
    $db_values = [];
    $db_types = "";
    $error_messages = [];

    
    // Loop through possible file inputs.
    for ($i = 1; $i <= 6; $i++) {
        $fileInputName = "photo{$i}_main";
        
        // Check if a file has been uploaded in the current file input.
        if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
            $newFileNameWebP = "project-{$project_id}-{$i}.webp";
            $targetPath = $upload_dir . $newFileNameWebP;
    
            // Delete existing file if it exists.
            if (file_exists($targetPath)) {
                unlink($targetPath);
            }
    
            // Attempt to resize and convert the uploaded image to WebP format.
            if (resizeAndConvertToWebP($_FILES[$fileInputName]['tmp_name'], $targetPath, 1000, 88)) {
                // If successful, create a thumbnail of the image.
                createThumbnail($targetPath, $thumbnail_dir . $newFileNameWebP, 160, 160, 77);
    
                // Collect the database field and new file name to be updated.
                $db_fields[] = "photo{$i}_main";
                $db_values[] = $newFileNameWebP;
                $db_types .= 's'; // Append 's' for string type in the parameter binding.
            } else {
                // Collect error message if the image processing fails.
                $error_messages[] = "Error processing image {$i}. Please try again.";
            }
        }
    }
    
    // 1 Check if there were any new files processed and if there were no errors.
    if (!empty($db_fields) && empty($error_messages)) {
        $fields_for_update = implode(', ', array_map(function($field) { return "{$field} = ?"; }, $db_fields));
        $sql = "UPDATE tb_projects SET $fields_for_update WHERE project_id=?";
        $update_stmt = $conn->prepare($sql);
        // Merge all new values and append the project_id at the end for the WHERE clause.
        $db_values[] = $project_id;
        $db_types .= 'i'; // Append 'i' for integer type for the project ID.
    
        $update_stmt->bind_param($db_types, ...$db_values);
    
        if ($update_stmt->execute()) {
            echo "<script>alert('Project details and photos updated successfully.'); window.location.href='project.php?project_id={$project_id}';</script>";
        } else {
            echo "Database update failed: " . $update_stmt->error;
        }
        $update_stmt->close();
    } else {
        // Output any error messages if present.
        foreach ($error_messages as $msg) {
            echo $msg . "<br>";
        }
    }

    
    if (empty($error_messages)) {
        $sql = "UPDATE tb_projects SET project_name=?, description_short=?, description_long=?, location_full=?, project_type=?, construction_type=?, community=?, project_admins=?, start_dt=?, briks_used=?, est_avg_brik_weight=?, location_lat=?, location_long=?, connected_ecobricks=? " . (count($db_fields) ? ", " . implode(', ', array_map(function($field) { return "{$field} = ?"; }, $db_fields)) : "") . " WHERE project_id=?";
        array_push($db_values, $project_name, $description_short, $description_long, $location_full, $project_type, $construction_type, $community, $project_admins, $start_dt, $briks_used, $est_avg_brik_weight, $latitude, $longitude, $connected_ecobricks, $project_id);
        $db_types .= 'sssssssssiiddsi';

        $update_stmt = $conn->prepare($sql);
        $update_stmt->bind_param($db_types, ...$db_values);
        if ($update_stmt->execute()) {
            echo "<script>alert('Project details and photos updated successfully.'); window.location.href='project.php?project_id={$project_id}';</script>";
        } else {
            echo "Database update failed: " . $update_stmt->error;
        }
        $update_stmt->close();
    } else {
        foreach ($error_messages as $msg) {
            echo $msg . "<br>";
        }
    }
}
?>






<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.991';?>
<?php $page='edit-project';?>


<?php require_once ("../includes/add-project-inc.php");?>


<div class="splash-content-block"></div>
<div id="splash-bar"></div>

 <!-- PAGE CONTENT-->

 <div id="form-submission-box">
    <div class="form-container">
        <div class="step-graphic" style="width:fit-content;margin:auto;">
            <img src="../svgs/step1-log-project.svg" style="height:25px;">
        </div>

        <div class="splash-form-content-block">  
            <div class="splash-box">
                <div class="splash-heading" data-lang-id="001-splash-title">Edit Project</div>
            </div>
            <!-- <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/building-methods.svg" style="width:65%" alt="There are many ways to build with ecobricks">
            </div> -->
        </div>

        <h5 data-lang-id="002-edit-form-description" style="text-align:center">Update your ecobrick project details on ecobricks.org. Projects will be featured on our main page and archived in our database."</h5>
        
        <form id="submit-form" method="post" action="" enctype="multipart/form-data">

    <?php if (isset($project)): ?>
        <div>
            <p>Your current project photos:</p>
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <?php $photoKey = "photo{$i}_main"; ?>
                <?php if (!empty($project[$photoKey])): ?>
                    <img src="../<?= htmlspecialchars($project[$photoKey]) ?>" alt="Photo <?= $i ?>" style="max-width: 200px;">
                <?php endif; ?>
            <?php endfor; ?>
        </div>
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div>
                <label for="photo<?= $i ?>_main">Upload Photo <?= $i ?>:</label>
                <input type="file" id="photo<?= $i ?>_main" name="photo<?= $i ?>_main">
            </div>
        <?php endfor; ?>
    <?php endif; ?>

    

            <div class="form-item">
                <label for="project_name" data-lang-id="003-project-name">Edit your project's name:</label><br>
                <input type="text" id="project_name" name="project_name" value="<?php echo htmlspecialchars($project['project_name'] ?? ''); ?>" aria-label="Project Name" title="Required. Max 255 characters." required>
                <p class="form-caption" data-lang-id="005-project-name-caption">Give a name or title to your project post. Avoid special characters.</p>
            </div>

            <div class="form-item">
                <label for="description_short" data-lang-id="004-short-project-desc">Edit your project's short description:</label><br>
                <textarea id="description_short" name="description_short" aria-label="Project Description" title="Required. Max 150 words" required><?php echo htmlspecialchars($project['description_short'] ?? ''); ?></textarea>
                <p class="form-caption" data-lang-id="004-short-project-desc-caption">Provide a one sentence description of this project. Max 150 words. Avoid special characters.</p>
            </div>

            <div class="form-item">
                <label for="description_long" data-lang-id="005-long-project-desc">Edit full project description:</label><br>
                <textarea id="description_long" name="description_long" aria-label="Project Description" title="Required. Max 150 words"><?php echo htmlspecialchars($project['description_long'] ?? ''); ?></textarea>
                <p class="form-caption" data-lang-id="005-long-project-desc-caption">Optional. Take as much space as you need as share the full details of your project. Max 1000 words.</p>
            </div>

            <div class="form-item">
                <label for="start_dt" data-lang-id="007-start-date">Edit project start date:</label><br>
                <input type="date" id="start_dt" name="start_dt" value="<?php echo htmlspecialchars($project['start_dt'] ?? ''); ?>" aria-label="Start Date" required>
                <p class="form-caption" data-lang-id="008-start-date-caption">When did this project begin?</p>
            </div>

            <div class="form-item">
                <label for="briks_used" data-lang-id="009-bricks-used">Edit how many ecobricks your project uses:</label><br>
                <input type="number" id="briks_used" name="briks_used" value="<?php echo htmlspecialchars($project['briks_used'] ?? 0); ?>" aria-label="Bricks Used" min="1" max="5000" required>
                <p class="form-caption" data-lang-id="009-bricks-used-caption">Please enter a number of ecobricks between 1-5000.</p>
            </div>

            <div class="form-item">
                <label for="est_avg_brik_weight" data-lang-id="010-est-avg-weight">Edit your estimate on the average weight of the ecobricks used in your project (in grams):</label><br>
                <input type="number" id="est_avg_brik_weight" name="est_avg_brik_weight" value="<?php echo htmlspecialchars($project['est_avg_brik_weight'] ?? 0); ?>" aria-label="Estimate Brik Weight" min="100" max="2000" required>
                <p class="form-caption" data-lang-id="010-est-avg-weight-range">Must be a number between 100 and 2000.</p>
            </div>

            <div class="form-item">
                <label for="project_type" data-lang-id="011-project-type">Edit your project's type:</label><br>
                <select id="project_type" name="project_type" aria-label="Project Type" required>
                    <option value="">Select project type...</option>
                    <option value="single module" <?php echo ($project['project_type'] ?? '') == 'single module' ? 'selected' : ''; ?>>Single Module</option>
                    <option value="furniture" <?php echo ($project['project_type'] ?? '') == 'furniture' ? 'selected' : ''; ?>>Furniture</option>
                    <option value="garden" <?php echo ($project['project_type'] ?? '') == 'garden' ? 'selected' : ''; ?>>Outdoor Garden</option>
                    <option value="structure" <?php echo ($project['project_type'] ?? '') == 'structure' ? 'selected' : ''; ?>>Structure</option>
                    <option value="art" <?php echo ($project['project_type'] ?? '') == 'art' ? 'selected' : ''; ?>>Art</option>
                    <option value="other" <?php echo ($project['project_type'] ?? '') == 'other' ? 'selected' : ''; ?>>Other</option>
                </select>
            </div>

            <div class="form-item">
                <label for="construction_type" data-lang-id="012-construction-type">Edit project construction type:</label><br>
                <select id="construction_type" name="construction_type" aria-label="Construction Type" required>
                    <option value="">Select construction type...</option>
                    <option value="silicone" <?php echo ($project['construction_type'] ?? '') == 'silicone' ? 'selected' : ''; ?>>Silicone</option>
                    <option value="banding" <?php echo ($project['construction_type'] ?? '') == 'banding' ? 'selected' : ''; ?>>Tire Banding</option>
                    <option value="ecojoiner" <?php echo ($project['construction_type'] ?? '') == 'ecojoiner' ? 'selected' : ''; ?>>Ecojoiner</option>
                    <option value="earth" <?php echo ($project['construction_type'] ?? '') == 'earth' ? 'selected' : ''; ?>>Earth/Cob</option>
                    <option value="installation" <?php echo ($project['construction_type'] ?? '') == 'installation' ? 'selected' : ''; ?>>Installation</option>
                    <option value="other" <?php echo ($project['construction_type'] ?? '') == 'other' ? 'selected' : ''; ?>>Other</option>
                </select>
            </div>

            <div class="form-item">
                <label for="community" data-lang-id="013-community">Edit project's community:</label><br>
                <input type="text" id="community" name="community" value="<?php echo htmlspecialchars($project['community'] ?? ''); ?>" aria-label="Community (optional)">
                <p class="form-caption" data-lang-id="013b-optional">Optional</p>
            </div>

            <div class="form-item">
                <label for="project_admins" data-lang-id="014-project-admins">Edit project leader(s):</label><br>
                <input type="text" id="project_admins" name="project_admins" value="<?php echo htmlspecialchars($project['project_admins'] ?? ''); ?>" aria-label="Project Admins (optional)">
                <p class="form-caption" data-lang-id="014b-optional">Optional: Provide the name(s) of the project's principals. If you wish to link this to a GoBrik user account be sure to spell the name accordingly.</p>
            </div>



    <div class="form-item">
    <label for="connected_ecobricks">The serials of ecobricks used in your project:</label><br>
    <input type="text" id="connected_ecobricks" name="connected_ecobricks" aria-label="Connected Ecobricks" placeholder="Enter serials..." value="<?php echo htmlspecialchars($project['connected_ecobricks'] ?? ''); ?>">
    <div id="serial-select"><ul id="autocomplete-results" ></ul></div>
    <p class="form-caption">Optional: Enter the serial numbers of ecobricks connected to this project. Separate multiple serial numbers with commas.</p>
</div>




            <div class="form-item">
                <label for="location_address" data-lang-id="015-location">Edit project location:</label><br>
                <input type="text" id="location_address" name="location_address" value="<?php echo htmlspecialchars($project['location_full'] ?? ''); ?>" aria-label="Project Location" required>
                <p class="form-caption" data-lang-id="016-location-caption">For privacy, please don't use your exact address. Choose your general neighbourhood or town. Project locations will be shown on our project map.</p>
            </div>

            <input type="hidden" id="lat" name="latitude" value="<?php echo htmlspecialchars($project['location_lat'] ?? ''); ?>">
            <input type="hidden" id="lon" name="longitude" value="<?php echo htmlspecialchars($project['location_long'] ?? ''); ?>">

            <div data-lang-id="017-update-button">
                <input type="submit" value="Update Project ➡️" aria-label="Submit Form">
            </div>
            <!-- <div data-lang-id="018-delete-button">
            <button type="button" id="deleteButton">Delete Project</button>                
            </div> -->
           

        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('submit-form');
    form.onsubmit = function(event) {
        // Prevent the form from submitting if validations fail
        event.preventDefault();

        // Clear previous error messages
        clearErrorMessages();

        // Validate the required photo1_main field if exists
        // var photo1Input = document.getElementById('photo1_main');
        // if (photo1Input && !photo1Input.files.length) {
        //     showError('photo1_main', 'The main photo (Photo 1) is required.');
        //     return;
        // }

        // Optional: Validate file sizes here before sending to the server
        var valid = true;
        for (var i = 1; i <= 6; i++) {
            var input = document.getElementById('photo' + i + '_main');
            if (input && input.files.length > 0) {
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

    // DELETE FUNCTION
    var deleteButton = document.getElementById('deleteButton');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            if (confirm('Are you sure you want to delete this project? This action cannot be undone.')) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'action';
                input.value = 'delete_project';
                form.appendChild(input);
                form.submit();
            }
        });
    }
});
</script>



<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>