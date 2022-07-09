
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

		echo '<meta name="title" content="Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .' of plastic secured by Alnisah Basher in '. $array["location_country"] .'">';
		echo '<meta name="description" content="'. $array["vision"] .'">';
		echo '<meta name="keywords" content="plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration.">';

        echo '<meta property="og:url"           content="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:title"         content="Regenerative Principles | Ecobricks.org">';
        echo '<meta property="og:description"   content="The principles that guide the ecobrick plastic transition movement."/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="A metaphorical road heading far out into the distance of time"/>';
        echo '<meta property="og:locale" content="en_GB" />';
        echo '<meta property="og:type"          content="website">';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
}
$conn->close();


echo '

</head>

<BODY id="full-page">

	  <div id="load-background">';

require_once ("menus/menu-$lang.php");

require_once ("translate-please.php");

echo '<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
				
			// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
			$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			while($array = $result->fetch_assoc()) {

			
			echo 'Ecobrick ' . $array["serial_no"] .'</div>';
			echo '<div class="splash-sub">Logged on <var>' . $array["date_logged_ts"] .'</var></div></div>' ;
			echo '<div class="splash-image"><img src="'. $array["ecobrick_full_photo_url"] .'" style="width: 100%;"></div>	
			</div>
			<div id="splash-bar"></div>';
			echo '<a name="top"></a><div id="main-content">
			<div class="row">
				<div class="main">
		
					   <div class="page-paragraph">';

		
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
			echo " <div class=\"general-field\"><b>Authenticated weight:</b> <var> " . $array["weight_authenticated_kg"] ."&#8202;kg</var></div></div></div>" ;
		
				}
			} else {
				echo 'Sorry! :-(</div>
				<div class="splash-sub">No results for ecobrick serial number '. $serialNo .' in the Brikchain.  This is most likely because the Brikchain is still being populated with legacy data.</div>
			</div>
			<div class="splash-image"><img src="webp/faqs-400px.webp" style="width: 70%;"></div>	
		</div>
		<div id="splash-bar"></div>

		<a name="top"></a>

		<div id="main-content">
			<div class="row">
				<div class="main">
					<br><br>
					<h3>The Brikchain</h3>
				
					<p>The proof-of-value manual blockchain that powers Brikcoins is affectionately know as the <a href="brikchain.php">the brikchain</a> it is the full ledger of transactions generated by the authentication of ecobricked plastic around on the world on the GoBrik platform.  GoBrik and the Brikchain are maintained and developed by the Global Ecobrick Alliance as a for-Earth, non-profit enterprise.</p>

					<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
					<br><br>
					<a class="action-btn" href="brikchain.php">🔎 Browse the Brikchain</a>
					<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
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
				<img src="webp/eb-sky-400px.webp" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Learn about Ecobricks</h4>
				<h5>Ecobricks are a simple solution for managing our plastic.</h5><br>
				<a class="module-btn" href="/abouot">About Ecobricks</a>
                <br>
			</div>   
         

			<div id="side-module-desktop-mobile">
				<img src="webp/tens-thousands.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>The Brikchain</h4>
				<h5>Brikcoins aspire to accelerate petro-capital transition. Rather than see plastic as ‘waste’ we see it's sequestration as the value to base Brikcoins'.</h5><br>
				<a class="module-btn" href="transition.php">Learn More</a>
			</div>

            <div id="side-module-desktop-mobile">
				<img src="webp/earthen-500px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<h4>AES Plastic</h4>
				<h5>Brikcoins are based on the value generated by following the Earth's example of ecological enrichment.</h5><br>
				<a class="module-btn" href="https://earthen.io/imagine/" target="_blank">Learn More</a>
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