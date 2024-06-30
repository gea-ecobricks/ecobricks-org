<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../project-photo-functions.php'; // Ensure this path is correct

    $location_full = trim($_POST['location_address'] ?? 'Default Location');
    $training_title = trim($_POST['training_title']);
    $lead_trainer = trim($_POST['lead_trainer']);
    $training_country = trim($_POST['training_country']);
    $training_date = trim($_POST['training_date']);
    $no_participants = trim($_POST['no_participants']);
    $trained_community = trim($_POST['trained_community'] ?? '');
    $training_type = trim($_POST['training_type']);
    $briks_made = trim($_POST['briks_made']);
    $avg_brik_weight = (int)$_POST['avg_brik_weight'] ?? NULL;
    $latitude = (double)$_POST['latitude'];
    $longitude = (double)$_POST['longitude'];
    // $connected_ecobricks = $_POST['connected_ecobricks'] ?? ''; // Commented out
    // $training_location = $_POST['training_location']; // Removed
    $training_summary = trim($_POST['training_summary']);
    $training_agenda = trim($_POST['training_agenda']);
    $training_success = trim($_POST['training_success']);
    $training_challenges = trim($_POST['training_challenges']);
    $training_lessons_learned = trim($_POST['training_lessons_learned']);

    // Debugging: Print out variables
    error_log("Training Title: $training_title");
    error_log("Lead Trainer: $lead_trainer");
    error_log("Training Country: $training_country");
    error_log("Training Date: $training_date");

    $sql = "INSERT INTO tb_trainings (training_title, lead_trainer, training_country, training_date, no_participants, trained_community, training_type, briks_made, avg_brik_weight, location_lat, location_long, location_full, training_summary, training_agenda, training_success, training_challenges, training_lessons_learned) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        error_log("Statement prepared successfully.");

        $stmt->bind_param("sssssissiiiddssss", $training_title, $lead_trainer, $training_country, $training_date, $no_participants, $trained_community, $training_type, $briks_made, $avg_brik_weight, $latitude, $longitude, $location_full, $training_summary, $training_agenda, $training_success, $training_challenges, $training_lessons_learned);

        if ($stmt->execute()) {
            error_log("Statement executed successfully.");

            $training_id = $conn->insert_id;

            // Reactivating the logic that updates the training_url
            $training_url = "https://ecobricks.org/en/training.php?id=" . $training_id;
            $update_url_sql = "UPDATE tb_trainings SET training_url = ? WHERE training_id = ?";

            if ($update_url_stmt = $conn->prepare($update_url_sql)) {
                error_log("Update URL statement prepared successfully.");

                $update_url_stmt->bind_param("si", $training_url, $training_id);

                if ($update_url_stmt->execute()) {
                    error_log("Update URL statement executed successfully.");
                } else {
                    error_log("Error executing update URL statement: " . $update_url_stmt->error);
                }

                $update_url_stmt->close();
            } else {
                error_log("Error preparing update URL statement: " . $conn->error);
            }

            $stmt->close();
            $conn->close();

            echo "<script>window.location.href = 'add-training-images.php?training_id=" . $training_id . "';</script>";
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
    <?php $version='2.03';?>
    <?php $page='add-training';?>

    <?php require_once ("../includes/add-training-inc.php");?>

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
                    <div class="splash-heading" data-lang-id="001-splash-title">Post a GEA Training</div>
                </div>
                <div class="splash-image" data-lang-id="003-splash-image-alt">
                    <img src="../svgs/shanti.svg" style="width:65%" alt="There are many ways to conduct training with ecobricks">
                </div>
            </div>

            <div class="lead-page-paragraph">
                <p data-lang-id="004-form-description">Share your ecobrick training with the world. Use this form to post your completed workshop onto ecobricks.org. Trainings will be featured on our main page and archived in our trainings database.</p>
            </div>
            <form id="submit-form" method="post" action="" enctype="multipart/form-data" novalidate>

                <div class="form-item" style="margin-top: 25px;">
                    <label for="training_title" data-lang-id="005-training-title">Training Title:</label><br>
                    <input type="text" id="training_title" name="training_title" aria-label="Training Title" title="Required. Max 255 characters." required>
                    <p class="form-caption" data-lang-id="005b-training-title-caption">Give a name or title to your training post. Avoid special characters.</p>

                    <!--ERRORS-->
                    <div id="title-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="title-error-long" class="form-field-error" data-lang-id="000-title-field-too-long-error">Your training title is too long. Max 50 characters.</div>
                    <div id="title-error-invalid" class="form-field-error" data-lang-id="005b-training-title-error">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs please.</div>
                </div>

                <div class="form-item">
                    <label for="training_date" data-lang-id="004-training-date">Training Date:</label><br>
                    <input type="date" id="training_date" name="training_date" aria-label="Training Date" required>
                    <p class="form-caption" data-lang-id="004-training-date-caption">Please provide the date of the training.</p>

                    <!--ERRORS-->
                    <div id="date-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="no_participants" data-lang-id="009-participants">Number of Participants:</label><br>
                    <input type="number" id="no_participants" name="no_participants" aria-label="Number of Participants" min="1" max="5000" required>
                    <p class="form-caption" data-lang-id="009-participants-caption">Please enter a number of participants between 1-5000.</p>
                    <!--ERRORS-->
                    <div id="participants-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="participants-error-range" class="form-field-error" data-lang-id="000-field-participants-number-error">A number (between 1 and 5000).</div>
                </div>

                <div class="form-item">
                    <label for="lead_trainer" data-lang-id="010-lead-trainer">Lead Trainer:</label><br>
                    <input type="text" id="lead_trainer" name="lead_trainer" aria-label="Lead Trainer" required>
                    <p class="form-caption" data-lang-id="010-lead-trainer-caption">Please provide the name of the lead trainer.</p>
                    <!--ERRORS-->
                    <div id="trainer-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="trained_community" data-lang-id="013-community">Trained Community:</label><br>
                    <input type="text" id="trained_community" name="trained_community" aria-label="Trained Community">
                    <p class="form-caption" data-lang-id="013-community-caption">Optional: Provide the name of the community trained.</p>
                    <!--ERRORS-->
                    <div id="community-error-long" class="form-field-error" data-lang-id="000-field-too-long-error">Entry is too long.</div>
                </div>

                <div class="form-item">
                    <label for="training_type" data-lang-id="011-training-type">What type of training was this?</label><br>
                    <select id="training_type" name="training_type" aria-label="Training Type" required>
                        <option value="" disabled="" selected="" data-lang-id="011-select">Select training type...</option>
                        <option value="Online Starter Workshop" data-lang-id="011-online-starter">Online Starter Workshop</option>
                        <option value="Local Starter Workshop" data-lang-id="012-local-starter">Local Starter Workshop</option>
                        <option value="Online Training of Trainers" data-lang-id="013-online-tot">Online Training of Trainers</option>
                        <option value="Local Training of Trainers" data-lang-id="014-local-tot">Local Training of Trainers</option>
                        <option value="Earth & Ecobrick Starter Workshop" data-lang-id="015-earth-starter">Earth & Ecobrick Starter Workshop</option>
                        <option value="Earth & Ecobrick Starter Training of Trainers" data-lang-id="016-earth-tot">Earth & Ecobrick Starter Training of Trainers</option>
                        <option value="Academic Lecture" data-lang-id="017-academic">Academic Lecture</option>
                        <option value="Official GEA Presentation" data-lang-id="018-offical-gea">Official GEA Presentation</option>

                        <option value="other" data-lang-id="011-other">Other</option>
                    </select>
                    <br><br>
                    <!--ERROR-->
                    <div id="type-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

                <div class="form-item">
                    <label for="briks_made" data-lang-id="009-briks-made">How many ecobricks were made during this training?</label><br>
                    <input type="number" id="briks_made" name="briks_made" aria-label="Bricks Made" min="1" max="5000" required>
                    <p class="form-caption" data-lang-id="009-briks-made-caption">Please enter a number of bricks made between 1-5000.</p>
                    <!--ERRORS-->
                    <div id="briks-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="briks-error-range" class="form-field-error" data-lang-id="000-field-brik-number-error">Just a number (between 1 and 5000).</div>
                </div>

<!--                <div class="form-item">-->
<!--                    <label for="connected_ecobricks">The serials of ecobricks used in your project:</label><br>-->
<!--                    <input type="text" id="connected_ecobricks" name="connected_ecobricks" aria-label="Connected Ecobricks" placeholder="Enter serials...">-->
<!--                    <div id="serial-select"><ul id="autocomplete-results" ></ul></div>-->
<!--                    <p class="form-caption">Optional: Enter the serial numbers of ecobricks connected to this project. Separate multiple serial numbers with commas.</p>-->
<!--                </div>-->

                <div class="form-item">
                    <label for="avg_brik_weight" data-lang-id="010-avg-brik-weight">What was the average weight of ecobricks made during this training in grams? (if no ecobricks were made, leave blank)</label><br>
                    <input type="number" id="avg_brik_weight" name="avg_brik_weight" aria-label="Average Brick Weight" min="100" max="2000">
                    <p class="form-caption" data-lang-id="010-avg-brik-weight-caption">Optional: Just a number (between 100 and 2000).</p>
                    <!--ERRORS-->
                    <div id="weight-error-range" class="form-field-error" data-lang-id="000-field-weight-number-error">Your estimated average brick weight (in grams) must be a number between 100 and 2000.</div>
                </div>

                <div class="form-item">
                    <label for="training_country" data-lang-id="011-training-country">In what country was this workshop held?:</label><br>
                    <input type="text" id="training_country" name="training_country" aria-label="Training Country" required>
                    <p class="form-caption" data-lang-id="011-training-country-caption">Please provide the country where the training was conducted.</p>
                    <!--ERRORS-->
                    <div id="country-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                </div>

<!--                <div class="form-item">-->
<!--                    <label for="training_location" data-lang-id="015-location">Training Location:</label><br>-->
<!--                    <input type="text" id="training_location" name="training_location" aria-label="Training Location" required>-->
<!--                    <p class="form-caption" data-lang-id="015-location-caption">Please provide the general location where the training was conducted.</p>-->
<!--
<!--                    <div id="location-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.  For online workshops, specify the country of the lead trainer.</div>-->
<!--                </div>-->

                <div class="form-item">
                    <label for="training_summary" data-lang-id="005-training-summary">Training Summary:</label><br>
                    <textarea id="training_summary" name="training_summary" aria-label="Training Summary" title="Required. Max 150 words" required></textarea>
                    <p class="form-caption" data-lang-id="005-training-summary-caption">Provide a summary of the training. Max 150 words. Avoid special characters.</p>

                    <!--ERRORS-->
                    <div id="summary-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="summary-error-long" class="form-field-error" data-lang-id="000-field-summary-too-long-error">Your training summary is too long. Max 255 characters.</div>
                    <div id="summary-error-invalid" class="form-field-error" data-lang-id="005b-training-summary-error">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs.</div>
                </div>

                <div class="form-item">
                    <label for="training_agenda" data-lang-id="005-training-agenda">Training Agenda:</label><br>
                    <textarea id="training_agenda" name="training_agenda" aria-label="Training Agenda" title="Optional. Max 150 words"></textarea>
                    <p class="form-caption" data-lang-id="005-training-agenda-caption">Optional: Please layout the agenda that your training followed. Max 1000 words.</p>

                    <!--ERRORS-->
                    <div id="agenda-error-long" class="form-field-error" data-lang-id="000-long-field-too-long-error">Your training agenda is too long. Maximum 2000 characters.</div>
                </div>

                <div class="form-item">
                    <label for="training_success" data-lang-id="005-training-success">Training Successes:</label><br>
                    <textarea id="training_success" name="training_success" aria-label="Training Successes" title="Required. Max 150 words" required></textarea>
                    <p class="form-caption" data-lang-id="005-training-success-caption">Share the successes of the training. Max 500 words. Avoid special characters.</p>

                    <!--ERRORS-->
                    <div id="success-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="success-error-long" class="form-field-error" data-lang-id="000-field-success-too-long-error">Your entry is too long. Max 2000 characters.</div>
                    <div id="success-error-invalid" class="form-field-error" data-lang-id="005b-training-success-error">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs.</div>
                </div>

                <div class="form-item">
                    <label for="training_challenges" data-lang-id="005-training-challenges">Training Challenges:</label><br>
                    <textarea id="training_challenges" name="training_challenges" aria-label="Training Challenges" title="Required. Max 150 words" required></textarea>
                    <p class="form-caption" data-lang-id="005-training-challenges-caption">Share the challenges you faced leading your training. Max 500 words. Avoid special characters.</p>

                    <!--ERRORS-->
                    <div id="challenges-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="challenges-error-long" class="form-field-error" data-lang-id="000-field-challenges-too-long-error">Your entry is too long. Max 1500 characters.</div>
                    <div id="challenges-error-invalid" class="form-field-error" data-lang-id="005b-training-challenges-error">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs.</div>
                </div>

                <div class="form-item">
                    <label for="training_lessons_learned" data-lang-id="005-training-lessons-learned">Lessons Learned:</label><br>
                    <textarea id="training_lessons_learned" name="training_lessons_learned" aria-label="Lessons Learned" title="Required. Max 150 words" required></textarea>
                    <p class="form-caption" data-lang-id="005-training-lessons-learned-caption">Share the lessons learned from leading your training. Max 1000 words. Avoid special characters.</p>

                    <!--ERRORS-->
                    <div id="lessons-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>
                    <div id="lessons-error-long" class="form-field-error" data-lang-id="000-field-lessons-too-long-error">Your lessons learned are too long. Max 3000 characters.</div>
                    <div id="lessons-error-invalid" class="form-field-error" data-lang-id="005b-training-lessons-error">Your entry contains invalid characters. Avoid quotes, slashes, and greater-than signs.</div>
                </div>

<!--                <div class="form-item">-->
<!--                    <label for="ready_to_show" data-lang-id="017-ready-to-show">Publish this training publically on ecobricks.org?</label><br>-->
<!--                    <input type="checkbox" id="ready_to_show" name="ready_to_show" aria-label="Ready to Show">-->
<!--                    <p class="form-caption" data-lang-id="017-ready-to-show-caption">Check if this training is ready to be shown to the public.  If so it will be posted on the training feed on ecobricks.org and in our archive of completed trainings.</p>-->
<!--                </div>-->

                <div class="form-item">
                    <label for="location_address" data-lang-id="015-location">If this was a local training, please let us know where it was locate.</label><br>
                    <div class="input-container">
                        <input type="text" id="location_address" name="location_address" aria-label="Training Location" placeholder="Start typing your town..." required>
                        <div id="loading-spinner" class="spinner" style="display: none;"></div>
                    </div>
                    <p class="form-caption" data-lang-id="016-location-caption">For privacy, please don't use the exact address. Choose the general neighbourhood or town. Training locations will be shown publicly.</p>

                    <!--ERRORS-->
<!--                    <div id="location-error-required" class="form-field-error" data-lang-id="000-field-required-error">This field is required.</div>-->
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


        //TOGGLE COMMUNITY OR PERSONAL PROJECT SORT FIELDS
        // document.addEventListener("DOMContentLoaded", function() {
        //     // Initially hide all additional fields
        //     const communityField = document.getElementById("trained_community").parentNode;
        //     const trainingTypeField = document.getElementById("training_type").parentNode;
        //     const trainingLocationField = document.getElementById("training_location").parentNode;
        //
        //     communityField.style.display = 'none';
        //     trainingTypeField.style.display = 'none';
        //     trainingLocationField.style.display = 'none';

            // Function to show or hide fields based on the dropdown selection
        //     function toggleFields() {
        //         var trainingSort = document.getElementById("training_sort").value;
        //
        //         // Reset visibility
        //         communityField.style.display = 'none';
        //         trainingTypeField.style.display = 'none';
        //         trainingLocationField.style.display = 'none';
        //
        //         if (trainingSort === "community") {
        //             communityField.style.display = '';
        //         } else if (trainingSort === "personal") {
        //             trainingTypeField.style.display = '';
        //         }
        //
        //         // Show connected ecobricks and project duration fields if a project sort is selected
        //         if (trainingSort === "community" || trainingSort === "personal") {
        //             trainingLocationField.style.display = '';
        //         }
        //
        //         // Dynamically adjust the max-height for the advanced box content
        //         const advancedBoxContent = document.querySelector('.advanced-box-content');
        //         advancedBoxContent.style.maxHeight = advancedBoxContent.scrollHeight + "px";
        //     }
        //
        //     // Add change event listener to the training sort dropdown
        //     document.getElementById("training_sort").addEventListener("change", toggleFields);
        // });

        // //SHOW HIDE THE ADVANCED BOX
        // function toggleAdvancedBox(event) {
        //     // Get the current advanced box based on the clicked header
        //     let currentAdvancedBox = event.currentTarget.parentElement;
        //
        //     // Assuming the element that will have the `aria-expanded` attribute is the header itself
        //     let header = currentAdvancedBox.querySelector('.advanced-box-header');
        //
        //     // Find the content and icon specific to this advanced box
        //     let content = currentAdvancedBox.querySelector('.advanced-box-content');
        //     let icon = currentAdvancedBox.querySelector('.advanced-open-icon');
        //
        //     // Check if the content is currently expanded or not
        //     let isExpanded = header.getAttribute('aria-expanded') === 'true';
        //
        //     if (!isExpanded) {
        //         content.style.maxHeight = content.scrollHeight + 'px'  //   Set to its full height
        //         icon.textContent = '−';  // switch to minus symbol for an open state
        //         header.setAttribute('aria-expanded', 'true'); // Update aria-expanded to true
        //     } else {
        //         content.style.maxHeight = '0px';  // Collapse it
        //         icon.textContent = '+';  // Set to plus symbol
        //         header.setAttribute('aria-expanded', 'false'); // Update aria-expanded to false
        //     }
        // }

        // Attach the function to all header div's click events
        // document.addEventListener("DOMContentLoaded", function() {
        //     let headers = document.querySelectorAll('.advanced-box-header');
        //     headers.forEach(header => {
        //         header.addEventListener('click', toggleAdvancedBox);
        //     });
        // });

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

            // 1. Training Title Validation
            var trainingTitle = document.getElementById('training_title').value.trim();
            displayError('title-error-required', trainingTitle === '');
            displayError('title-error-long', trainingTitle.length > 50);
            displayError('title-error-invalid', hasInvalidChars(trainingTitle));

            // 2. Training Date Validation
            var trainingDate = document.getElementById('training_date').value.trim();
            displayError('date-error-required', trainingDate === '');

            // // 3. Training Logged Validation
            // var trainingLogged = document.getElementById('training_logged').value.trim();
            // displayError('logged-error-required', trainingLogged === '');

            // 4. Number of Participants Validation
            var noParticipants = parseInt(document.getElementById('no_participants').value, 10);
            displayError('participants-error-range', isNaN(noParticipants) || noParticipants < 1 || noParticipants > 5000);

            // 5. Lead Trainer Validation
            var leadTrainer = document.getElementById('lead_trainer').value.trim();
            displayError('trainer-error-required', leadTrainer === '');

            // 6. Trained Community Validation (just check length)
            var trainedCommunity = document.getElementById('trained_community').value.trim();
            displayError('community-error-long', trainedCommunity.length > 255);

            // 7. Training Type Validation
            var trainingType = document.getElementById('training_type').value;
            displayError('type-error-required', trainingType === '');

            // 8. Bricks Made Validation
            var briksMade = parseInt(document.getElementById('briks_made').value, 10);
            displayError('briks-error-range', isNaN(briksMade) || briksMade < 1 || briksMade > 5000);

            // 9. Estimated Weight Validation
            var estimatedWeight = parseInt(document.getElementById('avg_brik_weight').value, 10);
            displayError('weight-error-range', isNaN(estimatedWeight) || estimatedWeight < 100 || estimatedWeight > 2000);

            // 10. Training Country Validation
            var trainingCountry = document.getElementById('training_country').value.trim();
            displayError('country-error-required', trainingCountry === '');

            // // 11. Training Location Validation
            // var trainingLocation = document.getElementById('training_location').value.trim();
            // displayError('location-error-required', trainingLocation === '');

            // 12. Training Summary Validation
            var trainingSummary = document.getElementById('training_summary').value.trim();
            displayError('summary-error-long', trainingSummary.length > 2000);
            displayError('summary-error-invalid', hasInvalidChars(trainingSummary));

            // 13. Training Agenda Validation
            var trainingAgenda = document.getElementById('training_agenda').value.trim();
            displayError('agenda-error-long', trainingAgenda.length > 2000);

            // 14. Training Success Validation
            var trainingSuccess = document.getElementById('training_success').value.trim();
            displayError('success-error-long', trainingSuccess.length > 2000);
            displayError('success-error-invalid', hasInvalidChars(trainingSuccess));

            // 15. Training Challenges Validation
            var trainingChallenges = document.getElementById('training_challenges').value.trim();
            displayError('challenges-error-long', trainingChallenges.length > 2000);
            displayError('challenges-error-invalid', hasInvalidChars(trainingChallenges));

            // 16. Lessons Learned Validation
            var trainingLessonsLearned = document.getElementById('training_lessons_learned').value.trim();
            displayError('lessons-error-long', trainingLessonsLearned.length > 2000);
            displayError('lessons-error-invalid', hasInvalidChars(trainingLessonsLearned));

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

        // Autocomplete serials of ecobricks entered in form
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
    <?php require_once ("../footer-2024.php");?>
    </div>

    </body>
</html>
