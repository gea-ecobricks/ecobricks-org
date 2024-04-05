<?php

// Include necessary environment setup 
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare SQL statement for inserting project details
    // Note: For the geo_location field, we're using ST_GeomFromText to convert the lat & lon into a POINT
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, location_full, location_geo) 
            VALUES (?, ?, ?, ?, ?, ST_GeomFromText(?))";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Because bind_param does not support binding a spatial POINT directly,
    // we construct a POINT from the latitude and longitude as a string.
    $location_geo = "POINT(" . $_POST['latitude'] . " " . $_POST['longitude'] . ")";
    
    // Bind parameters. The 'ssssss' string tells mysqli that there are 6 parameters and all are strings.
    $stmt->bind_param("ssssss", $name, $description, $start, $briks_used, $location_full, $location_geo);

    // Set parameters from the form
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $location_full = $_POST['location_full'];

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Get the last inserted project_id
        $project_id = $conn->insert_id;

        // Statement and connection closing
        $stmt->close();
        $conn->close();

        // Redirect to the next page with project_id as a query parameter
        echo "<script>window.location.href = 'upload-images.php?project_id=" . $project_id . "';</script>";
        exit();
    } else {
        // Handle errors
        $response_message = "Error: " . $sql . "<br>" . $conn->error;
        // Ideally, implement error handling or logging here
    }
}
?>
