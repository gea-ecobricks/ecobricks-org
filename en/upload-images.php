<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='2.05';?>
<?php $page='upload-images';?>


<?php require_once ("../includes/add-project-inc.php");?>


<div class="splash-content-block">
	<!-- <div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">Post a Project</div>
	    <div class="splash-sub" data-lang-id="002-splash-subtitle">Share your ecobrick project with the world.</div>
	</div>
	<div class="splash-image" data-lang-id="003-splash-image-alt"><img src="../svgs/building-methods.svg" style="width: 85%" alt="There are many ways to build with ecobricks">
    </div>	     -->
</div>
<div id="splash-bar"></div>

 <!-- PAGE CONTENT--> 


 <div id="form-submission-box" style="margin-top: 140px;display:flex;flex-flow:column;">
    
    <div class="form-container" id="upload-photo-form">
        <h2 data-lang-id="001-form-title">Now Upload Your Images</h2>
        <p data-lang-id="002-form-description">Show the world your project!  Upload one to five images showing your construction from different angles or times.</p>
        <br><br>

        <form id="photoform" action="upload_images.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="<?php echo $_GET['project_id']; ?>">
            
            <div class="form-item" style="border-radius:5px;padding-left:10px;padding-right:10px;padding-top:10px;background-color:#0003;">
                <div>
                    <label for="photo1_main" data-lang-id="003-feature-photo" style="padding:10px;margin-bottom:10px;">Feature image:</label><br>
                    <input type="file" id="photo1_main" name="photo1_main" style=" padding:10px;font-size:1.2em;color:var(--text-color);border-radius:5px;" required>
                    <p class="form-caption" data-lang-id="004-feature-desc" style="padding:10px">Please choose a featured photo for this project.  Required.</p>
                </div>

            </div>

        <!-- Photo 2 Main & Thumbnail -->
            <div class="form-item">
                <label for="photo2_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo2_main" name="photo2_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

        <!-- Photo 3 Main & Thumbnail -->
            <div class="form-item">
                <label for="photo3_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo3_main" name="photo3_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

        <!-- Photo 4 Main & Thumbnail -->
        <div class="form-item">
                <label for="photo4_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo4_main" name="photo4_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

        <!-- Photo 5 Main & Thumbnail -->
            <div class="form-item">
                <label for="photo5_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo5_main" name="photo5_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

            <input type="submit" value="⬆️ Upload Images " id="upload-progress-button">
        </form>
    </div>



           
    </div>

    <div id="upload-success" class="form-container" style="display:none;" id="upload-progress-button">


</div>


<script>

document.querySelector('#photoform').addEventListener('submit', function(event) {
    // Prevent default form submission
    event.preventDefault();

    // Check if file input is empty
    var fileInput = document.getElementById('photo1_main');
    if (fileInput.files.length === 0) {
        // If file input is empty, display modal message
        showFormModal('Please choose a file.');
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
    // Start by constructing the heading and paragraph text
    var successMessage = '<h1>Upload Successful!</h1>';
    successMessage += '<p>Nice. Your project has now been added to the database.</p><br>';
    
    // Add the gallery HTML
    var galleryHTML = '<div id="three-column-gal" class="three-column-gal">';

    // Iterate over the thumbnail_paths and full_urls to build the gallery items
    for (var i = 0; i < data.thumbnail_paths.length; i++) {
        // Construct directory path text from the thumbnail path for the caption
        var directoryPathText = data.thumbnail_paths[i].substring(data.thumbnail_paths[i].lastIndexOf('/') + 1);

        galleryHTML += '<div class="gal-photo" onclick="viewGalleryImage(\'' + data.full_urls[i] + '\', \'' + directoryPathText + '\')">';
        galleryHTML += '<img src="' + data.thumbnail_paths[i] + '" alt="' + directoryPathText + '">';
        galleryHTML += '<p style="font-size:small;">' + directoryPathText + '</p>';
        galleryHTML += '</div>';
    }

    // Close the gallery HTML and append it to the success message
    galleryHTML += '</div>';
    successMessage += galleryHTML;

    // Append the button at the end
    successMessage += '<a class="confirm-button" href="add-project.php">➕ Add Next Project</a>';

    // Display the upload-success div and populate with the success message
    var uploadSuccessDiv = document.getElementById('upload-success');
    uploadSuccessDiv.innerHTML = successMessage;
    uploadSuccessDiv.style.display = 'block';

    // hide the form after upload success
    document.getElementById('upload-photo-form').style.display = 'none';
}


// // Function to handle form submission response
// function handleFormResponse(response) {
//     try {
//         // Try parsing the JSON response
//         var responseData = JSON.parse(response);
//         // Check if the response contains an "error" field
//         if (responseData.error) {
//             // If there's an error response, show the modal with the error message
//             showFormModal(responseData.error);
//             console.log(responseData.error); // Log error response to console
//         } else {
//             // If no error, call the uploadSuccess function with project data
//             uploadSuccess(responseData.project_id, responseData.project_name, responseData.description, responseData.start, responseData.briks_used, responseData.full_url, responseData.thumbnail_path, responseData.location_full);
//         }
//     } catch (error) {
//         // If parsing fails, handle it as an error and show the modal with the response message
//         showFormModal("Error parsing server response: " + response);
//         console.error(error); // Log parsing error to console
//     }
// }


//     // Function to handle upload success
//     function uploadSuccess(project_id, project_name, description, start, briks_used, full_url, thumbnail_path, location_full) {
//         // Construct HTML content with project data
//         var 
//         successMessage = '<img src=" ' + full_url + '">Full<br>';
//         successMessage = '<img src=" ' + thumbnail_path + '"><br><h1>Upload Successful!</h1>';
//         successMessage += '<p>Nice.  Your project has now been added to the database</p>';
//         successMessage += '<ul>';
//         successMessage += '<li>Project Id: ' + project_id + '</li>';
//         successMessage += '<li>Name: ' + project_name + '</li>';
//         successMessage += '<li>Description: ' + description + '</li>';
//         successMessage += '<li>Start: ' + start + '</li>';
//         successMessage += '<li>Briks Used: ' + briks_used + '</li>';
//         successMessage += '<li>Featured Image URL: ' + full_url + '</li>';
//         successMessage += '<li>Thumbnail Image URL: ' + thumbnail_path + '</li>';
//         successMessage += '<li>Location Full: ' + location_full + '</li>';
//         successMessage += '</ul>';
//         successMessage += '<br><a class="module-btn" href="add-project.php">+ Add Next Project</a>';

//         // Display the upload-success div and populate with project data
//         var uploadSuccessDiv = document.getElementById('upload-success');
//         uploadSuccessDiv.innerHTML = successMessage;
//         uploadSuccessDiv.style.display = 'block';

//         // Hide the photoform
//         document.getElementById('upload-photo-form').style.display = 'none';
//     }



    // Function to show form modal
    function showFormModal(message) {
        var modal = document.getElementById('form-modal-message');
        var modalMessage = modal.querySelector('.modal-message');
        modalMessage.innerHTML = message;
        modal.style.display = 'flex';

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



   <br><br>
<p style="width:100%; text-align: center;"><a href="#" onclick="goBack()" class="browser-back-text-button" aria-label="Go back to re-enter data">Go Back to Re-enter Data</a></p>


</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>
