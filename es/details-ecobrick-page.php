
<!--PAGE LANGUAGE:  ENGLISH
Special Ecobrick View Page: v.1.0.1-->
 
<?php 
require_once ("../includes/details-ecobrick-page-inc.php");

include 'ecobricks_env.php';

include 'ssp.class.php';


// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = '" . $serialNo . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {




echo 
'<div class="splash-content-block">
	<div class="splash-box">

		<div class="splash-heading">Ecobrick ' . $array["serial_no"] .'</div>
		
		<div class="splash-sub">'. $array["weight_authenticated_kg"] .'&#8202;kg de plástico se ha asegurado fuera de la biosfera en'. $array["location_full"] .'.</div>
	</div>
	
	<div class="splash-image">
		<a href="ecobrick_full_photo_url"><img src="'. $array["ecobrick_full_photo_url"] .'" style="	border-width: 10px;
	border-color: #97C4E3;
	width: 85%;
	margin-top:-20px;
	box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
	border-style: solid;" alt="Número de serie Ecobrick '. $array["serial_no"] .' was made in '. $array["location_full"] .' y autenticado en' . $array["last_validation_ts"] .'"
	title="Ecobrick '.$row["ecobrick_unique_id"].' para '.$row["ecobrick_owner"].' en '.$row["location"].'"></a>
	</div>	
</div>

<div id="splash-bar"></div>
';

echo '
<a name="top"></a>
<div id="main-content">
	<div class="row">
		<div class="main">
			<div class="row-details">';

	if ( isset($array["vision"]) && $array["vision"] != '' ) {
	
		                echo '<p><div class="vision-quote"> "'. str_replace('"', "", $array["vision"]) . '"  </div></p>';
			}
	
			
			echo '<div class="lead-page-paragraph">
						<p><b>'. $array["owner"] .' ha ecoladrillado '. $array["weight_g"] .'&#8202;g of community plastic in '. $array["location_city"] .', '. $array["location_country"] .' usando una '. $array["volume_ml"] .' botella para hacer un '. $array["sequestration_type"].'.</b></p>
					</div>';

	

				

			echo ' <div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p>Este ecobrick estaba con una densidad de'. $array["density"] .'&#8202;g/ml y represente '. $array["CO2_kg"] .'&#8202;kg de C02 secuestrado. El ecobrick está marcado permanentemente con el número de serie '. $array["serial_no"] .' y sobre el '. $array["date_logged_ts"] .' se agregó automáticamente a la cola de validación. Basado en '. $array["location_region"] .', '. $array["owner"] .' and their community '. $array["community_name"] .', están trabajando duro para mantener el plástico fuera de la biosfera en '. $array["location_country"] .'. </p>

						<p>On '. $array["date_logged_ts"] .' el ecobrick fue autenticado con un puntaje promedio de validación de '. $array["final_validation_score"] .'. La autenticación del ecobrick generada '. $array["ecobrick_dec_brk_val"] .'&#8202;ß. El ecobrick fue clasificado con la puntuación de'. $array["validation_score_avg"] .'.</p>
						<br>
					</div>
				</div>';

			

			if ( isset($array["selfie_photo_url"]) && $array["selfie_photo_url"] != '' ) {
				echo '<div class="side-details">
				<img src="'. $array["selfie_photo_url"] .'" width="100%">
			</div>
		';
			}
				

			echo '
			
			</div>
			<div id="data-chunk">
				<div class="ecobrick-data">
					<p style="margin-left: -32px;font-weight: bold;">>> Raw Brikchain Data Record</p><br>
					<p>--------------------</p>
					<p>BEGIN BRIK RECORD ></p>';

			echo ' <p><b>Registrado:</b> ' . $array["date_logged_ts"] .'</p>' ;
			echo ' <p><b>Volumen:</b> <var>'. $array["volume_ml"] .' &#8202;ml</var></p>' ;
			echo ' <p><b>Peso:</b> <var>' . $array["weight_g"] .'&#8202;g</var></p>' ;
			echo ' <p><b>Densidad:</b> <var>' . $array["density"] .'&#8202;g/ml</var></p>' ;
			echo ' <p><b>CO2e:</b><var>' . $array["CO2_kg"] .' &#8202;kg</var></p>' ;
			echo ' <p><b>Valor Brikcoin:</b> <var>' . $array["ecobrick_dec_brk_val"] .'&#8202;ß</var></p>' ;

			echo ' <p><b>Ecobricker:</b> <var><i>' . $array["owner"] .'</i></var> </p>' ;
			echo ' <p><b>Sequestrado:</b> <var>' . $array["sequestration_type"].'</var></p>' ;
			echo ' <p><b>Marca:</b> <var>' . $array["brand_name"] .'</var></p>' ;
			echo ' <p><b>Color inferior:</b> ' . $array["bottom_colour"] .'</p>' ;

			echo ' <p><b>Fuente de plástico:</b>' . $array["plastic_from"] .'</p>' ;

			echo ' <p><b>Communidad:</b> <var>' . $array["community_name"] .'</var></p>' ;
			echo ' <p><b>Ciudad:</b> <var>' . $array["location_city"] .'</var></p>' ;
			echo ' <p><b>Region:</b> <var>' . $array["location_region"] .'</var></p>' ;
			echo ' <p><b>Nacion:</b> ' . $array["location_country"] .'</p>' ;
			echo ' <p><b>Ubicación completa:</b> <var>' . $array["location_full"] .'</var></p>' ;


			echo ' <p><b>Validación:</b> ' . $array["last_validation_ts"] .'</var></p>' ;
			echo ' <p><b>Validator 1:</b> <var>' . $array["validator_1"] .'</var> </p>' ;
			echo ' <p><b>Validator 2:</b> <var>' . $array["validator_2"] .'</var> </p>' ;
			echo ' <p><b>Validator 3:</b> <var>' . $array["validator_3"] .'</var> </p>' ;
			echo ' <p><b>Puntaje de validación promedio.:</b> <var>' . $array["validation_score_avg"] .'</var></p>' ;

			echo ' <p><b>Puntaje de validación final:</b> <var>' . $array["final_validation_score"] .'</var></p>' ;
			echo ' <p><b>Peso autenticado:</b> <var> ' . $array["weight_authenticated_kg"] .'&#8202;kg</p>
			<p>> END RECORD.</p>
				</div>
			</div>
			' ;

			echo '
			<br><hr><br> 
			<div class="page-paragraph">
				<h3><p>El Brikchain</p></h3>
			
				<p>Cuando se autentica un ecobrick, como el de arriba, se publica en la cadena de bloques manual de brikcoin y se emiten monedas de acuerdo con su valor ecológico. Esto es lo que llamamos Brikchain. En Brikchain, puede encontrar este ecoladrillo y todos los demás ecoladrillos, bloques y transacciones que sustentan la moneda complementaria Brickoin.</p>

			<p>Como un proceso manual sin capital, Brikcoins favorece a cualquier persona en cualquier lugar que esté dispuesta a trabajar con sus manos para hacer una contribución ecológica significativa.</p>
				
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>';
			
			echo '	<div class="side">

			<div id="side-module-desktop-mobile">
					<img src="../pngs/authenticated-ecobrick.png" width="90%" alt="Siguiendo el ejemplo de la Tierra a través de la construcción de ladrillos ecológicos">
					<br><h4>¡Autenticado!</h4>
					<h5>Este ecoladrillo ha sido autenticado por tres validadores independientes que cumplen con los estándares de secuestro de plástico.</h5><br>
					<a class="module-btn" href="/what">Sobre Ecobricks</a>
					<br><br>
				</div>   ';

	}


} else {
    echo '<META NAME="robots" CONTENT="noindex">';

	echo '

</head>

<BODY id="full-page">

	  ';

require_once ("menus/menu-$lang.php");



echo '
<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
	
			echo '¡Lo siento! :-(</div>
			<div class="splash-sub">No hay resultados para ecobrick '. $serialNo.' en la Brikchain. Lo más probable es que esto se deba a que los datos de Brikchain todavía están en proceso de migración.</div>
		</div>
		<div class="splash-image"><img src="../webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="empty ecobrick"></div>	
	</div>
	<div id="splash-bar"></div>

	<a name="top"></a>

	<div id="main-content">
		<div class="row">
			<div class="main">
				<br><br>

				
			
			<div class="ecobrick-data">
			<p>🚧 Los datos para ecobrick '. $serialNo.' aún no se ha migrado a la cadena de bloques.
				</p></div><br><br><br><br>
				
				<div class="page-paragraph">
				<p><h3>The Brikchain</h3></p>
			
				<p>Cuando se autentica un ecobrick, como el de arriba, se publica en la cadena de bloques manual de brikcoin y se emiten monedas de acuerdo con su valor ecológico. Esto es lo que llamamos Brikchain. En Brikchain, puede encontrar este ecoladrillo y todos los demás ecoladrillos, bloques y transacciones que sustentan la moneda complementaria Brickoin.</p>

<p>Como un proceso manual sin capital, Brikcoins favorece a cualquier persona en cualquier lugar que esté dispuesta a trabajar con sus manos para hacer una contribución ecológica significativa.</p>
				<br>
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Navegar por Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">La cadena viva de transacciones y ecoladrillos.</a></p>
				</div>
			</div>

			<div class="side">
		  
		';
		}
		$conn->close();

		?>



				
	

			
			

		
	

            <div id="side-module-desktop-mobile">
				<img src="../webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<h5>El peso del plástico dentro de un ecoladrillo autenticado es lo que llamamos Plástico Ecoladrillo Autenticado (plástico AES) para abreviar.</h5><br>
				<a class="module-btn" href="/aes" target="_blank">Sobre AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="../webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Brikcoins</h4>
				<h5>Cuando se autentica un ecobrick, se generan brikcoins para representar el valor ecológico de su plástico AES.</h5><br>
				<a class="module-btn" href="brikcoins.php">Sobre los Brikcoins</a><br><br>
			</div>



		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="../scripts/accordion-scripts.js" defer></script>


</div>
</body>
</html>
