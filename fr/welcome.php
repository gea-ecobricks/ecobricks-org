<!--PAGE LANGUAGE:  ENGLISH-->  

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
					<a href="https://ecobricks.org/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["ecobrick_full_photo_url"].'?v=1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" loading="lazy"/></a>';
					echo '<div class="gal10-photo-text"><b>Ecobrick '.$row["ecobrick_unique_id"].'</b><br>By '.$row["ecobrick_owner"].'<br>'.$row["location"].'</div></div>';

					}

					} else {
					echo "Failed to connect to the Brikchain database";
					}

					?>
							
				</div>
		
			</div>

			<div class="blue-back" style="background: #0ff;width:100%;">
		
				<div class="clouds-new">

		
		
					<!--<div class="feed-live"><p><span class="blink">←  ↔  →</span></div>-->
			
					<div id="main-content" style="padding-bottom: 90px; padding-top:15px">
				
						<div class="big-header">Les top 10 écobricks du mois</div>
						<div class="sub-text"><p>Chaque mois, des milliers d'écobricks sont enregistrés et évalués par des pairs. Découvrez les dix écobricks qui ont reçu les scores d'authentification les plus élevés le mois dernier.</p>
						</div> 

						<a href="top-tens.php" button class="main-button">Les Top 10</a>
					</div>
				</div>
			</DIV>

	<!-- This loads the page's top graphics-->

		<!--<div id="clouds"><img src="https://www.ecobricks.org/webp/mountain-top2.webp?v4" width="100%"></div>-->
		<div id="cloud-banner"><img src="https://www.ecobricks.org/webp/vision-bottom4.webp?v3" width="100%" height="31%"></div>


	

	<!--FIRST CONTENT SECTION-->

	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="svgs/dolphin-top-optimized.svg?v=5" width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean" loading="lazy"></div>
			<div class="big-header">Accélérer la transition plastique</div>
			<div class="sub-text">
			<p>Ensemble, nous pouvons garder notre plastique hors des océans. Avec les écobricks, nous pouvons sécuriser le plastique pour construire nos visions les plus vertes et déclencher une transition régénérative.</p>
			</div>
			<a href="faqs.php" button class="main-button">Tout sur les écobricks</a>
			<h6><a href="what.php">Qu'est-ce qu'une écobrique?</a> | <a href="/how">Comment faire ?</a> | <a href="/why">Pourquoi fabriquer ?</a></h6></div>	
	</div>

	<!--SECOND CONTENT SECTION-->

	  
	<div id="content-sect2">
		<div id="main-content">
		<div class="lead-graphic"><img src="webp/earth-service-700px.webp" width="100%" height="96%" alt="les briques écologiques suivent l'exemple de la Terre." max-width="700px">
</div>
		<div class="big-header">Suivez l'exemple de la Terre</div>
		<!--<div class="lead-paragraph">Rejoignez le mouvement régénérateur</div>-->
		<div class="sub-text">
		<p>L'écobrique suit l'exemple de la Terre en ce qui concerne la concentration et la sécurisation du carbone hors de la biosphère. Conformément à la science de la dégradation du plastique et aux principes de la terre, l'écobrique est un moyen de séquestration du plastique non capital et net zéro.</p>
		</div>
		<a href="sequest.php" button class="main-button">Séquestration du plastique</a>
		<h6><a href="/ayyew">Inspiré d'Ayyew</a> | <a href="/circular">Circulaire par conception</a> | <a href="/plastic">Vers la transition</a> | <a href="/principles">Régénératif</a> <!--| <a href="/reports">Rapports et livres blancs</a>--></h6></div>
	</div>	
		
	<!--THIRD CONTENT SECTION-->

	<div id="content-sect3">
		<div id="main-content">
		<div class="lead-graphic"><img src="webp/spiral-circular-800px.webp" width="100%" max-width="777px" height="90%" alt="eco brique plastique bâtiment en brique"></div>
		<div class="big-header">Le problème est la solution.</div>
		<div class="sub-text"><p>Les écobricks transforment le plastique usagé en blocs de construction réutilisables, idéaux pour les applications de construction circulaires et en spirale. Utilisez-les pour fabriquer des modules, des meubles de maison, des parcs de jeux et des jardins de forêt alimentaire. En utilisant le problème, nous pouvons construire nos visions les plus vertes.</p>
		</div>

		<a href="build.php" button class="main-button">Construire des applications</a>

		<h6><a href="/earth">Bâtiment Terre & Ecobrick</a> | <a href="/earth-methods">Méthodes E&B</a> | <a href="/modules">Modules Milstein</a> | <a href="/circular">Spirale & Circulaire</a> | <a href="/openspaces">Espaces ouverts</a> | <a href="/fire">Sécurité incendie</a></h6>		</div>
	</div>

	<!--FOURTH CONTENT SECTION-->

	<div id="content-sect4">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/balancing-green.webp" width="100%" height="100%"></div>
			<div class="lead-graphic"><img src="svgs/aes-brk.svg" width="100%" height="40%" alt="authenticated eco brick sequetration"></div>
			<!--<div class="lead-paragraph"><br>Présentation de la compensation plastique AES</div>-->
			<div class="sub-text"><p><br>Accélérez votre parcours vers le zéro déchet grâce à la compensation plastique. Les compensations plastiques sont directement corrélées au plastique ecobrick authentifié via la blockchain manuelle Brikcoin.</p></div>
			<a href="https://gobrik.com/#offset" target="_blank" class="main-button">Compensation plastique</a>
			<h6><a href="/brikcoins">Brikcoins Blockchain</a> | <a href="/aes">Plastique AES</a> | <a href="transition.php">Transition plastique</a> | <a href="about.php">À propos de la GEA</a></h6><br><br>
			<p>La blockchain manuelle Brikcoin permet l'authentification, la valorisation et la vitalisation des écobricks.<br><a href="https://gobrik.com/#offset" target="_blank">Compensez la génération de plastique de votre ménage ou de votre entreprise avec nous.</a></p><br>
			<img src="svgs/3brikcoins.svg" width="30%">

			<br><br>
			<h4>Éco-brique, éco-brique ou éco-brique ?</h4>

			<p>À l'époque où l'on mettait du plastique dans une bouteille, nous l'appelions ainsi : des briques de bouteille en plastique ! Puis, lorsque nous avons réalisé que cela était utile pour les systèmes <b>éco</b> qui nous entourent, le nom a été changé en "briques écologiques" ou "briques écologiques". Aujourd'hui, « ecobrick » est le terme <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">Wikipedia reconnu</a> pour le go-to, sans capital, zéro- solution carbone pour la <a href="https://en.wikipedia.org/wiki/plastic_sequestration" target="_blank">la séquestration du plastique</a></a></p>
			<p>En savoir plus sur l'objectif principal du mouvement et de la technologie des écobriques :</p>
			<a href="transition.php" button class="main-button">Transition plastique</a>
			
		</div>
	</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>



	<!--FOOTER ENDS HERE-->

	

</div>
</body>
</html>
