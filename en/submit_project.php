<?php include '../ecobricks_env.php';



// Prepare SQL statement
$sql = "INSERT INTO tb_projects (name, description, start, briks_required, briks_used, featured_img, tmb_featured_img, location_full) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssiisss", $name, $description, $start, $briks_required, $briks_used, $featured_img, $tmb_featured_img, $location_full);

// Set parameters and execute
$name = $_POST['name'];
$description = $_POST['description'];
$start = $_POST['start'];
$briks_required = $_POST['briks_required'];
$briks_used = $_POST['briks_used'];
$featured_img = $_POST['featured_img'];
$tmb_featured_img = $_POST['tmb_featured_img'];
$location_full = $_POST['location_full'];

if ($stmt->execute()) {
    echo "Project submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();
?>