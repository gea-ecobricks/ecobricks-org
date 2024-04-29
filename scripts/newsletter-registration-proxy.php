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

// Split API Key into ID and Secret
$apiKey = '662e2789d27acf008a250c99:cd1a8de113c3e3d984c6926727b2a7c1ed671b425f616119b3b37a377254634a';
list($id, $secret) = explode(':', $apiKey);

// Prepare the header and payload
$header = json_encode(['typ' => 'JWT', 'alg' => 'HS256', 'kid' => $id]);
$now = time();
$payload = json_encode([
    'iat' => $now,
    'exp' => $now + 300, // Token valid for 5 minutes
    'aud' => '/v3/admin/' // Adjusted audience to match the error message suggestion
]);

// Base64Url Encode function
function base64UrlEncode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

// Encode Header and Payload
$base64UrlHeader = base64UrlEncode($header);
$base64UrlPayload = base64UrlEncode($payload);

// Create the Signature
$signature = hash_hmac('sha256', $base64UrlHeader . '.' . $base64UrlPayload, hex2bin($secret), true);
$base64UrlSignature = base64UrlEncode($signature);

// Create JWT
$jwt = $base64UrlHeader . '.' . $base64UrlPayload . '.' . $base64UrlSignature;

// Specify the URL of your Ghost Admin API
$ghostApiUrl = 'https://earthen.io/ghost/api/v3/admin/members/';

// Collect POST data from the incoming request
$data = file_get_contents('php://input');

// Set up the cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ghostApiUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Ghost ' . $jwt,
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the cURL session
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    error_log('Curl error: ' . curl_error($ch));
}

if ($httpcode >= 200 && $httpcode < 300) {
    echo $response;
} else {
    error_log('HTTP status ' . $httpcode . ': ' . $response);
    header('HTTP/1.1 ' . $httpcode);
    echo $response;
}

curl_close($ch);
?>
