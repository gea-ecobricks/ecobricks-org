<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../project-photo-functions.php'; // Ensure this path is correct

    $location_full = trim($_POST['location_address'] ?? 'Default Location');
    $training_title = trim($_POST['training_title']);
    $lead_trainer = trim($_POST['lead_trainer']);
    $training_country = trim($_POST['training_country']);
    $training_date = trim($_POST['training_date']);
    $no_participants = trim($_POST['no_participants']);
    $trained_community = trim($_POST['trained_community'] ?? '');
    $training_type = trim($_POST['training_type']);
    $briks_made = trim($_POST['briks_made']);
    $avg_brik_weight = trim($_POST['avg_brik_weight'] ?? NULL);
    $latitude = (double)$_POST['latitude'];
    $longitude = (double)$_POST['longitude'];
    // $connected_ecobricks = $_POST['connected_ecobricks'] ?? ''; // Commented out
    // $training_location = $_POST['training_location']; // Removed
    $training_summary = trim($_POST['training_summary']);
    $training_agenda = trim($_POST['training_agenda']);
    $training_success = trim($_POST['training_success']);
    $training_challenges = trim($_POST['training_challenges']);
    $training_lessons_learned = trim($_POST['training_lessons_learned']);

    // Debugging: Print out variables
    error_log("Training Title: $training_title");
    error_log("Lead Trainer: $lead_trainer");
    error_log("Training Country: $training_country");
    error_log("Training Date: $training_date");

    $sql = "INSERT INTO tb_trainings (training_title, lead_trainer, training_country, training_date, no_participants, trained_community, training_type, briks_made, avg_brik_weight, location_lat, location_long, location_full, training_summary, training_agenda, training_success, training_challenges, training_lessons_learned) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssisssiiddssss", $training_title, $lead_trainer, $training_country, $training_date, $no_participants, $trained_community, $training_type, $briks_made, $avg_brik_weight, $latitude, $longitude, $location_full, $training_summary, $training_agenda, $training_success, $training_challenges, $training_lessons_learned);
        if ($stmt->execute()) {
            $training_id = $conn->insert_id;

            // Update `training_url`
            $training_url = "https://ecobricks.org/en/training.php?id=" . $training_id;
            $update_url_sql = "UPDATE tb_trainings SET training_url = ? WHERE training_id = ?";
            if ($update_url_stmt = $conn->prepare($update_url_sql)) {
                $update_url_stmt->bind_param("si", $training_url, $training_id);
                if (!$update_url_stmt->execute()) {
                    error_log("Error updating training_url: " . $update_url_stmt->error);
                }
                $update_url_stmt->close();
            } else {
                error_log("Error preparing update_url_stmt: " . $conn->error);
            }

            $stmt->close();
            $conn->close();
            echo "<script>window.location.href = 'add-training-images.php?training_id=" . $training_id . "';</script>";
        } else {
            error_log("Error executing stmt: " . $stmt->error);
            echo "Error: " . $stmt->error . "<br>";
        }
        if ($stmt) $stmt->close();
    } else {
        error_log("Prepare failed: " . $conn->error);
        echo "Prepare failed: " . $conn->error;
    }
    if ($conn) $conn->close();
}
?>



<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <META charset="UTF-8">
    <?php $lang='en';?>
    <?php $version='2.4';?>
    <?php $page='add-training-images';?>

    <?php require_once ("../includes/add-training-inc.php");?>

    <div class="splash-content-block"></div>
    <div id="splash-bar"></div>

    <!-- PAGE CONTENT-->

    <div id="photos-submission-box" style="display:flex;flex-flow:column;">

        <div class="form-container" id="upload-photo-form">

            <div class="step-graphic" style="width:fit-content;margin:auto;">
                <img src="../svgs/step2-log-project.svg" style="height:30px;margin-bottom:40px;" alt="Step 2: Upload images">
            </div>

            <div class="splash-form-content-block">
                <div class="splash-box">

                    <div class="splash-heading" data-lang-id="001-form-title">Upload Training Photos</div>
                </div>
                <div class="splash-image" data-lang-id="003-splash-image-alt">
                    <img src="../svgs/square-training-photo.svg" style="width:65%" alt="Please take a square photo">
                </div>
            </div>

            <p data-lang-id="002-form-description2">Show the world your training! Upload up to six images showing your training session and what you accomplished. <span style="color:red">Square photos are best. Be sure photos are under 8MB.</span></p>

            <br>

            <form id="photoform" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="training_id" value="<?php echo $_GET['training_id']; ?>">


                <!-- Photo 0 - the MAIN PHOTO Main & Thumbnail -->
                <div class="form-item">
                    <div>
                        <label for="training_photo0_main" data-lang-id="003-feature-photo">Feature image:</label><br>
                        <input type="file" id="training_photo0_main" name="training_photo0_main" required>
                        <p class="form-caption" data-lang-id="004-feature-desc">Please choose a featured photo for this training. Required.</p>
                    </div>
                </div>

                <!-- Photo 1 Main & Thumbnail -->
                <div class="form-item">
                    <div>
                        <label for="training_photo1_main" data-lang-id="003-feature-photo">Feature image:</label><br>
                        <input type="file" id="training_photo1_main" name="training_photo1_main">
                        <p class="form-caption" data-lang-id="004-feature-desc">Please choose a featured photo for this training.</p>
                    </div>
                </div>

                <!-- Photo 2 Main & Thumbnail -->
                <div class="form-item">
                    <label for="training_photo2_main" data-lang-id="005-another-photo">Choose another photo:</label><br>
                    <input type="file" id="training_photo2_main" name="training_photo2_main">
                    <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
                </div>

                <!-- Photo 3 Main & Thumbnail -->
                <div class="form-item">
                    <label for="training_photo3_main" data-lang-id="007-another-photo">Choose another photo:</label><br>
                    <input type="file" id="training_photo3_main" name="training_photo3_main">
                    <p class="form-caption" data-lang-id="008-another-photo-optional">Optional</p>
                </div>

                <!-- Photo 4 Main & Thumbnail -->
                <div class="form-item">
                    <label for="training_photo4_main" data-lang-id="009-another-photo">Choose another photo:</label><br>
                    <input type="file" id="training_photo4_main" name="training_photo4_main">
                    <p class="form-caption" data-lang-id="010-another-photo-optional">Optional</p>
                </div>

                <!-- Photo 5 Main & Thumbnail -->
                <div class="form-item">
                    <label for="training_photo5_main" data-lang-id="011-another-photo">Choose another photo:</label><br>
                    <input type="file" id="training_photo5_main" name="training_photo5_main">
                    <p class="form-caption" data-lang-id="012-another-photo-optional">Optional</p>
                </div>

                <!-- Photo 6 Main & Thumbnail -->
                <div class="form-item">
                    <label for="training_photo6_main" data-lang-id="011-another-photo">Choose another photo:</label><br>
                    <input type="file" id="training_photo6_main" name="training_photo6_main">
                    <p class="form-caption" data-lang-id="012-another-photo-optional">Optional</p>
                </div>

                <div data-lang-id="013-submit-upload-button">
                    <input type="submit" value="⬆️ Upload Photos" id="upload-progress-button" aria-label="Submit photos for upload">
                </div>
            </form>
        </div>

        <div id="upload-success" class="form-container" style="display:none;">
            <div class="step-graphic" style="width:fit-content;margin:auto;">
                <img src="../svgs/step3-log-project.svg" style="height:30px;margin-bottom:40px;" alt="Step 3: Upload Success">
            </div>
            <div id="upload-success-message"></div>
            <a class="confirm-button" href="training.php?training_id=<?php echo $_GET['training_id']; ?>" data-lang-id="013-view-training-post">🎉 View Training Post</a>
            <a class="confirm-button" data-lang-id="014-edit-training" href="edit-training.php?training_id=<?php echo $_GET['training_id']; ?>">Edit Training Post</a>

            <form id="deleteForm" action="" method="POST">
                <input type="hidden" name="training_id" value="<?php echo htmlspecialchars($_GET['training_id']); ?>">
                <input type="hidden" name="action" value="delete_training">
                <a class="confirm-button" style="background:red; cursor:pointer;" id="deleteButton" data-lang-id="014-delete-training">❌ Delete Training</a>
            </form>
        </div>

        <a href="#" onclick="goBack()"  aria-label="Go back to re-enter data" class="back-link" data-lang-id="015-go-back-link">↩ Back to Step 1</a>

    </div>



    <br><br>

    </div>

    <!--FOOTER STARTS HERE-->
    <?php require_once ("../footer-2024.php");?>
    </div>

    <script>
        // DELETE BUTTON

        // Define messages for different languages
        var messages = {
            en: 'Are you sure you want to delete this training? This action cannot be undone.',
            id: 'Apakah Anda yakin ingin menghapus pelatihan ini? Tindakan ini tidak dapat dibatalkan.',
            es: '¿Estás seguro de que deseas eliminar esta capacitación? Esta acción no se puede deshacer.',
            fr: 'Êtes-vous sûr de vouloir supprimer cette formation ? Cette action est irréversible.'
        };

        // Detect the current language, defaulting to English if not set or unsupported
        var currentLang = window.currentLanguage || 'en';
        var confirmationMessage = messages[currentLang] || messages.en;

        // Set up the event listener
        document.getElementById('deleteButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent navigation
            if (confirm(confirmationMessage)) {
                document.getElementById('deleteForm').submit();
            }
        });

        // UPLOAD SUBMIT ACTION AND BUTTON

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

            var fileInput = document.getElementById('training_photo0_main');
            if (fileInput.files.length === 0) {
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
                    handleFormResponse(xhr.responseText);
                }
            };

            xhr.open(form.method, form.action, true);
            xhr.send(formData);
        });

        // Function to handle form submission response
        function handleFormResponse(response) {
            try {
                var responseData = JSON.parse(response);
                if (responseData.error) {
                    showFormModal(responseData.error);
                    console.log(responseData.error);
                } else {
                    // Call the uploadSuccess function with the new structure
                    uploadSuccess(responseData);
                }
            } catch (error) {
                showFormModal("Error parsing server response: " + response);
                console.error(error);
            }
        }

        // Updated function to handle upload success with multiple images
        function uploadSuccess(data) {
            // Define messages for different languages
            var messages = {
                en: {
                    heading: "Upload Successful!",
                    description: "Nice. Your training has now been added to the database.",
                    button: "➕ Add Next Training"
                },
                es: {
                    heading: "Carga Exitosa!",
                    description: "Genial. Tu capacitación ha sido agregada a la base de datos.",
                    button: "➕ Agregar Siguiente Capacitación"
                },
                fr: {
                    heading: "Téléchargement Réussi!",
                    description: "Super. Votre formation a été ajoutée à la base de données.",
                    button: "➕ Ajouter la Formation Suivante"
                },
                id: {
                    heading: "Berhasil Diunggah!",
                    description: "Bagus. Pelatihan Anda telah ditambahkan ke dalam basis data.",
                    button: "➕ Tambah Pelatihan Berikutnya"
                }
            };

            var currentLang = window.currentLanguage || 'en';
            var selectedMessage = messages[currentLang] || messages.en;

            var successMessage = '<h1>' + selectedMessage.heading + '</h1>';
            successMessage += '<p>' + selectedMessage.description + '</p><br>';

            var galleryHTML = '<div id="three-column-gal" class="three-column-gal">';

            // Iterate over the thumbnail_paths and full_urls to build the gallery items with added file size details
            for (var i = 0; i < data.thumbnail_paths.length; i++) {
                var directoryPathText = data.thumbnail_paths[i].substring(data.thumbnail_paths[i].lastIndexOf('/') + 1);
                var captionText = directoryPathText + ' | ' + data.thumbnail_file_sizes[i].toFixed(1) + ' KB | ' + data.main_file_sizes[i].toFixed(1) + ' KB';
                var fullUrlText = data.full_urls[i];
                var modalCaption = directoryPathText + ' | ' + data.main_file_sizes[i].toFixed(1) + ' Kb | ' + data.thumbnail_file_sizes[i].toFixed(1) + ' Kb';

                galleryHTML += '<div class="gal-photo" onclick="viewGalleryImage(\'' + fullUrlText + '\', \'' + modalCaption + '\')">';
                galleryHTML += '<img src="' + data.thumbnail_paths[i] + '" alt="' + directoryPathText + '">';
                galleryHTML += '<p style="font-size:small;">' + captionText + '</p>';
                galleryHTML += '</div>';
            }

            galleryHTML += '</div>';
            successMessage += galleryHTML;

            successMessage += '<a class="confirm-button" href="add-training.php">' + selectedMessage.button + '</a>';

            var uploadSuccessDiv = document.getElementById('upload-success');
            var uploadSuccessMessageDiv = document.getElementById('upload-success-message');
            uploadSuccessMessageDiv.innerHTML = successMessage;
            uploadSuccessDiv.style.display = 'block';

            document.getElementById('upload-photo-form').style.display = 'none';
            window.scrollTo(0, 0);
        }

        // Function to show form modal
        function showFormModal(message) {
            var modal = document.getElementById('form-modal-message');
            var modalMessage = modal.querySelector('.modal-message');
            var modalPhoto = modal.querySelector('.modal-photo-box');
            modalMessage.innerHTML = message;
            modal.style.display = 'flex';
            modalPhoto.style.display = 'none';

            // Add blur effect and hide overflow on page-content and footer-full
            document.getElementById('page-content').classList.add('blurred');
            document.getElementById('footer-full').classList.add('blurred');
            document.body.classList.add('modal-open');

            // Close modal when clicking outside
            window.onclick = function(event) {
                if (event.target == modal) {
                    closeInfoModal();
                }
            }
        }

        // Function to close the modal
        function closeInfoModal() {
            var modal = document.getElementById('form-modal-message');
            modal.style.display = 'none';

            // Remove blur effect and show overflow on page-content and footer-full
            document.getElementById('page-content').classList.remove('blurred');
            document.getElementById('footer-full').classList.remove('blurred');
            document.body.classList.remove('modal-open');
        }

    </script>

    </body>
</html>
