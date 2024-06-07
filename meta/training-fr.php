<!-- PAGE DE DÉTAILS DES ÉCOBRICKS EN FRANÇAIS -->

<?php

include '../ecobricks_env.php';


$trainingId = $_GET['training_id'];

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' participants</title>';

        echo '<meta name="description" content="'. $array["no_participants"] .' ont été formés à '. $array["location_full"] .' dans une formation '. $array["training_type"] .' de l\'Alliance Globale d\'Écobriques.">';


		echo '<meta name="keywords" content="formation, atelier, éducation plastique, écobrique, '. $array["lead_trainer"] .', '. $array["training_type"] .', séquestration plastique, recyclage, alternative, séquestration de plastique, compensation plastique, aes plastique, séquestration carbone, '. $array["training_country"] .','. $array["training_location"] .'">';

        echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">' ;
        echo '<meta property="og:title" content="'. $array["training_title"] .' |  '. $array["no_participants"] .' participants">';
        echo '<meta property="og:description"   content="'. $array["no_participants"] .' ont été formés à '. $array["location_full"] .' dans une formation '. $array["training_type"] .' de l\'Alliance Globale d\'Écobriques.">';
        echo '<meta property="og:image" content="https://ecobricks.org/trainings/photos/training-'. $array["training_id"] .'-1.webp?v=2">';
        echo '<meta property="og:image:alt"     content="Une photo de notre atelier de formation aux écobriques">';
        echo '<meta property="og:locale" content="fr_FR" >';
        echo '<meta property="og:type"          content="site web">';
 	   

        echo '<meta property="og:type" content="article" >
        <meta property="og:site_name" content="Ecobricks.org" >
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
        <meta property="article:modified_time" content="'. $array["training_logged"] .'" >
        <meta property="og:image:type" content="image/webp" >
        <meta name="author" content="Alliance Globale d\'Écobriques" >
        <meta name="twitter:card" content="summary" >
        <meta name="twitter:label1" content="Temps de lecture estimé" >
        <meta name="twitter:data1" content="15 minutes" > ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>Aucune formation trouvée | Ecobricks.org</title>';
    echo '<meta name="description" content="Aucune donnée trouvée pour ce numéro d\'ID de formation. Vous pouvez avoir le mauvais lien ou peut-être qu\'il n\'a pas encore été entièrement enregistré par le formateur."> ';
}
$conn->close();

?>
