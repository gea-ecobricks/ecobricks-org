<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$projectId = $_GET['project_id'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_projects WHERE project_id = " . $projectId;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo '<title>Project '. $array["project_id"] .' | '. $array["name"] .' in '. $array["location_full"] .'.</title>';

   
        echo '<meta property="og:type" content="article" />
        <meta property="og:site_name" content="Ecobricks.org" />
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" />
        <meta property="article:modified_time" content="'. $array["date_logged_ts"] .'" />
        <meta property="og:image:type" content="image/png" />
        <meta name="author" content="Global Ecobrick Alliance" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="15 minutes" /> ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>No Ecobrick Found | Ecobricks.org</title>';
    echo '<meta name="description" content="No data found for this ecobrick serial number.  Most likely this is because the brikchain data is still in migration."> ';
}
$conn->close();

?>