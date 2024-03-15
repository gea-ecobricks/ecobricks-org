<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='1.84';?>
<?php $page='principles';?>
 
<?php 
require_once ("../includes/details-ecobrick-page-inc.php");

include '../ecobricks_env.php';

include '../ssp.class.php';


// Obtenir le contenu de la table Ecobrick sous forme de vue ordonnée, en utilisant le numéro de série de l'URL.
$serialNo = $_GET['serial_no'];

// Référence à https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = '" . $serialNo . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

    //  echo "<h1> Utiliser le numéro de série de l'URL => " . $serialNo ."</h1>"; Données de sortie de chaque ligne 
    while ($array = $result->fetch_assoc()) {

        echo
        '<div class="splash-content-block">
        <div class="splash-box">

            <div class="splash-heading">Écobrique ' . $array["serial_no"] . '</div>
            
            <div class="splash-sub">' . $array["weight_authenticated_kg"] . '&#8202;kg de plastique ont été sécurisés hors de la biosphère à ' . $array["location_full"] . '.</div>
        </div>
        
        <div class="splash-image">
            <a href="ecobrick_full_photo_url"><img src="' . $array["ecobrick_full_photo_url"] . '" style="	border-width: 10px;
        border-color: #97C4E3;
        width: 85%;
        margin-top:-20px;
        box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
        border-style: solid;" alt="Écobrique Série ' . $array["serial_no"] . ' a été fabriquée à ' . $array["location_full"] . ' et authentifiée le ' . $array["last_validation_ts"] . '"
        title="Écobrique ' . $row["ecobrick_unique_id"] . ' par ' . $row["ecobrick_owner"] . ' à ' . $row["location"] . '"></a>
        </div>	
    </div>

    <div id="splash-bar"></div>
    ';

    echo '
    <div id="main-content">
        <div class="row">
            <div class="main">
                <div class="row-details">';

    if (isset($array["vision"]) && $array["vision"] != '') {
        //    echo '<p><div class="vision-quote">'. $array["vision"] .'</div></p>';
        echo '<p><div class="vision-quote"> "'.str_replace('"', "", $array["vision"]) . '"  </div></p>';
    }


    echo '<div class="lead-page-paragraph">
        <p><b>' . $array["owner"] . ' a fabriqué ' . $array["weight_g"] . '&#8202;g de plastique communautaire à ' . $array["location_city"] . ', ' . $array["location_country"] . ' en utilisant une bouteille de ' . $array["volume_ml"] . ' ml pour fabriquer une ' . $array["sequestration_type"] . '.</b></p>
    </div>';



    echo ' <div class="main-details">
    
    
    
    <div class="page-paragraph">
        <p>Cette écobrique a une densité de ' . $array["density"] . '&#8202;g/ml et représente ' . $array["CO2_kg"] . '&#8202;kg de CO2 séquestré. L\'écobrique est marquée définitivement avec le numéro de série ' . $array["serial_no"] . ' et le ' . $array["date_logged_ts"] . ' a été automatiquement ajoutée à la file de validation. Basé à ' . $array["location_region"] . ', ' . $array["owner"] . ' et sa communauté ' . $array["community_name"] . ' travaillent dur pour garder le plastique hors de la biosphère à ' . $array["location_country"] . '. </p>

        <p>Le ' . $array["date_logged_ts"] . ', l\'écobrique a été authentifiée avec un score moyen de validation de ' . $array["final_validation_score"] . '. L\'authentification de l\'écobrique a généré ' . $array["ecobrick_dec_brk_val"] . '&#8202;ß. L\'écobrique a été classée avec le score de ' . $array["validation_score_avg"] . '.</p>
        <br>
    </div>
</div>';

if (isset($array["selfie_photo_url"]) && $array["selfie_photo_url"] != '') {
    echo '<div class="side-details">
            <img src="' . $array["selfie_photo_url"] . '" width="100%">
        </div>
    ';
}


echo '

</div>
<div id="data-chunk">
    <div class="ecobrick-data">
        <p style="margin-left: -32px;font-weight: bold;">>> Enregistrement brut de données Brikchain</p><br>
        <p>--------------------</p>
        <p>DÉBUT DE L\'ENREGISTREMENT BRIK ></p>';

echo ' <p><b>Enregistré :</b> ' . $array["date_logged_ts"] . '</p>';
echo ' <p><b>Volume :</b> <var>' . $array["volume_ml"] . ' &#8202;ml</var></p>';
echo ' <p><b>Poids :</b> <var>' . $array["weight_g"] . '&#8202;g</var></p>';
echo ' <p><b>Densité :</b> <var>' . $array["density"] . '&#8202;g/ml</var></p>';
echo ' <p><b>CO2e :</b><var>' . $array["CO2_kg"] . ' &#8202;kg</var></p>';
echo ' <p><b>Valeur Brikcoin :</b> <var>' . $array["ecobrick_dec_brk_val"] . '&#8202;ß</var></p>';

echo ' <p><b>Fabricant :</b> <var><i>' . $array["owner"] . '</i></var> </p>';
echo ' <p><b>Séquestration :</b> <var>' . $array["sequestration_type"] . '</var></p>';
echo ' <p><b>Marque :</b> <var>' . $array["brand_name"] . '</var></p>';
echo ' <p><b>Couleur du bas :</b> ' . $array["bottom_colour"] . '</p>';

echo ' <p><b>Source de plastique :</b>' . $array["plastic_from"] . '</p>';

echo ' <p><b>Communauté :</b> <var>' . $array["community_name"] . '</var></p>';
echo ' <p><b>Ville :</b> <var>' . $array["location_city"] . '</var></p>';
echo ' <p><b>Région :</b> <var>' . $array["location_region"] . '</var></p>';
echo ' <p><b>Pays :</b> ' . $array["location_country"] . '</p>';
echo ' <p><b>Emplacement complet :</b> <var>' . $array["location_full"] . '</var></p>';


echo ' <p><b>Validation :</b> ' . $array["last_validation_ts"] . '</var></p>';
echo ' <p><b>Validateur 1 :</b> <var>' . $array["validator_1"] . '</var> </p>';
echo ' <p><b>Validateur 2 :</b> <var>' . $array["validator_2"] . '</var> </p>';
echo ' <p><b>Validateur 3 :</b> <var>' . $array["validator_3"] . '</var> </p>';
echo ' <p><b>Score moyen de validation :</b> <var>' . $array["validation_score_avg"] . '</var></p>';

echo ' <p><b>Score final de validation :</b> <var>' . $array["final_validation_score"] . '</var></p>';
echo ' <p><b>Poids authentifié :</b> <var> ' . $array["weight_authenticated_kg"] . '&#8202;kg</p>
<p>> FIN DE L\'ENREGISTREMENT.</p>
</div>
</div>
' ;

echo '
<br><hr><br> 
<div class="page-paragraph-reg">
<h3><p>La Brikchaîne</p></h3>

<p>Lorsqu\'une écobrique est authentifiée, comme celle-ci ci-dessus, elle est publiée sur la blockchain manuelle de brikcoin et des coins sont émis en fonction de sa valeur écologique. C\'est ce que nous appelons la Brikchaîne. Sur la Brikchaîne, vous pouvez trouver cette écobrique et toutes les autres écobriques, blocs et transactions qui soutiennent la monnaie complémentaire Brickoin.</p>

<p>En tant que processus manuel et non capitaliste, Brikcoins favorise quiconque, n\'importe où, prêt à travailler de ses mains pour faire une contribution écologique significative.</p>
<br>
<p><a class="action-btn-blue" href="brikchain.php">🔎 Parcourir la Brikchaîne</a></p>
<p style="font-size: 0.85em; margin-top:20px;">La chaîne en direct des transactions et écobriques.</a></p>
</div>
</div>';

echo ' <div class="side">

<div class="side-module-desktop-mobile">
        <img src="../pngs/authenticated-ecobrick.png" width="90%" alt="Suivant l\'exemple de la Terre grâce à l\'éco-briquage">
        <br><h4>Authentifié !</h4>
        <h5>Cette écobrique a été authentifiée par trois validateurs indépendants selon les normes de séquestration du plastique.</h5><br>
        <a class="module-btn" href="/about">À propos des écobriques</a>
        <br><br>
    </div>   ';

}


} else {



echo '
<div class="splash-content-block">
        <div class="splash-box">
            <div class="splash-heading">';

echo 'Désolé ! :-(</div>
<div class="splash-sub">Aucun résultat pour l\'écobrique ' . $serialNo . ' dans la Brikchaîne. Très probablement, cela est dû à la migration des données de la Brikchaîne.</div>
</div>
<div class="splash-image"><img src="../webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="écobrique vide"></div>	
</div>
<div id="splash-bar"></div>

<a name="top"></a>

<div id="main-content">
    <div class="row">
        <div class="main">
            <br><br>



        <div class="ecobrick-data">
        <p>🚧 Les données pour l\'écobrique ' . $serialNo . ' n\'ont pas encore été migrées vers la blockchain.
            </p></div><br><br><br><br>

            <div class="page-paragraph">
            <p><h3>La Brikchaîne</h3></p>

            <p>Lorsqu\'une écobrique est authentifiée, comme celle-ci ci-dessus, elle est publiée sur la blockchain manuelle de brikcoin et des coins sont émis en fonction de sa valeur écologique. C\'est ce que nous appelons la Brikchaîne. Sur la Brikchaîne, vous pouvez trouver cette écobrique et toutes les autres écobriques, blocs et transactions qui soutiennent la monnaie complémentaire Brickoin.</p>

        <p>En tant que processus manuel et non capitaliste, Brikcoins favorise quiconque, n\'importe où, prêt à travailler de ses mains pour faire une contribution écologique significative.</p>
            <br>
            <p><a class="action-btn-blue" href="brikchain.php">🔎 Parcourir la Brikchaîne</a></p>
            <p style="font-size: 0.85em; margin-top:20px;">La chaîne en direct des transactions et écobriques.</a></p>
            </div>
        </div>

        <div class="side">

		';
		}
		$conn->close();

		?>



				
	

			
			

			
	<div class="side-module-desktop-mobile">
		<img src="../webp/aes-400px.webp" width="80%" alt="Entreprise Pour la Terre grâce à l'éco-briquage">
		<!--<h4>Plastique AES</h4>-->
		<h5>Le poids du plastique à l'intérieur d'une écobrique authentifiée est ce que nous appelons du plastique écologique authentifié (plastique AES) en abrégé.</h5><br>
		<a class="module-btn" href="/aes" target="_blank">À propos de l'AES</a><br><br>
	</div>

	<div class="side-module-desktop-mobile">
		<img src="../webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="Éco-briques et construction de la terre peuvent créer des structures régénératives">
		<h4>Brikcoins</h4>
		<h5>Lorsqu'une écobrique est authentifiée, des brikcoins sont générées pour représenter la valeur écologique de son plastique AES.</h5><br>
		<a class="module-btn" href="brikcoins.php">À propos des Brikcoins</a><br><br>
	</div>




		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>





</div>
</body>
</html>