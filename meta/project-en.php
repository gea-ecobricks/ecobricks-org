<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';


$projectId = $_GET['project_id'];

$sql = "SELECT * FROM tb_projects WHERE project_id = '" . $projectId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo '<title>'. $array["project_name"] .' |  '. $array["briks_used"] .' ecobricks</title>';

        echo '<meta name="description" content="'. $array["est_total_weight"] .' has been sequestered in '. $array["location_full"] .' in a '. $array["project_type"] .' project.">';


		echo '<meta name="keywords" content="ecobrick, serial '. $array["project_admins"] .', '. $array["construction_type"] .','. $array["project_type"] .', plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/'. $lang .'/project.php?project_id='. $array["project_id"] .'">' ;
        echo '<meta property="og:title"         content="'. $array["project_name"] .' |  '. $array["briks_used"] .' ecobricks">';
        echo '<meta property="og:description"   content="'. $array["est_total_weight"] .'&#8202;kg of plastic has been sequestered in '. $array["location_full"] .' in a '. $array["project_type"] .' project.">';
        echo '<meta property="og:image"         content="https://ecobricks.org/projects/photos/project-'. $array["project_id"] .'-1.webp?v=2">';
        echo '<meta property="og:image:alt"     content="A photo of our ecobrick project">';
        echo '<meta property="og:locale" content="en_GB" >';
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
    echo '<title>No Ecobrick Found | Ecobricks.org</title>';
    echo '<meta name="description" content="No data found for this ecobrick serial number.  Most likely this is because the brikchain data is still in migration."> ';
}
$conn->close();

?>