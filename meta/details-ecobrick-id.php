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

		echo '<title>Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g plastik yang diasingkan oleh '. $array["owner"] .' di '. $array["location_full"] .'.</title>';

        echo '<meta name="description" content="Ecobrick terautentikasi yang diterbitkan dan diarsipkan pada blockchain manual brikcoin ' . $array["last_validation_ts"] .'">';

        if ( isset($array["vision"]) && $array["vision"] != '' ) {
            echo '<meta name="description" content="'. $array["vision"] .'">';
    
        }

		echo '<meta name="keywords" content="ecobrick, serial '. $array["owner"] .', '. $array["owner"] .', brikchain, brikcoin, catatan brik, sekuestrasi plastik, daur ulang, alternatif, sekuestrasi plastik, offset plastik, plastik aes, sekuestrasi karbon. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/id/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:title"         content="Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'gplastik yang diasingkan oleh '. $array["owner"] .' di '. $array["location_full"] .'.">';
        echo '<meta property="og:description"   content="Ecobrick terautentikasi yang diterbitkan dan diarsipkan pada blockchain manual brikcoin' . $array["last_validation_ts"] .'"/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="Catatan brikchain dari ecobrick yang diautentikasi pada brikchain"/>';
        echo '<meta property="og:locale" content="id_ID" />';
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
    echo '<title>Tidak Ditemukan Ecobrick | Ecobricks.org</title>';
    echo '<meta name="description" content="Tidak ditemukan data untuk nomor seri ecobrick ini. Kemungkinan besar hal ini karena data brikchain masih dalam tahap migrasi."> ';
}
$conn->close();

?>