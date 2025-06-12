<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../project-photo-functions.php'; // Ensure this path is correct

    $location_full = $_POST['location_address'] ?? 'Default Location';
    $project_name = $_POST['project_name'];
    $description_short = $_POST['description_short'];
    $description_long = $_POST['description_long'];
    $project_type = $_POST['project_type'];
    $construction_type = $_POST['construction_type'];  // keep this as it is
    $community = $_POST['community'] ?? '';
    $project_admins = $_POST['project_admins'] ?? '';
    $start_dt = $_POST['start_dt'];
    $briks_used = $_POST['briks_used'];
    $est_avg_brik_weight = $_POST['est_avg_brik_weight'];
    $latitude = (double)$_POST['latitude'];
    $longitude = (double)$_POST['longitude'];
    $connected_ecobricks = $_POST['connected_ecobricks'] ?? '';
    $end_dt = $_POST['end_dt'];
    $project_sort = $_POST['project_sort'] ?? '';

    $sql = "INSERT INTO tb_projects (project_name, description_short, description_long, location_full, project_type, construction_type, community, project_admins, start_dt, briks_used, est_avg_brik_weight, location_lat, location_long, connected_ecobricks, end_dt, project_sort) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
if ($stmt = $conn->prepare($sql)) {
$stmt->bind_param("sssssssssiiddsss", $project_name, $description_short, $description_long, $location_full, $project_type, $construction_type, $community, $project_admins, $start_dt, $briks_used, $est_avg_brik_weight, $latitude, $longitude, $connected_ecobricks, $end_dt, $project_sort);
if ($stmt->execute()) {
            $project_id = $conn->insert_id;

        // Get the last inserted project_id
        $project_id = $conn->insert_id;

        // Calculate `est_total_weight`
        $est_total_weight = ($briks_used * $est_avg_brik_weight) / 1000;

        // Update `est_total_weight`
        $update_weight_sql = "UPDATE tb_projects SET est_total_weight = ? WHERE project_id = ?";
        $update_weight_stmt = $conn->prepare($update_weight_sql);
        $update_weight_stmt->bind_param("di", $est_total_weight, $project_id);
        $update_weight_stmt->execute();
        $update_weight_stmt->close();

        // Update `project_url`
        $project_url = "https://ecobricks.org/en/project.php?id=" . $project_id;
        $update_url_sql = "UPDATE tb_projects SET project_url = ? WHERE project_id = ?";
        $update_url_stmt = $conn->prepare($update_url_sql);
        $update_url_stmt->bind_param("si", $project_url, $project_id);
        $update_url_stmt->execute();
        $update_url_stmt->close();


        $stmt->close();
        $conn->close();
            echo "<script>window.location.href = 'add-project-images.php?project_id=" . $project_id . "';</script>";
        } else {
            echo "Error: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Prepare failed: " . $conn->error;
    }
    $conn->close();
}
?>



<!DOCTYPE html>
<HTML lang="id"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='id';?>
<?php $version='2.06';?>
<?php $page='add-project';?>


<?php require_once ("../includes/add-project-inc.php");?>


<div class="splash-content-block"></div>
<div id="splash-bar"></div>

 <!-- PAGE CONTENT-->

 <div id="form-submission-box">
    <div class="form-container">
        <div class="form-top-header" style="display:flex;flex-flow:row;">
            <div class="step-graphic" style="width:fit-content;margin:auto;margin-left:0px">
                <img src="../svgs/step1-log-project.svg" style="height:25px;">
            </div>
            <div id="language-code" onclick="showLangSelector()" aria-label="Switch languages"><span data-lang-id="000-language-code"></span></div>
        </div>

        <div class="splash-form-content-block">  
            <div class="splash-box">
        
                <div class="splash-heading" data-lang-id="001-splash-title">Post a Project</div>
            </div>
            <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/building-methods.svg" style="width:65%" alt="There are many ways to build with ecobricks">
            </div>
        </div>

        <div class="lead-page-paragraph">
            <p data-lang-id="004-form-description">Share your ecobrick project with the world. Use this form to post your completed ecobricks project onto ecobricks.org. Projects will be featured on our main page and archived in our database.</p>
        </div>
        <form id="submit-form" method="post" action="" enctype="multipart/form-data" novalidate>
        <!-- <form id="submit-form" method="post" action="" enctype="multipart/form-data"> -->

            <div class="form-item" style="margin-top: 25px;">
                <label for="project_name" data-lang-id="005-project-name">Project Name:</label><br>
                <input type="text" id="project_name" name="project_name" aria-label="Project Name" title="Required. Max 255 characters." required>
                <p class="form-caption" data-lang-id="005b-project-name-caption">Give a name or title to your project post.  Avoid special characters.</p>
                
                <!--ERRORS-->
                <div id="name-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>

                <div id="name-error-long" class="form-field-error" data-lang-id="000-name-field-too-long-error">Your project name is too long.  Max 50 characters.</div>
                
                <div id="name-error-invalid" class="form-field-error" data-lang-id="005b-project-name-error">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs please.</div>
            </div>
    
    <div class="form-item">
        <label for="description_short" data-lang-id="004-short-project-desc">Short project description:</label><br>
        <textarea id="description_short" name="description_short" aria-label="Project Description" title="Required. Max 150 words" required></textarea>
        <p class="form-caption" data-lang-id="004-short-project-desc-caption">Provide a one sentence description of this project. Max 150 words.  Avoid special characters.</p>

         <!--ERRORS-->
         <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>

        <div id="description-error-long" class="form-field-error" data-lang-id="000-field-description-too-long-error">Your project description is too long.  Max 255 characters.</div>

        <div id="description-error-invalid" class="form-field-error" data-lang-id="000-field-invalid-characters">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs.</div>
        
    </div>

    <div class="form-item">
        <label for="description_long" data-lang-id="005-long-project-desc">Full project description:</label><br>
        <textarea id="description_long" name="description_long" aria-label="Project Description" title="Required. Max 150 words"></textarea>
        <p class="form-caption" data-lang-id="005-long-project-desc-caption">Optional. Take as much space as you need as share the full details of your project. Max 1000 words.</p>

         <!--ERRORS-->

        <div id="description2-error-long" class="form-field-error" data-lang-id="000-long-field-too-long-error">Your long project description is too long.  Maximum 2000 characters.</div>

    </div>
    
    
    
    <div class="form-item">
    <label for="briks_used" data-lang-id="009-bricks-used">How many ecobricks does your project use?</label><br>
    <input type="number" id="briks_used" name="briks_used" aria-label="Bricks Used" min="1" max="5000" required>
    <p class="form-caption" data-lang-id="009-bricks-used-caption">Please enter a number of ecobricks between 1-5000.</p>
     <!--ERRORS-->
     <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
     <div id="briks-error-range" class="form-field-error" data-lang-id="000-field-brik-number-error">Just a number (between 1 and 5000)</div>
</div>

<div class="form-item">
    <label for="est_avg_brik_weight" data-lang-id="010-est-avg-weight">Please estimate the average weight of the ecobricks used in your project in grams?</label><br>
    <input type="number" id="est_avg_brik_weight" name="est_avg_brik_weight" aria-label="Estimate Brik Weight" min="100" max="2000" required>
    <p class="form-caption" data-lang-id="010-est-avg-weight-range">Just a number (between 100 and 2000).</p>
     <!--ERRORS-->
     <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
     <div id="weight-error-range" class="form-field-error" data-lang-id="000-field-required-error">Your estimated ecobrick average weight (in grams) must a number between 100 and 2000.</div>
</div>


<div class="form-item">
    <label for="project_type" data-lang-id="011-project-type">What type of project is this?</label><br>
    <select id="project_type" name="project_type" aria-label="Project Type" required>
        <option value="" disabled="" selected="" data-lang-id="011-select">Select project type...</option>
        <option value="single module" data-lang-id="011-single-module">Single Module</option>
        <option value="furniture" data-lang-id="011-modular-furniture">Furniture</option>
        <option value="garden" data-lang-id="011-outdoor-garden">Outdoor Garden</option>
        <option value="structure" data-lang-id="011-structure">Structure</option>
        <option value="art" data-lang-id="011-art">Art</option>
        <option value="other" data-lang-id="011-other">Other</option>
    </select>
    <br><br>
    <!--ERROR-->
    <div id="project-type-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
</div>

<div class="form-item">
    <label for="construction_type" data-lang-id="012-construction-type">What type of construction is this?</label><br>
    <select id="construction_type" name="construction_type" aria-label="Construction Type" required>
        <option value="" disabled="" selected="" data-lang-id="012-select">Select construction type...</option>
        <option value="silicone" data-lang-id="012-construction-silicone">Silicone</option>
        <option value="banding" data-lang-id="012-construction-tire-banding">Tire Banding</option>
        <option value="ecojoiner" data-lang-id="012-construction-ecojoiner">Ecojoiner</option>
        <option value="earth" data-lang-id="012-construction-earth">Earth/Cob</option>
        <option value="installation" data-lang-id="012-construction-installation">Installation</option>
        <option value="other" data-lang-id="012-other">Other</option>
    </select>
    <br><br>
        <!--ERROR-->
    <div id="construction-type-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
</div>

    


    <div class="form-item">
    <label for="location_address" data-lang-id="015-location">Where is the project located?</label><br>
    <div class="input-container">
        <input type="text" id="location_address" name="location_address" aria-label="Project Location" placeholder="Start typing your town..." required>
        <div id="loading-spinner" class="spinner" style="display: none;"></div>
    </div>
    <p class="form-caption" data-lang-id="016-location-caption">For privacy, please don't use your exact address. Choose your general neighbourhood or town. Project locations will be shown on our project map.</p>

        <!--ERRORS-->
    <div id="location-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
</div>


<!--Advanced Fields-->


<div class="advanced-box" aria-expanded="false" role="region" aria-labelledby="advancedBoxLabel-1"> 
	<div class="advanced-box-header"  id="advancedBoxLabel-1">
        <div class="advanced-title" data-lang-id="012-block-1-advanced">Advanced Options</div>
        <div class="advanced-open-icon" >+</div>
	</div>
    <div class="advanced-box-content">
            
        <div class="form-item">
            <label for="project_sort" data-lang-id="012b-project-sort">What sort of project is this?</label><br>
            <select id="project_sort" name="project_sort" aria-label="Community or Personal Project">
                <option value="" disabled="" selected="" data-lang-id="012b-select">Select sort...</option>
                <option value="community" data-lang-id="012b-community-project">Community Project</option>
                <option value="personal" data-lang-id="012b-personal-project">Personal Project</option>
            </select>
        </div>


        <div class="form-item">
            <label for="community" data-lang-id="013-community">What community is responsible for this project?</label><br>
            <input type="text" id="community" name="community" aria-label="Community (optional)">
            <p class="form-caption" data-lang-id="013b-optional">Optional</p>

            <!--ERRORS-->
            <div id="community-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>
        </div>
        
        <div class="form-item">
            <label for="project_admins" data-lang-id="014-project-admins">Who's project is this?</label><br>
            <input type="text" id="project_admins" name="project_admins" aria-label="Project Admins (optional)">
            <p class="form-caption" data-lang-id="014b-optional">Optional: Provide the name(s) of the project's principals. If you wish to link this to a GoBrik user account be sure to spell the name accordingly.</p>
        <!--ERRORS-->
            <div id="admins-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>
        </div>

    
        <div id="other-advanced-fields">
        
            <div class="form-item">
                <label for="connected_ecobricks">The serials of ecobricks used in your project:</label><br>
                <input type="text" id="connected_ecobricks" name="connected_ecobricks" aria-label="Connected Ecobricks" placeholder="Enter serials...">
                <div id="serial-select"><ul id="autocomplete-results" ></ul></div>
                <p class="form-caption">Optional: Enter the serial numbers of ecobricks connected to this project. Separate multiple serial numbers with commas.</p>
            </div>

            <div class="form-item">
                <p data-lang-id="007-project-duration">Project Duration</p>
                <!--START DATE-->
                <label for="start_dt" data-lang-id="007-start-date">Start Date:</label><br>
                <input type="date" id="start_dt" name="start_dt" aria-label="Start Date" required>
                <p class="form-caption" data-lang-id="008-start-date-caption">When did this project begin?</p>
                <!--errors-->
                <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                <div id="start-error-reasonable" class="form-field-error" data-lang-id="000-field-reasonable-date">A reasonable date is required.  Must be after 2000 and before today.</div>

                <!--END DATE-->
                <label for="start_dt" data-lang-id="007b-end-date">End Date:</label><br>
                <input type="date" id="end_dt" name="end_dt" aria-label="End Date" required>
                <p class="form-caption" data-lang-id="008b-end-date-caption">When did this project end?</p>
                <!--errors-->
                <div id="description-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                <div id="start-error-reasonable" class="form-field-error" data-lang-id="000-field-reasonable-date">A reasonable date is required.  Must be after 2000 and before today.</div>

            </div>
        </div> <!--closes other advanced fields-->

    </div>
</div> <!--close advanced box-->



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
//TOGGLE COMMUNITY OR PERSONAL PROJECT SORT FIELDS


document.addEventListener("DOMContentLoaded", function() {
    // Initially hide all additional fields
    const communityField = document.getElementById("community").parentNode;
    const adminsField = document.getElementById("project_admins").parentNode;
    const connectedEcoBricksField = document.getElementById("connected_ecobricks").parentNode;
    const projectDurationField = document.getElementById("start_dt").parentNode.parentNode; // Parent of start_dt also includes end_dt

    communityField.style.display = 'none';
    adminsField.style.display = 'none';
    connectedEcoBricksField.style.display = 'none';
    projectDurationField.style.display = 'none';

    // Function to show or hide fields based on the dropdown selection
    function toggleFields() {
        var projectSort = document.getElementById("project_sort").value;

        // Reset visibility
        communityField.style.display = 'none';
        adminsField.style.display = 'none';
        connectedEcoBricksField.style.display = 'none';
        projectDurationField.style.display = 'none';

        if (projectSort === "community") {
            communityField.style.display = '';
        } else if (projectSort === "personal") {
            adminsField.style.display = '';
        }

        // Show connected ecobricks and project duration fields if a project sort is selected
        if (projectSort === "community" || projectSort === "personal") {
            connectedEcoBricksField.style.display = '';
            projectDurationField.style.display = '';
        }

        // Dynamically adjust the max-height for the advanced box content
        const advancedBoxContent = document.querySelector('.advanced-box-content');
        advancedBoxContent.style.maxHeight = advancedBoxContent.scrollHeight + "px";
    }

    // Add change event listener to the project sort dropdown
    document.getElementById("project_sort").addEventListener("change", toggleFields);
});




//SHOW HIDE THE ADVANCED BOX

function toggleAdvancedBox(event) {
    // Get the current advanced box based on the clicked header
    let currentAdvancedBox = event.currentTarget.parentElement;

    // Assuming the element that will have the `aria-expanded` attribute is the header itself
    let header = currentAdvancedBox.querySelector('.advanced-box-header');

    // Find the content and icon specific to this advanced box
    let content = currentAdvancedBox.querySelector('.advanced-box-content');
    let icon = currentAdvancedBox.querySelector('.advanced-open-icon');
    
    // Check if the content is currently expanded or not
    let isExpanded = header.getAttribute('aria-expanded') === 'true';

    if (!isExpanded) {
        content.style.maxHeight = content.scrollHeight + 'px'  //   Set to its full height
        icon.textContent = '−';  // witch to minus symbol for an open state
        header.setAttribute('aria-expanded', 'true'); // Update aria-expanded to true
    } else {
        content.style.maxHeight = '0px';  // Collapse it
        icon.textContent = '+';  // Set to plus symbol
        header.setAttribute('aria-expanded', 'false'); // Update aria-expanded to false
    }
}


// Attach the function to all header div's click events
document.addEventListener("DOMContentLoaded", function() {
    let headers = document.querySelectorAll('.advanced-box-header');
    headers.forEach(header => {
        header.addEventListener('click', toggleAdvancedBox);
    });
});




document.getElementById('submit-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting until validation is complete
    var isValid = true; // Flag to determine if the form should be submitted

    // Helper function to display error messages
    function displayError(elementId, showError) {
        var errorDiv = document.getElementById(elementId);
        if (showError) {
            errorDiv.style.display = 'block'; // Show the error message
            isValid = false; // Set form validity flag
        } else {
            errorDiv.style.display = 'none'; // Hide the error message
        }
    }

    // Helper function to check for invalid characters
    function hasInvalidChars(value) {
        const invalidChars = /[\'\"><]/; // Regex for invalid characters
        return invalidChars.test(value);
    }

    // 1. Project Name Validation
    var projectName = document.getElementById('project_name').value.trim();
    displayError('name-error-required', projectName === '');
    displayError('name-error-long', projectName.length > 50);
    displayError('name-error-invalid', hasInvalidChars(projectName));

    // 2. Project Short Description Validation
    var descriptionShort = document.getElementById('description_short').value.trim();
    displayError('description-error-required', descriptionShort === '');
    displayError('description-error-long', descriptionShort.length > 255);
    displayError('description-error-invalid', hasInvalidChars(descriptionShort));

    // 3. Project Long Description Validation
    var descriptionLong = document.getElementById('description_long').value.trim();
    displayError('description2-error-long', descriptionLong.length > 2000);

    // 4. Project Start Date Validation
    var startDate = new Date(document.getElementById('start_dt').value);
    var now = new Date();
    var earlyDate = new Date('2000-01-01');
    displayError('start-error-reasonable', startDate > now || startDate < earlyDate);

    // 5. Ecobricks Used Validation
    var briksUsed = parseInt(document.getElementById('briks_used').value, 10);
    displayError('briks-error-range', isNaN(briksUsed) || briksUsed < 1 || briksUsed > 2000);

    // 6. Estimated Weight Validation
    var estimatedWeight = parseInt(document.getElementById('est_avg_brik_weight').value, 10);
    displayError('weight-error-range', isNaN(estimatedWeight) || estimatedWeight < 100 || estimatedWeight > 2000);

   // 7. Project Type Validation
    var projectType = document.getElementById('project_type').value;
    displayError('project-type-error-required', projectType === '');

    // 8. Construction Type Validation
    var constructionType = document.getElementById('construction_type').value;
    displayError('construction-type-error-required', constructionType === '');

    // 9. Community Project (just check length)
    var community = document.getElementById('community').value.trim();
    displayError('community-error-long', community.length > 255);

    // 10. Project Admins (just check length)
    var admins = document.getElementById('project_admins').value.trim();
    displayError('admins-error-long', admins.length > 255);

    // 11. Location Validation
    var location = document.getElementById('location_address').value.trim();
    displayError('location-error-required', location === '');

    // If all validations pass, submit the form
    if (isValid) {
        this.submit();
    } else {
        // Scroll to the first error message and center it in the viewport
        var firstError = document.querySelector('.form-field-error[style="display: block;"]');
        if (firstError) {
            firstError.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
            // Optionally, find the related input and focus it
            var relatedInput = firstError.closest('.form-item').querySelector('input, select, textarea');
            if (relatedInput) {
                relatedInput.focus();
            }
        }
    }
});




$(function() {
    let debounceTimer;
    $("#location_address").autocomplete({
        source: function(request, response) {
            $("#loading-spinner").show();
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                $.ajax({
                    url: "https://nominatim.openstreetmap.org/search",
                    dataType: "json",
                    headers: {
                        'User-Agent': 'ecobricks.org'
                    },
                    data: {
                        q: request.term,
                        format: "json"
                    },
                    success: function(data) {
                        $("#loading-spinner").hide();
                        response($.map(data, function(item) {
                            return {
                                label: item.display_name,
                                value: item.display_name,
                                lat: item.lat,
                                lon: item.lon
                            };
                        }));
                    },
                    error: function(xhr, status, error) {
                        $("#loading-spinner").hide();
                        console.error("Autocomplete error:", error);
                        response([]);
                    }
                });
            }, 300);
        },
        select: function(event, ui) {
            $('#lat').val(ui.item.lat);
            $('#lon').val(ui.item.lon);
        },
        minLength: 3
    });

    $('#submit-form').on('submit', function() {
    // console.log('Location Full:', $('#location_address').val());
    // alert('Location Full: ' + $('#location_address').val()); 
});

});




//Autocomplete serials of ecobricks entered in form

$(document).ready(function() {
    var $serialInput = $('#connected_ecobricks');
    var $autocompleteResults = $('#autocomplete-results'); // Ensure this UL exists in your HTML
    var $serialSelect = $('#serial-select'); // Div that contains the autocomplete results

    function performSearch(inputVal) {
        if (inputVal.length >= 4) { // Ensure there are at least 4 characters to start search
            $.ajax({
                url: '../get-serials.php',
                type: 'GET',
                data: { search: inputVal },
                success: function(data) {
                    $autocompleteResults.empty();
                    if (data.length) {
                        data.forEach(function(item) {
                            $autocompleteResults.append($('<li>').text(item.serial_no));
                        });
                        $serialSelect.show(); // Show the suggestions box if there are results
                    } else {
                        $autocompleteResults.append($('<li>').text("No results found"));
                        $serialSelect.hide(); // Hide if no results
                    }
                }
            });
        } else {
            $autocompleteResults.empty();
            $serialSelect.hide(); // Hide suggestions if less than 4 characters
        }
    }

    $serialInput.on('input', function() {
        var currentValue = $(this).val();
        var lastTerm = currentValue.split(',').pop().trim(); // Get the last term after a comma
        performSearch(lastTerm);
    });

    $autocompleteResults.on('click', 'li', function() {
        var selectedSerial = $(this).text();
        var currentInput = $serialInput.val();
        var lastCommaIndex = currentInput.lastIndexOf(',');

        if (lastCommaIndex === -1) {
            // This is the first serial number entry
            $serialInput.val(selectedSerial + ', ');
        } else {
            // Replace the last term after the last comma with the selected serial number
            var base = currentInput.substring(0, lastCommaIndex + 1);
            $serialInput.val(base + ' ' + selectedSerial + ', ');
        }
        
        $autocompleteResults.empty();
        $serialInput.focus(); // Set focus back to input for further entries
        $serialSelect.hide(); // Hide the autocomplete suggestions box after selection
    });

    // Optionally hide the autocomplete box when the input loses focus
    $serialInput.blur(function() {
        setTimeout(function() { // Timeout to allow click event on suggestions to occur
            $serialSelect.hide();
        }, 200);
    });
});


</script>





<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2025.php");?>

</div>


</body>
</html>
