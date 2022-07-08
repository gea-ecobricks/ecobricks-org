


<!-- The DB connection creator -->
<?php include 'db.php';?>



<?php

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<meta name="description" content="The principles that guide the ecobrick plastic transition movement.">';
		echo '<meta name="keywords" content="plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration.">';
		echo '<title>Regenerative Principles | Ecobricks.org</title>' ;
        echo '<meta property="og:url"           content="https://ecobricks.org/en/sequest.php"/>' ;
        echo '<meta property="og:title"         content="Regenerative Principles | Ecobricks.org">';
        echo '<meta property="og:description"   content="The principles that guide the ecobrick plastic transition movement."/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="A metaphorical road heading far out into the distance of time"/>';
        echo '<meta property="og:locale" content="'  .$lang. '"_GB" />';
        echo '<meta property="og:type"          content="website">';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
}
$conn->close();

?>
 
</head>



<BODY id="full-page">

<div id="load-background">
  
<!-- This loads the page's language specific menu -->

<?php require_once ("menus/menu-$lang.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("translate-please.php");?>


<!--SPLASH SECTION-->

<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">The Ecobrick!</div>
		<div class="splash-sub">Ecobricking is guided by principles that point us towards ever increasing harmony with the ecological cycles of which we are immersed.</div>
	</div>
	<div class="splash-image"><img src="https://www.ecobricks.org/webp/earthhome-400px.webp" style="width: 70%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

		<div class="lead-page-paragraph">	

				
				<button onClick="javascript:window.close('','_parent','');">Close & Return</button><br><br><br><br>
				<p>An overview of the ecobrick recorded on the brikchain upon its authentication.</p><br>
        </div>

        <div class="page-paragraph">
		
        <?php

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<div id="photo"><img src="'. $array["ecobrick_full_photo_url"] .'" width="100%" alt="Ecobrick basic pic"/></div>';
		echo "<div id=\"main-details\"><div class=\"serial\">Serial: <var>" . $array["serial_no"] ."</var></div> </br>";
		echo " <div class=\"date\"><b>Logged on </b><var>" . $array["date_logged_ts"] ."</var></div>" ;

	
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
		echo " <div class=\"general-field\"><b>Authenticated weight:</b> <var> " . $array["weight_authenticated_kg"] ."&#8202;kg</var></div>" ;
		
    }
} else {
    echo "<div id=\"main-details\"><div class=\"serial\">Sorry :-(</div></div><div id=\"details-content\"><div class=\"general-field\">No results for ecobrick serial number $serialNo in the Brikchain.  This is most likely because the Brikchain is still being populated with legacy data.</div>";
}
$conn->close();

?>
	

    </DIV>
		

		<div class="side">

		<div id="side-module-desktop-mobile">
				<img src="webp/earthservice-400px.webp" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Following the Earth's Example</h4>
				<h5>Plastic Sequestration follows the Earth’s example.  Learn about the ancient history of this modern methodology.</h5><br>
				<a class="module-btn" href="/plastic">Plastic's Long Story</a>
                <br>
			</div>   
         

			<div id="side-module-desktop-mobile">
				<img src="webp/tens-thousands.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Plastic Transition</h4>
				<h5>Brikcoins aspire to accelerate petro-capital transition. Rather than see plastic as ‘waste’ we see it's sequestration as the value to base Brikcoins'.</h5><br>
				<a class="module-btn" href="transition.php">Learn More</a>
			</div>

            <div id="side-module-desktop-mobile">
				<img src="webp/earthen-500px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<h4>Earthen Ethics</h4>
				<h5>Brikcoins are based on the value generated by following the Earth's example of ecological enrichment.</h5><br>
				<a class="module-btn" href="https://earthen.io/imagine/" target="_blank">Learn More</a>
			</div>

			<div id="side-module-desktop-mobile">
					<img src="/webp/for-earth500px.webp" width="90%" alt="For-Earth Enterprise">
					<h4>Global Ecobrick Alliance</h4>
					<h5>The GEA is dedicated to accelerating plastic transition.  	We preside over the GoBrik platform and the Brikcoin blockchain.</h5><br>
					
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