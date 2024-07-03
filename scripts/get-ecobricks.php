<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    $lang = 'en';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $version = '1';
    $page = 'project';
    ?>
    <title>Retrieve Ecobrick from GoBrik</title>
</head>
<body>
<h1>Start Ecobrick Retrieval from GoBrik v1.0</h1>
<h4>This tool will fetch the information from GoBrik and post your ecobrick to the Ecobricks.org main page gallery. It will also generate a feature page for your ecobrick.</h4>
<form method="POST" action="process_ecobrick.php">
    <input type="submit" value="Start Retrieving and Storing">
</form>
<p>Note, this tool is still in development. 10% of ecobrick transfers are failing and we still can't figure out why!</p>
</body>
</html>

