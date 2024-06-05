<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include '../ecobricks_env.php';


$trainingId = $_GET['training_id'];

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

        echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' peserta</title>';

echo '<meta name="description" content="'. $array["no_participants"] .' telah berlatih di '. $array["location_full"] .' dalam pelatihan GEA '. $array["training_type"] .'">';

echo '<meta name="keywords" content="pelatihan, lokakarya, edukasi plastik, ecobrick, '. $array["lead_trainer"] .', '. $array["training_type"] .','. $array["training_description"] .', sekuestrasi plastik, daur ulang, alternatif, sekuestrasi plastik, kompensasi plastik, plastik AES, sekuestrasi karbon. '. $array["location_full"] .'">';

echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">';
echo '<meta property="og:title" content="'. $array["training_name"] .' |  '. $array["briks_used"] .' ecobrick">';
echo '<meta property="og:description" content="'. $array["no_participants"] .' telah berlatih di '. $array["location_full"] .' dalam pelatihan GEA '. $array["training_type"] .'">';
echo '<meta property="og:image" content="https://ecobricks.org/trainings/photos/training-'. $array["training_id"] .'-1.webp?v=2">';
echo '<meta property="og:image:alt" content="Foto lokakarya pelatihan ecobrick kami">';
echo '<meta property="og:locale" content="id_ID" >';
echo '<meta property="og:type" content="website">';

echo '<meta property="og:type" content="article" >
<meta property="og:site_name" content="Ecobricks.org" >
<meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >
<meta property="article:modified_time" content="'. $array["training_logged"] .'" >
<meta property="og:image:type" content="image/webp" >
<meta name="author" content="Aliansi Global Ecobrick" >
<meta name="twitter:card" content="summary" >
<meta name="twitter:label1" content="Estimasi waktu baca" >
<meta name="twitter:data1" content="15 menit" > ';

} else {
echo '<META NAME="robots" CONTENT="noindex">';
echo '<title>Pelatihan Tidak Ditemukan | Ecobricks.org</title>';
echo '<meta name="description" content="Tidak ada data yang ditemukan untuk nomor ID pelatihan ini. Anda mungkin memiliki tautan yang salah atau mungkin belum sepenuhnya dicatat oleh pelatih.">';
}
$conn->close();

}
?>