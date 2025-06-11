<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("../includes/symp-inc.php");?>


<script>
// Set the date we're counting down to
var countDownDate = new Date("April 23, 2023 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


<!--MAIN CONTENT-->
		
<BODY id="full-page"> 

	<div id="load-background"> 

	<!-- This loads the page's language specific menu -->

    <?php require_once ("../menus/menu-$lang.php");?>

	<!-- This loads the page's top graphics-->

		<div id="clouds"><img src="https://www.ecobricks.org/webp/mountain-top2.webp?v4" width="100%"></div>
		<div id="cloud-banner"><img src="https://www.ecobricks.org/webp/vision-bottom4.webp?v3" width="100%" height="31%"></div>

	<div>
	
	
	
		<!-- SLIDER CONTENT -->
	
		<div id="intro" style="  width: 100%;
  margin-bottom: 0;
  position: absolute;
  z-index: 9;
  top: 224px;
">
		<div class="big-header" style="color:white;">Earthen Ethics Symposium</div>
		<div class="sub-text">Speakers, Events & Workshops</div>
		<h2 id="demo" style="text-align:center"></h2>

		</div>

	<!--FIRST CONTENT SECTION-->

	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic">
				<img src="../svgs/dolphin-top-optimized.svg?v8" width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean" loading="lazy">
<!--
				<img src="../svgs/earth-home-animated-v4.svg?v=2" width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean" loading="lazy">
			</div>-->
			<!--<div class="big-header">Earthen Ethics Symposium</div>-->

			<div class="sub-text">
			<h4>Planet-wide individuals are working daily to cocreate a more hospitable home and greener planet for all living beings.</h4>
			<p>
				The aim of this  symposium is to gather people, game changers and experts from different countries, with different stories and different lived experiences into an open space to talk about how we reintegrate with our planet.</p>

				<p>We want to empower and inspire each other by sharing the importance of this topic.
				</p>
			</div>
			 <a href="faqs.php" button class="main-button">Register</a>
			<h6><a href="what.php">Find out more</a> | <a href="/how">Schedule</a> | <a href="/why">Speakers</a></h6>
		</div>	
	
	</div>

	<!--SECOND CONTENT SECTION-->

	  
	<div id="content-sect2">
		<div id="main-content">
			<div class="lead-graphic"><img src="../svgs/earth-service-animation.svg?v=5" width="100%" height="96%" alt="eco bricks follow the Earth's example." max-width="700px" loading="lazy">
			</div>
			<div class="sub-text">
			<h4>
			In every moment we have the power to contribute with our choices to make the change we want to see in the world.</h4>
            <p>Every day Counts.  Small changes make a big impact together.</p>


			<div class="big-header">Composting</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>Composting is mother nature's waste management system.  All organic things compost naturally.  The human race can emulate this practice.  Anything from piling leaves to wormeries are considered composting.</p>

			<p>Watch Lucie Mann, New Forest Aquaponics CIC and Global Ecobrick Alliance Core Team explain how she composts all sorts of food waste from the food waste programme being run in the New Forest, UK.</p>

			<p>As Lucie and her family run an aquaponics farm, the composting she undertakes is part of a fully circular permaculture ecosystem.</p>
			</div>

			<div class="big-header">Permaculture</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>Permaculture is the development of sustainable and self-efficient agricultural ecosystems. We have [speaker name] presenting our permaculture offering.  Like Mother Nature permaculture is a mandalic act of mindful recycling
</p>
			</div>

			<div class="big-header">Mandalic Collaboration</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>To improve our connection with the earth’s natural cycles we practise Mandala design principles.<p>

Join Ani Himawati in a mindful mandala meditation.  Training our minds to think circularly through artistic impressions using natural resources.</p>

			</div>

			<div class="big-header">Food Poverty/Food Banks</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>Despite there being more than enough food in the world to feed everyone one on the planet, many are still facing food poverty.  Some people are fortunate enough to be able to access food banks (UK) to reduce the impact.</p>

			<p>Join Waterside Food Waste project whilst they share how they set up and operate in their local community and the invaluable impact it has had on the people who live in perceived affluent area but has deep pockets of people living with food poverty due to the cost of living.</p>

			</div>

			<div class="big-header">Zero Waste Shops</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>There are more and more zero waste shops opening in the UK
</p>

			</div>

			<div class="big-header">Waste Streams around the World</div>
			<!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
			<div class="sub-text">
			<p>Waste management infrastructure differs greatly around the world.  Often the countries with the least infrastructure are the ones that are taking others waste to fund the country.  </p>

			<p>Join us in this review of how waste management differs around the world and the impact your waste could be having when we entrust it to waste management companies.</p>

			</div>

			 <a href="faqs.php" button class="main-button">Register</a>
			<h6><a href="what.php">Find out more</a> | <a href="/how">Schedule</a> | <a href="/why">Speakers</a></h6>
		</div>
	</div>	


		
	<!--THIRD CONTENT SECTION-->
<!--
	<div id="content-sect3">
		<div id="main-content">
			<div class="lead-graphic"><img src="../webp/spiral-circular-800px.webp" width="100%" max-width="777px" height="90%" alt="eco brick plastic brick building" loading="lazy"></div>
			<div class="big-header">The Problem is the Solution.</div>
			<div class="sub-text"><p>Ecobricks turn used plastic into reusable building blocks ideal for circular & spiral building applications.  Ecobrick applications range from home furniture, to food-forest gardens to structures.  By transforming the problem, we can build solutions!</p>
			</div> 

			<a href="build.php" button class="main-button">Building Applications</a>
			
			<h6><a href="earth.php">Earth & Ecobrick Building</a> | <a href="/earth-methods">E&B Methods</a> | <a href="/modules">Milstein Modules</a> | <a href="/circular">Spiral & Circular</a> | <a href="/openspaces">Open Spaces</a> | <a href="/fire">Fire Safety</a></h6>
		</div>
	</div>
-->
			  

	<!--FOURTH CONTENT SECTION-->
	<!--

	<div id="content-sect4">
		<div id="main-content">
			<div class="lead-graphic"><img src="../webp/balancing-green.webp"  width="100%" height="100%" loading="lazy"></div>
			<div class="lead-graphic"><img src="../svgs/aes-brk.svg" width="100%" height="40%" alt="authenticated eco brick sequetration" loading="lazy"></div>

			<div class="sub-text"><p><br>Fast track your journey to zero-waste through plastic offsetting.  Plastic offsets are directly correlated to authenticated ecobricked plastic through the Brikcoin manual blockchain.</p></div>
			<a href="https://gobrik.com/#offset" target="_blank" class="main-button">Plastic Offsetting</a>
			<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes">AES Plastic</a> | <a href="transition.php">Plastic Transition</a> | <a href="about.php">About the GEA</a></h6><br><br>
			
			<p>The Brikcoin manual blockchain enables the authentication, valuation and vitalization of ecobricks.<br><a href="https://gobrik.com/#offset" target="_blank">Offset your household or company plastic generation with us.</a></p><br>

			<img src="../svgs/3brikcoins.svg" width="30%">

			<br><br>
			<h4>Eco-brick, eco brick, or ecobrick?</h4>

			<p>Back in the early days of putting plastic into a bottle we called it just that-- plastic bottle bricks!  Then when we realized it was helpful to the <b>eco</b>systems around us, the name changed to "eco bricks" or "eco-brick". Today 'ecobrick' is the <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">Wikipedia recongnized</a> term for the go-to, non-capital, zero-carbon solution for <a href="https://en.wikipedia.org/wiki/plastic_sequestration" target="_blank">plastic sequestration</a></a></p>
				<p>Learn about the main focus of the ecobrick movement and technology:</p>
				<a href="transition.php" button class="main-button">Plastic Transition</a>
			
		</div>
	</div>
-->

	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footers/footer-$lang.php");?>



	<!--FOOTER ENDS HERE-->

	

</div>
</body>
</html>
