
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



			echo '		<div class="splash-sub">'. $array["weight_authenticated_kg"] .'&#8202;kg of plastic has been secured out of the biosphere in '. $array["location_full"] .' .</div>
						</div>' ;
			
			echo '<div class="splash-image"><img src="'. $array["ecobrick_full_photo_url"] .'" style="	border-width: 11px;
			border-color: #97C4E3;
			width: 85%;
			margin-top:-20px;
			box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
			border-style: solid;" alt="Ecobrick Serial '. $array["serial_no"] .' "></div>	
			</div>';

			

			echo '<div id="splash-bar"></div>';

			echo '<a name="top"></a><div id="main-content">
			<div class="row">
				<div class="main">';

			echo '<div class="lead-page-paragraph">
			<p>Baay National High School ecobricked 600 g of community plastic in LICUAN-BAAY, Philippines using a 1500ml bottle to make a Regular Ecobrick.</p></div>';

			echo '<div class="page-paragraph">
			<p>The ecobrick has a density of 0.40g/ml and represents 1.86kg CO2 of sequestered C02. The ecobrick is permanently marked with Serial Number 187732 and on 06/14/2022 was automatically added to the validation queue. It is Andrea kate bolante’s number 1 ecobrick. Based in Abra, their community Baay National High School, is working hard to keep plastic out of the biosphere in Philippines.</p>';
			
			
			echo '<p>On 06/20/2022 11:20pm the ecobrick was authenticated with an average validation score of 28.00. The ecobrick’s authentication generated 6.00ß. The ecobrick was ranked with the score of 46.88.</p>
			</div>
			<br><br>
			<hr>
			<br>
			<div class="page-paragraph">';

	

		
			echo " <div class=\"main\"><b>Logged:</b> <var>" . $array["date_logged_ts"] ."</div>" ;
			echo " <div class=\"main\"><b>Volume:</b> <var>" . $array["volume_ml"] ."&#8202;ml</div>" ;
			echo " <div class=\"main\"><b>Weight:</b> <var>" . $array["weight_g"] ."&#8202;g</var></div>" ;
			echo " <div class=\"main\"><b>Density:</b> <var>" . $array["density"] ."&#8202;g/ml</var></div>" ;
			echo " <div class=\"main\"><b>CO2e:</b><var> " . $array["CO2_kg"] ."&#8202;kg</var></div>" ;
			echo " <div class=\"main\"><b>Brikcoin value:</b> <var>" . $array["ecobrick_dec_brk_val"] ."&#8202;ß</var></div></div>" ;

			echo "  <div id=\"details-content\"><div class=\"general-field\"><b>Maker:</b> <var><i>" . $array["owner"] ."</i></var> </div>" ;
			echo "  <div class=\"general-field\"><b>Sequestration:</b> <var>" . $array["sequestration_type"]."</var></div>" ;
			echo " <div class=\"general-field\"><b>Brand:</b> <var>" . $array["brand_name"] ."</var></div>" ;
			echo "  <div class=\"general-field\"><b>Bottom colour:</b> " . $array["bottom_colour"] ."</var></div></div>" ;
			
			echo "  <div id=\"details-content\"><div class=\"general-field\"><b>Plastic source:</b> " . $array["plastic_from"] ."</var></div>" ;

			echo "  <div class=\"general-field\"><b>Community:</b> <var>" . $array["community_name"] ."</var></div>" ;
			echo "  <div class=\"general-field\"><b>City:</b> <var>" . $array["location_city"] ."</var></div>" ;
			echo "  <div class=\"general-field\"><b>Region:</b> <var>" . $array["location_region"] ."</var></div>" ;
			echo "  <div class=\"general-field\"><b>Country:</b> " . $array["location_country"] ."</div>" ;
			echo "  <div class=\"general-field\"><b>Full location:</b> <var>" . $array["location_full"] ."</var></div></div>" ;


			echo "  <div id=\"details-content\"><div class=\"general-field\"><b>Validation:</b> " . $array["last_validation_ts"] ."</var></div>" ;
			echo "  <div class=\"general-field\"><b>Validator 1:</b> <var>" . $array["validator_1"] ."</var> </div>" ;
			echo " <div class=\"general-field\"><b>Validator 2:</b> <var>" . $array["validator_2"] ."</var> </div>" ;
			echo "  <div class=\"general-field\"><b>Validator 3:</b> <var>" . $array["validator_3"] ."</var> </div>" ;
			echo "  <div class=\"general-field\"><b>Validation score avg.:</b> <var>" . $array["validation_score_avg"] ."</var></div>" ;
			//echo " <p><b>Last ownership change:</b> <var>" . $array["last_ownership_change"] ."</var></p>" ;
			echo "  <div class=\"general-field\"><b>Validation score final:</b> <var>" . $array["final_validation_score"] ."</var></div>" ;
			echo " <div class=\"general-field\"><b>Authenticated weight:</b> <var> " . $array["weight_authenticated_kg"] ."&#8202;kg</var></div></div>" ;
			echo '<br><hr><br> <div class="page-paragraph">
			<h3>The Brikchain</h3>
		
			<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
			<br><br>
			<a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a>
			<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
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

				<div class="page-paragraph">
				The data for ecobrick '. $serialNo .' has not yet been migrated to the blockchain.
				<br><br><br><br>
				<h3>The Brikchain</h3>
			
				<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br><br>
				<a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a>
				<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>
		   <!--<div class="side2">
		   <br><img src="webp/brk-cascade.webp" width="50%" alt="brikcoins in action" loading="lazy">
		   </div></div>-->
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
				<h5>The weight of the plastic inside an authenticated ecobrick is what we call Authenticated Ecobricked Plastic-- or AES plastic for short.are know.</h5><br>
				<a class="module-btn" href="/aes" target="_blank">About AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/brikchain-450px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>The Brikchain</h4>
				<h5>When an ecobrick is authenticated it is recorded on the proof-of-value manual blockchain known as the Brikchain.  Brikcoins corresponding to the AES plastic are generated.</h5><br>
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