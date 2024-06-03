<!DOCTYPE html>
<html>
<head>
    <title>Training Record Details</title>
</head>
<body>
    <h1>Training Record Details</h1>
    <?php
    if ($record_found) {
        echo $record_details;
    } else {
        echo "<p>No record details to display.</p>";
    }
    ?>
</body>
</html>