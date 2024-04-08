<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='2.04';?>
<?php $page='ecobrick-details';?>
 
<?php 
	require_once ("../includes/details-ecobrick-page-inc.php");
	include '../ecobricks_env.php';
	include '../ssp.class.php';

	// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.  See: https://www.w3schools.com/php/php_mysql_select_where.asp1
	$serialNo = $_GET['serial_no'];

	$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = '" . $serialNo . "'";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
    while($array = $result->fetch_assoc()) {

		echo 
		'<div class="splash-content-block">
			<div class="splash-box">
	
				<div class="splash-heading"><span data-lang-id="001-splash-title">Ecobrick</span> ' . htmlspecialchars($array["serial_no"], ENT_QUOTES, 'UTF-8') . '</div>
				
				<div class="splash-sub">' . htmlspecialchars($array["weight_authenticated_kg"], ENT_QUOTES, 'UTF-8') . '&#8202;kg <span data-lang-id="002-splash-subtitle">of plastic has been secured out of the biosphere in</span> ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . '</div>
			</div>
			
			<div class="splash-image">
				<a href="javascript:void(0);" onclick="viewGalleryImage(\'' . htmlspecialchars($array["ecobrick_full_photo_url"], ENT_QUOTES, 'UTF-8') . '\', \'Ecobrick ' . htmlspecialchars($array["serial_no"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and logged on ' . htmlspecialchars($array["date_logged_ts"], ENT_QUOTES, 'UTF-8') . '\')"><img src="' . htmlspecialchars($array["ecobrick_full_photo_url"], ENT_QUOTES, 'UTF-8') . '" alt="Ecobrick ' . htmlspecialchars($array["serial_no"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and logged on ' . htmlspecialchars($array["date_logged_ts"], ENT_QUOTES, 'UTF-8') . '"
			title="Ecobrick Serial ' . htmlspecialchars($array["serial_no"], ENT_QUOTES, 'UTF-8') . ' was made in ' . htmlspecialchars($array["location_full"], ENT_QUOTES, 'UTF-8') . ' and authenticated on ' . htmlspecialchars($array["last_validation_ts"], ENT_QUOTES, 'UTF-8') . '"></a>
			</div>    
		</div>
	
		<div id="splash-bar"></div>
		';
	

echo '
<div id="main-content">
	<div class="row">
		<div class="main">
			<div class="row-details">';

            if (isset($array["vision"]) && $array["vision"] != '' && $array["vision"] != '""') {
                echo '<p><div class="vision-quote"> "'. str_replace('"', "", $array["vision"]) . '"  </div></p>';
            }
            
	
			
			echo '<div class="lead-page-paragraph">
						<p><b>'. $array["owner"] .' <span data-lang-id="110">has ecobricked </span> '. $array["weight_g"] .'&#8202;g<span data-lang-id="111"> of community plastic in </span>'. $array["location_city"] .', '. $array["location_country"] .'<span data-lang-id="112"> using a </span>'. $array["volume_ml"] .'ml <span data-lang-id="113"> bottle to make a </span>'. $array["sequestration_type"].'.</b></p>
					</div>';

	

				

			echo ' <div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p><span data-lang-id="114">This ecobrick was with a density of </span>'. $array["density"] .'&#8202;g/ml <span data-lang-id="115">and represents </span>'. $array["CO2_kg"] .'&#8202;kg <span data-lang-id="116">of sequestered C02. The ecobrick is permanently marked with Serial Number </span>'. $array["serial_no"] .'<span data-lang-id="117"> and on </span>'. $array["date_logged_ts"] .'<span data-lang-id="118"> was automatically added to the validation queue.  Based in </span>'. $array["location_region"] .', '. $array["owner"] .'<span data-lang-id="119"> and their community </span>'. $array["community_name"] .', <span data-lang-id="120"> are working hard to keep plastic out of the biosphere in </span>'. $array["location_country"] .'. </p>

						<p><span data-lang-id="121">On </span>'. $array["date_logged_ts"] .'<span data-lang-id="122"> the ecobrick was authenticated with an average validation score of </span>'. $array["final_validation_score"] .'.<span data-lang-id="123"> The ecobrick’s authentication generated </span>'. $array["ecobrick_dec_brk_val"] .'&#8202;ß. <span data-lang-id="124">The ecobrick was ranked with the score of </span>'. $array["validation_score_avg"] .'.</p>
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
					<p style="margin-left: -32px;font-weight: bold;" data-lang-id="125"> +++ Raw Brikchain Data Record</p><br>
					<p>--------------------</p>
					<p data-lang-id="126">BEGIN BRIK RECORD ></p>';

			echo ' <p><b data-lang-id="127">Logged:</b> ' . $array["date_logged_ts"] .'</p>' ;
			echo ' <p><b data-lang-id="128">Volume:</b> <var>'. $array["volume_ml"] .' &#8202;ml</var></p>' ;
			echo ' <p><b data-lang-id="129">Weight:</b> <var>' . $array["weight_g"] .'&#8202;g</var></p>' ;
			echo ' <p><b data-lang-id="130">Density:</b> <var>' . $array["density"] .'&#8202;g/ml</var></p>' ;
			echo ' <p><b data-lang-id="131">CO2e:</b><var>' . $array["CO2_kg"] .' &#8202;kg</var></p>' ;
			echo ' <p><b data-lang-id="132">Brikcoin value:</b> <var>' . $array["ecobrick_dec_brk_val"] .'&#8202;ß</var></p>' ;

			echo ' <p><b data-lang-id="133">Maker:</b> <var><i>' . $array["owner"] .'</i></var> </p>' ;
			echo ' <p><b data-lang-id="134">Sequestration:</b> <var>' . $array["sequestration_type"].'</var></p>' ;
			echo ' <p><b data-lang-id="135">Brand:</b> <var>' . $array["brand_name"] .'</var></p>' ;
			echo ' <p><b data-lang-id="136">Bottom colour:</b> ' . $array["bottom_colour"] .'</p>' ;

			echo ' <p><b data-lang-id="137">Plastic source:</b>' . $array["plastic_from"] .'</p>' ;

			echo ' <p><b data-lang-id="138">Community:</b> <var>' . $array["community_name"] .'</var></p>' ;
			echo ' <p><b data-lang-id="139">City:</b> <var>' . $array["location_city"] .'</var></p>' ;
			echo ' <p><b data-lang-id="140">Region:</b> <var>' . $array["location_region"] .'</var></p>' ;
			echo ' <p><b data-lang-id="141">Country:</b> ' . $array["location_country"] .'</p>' ;
			echo ' <p><b data-lang-id="142">Full location:</b> <var>' . $array["location_full"] .'</var></p>' ;


			echo ' <p><b data-lang-id="143">Validation:</b> ' . $array["last_validation_ts"] .'</var></p>' ;
			echo ' <p><b data-lang-id="144">Validator 1:</b> <var>' . $array["validator_1"] .'</var> </p>' ;
			echo ' <p><b data-lang-id="145">Validator 2:</b> <var>' . $array["validator_2"] .'</var> </p>' ;
			echo ' <p><b data-lang-id="146">Validator 3:</b> <var>' . $array["validator_3"] .'</var> </p>' ;
			echo ' <p><b data-lang-id="147">Validation score avg.:</b> <var>' . $array["validation_score_avg"] .'</var></p>' ;

			echo ' <p><b data-lang-id="148">Validation score final:</b> <var>' . $array["final_validation_score"] .'</var></p>' ;
			echo ' <p><b data-lang-id="149">Authenticated weight:</b> <var> ' . $array["weight_authenticated_kg"] .'&#8202;kg</p>
			<p data-lang-id="150"> ||| END RECORD.</p>
				</div>
			</div>
			' ;

			echo '
			<br><hr><br> 
			<div class="page-paragraph">
				<h3><p data-lang-id="151">The Brikchain</p></h3>
			
				<p data-lang-id="152">When an ecobrick is authenticated (like the one above!) it is published to the brikcoin manual blockchain and brikcoins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick as well as all the other ecobricks, blocks and transactions that underpin the Brickoin currency.</p>

			<p data-lang-id="153">As a non-capital, manual process, brikcoin generation favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br>
				<p ><a class="action-btn-blue" href="brikchain.php" data-lang-id="154">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="155">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>';
			
			echo '	<div class="side">

			<div class="side-module-desktop-mobile">
					<img src="../pngs/authenticated-ecobrick.png" width="90%" alt="Following the Earths example through eco bricking">
					<br><h4 data-lang-id="104-side-authenticated-text">Authenticated!</h4>
					<h5 data-lang-id="105-side-authenticated-text">This ecobrick has been authenticated by three independent validators that it meets the standards of plastic sequestration.</h5><br>
					<a class="module-btn" href="about.php" data-lang-id="106-side-authenticated-button">Ecobrick Standards</a>
					<br><br>
				</div>   ';

	}


} else {
   


echo '
<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
	
			echo 'Sorry! :-(</div>
			<div class="splash-sub" data-lang-id="151">No results for ecobrick '. $serialNo .' in the Brikchain.  Most likely this is because the Brikchain data is still in migration.</div>
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
			<p data-lang-id="152">🚧 The data for ecobrick '. $serialNo .' has not yet been migrated to the blockchain.  This could be because of transfer delay.  Normally publishing occurs within 30 seconds of authentication.  If more than 24hrs has passed, an error has occurred or this ecobrick was not authenticated.
				</p></div><br><br><br><br>
				
				<div class="page-paragraph">
				<p><h3 data-lang-id="154">The Brikchain</h3></p>
			
				<p data-lang-id="155">When an ecobrick is authenticated, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find authenticated ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p data-lang-id="156">As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br>
				<p><a class="action-btn-blue" href="brikchain.php" data-lang-id="157">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="158">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>

			<div class="side">
		  
		';
		}
		$conn->close();

		?>



				
	

			
			

		
	

            <div class="side-module-desktop-mobile">
				<img src="../webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<h5 data-lang-id="100-side-aes-text">The weight of the plastic inside an authenticated ecobrick is what we call Authenticated Ecobricked Plastic (AES plastic) for short.</h5><br>
				<a class="module-btn" href="/aes" target="_blank" data-lang-id="101-side-aes-button">About AES</a><br><br>
			</div>

			<div class="side-module-desktop-mobile">
				<img src="../webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4 >Brikcoins</h4>
				<h5 data-lang-id="102-side-brikcoins-text">When an ecobrick is authenticated, brikcoins are generated to represent the ecological value of its AES plastic.</h5><br>
				<a class="module-btn" href="brikcoins.php" data-lang-id="103-side-brikcoins-button">About Brikcoins</a><br><br>
			</div>

		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>





</div>
</body>
</html>