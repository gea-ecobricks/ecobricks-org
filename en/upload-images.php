<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.93';?>
<?php $page='upload-images';?>


<?php require_once ("../includes/add-project-inc.php");?>


 <!-- PAGE CONTENT-->


 <div id="form-submission-box" style="margin-top: 100px;display:flex;flex-flow:column;">
    
    <div class="form-container">
        <h2 data-lang-id="001-form-title">Now Upload Your Images</h2>
        <p data-lang-id="002-form-description">Upload your project images here.</p>

        <form id="photoform" action="upload_images.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="<?php echo $_GET['project_id']; ?>">
            <label for="featured_img">Featured Image:</label>
            <input type="file" id="featured_img" name="featured_img">
            <br><br>
            <input type="submit" value="Upload Images">
        </form>
    </div>



    <div id="upload-success" class="form-container">
            <h1>Upload Successful!</h1>
            <p>Congrats your project has now been added to the database</p>
            <ul>
                <li>Project Id: <?php echo $project_id; ?></li>
                <li>Name: <?php echo $_POST['project_name']; ?></li>
                <li>Description: <?php echo $_POST['description']; ?></li>
                <li>Start: <?php echo $_POST['start']; ?></li>
                <li>Briks Used: <?php echo $_POST['briks_used']; ?></li>
                <li>Featured Image URL: <?php echo $full_url; ?></li>
                <li>Thumbnail Image URL: <?php echo $thumbnail_path; ?></li>
                <li>Location Full: <?php echo $_POST['location_full']; ?></li>
            </ul>
    </div>

</div>



    <script>
        
        // Function to handle form submission response
function handleFormResponse(response) {
    if (response.startsWith('Error')) {
        showFormModal(response);
        console.log(response); // Log error response to console
    } else {
        console.log(response); // Log success response to console
        // Handle successful upload, e.g., show success message to the user
        document.getElementById('photoform').style.display = 'none'; // Hide the photoform
        document.getElementById('upload-success').style.display = 'block'; // Show the upload-success div
    }
}

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

// Add event listener to form submission
document.querySelector('#photoform').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    var form = event.target;
    var formData = new FormData(form);

    // Send form data using AJAX
    var xhr = new XMLHttpRequest();
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


                  
        </div>
<br><br>
   
<p style="text-align:center; font-size:small;">Go Back to Reenter Data</p>

<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>
