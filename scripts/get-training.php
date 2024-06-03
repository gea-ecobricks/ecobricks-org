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
    <title>Retrieve Training Information v1</title>
</head>
<body>
    <h1>Retrieve Training Information</h1>
    <form method="POST" action="process_training.php">
        <label for="training_id">Training ID:</label>
        <input type="text" id="training_id" name="training_id" required>
        <input type="submit" value="Retrieve">
    </form>
</body>
</html>