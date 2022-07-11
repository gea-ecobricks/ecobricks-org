
<!--PAGE LANGUAGE:  ENGLISH
Special Ecobrick View Page: v.1.0.1-->
  
 
<?php 
require_once ("includes/details-ecobrick-page-inc.php");

include 'db.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {




			echo 
			'<div class="splash-content-block">
					<div class="splash-box">
						<div class="splash-heading">';


			echo 		'Ecobrick ' . $array["serial_no"] .'
						</div>';



			echo '		<div class="splash-sub">'. $array["weight_authenticated_kg"] .'&#8202;kg of plastic has been secured out of the biosphere in '. $array["location_full"] .'.</div>
						</div>' ;
			
			echo '<div class="splash-image"><img src="'. $array["ecobrick_full_photo_url"] .'" style="	border-width: 10px;
			border-color: #97C4E3;
			width: 85%;
			margin-top:-20px;
			box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
			border-style: solid;" alt="Ecobrick Serial '. $array["serial_no"] .' "></div>	
			</div>';

			echo '<div id="splash-bar"></div>';

			echo '<a name="top"></a>
			<div id="main-content">
			<div class="row">
				<div class="main">';

			echo '<div class="lead-page-paragraph">
			<br><b><p>'. $array["owner"] .' has ecobricked '. $array["weight_g"] .'&#8202;g of community plastic in '. $array["location_city"] .', '. $array["location_country"] .' using a '. $array["volume_ml"] .' bottle to make a '. $array["sequestration_type"].'</p></b></div>';

			echo '<div class="page-paragraph">
			<p>The ecobrick has a density of '. $array["density"] .'&#8202;g/ml and represents '. $array["CO2_kg"] .'&#8202;kg of sequestered C02. The ecobrick is permanently marked with Serial Number '. $array["serial_no"] .' and on '. $array["date_logged_ts"] .' was automatically added to the validation queue. It is '. $array["owner"] .' bolante’s number 1 ecobrick. Based in '. $array["location_region"] .', their community '. $array["community_name"] .', is working hard to keep plastic out of the biosphere in '. $array["location_country"] .'.</p></div>';
			
			
			echo '<div class="page-paragraph">
			<p>On 06/20/2022 11:20pm the ecobrick was authenticated with an average validation score of '. $array["final_validation_score"] .'. The ecobrick’s authentication generated '. $array["ecobrick_dec_brk_val"] .'&#8202;ß. The ecobrick was ranked with the score of '. $array["validation_score_avg"] .'.</p></div>
			
		
			
			<div id="data-chunk">
			<div class="ecobrick-data">';

			echo '<p style="margin-left: -32px;font-weight: bold;">>> Raw Brikchain Data Record</b<p><br>
				<p>--------------------</p>
				<p>BEGIN BRIK RECORD ></p>';

			echo ' <p><b>Logged:</b> ' . $array["date_logged_ts"] .'</p>' ;
			echo ' <p><b>Volume:</b> <var>'. $array["volume_ml"] .' &#8202;ml</var></p>' ;
			echo ' <p><b>Weight:</b> <var>' . $array["weight_g"] .'&#8202;g</var></p>' ;
			echo ' <p><b>Density:</b> <var>' . $array["density"] .'&#8202;g/ml</var></p>' ;
			echo ' <p><b>CO2e:</b><var>' . $array["CO2_kg"] .' &#8202;kg</var></p>' ;
			echo ' <p><b>Brikcoin value:</b> <var>' . $array["ecobrick_dec_brk_val"] .'&#8202;ß</var></p>' ;

			echo ' <p><b>Maker:</b> <var><i>' . $array["owner"] .'</i></var> </p>' ;
			echo ' <p><b>Sequestration:</b> <var>' . $array["sequestration_type"].'</var></p>' ;
			echo ' <p><b>Brand:</b> <var>' . $array["brand_name"] .'</var></p>' ;
			echo ' <p><b>Bottom colour:</b> ' . $array["bottom_colour"] .'</p>' ;
			
			echo ' <p><b>Plastic source:</b>' . $array["plastic_from"] .'</p>' ;

			echo ' <p><b>Community:</b> <var>' . $array["community_name"] .'</var></p>' ;
			echo ' <p><b>City:</b> <var>' . $array["location_city"] .'</var></p>' ;
			echo ' <p><b>Region:</b> <var>' . $array["location_region"] .'</var></p>' ;
			echo ' <p><b>Country:</b> ' . $array["location_country"] .'</p>' ;
			echo ' <p><b>Full location:</b> <var>' . $array["location_full"] .'</var></p>' ;


			echo ' <p><b>Validation:</b> ' . $array["last_validation_ts"] .'</var></p>' ;
			echo ' <p><b>Validator 1:</b> <var>' . $array["validator_1"] .'</var> </p>' ;
			echo ' <p><b>Validator 2:</b> <var>' . $array["validator_2"] .'</var> </p>' ;
			echo ' <p><b>Validator 3:</b> <var>' . $array["validator_3"] .'</var> </p>' ;
			echo ' <p><b>Validation score avg.:</b> <var>' . $array["validation_score_avg"] .'</var></p>' ;

			echo ' <p><b>Validation score final:</b> <var>' . $array["final_validation_score"] .'</var></p>' ;
			echo ' <p><b>Authenticated weight:</b> <var> ' . $array["weight_authenticated_kg"] .'&#8202;kg</p>
			<p>> END RECORD</p></div>' ;

			echo '<br><hr><br> <div class="page-paragraph">
			<h3>The Brikchain</h3>
		
			<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
			<br><br>
			<a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a>
			<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
		   </div>
		   </div>
		   </div>';  
		
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
	
			echo 'Sorry! :-(</div>
			<div class="splash-sub">No results for ecobrick '. $serialNo .' in the Brikchain.  Most likely this is because the Brikchain data is still in migration.</div>
		</div>
		<div class="splash-image"><img src="webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="empty ecobrick"></div>	
	</div>
	<div id="splash-bar"></div>

	<a name="top"></a>

	<div id="main-content">
		<div class="row">
			<div class="main">
				<br><br>

				
				<div class="ecobrick-data">
				The data for ecobrick '. $serialNo .' has not yet been migrated to the blockchain.
				</div><br><br><br><br>
				<div class="page-paragraph">
				<h3>The Brikchain</h3>
			
				<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br><br>
				<a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a>
				<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>
		  
		';
		}
		$conn->close();

		?>



				
	

			
			

		
		<div class="side">

		<div id="side-module-desktop-mobile">
				<img src="pngs/authenticated-ecobrick.png" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Authenticated!</h4>
				<h5>This ecobrick has been authenticated by three independent validators that it meets the standards of plastic sequestration.</h5><br>
				<a class="module-btn" href="/about">About Ecobricks</a>
                <br><br>
			</div>   

            <div id="side-module-desktop-mobile">
				<img src="webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<h5>The weight of the plastic inside an authenticated ecobrick is what we call Authenticated Ecobricked Plastic (AES plastic) for short.</h5><br>
				<a class="module-btn" href="/aes" target="_blank">About AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Brikcoins</h4>
				<h5>When an ecobrick is authenticated brikcoins are generated to represent the ecological value of its AES plastic.</h5><br>
				<a class="module-btn" href="brikcoins.php">About Brikcoins</a><br><br>
			</div>



		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="accordion-scripts.js" defer></script>


</div>
</body>
</html>