<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '256M'); // Increase memory limit

include '../ecobricks_env.php';

$error_message = '';
$full_urls = [];
$thumbnail_paths = [];
$main_file_sizes = [];
$thumbnail_file_sizes = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['training_id'])) {
    $training_id = $_POST['training_id'];
    include '../project-photo-functions.php';

    // Handle training deletion
    if (isset($_POST['action']) && $_POST['action'] == 'delete_training') {
        $deleteResult = deleteTraining($training_id, $conn);
        if ($deleteResult === true) {
            echo "<script>alert('Training has been successfully deleted.'); window.location.href='add-training.php';</script>";
            exit;
        } else {
            echo "<script>alert('" . $deleteResult . "');</script>";
            exit;
        }
    }

    $upload_dir = '../trainings/photos/';
    $thumbnail_dir = '../trainings/tmbs/';

    $db_fields = [];
    $db_values = [];
    $db_types = "";

    // Upload photos from training_photo0_main to training_photo6_main
    for ($i = 0; $i <= 6; $i++) {
        $file_input_name = "training_photo{$i}_main";
        if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] == UPLOAD_ERR_OK) {
            $file_extension = strtolower(pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));
            $new_file_name_webp = 'training-' . $training_id . '-' . $i . '.webp';
            $targetPath = $upload_dir . $new_file_name_webp;

            if (resizeAndConvertToWebP($_FILES[$file_input_name]['tmp_name'], $targetPath, 1000, 88)) {
                createTrainingThumbnail($targetPath, $thumbnail_dir . $new_file_name_webp, 250, 250, 77);
                $full_urls[] = $targetPath;
                $thumbnail_paths[] = $thumbnail_dir . $new_file_name_webp;
                $main_file_sizes[] = filesize($targetPath) / 1024;
                $thumbnail_file_sizes[] = filesize($thumbnail_dir . $new_file_name_webp) / 1024;

                array_push($db_fields, "training_photo{$i}_main", "training_photo{$i}_tmb");
                array_push($db_values, $targetPath, $thumbnail_dir . $new_file_name_webp);
                $db_types .= "ss";
            } else {
                $error_message .= "Error processing image {$i}. Please try again.<br>";
            }
        }
    }

    if (!empty($db_fields) && empty($error_message)) {
        // Fetch the briks_made and avg_brik_weight for the current training
        $fetch_sql = "SELECT briks_made, avg_brik_weight FROM tb_trainings WHERE training_id = ?";
        $fetch_stmt = $conn->prepare($fetch_sql);
        $fetch_stmt->bind_param("i", $training_id);
        $fetch_stmt->execute();
        $fetch_stmt->bind_result($briks_made, $avg_brik_weight);
        $fetch_stmt->fetch();
        $fetch_stmt->close();

        // Calculate est_plastic_packed in kg
        $est_plastic_packed = round(($briks_made * $avg_brik_weight) / 1000, 1);

        array_push($db_fields, "training_logged", "ready_to_show", "est_plastic_packed");
        array_push($db_values, date("Y-m-d H:i:s"), 1, $est_plastic_packed);
        $db_types .= "sis";

        $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
        $update_sql = "UPDATE tb_trainings SET {$fields_for_update} WHERE training_id = ?";
        $db_values[] = $training_id;
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
        exit;
    } else {
        $response = array(
            'training_id' => $training_id,
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
