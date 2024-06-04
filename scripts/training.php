<?php
include '../ecobricks_env.php';

$training_id = $_GET['training_id'];

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
}

// PART 4: Show the Record Details

// Re-fetch the data to display updated results
$fetch_sql = "SELECT * FROM tb_trainings WHERE training_id = ?";
$fetch_stmt = $conn->prepare($fetch_sql);
$fetch_stmt->bind_param("s", $training_id);
$fetch_stmt->execute();
$result = $fetch_stmt->get_result();

if ($result->num_rows > 0) {
    $record = $result->fetch_assoc();

    // Extract the necessary data for display
    $training_title = $record['training_title'];
    $training_logged = $record['training_logged'];
    $no_participants = $record['no_participants'];
    $lead_trainer = $record['lead_trainer'];
    $training_photo0_main = $record['training_photo0_main'];
    $training_type = $record['training_type'];
    $briks_made = $record['briks_made'];
    $est_plastic_packed = $record['est_plastic_packed'];
    $location_full = $record['location_full'];
    $training_summary = $record['training_summary'];
    $training_agenda = $record['training_agenda'];
    $training_success = $record['training_success'];
    $training_challenges = $record['training_challenges'];
    $training_lessons_learned = $record['training_lessons_learned'];
    $training_photo1_main = $record['training_photo1_main'];
    $training_photo2_main = $record['training_photo2_main'];
    $training_photo3_main = $record['training_photo3_main'];
    $training_photo4_main = $record['training_photo4_main'];
    $training_photo5_main = $record['training_photo5_main'];
    $training_photo6_main = $record['training_photo6_main'];

    // Collect record details for displaying in HTML
    $record_details = "
        <p><img src='$training_photo0_main' alt='Feature Photo 0' style='max-width: 400px;' title='$training_photo0_main' /></p>
        <p><strong>Training ID:</strong> $training_id</p>
        <p><strong>Training Title:</strong> $training_title</p>
        <p><strong>Training Logged:</strong> $training_logged</p>
        <p><strong>Number of Participants:</strong> $no_participants</p>
        <p><strong>Lead Trainer:</strong> $lead_trainer</p>
        <p><strong>Training Type:</strong> $training_type</p>
        <p><strong>Briks Made:</strong> $briks_made</p>
        <p><strong>Estimated Plastic Packed:</strong> $est_plastic_packed</p>
        <p><strong>Location:</strong> $location_full</p>
        <p><strong>Training Summary:</strong> $training_summary</p>
        <p><strong>Training Agenda:</strong> $training_agenda</p>
        <p><strong>Training Success:</strong> $training_success</p>
        <p><strong>Training Challenges:</strong> $training_challenges</p>
        <p><strong>Training Lessons Learned:</strong> $training_lessons_learned</p>
        <p><img src='$training_photo1_main' alt='Feature Photo 1' style='max-width: 400px;' title='$training_photo1_main' /></p>
        <p><img src='$training_photo2_main' alt='Feature Photo 2' style='max-width: 400px;' title='$training_photo2_main' /></p>
        <p><img src='$training_photo3_main' alt='Feature Photo 3' style='max-width: 400px;' title='$training_photo3_main' /></p>
        <p><img src='$training_photo4_main' alt='Feature Photo 4' style='max-width: 400px;' title='$training_photo4_main' /></p>
        <p><img src='$training_photo5_main' alt='Feature Photo 5' style='max-width: 400px;' title='$training_photo5_main' /></p>
        <p><img src='$training_photo6_main' alt='Feature Photo 6' style='max-width: 400px;' title='$training_photo6_main' /></p>
        <form method='post' action='process_training.php'>
            <input type='hidden' name='training_id' value='$training_id'>
            <input type='hidden' name='action' value='delete_training'>
            <button type='submit'>Delete Training</button>
        </form>
    ";

    $record_found = true;
} else {
    $record_found = false;
    $record_details = "<p>No record details to display.</p>";
}

$fetch_stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Training Record Details</title>
</head>
<body>
    <h1>Training Record Details</h1>
    <?php
    if ($record_found) {
        echo $record_details;
    } else {
        echo "<p>No record details to display.</p>";
    }
    ?>
</body>
</html>