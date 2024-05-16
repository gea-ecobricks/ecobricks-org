<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<title>Écobrique '. $array["serial_no"] .' | '. $array["weight_g"] .'g de plastique séquestré par'. $array["owner"] .'  à  '. $array["location_full"] .'.</title>';

        echo '<meta name="description" content="Une écobrique authentifiée qui a été publiée et archivée sur la blockchain manuelle brikcoin sur' . $array["last_validation_ts"] .'">';

        if ( isset($array["vision"]) && $array["vision"] != '' ) {
            echo '<meta name="description" content="'. $array["vision"] .'">';
    
        }

		echo '<meta name="keywords" content="écobrique, ecobrick, serial '. $array["owner"] .', '. $array["owner"] .', brikchain, brikcoin, brik record, séquestration plastique, recyclage, alternative, séquestration du plastique, compensation plastique, plastique aes, séquestration du carbone. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/fr/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:title"         content="Écobrique '. $array["serial_no"] .' | '. $array["weight_g"] .'g of plastic sequestered by '. $array["owner"] .' in '. $array["location_full"] .'.">';
        echo '<meta property="og:description"   content="Une écobrique authentifiée qui a été publiée et archivée sur la blockchain manuelle brikcoin sur ' . $array["last_validation_ts"] .'"/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="L'enregistrement brikchain d'une écobrick authentifiée sur la brikchain"/>';
        echo '<meta property="og:locale" content="fr_FR" />';
        echo '<meta property="og:type"          content="website">';
 	   

        echo '<meta property="og:type" content="article" />
        <meta property="og:site_name" content="Ecobricks.org" />
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" />
        <meta property="article:modified_time" content="'. $array["last_validation_ts"] .'" />
        <meta property="og:image:type" content="image/png" />
        <meta name="author" content="Global Ecobrick Alliance" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="15 minutes" /> ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>Aucune écobrique trouvée | Ecobricks.org</title>';
    echo '<meta name="description" content="Aucune donnée trouvée pour ce numéro de série écobrique. Cela est probablement dû au fait que les données de la brikchain sont toujours en cours de migration.."> ';
}
$conn->close();

?>