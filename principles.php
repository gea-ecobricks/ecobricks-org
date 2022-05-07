<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="webp/brikcoins-blue.webp">
<link rel="preload" as="image" href="webp/brikcoins-450px.webp">


_END;?>

<?php require_once ("meta/principles-$lang.php");?>

	<?php require_once ("header.php");?>




<!-- Arc CDN Script without delay
<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>-->




		<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		background: url(webp/principles-banner-1600px.webpp) bottom;
		background-color: #4B8501;
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
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
		background: url(webp/principles-banner-1600px.webp?v1) bottom left;
		background-color: #4B8501;
    	background-repeat: no-repeat;
		/*margin: -3px 0 -20px 0;*/
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 100%;
		position: relative;
		margin: auto;
}
}


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


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: left;
	margin: auto;
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



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
  flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



.splash-heading { 
	font-family: 'Arvo', Georgia, serif;
  	color: white;
  	font-weight: 300;
  	text-shadow: 0 0 10px #243f01;
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
      font-size: 4em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color:  #e9ffcc;
  /*text-shadow: 0px 0px 10px #fff;*/
  	margin: 15px 0;
  	
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
		font-size: 2.3em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #4b8501ff; 
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);

	margin-bottom: 40px;

}


	
</style>
	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--SPLASH SECTION-->



<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">Regenerative Principles</div>
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
			<p>Ecobricking is far more than a simple solution for plastic.  Deeply inspired by the ecological ethos of the indigenous people of the Northern Phillipines, ecobricking is powered by an array of regenerative principles.  Thus guided, the problem of plastic plastic becomes our portal into the green world for all that we all long see.</p>
		</div>

		<div class="page-paragraph">
	

		<p>The asian ecobrick emerged out of the ancestral lands of the Igorot people in the Northern Philippines over a decade ago.  Their remarkable ecological ethic of Ayyew has greatly inspired the way we make and use ecobricks today.</p>
			
		</div>


		
			<a name="EARTH-EXAMPLE"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Following the Earth's Example</h4>
                    <h5>We strive to emulate the Earth’s example of ever greening the biosphere.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                <div class="row">
						<div class="main2">
						<p>The rapid spread of blockchain cryptocurrencies has revolutionized the way value is exchanged and recorded. However, the ever increasing amount of computer work and hardware required resulted in higher and higher environmental costs-- all without creating anything of human or ecological value.</p>

						<p>Unlike other  blockchains that simply prove the consistency of a digital ledger, Brikcoins operate on the concept of 'proof-of-value'.</p> 

						</div>
						<div class="side2"><img src="webp/earthen-400px.webp" width="100%">
						</div>
					</div>
					<div class="row2">
						<div class="main3">
						<p>Ecobricking, when it meets the criteria of plastic sequestration, provides an ecological service that can be quantified and valued.</p>
						</div>
						<div class="side3"><img src="webp/earthen-400px.webp" width="150px">
						</div>
					</div>
				
				<p>Brikcoins are based on this value.  Coins are generated only when this value has been manually proved by independent evaluation.</p>

                </div>
            </div>



			<a name="LEADING"></a>
            <div class="reg-content-block" id="block2">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Leading by Example</h4>
                    <h5>Be the change you want to see in the world.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show2">+</button>
                </div>

                <div id="preclosed2">

                <div class="row">
						<div class="main2">

                		<p>The Brikcoin blockchain is developed and maintained by the Global Ecobrick Alliance in pursuit of our mission and vision of plastic transition.  As a not-for profit Earth Enterprise our mandate is the generation of ecological value by following the Earth's example of carbon sequestration.</p>  

						</div>
						<div class="side2"><img src="webp/earthen-400px.webp" width="100%">
						</div>
					</div>
					<div class="row2">
						<div class="main3">
						<p>Ecobricking, when it meets the criteria of plastic sequestration, provides an ecological service that can be quantified and valued.</p>
						</div>
						<div class="side3"><img src="webp/earthen-400px.webp" width="150px">
						</div>
					</div>
				
				<p>Brikcoins are based on this value.  Coins are generated only when this value has been manually proved by independent evaluation.</p>
                </div>
            </div>

			<a name="MANUAL"></a>
            <div class="reg-content-block" id="block2">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Locally Replicable</h4>
                    <h5>Low tech, carbon-negative, open and accessibly methodolgies</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
                </div>

                <div id="preclosed2">

                <br>
                <img src="https://cdn.ecobricks.org/wp-content/uploads/2020/04/2020-Manual-Blockchain.svg.png">

                <p>Many cryptocurrencies rely on valueless, computer driven work to establish their generation of coins and the authentication of their ledger.  Often this work results in the consumption of significant amounts of energy and the generation of ewaste that have a negative ecological impact.  In contrast the Brikcoin blockchain is based on human work to prove that positive ecological impacts have been acheived.</p>

				<p><b>Ecobricking</b></p>

				<p>The brikcoin blockchain revolves around the ecobricking of used plastic.  Ecobricking is an established means of securing plastic. It is a time-consuming, labor-intensive process that is most effectively done manually.  If done properly an ecobrick can be used for long-term building applications; ensuring that its plastic is secured from industrial processing and release into the biosphere.</p>

				<p>Once complete, ecobrickers log their ecobrick on the GoBrik platform.  A serial number is given by the system and the ecobrickers enscribes this permanently on the ecobrick. A photo of the ecobrick with the serial number is taken and the logging completed.<p>
				
				<p>The logged ecobrick is then automatically queued for review.  The ecobricker is awarded credits that allow them to validate other ecobricks that have been logged.</p>

				<p><b>Validation</b></p>

				<p>The GEA has defined standards for an ecobrick. Only when a packed bottle meets these standards is it considered an ecobrick, and only then is the plastic it contains considered sequestered.</p> 
				<p>Using one validation credit, ecobrickers are entitled to validate one ecobrick from the queue. The validator proceeds through a three step process of reviewing ecobrick, to ensure that it meets the criteria and standards of plastic sequestration. In total, each ecobrick is reviewed by three validators in the community.</p>
				
				<p><b>Authentication</b></p>

				<p>An algorithm calculates a validation score based on the review. The three validation scores are averaged and if the average exceeds the minimum threshold, the ecobrick is authenticated. Brikcoins are then generated and issued to the validators and the GoBrik Central Reserve based on the weight of the ecobrick.</p>

				<p>The amount of Brikcoins generated is a function of the weight of the authenticated ecobricked plastic.  This 'plastic standard' is pegged to a ratio of 1 BRK (ß) to 100g of AES plastic. For example, a 322g ecobrick will generate 3.22 ß, while a 0.41 kg ecobrick will generate 4.1 ß.</p>

                </div>
            </div>

			<a name="WHITEPAPER"></a>
            <div class="reg-content-block" id="block3">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Circular</h4>
                    <h5>The Commodification of Sequestered Plastic</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
                </div>

                <div id="preclosed3">

				<div class="row">
						<div class="main2">

                		<p>On Earthday 2020, the GEA released version 1.0 of the Ecobricks & Brikcoin Whitepaper, on The Commodiciation of Manually Sequestered Plastic.  The 32 page document is the work of half a dozen contributors specializing in fields ranging from micro-plastic research, alternative currencies, philosophy, community development and database development.</p>

						</div>
						<div class="side2"><img src="pngs/White-Paper-Icon2-400px.png" width="100%">
						</div>
					</div>
					<div class="row2">
						<div class="main3">
						<p>The white paper lays out the framework for basing a currency on the ecological value of plastic sequestration.</p>
						</div>
						<div class="side3"><img src="pngs/White-Paper-Icon2-400px.png" width="150px">
						</div>
					</div>
				
				<p>The white paper is updated as of March 2022 to reflect three years of beta-usage by our 50,000 gobrik users, over 150,000 ecobricks and a pool of over 250,000 ß (as of March, 2022).</p>

				<p><a href="https://files.ecobricks.org/s/pC52memM4S2a6LX">The Commodification of Sequestered Plastic – GEA White Paper - PDF 2MB</a></p>
</p>

                </div>
            </div>


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





<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js?v2" defer></script> 


	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>

