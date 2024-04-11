<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['project_id'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE project_id = " . $projectId;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<title>Project '. $array["project_id"] .' | '. $array["name"] .' in '. $array["location_full"] .'.</title>';

        echo '<meta name="description" content="' . $array["description"] .'">';


		echo '<meta name="keywords" content="ecobrick, serial '. $array["project_admin"] .', '. $array["construction_type"] .','. $array["project_type"] .', plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/en/project.php?project_id='. $array["project_id"] .'"/>' ;
        echo '<meta property="og:title"         content="Project '. $array["project_id"] .' | '. $array["est_total_weight"] .'kg of plastic sequestered by ecobrickers '. $array["project_admins"] .' in '. $array["location_full"] .'.">';
        echo '<meta property="og:description"   content="' . $array["description"] .'"/>';
        echo '<meta property="og:image"         content="'. $array["photo1_main"] .'"/>';
        echo '<meta property="og:image:alt"     content="A photo of our ecobrick project"/>';
        echo '<meta property="og:locale" content="en_GB" />';
        echo '<meta property="og:type"          content="website">';
 	   

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