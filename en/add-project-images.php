
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include '../ecobricks_env.php';

$error_message = '';
$full_urls = []; // Initialize array to store main image URLs
$thumbnail_paths = []; // Initialize array to store thumbnail URLs
$main_file_sizes = []; // Initialize array to store file sizes of main images in KB
$thumbnail_file_sizes = []; // Initialize array to store file sizes of thumbnails in KB

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['project_id'])) {
        $project_id = $_POST['project_id'];
        $upload_dir = '../projects/photos/';
        $thumbnail_dir = '../projects/tmbs/';

        $db_fields = [];
        $db_values = [];
        $db_types = "";

        for ($i = 1; $i <= 5; $i++) {
            $file_input_name = "photo{$i}_main";
            if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] === UPLOAD_ERR_OK) {
                $file_extension = strtolower(pathinfo($_FILES[$file_input_name]['name'], PATHINFO_EXTENSION));
                $new_file_name_webp = 'project-' . $project_id . '-' . $i . '.webp';
                $targetPath = $upload_dir . $new_file_name_webp;

                if (resizeAndConvertToWebP($_FILES[$file_input_name]['tmp_name'], $targetPath, 1000, 88)) {
                    createThumbnail($targetPath, $thumbnail_dir . $new_file_name_webp, 160, 160, 77);
                    $full_urls[] = $targetPath;
                    $thumbnail_paths[] = $thumbnail_dir . $new_file_name_webp;

                    // Capture file sizes in KB and add them to the arrays
                    $main_file_sizes[] = filesize($targetPath) / 1024; // Convert bytes to KB
                    $thumbnail_file_sizes[] = filesize($thumbnail_dir . $new_file_name_webp) / 1024; // Convert bytes to KB

                    array_push($db_fields, "photo{$i}_main", "photo{$i}_tmb");
                    array_push($db_values, $targetPath, $thumbnail_dir . $new_file_name_webp);
                    $db_types .= "ss";
                } else {
                    $error_message .= "Error processing image {$i}.<br>";
                }
            }
        }

        if (!empty($db_fields)) {
            $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
            $update_sql = "UPDATE tb_projects SET {$fields_for_update} WHERE project_id = ?";
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
            exit;
        } else {
            // Prepare the response array with image URLs and sizes in KB
            $response = array(
                'project_id' => $project_id,
                'full_urls' => $full_urls,
                'thumbnail_paths' => $thumbnail_paths,
                'main_file_sizes' => $main_file_sizes, // Array of file sizes for main images in KB
                'thumbnail_file_sizes' => $thumbnail_file_sizes // Array of file sizes for thumbnails in KB
            );
            header('Content-Type: application/json');
            echo json_encode($response);
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

<!DOCTYPE html>
<HTML lang="id"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='id';?>
<?php $version='2.25';?>
<?php $page='add-project-images';?>


<?php require_once ("../includes/add-project-inc.php");?>

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
        
                <div class="splash-heading" data-lang-id="001-form-title">Now Upload Your Images</div>
            </div>
            <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/square-photo.svg?v=2" style="width:65%" alt="Please take a square photo">
            </div>
        </div>


        <p data-lang-id="002-form-description2">Show the world your project!  Upload one to five images showing your construction from different angles or times. <span style="color:red">Please upload only square photos.  Be sure photos are under 8MB.</span></p>

        
        <br>
        
        <form id="photoform" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="<?php echo $_GET['project_id']; ?>">
      <!-- Photo 1 Main & Thumbnail -->
<div class="form-item">
    <div>
        <label for="photo1_main" data-lang-id="003-feature-photo">Feature image:</label><br>
        <input type="file" id="photo1_main" name="photo1_main" required>
        <p class="form-caption" data-lang-id="004-feature-desc">Please choose a featured photo for this project. Required.</p>
    </div>
</div>

<!-- Photo 2 Main & Thumbnail -->
<div class="form-item">
    <label for="photo2_main" data-lang-id="005-another-photo">Choose another photo:</label><br>
    <input type="file" id="photo2_main" name="photo2_main">
    <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
</div>

<!-- Photo 3 Main & Thumbnail -->
<div class="form-item">
    <label for="photo3_main" data-lang-id="007-another-photo">Choose another photo:</label><br>
    <input type="file" id="photo3_main" name="photo3_main">
    <p class="form-caption" data-lang-id="008-another-photo-optional">Optional</p>
</div>

<!-- Photo 4 Main & Thumbnail -->
<div class="form-item">
    <label for="photo4_main" data-lang-id="009-another-photo">Choose another photo:</label><br>
    <input type="file" id="photo4_main" name="photo4_main">
    <p class="form-caption" data-lang-id="010-another-photo-optional">Optional</p>
</div>

<!-- Photo 5 Main & Thumbnail -->
<div class="form-item">
    <label for="photo5_main" data-lang-id="011-another-photo">Choose another photo:</label><br>
    <input type="file" id="photo5_main" name="photo5_main">
    <p class="form-caption" data-lang-id="012-another-photo-optional">Optional</p>
</div>



            <div data-lang-id="013-submit-upload-button">
                <input type="submit" value="⬆️ Upload Images " id="upload-progress-button" aria-lable="Submit photos for upload">
            </div>
        </form>
    </div>



    <div id="upload-success" class="form-container" style="display:none;">
    <div class="step-graphic" style="width:fit-content;margin:auto;">
            <img src="../svgs/step3-log-project.svg" style="height:30px;margin-bottom:40px;" alt="Step 3: Upload Success">
        </div>
        <div id="upload-success-message"></div>
        <a class="confirm-button" href="project.php?project_id=<?php echo $_GET['project_id']; ?>">🎉 View Project Post</a>
    </div>

</div>

  
<p style="width:100%; text-align: center;" data-lang-id="014-go-back-link"><a href="#" onclick="goBack()" class="browser-back-text-button" aria-label="Go back to re-enter data" >↩ Back to Step 1</a></p>
<br><br>


       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


<script>
    


    document.querySelector('#photoform').addEventListener('submit', function(event) {
    // Prevent default form submission
    event.preventDefault();

    // Define messages for different languages
    var messages = {
        en: "Please choose a file.",
        es: "Por favor, elige un archivo.",
        fr: "Veuillez choisir un fichier.",
        id: "Silakan pilih sebuah berkas."
    };

    // Check the current language and select the appropriate message; default to English
    var currentLang = window.currentLanguage || 'en';
    var chooseFileMessage = messages[currentLang] || messages.en;

    // Check if file input is empty
    var fileInput = document.getElementById('photo1_main');
    if (fileInput.files.length === 0) {
        // If file input is empty, display modal message
        showFormModal(chooseFileMessage);
        return; // Stop form submission
    }

    // Proceed with form submission and upload progress tracking
    var form = event.target;
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();

    // Track upload progress
    xhr.upload.onprogress = function(event) {
        if (event.lengthComputable) {
            // Calculate and update the background size of the input button based on upload progress
            var progress = (event.loaded / event.total) * 100;
            document.getElementById('upload-progress-button').style.backgroundSize = progress + '%';

            // Add progress-bar class to change background color to green
            document.getElementById('upload-progress-button').classList.add('progress-bar');
        }
    };

    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                handleFormResponse(xhr.responseText);
            } else {
                handleFormResponse(xhr.responseText);
            }
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
            description: "Nice. Your project has now been added to the database.",
            button: "➕ Add Next Project"
        },
        es: {
            heading: "Carga Exitosa!",
            description: "Genial. Tu proyecto ha sido agregado a la base de datos.",
            button: "➕ Agregar Siguiente Proyecto"
        },
        fr: {
            heading: "Téléchargement Réussi!",
            description: "Super. Votre projet a été ajouté à la base de données.",
            button: "➕ Ajouter le Projet Suivant"
        },
        id: {
            heading: "Berhasil Diunggah!",
            description: "Bagus. Proyek Anda telah ditambahkan ke dalam basis data.",
            button: "➕ Tambah Proyek Berikutnya"
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
        var fullUrlText = data.full_urls[i] + ' | ' + data.main_file_sizes[i].toFixed(1) + ' KB';

        galleryHTML += '<div class="gal-photo" onclick="viewGalleryImage(\'' + fullUrlText + '\',  \'' + directoryPathText + '\')">';
        galleryHTML += '<img src="' + data.thumbnail_paths[i] + '"';
        galleryHTML += '<p style="font-size:small;">' + captionText + '</p>';
        galleryHTML += '</div>';
    }

    galleryHTML += '</div>';
    successMessage += galleryHTML;

    successMessage += '<a class="confirm-button" href="add-project.php">' + selectedMessage.button + '</a>';

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
