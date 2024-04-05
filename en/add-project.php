<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.95';?>
<?php $page='submit-project';?>


<?php require_once ("../includes/add-project-inc.php");?>


 <!-- PAGE CONTENT-->

 <div id="form-submission-box" style="margin-top: 100px">
        <div class="form-container">
            <h1 data-lang-id="001-form-title">Post & Share Your project</h1>
            <p data-lang-id="002-form-description">Share your ecobrick project with the world. Use this form to post your completed ecobricks project onto ecobricks.org. Projects will be featured on our main page and archived in our database."</p>
            <form id="submit-form" method="post" action="submit_project.php" enctype="multipart/form-data">

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
                <label for="location_full" data-lang-id="015-location">Project Location:</label><br>
                <input type="text" id="projectLocation" name="location_full" placeholder="Enter a location">
                <p class="form-caption" data-lang-id="016-location-caption">What is the location of your project? For privacy please don't use your exact address, choose your general neighbourhood or town. Project locations will be shown on our project map.</p>
            </div>
            <input type="hidden" id="lat" name="latitude">
            <input type="hidden" id="lon" name="longitude">
            
            <input type="submit" value="Next ➡️" data-lang-id="017-submit-button">
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
$(function() {
    $("#projectLocation").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "https://nominatim.openstreetmap.org/search",
                dataType: "json",
                data: {
                    q: request.term,
                    format: "json"
                },
                success: function(data) {
                    response($.map(data, function(item) {
                        return {
                            label: item.display_name, // Label for each autocomplete option
                            value: item.display_name, // Value for each autocomplete option
                            lat: item.lat,
                            lon: item.lon
                        };
                    }));
                }
            });
        },
        select: function(event, ui) {
            // Optionally, set hidden form fields for the lat and lon values
            $('#lat').val(ui.item.lat);
            $('#lon').val(ui.item.lon);
        },
        minLength: 3 // Minimum length of query string to start search
    });
});
</script>




<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>
