<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.71';?>
<?php $page='submit-project';?>


<?php require_once ("../includes/submit-project-inc.php");?>

 <!-- PAGE CONTENT-->


                
    <div id="form-submission-box" style="margin-top: 85px">
        <div class="form-container">
            <h2 data-lang-id="001-form-title">Post your project</h2>
            <p data-lang-id="002-form-description">Share your ecobrick project with the world. Use this form to post your completed ecobricks project onto ecobricks.org. Projects will be featured on our main page and archived in our database."</p>
            <form method="post" action="submit_project.php">
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
                    <label for="featured_img" data-lang-id="011-featured-image">Featured Image:</label><br>
                    <input type="text" id="featured_img" name="featured_img">
                    <p class="form-caption" data-lang-id="012-featured-image-caption">Please upload a square image that showcases this project.</p>
                </div>
                
                <div class="form-item">
                    <label for="tmb_featured_img" data-lang-id="013-thumbnail-featured-image">Thumbnail Featured Image:</label><br>
                    <input type="text" id="tmb_featured_img" name="tmb_featured_img">
                    <p class="form-caption" data-lang-id="014-thumbnail-featured-image-caption">Please upload a square image thumbnail that showcases this project (100x100px).</p>
                </div>
                
                <div class="form-item">
                    <label for="location_full" data-lang-id="015-location">Location:</label><br>
                    <input type="text" id="location_full" name="location_full">
                    <p class="form-caption" data-lang-id="016-location-caption">Tell us where this project is (City, Region, Country).</p>
                </div>
                
                <input type="submit" value="Submit" data-lang-id="017-submit-button">
            </form>
        </div>
    </div>





<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>



</body>
</html>
