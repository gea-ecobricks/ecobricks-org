<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $ecobricker_maker = trim($_POST['ecobricker_maker']);
    $volume_ml = (int)trim($_POST['volume_ml']);
    $weight_g = (int)trim($_POST['weight_g']);
    $sequestration_type = trim($_POST['sequestration_type']);
    $plastic_from = trim($_POST['plastic_from']);
    $location_full = $_POST['location_address'] ?? 'Default Location';
    $latitude = (double)$_POST['latitude'];
    $longitude = (double)$_POST['longitude'];
    $community_name = trim($_POST['community_name']);
    $project_id = (int)trim($_POST['project_id']);
    $training_id = (int)trim($_POST['training_id']);

    // Background settings
    $owner = $ecobricker_maker;
    $status = "pending review";
    $universal_volume_ml = $volume_ml;
    $density = $weight_g / $volume_ml;
    $date_logged_ts = date("Y-m-d H:i:s");
    $CO2_kg = ($weight_g * 6.1) / 1000;
    $last_ownership_change = date("Y-m-d");
    $actual_maker_name = $ecobricker_maker;
    $ecobrick_id = 1; // Set to 1 for testing purposes
    $ecobrick_unique_id = 300000;
    $serial_no = 300000;

    $db_fields = [
        'ecobrick_id', 'ecobricker_maker', 'volume_ml', 'weight_g', 'sequestration_type',
        'plastic_from', 'location_full', 'community_name', 'project_id', 'training_id',
        'owner', 'status', 'universal_volume_ml', 'density', 'date_logged_ts', 'CO2_kg',
        'last_ownership_change', 'actual_maker_name', 'location_country', 'location_region',
        'location_city', 'location_lat', 'location_long', 'location_municipality',
        'ecobrick_unique_id', 'serial_no'
    ];

    $db_values = [
        $ecobrick_id, $ecobricker_maker, $volume_ml, $weight_g, $sequestration_type,
        $plastic_from, $location_full, $community_name, $project_id, $training_id,
        $owner, $status, $universal_volume_ml, $density, $date_logged_ts, $CO2_kg,
        $last_ownership_change, $actual_maker_name, 'Unknown Country', 'Unknown Region',
        'Unknown City', $latitude, $longitude, 'Unknown Municipality',
        $ecobrick_unique_id, $serial_no
    ];

    echo "Fields count: " . count($db_fields) . "<br>"; // should print 25
    echo "Values count: " . count($db_values) . "<br>"; // should print 25

    $sql = "INSERT INTO tb_ecobricks (" . implode(', ', $db_fields) . ") VALUES (" . str_repeat('?, ', count($db_fields) - 1) . "?)";

    if ($stmt = $conn->prepare($sql)) {
        error_log("Statement prepared successfully.");

        $stmt->bind_param("isiissssiisssdssdssssddsii", ...$db_values);

        error_log("Parameters bound successfully.");

        if ($stmt->execute()) {
            error_log("Statement executed successfully.");
            $ecobrick_id = $conn->insert_id;

            $stmt->close();
            $conn->close();

            // Redirect to log-2.php
            echo "<script>alert('Ecobrick added successfully.'); window.location.href = 'log-2.php?id=" . $ecobrick_id . "';</script>";
        } else {
            error_log("Error executing statement: " . $stmt->error);
            echo "Error: " . $stmt->error . "<br>";
        }

        if ($stmt) $stmt->close();
    } else {
        error_log("Prepare failed: " . $conn->error);
        echo "Prepare failed: " . $conn->error;
    }

    if ($conn) $conn->close();
}
?>





<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <META charset="UTF-8">
    <?php $lang='en';?>
    <?php $version='1';?>
    <?php $page='log';?>

    <?php require_once ("../includes/log-inc.php");?>

    <div class="splash-content-block"></div>
    <div id="splash-bar"></div>

    <!-- PAGE CONTENT-->

    <div id="form-submission-box">
        <div class="form-container">
            <div class="form-top-header" style="display:flex;flex-flow:row;">
                <div class="step-graphic" style="width:fit-content;margin:auto;margin-left:0px">
                    <img src="../svgs/step1-log-project.svg" style="height:25px;">
                </div>
                <div id="language-code" onclick="showLangSelector()" aria-label="Switch languages"><span data-lang-id="000-language-code">🌐 EN</span></div>
            </div>

            <div class="splash-form-content-block">
                <div class="splash-box">
                    <div class="splash-heading" data-lang-id="001-splash-title">Log an Ecobrick</div>
                </div>
                <div class="splash-image" data-lang-id="003-splash-image-alt">
                    <img src="../webp/eb-sky-400px.webp" style="width:65%" alt="There are many ways to make an ecobrick">
                </div>
            </div>

            <div class="lead-page-paragraph">
                <p data-lang-id="004-form-description">Share your ecobrick with the world. Use this form to log your ecobrick into our database.</p>
            </div>


            <!--LOG FORM-->

            <form id="submit-form" method="post" action="" enctype="multipart/form-data" novalidate>

                <div class="form-item" style="margin-top: 25px;">
                    <label for="ecobricker_maker" data-lang-id="005-ecobricker-maker">Who made this ecobrick?</label><br>
                    <input type="text" id="ecobricker_maker" name="ecobricker_maker" aria-label="Ecobricker Maker" title="Required. Max 255 characters." required>
                    <p class="form-caption" data-lang-id="005b-ecobricker-maker-caption">Provide the name of the ecobricker. Avoid special characters.</p>

                    <!--ERRORS-->
                    <div id="maker-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="maker-error-long" class="form-field-error" data-lang-id="000-maker-field-too-long-error">The name is too long. Max 255 characters.</div>
                    <div id="maker-error-invalid" class="form-field-error" data-lang-id="005b-maker-error">The entry contains invalid characters. Avoid quotes, slashes, and greater-than signs please.</div>
                </div>

                <div class="form-item">
                    <label for="volume_ml" data-lang-id="006-volume-ml">Volume of the Ecobrick (in milliliters):</label><br>
                    <select id="volume_ml" name="volume_ml" aria-label="Volume in Milliliters" required>
                        <option value="" disabled selected>Select volume...</option>
                        <option value="250">250 ml</option>
                        <option value="300">300 ml</option>
                        <option value="330">330 ml</option>
                        <option value="500">500 ml</option>
                        <option value="600">600 ml</option>
                        <option value="900">900 ml</option>
                        <option value="1000">1000 ml</option>
                        <option value="1500">1500 ml</option>
                        <option value="2000">2000 ml</option>
                        <option value="3000">3000 ml</option>
                        <option value="4000">4000 ml</option>
                        <option value="5000">5000 ml</option>
                        <option value="10000">10000 ml</option>
                    </select>
                    <p class="form-caption" data-lang-id="006-volume-ml-caption">Please provide the volume of the ecobrick in milliliters.</p>

                    <!--ERRORS-->
                    <div id="volume-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="weight_g" data-lang-id="007-weight-g">Weight of the Ecobrick (in grams):</label><br>
                    <input type="number" id="weight_g" name="weight_g" aria-label="Weight in Grams" min="1" required>
                    <p class="form-caption" data-lang-id="007-weight-g-caption">Please provide the weight of the ecobrick in grams.</p>

                    <!--ERRORS-->
                    <div id="weight-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="bottom_color" data-lang-id="008-bottom-color">Bottom color of the Ecobrick:</label><br>
                    <select id="bottom_color" name="bottom_color" aria-label="Bottom Color" required>
                        <option value="" disabled selected>Select bottom color...</option>
                        <option value="No deliberate color set">No deliberate color set</option>
                        <option value="clear">Clear</option>
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                        <option value="orange">Orange</option>
                        <option value="pink">Pink</option>
                        <option value="purple">Purple</option>
                        <option value="violet">Violet</option>
                        <option value="brown">Brown</option>
                        <option value="silver">Silver</option>
                        <option value="gold">Gold</option>
                    </select>
                    <p class="form-caption" data-lang-id="008-bottom-color-caption">Please select the bottom color of the ecobrick.</p>

                    <!--ERRORS-->
                    <div id="color-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="sequestration_type" data-lang-id="009-sequestration-type">What kind of ecobrick is this?</label><br>
                    <select id="sequestration_type" name="sequestration_type" aria-label="Sequestration Type" required>
                        <option value="" disabled selected>Select ecobrick type...</option>
                        <option value="Regular ecobrick">Regular ecobrick</option>
                        <option value="cigbrick">Cigbrick</option>
                        <option value="ocean ecobrick">Ocean ecobrick</option>
                    </select>
                    <p class="form-caption" data-lang-id="009-sequestration-type-caption">Please select the type of ecobrick.</p>

                    <!--ERRORS-->
                    <div id="type-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="plastic_from" data-lang-id="010-plastic-from">Where is the plastic from?</label><br>
                    <select id="plastic_from" name="plastic_from" aria-label="Plastic From" required>
                        <option value="" disabled selected>Select plastic source...</option>
                        <option value="Home">Home</option>
                        <option value="Business">Business</option>
                        <option value="Neighbourhood">Neighbourhood</option>
                        <option value="Beach">Beach</option>
                        <option value="Ocean">Ocean</option>
                        <option value="River">River</option>
                        <option value="Field">Field</option>
                    </select>
                    <p class="form-caption" data-lang-id="010-plastic-from-caption">Describe the source of the plastic.</p>

                    <!--ERRORS-->
                    <div id="plastic-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="location_full" data-lang-id="011-location-full">Where is this ecobrick based?</label><br>
                    <div class="input-container">
                        <input type="text" id="location_full" name="location_full" aria-label="Location Full" required style="padding-left:35px;">
                        <div id="loading-spinner" class="spinner" style="display: none;"></div>
                    </div>
                    <p class="form-caption" data-lang-id="011-location-full-caption">Provide the full location where the ecobrick is based.</p>

                    <!--ERRORS-->
                    <div id="location-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>



                <div class="advanced-box" aria-expanded="false" role="region" aria-labelledby="advancedBoxLabel-1">
                    <div class="advanced-box-header"  id="advancedBoxLabel-1">
                        <div class="advanced-title" data-lang-id="013-advanced-options">Advanced Options</div>
                        <div class="advanced-open-icon">+</div>
                    </div>
                    <div class="advanced-box-content">

                        <div class="form-item">
                            <label for="community_name" data-lang-id="012-community-name">Is this ecobrick part of a community initiative?</label><br>
                            <input type="text" id="community_name" name="community_name" aria-label="Community Name">
                            <p class="form-caption" data-lang-id="012-community-name-caption">Optional: Provide the name of the community initiative.</p>

                            <!--ERRORS-->
                            <div id="community-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>
                        </div>

                        <div class="form-item">
                            <label for="project_id" data-lang-id="014-project-id">Is this ecobrick part of a project?</label><br>
                            <input type="number" id="project_id" name="project_id" aria-label="Project ID">
                            <p class="form-caption" data-lang-id="014-project-id-caption">Optional: Provide the project ID if this ecobrick is part of a project.</p>

                            <!--ERRORS-->
                            <div id="project-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>
                        </div>

                        <div class="form-item">
                            <label for="training_id" data-lang-id="015-training-id">Was this ecobrick made in a training?</label><br>
                            <input type="number" id="training_id" name="training_id" aria-label="Training ID">
                            <p class="form-caption" data-lang-id="015-training-id-caption">Optional: Provide the training ID if this ecobrick was made in a training.</p>

                            <!--ERRORS-->
                            <div id="training-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>
                        </div>

                    </div>
                </div>

                <div data-lang-id="016-submit-button">
                    <input type="submit" value="Submit Ecobrick ➡️" aria-label="Submit Form">
                </div>

                <input type="hidden" id="location_country" name="location_country">
                <input type="hidden" id="location_region" name="location_region">
                <input type="hidden" id="location_city" name="location_city">
                <input type="hidden" id="location_municipality" name="location_municipality">
                <input type="hidden" id="latitude" name="latitude">
                <input type="hidden" id="longitude" name="longitude">

            </form>


            <!--END OF FORM-->

        </div>
    </div>
</HTML>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initially hide all additional fields using visibility and height
        const communityField = document.getElementById("community_name").parentNode;
        const projectField = document.getElementById("project_id").parentNode;
        const trainingField = document.getElementById("training_id").parentNode;

        communityField.style.visibility = 'hidden';
        communityField.style.height = '0';
        projectField.style.visibility = 'hidden';
        projectField.style.height = '0';
        trainingField.style.visibility = 'hidden';
        trainingField.style.height = '0';

        // SHOW HIDE THE ADVANCED BOX
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
                // Temporarily set visibility to calculate height
                communityField.style.visibility = 'visible';
                communityField.style.height = 'auto';
                projectField.style.visibility = 'visible';
                projectField.style.height = 'auto';
                trainingField.style.visibility = 'visible';
                trainingField.style.height = 'auto';

                content.style.maxHeight = content.scrollHeight + 'px'; // Set to its full height
                icon.textContent = '−'; // Switch to minus symbol for an open state
                header.setAttribute('aria-expanded', 'true'); // Update aria-expanded to true
            } else {
                content.style.maxHeight = '0px'; // Collapse it
                icon.textContent = '+'; // Set to plus symbol
                header.setAttribute('aria-expanded', 'false'); // Update aria-expanded to false

                communityField.style.visibility = 'hidden';
                communityField.style.height = '0';
                projectField.style.visibility = 'hidden';
                projectField.style.height = '0';
                trainingField.style.visibility = 'hidden';
                trainingField.style.height = '0';
            }
        }

        // Attach the function to all header div's click events
        let headers = document.querySelectorAll('.advanced-box-header');
        headers.forEach(header => {
            header.addEventListener('click', toggleAdvancedBox);
        });
    });


/* Location Setter */
    $(function() {
        let debounceTimer;
        $("#location_full").autocomplete({
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
                            format: "json",
                            addressdetails: 1 // Include address details in the response
                        },
                        success: function(data) {
                            $("#loading-spinner").hide();
                            response($.map(data, function(item) {
                                return {
                                    label: item.display_name,
                                    value: item.display_name,
                                    lat: item.lat,
                                    lon: item.lon,
                                    address: item.address // Include address details
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

                // Populate hidden fields with address details
                $('#location_country').val(ui.item.address.country || '');
                $('#location_region').val(ui.item.address.state || '');
                $('#location_city').val(ui.item.address.city || ui.item.address.town || '');
                $('#location_municipality').val(ui.item.address.village || ui.item.address.hamlet || '');
            },
            minLength: 3
        });

        $('#submit-form').on('submit', function() {
            console.log('Location Country:', $('#location_country').val());
            console.log('Location Region:', $('#location_region').val());
            console.log('Location City:', $('#location_city').val());
            console.log('Location Municipality:', $('#location_municipality').val());
            // Add any additional form validation or processing here
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

        // 1. Ecobricker Maker Validation
        var ecobrickerMaker = document.getElementById('ecobricker_maker').value.trim();
        displayError('maker-error-required', ecobrickerMaker === '');
        displayError('maker-error-long', ecobrickerMaker.length > 255);
        displayError('maker-error-invalid', hasInvalidChars(ecobrickerMaker));

        // 2. Volume (ml) Validation
        var volumeML = parseInt(document.getElementById('volume_ml').value, 10);
        displayError('volume-error-required', isNaN(volumeML) || volumeML < 1);

        // 3. Weight (g) Validation
        var weightG = parseInt(document.getElementById('weight_g').value, 10);
        displayError('weight-error-required', isNaN(weightG) || weightG < 1);

        // 4. Sequestration Type Validation
        var sequestrationType = document.getElementById('sequestration_type').value.trim();
        displayError('type-error-required', sequestrationType === '');

        // 5. Plastic From Validation
        var plasticFrom = document.getElementById('plastic_from').value.trim();
        displayError('plastic-error-required', plasticFrom === '');

        // 6. Location Full Validation
        var locationFull = document.getElementById('location_full').value.trim();
        displayError('location-error-required', locationFull === '');

        // 7. Community Name Validation (just check length)
        var communityName = document.getElementById('community_name').value.trim();
        displayError('community-error-long', communityName.length > 255);

        // 8. Project ID Validation (optional)
        var projectId = document.getElementById('project_id').value.trim();
        displayError('project-error-long', projectId !== '' && isNaN(parseInt(projectId, 10)));

        // 9. Training ID Validation (optional)
        var trainingId = document.getElementById('training_id').value.trim();
        displayError('training-error-long', trainingId !== '' && isNaN(parseInt(trainingId, 10)));

        // If all validations pass, submit the form
        if (isValid) {
            this.submit();
        } else {
            // Scroll to the first error message and center it in the viewport
            var firstError = document.querySelector('.form-field-error[style="display: block;"]');
            if (firstError) {
                firstError.scrollIntoView({ behavior: "smooth", block: "center", inline: "nearest" });
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
        $("#location_full").autocomplete({
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
            console.log('Location Full:', $('#location_full').val());
            alert('Location Full: ' + $('#location_full').val());
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
