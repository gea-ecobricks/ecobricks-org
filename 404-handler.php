
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the original request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Extract the language directory from the request URI
preg_match('/^\/(en|fr|id|es)\//', $request_uri, $matches);
$language_dir = isset($matches[1]) ? $matches[1] : 'en'; // Default to English if no language directory found

// Redirect the user to the appropriate language directory's 404 page
header("Location: /$language_dir/404.php");
exit;
?>
