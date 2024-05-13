<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';


$projectId = $_GET['project_id'];

$sql = "SELECT * FROM tb_projects WHERE project_id = '" . $projectId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo '<title>'. $array["project_name"] .' |  '. $array["briks_used"] .' ecobricks</title>';

        echo '<meta name="description" content="'. $array["est_total_weight"] .'&#8202;kg plastik telah diamankan di '. $array["location_full"] .' dalam kreasi '. $array["project_type"] .' .">';


		echo '<meta name="keywords" content="ecobrick, serial '. $array["project_admins"] .', '. $array["construction_type"] .','. $array["project_type"] .', sekuestrasi plastik, daur ulang, alternatif, sekuestrasi plastik, penggantian kerugian plastik, plastik aes, sekuestrasi karbon. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/'. $lang .'/project.php?project_id='. $array["project_id"] .'">' ;
        echo '<meta property="og:title"         content="'. $array["project_name"] .' |  '. $array["briks_used"] .' ecobricks">';
        echo '<meta property="og:description"   content="'. $array["est_total_weight"] .'&#8202;kg plastik telah diamankan di '. $array["location_full"] .' dalam kreasi '. $array["project_type"] .'.">';
        echo '<meta property="og:image"         content="https://ecobricks.org/projects/photos/project-'. $array["project_id"] .'-1.webp?v=3">';
        echo '<meta property="og:image:alt"     content="Foto di proyek ecobrick">';
        echo '<meta property="og:locale" content="id_ID" >';
        echo '<meta property="og:type"          content="website">';
 	   

        echo '<meta property="og:type" content="article" >
        <meta property="og:site_name" content="Ecobricks.org" >
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
        <meta property="article:modified_time" content="'. $array["logged_ts"] .'" >
        <meta property="og:image:type" content="image/webp" >
        <meta name="author" content="Global Ecobrick Alliance" >
        <meta name="twitter:card" content="summary" >
        <meta name="twitter:label1" content="Est. reading time" >
        <meta name="twitter:data1" content="15 minutes" > ';
    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>Ecobrick Tidak Ditemukan | Ecobricks.org</title>';
    echo '<meta name="description" content="Tidak ada data yang ditemukan untuk proyek ini. Mungkin sudah dihapus atau dipindahkan."> ';
}
$conn->close();

?>