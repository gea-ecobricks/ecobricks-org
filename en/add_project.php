<?php

// Include necessary environment setup 
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Update your SQL statement to include the new fields
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, location_full, location_geo, project_type, construction_type, community, project_admins) 
            VALUES (?, ?, ?, ?, ?, ST_GeomFromText(?), ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Update to include the new fields in the binding. Note: The 's' in bind_param corresponds to the type of the bound variable (string in this case).
    $location_geo = "POINT(" . $_POST['latitude'] . " " . $_POST['longitude'] . ")";
    // The updated bind_param now includes 's' for the four new string parameters.
    $stmt->bind_param("ssssssssss", $name, $description, $start, $briks_used, $location_full, $location_geo, $project_type, $construction_type, $community, $project_admins);

    // Set parameters from the form, including the new fields
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $location_full = $_POST['location_full'];
    // New fields
    $project_type = $_POST['project_type'];
    $construction_type = $_POST['construction_type'];
    $community = $_POST['community'];
    $project_admins = $_POST['project_admins'];

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
