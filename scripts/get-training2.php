<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';
error_reporting(E_ALL);
ini_set('display_errors', 1);?>
<?php $version='2.12';?>
<?php $page='project';?>
<html>
<head>
    <title>Retrieve Training from GoBrik</title>
</head>
<body>
    <h1>Retrieve Training from GoBrik</h1>
    <h4>Enter the training ID number your GoBrik posted workshop (see you trainer dashboard and list of completed training).  This tool will fetch the information from GoBrik and post your training to the Ecobricks.org main page gallery.  It will also generate a feature page for your training.</h4>
    <form method="POST" action="process_training3.php">
        <label for="training_id">Training ID:</label>
        <input type="text" id="training_id" name="training_id" required>
        <input type="submit" value="Retrieve">
    </form>
    <p>Note, this tool is still in development.  10% of training transfers are failing and we still can't figure out why!</p>
</body>
</html>