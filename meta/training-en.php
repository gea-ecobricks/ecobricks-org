<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';


$trainingId = $_GET['training_id'];

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' participants</title>';

        echo '<meta name="description" content="'. $array["no_participants"] .' have been training in '. $array["training_location"] .' in a '. $array["training_type"] .' GEA training.">';


		echo '<meta name="keywords" content="training, workshop, plastic eduction, ecobrick, '. $array["lead_trainer"] .', '. $array["training_type"] .',plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration. '. $array["training_country"] .','. $array["training_location"] .'">';

        echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">' ;
        echo '<meta property="og:title" content="'. $array["training_title"] .' |  '. $array["no_participants"] .' participants">';
        echo '<meta property="og:description"   content="'. $array["no_participants"] .' have been training in '. $array["training_location"] .' in a '. $array["training_type"] .' GEA training.">';
        echo '<meta property="og:image" content="https://ecobricks.org/trainings/photos/training-'. $array["training_id"] .'-1.webp?v=2">';
        echo '<meta property="og:image:alt"     content="A photo of our ecobrick training workshop">';
        echo '<meta property="og:locale" content="en_GB" >';
        echo '<meta property="og:type"          content="website">';
 	   

        echo '<meta property="og:type" content="article" >
        <meta property="og:site_name" content="Ecobricks.org" >
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
        <meta property="article:modified_time" content="'. $array["training_logged"] .'" >
        <meta property="og:image:type" content="image/webp" >
        <meta name="author" content="Global Ecobrick Alliance" >
        <meta name="twitter:card" content="summary" >
        <meta name="twitter:label1" content="Est. reading time" >
        <meta name="twitter:data1" content="15 minutes" > ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>No Training Found | Ecobricks.org</title>';
    echo '<meta name="description" content="No data found for this training ID number.  You may have the link wrong or perhaps it has not yet been fully logged by the trainer."> ';
}
$conn->close();

?>