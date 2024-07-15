<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '256M'); // Increase memory limit
ob_start(); // Start output buffering

include '../ecobricks_env.php';

$error_message = '';
$full_urls = [];
$thumbnail_paths = [];
$main_file_sizes = [];
$thumbnail_file_sizes = [];

if (isset($_GET['id'])) {
    $ecobrick_unique_id = (int)$_GET['id'];

    // Fetch the ecobrick details from the database
    $sql = "SELECT universal_volume_ml, serial_no, density, weight_g FROM tb_ecobricks WHERE ecobrick_unique_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ecobrick_unique_id);
    $stmt->execute();
    $stmt->bind_result($universal_volume_ml, $serial_no, $density, $weight_g);
    $stmt->fetch();
    $stmt->close();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ecobrick_unique_id'])) {
    $ecobrick_unique_id = (int)$_POST['ecobrick_unique_id'];
    $serial_no = $_POST['serial_no']; // Ensure serial_no is passed from the previous step
    include '../project-photo-functions.php';

    $upload_dirs = [
        "basic" => '../briks/2024/basic/',
        "basic-thumb" => '../briks/2024/basic-thumb/',
        "selfie" => '../briks/2024/selfie/',
        "selfie-thumb" => '../briks/2024/selfie-thumb/'
    ];

    $db_fields = [];
    $db_values = [];
    $db_types = "";

    $photo_fields = [
        ["input" => "ecobrick_photo_main", "full" => "ecobrick_full_photo_url", "thumb" => "ecobrick_thumb_photo_url", "dir" => "basic", "thumb_dir" => "basic-thumb"],
        ["input" => "selfie_photo_main", "full" => "selfie_photo_url", "thumb" => "selfie_thumb_url", "dir" => "selfie", "thumb_dir" => "selfie-thumb"]
    ];

    foreach ($photo_fields as $index => $fields) {
        $file_input_name = $fields["input"];
        if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] == UPLOAD_ERR_OK) {
            $file_extension = strtolower(pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));
            $new_file_name_webp = "ecobrick-{$serial_no}.webp";
            $thumbnail_file_name_webp = "ecobrick-{$serial_no}.webp";
            $targetPath = $upload_dirs[$fields["dir"]] . $new_file_name_webp;
            $thumbnailPath = $upload_dirs[$fields["thumb_dir"]] . $thumbnail_file_name_webp;

            if (resizeAndConvertToWebP($_FILES[$file_input_name]['tmp_name'], $targetPath, 1000, 88)) {
                createTrainingThumbnail($targetPath, $thumbnailPath, 250, 250, 77);
                $full_urls[] = $targetPath;
                $thumbnail_paths[] = $thumbnailPath;
                $main_file_sizes[] = filesize($targetPath) / 1024;
                $thumbnail_file_sizes[] = filesize($thumbnailPath) / 1024;

                array_push($db_fields, $fields["full"], $fields["thumb"]);
                array_push($db_values, $targetPath, $thumbnailPath);
                $db_types .= "ss";
            } else {
                $error_message .= "Error processing image {$index}. Please try again.<br>";
            }
        }
    }

    if (!empty($db_fields) && empty($error_message)) {
        $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
        $update_sql = "UPDATE tb_ecobricks SET {$fields_for_update} WHERE ecobrick_unique_id = ?";
        $db_values[] = $ecobrick_unique_id;
        $db_types .= "i";

        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param($db_types, ...$db_values);
        if (!$update_stmt->execute()) {
            $error_message .= "Database update failed: " . $update_stmt->error;
        }
        $update_stmt->close();
    }

    if (!empty($error_message)) {
        ob_end_clean(); // Clean the output buffer before sending headers
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
        exit;
    } else {
        ob_end_clean(); // Clean the output buffer before sending headers
        $response = array(
            'ecobrick_unique_id' => $ecobrick_unique_id,
            'full_urls' => $full_urls,
            'thumbnail_paths' => $thumbnail_paths,
            'main_file_sizes' => $main_file_sizes,
            'thumbnail_file_sizes' => $thumbnail_file_sizes
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

echo "<script>var density = $density, volume = '$universal_volume_ml', weight = '$weight_g';</script>";


function deleteEcobrick($ecobrick_unique_id, $conn) {
    // Dummy function to handle ecobrick deletion, replace with actual implementation
    return true;
}

?>



<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <META charset="UTF-8">
    <?php $lang='en';?>
    <?php $version='2.44';?>
    <?php $page='log';?>

    <?php require_once ("../includes/log-inc.php");?>

    <script>

        function showDensityConfirmation(density, volume, weight) {
            const modal = document.getElementById('form-modal-message');
            const messageContainer = modal.querySelector('.modal-message');
            let content = '';

            // Hide all buttons with class "x-button"
            const xButtons = document.querySelectorAll('.x-button');
            xButtons.forEach(button => button.style.display = 'none');

            if (density < 0.33) {
                content = `
            <h1>⛔</h1>
            <h4>Under Density</h4>
            <div class="preview-text">Your ecobrick's density of ${density} is under the GEA standard of 0.33g/ml. Please check that you have entered the weight and volume correctly. If so, then please repack your ecobrick with more plastic to achieve minimum density. GEA guidelines are developed to ensure the building integrity, fire safety and reusability of an ecobrick.</p>
            <a class="preview-btn" href="/what">GEA Standards</a>
        `;
            } else if (density >= 0.33 && density < 0.36) {
                content = `
            <h1>⚠️</h1>
            <h4>Low Density</h4>
            <div class="preview-text">Careful, your ecobrick's density of ${density}ml is on the low side. It passes the minimum standard of 0.33g/ml however, its density makes it less solid, fire safe and reusable than it could be. Keep going and log this ecobrick, but see if you can pack more plastic next time.</p>
            <a class="module-btn" onclick="closeInfoModal()" aria-label="Click to close modal">Next: Register Serial</a>
        `;
            } else if (density >= 0.36 && density < 0.65) {
                content = `
            <h1>👍</h1>
            <h4>Great job!</h4>
            <div class="preview-text">Your ecobrick's density of ${density} is ideal. It passes the minimum standard of 0.33g/ml making it solid, fire safe and reusable.</p>
            <a class="preview-btn" onclick="closeInfoModal()" aria-label="Click to close modal">Next: Register Serial</a>
        `;
            } else if (density >= 0.65 && density < 0.73) {
                content = `
            <h1>⚠️</h1>
            <h4>High Density</h4>
            <div class="preview-text">Careful, your ecobrick's density of ${density} is very high. Your ${volume} bottle packed with ${weight} of plastic is under the maximum density of 0.73g/ml however, its high density makes it nearly too solid and too heavy for certain ecobrick applications.</p>
            <a class="preview-btn" onclick="closeInfoModal()" aria-label="Click to close modal">Next: Register Serial</a>
        `;
            } else if (density >= 0.73) {
                content = `
            <h1>⛔</h1>
            <h4>Over Max Density</h4>
            <div class="preview-text">Your ecobrick's density of ${density} is over the GEA standard of 0.73g/ml. Please check that you have entered the weight and volume correctly. If so, then please repack your ecobrick with less plastic. GEA guidelines are developed to ensure the safety and usability of ecobricks for all short and long term applications.</p>
            <a class="preview-btn" href="log.php">Go Back</a>
        `;
            }

            messageContainer.innerHTML = content;

            // Show the modal and update other page elements
            modal.style.display = 'flex';
            document.getElementById('page-content').classList.add('blurred');
            // document.getElementById('footer-full').classList.add('blurred');
            document.body.classList.add('modal-open');

            // Disable body scrolling
            // document.body.style.overflow = 'hidden';
            //
            // // Prevent page from scrolling to the top
            // const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            // modal.style.top = `${scrollTop}px`;
        }

        // function closeModal() {
        //     const modal = document.getElementById('form-modal-message');
        //     modal.style.display = 'none';
        //     document.getElementById('page-content').classList.remove('blurred');
        //     // document.getElementById('footer-full').classList.remove('blurred');
        //     document.body.classList.remove('modal-open');
        //     document.body.style.overflow = ''; // Re-enable body scrolling
        //
        //     // Show all buttons with class "x-button" again
        //     const xButtons = document.querySelectorAll('.x-button');
        //     xButtons.forEach(button => button.style.display = 'inline-block');
        // }

        // Assuming density, volume, and weight are set in your PHP and passed to JavaScript
        showDensityConfirmation(density, volume, weight);



    </script>

    <div class="splash-content-block"></div>
    <div id="splash-bar"></div>

    <!-- PAGE CONTENT-->

    <div id="photos-submission-box" style="display:flex;flex-flow:column;">

        <div class="form-container" id="upload-photo-form">

            <div class="step-graphic" style="width:fit-content;margin:auto;">
                <img src="../svgs/step2-log-project.svg" style="height:30px;margin-bottom:25px;" alt="Step 2: Upload images">
            </div>

            <div class="splash-form-content-block" style="text-align:center; display:flex;flex-flow:column;">

                <div class="splash-image-2" data-lang-id="003-weigh-plastic-image-alt">
                    <img src="../svgs/snapit.svg?v=3" style="width:55%; margin:auto" alt="Please take a square photo">
                </div>
                <div><h2 data-lang-id="001-form-title">Record Serial & Take Photo</h2></div>

            </div>

            <p data-lang-id="002-form-description2" style="text-align: center;">Your ecobrick has been logged with a weight of <?php echo $weight_g; ?>g, a volume of <?php echo $universal_volume_ml; ?>ml, and a density of <?php echo $density; ?>g/ml. Your ecobrick has been allocated the serial number:</p>
            <h1 style="text-align: center;"><?php echo $serial_no; ?></h1>

            <br>

            <form id="photoform" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="ecobrick_unique_id" value="<?php echo $ecobrick_unique_id; ?>">
                <input type="hidden" name="serial_no" value="<?php echo $serial_no; ?>">

                <!-- Eenscribe Field -->
                <div class="form-item">
                    <label for="enscribe" data-lang-id="enscribe-label">How would you like to inscribe the serial number on your ecobrick?</label><br>
                    <select id="enscribe" name="enscribe" required>
                        <option value="" disabled selected>Select one...</option>
                        <option value="Permanent marker">Permanent marker</option>
                        <option value="Impermanent marker">Impermanent marker</option>
                        <option value="Enamel paint">Enamel paint</option>
                        <option value="Nail polish">Nail polish</option>
                        <option value="Plastic insert">Plastic insert</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Photo Options Field -->
                <div class="form-item" id="photo-options-container" style="display: none;">
                    <label for="photo-options" data-lang-id="photo-options-label">What kind of photo would you like to log of your ecobrick?</label><br>
                    <select id="photo-options" name="photo-options" required>
                        <option value="" disabled selected>Select one...</option>
                        <option value="basic">A basic ecobrick photo</option>
                        <option value="selfie">A selfie photo</option>
                        <option value="both">A basic photo and a selfie photo (best option)</option>
                    </select>
                </div>

                <!-- Photo 1 Main & Thumbnail -->
                <div class="form-item" id="basic-photo" style="display: none;">
                    <div>
                        <img src="../svgs/basic.svg" style="width: 200px">
                        <br><br>
                        <label for="ecobrick_photo_main" data-lang-id="003-feature-photo">Upload a basic ecobrick photo:</label><br>
                        <ul>
                            <li>Take a vertical portrait photo</li>
                            <li>Be sure your photo shows the serial & weight clearly</li>
                            <li>Be sure your photo shows your ecobricks bottom color</li>
                            <li>Be sure your photo shows your ecobricks top</li>
                            <li>Be sure your data is permanently enscribed!</li>
                            <li>Do not use an external label to mark the ecobrick </li>
                        </ul>
                        <input type="file" id="ecobrick_photo_main" name="ecobrick_photo_main">
                        <p class="form-caption" data-lang-id="004-feature-desc">Please choose a photo of the ecobrick. Required.</p>
                    </div>
                </div>

                <!-- Selfie Photo Main & Thumbnail -->
                <div class="form-item" id="selfie-photo" style="display: none;">
                    <img src="../svgs/selfie.svg" style="height: 200px">
                    <br><br>
                    <label for="selfie_photo_main" data-lang-id="005-another-photo">Upload an ecobrick selfie:</label><br>
                    <ul>
                        <li>Be sure your photo is a horizontal landscape</li>
                        <li>Be sure your photo shows the serial & weight clearly</li>
                        <li>Be sure your photo shows your ecobricks bottom color</li>
                        <li>Be sure your photo shows your ecobricks top</li>
                        <li>Be sure your data is permanently enscribed!</li>
                        <li>Do not use an external label to mark the ecobrick</li>
                        <li>And smile!</li>

                    </ul>

                    <input type="file" id="selfie_photo_main" name="selfie_photo_main">
                    <p class="form-caption" data-lang-id="006-another-photo-optional">Your photo will be uploaded to on Ecobricks.org Brikchain.</p>
                </div>

                <div data-lang-id="013-submit-upload-button">
                    <input type="submit" value="⬆️ Upload Photos" id="upload-progress-button" aria-label="Submit photos for upload">
                </div>
            </form>

            <div style="margin-bottom:100px;">
                <a href="#" onclick="goBack()" aria-label="Go back to re-enter data" class="back-link" data-lang-id="015-go-back-link">↩ Back to Step 1</a>
            </div>

    </div>

    <br><br>

    </div>



       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


<script>

    document.addEventListener('DOMContentLoaded', function () {
        const enscribeField = document.getElementById('enscribe');
        const photoOptionsField = document.getElementById('photo-options');
        const photoOptionsContainer = document.getElementById('photo-options-container');
        const basicPhotoField = document.getElementById('basic-photo');
        const selfiePhotoField = document.getElementById('selfie-photo');
        const submitButton = document.getElementById('upload-progress-button');

        function showHidePhotoFields() {
            // Hide or show photo options based on enscribe field value
            if (enscribeField.value) {
                photoOptionsContainer.style.display = 'block';
            } else {
                photoOptionsContainer.style.display = 'none';
                basicPhotoField.style.display = 'none';
                selfiePhotoField.style.display = 'none';
                submitButton.style.display = 'none';
            }

            // Hide or show photo fields based on photo options field value
            if (photoOptionsField.value) {
                if (photoOptionsField.value === 'basic') {
                    basicPhotoField.style.display = 'block';
                    selfiePhotoField.style.display = 'none';
                } else if (photoOptionsField.value === 'selfie') {
                    basicPhotoField.style.display = 'none';
                    selfiePhotoField.style.display = 'block';
                } else if (photoOptionsField.value === 'both') {
                    basicPhotoField.style.display = 'block';
                    selfiePhotoField.style.display = 'block';
                }
                // Show the submit button once a photo option is selected
                submitButton.style.display = 'block';
            } else {
                basicPhotoField.style.display = 'none';
                selfiePhotoField.style.display = 'none';
                submitButton.style.display = 'none';
            }
        }

        // Add event listeners
        enscribeField.addEventListener('change', showHidePhotoFields);
        photoOptionsField.addEventListener('change', showHidePhotoFields);
        document.getElementById('ecobrick_photo_main').addEventListener('change', showHidePhotoFields);
        document.getElementById('selfie_photo_main').addEventListener('change', showHidePhotoFields);

        // Initial state
        submitButton.style.display = 'none';
    });




    //UPLOAD SUBMIT ACTION AND BUTTON
    document.querySelector('#photoform').addEventListener('submit', function(event) {
        event.preventDefault();

        var button = document.getElementById('upload-progress-button');
        var originalButtonText = button.value; // Save the original button text
        button.innerHTML = '<div class="spinner-photo-loading"></div>'; // Replace button text with spinner
        button.disabled = true; // Disable button to prevent multiple submissions

        var messages = {
            en: "Please choose a file.",
            es: "Por favor, elige un archivo.",
            fr: "Veuillez choisir un fichier.",
            id: "Silakan pilih sebuah berkas."
        };

        var currentLang = window.currentLanguage || 'en';
        var chooseFileMessage = messages[currentLang] || messages.en;

        var fileInput = document.getElementById('ecobrick_photo_main');
        var selfieInput = document.getElementById('selfie_photo_main');

        if ((fileInput.files.length === 0 && selfieInput.files.length === 0)) {
            showFormModal(chooseFileMessage);
            button.innerHTML = originalButtonText; // Restore button text if no file chosen
            button.disabled = false; // Enable button
            return;
        }

        var form = event.target;
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();

        xhr.upload.onprogress = function(event) {
            if (event.lengthComputable) {
                var progress = (event.loaded / event.total) * 100;
                document.getElementById('upload-progress-button').style.backgroundSize = progress + '%';
                document.getElementById('upload-progress-button').classList.add('progress-bar');
            }
        };

        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                button.innerHTML = originalButtonText; // Restore button text after upload
                button.disabled = false; // Enable button
                if (xhr.status === 200) {
                    try {
                        var response = JSON.parse(xhr.responseText);
                        var ecobrick_unique_id = response.ecobrick_unique_id;
                        window.location.href = 'upload-success.php?ecobrick_unique_id=' + ecobrick_unique_id; // Redirect to success page with ecobrick_unique_id
                    } catch (e) {
                        console.error('Error parsing server response:', e);
                        handleFormResponse(xhr.responseText); // Handle error response
                    }
                } else {
                    handleFormResponse(xhr.responseText); // Handle error response
                }
            }
        };

        xhr.open(form.method, form.action, true);
        xhr.send(formData);
    });

    function showFormModal(message) {
        const modal = document.getElementById('form-modal-message');
        const messageContainer = modal.querySelector('.modal-message');
        messageContainer.innerHTML = message;
        modal.style.display = 'flex';
    }









</script>


</body>
</html>
