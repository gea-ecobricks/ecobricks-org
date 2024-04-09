<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.97';?>
<?php $page='submit-project';?>


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

 <div id="form-submission-box" style="margin-top: 100px">
    <div class="form-container">
        <div class="step-graphic" style="width:fit-content;height: 22px;margin:auto;">
            <img src="../svgs/step1-log-project.svg">
        </div>

        <div class="splash-form-content-block">  
            <div class="splash-box">
        
                <div class="splash-heading" data-lang-id="001-splash-title">Post a Project</div>
                <div class="splash-sub" data-lang-id="002-splash-subtitle">Share your ecobrick project with the world.</div>
            </div>
            <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/building-methods.svg" style="width: 85%" alt="There are many ways to build with ecobricks">
            </div>
        </div>

  
    <!-- <h1 data-lang-id="001-form-title">Post your Project</h1>
            <p data-lang-id="002-form-description">Share your ecobrick project with the world. Use this form to post your completed ecobricks project onto ecobricks.org. Projects will be featured on our main page and archived in our database."</p>
             -->
            
            <form id="submit-form" method="post" action="submit_project.php" enctype="multipart/form-data">
    <div class="form-item" style="margin-top: 25px;">
        <label for="name" data-lang-id="003-project-name">Project Name:</label><br>
        <input type="text" id="name" name="name" aria-label="Project Name" title="Required. Max 255 characters." required>
        <p class="form-caption" data-lang-id="005-project-name-caption">Give a name or title to your project post.</p>
    </div>
    
    <div class="form-item">
        <label for="description" data-lang-id="004-project-desc">Project Description:</label><br>
        <textarea id="description" name="description" aria-label="Project Description" title="Required. Max 150 words" required></textarea>
        <p class="form-caption" data-lang-id="006-project-desc-caption">Provide a short description of this project. Max 150 words.</p>
    </div>
    
    <div class="form-item">
        <label for="start" data-lang-id="007-start-date">Start Date:</label><br>
        <input type="date" id="start" name="start" aria-label="Start Date" required>
        <p class="form-caption" data-lang-id="008-start-date-caption">When did this project begin?</p>
    </div>
    
    <div class="form-item">
        <label for="briks_used" data-lang-id="009-bricks-used">Bricks Used:</label><br>
        <input type="number" id="briks_used" name="briks_used" aria-label="Bricks Used" title="Maximum value allowed" required>
        <p class="form-caption" data-lang-id="010-bricks-used-caption">How many briks did the project use?  Enter a number between 1-5000.</p>
    </div>

    <div class="form-item">
        <label for="project_type" data-lang-id="011-project-type">What type of project is this?</label><br>
        <select id="project_type" name="project_type" aria-label="Project Type" required>
            <option value="" disabled="" selected="" data-lang-id="011-select">Select project type...  </option>
            <option value="single module" data-lang-id="011-single-module">Single Module</option>
            <option value="modular furniture" data-lang-id="011-modular-furniture">Modular Furniture</option>
            <option value="garden" data-lang-id="011-outdoor-garden">Outdoor Garden</option>
            <option value="structure" data-lang-id="011-structure">Structure</option>
            <option value="other" data-lang-id="011-other">Other</option>
        </select>
    </div>
    
    <div class="form-item">
        <label for="construction_type" data-lang-id="012-construction-type">What type of construction is this?</label><br>
        <select id="construction_type" name="construction_type" aria-label="Construction Type" required>
            <option value="" disabled="" selected="" data-lang-id="012-select">Select construction type...  </option>
            <option value="silicone" data-lang-id="012-construction-silicone" >Silicone</option>
            <option value="banding" data-lang-id="012-construction-tire-banding">Tire Banding</option>
            <option value="ecojoiner" data-lang-id="012-construction-ecojoiner">Ecojoiner</option>
            <option value="earth/cob" data-lang-id="012-construction-earth">Earth/Cob</option>
            <option value="other" data-lang-id="012-other">Other</option>
        </select>
    </div>
    
    <div class="form-item">
        <label for="community" data-lang-id="013-community">If this was a community project, what community is responsible?</label><br>
        <input type="text" id="community" name="community" aria-label="Community (optional)">
        <p class="form-caption" data-lang-id="013b-optional">Optional</p>
    </div>
    
    <div class="form-item">
        <label for="project_admins" data-lang-id="014-project-admins">Who's project is this?</label><br>
        <input type="text" id="project_admins" name="project_admins" aria-label="Project Admins (optional)">
        <p class="form-caption" data-lang-id="014b-optional">Provide the name(s) of the project principals. Optional</p>
    </div>

    <div class="form-item">
        <label for="location_full" data-lang-id="015-location">Where is the project located?</label><br>
        <input type="text" id="projectLocation" name="location_full" aria-label="Project Location" placeholder="Enter project's general location..." required>
        <p class="form-caption" data-lang-id="016-location-caption">For privacy please don't use your exact address, choose your general neighbourhood or town. Project locations will be shown on our project map.</p>
    </div>
    <input type="hidden" id="lat" name="latitude">
    <input type="hidden" id="lon" name="longitude">
    
    <input type="submit" value="Next ➡️" aria-label="Submit Form" data-lang-id="017-submit-button">Test</input>
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
