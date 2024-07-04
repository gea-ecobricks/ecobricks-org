<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';
$conn->set_charset("utf8mb4");

// SQL query to fetch the latest 100 authenticated ecobricks
$query = "SELECT serial_no, ecobrick_thumb_photo_url FROM tb_ecobricks 
          WHERE status = 'authenticated' 
          ORDER BY date_published_ts DESC 
          LIMIT 100";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latest Ecobrick Imports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            max-width: 150px;
            height: auto;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .gallery a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<h1>Latest Ecobrick Imports</h1>
<div class="gallery">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $serial_no = $row['serial_no'];
            $thumb_url = $row['ecobrick_thumb_photo_url'];
            echo "<a href='https://ecobricks.org/en/details-ecobrick-page.php?serial_no=$serial_no' target='_blank'>
                    <img src='$thumb_url' alt='Ecobrick $serial_no'>
                  </a>";
        }
    } else {
        echo "<p>No ecobricks found.</p>";
    }
    ?>
</div>

</body>
</html>

<?php
$conn->close();
?>
