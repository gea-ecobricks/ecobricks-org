<?php
// carbon_check.php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Hardcoded URL to check
$target_url = 'https://ecobricks.org/en/index.php';
$encoded_url = urlencode($target_url);

// API endpoint
$api_url = "https://api.websitecarbon.com/b?url=$encoded_url";

// Initialize cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; CarbonCheckBot/1.0)");

// Execute cURL request
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_error = curl_error($ch);
curl_close($ch);

// Handle errors
if ($response === false || $httpcode >= 400) {
    http_response_code(502);
    echo json_encode([
        'error' => 'Failed to fetch data from Website Carbon API',
        'details' => $curl_error
    ]);
return;
}

// Success: Output API response
echo $response;
?>
