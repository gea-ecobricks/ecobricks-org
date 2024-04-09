<?php

// Include necessary environment setup 
include 'ecobricks_env.php';

include 'lang.php';


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

        // Redirect to the next page with project_id as a query parameter. Adjust the redirect path if necessary.
        echo "<script>window.location.href = '" . $lang . "/add-project-images.php?project_id=" . $project_id . "';</script>";
        exit();
    } else {
        // Handle errors
        $response_message = "Error: " . $sql . "<br>" . $conn->error;
        // Ideally, implement error handling or logging here
    }
}
?>