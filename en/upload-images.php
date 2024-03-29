<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.98';?>
<?php $page='upload-images';?>


<?php require_once ("../includes/add-project-inc.php");?>


 <!-- PAGE CONTENT-->


 <div id="form-submission-box" style="margin-top: 140px;display:flex;flex-flow:column;">
    
    <div class="form-container" id="upload-photo-form">
        <h2 data-lang-id="001-form-title">Now Upload Your Images</h2>
        <p data-lang-id="002-form-description">Upload your project's featured image here.</p>

        <form id="photoform" action="upload_images.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="<?php echo $_GET['project_id']; ?>">
            <label for="featured_img"></label>
            <input type="file" id="featured_img" name="featured_img" style="background-color:var(--main-background); font-size:1.2em;padding:10px;color:var(--text-color);border-radius:5px;" required>
            <br><br>
            <input type="submit" value="⬆️ Upload Images " id="upload-progress-button">
        </form>
    </div>



    <div id="upload-success" class="form-container" style="display:none;">
           
    </div>

</div>


<script>
    // Function to handle upload success
    function uploadSuccess(project_id, project_name, description, start, briks_used, full_url, thumbnail_path, location_full) {
        // Construct HTML content with project data
        var successMessage = '<img src=" ' + thumbnail_path + '"><br><h1>Upload Successful!</h1>';
        successMessage += '<p>Congrats your project has now been added to the database</p>';
        successMessage += '<ul>';
        successMessage += '<li>Project Id: ' + project_id + '</li>';
        successMessage += '<li>Name: ' + project_name + '</li>';
        successMessage += '<li>Description: ' + description + '</li>';
        successMessage += '<li>Start: ' + start + '</li>';
        successMessage += '<li>Briks Used: ' + briks_used + '</li>';
        successMessage += '<li>Featured Image URL: ' + full_url + '</li>';
        successMessage += '<li>Thumbnail Image URL: ' + thumbnail_path + '</li>';
        successMessage += '<li>Location Full: ' + location_full + '</li>';
        successMessage += '</ul>';

        // Display the upload-success div and populate with project data
        var uploadSuccessDiv = document.getElementById('upload-success');
        uploadSuccessDiv.innerHTML = successMessage;
        uploadSuccessDiv.style.display = 'block';

        // Hide the photoform
        document.getElementById('upload-photo-form').style.display = 'none';
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


  // Add event listener to form submission
document.querySelector('#photoform').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    var form = event.target;
    var formData = new FormData(form);

    // Send form data using AJAX
    var xhr = new XMLHttpRequest();

    // Track upload progress
    xhr.upload.onprogress = function(event) {
    if (event.lengthComputable) {
        // Calculate and update the background size of the input button based on upload progress
        var progress = (event.loaded / event.total) * 100;
        document.getElementById('upload-progress-button').style.backgroundSize = progress + '% 100%';

        // Add progress-bar class to change background color to green
        document.getElementById('upload-progress-button').classList.add('progress-bar');
    }
};

    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                handleFormResponse(xhr.responseText);
            } else {
                handleFormResponse('Error submitting form.');
            }
        }
    };

    xhr.open(form.method, form.action, true);
    xhr.send(formData);
});

// Function to handle form submission response
function handleFormResponse(response) {
    // Convert response to lowercase for case-insensitive comparison
    response = response.toLowerCase();

    if (response.startsWith('error')) {
        // If there's an error response, show the modal with the error message
        showFormModal(response);
        console.log(response); // Log error response to console
    } else {
        try {
            // Try parsing the JSON response
            var responseData = JSON.parse(response);
            // If parsing succeeds, call the uploadSuccess function with project data
            uploadSuccess(responseData.project_id, responseData.project_name, responseData.description, responseData.start, responseData.briks_used, responseData.full_url, responseData.thumbnail_path, responseData.location_full);
        } catch (error) {
            // If parsing fails, handle it as an error and show the modal with the response message
            showFormModal("Error parsing server response: " + response);
            console.error(error); // Log parsing error to console
        }
    }
}





document.querySelector('#photoform').addEventListener('submit', function(event) {
    // Prevent default form submission
    event.preventDefault();

    // Check if file input is empty
    var fileInput = document.getElementById('featured_img');
    if (fileInput.files.length === 0) {
        // If file input is empty, display modal message
        showFormModal('Please choose a file.');
        return; // Stop form submission
    }

    // Proceed with form submission
    var form = event.target;
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    // Continue with the rest of your XMLHttpRequest logic...
});


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
