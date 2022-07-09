<?php

include 'db.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<meta name="title" content="Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .' of plastic secured by '. $array["owner"] .' in '. $array["location_country"] .'">';

		echo '<meta name="description" content="'. $array["vision"] .'">';
		echo '<meta name="keywords" content="plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration.">';

        echo '<meta property="og:url"           content="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:description"   content="The principles that guide the ecobrick plastic transition movement."/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="A metaphorical road heading far out into the distance of time"/>';
        echo '<meta property="og:locale" content="en_GB" />';
        echo '<meta property="og:type"          content="website">';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<meta name="title" content="No Ecobrick Found">';
}
$conn->close();

?>