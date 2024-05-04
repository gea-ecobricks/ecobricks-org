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
    $construction_type = $_POST['construction_type'];
    $community = $_POST['community'] ?? '';
    $project_admins = $_POST['project_admins'] ?? '';
    $start_dt = $_POST['start_dt'];
    $briks_used = $_POST['briks_used'];
    $est_avg_brik_weight = $_POST['est_avg_brik_weight'];
    $latitude = (double)$_POST['latitude'];
    $longitude = (double)$_POST['longitude'];
    $connected_ecobricks = $_POST['connected_ecobricks'] ?? '';


    $sql = "INSERT INTO tb_projects (project_name, description_short, description_long, location_full, project_type, construction_type, community, project_admins, start_dt, briks_used, est_avg_brik_weight, location_lat, location_long, connected_ecobricks) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
if ($stmt = $conn->prepare($sql)) {
$stmt->bind_param("sssssssssiidds", $project_name, $description_short, $description_long, $location_full, $project_type, $construction_type, $community, $project_admins, $start_dt, $briks_used, $est_avg_brik_weight, $latitude, $longitude, $connected_ecobricks);
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
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.991';?>
<?php $page='ecojoiners';?>


<?php require_once ("../includes/add-project-inc.php");?>


<div class="splash-content-block"></div>
<div id="splash-bar"></div>

 <!-- PAGE CONTENT-->

 <div id="form-submission-box">
    <div class="form-container">
        <div class="step-graphic" style="width:fit-content;margin:auto;">
            <img src="../logos/ecojoiner-logo.svg" style="height:100pxpx;">
        </div>

        <div class="splash-form-content-block">  
            <div class="splash-box">
        
                <div class="splash-heading" data-lang-id="001-splash-title" style="text-align: center;">A whole new way to connect ecobricks.</div>
            </div>
            <!-- <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/building-methods.svg" style="width:65%" alt="There are many ways to build with ecobricks">
            </div> -->
        </div>

  
        <p data-lang-id="002-form-description" class="lead-page-paragraph">Remolded from locally-sourced, reclaimed-plastic, ecoJoiners enable ecobricks to be interconnected in a wide variety of ways.  Simple ecoJoiners (green) enable  vertices of any length.  Hex and penta hubs (red and pink)  enable lattices with the help of pupJoiners (orange).  All are held fast with sliders (yellow) that takes advantage of an ecobrick's slight compressibility to lock constructions rigidly in place-- all the while ensuring any construction can be easily taken apart and each piece can be used again and again.</p>




        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.2.1/build/spline-viewer.js"></script>

        <div id="viewer">
        <spline-viewer url="https://prod.spline.design/IHSMbi56bMqgyJxV/scene.splinecode"></spline-viewer></div>


        <p>A revolutionary system to construct versatile, practical and stunning geometric matrixes using bottles and reclaimed plastic.</p>
        


    </div>
</div>








<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>
