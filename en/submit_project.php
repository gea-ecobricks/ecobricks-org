<?php

// Include necessary environment setup
include '../ecobricks_env.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prepare SQL statement
    $sql = "INSERT INTO tb_projects (name, description, start, briks_used, location_full) VALUES (?, ?, ?, ?, ?)";

    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $description, $start, $briks_used, $location_full);

    // Set parameters
    $name = $_POST['name'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $briks_used = $_POST['briks_used'];
    $location_full = $_POST['location_full'];

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Get the last inserted project_id
        $project_id = $conn->insert_id;
        $response_message = "Project $name has been submitted successfully. This is project number $project_id";
        
        // Close statement
        $stmt->close();
        
        // Close connection
        $conn->close();
        
        // Return response message to be displayed in modal
        echo "<script>
                setTimeout(function() {
                    document.getElementById('form-modal-message').style.display = 'block';
                    document.querySelector('.modal-message').innerHTML = 'Your project record is now setup. Now let\'s upload some images...';
                    setTimeout(function() {
                        window.location.href = 'upload-images.php?project_id=$project_id';
                    }, 2000); // 2 seconds delay
                }, 0);
              </script>";
    } else {
        $response_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}