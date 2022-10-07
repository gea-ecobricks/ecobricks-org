<!-- SPANISH ECOBRICK DETAILS PAGE -->

<?php

include 'ecobricks_env.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<title>Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g de plástico secuestrado por '. $array["owner"] .' in '. $array["location_full"] .'.</title>';

        echo '<meta name="description" content="Un ecobrick autenticado que fue publicado y archivado en la cadena de bloques manual de brikcoin el ' . $array["last_validation_ts"] .'">';

   

        if ( isset($array["vision"]) && $array["vision"] != '' ) {
		                echo '<meta name="description" content="'. str_replace('"', "", $array["vision"]) . '">';
			}

		echo '<meta name="keywords" content="ecobrick, serial '. $array["owner"] .', '. $array["owner"] .', ecobrick, brik, brikchain, brikcoin, eco brik record, plastic sequestration, plastic, ecological service, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/es/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:title"         content="Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g de plástico secuestrado por '. $array["owner"] .' in '. $array["location_full"] .'.">';
        echo '<meta property="og:description"   content="Un ecobrick autenticado que fue publicado y archivado en la cadena de bloques manual de brikcoin en ' . $array["last_validation_ts"] .'"/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="TEl registro de brikchain de un ecobrick autenticado en brikchain"/>';
        echo '<meta property="og:locale" content="es_ES" />';
        echo '<meta property="og:type"          content="website">';
 	   

        echo '<meta property="og:type" content="article" />
        <meta property="og:site_name" content="Ecobricks.org/es" />
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" />
        <meta property="article:modified_time" content="'. $array["last_validation_ts"] .'" />
        <meta property="og:image:type" content="image/png" />
        <meta name="author" content="Global Ecobrick Alliance" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="1 minutes" /> ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>No se encontró ningún ecoladrillo | Ecobricks.org</title>';
    echo '<meta name="description" content="No se encontraron datos para este número de serie de ecobrick. Lo más probable es que esto se deba a que los datos de brikchain todavía están en proceso de migración."> ';
}
$conn->close();

?>