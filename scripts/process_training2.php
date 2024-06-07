
<?php
// PART 1 of the code
// process_training2.php

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

// PART 2: Data Retrieval and Database Insertion

if (isset($data['records']) && count($data['records']) > 0) {
    $success = true;
    $errors = [];

    foreach ($data['records'] as $record) {
        if (isset($record['field_1361']) && $record['field_1361'] == $training_id) {
            $record_found = true;
    
            // Extract the necessary data from the Knack payload
            $training_id = $record['field_1361'] ?? '';
            $training_title = $record['field_1084'] ?? '';
            $training_date = $record['field_1085'] ?? '';
            $no_participants = $record['field_1091'] ?? '';
            $lead_trainer = isset($record['field_1093_raw'][0]['identifier']) ? $record['field_1093_raw'][0]['identifier'] : '';
    
            $training_photo0_main = isset($record['field_1327_raw']['url']) ? $record['field_1327_raw']['url'] : '';
            $training_type = $record['field_1087'] ?? '';
            $briks_made = $record['field_1896'] ?? '';
            $est_plastic_packed = $record['field_1897'] ?? '';
            
            $training_location = isset($record['field_1124_raw'][0]['identifier']) ? $record['field_1124_raw'][0]['identifier'] : '';
            $training_country = isset($record['field_1114_raw']) && is_array($record['field_1114_raw']) && !empty($record['field_1114_raw']) ? $record['field_1114_raw'][0]['identifier'] : '';
            $training_summary = $record['field_1362'] ?? '';
            $training_agenda = $record['field_1376'] ?? '';
            $training_success = $record['field_1377'] ?? '';
            $training_challenges = $record['field_1378'] ?? '';
            $training_lessons_learned = $record['field_1379'] ?? '';
            $training_photo1_main = isset($record['field_1328_raw']['url']) ? $record['field_1328_raw']['url'] : '';
            $training_photo2_main = isset($record['field_1329_raw']['url']) ? $record['field_1329_raw']['url'] : '';
            $training_photo3_main = isset($record['field_2179_raw']['url']) ? $record['field_2179_raw']['url'] : '';
            $training_photo4_main = isset($record['field_2178_raw']['url']) ? $record['field_2178_raw']['url'] : '';
            $training_photo5_main = isset($record['field_2180_raw']['url']) ? $record['field_2180_raw']['url'] : '';
            $training_photo6_main = isset($record['field_2181_raw']['url']) ? $record['field_2181_raw']['url'] : '';
      

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
                $stmt = $conn->prepare("INSERT INTO tb_trainings (training_id, training_title, training_date, no_participants, lead_trainer, training_photo0_main, training_photo1_main, training_photo2_main, training_photo3_main, training_photo4_main, training_photo5_main, training_photo6_main, training_type, briks_made, est_plastic_packed, location_full, training_summary, training_agenda, training_success, training_challenges, training_lessons_learned) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                if ($stmt === false) {
                    die("<script>alert('Prepare failed: " . htmlspecialchars($conn->error) . "');</script>");
                }
                $stmt->bind_param("sssssssssssssssssssss", $training_id, $training_title, $training_date, $no_participants, $lead_trainer, $training_photo0_main, $training_photo1_main, $training_photo2_main, $training_photo3_main, $training_photo4_main, $training_photo5_main, $training_photo6_main, $training_type, $briks_made, $est_plastic_packed, $location_full, $training_summary, $training_agenda, $training_success, $training_challenges, $training_lessons_learned);

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
            break;
        }
    }

    if (!$record_found) {
        echo "<script>alert('No records found for the given Training ID.');</script>";
    } elseif (!$success) {
        echo "<script>alert('Error: " . implode(", ", $errors) . "');</script>";
    }
} else {
    echo "<script>alert('No records found in the Knack database.');</script>";
}



// PART 3: Image Processing
$error_message = '';
$full_urls = [];
$thumbnail_paths = [];
$main_file_sizes = [];
$thumbnail_file_sizes = [];

include '../project-photo-functions.php';

$upload_dir = '../trainings/photos/';
$thumbnail_dir = '../trainings/tmbs/';

$db_fields = [];
$db_values = [];
$db_types = "";

// List of training photo URLs
$training_photos = [
    $training_photo0_main,
    $training_photo1_main,
    $training_photo2_main,
    $training_photo3_main,
    $training_photo4_main,
    $training_photo5_main,
    $training_photo6_main
];

echo "<script>console.log('Starting image processing');</script>";

for ($i = 0; $i < 7; $i++) {
    $photo_url = $training_photos[$i];
    echo "<script>console.log('Processing photo $i: $photo_url');</script>";

    if (!empty($photo_url)) {
        $file_extension = strtolower(pathinfo($photo_url, PATHINFO_EXTENSION));
        $new_file_name_webp = 'training-' . $training_id . '-' . $i . '.webp';
        $targetPath = $upload_dir . $new_file_name_webp;

        // Encode the URL to handle special characters
        $encoded_url = str_replace(' ', '%20', $photo_url);

        // Download the image using cURL
        $ch = curl_init($encoded_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL certificate verification (useful for testing)
        $img = curl_exec($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);

        if ($img !== false) {
            echo "<script>console.log('Image $i downloaded successfully');</script>";
            $bytes_written = @file_put_contents($targetPath, $img);
            if ($bytes_written !== false) {
                $kb_written = $bytes_written / 1024;
                echo "<script>console.log('Image $i saved successfully, {$kb_written} KB written to {$targetPath}');</script>";

                if (resizeAndConvertTrainingToWebP($targetPath, $targetPath, 1020, 88)) {
                    // Create thumbnail with height 200px while maintaining aspect ratio
                    if (createTrainingThumbnail($targetPath, $thumbnail_dir . $new_file_name_webp, 200, 77)) {
                        echo "<script>console.log('Image $i resized and thumbnail created');</script>";
                        $full_urls[] = $targetPath;
                        $thumbnail_paths[] = $thumbnail_dir . $new_file_name_webp;
                        $main_file_sizes[] = filesize($targetPath) / 1024;
                        $thumbnail_file_sizes[] = filesize($thumbnail_dir . $new_file_name_webp) / 1024;

                        array_push($db_fields, "training_photo" . $i . "_main", "training_photo" . $i . "_tmb");
                        array_push($db_values, $targetPath, $thumbnail_dir . $new_file_name_webp);
                        $db_types .= "ss";
                    } else {
                        $error_message .= "Failed to create thumbnail for image $i.<br>";
                        echo "<script>console.log('Failed to create thumbnail for image $i');</script>";
                    }
                } else {
                    $error_message .= "Error processing training image $i. Please try again.<br>";
                    echo "<script>console.log('Error processing training image $i');</script>";
                }
            } else {
                $error_message .= "Failed to save image $i to $targetPath.<br>";
                echo "<script>console.log('Failed to save image $i to $targetPath. Error: " . error_get_last()['message'] . "');</script>";
            }
        } else {
            $error_message .= "Failed to download image from URL: $photo_url.<br>";
            echo "<script>console.log('Failed to download image $i from URL: $photo_url. Error: $curl_error');</script>";
        }
    } else {
        echo "<script>console.log('No URL provided for image $i');</script>";
    }
}


error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!empty($db_fields) && empty($error_message)) {
    echo "<script>console.log('Updating database with new image data');</script>";

    array_push($db_fields, "ready_to_show", "training_logged");
    array_push($db_values, 1, date("Y-m-d H:i:s"));
    $db_types .= "is";

    $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
    $update_sql = "UPDATE tb_trainings SET {$fields_for_update} WHERE training_id = ?";
    $db_values[] = $training_id;
    $db_types .= "s";

    echo "<script>console.log('SQL Query: " . addslashes($update_sql) . "');</script>";
    echo "<script>console.log('Values: " . json_encode($db_values) . "');</script>";
    echo "<script>console.log('Types: " . addslashes($db_types) . "');</script>";

    // Check if the connection is still alive
    echo "<script>console.log('Checking database connection');</script>";
    if ($conn->ping()) {
        echo "<script>console.log('Database connection is alive');</script>";
    } else {
        echo "<script>console.log('Database connection is not alive, attempting to reconnect');</script>";
        $conn->close();
        // Re-establish the database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection again
        if ($conn->connect_error) {
            die("<script>alert('Reconnection failed: " . $conn->connect_error . "');</script>");
        } else {
            echo "<script>console.log('Reconnected to the database');</script>";
        }
    }

    $update_stmt = $conn->prepare($update_sql);
    if ($update_stmt === false) {
        echo "<script>console.log('Prepare failed: " . addslashes($conn->error) . "');</script>";
        die("Prepare failed: " . $conn->error);
    }
    $update_stmt->bind_param($db_types, ...$db_values);

    if (!$update_stmt->execute()) {
        $error_message .= "Database update failed: " . $update_stmt->error;
        echo "<script>console.log('Database update failed: " . addslashes($update_stmt->error) . "');</script>";
    } else {
        echo "<script>console.log('Database updated successfully');</script>";
    }
    $update_stmt->close();
}

if (!empty($error_message)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
    exit;
} else {
    echo "<script>alert('Images processed and database updated successfully.'); window.location.href='training.php?training_id=$training_id';</script>";
    exit;
}


?>

