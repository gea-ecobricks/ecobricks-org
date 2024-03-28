<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.66';?>
<?php $page='submit-project';?>


<?php require_once ("../includes/submit-project-inc.php");?>

 
			  
<div id="form-submission-box" style="margin-top: 100px;">
        <div class="form-container">
            <h2>Submit Project</h2>
            <form method="post" action="submit_project.php">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                
                <label for="description">Description:</label><br>
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
