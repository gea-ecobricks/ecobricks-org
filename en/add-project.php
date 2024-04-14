<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';

$conn->set_charset("utf8mb4");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Log the received value of location_full to the PHP error log
    error_log('Received location_full: ' . (isset($_POST['location_full']) ? $_POST['location_full'] : 'Not set'));

    // Debugging: Output all POST data to error log to review what is being received
    error_log('POST data: ' . print_r($_POST, true));

    // Updated SQL statement without location_geo
    $sql = "INSERT INTO tb_projects (project_name, description_short, description_long, start_dt, briks_used, est_avg_brik_weight, location_full, location_lat, location_long, project_type, construction_type, community, project_admins) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssssdsddsssss", $project_name, $description_short, $description_long, $start_dt, $briks_used, $est_avg_brik_weight, $location_full, $latitude, $longitude, $project_type, $construction_type, $community, $project_admins);

    // Set parameters from the form
    $project_name = $_POST['project_name'];
    $description_short = $_POST['description_short'];
    $description_long = $_POST['description_long'];
    $start_dt = $_POST['start_dt'];
    $briks_used = $_POST['briks_used'];
    $est_avg_brik_weight = $_POST['est_avg_brik_weight'];
    $location_full = "Testing some text";
    $latitude = (double)$_POST['latitude'];
    $longitude = (double)$_POST['longitude'];
    $project_type = $_POST['project_type'];
    $construction_type = $_POST['construction_type'];
    $community = $_POST['community'];
    $project_admins = $_POST['project_admins'];

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Get the last inserted project_id
        $project_id = $conn->insert_id;

        // Update `date_logged_ts` to current date and time
        $current_datetime = date("Y-m-d H:i:s");
        $update_date_sql = "UPDATE tb_projects SET logged_ts = ? WHERE project_id = ?";
        $update_date_stmt = $conn->prepare($update_date_sql);
        $update_date_stmt->bind_param("si", $current_datetime, $project_id);
        $update_date_stmt->execute();
        $update_date_stmt->close();

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

        // Statement and connection closing
        $stmt->close();
        $conn->close();

        // Redirect to the next page with project_id as a query parameter
        echo "<script>window.location.href = 'add-project-images.php?project_id=" . $project_id . "';</script>";
        exit();
    } else {
        // Handle errors by displaying them
        echo "Error: " . $stmt->error . "<br>" . $conn->error;
        // Stop the script to avoid redirecting
    }
}
?>





<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.991';?>
<?php $page='add-project';?>




<?php require_once ("../includes/add-project-inc.php");?>


<div class="splash-content-block"></div>
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

  
        <p data-lang-id="002-form-description">Share your ecobrick project with the world. Use this form to post your completed ecobricks project onto ecobricks.org. Projects will be featured on our main page and archived in our database."</p>
         
        <form id="submit-form" method="post" action="" enctype="multipart/form-data">

            <div class="form-item" style="margin-top: 25px;">
                <label for="project_name" data-lang-id="003-project-name">Project Name:</label><br>
                <input type="text" id="project_name" name="project_name" aria-label="Project Name" title="Required. Max 255 characters." required>
                <p class="form-caption" data-lang-id="005-project-name-caption">Give a name or title to your project post.  Avoid apostrophes and other characters.</p>
                <span id="project_name_error" style="color: red;"></span>
            </div>
    
    <div class="form-item">
        <label for="description_short" data-lang-id="004-short-project-desc">Short project description:</label><br>
        <textarea id="description_short" name="description_short" aria-label="Project Description" title="Required. Max 150 words" required></textarea>
        <p class="form-caption" data-lang-id="004-short-project-desc-caption">Provide a one sentence description of this project. Max 150 words.  Avoid apostrophes and other characters.</p>
        <span id="description_short_error" style="color: red;"></span>
        
    </div>

    <div class="form-item">
        <label for="description_long" data-lang-id="005-long-project-desc">Full project description:</label><br>
        <textarea id="description_long" name="description_long" aria-label="Project Description" title="Required. Max 150 words" required></textarea>
        <p class="form-caption" data-lang-id="005-long-project-desc-caption">Take as much space as you need as share the full details of your project. Max 1000 words.</p>
    </div>
    
    <div class="form-item">
        <label for="start_dt" data-lang-id="007-start-date">Start Date:</label><br>
        <input type="date" id="start_dt" name="start_dt" aria-label="Start Date" required>
        <p class="form-caption" data-lang-id="008-start-date-caption">When did this project begin?</p>
    </div>
    
    <div class="form-item">
    <label for="briks_used" data-lang-id="009-bricks-used">Ecobricks Used:</label><br>
    <input type="number" id="briks_used" name="briks_used" aria-label="Bricks Used" min="1" max="5000" required>
    <p class="form-caption" data-lang-id="009-bricks-used-caption">How many ecobricks does your project use? Enter a number between 1-5000.</p>
    <span id="briks_used_error" style="color: red;"></span>
</div>

<div class="form-item">
    <label for="est_avg_brik_weight" data-lang-id="010-est-avg-weight">Please estimate the average weight of the ecobricks used in your project in grams?</label><br>
    <input type="number" id="est_avg_brik_weight" name="est_avg_brik_weight" aria-label="Estimate Brik Weight" min="100" max="2000" required>
    <p class="form-caption" data-lang-id="010-est-avg-weight-range">Must be a number between 100 and 2000.</p>
    <span id="est_avg_brik_weight_error" style="color: red;"></span>
</div>


    <div class="form-item">
        <label for="project_type" data-lang-id="011-project-type">What type of project is this?</label><br>
        <select id="project_type" name="project_type" aria-label="Project Type" required>
            <option value="" disabled="" selected="" data-lang-id="011-select">Select project type...  </option>
            <option value="single module" data-lang-id="011-single-module">Single Module</option>
            <option value="furniture" data-lang-id="011-modular-furniture">Furniture</option>
            <option value="garden" data-lang-id="011-outdoor-garden">Outdoor Garden</option>
            <option value="structure" data-lang-id="011-structure">Structure</option>
            <option value="art" data-lang-id="011-art">Art</option>

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
            <option value="earth" data-lang-id="012-construction-earth">Earth/Cob</option>

            <option value="installation" data-lang-id="012-construction-installation">Installation</option>

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
    <div class="input-container">
        <input type="text" id="location_full" name="location_full" aria-label="Project Location" placeholder="..." required>
        <div id="loading-spinner" class="spinner" style="display: none;"></div>
    </div>
    <p class="form-caption" data-lang-id="016-location-caption">For privacy, please don't use your exact address. Choose your general neighbourhood or town. Project locations will be shown on our project map.</p>
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

    
// Define the error messages for all languages
var errorMessages = {
    en: {
        briksUsed: "Please enter a non-decimal number between 1 and 5000 for briks used.",
        avgBrikWeight: "Please enter a non-decimal number between 100 and 2000 for the average weight.",
        projectName: "Project name contains invalid characters. Avoid quotes, slashes, and greater-than signs.",
        description: "Description contains invalid characters. Avoid quotes, slashes, and greater-than signs."
    },
    fr: {
        briksUsed: "Veuillez entrer un nombre entier entre 1 et 5000 pour les briques utilisées.",
        avgBrikWeight: "Veuillez entrer un nombre entier entre 100 et 2000 pour le poids moyen.",
        projectName: "Le nom du projet contient des caractères invalides. Évitez les guillemets, les barres obliques et les signes supérieurs.",
        description: "La description contient des caractères invalides. Évitez les guillemets, les barres obliques et les signes supérieurs."
    },
    es: {
        briksUsed: "Ingrese un número entero entre 1 y 5000 para los ladrillos utilizados.",
        avgBrikWeight: "Ingrese un número entero entre 100 y 2000 para el peso promedio.",
        projectName: "El nombre del proyecto contiene caracteres inválidos. Evite comillas, barras y signos de mayor que.",
        description: "La descripción contiene caracteres inválidos. Evite comillas, barras y signos de mayor que."
    },
    id: {
        briksUsed: "Masukkan angka bulat antara 1 dan 5000 untuk bata yang digunakan.",
        avgBrikWeight: "Masukkan angka bulat antara 100 dan 2000 untuk berat rata-rata.",
        projectName: "Nama proyek mengandung karakter yang tidak valid. Hindari tanda kutip, garis miring, dan tanda lebih besar.",
        description: "Deskripsi mengandung karakter yang tidak valid. Hindari tanda kutip, garis miring, dan tanda lebih besar."
    }
};

document.getElementById('submit-form').onsubmit = function(e) {
    var isValid = true;

    var briksUsed = document.getElementById('briks_used');
    var briksUsedError = document.getElementById('briks_used_error');
    var estAvgBrikWeight = document.getElementById('est_avg_brik_weight');
    var estAvgBrikWeightError = document.getElementById('est_avg_brik_weight_error');
    var projectName = document.getElementById('project_name');
    var projectNameError = document.getElementById('project_name_error');
    var descriptionShort = document.getElementById('description_short');
    var descriptionShortError = document.getElementById('description_short_error');

    var lang = window.currentLanguage || 'en'; // Default to English if currentLanguage is not set

    // Validate briks_used
    if (briksUsed.value < 1 || briksUsed.value > 5000 || briksUsed.value % 1 !== 0) {
        briksUsedError.textContent = errorMessages[lang].briksUsed;
        briksUsed.focus();
        isValid = false;
    } else {
        briksUsedError.textContent = "";
    }

    // Validate est_avg_brik_weight
    if (estAvgBrikWeight.value < 100 || estAvgBrikWeight.value > 2000 || estAvgBrikWeight.value % 1 !== 0) {
        estAvgBrikWeightError.textContent = errorMessages[lang].avgBrikWeight;
        estAvgBrikWeight.focus();
        isValid = false;
    } else {
        estAvgBrikWeightError.textContent = "";
    }

    // Validate project_name for invalid characters
    if (/['"\/\>]/.test(projectName.value)) {
        projectNameError.textContent = errorMessages[lang].projectName;
        projectName.focus();
        isValid = false;
    } else {
        projectNameError.textContent = "";
    }

    // Validate description_short for invalid characters
    if (/['"\/\>]/.test(descriptionShort.value)) {
        descriptionShortError.textContent = errorMessages[lang].description;
        descriptionShort.focus();
        isValid = false;
    } else {
        descriptionShortError.textContent = "";
    }

    if (!isValid) {
        e.preventDefault(); // Prevent form submission
    }
};



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
    console.log('Location Full:', $('#location_full').val()); // Correct way to log
    // alert('Location Full: ' + $('#location_full').val()); // Correct way to use alert
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
