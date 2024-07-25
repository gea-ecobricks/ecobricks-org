
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ᐉ Ecobricker Migration to GoBrik 3.0</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ddd;
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

<p>The ecobrick migration is complete!  Thank you for your help.  Now we're migrating ecobrickers to our new GoBrik 3.0 server.  The first part of this is updating our ecobricks with their ecobricker record IDs.  To help keep this window open and let it run on your computer.  Thank you!</p>

<div id="ecobrick-being-processed">

    <div id="ecobricks-processed-gallery">



       <?php
//PART 1 show latest transfers

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

// SQL query to fetch the latest 18 authenticated ecobricks whose maker_id is not '000000000000000000000000'
$query = "SELECT serial_no, ecobrick_thumb_photo_url FROM tb_ecobricks
          WHERE status = 'authenticated' AND maker_id != '000000000000000000000000'
          ORDER BY ecobrick_unique_id ASC
          LIMIT 6";

$result = $conn->query($query);
?>

<body>
<h1>Latest Ecobrick+Maker Records Processed...</h1>
<div class="gallery">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $serial_no = $row['serial_no'];
            $thumb_url = $row['ecobrick_thumb_photo_url'];
            echo "<a href='https://ecobricks.org/en/details-ecobrick-page.php?serial_no=$serial_no' target='_blank'>
                    <img src='$thumb_url' alt='Ecobrick $serial_no' title='Ecobrick $serial_no'>
                  </a>";
        }
    } else {
        echo "<p>No ecobricks found.</p>";
    }
    ?>
</div>
</body>



        <?php
        $conn->close();
        ?>
    </div>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Process Ecobrick</title>
    <style>
        .button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
// PART 2 of the code
// Go to knack database and get ecobrick to extract maker ID from.

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

// Prepare filters to get records with the transfer status field field_2526 set to "No" and field_534 containing "Authenticated"
$filters = [
    'match' => 'and',
    'rules' => [
        [
            'field' => 'field_2526',
            'operator' => 'is not',
            'value' => 'Yes'
        ],
        [
            'field' => 'field_534',
            'operator' => 'contains',
            'value' => 'Authenticated'
        ]
    ]
];

// Prepare the API request to retrieve ecobrick record...
$url = "https://api.knack.com/v1/objects/object_2/records?filters=" . urlencode(json_encode($filters)) . "&sort_field=field_73&sort_order=desc&rows_per_page=1";

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
echo "<h3>Starting to retrieve ecobrick data</h3>";

// Close cURL session
curl_close($ch);

// Add console logging to confirm API access and response
echo "<script>console.log('Knack API Request URL: " . addslashes($url) . "');</script>";
echo "<script>console.log('Knack API Response: " . addslashes($response) . "');</script>";

$data = json_decode($response, true);

$record_found = false;
$record_details = "";

// Retrieval section:
if (isset($data['records']) && count($data['records']) > 0) {
    $record = $data['records'][0];
    $ecobrick_unique_id = $record['field_73'];
    $knack_record_id = $record['id'];  // Assuming the record ID is stored in 'id'
    $record_found = true;
    $record_details = $record;

    // Extract the maker_record_id from field_335
    $maker_record_id = "";
    if (isset($record['field_335_raw'][0]['id'])) {
        $maker_record_id = $record['field_335_raw'][0]['id'];
    }

    // Displaying the serial number and message
    echo "<h3>Now processing ecobrick $ecobrick_unique_id ...</h3>";
    echo "<p>Maker record ID was retrieved! $maker_record_id</p>";

    // Update field_2526 to 'Yes'
    $update_data = [
        'field_2526' => 'Yes'
    ];

    $update_url = "https://api.knack.com/v1/objects/object_2/records/$knack_record_id";

    $ch_update = curl_init($update_url);
    curl_setopt($ch_update, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch_update, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch_update, CURLOPT_HTTPHEADER, [
        "X-Knack-Application-ID: $app_id",
        "X-Knack-REST-API-Key: $api_key",
        "Content-Type: application/json"
    ]);
    curl_setopt($ch_update, CURLOPT_POSTFIELDS, json_encode($update_data));

    $update_response = curl_exec($ch_update);

    // Check for cURL errors during the update
    if ($update_response === false) {
        $error = curl_error($ch_update);
        echo "<p>Error updating Knack record: " . addslashes($error) . "</p>";
    } else {
        echo "<p>Successfully updated Knack record with field_2526 set to 'Yes'.</p>";
    }

    curl_close($ch_update);

} else {
    echo "<p>No ecobrick records found with the provided criteria.</p>";
}
?>


<?php
// PART 3 of the code
// Connect to the MySQL database and update the ecobrick record
echo "<p>Contacting Brikchain server...</p>";

$servername = "localhost";
$username = "ecobricks_brikchain_viewer";
$password = "desperate-like-the-Dawn";
$dbname = "ecobricks_gobrik_msql_db";

// Create connection to the database
$conn2 = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn2->connect_error) {
    die("<script>confirm('Connection failed: " . $conn2->connect_error . ". Do you want to proceed to the next ecobrick?'); window.location.href = 'process_ecobricks.php';</script>");
}
echo "<p>Connected to Brikchain database...</p>";

// Update the ecobrick record
$sql_update_ecobrick = "UPDATE tb_ecobricks SET maker_id = ? WHERE serial_no = ?";

$stmt_update_ecobrick = $conn2->prepare($sql_update_ecobrick);
if ($stmt_update_ecobrick) {
    $stmt_update_ecobrick->bind_param("ss", $maker_record_id, $ecobrick_unique_id);

    if ($stmt_update_ecobrick->execute()) {
        echo "<p>Successfully updated ecobrick with serial number $ecobrick_unique_id. Maker ID set to $maker_record_id.</p>";
    } else {
        echo "<p>Error updating ecobrick: " . $stmt_update_ecobrick->error . "</p>";
    }
    $stmt_update_ecobrick->close();
} else {
    echo "<p>Error preparing statement: " . $conn2->error . "</p>";
}

$conn2->close();



echo "<div class='message'>Now closing databse session, an moving to next ecobrick...</div>";

echo "<script>window.location.href = 'process_ecobrick.php';</script>";

exit();
?>



</body>
</html>
