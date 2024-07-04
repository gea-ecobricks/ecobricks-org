<?php




ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to set serial number and ecobrick_unique_idsdfsfd
    function setSerialNumber($conn) {
        $query = "SELECT MAX(serial_no) as max_serial, MAX(ecobrick_unique_id) as max_unique_id FROM tb_ecobricks";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $max_serial = $row['max_serial'];
            $max_unique_id = $row['max_unique_id'];
            return [
                'serial_no' => $max_serial + 1,
                'ecobrick_unique_id' => $max_unique_id + 1
            ];
        } else {
            // Handle case where there are no records
            throw new Exception('No records found in the database.');
        }
    }

    try {
        // Set serial number and ecobrick ID
        $ids = setSerialNumber($conn);
        $serial_no = $ids['serial_no'];
        $ecobrick_unique_id = $ids['ecobrick_unique_id'];
        $brik_notes = "Directly logged on ecobricks.org";
        $date_published_ts = date("Y-m-d H:i:s");

        // Update SQL and binding to match the fields and values
        $sql = "INSERT INTO tb_ecobricks (
            ecobrick_unique_id, serial_no, brik_notes, date_published_ts
        ) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            error_log("Statement prepared successfully.");

            $stmt->bind_param("isss",
                $ecobrick_unique_id, $serial_no, $brik_notes, $date_published_ts
            );

            error_log("Parameters bound successfully.");

            if ($stmt->execute()) {
                error_log("Statement executed successfully.");

                $stmt->close();
                $conn->close();

                // Redirect to log-2.php with the correct ecobrick_unique_id
                echo "<script>window.location.href = 'log-2.php?id=" . $serial_no . "';</script>";
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
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
        echo "Error: " . $e->getMessage() . "<br>";
    }
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
                        <option value="200">250 ml</option>
                        <option value="250">250 ml</option>
                        <option value="300">300 ml</option>
                        <option value="330">330 ml</option>
                        <option value="350">350 ml</option>
                        <option value="360">360 ml</option>
                        <option value="380">380 ml</option>
                        <option value="400">400 ml</option>
                        <option value="450">450 ml</option>
                        <option value="500">500 ml</option>
                        <option value="525">525 ml</option>
                        <option value="550">550 ml</option>
                        <option value="600">600 ml</option>
                        <option value="650">650 ml</option>
                        <option value="700">700 ml</option>
                        <option value="750">750 ml</option>
                        <option value="800">800 ml</option>
                        <option value="900">900 ml</option>
                        <option value="1000">1000 ml</option>
                        <option value="1100">1100 ml</option>
                        <option value="1250">1250 ml</option>
                        <option value="1500">1500 ml</option>
                        <option value="1750">1750 ml</option>
                        <option value="2000">2000 ml</option>
                        <option value="2250">2250 ml</option>
                        <option value="3000">3000 ml</option>
                        <option value="3100">3100 ml</option>
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
                    <label for="brand_name" data-lang-id="007-brand_name">What brand of bottle is used for this ecobrick?</label><br>
                    <input type="text" id="brand_name" name="brand_name" aria-label="Brand of bottle" required>
                    <p class="form-caption" data-lang-id="007-weight-g-caption">Write the name of the bottle brand</p>
                    <!--ERRORS-->
                    <div id="brand-name-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="brand-name-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">This entry should be under 100 characters. All we need is the bottle brand name i.e. "Max Water".</div>
                    <div id="brand-name-error-invalid" class="form-field-error" data-lang-id="000-field-invalid-error">The entry contains invalid characters. Avoid quotes, slashes, and greater-than signs please.</div>
                </div>


                <div class="form-item">
                    <label for="bottom_color" data-lang-id="008-bottom-color">Bottom color of the Ecobrick:</label><br>
                    <select id="bottom_color" name="bottom_color" aria-label="Bottom Color" required>
                        <option value="" disabled selected>Select bottom color...</option>
                        <option value="No deliberate color set">No deliberate color set</option>
                        <option value="clear">Clear</option>
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="yellow">Yellow</option>
                        <option value="orange">Orange</option>
                        <option value="red">Red</option>
                        <option value="pink">Pink</option>
                        <option value="purple">Purple</option>
                        <option value="violet">Violet</option>
                        <option value="dark blue">Dark blue</option>
                        <option value="sky blue">Sky blue</option>
                        <option value="brown">Brown</option>
                        <option value="grey">Grey</option>
                        <option value="silver">Silver</option>
                        <option value="gold">Gold</option>
                        <option value="cigbrick beige">Cigbrick beige</option>
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
                    <p class="form-caption" data-lang-id="009-sequestration-type-caption">Please select the type of ecobrick. Learn more about <a href="#" onclick="showModalInfo('ocean')" class="underline-link">Ocean Ecobricks</a>, <a href="#" onclick="showModalInfo('cigbrick')" class="underline-link">Cigbricks</a> and <a href="#" onclick="showModalInfo('regular')" class="underline-link">Regular ecobricks</a>.</p>


                    <!--ERRORS-->
                    <div id="type-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="plastic_from" data-lang-id="010-plastic-from">Where is the plastic from?</label><br>
                    <select id="plastic_from" name="plastic_from" aria-label="Plastic From" required>
                        <option value="" disabled selected>Select plastic source...</option>
                        <option value="Home">Home</option>
                        <option value="Business">Business</option>
                        <option value="Community">Neighbourhood</option>
                        <option value="Factory">Factory</option>
                        <option value="Beach">Beach</option>
                        <option value="Ocean">Ocean</option>
                        <option value="River">River</option>
                        <option value="Forest">Forest</option>
                        <option value="Field">Field</option>
                    </select>
                    <p class="form-caption" data-lang-id="010-plastic-from-caption">Describe the source of the plastic.</p>

                    <!--ERRORS-->
                    <div id="plastic-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="location_full" data-lang-id="011-location-full">Where is this ecobrick based?</label><br>
                    <div class="input-container">
                        <input type="text" id="location_full" name="location_full" aria-label="Location Full" required style="padding-left:45px;">
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
                <input type="hidden" id="lat" name="latitude">
                <input type="hidden" id="lon" name="longitude">

            </form>


            <!--END OF FORM-->

        </div>
    </div>
</HTML>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>

    function showModalInfo(type) {
        const modal = document.getElementById('form-modal-message');
        const messageContainer = modal.querySelector('.modal-message');
        let content = '';

        switch(type) {
            case 'ocean':
                content = `
                <img src="../pngs/oceanecobrick.png" alt="Ocean Ecobrick Image">
                <h3>Ocean Ecobricks</h3>
                <p>The Ocean Ecobrick is a new class of ecobrick especially designed for plastics found on beaches, rivers and in the ocean. These plastics tend to be large, chunky, dirty, and wet and are not suited to make a regular ecobrick. The Ocean Ecobrick technique enables these plastics to be easily transformed into a practical, useful, and reusable building block.</p>
                <a class="module-btn" href="/ocean">Learn more</a>
            `;
                break;
            case 'cigbrick':
                content = `
                <img src="../pngs/cigbrickstandalone.png" alt="Cigbrick Image">
                <h3>Cigbricks</h3>
                <p>Cigbricks are a new class of ecobrick design to transform the habit of smoking and the acetate from the cigarette filter into a personal and environmental solution. Cigbricks are made exclusively from the packed acetate filters of cigarette butts (with the paper removed).</p>
                <a class="module-btn" href="/cigbricks">Learn more</a>
            `;
                break;
            case 'regular':
                content = `
                <img src="../pngs/justandecobrick.png" alt="Regular Ecobrick Image">
                <h3>Regular Ecobricks</h3>
                <p>An ecobrick is a PET bottle packed solid with used plastic to the standards of plastic sequestration in order to make a reusable building block. There are several types of ecobricks-- ocean ecobricks, cigbricks and normal ecobricks. A normal ecobrick is an uncut bottle packed solid with used plastic to a set density (between 0.33 and 0.7 g/ml) to make a reusable building block.</p>
                <a class="module-btn" href="what.php">Learn more</a>
            `;
                break;
            default:
                content = '<p>Invalid ecobrick type selected.</p>';
        }

        messageContainer.innerHTML = content;

        // Show the modal and update other page elements
        modal.style.display = 'flex';
        document.getElementById('page-content').classList.add('blurred');
        document.getElementById('footer-full').classList.add('blurred');
        document.body.classList.add('modal-open');
    }






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

        // 10. Brand Name Validation
        var brandName = document.getElementById('brand_name').value.trim();
        displayError('brand-name-error-required', brandName === '');
        displayError('brand-name-error-long', brandName.length > 100);
        displayError('brand-name-error-invalid', hasInvalidChars(brandName));

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
                console.log('Selected location:', ui.item); // Debugging line
                $('#lat').val(ui.item.lat);
                $('#lon').val(ui.item.lon);
            },
            minLength: 3
        });

        $('#submit-form').on('submit', function() {
            console.log('Latitude:', $('#lat').val());
            console.log('Longitude:', $('#lon').val());
            // alert('Latitude: ' + $('#lat').val() + ', Longitude: ' + $('#lon').val());
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
