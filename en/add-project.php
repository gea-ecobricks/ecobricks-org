<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.66';?>
<?php $page='submit-project';?>


<?php require_once ("../includes/submit-project-inc.php");?>

 <!-- PAGE CONTENT-->


 <div id="main-content">
			  
<div id="form-submission-box">
        <div class="form-container">
            <h2 data-lang-id="001-form-title">Post your project</h2>
            <p data-lang-id="002-form-description">Share your ecobrick project with the world.  Use this form to post your completed ecobricks project onto ecobricks.org.  Projects will be featured on our main page and archived in our database.""
            <form method="post" action="submit_project.php">
                <label for="name" data-lang-id="003-project-name" >Project Name:</label><br>
                <input type="text" id="name" name="name"><br>
                
                <label for="description" data-lang-id="004-project-desc">Project Description:</label><br>
                <textarea id="description" name="description"></textarea><br>
                
                <label for="start">Start Date:</label><br>
                <input type="date" id="start" name="start"><br>
                
                <label for="briks_required">Bricks Required:</label><br>
                <input type="number" id="briks_required" name="briks_required"><br>
                
                <label for="briks_used">Bricks Used:</label><br>
                <input type="number" id="briks_used" name="briks_used"><br>
                
                <label for="featured_img">Featured Image:</label><br>
                <input type="text" id="featured_img" name="featured_img"><br>
                
                <label for="tmb_featured_img">Thumbnail Featured Image:</label><br>
                <input type="text" id="tmb_featured_img" name="tmb_featured_img"><br>
                
                <label for="location_full">Location:</label><br>
                <input type="text" id="location_full" name="location_full"><br>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>



<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>



</body>
</html>
