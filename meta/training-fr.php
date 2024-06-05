<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';


$trainingId = $_GET['training_id'];

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

        echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' participants</title>';

        echo '<meta name="description" content="'. $array["no_participants"] .' ont été formés à '. $array["location_full"] .' dans une formation GEA de type '. $array["training_type"] .'">';
        
        echo '<meta name="keywords" content="formation, atelier, éducation sur le plastique, écobrique, '. $array["lead_trainer"] .', '. $array["training_type"] .','. $array["training_description"] .', séquestration du plastique, recyclage, alternative, séquestration du plastique, compensation plastique, plastique AES, séquestration du carbone. '. $array["location_full"] .'">';
        
        echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">';
        echo '<meta property="og:title" content="'. $array["training_name"] .' |  '. $array["briks_used"] .' écobriques">';
        echo '<meta property="og:description" content="'. $array["no_participants"] .' ont été formés à '. $array["location_full"] .' dans une formation GEA de type '. $array["training_type"] .'">';
        echo '<meta property="og:image" content="https://ecobricks.org/trainings/photos/training-'. $array["training_id"] .'-1.webp?v=2">';
        echo '<meta property="og:image:alt" content="Une photo de notre atelier de formation sur les écobriques">';
        echo '<meta property="og:locale" content="fr_FR" >';
        echo '<meta property="og:type" content="website">';
        
        echo '<meta property="og:type" content="article" >
        <meta property="og:site_name" content="Ecobricks.org" >
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
        <meta property="article:modified_time" content="'. $array["training_logged"] .'" >
        <meta property="og:image:type" content="image/webp" >
        <meta name="author" content="Alliance Globale d\'Écobriques" >
        <meta name="twitter:card" content="summary" >
        <meta name="twitter:label1" content="Temps de lecture estimé" >
        <meta name="twitter:data1" content="15 minutes" > ';
        
        } else {
        echo '<META NAME="robots" CONTENT="noindex">';
        echo '<title>Formation non trouvée | Ecobricks.org</title>';
        echo '<meta name="description" content="Aucune donnée trouvée pour ce numéro d\'ID de formation. Vous pouvez avoir le mauvais lien ou peut-être qu\'il n\'a pas encore été entièrement enregistré par le formateur.">';
        }
        $conn->close();
    }
?>