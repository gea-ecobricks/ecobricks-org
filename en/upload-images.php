<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.9';?>
<?php $page='upload-photos';?>


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


                    <!-- <div class="form-item">
                <label for="featured_img" data-lang-id="011-featured-image">Featured Image:</label><br>
                <input type="file" id="featured_img" name="featured_img">
                <p class="form-caption" data-lang-id="012-featured-image-caption">Please upload a square image that showcases this project.</p>


                </div>
                 -->
                <!-- <div class="form-item">
                    <label for="tmb_featured_img" data-lang-id="013-thumbnail-featured-image">Thumbnail Featured Image:</label><br>
                    <input type="file" id="tmb_featured_img" name="tmb_featured_img">

                    <p class="form-caption" data-lang-id="014-thumbnail-featured-image-caption">Please upload a square image thumbnail that showcases this project (100x100px).</p>
                </div> -->


<!-- 
                <div class="form-item" style="margin-top: 25px;">
                    <label for="name" data-lang-id="003-project-name">Project Name:</label><br>
                    <input type="text" id="name" name="name" title="Max 255 characters">
                    <p class="form-caption" data-lang-id="005-project-name-caption">Give a name or title to your project post.</p>
                </div>
                
                <div class="form-item">
                    
                    <label for="description" data-lang-id="004-project-desc">Project Description:</label><br>
                    <textarea id="description" name="description" title="Max 150 words"></textarea>
                    <p class="form-caption" data-lang-id="006-project-desc-caption">Provide a short description of this project. Max 150 words.</p>
                </div>
                
                <div class="form-item">
                    <label for="start" data-lang-id="007-start-date">Start Date:</label><br>
                    <input type="date" id="start" name="start">
                    <p class="form-caption" data-lang-id="008-start-date-caption">When did this project begin?</p>
                </div>
                
                <div class="form-item">
                    <label for="briks_used" data-lang-id="009-bricks-used">Bricks Used:</label><br>
                    <input type="number" id="briks_used" name="briks_used" title="Maximum value allowed">
                    <p class="form-caption" data-lang-id="010-bricks-used-caption">How many briks did the project use?</p>
                </div>
                



                <div class="form-item">
                    <label for="location_full" data-lang-id="015-location">Location:</label><br>
                    <input type="text" id="location_full" name="location_full">
                    <p class="form-caption" data-lang-id="016-location-caption">Tell us where this project is (City, Region, Country).</p>
                </div>
                
                <input type="submit" value="Submit" data-lang-id="017-submit-button">
            </form> -->
        </div>
    </div>

    <!-- JavaScript to handle form submission response and display modal -->
   


<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>
