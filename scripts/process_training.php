
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
            $training_id = isset($record['field_1361']) ? $record['field_1361'] : '';
            $training_title = isset($record['field_1084']) ? $record['field_1084'] : '';
            $training_logged = isset($record['field_1085']) ? $record['field_1085'] : '';
            $no_participants = isset($record['field_1091']) ? $record['field_1091'] : '';
            $lead_trainer = isset($record['field_1093_raw']) && is_array($record['field_1093_raw']) ? $record['field_1093_raw'][0]['identifier'] : '';
            $training_photo0_main = isset($record['field_1327_raw']) ? $record['field_1327_raw']['url'] : '';
            $training_type = isset($record['field_1087']) ? $record['field_1087'] : '';
            $briks_made = isset($record['field_1896']) ? $record['field_1896'] : '';
            $est_plastic_packed = isset($record['field_1897']) ? $record['field_1897'] : '';
            $location_full = isset($record['field_1114_raw']) && is_array($record['field_1114_raw']) ? $record['field_1114_raw'][0]['identifier'] : '';
            $training_summary = isset($record['field_1362']) ? $record['field_1362'] : '';
            $training_agenda = isset($record['field_1376']) ? $record['field_1376'] : '';
            $training_success = isset($record['field_1377']) ? $record['field_1377'] : '';
            $training_challenges = isset($record['field_1378']) ? $record['field_1378'] : '';
            $training_lessons_learned = isset($record['field_1379']) ? $record['field_1379'] : '';
            $training_photo1_main = isset($record['field_1328_raw']) ? $record['field_1328_raw']['url'] : '';
            $training_photo2_main = isset($record['field_1329_raw']) ? $record['field_1329_raw']['url'] : '';
            $training_photo3_main = isset($record['field_2179_raw']) ? $record['field_2179_raw']['url'] : '';
            $training_photo4_main = $record['field_2178_raw']['url'];
            $training_photo5_main = $record['field_2180_raw']['url'];
            $training_photo6_main = $record['field_2181_raw']['url'];

            // Check if the training ID already exists in the database
            $check_stmt = $conn->prepare("SELECT training_id FROM tb_trainings WHERE training_id = ?");
            $check_stmt->bind_param("s", $training_id);
            $check_stmt->execute();
            $check_stmt->store_result();
            
            if ($check_stmt->num_rows > 0) {
                $success = false;
                $errors[] = "A record with Training ID $training_id already exists.";
            } else {
                // Prepare and bind
                $stmt = $conn->prepare("INSERT INTO tb_trainings (training_id, training_title, training_logged, no_participants, lead_trainer, training_photo0_main, training_photo1_main, training_photo2_main, training_photo3_main, training_photo4_main, training_photo5_main, training_photo6_main, training_type, briks_made, est_plastic_packed, location_full, training_summary, training_agenda, training_success, training_challenges, training_lessons_learned) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                if ($stmt === false) {
                    die("<script>alert('Prepare failed: " . htmlspecialchars($conn->error) . "');</script>");
                }
                $stmt->bind_param("sssssssssssssssssssss", $training_id, $training_title, $training_logged, $no_participants, $lead_trainer, $training_photo0_main, $training_photo1_main, $training_photo2_main, $training_photo3_main, $training_photo4_main, $training_photo5_main, $training_photo6_main, $training_type, $briks_made, $est_plastic_packed, $location_full, $training_summary, $training_agenda, $training_success, $training_challenges, $training_lessons_learned);

                // Execute statement
                if (!$stmt->execute()) {
                    $success = false;
                    $errors[] = "Execute failed: " . htmlspecialchars($stmt->error);
                }
                
                // Close the statement
                $stmt->close();
            }
            
            // Close the check statement
            $check_stmt->close();

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