<?php
//PART 1 of the code
// process_training.php


include '../ecobricks_env.php';

// Knack API settings
$api_key = "360aa2b0-af19-11e8-bd38-41d9fc3da0cf";
$app_id = "5b8c28c2a1152679c209ce0c";
$training_id = $_POST['training_id'];

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "');</script>");
}

// Prepare filters
$filters = [
    'match' => 'and',
    'rules' => [
        [
            'field' => 'field_1361',
            'operator' => 'is',
            'value' => $training_id
        ]
    ]
];

// Prepare the API request to retrieve multiple training records
$url = "https://api.knack.com/v1/objects/object_48/records?filters=" . urlencode(json_encode($filters));

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "X-Knack-Application-Id: $app_id",
    "X-Knack-REST-API-Key: $api_key"
]);

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if ($response === false) {
    $error = curl_error($ch);
    echo "<script>alert('Error fetching data from Knack API: " . addslashes($error) . "');</script>";
    curl_close($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Add console logging to confirm API access and response
echo "<script>console.log('Knack API Request URL: " . addslashes($url) . "');</script>";
echo "<script>console.log('Knack API Response: " . addslashes($response) . "');</script>";

$data = json_decode($response, true);

$record_found = false;
$record_details = "";



// PART 2

$data = json_decode($response, true);

$record_found = false;
$record_details = "";

// Check if records were retrieved
if (isset($data['records']) && count($data['records']) > 0) {
    $success = true;
    $errors = [];

    foreach ($data['records'] as $record) {
        if (isset($record['field_1361']) && $record['field_1361'] == $training_id) {
            $record_found = true;
            // Extract the necessary data from the Knack payload
            $training_id = $record['field_1361'];
            $training_title = $record['field_1084'];
            $training_logged = $record['field_1085'];
            $no_participants = $record['field_1091'];
            $lead_trainer = is_array($record['field_1093_raw']) ? $record['field_1093_raw'][0]['identifier'] : null;
            $training_photo0_main = isset($record['field_1327_raw']) ? $record['field_1327_raw']['url'] : null;
            $training_type = $record['field_1087'];
            $briks_made = $record['field_1896'];
            $est_plastic_packed = $record['field_1897'];
            $location_full = is_array($record['field_1114_raw']) ? $record['field_1114_raw'][0]['identifier'] : null;
            $training_summary = $record['field_1362'];
            $training_agenda = $record['field_1376'];
            $training_success = $record['field_1377'];
            $training_challenges = $record['field_1378'];
            $training_lessons_learned = $record['field_1379'];

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO tb_trainings (training_id, training_title, training_logged, no_participants, lead_trainer, training_photo0_main, training_type, briks_made, est_plastic_packed, location_full, training_summary, training_agenda, training_success, training_challenges, training_lessons_learned) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            if ($stmt === false) {
                die("<script>alert('Prepare failed: " . htmlspecialchars($conn->error) . "');</script>");
            }
            $stmt->bind_param("sssssssssssssss", $training_id, $training_title, $training_logged, $no_participants, $lead_trainer, $training_photo0_main, $training_type, $briks_made, $est_plastic_packed, $location_full, $training_summary, $training_agenda, $training_success, $training_challenges, $training_lessons_learned);

            // Execute statement
            if (!$stmt->execute()) {
                $success = false;
                $errors[] = "Execute failed: " . htmlspecialchars($stmt->error);
            }
            
            // Close the statement
            $stmt->close();

            // Collect record details for displaying in HTML
            $record_details = "
                <p><img src='$training_photo0_main' alt='Training Photo' style='max-width: 450px;' /></p>
                <p>Training ID: $training_id</p>
                <p>Training Title: $training_title</p>
                <p>Training Logged: $training_logged</p>
                <p>Number of Participants: $no_participants</p>
                <p>Lead Trainer: $lead_trainer</p>
                <p>Training Type: $training_type</p>
                <p>Briks Made: $briks_made</p>
                <p>Estimated Plastic Packed: $est_plastic_packed</p>
                <p>Location: $location_full</p>
                <p>Training Summary: $training_summary</p>
                <p>Training Agenda: $training_agenda</p>
                <p>Training Success: $training_success</p>
                <p>Training Challenges: $training_challenges</p>
                <p>Training Lessons Learned: $training_lessons_learned</p>
            ";
            break;
        }
    }

    if ($record_found) {
        if ($success) {
            echo "<script>alert('Record added successfully.');</script>";
        } else {
            echo "<script>alert('Error: " . implode(", ", $errors) . "');</script>";
        }
    } else {
        echo "<script>alert('No records found for the given Training ID.');</script>";
    }
} else {
    echo "<script>alert('No records found in the Knack database.');</script>";
}



//PART 3
// Close the database connection
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