<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/eb-blue.svg">

_END;?>

<?php require_once ("meta/coefficients-$lang.php");?>

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<script src="accordion-scripts.js"></script> 

<STYLE>


/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		/*background: url(webp/about-banner-1500px-b.webp) bottom;*/
		background-color: #FCC32F;
		
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
		position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		/*background: url(webp/about-banner-1500px-b.webp) bottom;*/
		background-color: #FCC32F;
		
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 100%;
		background-size: cover;
		position: relative;
}
}



/*This is the text box on the left of the splash that holds the splash header and sub text*/


@media screen and (max-width: 700px) { 
.splash-text-box {
		position: relative;
		flex: 100%;
		padding: 10px 10px 0px 0px;
		box-sizing: border-box;
		text-align: right;
}
}

@media screen and (min-width: 700px) { 
.splash-text-box {
		z-index: 5;
		position: relative;
		flex: 65%;
		padding: 10px 30px 0px 0px;
		box-sizing: border-box;
		text-align: right;
}
}


@media screen and (max-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: left;
		flex: 25%;
		width: 250px;
		padding: 0px;
		box-sizing: border-box;
		margin: 0px 0px 0px 10px;
}
}

/*This is the image on the right of the content block*/
@media screen and (min-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: center;
		flex: 35%;
		padding: 0px;
		box-sizing: border-box;
		margin-top: 0px;
}
}

.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 300;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4.3em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}

.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: #fff;
  margin: 15px 0;
	/*text-shadow: 0px 0px 10px #fff;*/
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 1.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #FCC32F;
	/*background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top;*/
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	margin-bottom: 40px;

	-webkit-transform: skewY(-3deg);
 	 -moz-transform: skewY(-3deg);
 	 -ms-transform: skewY(-3deg);
 	 -o-transform: skewY(-3deg);
 	 transform: skewY(-3deg);

}

	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--SPLASH SECTION-->

	
<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading">2021 Plastic Coefficients<br>for Regenerativity Reporting</div>
		<div class="splash-sub">by the Global Ecobrick Alliance EE</div>
	</div>
	<div class="splash-image"><img src="webp/gea-perspective-400px.webp" style="width: 70%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
				<p>The Global Ecobrick Alliance maintains and publish global coeffecients for plastic consumption, production and CO2 equivalency for enterprises who are tracking and disclosing their plastic impacts.</p>
			</div>

			<div class="page-paragraph">
				  

				<p>In 2021 the GEA began a compendium of plastic generation coeffecients based on the extensive experience of our 400 trainers working with plastic around the world. This page and our listing here are still in development.</p>


				<h3>From The Brikchain</h3>
			
			</div>
				
			<div class="page-paragraph">
				

            <?php include 'db.php';?>
		

		

			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Plastic Production Coeffecients</h4>
						<h5>For Plastic used within one's own facilities.</h5>
					</div>
					
					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>
				
					
					<p><b>Laptop</b></p>
					
					<p>The purchase and use of a laptop entails plastic generation (packaging, cables, casing, screen, ketboard, etc)</p> 

					<span title="Examining the Carbon Footprint of Devices, Microsoft, Sustainable Software, 2020"><h5>0.5 Kg over lifetime of use</h5></span>
                   
					<p><b>Smart Phone</b></p>
					
					<p>The purchase and use of a smart phone entails plastic generation (packaging, cables, casing, screen, ketboard, etc)</p> 

					<span title="Examining the Carbon Footprint of Devices, Microsoft, Sustainable Software, 2020"><h5>0.4 Kg over lifetime of use</h5></span>
                   
					<p><b>Domestic Air Travel</b></p>
					
					<p>Domestic air travel results in the generation of plastic (ticket, stickers, food and drink service, snacks, meal, etc.)</p> 

					<span title="GEA Estimate"><h5>0.550 per ticket</h5></span>

					<p><b>International Air Travel</b></p>
					
					<p>International air travel results in the generation of plastic (ticket, stickers, food and drink service, snacks, meal, etc.)</p> 

					<span title="GEA Estimate"><h5>0.750 per ticket</h5></span>
                   
	
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Plastic Production</h4>
						<h5>Plastic generated or sent outside of your facilities.</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					<p>The Global Ecobrick Alliance operates as a not-for-profit enterprise with the mandate of for-Earth service.  This means that, unlike a company, we have no share-holders or owners who gather profits.  It aso, means that unlike an organizations, we do not receive charity, grants or CSR funds.  This way we are not beholden to agendas outside of our mission and vision, nor a mandate of growth and profits.
						
					
				</div>
			</div>	


			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Plastic CO2 Equivalencies</h4>
					<h5>Various flows of plastic have significant carbon emissions.</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>

					    <p><b>1. For-Earth</b></p>

					<p>Our enterprise follows the <a href="plastic">Earth's example</a> in generating ecological value.  We follow the <a href="https://earthen.io/the-earthen-ways/" target="_blank">six principles of Earthen ethics</a> to sequester carbon, distibute benefit upwards, support biodiversity, raise ecological awareness and acheive overall net-subtraction in our endeavours.</p><br>

					<p><b>2. Leading by Example</b></p>

					<p>
					We ensure that the processes, methods, products and services of our enterprise are fully in line with our principles.  We track and disclose our ecological impacts to ensure that the net result of our enterprise is the subtraction of CO2 and plastic from the biosphere and the support of biodiversification.  We work to raise ecological consciousness and empower others to follow our example.
						</p><br>

					<p><b>3. Open Source</b></p>

					<p>We make our resources, guides, and code open under Creative Commons Attribution-ShareAlike 4.0 International Licenses.
					</p><br>

					<p><b>4. Gender, Age, Status Transcendent</b></p>

					<p>We strive to craft methods and processes that enable the participation of men and women, young and old, rich and poor and everyone in between.
					</p><br>

					<p><b>5. Fair & Abundant Remuneration for Earth Service</b></p>

					<p>We actively cultivate the space and parameters so that our trainers, staff and principals receive fair and abundant remuneration for their service to the earth.  As our enterprise expands we will ensure a wage bracket to maintain a defined ratio from the highest to the lowest paid person in the organization.
					</p><br>

					<p><b>6. Financial and Impact Transparency</b></p>

					<p>We strive to make all our financials, both in fiat currency and on our Brikcoin blockchain transparent and accessible.  We also disclose our net impacts in terms of CO2 and Plastic.
					</p><br>

					<p><b>7. Not for Profit</b></p>

					<p>No individuals or shareholders will profit from the operation of the enterprise.  At the end of the year, any unspent funds will be reinvested back into the fulfillment of our mission and vision.	
					</p>

					<h6><a href="/principles">Learn more about ecobricking principles</a></h6><br>
				</div>
			</div>

			<div class="reg-content-block" id="block4">

				<div class="opener-header">	
					<div class="opener-header-text">
						<h4>Our Work.</h4>
						<h5>We maintain the technical and philosophical infrastructure for the local and global ecobrick movements.</h5>
						<br>
					</div>

					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
				</div>

				<div id="preclosed4">
						
				
					<br>

					<p><b>Ecobricks.org</b></p>
					<p>We maintain Ecobricks.org (this site) as the go-to source for up-to-date ecobrick information, methods, data and best-practices.</p><br>

					<p><b>GoBrik.com</b></p>
					<p>The GEA maintains and develops the free <a href="https://gobrik.com" target="_blank">GoBrik.com web app to support and connect ecobrickers and their communities.</p><br>

					<p><b>Brikcoin Manual Blockchain</b></p>
					<p>
					The GEA has developed and now maintains the <a href="/brikcoins">Brikcoin manual blockchain</a> as a means to value the plastic sequestration ecobricking and to develop a medium of exchange based on ecological value.  Brikcoins are generated and exchanged on the GoBrik webapp.</p><br>

					<p><b>Ecobrick Best Practices</b></p>
					
					<p>We maintain best practives and standards for<a href="/what">the making of ecobricks</a> and the <a href="/build">building applications</a> of them.</p><br>

					<p><b>Circles - Ecobrick Community Server</b></p>

					<p>We maintain <a href="https://circles.ecobricks.org" target="_blank">GEA Circles</a> as a social media alternative for the global ecobricker community</p><br>

					<p><b>Reports & Whitepapers</b></p>
					<p>We actively developing and publishing reports, research and white papers on ecobrick and plastic transition topics.</p><br>

					<p><b>Ecobrick Educational Resources</b></p>

					<p>The GEA develops and deploys resources such as <a href="https://youtube.com/ecobricks">video tutorials</a> on our youtube channel, photocopiable PDF guidebooks,  Ecobrickable Design parameters and <a href="/trainings">ecobrick trainings</a>.</p><br>
				</div>
			</div>

			<div class="page-paragraph">
				<br><br>

				<p><b>Vision</b></p>
				<p>We envision a Transition from Plastic in our Households, Communities and Enterprises to an ever Greener Harmony with Earth’s Cycles.</p><br>

				<p><b>Our Mission</b></p>
				<p>To raise Ecological Consciousness through the spread of Ecobricking and the transformation of global plastic into local solutions.</p><br>

				<p><b>Dedication</b></p>
				<p>Our work is dedicated to our Children, our Children’s Children… and the children of all species, for all time.</p><br>

				<p><i>Together we can be the transition to ever increasing harmony with the cycles of life.</i></p>

			</div>



		
		</div>

		<div class="side">

		
			
		<div id="side-module-desktop-only">
        <img src="webp/2020-regen-report.webp" width="90%">
				<h4>NEW! 2021 Regen Report</h4>
				<h5>We're proud to publish our net-green ecological impact for the past year.</h5><br>
				<a class="module-btn" href="https://gobrik.com/#catalyze" target="_blank">Access Report</a><br><br>
			</div>


			<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="80%">
				<h4>For-Earth Enterprise</h4>
				<h5>By discolosing our carbon, plastic and biodiversity impacts and by ensuring that they are net-green, the GEA commits to for-Earth Enterprise</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/gea-logo-400px.webp" width="90%">
				<h4>Global Ecobrick Alliance</h4>
				<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>

