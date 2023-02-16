<!--PAGE LANGUAGE:  ESPANOL -->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("includes/welcome-inc.php");?>


<!--MAIN CONTENT-->
		
<BODY id="full-page">

	<div id="load-background"> 

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

	<?php include 'ecobricks_env.php';?> 

			<div class="gallery10-content-block">
								
				<div class="flex-container10">
						
					<?php
					$sql = "SELECT * FROM vw_top_10_last_month ;";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {

					echo '
					<div class="gal-photo10">
					<a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["ecobrick_full_photo_url"].'?v=1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" loading="lazy"/></a>';
					echo '<div class="gal10-photo-text"><b>Ecobrick '.$row["ecobrick_unique_id"].'</b><br>By '.$row["ecobrick_owner"].'<br>'.$row["location"].'</div></div>';

					}

					} else {
					echo "No se pudo conectar a la base de datos de Brikchain";
					}

					?>
							
				</div>
		
			</div>

			<div class="blue-back" style="background: #0ff;width:100%;">
		
				<div class="clouds-new">

		
		
					<!--<div class="feed-live"><p><span class="blink">←  ↔  →</span></div>-->
			
					<div id="main-content" style="padding-bottom: 90px; padding-top:15px">
				
						<div class="big-header">Los 10 mejores ecoladrillos de este mes</div>
						<div class="sub-text"><p>Cada mes se registran miles de ecoladrillos y se revisan por pares. Vea los diez ecoladrillos que recibieron los puntajes de autenticación más altos el mes pasado.</p>
						</div> 

						<a href="top-tens.php" button class="main-button">The Top 10's</a>
					</div>
				</div>
			</DIV>

	<!-- This loads the page's top graphics-->

		<!--<div id="clouds"><img src="https://www.ecobricks.org/webp/mountain-top2.webp?v4" width="100%"></div>-->
		<div id="cloud-banner"><img src="https://www.ecobricks.org/webp/vision-bottom4.webp?v3" width="100%" height="31%"></div>



	<!--FIRST CONTENT SECTION-->

	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="svgs/dolphin-top-optimized.svg?v6" width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean" loading="lazy"></div>
			<div class="big-header">Acelerando la Transición Plástica</div>
			<div class="sub-text">
			<p>Juntos podemos mantener nuestro plástico fuera de los océanos. Con los ladrillos ecológicos podemos asegurar el plástico para construir nuestras visiones más ecológicas y encender la transición regenerativa.</p>
			</div>
			 <a href="faqs.php" button class="main-button">Los Ecobricks</a>
			<h6><a href="what.php">Que es un ecobrick?</a> | <a href="/how">¿Cómo hacer? </a> | <a href="/why">¿Por qué hacer?</a></h6>
		</div>	
	
	</div>

	<!--SECOND CONTENT SECTION-->

	  
	<div id="content-sect2">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/earth-service-700px.webp" width="100%" height="96%" alt="eco bricks follow the Earth's example." max-width="700px">
			</div>
			<div class="big-header">Sigue el ejemplo de la Tierra</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>Ecobricking sigue el ejemplo de la Tierra de concentrar y asegurar el carbono fuera de la biosfera. Siguiendo la ciencia de la degradación del plástico y los principios de Earthen, el ecobricking es un medio de secuestro de plástico sin capital y cero neto.</p>
			</div>
			<a href="sequest.php" button class="main-button">Secuestro de plástico</a>
			<h6><a href="/ayyew">Ayyew inspirado</a> | <a href="/circular">Diseño Circular</a> | <a href="/plastic">Transición Plastico</a> | <a href="/principles">Principios Regenerador</a> <!--| <a href="/reports">Reports & Whitepapers</a>--></h6>
		</div>
	</div>	
		
	<!--THIRD CONTENT SECTION-->

	<div id="content-sect3">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/spiral-circular-800px.webp" width="100%" max-width="777px" height="90%" alt="eco brick plastic brick building"></div>
			<div class="big-header">El problema es la solución.</div>
			<div class="sub-text"><p>Los ecoladrillos convierten el plástico usado en bloques de construcción reutilizables, ideales para aplicaciones de construcción circulares y en espiral. Úselos para hacer módulos, muebles para el hogar, parques de juegos y jardines forestales para alimentos. Utilizando el problema, podemos construir nuestras visiones más ecológicas.</p>
			</div> 

			<a href="build.php" button class="main-button">Aplicaciones de construcción</a>
			
			<h6><a href="/earth">Edificio Tierra & Ecobrick</a> | <a href="/earth-methods">Metodos Tierra & Ecobrick</a> | <a href="/modules">Modulos</a> | <a href="/circular">Diseño Circular</a> | <a href="/openspaces">Open Spaces</a> | <a href="/fire">Seguridad incendios</a></h6>
		</div>
	</div>

	<!--FOURTH CONTENT SECTION-->

	<div id="content-sect4">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/balancing-green.webp"  width="100%" height="100%"></div>
			<div class="lead-graphic"><img src="svgs/aes-brk.svg" width="100%" height="40%" alt="authenticated eco brick sequetration"></div><!--width="300px" height="254px"-->
			<!--<div class="lead-paragraph"><br>Introducing AES Plastic Offsetting</div>-->
			<div class="sub-text"><p><br>Acelere su viaje hacia el desperdicio cero a través de la compensación de plástico. Las compensaciones de plástico se correlacionan directamente con el plástico ecobrick autenticado a través de la cadena de bloques manual Brikcoin.</p></div>
			<a href="https://gobrik.com/#offset" target="_blank" class="main-button">Compensación de plástico</a>
			<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes"> Plástico AES</a> | <a href="transition.php">Transición plástica </a> | <a href="about.php">Acerca de GEA</a></h6><br><br>
			<p>La cadena de bloques manual de Brikcoin permite la autenticación, valoración y vitalización de ecoladrillos.<br><a href="https://gobrik.com/#offset" target="_blank">Compensa la generación plástica de tu hogar o empresa con nosotros.</a></p><br>
			<img src="svgs/3brikcoins.svg" width="30%">

			<br><br>
			<h4> Ecoladrillo, Eco-brick, o ecobrick?</h4>

			<p>En los primeros días de poner plástico en una botella, lo llamábamos así: ¡ladrillos de botellas de plástico! Luego, cuando nos dimos cuenta de que era útil para los ecosistemas que nos rodean, el nombre cambió a "ladrillos ecológicos" o "ladrillos ecológicos". Hoy en día, 'ecoladrillo' es el término reconocido por <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">Wikipedia</a> para la solución sin emisiones de carbono y sin capital para el <a href="https://en.wikipedia.org/wiki/plastic_sequestration" target="_blank">secuestro de plástico</a></a></p>
				<p>Conozca el enfoque principal del movimiento y la tecnología del ecoladrillo:</p>
				<a href="transition.php" button class="main-button">Transición plástica</a>
			
		</div>
	</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>



	<!--FOOTER ENDS HERE-->

	

</div>
</body>
</html>
