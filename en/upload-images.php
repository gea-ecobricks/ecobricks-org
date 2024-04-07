<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='2.01';?>
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

        <form id="photoform" action="upload_images.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="<?php echo $_GET['project_id']; ?>">
            
            <div class="form-item">

                <label for="photo1_main" data-lang-id="003-feature-photo">Feature image</label><br>
                <input type="file" id="photo1_main" name="photo1_main" style="background-color:var(--main-background); font-size:1.2em;padding:10px;color:var(--text-color);border-radius:5px;" required>
                <p class="form-caption" data-lang-id="004-feature-desc">Please choose a featured photo for this project.  Required.</p>

            </div>

        <!-- Photo 1 Main & Thumbnail -->
            <div class="form-item">
                <label for="photo2_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo2_main" name="photo2_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

        <!-- Photo 2 Main & Thumbnail -->
            <div class="form-item">
                <label for="photo3_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo3_main" name="photo3_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

        <!-- Photo 3 Main & Thumbnail -->
        <div class="form-item">
                <label for="photo4_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo4_main" name="photo4_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

        <!-- Photo 4 Main & Thumbnail -->
            <div class="form-item">
                <label for="photo5_main" data-lang-id="005-another-photo">Choose another photo:</label>
                <br>
                <input type="file" id="photo5_main" name="photo5_main">
                <p class="form-caption" data-lang-id="006-another-photo-optional">Optional</p>
            </div>

            <input type="submit" value="⬆️ Upload Images " id="upload-progress-button">
        </form>
    </div>



    <div id="upload-success" class="form-container" style="display:none;">
           
    </div>

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
    var successMessage = '<h1>Upload Successful!</h1>';
    successMessage += '<p>Nice. Your project has now been added to the database.</p>';
    successMessage += '<ul>';
    successMessage += '<li>Project Id: ' + data.project_id + '</li>';
    successMessage += '<li>Name: ' + data.project_name + '</li>';
    successMessage += '<li>Description: ' + data.description + '</li>';
    successMessage += '<li>Start: ' + data.start + '</li>';
    successMessage += '<li>Briks Used: ' + data.briks_used + '</li>';

    // Iterate over the full_urls and thumbnail_paths arrays
    for (var i = 0; i < data.full_urls.length; i++) {
        successMessage += '<li>Image ' + (i+1) + ' URL: ' + data.full_urls[i] + '</li>';
        successMessage += '<img src="' + data.full_urls[i] + '" style="width:100px;"><br>'; // Display each main image
    }

    for (var i = 0; i < data.thumbnail_paths.length; i++) {
        successMessage += '<li>Thumbnail ' + (i+1) + ' URL: ' + data.thumbnail_paths[i] + '</li>';
        successMessage += '<img src="' + data.thumbnail_paths[i] + '" style="width:50px;"><br>'; // Display each thumbnail
    }

    successMessage += '<li>Location Full: ' + data.location_full + '</li>';
    successMessage += '</ul>';
    successMessage += '<br><a class="module-btn" href="add-project.php">+ Add Next Project</a>';

    var uploadSuccessDiv = document.getElementById('upload-success');
    uploadSuccessDiv.innerHTML = successMessage;
    uploadSuccessDiv.style.display = 'block';
    document.getElementById('photoform').style.display = 'none'; // Make sure the form ID matches your actual form
}


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
   
<p style="text-align:center; font-size:small;">Go Back to Reenter Data</p>

<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>
