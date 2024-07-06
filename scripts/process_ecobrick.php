
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latest Ecobrick Imports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            max-width: 150px;
            height: auto;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .gallery a {
            text-decoration: none;
        }

        .button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="control-buttons">
    <button class="button" onclick="stopProcessing()">Stop Processing</button>
    <button class="button" onclick="startProcessing()">Start Processing</button>
</div>

<script>
    function stopProcessing() {
        if (confirm('Are you sure you want to stop the processing?')) {
            window.location.href = 'process_ecobrick.php?action=stop';
        }
    }

    function startProcessing() {
        if (confirm('Are you sure you want to start the processing?')) {
            window.location.href = 'process_ecobrick.php?action=start';
        }
    }
</script>

<div id="ecobrick-being-processed">


    <div id="ecobricks-processed-gallery">



        <?php

        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        include '../ecobricks_env.php';
        $conn->set_charset("utf8mb4");

        // SQL query to fetch the latest 100 authenticated ecobricks
        $query = "SELECT serial_no, ecobrick_thumb_photo_url FROM tb_ecobricks 
          WHERE status = 'authenticated' 
          ORDER BY date_published_ts DESC 
          LIMIT 10";

        $result = $conn->query($query);
        ?>


        <body>

        <h1>Latest Ecobrick Imports</h1>
        <div class="gallery">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $serial_no = $row['serial_no'];
                    $thumb_url = $row['ecobrick_thumb_photo_url'];
                    echo "<a href='https://ecobricks.org/en/details-ecobrick-page.php?serial_no=$serial_no' target='_blank'>
                    <img src='$thumb_url' alt='Ecobrick $serial_no'>
                  </a>";
                }
            } else {
                echo "<p>No ecobricks found.</p>";
            }
            ?>
        </div>



        <?php
        $conn->close();
        ?>
    </div>

    <?php

    // PART 1 of the code
    // process_ecobricks.php  here we go
//    session_start();

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if ($action === 'stop') {
            $_SESSION['processing'] = false;
            echo "<script>alert('Processing has been stopped.');</script>";
        } elseif ($action === 'start') {
            $_SESSION['processing'] = true;
            echo "<script>alert('Processing has been started.');</script>";
        }
    }

    // Check if processing should continue
    if (isset($_SESSION['processing']) && $_SESSION['processing'] === false) {
        echo "<script>alert('Processing is currently stopped.');</script>";
        exit;
    }

    include '../ecobricks_env.php';

    // Knack API settings
    $api_key = "360aa2b0-af19-11e8-bd38-41d9fc3da0cf";
    $app_id = "5b8c28c2a1152679c209ce0c";

    // Create connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<script>confirm('Connection failed: " . $conn->connect_error . ". Do you want to proceed to the next ecobrick?'); window.location.href = 'process_ecobricks.php';</script>");
    }

    // Prepare filters to get records with field_2492 set to "No" and field_534 containing "Authenticated"
    $filters = [
        'match' => 'and',
        'rules' => [
            [
                'field' => 'field_2492',
                'operator' => 'is',
                'value' => 'No'
            ],
            [
                'field' => 'field_534',
                'operator' => 'contains',
                'value' => 'Authenticated'
            ]
        ]
    ];

    // Prepare the API request to retrieve multiple ecobrick records
    $url = "https://api.knack.com/v1/objects/object_2/records?filters=" . urlencode(json_encode($filters)) . "&sort_field=field_73&sort_order=asc&rows_per_page=1";

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
        echo "<script>confirm('Error fetching data from Knack API: " . addslashes($error) . ". Do you want to proceed to the next ecobrick?'); window.location.href = 'process_ecobricks.php';</script>";
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

    if (isset($data['records']) && count($data['records']) > 0) {
        $record = $data['records'][0];
        $ecobrick_unique_id = $record['field_73'];
        $knack_record_id = $record['id'];  // Assuming the record ID is stored in 'id'
        $record_found = true;
        $record_details = $record;

        // Displaying the serial number and message
        echo "<h3>Ecobrick with Serial $ecobrick_unique_id is next in line for processing</h3>";
        echo "<p>Retrieval has now begun...</p>";

        // Now, update the record to set field_2492 to 'Yes'
        $update_url = "https://api.knack.com/v1/objects/object_2/records/$knack_record_id";
        $update_data = json_encode(['field_2492' => 'Yes']);

        // Initialize cURL session for update
        $ch_update = curl_init($update_url);

        // Set cURL options for update
        curl_setopt($ch_update, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_update, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch_update, CURLOPT_POSTFIELDS, $update_data);
        curl_setopt($ch_update, CURLOPT_HTTPHEADER, [
            "X-Knack-Application-Id: $app_id",
            "X-Knack-REST-API-Key: $api_key",
            "Content-Type: application/json"
        ]);

        // Execute cURL request for update
        $update_response = curl_exec($ch_update);

        // Check for cURL errors in the update request
        if ($update_response === false) {
            $error = curl_error($ch_update);
            echo "<script>confirm('Error updating data in Knack API: " . addslashes($error) . ". Do you want to proceed to the next ecobrick?'); window.location.href = 'process_ecobricks.php';</script>";
            curl_close($ch_update);
            exit;
        }

        // Close cURL session for update
        curl_close($ch_update);

        // Add console logging to confirm update API access and response
        echo "<script>console.log('Knack API Update Request URL: " . addslashes($update_url) . "');</script>";
        echo "<script>console.log('Knack API Update Response: " . addslashes($update_response) . "');</script>";

        // Check update response
        $update_data = json_decode($update_response, true);
        if (isset($update_data['field_2492']) && $update_data['field_2492'] === 'Yes') {
            echo "<p>Field 2492 successfully updated to Yes.</p>";
        } else {
            echo "<p>Failed to update Field 2492 to Yes.</p>";
        }
    }



    // PART 2: Data Retrieval and Database Insertion

if (isset($data['records']) && count($data['records']) > 0) {
    $success = true;
    $errors = [];

    foreach ($data['records'] as $record) {
        if (isset($record['field_73']) && $record['field_73'] == $ecobrick_unique_id) { // Updated to use $ecobrick_unique_id
            $record_found = true;

            // Extract the necessary data from the Knack payload
            $ecobrick_unique_id = $record['field_73_raw'] ?? '';
            $serial_no = $record['field_73_raw'] ?? '';
            $owner = $record['field_277_raw'][0]['identifier'] ?? '';
            $ecobricker_maker = $record['field_335_raw'][0]['identifier'] ?? '';
            $ecobrick_full_photo_url = $record['field_37_raw']['url'] ?? '';
            $volume_ml = $record['field_148_raw'] ?? 0;
            $universal_volume_ml = $record['field_148_raw'] ?? 0;
            $weight_g = $record['field_12_raw'] ?? 0;
            $density = $record['field_95_raw'] ?? 0;
            $date_logged_ts = $record['field_72_raw']['iso_timestamp'] ?? '';
            $CO2_kg = $record['field_94_raw'] ?? 0;
            $sequestration_type = $record['field_530_raw'] ?? '';
            $last_validation_ts = $record['field_1002_raw']['iso_timestamp'] ?? '';
            $validator_1 = $record['field_644_raw'][0]['identifier'] ?? '';
            $validator_2 = $record['field_662_raw'][0]['identifier'] ?? '';
            $validator_3 = $record['field_663_raw'][0]['identifier'] ?? '';
            $validation_score_avg = $record['field_568_raw'] ?? 0;
//            $validation_score_avg = (isset($record['field_568_raw']) && $record['field_568_raw'] !== null && $record['field_568_raw'] != '0.00')
//                ? $record['field_568_raw']
//                : round($record['field_1435_raw'] ?? 0);


            $knack_record_id = $record['id'] ?? '';
            $final_validation_score = $record['field_1435_raw'] ?? 0;
            $vision = $record['field_562_raw'] ?? '';
            $last_ownership_change = $record['field_801_raw']['date'] ?? '';
            $non_registered_maker_name = $record['field_1620_raw'] ?? '';
            $actual_maker_name = strip_tags($record['field_1622_raw'] ?? '');
            $weight_authenticated_kg = $record['field_1410_raw'] ?? 0;
            $location_country = $record['field_340_raw'][0]['identifier'] ?? '';
            $location_region = $record['field_357_raw'][0]['identifier'] ?? '';
            $community_name = $record['field_234_raw'][0]['identifier'] ?? '';
            $brand_name = $record['field_1062_raw'] ?? '';
            $bottom_colour = $record['field_70_raw'] ?? '';
            $plastic_from = $record['field_329_raw'] ?? '';
            $photo_choice = $record['field_1064_raw'] ?? ''; // Add the new field
            $location_city = strip_tags($record['field_356_raw'][0]['identifier'] ?? '');
            $location_full = $record['field_1373_raw'] ?? '';
            $catalyst = $record['field_1611_raw'] ?? '';

            // Convert weight_authenticated_kg to float for arithmetic operations
            $weight_authenticated_kg = (float)$weight_authenticated_kg;

            // Calculate additional fields
            $ecobrick_brk_display_value = ($weight_authenticated_kg * 10) . " BRK";
            $ecobrick_dec_brk_val = number_format($weight_authenticated_kg * 10, 2, '.', '');
            $ecobrick_brk_amt = $weight_authenticated_kg * 10;
            $brik_notes = "PHP API transfer from Gobrik developed by R.Maier, July 2024";

            // Check if the ecobrick ID already exists in the database
            $check_stmt = $conn->prepare("SELECT ecobrick_unique_id FROM tb_ecobricks WHERE ecobrick_unique_id = ?");
            $check_stmt->bind_param("s", $ecobrick_unique_id);
            $check_stmt->execute();
            $check_stmt->store_result();

            if ($check_stmt->num_rows > 0) {

                $success = false;
                $errors[] = "A record with Ecobrick ID $ecobrick_unique_id already exists.";
            } else {
                // Prepare and bind
                $stmt = $conn->prepare("INSERT INTO tb_ecobricks (ecobrick_unique_id, serial_no, owner, ecobricker_maker, ecobrick_full_photo_url, volume_ml, universal_volume_ml, weight_g, density, date_logged_ts, CO2_kg, sequestration_type, last_validation_ts, validator_1, validator_2, validator_3, validation_score_avg, knack_record_id, final_validation_score, vision, last_ownership_change, non_registered_maker_name, actual_maker_name, weight_authenticated_kg, location_country, location_region, community_name, brand_name, bottom_colour, plastic_from, ecobrick_brk_display_value, ecobrick_dec_brk_val, ecobrick_brk_amt, photo_choice, location_city, location_full, catalyst, brik_notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                if ($stmt === false) {
                    echo "<script>if(confirm('Prepare failed: " . htmlspecialchars($conn->error) . ". Do you want to proceed to the next ecobrick?')) { window.location.href = 'process_ecobrick.php'; }</script>";
                }
                $stmt->bind_param("ssssssssssssssssssssssssssssssssssssss", $ecobrick_unique_id, $serial_no, $owner, $ecobricker_maker, $ecobrick_full_photo_url, $volume_ml, $universal_volume_ml, $weight_g, $density, $date_logged_ts, $CO2_kg, $sequestration_type, $last_validation_ts, $validator_1, $validator_2, $validator_3, $validation_score_avg, $knack_record_id, $final_validation_score, $vision, $last_ownership_change, $non_registered_maker_name, $actual_maker_name, $weight_authenticated_kg, $location_country, $location_region, $community_name, $brand_name, $bottom_colour, $plastic_from, $ecobrick_brk_display_value, $ecobrick_dec_brk_val, $ecobrick_brk_amt, $photo_choice, $location_city, $location_full, $catalyst, $brik_notes);

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
        echo "<script>if(confirm('No records found for the given Ecobrick ID. Do you want to proceed to the next ecobrick?')) { window.location.href = 'process_ecobrick.php'; }</script>";
    } elseif (!$success) {
        echo "<script>if(confirm('Error: " . implode(", ", $errors) . ". Do you want to proceed to the next ecobrick?')) { window.location.href = 'process_ecobrick.php'; }</script>";
    }
}





// PART 3: Image Processing
$error_message = '';
$full_urls = [];
$thumbnail_paths = [];
$main_file_sizes = [];
$thumbnail_file_sizes = [];

include '../project-photo-functions.php';

$upload_dir = '../briks/';
$thumbnail_dir = '../briks/thumbnails/';

$db_fields = [];
$db_values = [];
$db_types = "";

// Main ecobrick photo URL
$ecobrick_photo_url = $ecobrick_full_photo_url;

echo "<div class='message'>Starting image processing</div>";
ob_flush(); flush();

if (!empty($ecobrick_photo_url)) {
    $file_extension = strtolower(pathinfo($ecobrick_photo_url, PATHINFO_EXTENSION));
    $new_file_name_webp = 'ecobrick-' . $serial_no . '-file.webp';
    $thumbnail_file_name_webp = 'tn-ecobrick-' . $serial_no . '-file.webp';
    $targetPath = $upload_dir . $new_file_name_webp;
    $thumbnailPath = $thumbnail_dir . $thumbnail_file_name_webp;

    // Encode the URL to handle special characters
    $encoded_url = str_replace(' ', '%20', $ecobrick_photo_url);

    // Download the image using cURL
    $ch = curl_init($encoded_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL certificate verification (useful for testing)
    $img = curl_exec($ch);
    $curl_error = curl_error($ch);
    curl_close($ch);

    if ($img !== false) {
        echo "<div class='message'>Image downloaded successfully</div>";
        ob_flush(); flush();
        $bytes_written = @file_put_contents($targetPath, $img);
        if ($bytes_written !== false) {
            $kb_written = $bytes_written / 1024;
            echo "<div class='message'>Image saved successfully, {$kb_written} KB written to {$targetPath}</div>";
            ob_flush(); flush();

            if (resizeAndConvertToWebP($targetPath, $targetPath, 1020, 77)) {
                // Create thumbnail with height 200px while maintaining aspect ratio
                if (createTrainingThumbnail($targetPath, $thumbnailPath, 150, 66)) {
                    echo "<div class='message'>Image resized and thumbnail created</div>";
                    ob_flush(); flush();
                    $full_urls[] = $targetPath;
                    $thumbnail_paths[] = $thumbnailPath;
                    $main_file_sizes[] = filesize($targetPath) / 1024;
                    $thumbnail_file_sizes[] = filesize($thumbnailPath) / 1024;
                    $uniqueThumbnailPath = $thumbnailPath . '?t=' . time();
                    array_push($db_fields, "ecobrick_full_photo_url", "ecobrick_thumb_photo_url");
                    array_push($db_values, $targetPath, $thumbnailPath);
                    $db_types .= "ss";
//                    echo "<div class='message'>Main image:<br><img src='{$targetPath}' width='500px'></div>";
                    echo "<div class='message'>Thumbnail image:<br><img src='{$uniqueThumbnailPath}' width='500px' alt='Thumbnail'></div>";

                    echo "<script>console.log('Thumbnail Path: " . addslashes($uniqueThumbnailPath) . "');</script>";
                } else {
                    $error_message .= "Failed to create thumbnail for image.<br>";
                    echo "<div class='alert'>Failed to create thumbnail for image</div>";
                    ob_flush(); flush();
                }
            } else {
                $error_message .= "Error processing ecobrick image. Please try again.<br>";
                echo "<div class='alert'>Error processing ecobrick image</div>";
                ob_flush(); flush();
            }
        } else {
            $error_message .= "Failed to save image to $targetPath.<br>";
            echo "<div class='alert'>Failed to save image to $targetPath. Error: " . error_get_last()['message'] . "</div>";
            ob_flush(); flush();
        }
    } else {
        $error_message .= "Failed to download image from URL: $ecobrick_photo_url.<br>";
        echo "<div class='alert'>Failed to download image from URL: $ecobrick_photo_url. Error: $curl_error</div>";
        ob_flush(); flush();
    }
} else {
    echo "<div class='message'>No URL provided for image</div>";
    ob_flush(); flush();
}
// PART 4
echo "<div class='message'>Image processing complete</div>";

if (!empty($db_fields) && empty($error_message)) {
    echo "<script>console.log('Updating database with new image data');</script>";

    array_push($db_fields, "date_published_ts", "status");
    array_push($db_values, date("Y-m-d H:i:s"), "authenticated");
    $db_types .= "ss";

    $fields_for_update = implode(", ", array_map(function($field) { return "{$field} = ?"; }, $db_fields));
    $update_sql = "UPDATE tb_ecobricks SET {$fields_for_update} WHERE ecobrick_unique_id = ?";
    $db_values[] = $ecobrick_unique_id;
    $db_types .= "s";

    echo "<script>console.log('SQL Query: " . addslashes($update_sql) . "');</script>";
    echo "<script>console.log('Values: " . json_encode($db_values) . "');</script>";
    echo "<script>console.log('Types: " . addslashes($db_types) . "');</script>";

    // Check if the connection is still alive
    echo "<script>console.log('Checking database connection');</script>";
    if ($conn->ping()) {
        echo "<script>console.log('Database connection is alive sir!');</script>";
    } else {
        echo "<script>console.log('Database connection is not alive, attempting to reconnect');</script>";
        $conn->close();
        // Re-establish the database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection again
        if ($conn->connect_error) {
            echo "<script>if(confirm('Reconnection failed: " . addslashes($conn->connect_error) . ". Do you want to proceed to the next ecobrick?')) { window.location.href = 'process_ecobrick.php'; }</script>";
        } else {
            echo "<script>console.log('Reconnected to the database');</script>";
        }
    }

    echo "<div class='message'>Brikchain database updated with ecobrick details and photo</div>";

    $update_stmt = $conn->prepare($update_sql);
    if ($update_stmt === false) {
        echo "<script>console.log('Prepare failed: " . addslashes($conn->error) . "');</script>";
        echo "<script>if(confirm('Prepare failed: " . addslashes($conn->error) . ". Do you want to proceed to the next ecobrick?')) { window.location.href = 'process_ecobrick.php'; }</script>";
    } else {
        $update_stmt->bind_param($db_types, ...$db_values);

        if (!$update_stmt->execute()) {
            $error_message .= "Database update failed: " . $update_stmt->error;
            echo "<script>console.log('Database update failed: " . addslashes($update_stmt->error) . "');</script>";
            echo "<script>if(confirm('Database update failed: " . addslashes($update_stmt->error) . ". Do you want to proceed to the next ecobrick?')) { window.location.href = 'process_ecobrick.php'; }</script>";
        } else {
            echo "<script>console.log('Database updated successfully');</script>";
        }
        $update_stmt->close();
    }
}

if (!empty($error_message)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
    exit;
}
// PART 5: Updating Knack Record
//
//echo "<script>console.log('Updating Knack database to indicate ecobrick has been migrated.');</script>";
//$update_knack_url = "https://api.knack.com/v1/objects/object_2/records/" . $knack_record_id;
//$knack_update_data = json_encode(['field_2492' => 'Yes']);
//$knack_update_headers = [
//    "X-Knack-Application-Id: $app_id",
//    "X-Knack-REST-API-Key: $api_key",
//    "Content-Type: application/json"
//];
//
//$ch = curl_init($update_knack_url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//curl_setopt($ch, CURLOPT_POSTFIELDS, $knack_update_data);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $knack_update_headers);
//
//$knack_update_response = curl_exec($ch);
//
//if ($knack_update_response === false) {
//    echo "<script>console.log('Error updating Knack record: " . addslashes(curl_error($ch)) . "');</script>";
//} else {
//    echo "<script>console.log('Knack record updated successfully');</script>";
//    echo "<div class='message'>Knack original record updated so that it isn't processed again.</div>";
//}
//
//curl_close($ch);


echo "<div class='message'>Moving to next ecobrick...</div>";

echo "<script>window.location.href = 'process_ecobrick.php';</script>";

if (!empty($error_message)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => "An error has occurred: " . $error_message . " END"]);
    exit;
}
?>

</div>






</body>
</html>
