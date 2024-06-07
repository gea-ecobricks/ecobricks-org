<!-- HALAMAN RINCIAN ECOBRICK DALAM BAHASA INDONESIA -->

<?php

include '../ecobricks_env.php';


$trainingId = $_GET['training_id'];

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' peserta</title>';

        echo '<meta name="description" content="'. $array["no_participants"] .' telah dilatih di '. $array["location_full"] .' dalam pelatihan '. $array["training_type"] .' dari Aliansi Ecobrick Global.">';


		echo '<meta name="keywords" content="pelatihan, lokakarya, edukasi plastik, ecobrick, '. $array["lead_trainer"] .', '. $array["training_type"] .', sekuester plastik, daur ulang, alternatif, sekuester plastik, pengimbangan plastik, aes plastik, sekuester karbon, '. $array["training_country"] .','. $array["training_location"] .'">';

        echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">' ;
        echo '<meta property="og:title" content="'. $array["training_title"] .' |  '. $array["no_participants"] .' peserta">';
        echo '<meta property="og:description"   content="'. $array["no_participants"] .' telah dilatih di '. $array["location_full"] .' dalam pelatihan '. $array["training_type"] .' dari Aliansi Ecobrick Global.">';
        echo '<meta property="og:image" content="https://ecobricks.org/trainings/photos/training-'. $array["training_id"] .'-1.webp?v=2">';
        echo '<meta property="og:image:alt"     content="Foto lokakarya pelatihan ecobrick kami">';
        echo '<meta property="og:locale" content="id_ID" >';
        echo '<meta property="og:type"          content="situs web">';
 	   

        echo '<meta property="og:type" content="artikel" >
        <meta property="og:site_name" content="Ecobricks.org" >
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
        <meta property="article:modified_time" content="'. $array["training_logged"] .'" >
        <meta property="og:image:type" content="image/webp" >
        <meta name="author" content="Aliansi Ecobrick Global" >
        <meta name="twitter:card" content="summary" >
        <meta name="twitter:label1" content="Perkiraan waktu membaca" >
        <meta name="twitter:data1" content="15 menit" > ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>Tidak Ada Pelatihan Ditemukan | Ecobricks.org</title>';
    echo '<meta name="description" content="Tidak ada data yang ditemukan untuk nomor ID pelatihan ini. Anda mungkin memiliki tautan yang salah atau mungkin belum sepenuhnya dicatat oleh pelatih."> ';
}
$conn->close();

?>
