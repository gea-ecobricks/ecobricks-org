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
<h1>Retrieve Ecobrick from GoBrik v1.0</h1>
<h4>Enter the Ecobrick ID number from your GoBrik account (see your dashboard and list of completed ecobricks). This tool will fetch the information from GoBrik and post your ecobrick to the Ecobricks.org main page gallery. It will also generate a feature page for your ecobrick.</h4>
<form method="POST" action="process_ecobrick.php">
    <label for="ecobrick_id">Ecobrick ID:</label>
    <input type="text" id="ecobrick_id" name="ecobrick_id" required>
    <input type="submit" value="Retrieve">
</form>
<p>Note, this tool is still in development. 10% of ecobrick transfers are failing and we still can't figure out why!</p>
</body>
</html>
