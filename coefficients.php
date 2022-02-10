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

			</div>

		

			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Additive Plastic Coeffecients</h4>
						<h5>Impacts that add plastic to the biosphere.</h5>
					</div>
					
					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>

					<h3>Plastic Production</h3>

					<h5>Plastic generated outside of or sent outside of your facilities.</h5>
					
					<p><b>Coffee Out</b></p>
					
					<p>The average plastic generated by a coffee out (including cupp, lid, sugar packet lining, stirrer, etc.)</p> 

					<span title="GEA Estimate, 2020"><h5>0.01 Kg plastic</h5></span>


					<p><b>Meals Out</b></p>
					
					<p>The average plastic generated by a meal at a restaurant (including plastic used in the kitchen, for presentation, take out, drinks, etc.)</p> 

					<span title="GEA Estimate, 2020"><h5>0.125 Kg per meal</h5></span>
				
                   
					<p><b>Domestic Air Travel</b></p>
					
					<p>Domestic air travel results in the generation of plastic (ticket, stickers, food and drink service, snacks, meal, etc.)</p> 

					<span title="GEA Estimate"><h5>0.550 per ticket</h5></span>


					<p><b>International Air Travel</b></p>
					
					<p>International air travel results in the generation of plastic (ticket, stickers, food and drink service, snacks, meal, etc.)</p> 

					<span title="GEA Estimate"><h5>0.750 per ticket</h5></span>
					

					<h3>Plastic Consumption</h3>

					<p><b>Propane Gas</b></p>
					
					<p>Plastic involved in the consumption of one LPG tank (any size)</p> 

					<span title="GEA Estimate"><h5>0.001 Kg of plastic per cannister</h5></span>

					<p><b>Laptop</b></p>
					
					<p>The purchase and use of a laptop entails plastic generation (packaging, cables, casing, screen, ketboard, etc)</p> 

					<span title="Examining the Carbon Footprint of Devices, Microsoft, Sustainable Software, 2020"><h5>0.5 Kg over lifetime of use</h5></span>
                   
					<p><b>Smart Phone</b></p>
					
					<p>The purchase and use of a smart phone entails plastic generation (packaging, cables, casing, screen, ketboard, etc)</p> 

					<span title="Examining the Carbon Footprint of Devices, Microsoft, Sustainable Software, 2020"><h5>0.4 Kg over lifetime of use</h5></span>


                   
	
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Subtractive Plastic Coefficients</h4>
						<h5>Impacts that remove plastic from the biosphere</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					
				<p><b>Recycling</b></p>
					
					<p>The global average for full recovery and ongoing reuse of recyled plastic is 9%.  Enterprise's should track the percentage of their plastic production and consumption that is recycled and then multiply accordingly.</p> 

					<span title="https://advances.sciencemag.org/content/3/7/e1700782"><h5>0.09 Kg per 1 Kg of recycled plastic</h5></span>

					<p><b>AES Plastic</b></p>
					
					<p>Plastic that has been ecobricked and authenticated as having met the criteria of plastic sequestration, can be claimed as authenticated Ecobrick Sequestered Plastic.</p> 

					<span title="GEA Certified"><h5>1kg of AES plastic = 1 Kg of plastic removed from the biosphere</h5></span>

					<p><b>1 Brikcoin</b></p>
					
					<p>A brikcoin on the GoBrik blockchain corresponds to a certain amount of plastic sequestered.  This changes each year.</p> 

					<span title="GEA 2020 value"><h5>1 BRK = 0.988 Kg plastic</h5></span>

					
				</div>
			</div>	


			
			<a name="co2"></a>
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

					<p><b>Recycling</b></p>
					
					<p>Recycling plastic has various carbon emissions (transportation, reprocessing, etc.)</p> 

					<span title="GEA Certified"><h5>1kg recycled plastic = 0.689 Kg of CO2</h5></span>
					<h6><a href="https://www.ciel.org/wp-content/uploads/2019/05/Plastic-and-Climate-FINAL-2019.pdf" target="_blank">>Reference:</a> Plastic & Climate: The Hidden Costs of a Plastic Planet, Center for International Environmental Law p.59 (offsets not counted)</h6>

					<p><b>Incineration</b></p>
					
					<p>When plastic is burned it's carbon molecules join with oxygen molecules to generate carbon dioxide.</p> 

					<span title="GEA 2020 value"><h5>1 kg plastic = 2.97 Kg CO2</h5></span>
					<h6><a href="https://www.ciel.org/wp-content/uploads/2019/05/Plastic-and-Climate-FINAL-2019.pdf" target="_blank">>Reference:</a> Plastic & Climate: The Hidden Costs of a Plastic Planet, Center for International Environmental Law p.59 (offsets not counted)</h6>

					<p><b>Landfilling</b></p>
					
					<p>Plastic that is not recycled, incinerated or sequestered ends up in the earth, air and land.</p> 

					<span title="GEA 2020 value"><h5>1 Kg plastic = 0.065kg </h5></span>
					<h6><a href="https://www.ciel.org/wp-content/uploads/2019/05/Plastic-and-Climate-FINAL-2019.pdf" target="_blank">>Reference:</a> Plastic & Climate: The Hidden Costs of a Plastic Planet, Center for International Environmental Law p.59 (offsets not counted)</h6>

					<hr>
					<br>
					<p><b>One time CO2 impact of plastic</b></p>
					
					<p>The GEA has calculated the one time impact of consuming 1 kg of consumed plastic.</p> 

					<span title="GEA 2020 value"><h5>1 Kg plastic = 6.06kg CO2</h5></span>

					<p>The GEA has calculated the net impact of 1 kg of consumed plastic over time.</p> 

					<span title="GEA 2020 value"><h5>1 Kg plastic = Data pending</h5></span>

					<p><b>Plastic Sequestration</b></p>
					
					<p>Plastic that is kept out of industrial processing (i.e recycling, incineration and landfilling) has a substractive CO2e ipact of:</p> 

					<span title="GEA 2020 value"><h5>1 AES Plastic = 6.05 CO2e</h5></span>

					<img src="https://miro.medium.com/max/500/1*p4H-oNd9oUZvmJD4VjcERg.png" width="600px">

				</div>
			</div>

			



		
		</div>

		<div class="side">

		
			
		<div id="side-module-desktop-only">
        <img src="webp/2020-regen-report.webp" width="90%">
				<h4>2021 Regen Report</h4>
				<h5>We're proud to publish our net-green ecological impact for the past year.</h5><br>
				<a class="module-btn" href="2021-regenreport" target="_blank">Access Report</a><br><br>
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

