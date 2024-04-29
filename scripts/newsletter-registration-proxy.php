<?php
// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: https://book.earthen.io');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json');

// Respond to preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');
    exit(0);
}

// Specify the URL of your Ghost Admin API
$ghostApiUrl = 'https://earthen.io/ghost/api/v3/admin/members/';

// Your Ghost Admin API Key
$apiKey = '662e2789d27acf008a250c99:cd1a8de113c3e3d984c6926727b2a7c1ed671b425f616119b3b37a377254634a'; // Ensure this is correct

// Collect POST data from the incoming request
$data = file_get_contents('php://input');

// Log the incoming data for debugging
error_log('Received data: ' . $data);

// Set up the cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ghostApiUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Ghost ' . $apiKey, // Corrected usage of the API key
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the cURL session
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    // Log cURL errors if any
    error_log('Curl error: ' . curl_error($ch));
}

if ($httpcode >= 200 && $httpcode < 300) {
    echo $response;
} else {
    // Log error details from the API if the response is not successful
    error_log('HTTP status ' . $httpcode . ': ' . $response);
    header('HTTP/1.1 ' . $httpcode);
    echo $response;
}

curl_close($ch);
?>