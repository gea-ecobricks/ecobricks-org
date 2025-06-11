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

     // Handle project deletion
     if (isset($_POST['action']) && $_POST['action'] == 'delete_project') {
        $deleteResult = deleteProject($project_id, $conn);
        if ($deleteResult === true) {
            echo "<script>alert('Project has been successfully deleted.'); window.location.href='projects_list.php';</script>";
            exit;
        } else {
            echo "<script>alert('" . $deleteResult . "');</script>";
            exit;
        }
    }

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
            echo "<script>alert('Your Projec has been successfully updated!'); window.location.href='project.php?project_id={$project_id}';</script>";
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
<?php $version='1.992';?>
<?php $page='edit-project';?>


<?php require_once ("../includes/edit-project-inc.php");?>


<div class="splash-content-block"></div>
<div id="splash-bar"></div>

 <!-- PAGE CONTENT-->

 <div id="form-submission-box">
    <div class="form-container">
    <div class="form-top-header" style="display:flex;flex-flow:row;">
            <div class="step-graphic" style="width:fit-content;margin:auto;margin-left:0px">
                <img src="../svgs/step3-log-project.svg" style="height:25px;">
            </div>
            <div id="language-code" onclick="showLangSelector()" aria-label="Switch languages" data-lang-id="000-language-code">EN 🌐</div>
        </div>

        <div class="splash-form-content-block">  
            <div class="splash-box">
                <div class="splash-heading" data-lang-id="001-splash-title" style="text-align:left">Edit Your Project Post</div>
            </div>
            <!-- <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/building-methods.svg" style="width:65%" alt="There are many ways to build with ecobricks">
            </div> -->
        </div>
        <div class="lead-page-paragraph">
            <p data-lang-id="002-edit-form-description" style="text-align:left">Update your ecobrick project details on ecobricks.org. Projects will be featured on our main page and archived in our database.</p>
            <br>
            <hr>
            <br><br>
        </div>
        
        <form id="submit-form" method="post" action="" enctype="multipart/form-data" novalidate>

        

        <?php if (isset($project)): ?>
<div>
    <p>Your current project photos:</p>
    <?php for ($i = 1; $i <= 6; $i++): ?>
        <?php $photoKey = "photo{$i}_main"; ?>
        <?php if (!empty($project[$photoKey])): ?>
            <img src="../<?= htmlspecialchars($project[$photoKey]) ?>" alt="Photo <?= $i ?>" title="Photo <?= $i ?>" style="max-width: 200px;">
        <?php endif; ?>
    <?php endfor; ?>
</div>

<!-- Photo 1 Main & Thumbnail -->
<div class="form-item">
    <div>
        <label for="photo1_main" data-lang-id="003-feature-photo">Replace photo 1 (your project's featured image) with:</label><br>
        <input type="file" id="photo1_main" name="photo1_main">
        <p class="form-caption" data-lang-id="004-feature-desc">Select a new featured photo for this project.</p>
    </div>
</div>

<?php for ($i = 2; $i <= 6; $i++): ?>
    <!-- Photo X Main & Thumbnail -->
    <div class="form-item">
        <label for="photo<?= $i ?>_main" data-lang-id="00<?= 3 + ($i - 1) * 2 ?>-another-photo">Replace photo <?= $i ?> with:</label><br>
        <input type="file" id="photo<?= $i ?>_main" name="photo<?= $i ?>_main">
        <p class="form-caption" data-lang-id="00<?= 4 + ($i - 1) * 2 ?>-another-photo-optional">Optional</p>
    </div>
<?php endfor; ?>

<?php endif; ?>



    

            <div class="form-item">
                <label for="project_name" data-lang-id="003-project-name">Edit your project's name:</label><br>
                <input type="text" id="project_name" name="project_name" value="<?php echo htmlspecialchars($project['project_name'] ?? ''); ?>" aria-label="Project Name" title="Required. Max 255 characters." required>
                <p class="form-caption" data-lang-id="005-project-name-caption">Give a name or title to your project post. Avoid special characters.</p>

                  <!--ERRORS-->
                  <div id="name-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>

                <div id="name-error-long" class="form-field-error" data-lang-id="000-name-field-too-long-error">Your project name is too long.  Max 50 characters.</div>

                <div id="name-error-invalid" class="form-field-error" data-lang-id="005b-project-name-error">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs please.</div>


            </div>

            <div class="form-item">
                <label for="description_short" data-lang-id="004-short-project-desc">Edit your project's short description:</label><br>
                <textarea id="description_short" name="description_short" aria-label="Project Description" title="Required. Max 150 words" required><?php echo htmlspecialchars($project['description_short'] ?? ''); ?></textarea>
                <p class="form-caption" data-lang-id="004-short-project-desc-caption">Provide a one sentence description of this project. Max 150 words. Avoid special characters.</p>

                 <!--ERRORS-->
            <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>

            <div id="description-error-long" class="form-field-error" data-lang-id="000-field-description-too-long-error">Your project description is too long.  Max 255 characters.</div>

            <div id="description-error-invalid" class="form-field-error" data-lang-id="000-field-invalid-characters">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs.</div>

            </div>

            <div class="form-item">
                <label for="description_long" data-lang-id="005-long-project-desc">Edit full project description:</label><br>
                <textarea id="description_long" name="description_long" aria-label="Project Description" title="Required. Max 150 words"><?php echo htmlspecialchars($project['description_long'] ?? ''); ?></textarea>
                <p class="form-caption" data-lang-id="005-long-project-desc-caption">Optional. Take as much space as you need as share the full details of your project. Max 1000 words.</p>

                  <!--ERRORS-->

                <div id="description2-error-long" class="form-field-error" data-lang-id="000-long-field-too-long-error">Your long project description is too long.  Maximum 2000 characters.</div>

            </div>

            <div class="form-item">
                <label for="start_dt" data-lang-id="007-start-date">Edit project start date:</label><br>
                <input type="date" id="start_dt" name="start_dt" value="<?php echo htmlspecialchars($project['start_dt'] ?? ''); ?>" aria-label="Start Date" required>
                <p class="form-caption" data-lang-id="008-start-date-caption">When did this project begin?</p>

                 <!--ERRORS-->
                <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                <div id="start-error-reasonable" class="form-field-error" data-lang-id="000-field-reasonable-date">A reasonable date is required.  Must be after 2000 and before today.</div>

            </div>

            <div class="form-item">
                <label for="briks_used" data-lang-id="009-bricks-used">Edit how many ecobricks your project uses:</label><br>
                <input type="number" id="briks_used" name="briks_used" value="<?php echo htmlspecialchars($project['briks_used'] ?? 0); ?>" aria-label="Bricks Used" min="1" max="5000" required>
                <p class="form-caption" data-lang-id="009-bricks-used-caption">Please enter a number of ecobricks between 1-5000.</p>

                 <!--ERRORS-->
                <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                <div id="briks-error-range" class="form-field-error" data-lang-id="000-field-brik-number-error">Number must be between 1 and 5000.</div>
            </div>

            <div class="form-item">
                <label for="est_avg_brik_weight" data-lang-id="010-est-avg-weight">Edit your estimate on the average weight of the ecobricks used in your project (in grams):</label><br>
                <input type="number" id="est_avg_brik_weight" name="est_avg_brik_weight" value="<?php echo htmlspecialchars($project['est_avg_brik_weight'] ?? 0); ?>" aria-label="Estimate Brik Weight" min="100" max="2000" required>
                <p class="form-caption" data-lang-id="010-est-avg-weight-range">Must be a number between 100 and 2000.</p>

                <!--ERRORS-->
                <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                <div id="weight-error-range" class="form-field-error" data-lang-id="000-field-required-error">Your estimated ecobrick average weight (in grams) must a number between 100 and 2000.</div>
            </div>

            <div class="form-item">
    <label for="project_type" data-lang-id="011-project-type">What type of project is this?</label><br>
    <select id="project_type" name="project_type" aria-label="Project Type" required>
        <option value="" disabled="" selected="" data-lang-id="011-select">Select project type...</option>
        <option value="single module" data-lang-id="011-single-module">Single Module</option>
        <option value="furniture" data-lang-id="011-modular-furniture">Furniture</option>
        <option value="garden" data-lang-id="011-outdoor-garden">Outdoor Garden</option>
        <option value="structure" data-lang-id="011-structure">Structure</option>
        <option value="art" data-lang-id="011-art">Art</option>
        <option value="other" data-lang-id="011-other">Other</option>
    </select>
    <br>
       <!--ERROR-->
       <div id="project-type-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
</div>

<div class="form-item">
    <label for="construction_type" data-lang-id="012-construction-type">What type of construction is this?</label><br>
    <select id="construction_type" name="construction_type" aria-label="Construction Type" required>
        <option value="" disabled="" selected="" data-lang-id="012-select">Select construction type...</option>
        <option value="silicone" data-lang-id="012-construction-silicone">Silicone</option>
        <option value="banding" data-lang-id="012-construction-tire-banding">Tire Banding</option>
        <option value="ecojoiner" data-lang-id="012-construction-ecojoiner">Ecojoiner</option>
        <option value="earth" data-lang-id="012-construction-earth">Earth/Cob</option>
        <option value="installation" data-lang-id="012-construction-installation">Installation</option>
        <option value="other" data-lang-id="012-other">Other</option>
    </select>
    <br>
           <!--ERROR-->
    <div id="construction-type-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
</div>


            <div class="form-item">
                <label for="community" data-lang-id="013-community">Edit project's community:</label><br>
                <input type="text" id="community" name="community" value="<?php echo htmlspecialchars($project['community'] ?? ''); ?>" aria-label="Community (optional)">
                <p class="form-caption" data-lang-id="013b-optional">Optional</p>

                  <!--ERRORS-->
        <div id="community-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>
            </div>

            <div class="form-item">
                <label for="project_admins" data-lang-id="014-project-admins">Edit project leader(s):</label><br>
                <input type="text" id="project_admins" name="project_admins" value="<?php echo htmlspecialchars($project['project_admins'] ?? ''); ?>" aria-label="Project Admins (optional)">
                <p class="form-caption" data-lang-id="014b-optional">Optional: Provide the name(s) of the project's principals. If you wish to link this to a GoBrik user account be sure to spell the name accordingly.</p>

                   <!--ERRORS-->
        <div id="admins-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>

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


        <!--ERRORS-->
    <div id="location-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
            </div>

            <input type="hidden" id="lat" name="latitude" value="<?php echo htmlspecialchars($project['location_lat'] ?? ''); ?>">
            <input type="hidden" id="lon" name="longitude" value="<?php echo htmlspecialchars($project['location_long'] ?? ''); ?>">

            <div data-lang-id="017-update-button">
                <input type="submit" value="☑️ Update Project" aria-label="Submit Form">
            </div>
            <div data-lang-id="018-cancel-button">
                <a class="confirm-button" style="background:grey" href="project.php?project_id=<?php echo $_GET['project_id']; ?>">↩️ Cancel</a>        
            </div>

            <!-- <div data-lang-id="019-delete-button">
                <a class="confirm-button" style="background:organge" id="deleteButton">❌ Delete This Project</a>              
            </div> -->
           

        </form>

        <form id="deleteForm" action="" method="POST">
            <input type="hidden" name="project_id" value="<?php echo htmlspecialchars($_GET['project_id']); ?>">
            <input type="hidden" name="action" value="delete_project">
            <a class="confirm-button" style="background:red; cursor:pointer;" id="deleteButton">❌ Delete Project</a>
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



///PROJECT FIELD VALIDATION (can be consolidated to one file for add-project too)


document.getElementById('submit-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting until validation is complete
    var isValid = true; // Flag to determine if the form should be submitted

    // Helper function to display error messages
    function displayError(elementId, showError) {
        var errorDiv = document.getElementById(elementId);
        if (showError) {
            errorDiv.style.display = 'block'; // Show the error message
            isValid = false; // Set form validity flag
        } else {
            errorDiv.style.display = 'none'; // Hide the error message
        }
    }

    // Helper function to check for invalid characters
    function hasInvalidChars(value) {
        const invalidChars = /[\'\"><]/; // Regex for invalid characters
        return invalidChars.test(value);
    }

    // 1. Project Name Validation
    var projectName = document.getElementById('project_name').value.trim();
    displayError('name-error-required', projectName === '');
    displayError('name-error-long', projectName.length > 50);
    displayError('name-error-invalid', hasInvalidChars(projectName));

    // 2. Project Short Description Validation
    var descriptionShort = document.getElementById('description_short').value.trim();
    displayError('description-error-required', descriptionShort === '');
    displayError('description-error-long', descriptionShort.length > 255);
    displayError('description-error-invalid', hasInvalidChars(descriptionShort));

    // 3. Project Long Description Validation
    var descriptionLong = document.getElementById('description_long').value.trim();
    displayError('description2-error-long', descriptionLong.length > 2000);

    // 4. Project Start Date Validation
    var startDate = new Date(document.getElementById('start_dt').value);
    var now = new Date();
    var earlyDate = new Date('2000-01-01');
    displayError('start-error-reasonable', startDate > now || startDate < earlyDate);

    // 5. Ecobricks Used Validation
    var briksUsed = parseInt(document.getElementById('briks_used').value, 10);
    displayError('briks-error-range', isNaN(briksUsed) || briksUsed < 1 || briksUsed > 2000);

    // 6. Estimated Weight Validation
    var estimatedWeight = parseInt(document.getElementById('est_avg_brik_weight').value, 10);
    displayError('weight-error-range', isNaN(estimatedWeight) || estimatedWeight < 100 || estimatedWeight > 2000);

   // 7. Project Type Validation
    var projectType = document.getElementById('project_type').value;
    displayError('project-type-error-required', projectType === '');

    // 8. Construction Type Validation
    var constructionType = document.getElementById('construction_type').value;
    displayError('construction-type-error-required', constructionType === '');

    // 9. Community Project (just check length)
    var community = document.getElementById('community').value.trim();
    displayError('community-error-long', community.length > 255);

    // 10. Project Admins (just check length)
    var admins = document.getElementById('project_admins').value.trim();
    displayError('admins-error-long', admins.length > 255);

    // 11. Location Validation
    var location = document.getElementById('location_address').value.trim();
    displayError('location-error-required', location === '');

    // If all validations pass, submit the form
    if (isValid) {
        this.submit();
    } else {
        // Scroll to the first error message and center it in the viewport
        var firstError = document.querySelector('.form-field-error[style="display: block;"]');
        if (firstError) {
            firstError.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
            // Optionally, find the related input and focus it
            var relatedInput = firstError.closest('.form-item').querySelector('input, select, textarea');
            if (relatedInput) {
                relatedInput.focus();
            }
        }
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