<?php
// Auth gate for internal admin-only scripts under /scripts/ that write to the
// database (data migration/processing tools with no public UI entry point).
//
// Requires an admin_env.php file at the repo root (NOT committed, like
// ecobricks_env.php / gobrikconn_env.php) defining a secret token, using
// PHP's define() function with the constant name ADMIN_TOKEN and a long
// random string value.
//
// Pass it once as ?admin_token=... (or POST field admin_token); the session
// remembers it so the multi-step migration scripts can keep redirecting to
// each other without re-authenticating every request.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['gea_admin_authenticated'])) {
    $adminEnvPath = __DIR__ . '/../admin_env.php';

    if (!file_exists($adminEnvPath)) {
        if (!headers_sent()) {
            http_response_code(503);
        }
        die('Admin authentication is not configured on this server.');
    }

    require_once $adminEnvPath;

    $providedToken = (string) ($_POST['admin_token'] ?? $_GET['admin_token'] ?? '');

    if (!defined('ADMIN_TOKEN') || $providedToken === '' || !hash_equals(ADMIN_TOKEN, $providedToken)) {
        if (!headers_sent()) {
            http_response_code(403);
        }
        die('Forbidden: admin authentication required.');
    }

    $_SESSION['gea_admin_authenticated'] = true;
}
