<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';


$trainingId = $_GET['training_id'];

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

        echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' participantes</title>';

        echo '<meta name="description" content="'. $array["no_participants"] .' han estado entrenando en '. $array["location_full"] .' en un entrenamiento GEA de tipo '. $array["training_type"] .'">';
        
        echo '<meta name="keywords" content="entrenamiento, taller, educación sobre plástico, ecoladrillo, '. $array["lead_trainer"] .', '. $array["training_type"] .','. $array["training_description"] .', secuestro de plástico, reciclaje, alternativa, secuestro de plástico, compensación de plástico, plástico AES, secuestro de carbono. '. $array["location_full"] .'">';
        
        echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">';
        echo '<meta property="og:title" content="'. $array["training_name"] .' |  '. $array["briks_used"] .' ecoladrillos">';
        echo '<meta property="og:description" content="'. $array["no_participants"] .' han estado entrenando en '. $array["location_full"] .' en un entrenamiento GEA de tipo '. $array["training_type"] .'">';
        echo '<meta property="og:image" content="https://ecobricks.org/trainings/photos/training-'. $array["training_id"] .'-1.webp?v=2">';
        echo '<meta property="og:image:alt" content="Una foto de nuestro taller de entrenamiento de ecoladrillos">';
        echo '<meta property="og:locale" content="es_ES" >';
        echo '<meta property="og:type" content="website">';
        
        echo '<meta property="og:type" content="article" >
        <meta property="og:site_name" content="Ecobricks.org" >
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
        <meta property="article:modified_time" content="'. $array["training_logged"] .'" >
        <meta property="og:image:type" content="image/webp" >
        <meta name="author" content="Alianza Global de Ecoladrillos" >
        <meta name="twitter:card" content="summary" >
        <meta name="twitter:label1" content="Tiempo estimado de lectura" >
        <meta name="twitter:data1" content="15 minutos" > ';
        
        } else {
        echo '<META NAME="robots" CONTENT="noindex">';
        echo '<title>Entrenamiento No Encontrado | Ecobricks.org</title>';
        echo '<meta name="description" content="No se encontraron datos para este número de ID de entrenamiento. Puede que tenga el enlace incorrecto o tal vez no haya sido registrado completamente por el entrenador.">';
        }
    }
        $conn->close();
        ?>