<!-- PÁGINA DE DETALLES DE ECOBRICK EN ESPAÑOL -->

<?php

include '../ecobricks_env.php';


$trainingId = $_GET['training_id'];

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' participantes</title>';

        echo '<meta name="description" content="'. $array["no_participants"] .' han sido capacitados en '. $array["location_full"] .' en una capacitación '. $array["training_type"] .' de la Alianza Global de Ecoladrillos.">';


		echo '<meta name="keywords" content="capacitación, taller, educación plástica, ecoladrillo, '. $array["lead_trainer"] .', '. $array["training_type"] .', secuestro de plástico, reciclaje, alternativa, secuestro de plástico, compensación de plástico, aes plástico, secuestro de carbono, '. $array["training_country"] .','. $array["training_location"] .'">';

        echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">' ;
        echo '<meta property="og:title" content="'. $array["training_title"] .' |  '. $array["no_participants"] .' participantes">';
        echo '<meta property="og:description"   content="'. $array["no_participants"] .' han sido capacitados en '. $array["location_full"] .' en una capacitación '. $array["training_type"] .' de la Alianza Global de Ecoladrillos.">';
        echo '<meta property="og:image" content="https://ecobricks.org/trainings/photos/training-'. $array["training_id"] .'-1.webp?v=2">';
        echo '<meta property="og:image:alt"     content="Una foto de nuestro taller de capacitación de ecoladrillos">';
        echo '<meta property="og:locale" content="es_ES" >';
        echo '<meta property="og:type"          content="sitio web">';
 	   

        echo '<meta property="og:type" content="article" >
        <meta property="og:site_name" content="Ecobricks.org" >
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
        <meta property="article:modified_time" content="'. $array["training_logged"] .'" >
        <meta property="og:image:type" content="image/webp" >
        <meta name="author" content="Alianza Global de Ecoladrillos" >
        <meta name="twitter:card" content="summary" >
        <meta name="twitter:label1" content="Tiempo de lectura estimado" >
        <meta name="twitter:data1" content="15 minutos" > ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>No se encontró la capacitación | Ecobricks.org</title>';
    echo '<meta name="description" content="No se encontraron datos para este número de ID de capacitación. Puede que el enlace esté incorrecto o quizás aún no haya sido completamente registrado por el capacitador."> ';
}
$conn->close();

?>
