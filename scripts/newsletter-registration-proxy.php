<?php
// Enable error reporting for development
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Specify the URL of your Ghost Admin API
$ghostApiUrl = 'https://earthen.io/ghost/api/v3/admin/members/';

// Your Ghost Admin API Key
$apiKey = '662e2789d27acf008a250c99:cd1a8de113c3e3d984c6926727b2a7c1ed671b425f616119b3b37a377254634a';

// Collect POST data from the incoming request
$data = file_get_contents('php://input');

// Set up the cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ghostApiUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Ghost ' . base64_encode($apiKey),
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the cURL session
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Return the response to the JavaScript frontend
if ($httpcode >= 200 && $httpcode < 300) {
    // Success response
    header('Content-Type: application/json');
    echo $response;
} else {
    // Error handling
    header('HTTP/1.1 ' . $httpcode);
    echo $response;
}
