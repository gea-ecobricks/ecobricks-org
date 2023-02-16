<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("includes/welcome-inc.php");?>


<!--MAIN CONTENT-->
		
<BODY id="full-page">

	<div id="load-background"> 

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

	<?php include 'ecobricks_env.php';?> 

	<!-- This loads the page's top graphics-->

		<div id="clouds"><img src="https://www.ecobricks.org/webp/mountain-top2.webp?v4" width="100%"></div>
		<div id="cloud-banner"><img src="https://www.ecobricks.org/webp/vision-bottom4.webp?v3" width="100%" height="31%"></div>


		<div id="sliders">
		

			<!-- TOP TEN ECOBRICKS-->

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

		</div>


	<!--FIRST CONTENT SECTION-->

	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="svgs/dolphin-top-optimized.svg?v8" width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean" loading="lazy"></div>
			<div class="big-header">Accelerating Plastic Transition</div>
			<div class="sub-text">
			<p>Together we can keep our plastic out of the oceans.  With ecobricks we can secure plastic to build our greenest visions and ignite regenerative transition.</p>
			</div>
			 <a href="faqs.php" button class="main-button">All About Ecobricks</a>
			<h6><a href="what.php">What is an ecobrick?</a> | <a href="/how">How to Make?</a> | <a href="/why">Why Make?</a></h6>
		</div>	
	
	</div>

	<!--SECOND CONTENT SECTION-->

	  
	<div id="content-sect2">
		<div id="main-content">
			<div class="lead-graphic"><img src="svgs/earth-service-animation.svg?v=5" width="100%" height="96%" alt="eco bricks follow the Earth's example." max-width="700px" loading="lazy">
			</div>
			<div class="big-header">Following Earth's Example</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>Ecobricking follows Earth's example of concentrating and securing carbon out of the biosphere.  Following the science of plastic degradation and Earthen principles, ecobricking is a non-capital, net-zero means of plastic sequestration.</p>
			</div>
			<a href="sequest.php" button class="main-button">Plastic Sequestration</a>
			<h6><a href="/ayyew">Ayyew Inspired</a> | <a href="/circular">Circular by Design</a> | <a href="/plastic">Towards Transition</a> | <a href="/principles">Regenerative</a> <!--| <a href="/reports">Reports & Whitepapers</a>--></h6>
		</div>
	</div>	

<!-- FULL GALLERY-->

	
		<div class="gallery-background">
		
				
			<div class="gallery-content-block">
			  	
				<div class="flex-container">
		
					<?php

					$sql = "SELECT * FROM vw_gallery_feed ;";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						array_reverse($result);
					// output data of each row
					while( $row= $result->fetch_assoc()) {

					echo '
					<div class="gal-photo"><div class="photo-box">
					<a href="https://ecobricks.org/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["thumb_url"].'?v=1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" loading="lazy"/></a></div>';
				
					echo '<div class="brik-co2">'.$row["ecobrick_brk_amt"].' BRK<br>'.$row["weight_in_g"].'g<br>'.$row["CO2_kg"].' CO2e</div>
					</div>';
					}

					} else {
					echo "Failed to connect to the Brikchain database";
					}

					?>
					<div class="gal-photo" style="width: 200px; padding-top: 20px; margin-top: auto;"><div class="feed-live"><p><span class="blink">⬤ Live Feed:</span>
					Latest authenticated ecobricks</p></div></div>
					
			
				</div>
				
			</div>
			<div class="feed-live"><p><span class="blink">⬤</span> 50 latest selfie briks = 34kg plastic sequestered / 150kg CO2e / 340 BRK generated</p></div>

			<div id="main-content">
			
				<div class="big-header">The Brikchain</div>
				<div class="sub-text"><p>Every ecobrick that is authenticated is permenantly recorded onto the Brikcoin blockchain to generate 0.1 BRK for each gram of sequestered plastic that it represents.</p>
				</div> 

				<a href="brikchain.php" button class="main-button">Browse the Brikchain</a>
			
				<h6><a href="/brikcoins">Brikcoins</a> | <a href="/aes">AES Plastic</a> | <a href="/gobrik">GoBrik Platform</a></h6>
			</div>

		
		</div>

		
	<!--THIRD CONTENT SECTION-->

	<div id="content-sect3">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/spiral-circular-800px.webp" width="100%" max-width="777px" height="90%" alt="eco brick plastic brick building" loading="lazy"></div>
			<div class="big-header">The Problem is the Solution.</div>
			<div class="sub-text"><p>Ecobricks turn used plastic into reusable building blocks ideal for circular & spiral building applications.  Ecobrick applications range from home furniture, to food-forest gardens to structures.  By transforming the problem, we can build solutions!</p>
			</div> 

			<a href="build.php" button class="main-button">Building Applications</a>
			
			<h6><a href="earth.php">Earth & Ecobrick Building</a> | <a href="/earth-methods">E&B Methods</a> | <a href="/modules">Milstein Modules</a> | <a href="/circular">Spiral & Circular</a> | <a href="/openspaces">Open Spaces</a> | <a href="/fire">Fire Safety</a></h6>
		</div>
	</div>

	
	<!--	<div class="feed-live"><p><span class="blink">←  ↔  →</span></div>-->
				
		<div id="main-content">
		
			<div class="big-header">This Month's Top Ecobricks</div>
			<div class="sub-text"><p>Every month thousands of ecobricks are logged and peer reviewed.  See the ten ecobricks that received the highest authentication scores this past month.</p>
			</div> 

			<a href="top-tens.php" button class="main-button">The Top 10's</a>
		</div>
	</div>
			  

	<!--FOURTH CONTENT SECTION-->

	<div id="content-sect4">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/balancing-green.webp"  width="100%" height="100%" loading="lazy"></div>
			<div class="lead-graphic"><img src="svgs/aes-brk.svg" width="100%" height="40%" alt="authenticated eco brick sequetration" loading="lazy"></div><!--width="300px" height="254px"-->
			<!--<div class="lead-paragraph"><br>Introducing AES Plastic Offsetting</div>-->
			<div class="sub-text"><p><br>Fast track your journey to zero-waste through plastic offsetting.  Plastic offsets are directly correlated to authenticated ecobricked plastic through the Brikcoin manual blockchain.</p></div>
			<a href="https://gobrik.com/#offset" target="_blank" class="main-button">Plastic Offsetting</a>
			<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes">AES Plastic</a> | <a href="transition.php">Plastic Transition</a> | <a href="about.php">About the GEA</a></h6><br><br>
			
			<!--<p>The Brikcoin manual blockchain enables the authentication, valuation and vitalization of ecobricks.<br><a href="https://gobrik.com/#offset" target="_blank">Offset your household or company plastic generation with us.</a></p><br>-->

			<img src="svgs/3brikcoins.svg" width="30%">

			<br><br>
			<h4>Eco-brick, eco brick, or ecobrick?</h4>

			<p>Back in the early days of putting plastic into a bottle we called it just that-- plastic bottle bricks!  Then when we realized it was helpful to the <b>eco</b>systems around us, the name changed to "eco bricks" or "eco-brick". Today 'ecobrick' is the <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">Wikipedia recongnized</a> term for the go-to, non-capital, zero-carbon solution for <a href="https://en.wikipedia.org/wiki/plastic_sequestration" target="_blank">plastic sequestration</a></a></p>
				<p>Learn about the main focus of the ecobrick movement and technology:</p>
				<a href="transition.php" button class="main-button">Plastic Transition</a>
			
		</div>
	</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>



	<!--FOOTER ENDS HERE-->

	

</div>
</body>
</html>
