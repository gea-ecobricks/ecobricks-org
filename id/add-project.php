<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include necessary environment setup 
include '../ecobricks_env.php';



// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Updated SQL statement to include the new field `est_avg_brik_weight`
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, est_avg_brik_weight, location_full, location_geo, project_type, construction_type, community, project_admins) 
            VALUES (?, ?, ?, ?, ?, ?, ST_GeomFromText(?), ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Updated bind_param to include 'est_avg_brik_weight'. Assuming 'est_avg_brik_weight' is a number, use 'i' for integer.
    $stmt->bind_param("sssisssssss", $name, $description, $start, $briks_used, $est_avg_brik_weight, $location_full, $location_geo, $project_type, $construction_type, $community, $project_admins);

    // Set parameters from the form, including the new field
    $name = $_POST['name'];
    $description = $_POST['description'];
    $long_description = $_POST['long_description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $est_avg_brik_weight = $_POST['est_avg_brik_weight']; // New field
    $location_full = $_POST['location_full'];
    $project_type = $_POST['project_type'];
    $construction_type = $_POST['construction_type'];
    $community = $_POST['community'];
    $project_admins = $_POST['project_admins'];
    $location_geo = "POINT(" . $_POST['latitude'] . " " . $_POST['longitude'] . ")";

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Get the last inserted project_id
        $project_id = $conn->insert_id;

        // Statement and connection closing
        $stmt->close();
        $conn->close();

        // Redirect to the next page with project_id as a query parameter
        echo "<script>window.location.href = 'add-project-images.php?project_id=" . $project_id . "';</script>";
        exit();
    } else {
        // Handle errors
        $response_message = "Error: " . $sql . "<br>" . $conn->error;
        // Ideally, implement error handling or logging here
    }
}
?>


<!DOCTYPE html>
<HTML lang="id"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='id';?>
<?php $version='1.9778';?>
<?php $page='add-project';?>




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

 <div id="form-submission-box">
    <div class="form-container">
        <div class="step-graphic" style="width:fit-content;margin:auto;">
            <img src="../svgs/step1-log-project.svg" style="height:25px;">
        </div>

        <div class="splash-form-content-block">  
            <div class="splash-box">
        
                <div class="splash-heading" data-lang-id="001-splash-title">Post a Project</div>
            </div>
            <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/building-methods.svg" style="width:65%" alt="There are many ways to build with ecobricks">
            </div>
        </div>

  
    <!-- <h1 data-lang-id="001-form-title">Post your Project</h1>
               -->
               <p data-lang-id="002-form-description">Share your ecobrick project with the world. Use this form to post your completed ecobricks project onto ecobricks.org. Projects will be featured on our main page and archived in our database."</p>
         
            <form id="submit-form" method="post" action="" enctype="multipart/form-data">
    <div class="form-item" style="margin-top: 25px;">
        <label for="name" data-lang-id="003-project-name">Project Name:</label><br>
        <input type="text" id="name" name="name" aria-label="Project Name" title="Required. Max 255 characters." required>
        <p class="form-caption" data-lang-id="005-project-name-caption">Give a name or title to your project post.</p>
    </div>
    
    <div class="form-item">
        <label for="description" data-lang-id="004-project-desc">Short project description:</label><br>
        <textarea id="description" name="description" aria-label="Project Description" title="Required. Max 150 words" required></textarea>
        <p class="form-caption" data-lang-id="006-project-desc-caption">Provide a once sentence description of this project. Max 150 words.</p>
    </div>

    <div class="form-item">
        <label for="long_description" data-lang-id="004-project-desc">Full project description:</label><br>
        <textarea id="long_description" name="long_description" aria-label="Project Description" title="Required. Max 150 words" required></textarea>
        <p class="form-caption" data-lang-id="006-project-desc-caption">Take as much space as you need as share the full details of your project. Max 1000 words.</p>
    </div>
    
    <div class="form-item">
        <label for="start" data-lang-id="007-start-date">Start Date:</label><br>
        <input type="date" id="start" name="start" aria-label="Start Date" required>
        <p class="form-caption" data-lang-id="008-start-date-caption">When did this project begin?</p>
    </div>
    
    <div class="form-item">
        <label for="briks_used" data-lang-id="009-bricks-used">Bricks Used:</label><br>
        <input type="number" id="briks_used" name="briks_used" aria-label="Bricks Used" title="Maximum value allowed" required>
        <p class="form-caption" data-lang-id="009-bricks-used-caption">How many briks does your project use?  Enter a number between 1-5000.</p>
    </div>

    <div class="form-item">
        <label for="est_avg_brik_weight" data-lang-id="010-est-avg-weight">Please estimate the average weight of the ecobricks used in your project in grams?</label><br>
        <input type="number" id="est_avg_brik_weight" name="est_avg_brik_weight" aria-label="Estimate Brik Weight" title="Maximum value allowed" required>
        <p class="form-caption" data-lang-id="010-est-avg-weight-range">Must be a number between 100 and 2000.</p>
    </div>

    <div class="form-item">
        <label for="project_type" data-lang-id="011-project-type">What type of project is this?</label><br>
        <select id="project_type" name="project_type" aria-label="Project Type" required>
            <option value="" disabled="" selected="" data-lang-id="011-select">Select project type...  </option>
            <option value="single module" data-lang-id="011-single-module">Single Module</option>
            <option value="furniture" data-lang-id="011-modular-furniture">Furniture</option>
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
        <p class="form-caption" data-lang-id="014b-optional">Optional: Provide the name(s) of the project's principals. If you wish to link this to a GoBrik user account be sure to spell the name accordingly.</p>
    </div>

    <div class="form-item">
        <label for="location_full" data-lang-id="015-location">Where is the project located?</label><br>
        <span data-lang-id="015-location-field-placeholder">
            <input type="text" id="projectLocation" name="location_full" aria-label="Project Location" placeholder="Enter project's general location..." required>
        </span>
        <p class="form-caption" data-lang-id="016-location-caption">For privacy please don't use your exact address, choose your general neighbourhood or town. Project locations will be shown on our project map.</p>
    </div>
    <input type="hidden" id="lat" name="latitude">
    <input type="hidden" id="lon" name="longitude">
    
    <div data-lang-id="017-submit-button">
        <input type="submit" value="Next: Upload Photos ➡️" aria-label="Submit Form">
    </div>

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
