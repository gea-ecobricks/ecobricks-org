<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.92';?>
<?php $page='upload-images';?>


<?php require_once ("../includes/add-project-inc.php");?>


 <!-- PAGE CONTENT-->



                
    <div id="form-submission-box" style="margin-top: 100px">
        <div class="form-container">
            <h2 data-lang-id="001-form-title">Upload Images</h2>
            <p data-lang-id="002-form-description">Upload your project images here.</p>
           


     <form action="upload_images.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" name="project_id" value="<?php echo $_GET['project_id']; ?>">
            
            <label for="featured_img">Featured Image:</label>
            <input type="file" id="featured_img" name="featured_img">
            <br><br>
            <label for="thumbnail_img">Thumbnail Image:</label>
            <input type="file" id="thumbnail_img" name="thumbnail_img">
            <br><br>
            <input type="submit" value="Upload Images">
    </form>




<script>
    
    
// Function to handle form submission response
function handleFormResponse(response) {
    showFormModal(response);
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
document.querySelector('form').addEventListener('submit', function(event) {
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


</script>
                  
        </div>
    </div>

   


<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>
