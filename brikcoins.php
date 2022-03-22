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

<?php require_once ("meta/arc-$lang.php");?>

	<?php require_once ("header.php");?>




<!-- Arc CDN Script without delay-->
<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>



<STYLE>

#clouds {

    width: 100%;
	height: 70vh;
    display: flex;
    align-items: flex-end;
  /*  margin-bottom: -70px;*/
}


/*
#cloud-banner {
	z-index: 4;
	position: relative;
	height: 25vh;
}*/

	
@media screen and (max-width: 700px) { 
	#header-content-block {
		text-align: left;
		height: 60vh;
		padding: 10vh 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		background: url(webp/brikcoins-blue.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ECECEC;
		margin-top: 50px;

	}
}


@media screen and (min-width: 700px) { 
	#header-content-block {
		text-align: left;
		height: 60vh;
		padding: 20vh 7% 50px 7%;
		z-index: 5;
		position: relative;
		background: url(webp/brikcoins-blue.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ECECEC;
		margin: 0 0 -20px 0;

}
}


@media screen and (max-width: 700px) { 
#header-box {
  z-index: 5;
  position: relative;
  width: 100%;
  align: left;
}
}

@media screen and (min-width: 700px) { 
#header-box {
  z-index: 5;
  position: relative;
  width: 80%;
}
}


.header-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: black;
  font-weight: 300;
  text-shadow: 0 0 10px #fff;

}

@media screen and (max-width: 700px) {
	.header-heading {
      font-size: 3.6em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.header-heading {
      font-size: 5em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.header-sub {
  font-family: 'Arvo', Georgia, serif;
  color: grey;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
}

@media screen and (max-width: 700px) {
	.header-sub {
		font-size: 1.45em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.header-sub {
		font-size: 2.3em;
		line-height: 1.3;
		font-weight: 400;
		width: 60%;
  }
}


@media screen and (max-width: 769px) {

#header-box img {

	width: 60%;
	margin-left: 40%;
}
}


#grey-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #ECECEC;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 1;
	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);

	margin-bottom: 40px;
}


#main-content {
  margin: auto;
  box-sizing: border-box;
}
@media screen and (max-width: 700px) {
  #main-content {
      width: 90%;
	  margin-top: -20px;
  }
}
@media screen and (min-width: 700px) and (max-width: 1024px) {
  #main-content {
      width: 90%%;
  }
}
@media screen and (min-width: 1024px) {
  #main-content {
      width: 80%;
  }
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}

/* Create two unequal columns that sits next to each other */


/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 15px 15px 15px 0px;
  box-sizing: border-box;
}

/* Sidebar/right column */

@media screen and (min-width: 700px) {
	.side {
	flex: 24%;
	padding: 20px;
	box-sizing: border-box;
	margin-top: -80px;
	padding-top: 80px;
	background: rgb(212,212,212);
	background: linear-gradient(126deg, rgba(212,212,212,1) 10%, rgba(251,251,251,1) 71%);
	}
	}

@media screen and (max-width: 700px) {
	.side {
	flex: 24%;
	padding: 20px;
	box-sizing: border-box;
	
	}
	}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

mark {
 background-color:#c0ffc8;
 color: white;	
}

.intro-quote {
	color: white ! important;
	text-align: right;
	background-color: #7440f5;
	padding: 0px 10px 0px 10px;
	line-height: 1.5;
}

#quote {padding: 30px 15px 15px 5px;
text-align: right;}


@media screen and (max-width: 769px) {
	.lead-page-paragraph {
      font-size: 1.25em;
      line-height: 1.4;
      margin: 37px 0px 15px 0px;
  }
}
@media screen and (min-width: 769px) {
	.lead-page-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 25px 0px 5px 0px;
  }
}



</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div id="header-content-block">
	<div id="header-box">
		<div class="header-heading">Brikcoins</div>
		<div class="header-sub">A manual proof-of-value blockchain based on the sequestration of plastic from the biosphere</div>
		<img src="webp/brikcoins-450px.webp">
	</div>
</div>
<div id="grey-bar"></div>



<!-- PAGE CONTENT <div id="content-sect1">-->

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
			<p>By valuing real world ecological service we can accelerate our transition from petro-capital dependence.</p>
		
			</div>

            <div class="page-paragraph">
                <p>Brikcoins (BRK / ß) are a digital token based on the generation of ecological value. 10 Brikcoins are generated each time 1kg of plastic has been authenticated by the ecobricker community to have met the standards and criteria of plastic sequestration.  These new brikcoins are distributed to those individuals manually validating and sequestering plastic.  Brikcoins aregenerated are distributed to those doing the hard work – enabling a currency and economy based on the ecological service of plastic sequestration.</p> 

                <p>By basing Brikcoins on the ecological value of plastic sequestration, we are accelerating the removal of plastic from industry and the biosphere while accelerating plastic transition.</p>
			</div>

			<a name="NEW-VALUE"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Proof of Value</h4>
                    <h5>Brikcoins are based on the ecological value of sequestered plastic and petro-capital transition.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                <br>
                <img src="https://www.ecobricks.org/wp-content/uploads/2020/04/2020-Plastic-Offset-Credits-2.svg" width="100%" alt="Plastic sequestration">

                <p>The Brikcoin blockchain is developed and maintained by the Global Ecobrick Alliance in pursuit of our mission and vision of plastic transition.  As a not-for profit Earth Enterprise our mandate is the generation of ecological value by following the Earth's example of carbon sequestration.</p>  
				
				<p>Ecobricking, when it meets the criteria of plastic sequestration, provides an ecological service that can be quantified and valued.  Brikcoins are based on this value.  Coins are generated only when this value has been manually proved by independent evaluation.</p>

				<p>The Brikcoin blockchain is permissionless, meaning that its ledger is centralized on GEA managed databases to enable decentralized and massively distributed ecological service.  The GEA has chosen this structure to minimize the server impact and energy consumption of the maintenance of our ledger.</p>

                </div>
            </div>

			<a name="MANUAL"></a>
            <div class="reg-content-block" id="block2">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>A Manual Blockchain</h4>
                    <h5>Brikcoins are generated by valuable human work.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show2">+</button>
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
                    <h4>White Paper</h4>
                    <h5>The Commodification of Sequestered Plastic</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
                </div>

                <div id="preclosed3">

                <br>
                <p>On Earthday 2020, the GEA released version 1.0 of the Ecobricks & Brikcoin Whitepaper, on The Commodiciation of Manually Sequestered Plastic.</p>

				<p>The 32 page document is the culmination of two years of framework-building by half a dozen contributors who are specialist in fields from micro-plastic research, alternative currencies, philosophy, community development and database development.  Our whitepaper lays out the context, science and concept for plastic “waste” as an opportunity for a root-level, right-now, you-and-can-do-it, systemic solution.</p>

				<p>The document presents ecobricking as a essential set in personal and global plastic transition, and a meaning means of plastic sequestration.  The whitepaper provides exhaustive footnoting to the science behind our assumptions and arguments. It then lays out the core concepts of the Brikcoin people-powered, manual blockchain, that gives plastic a revolutionary new value.</p>

				<p>The white paper is further based on two years of field operations with our beta GoBrik app and over 40,000 users.  Over this period, the platform has authenticated over 20,000 Kg of sequestered plastic, and generated a pool of over 100,000 ß (as of April, 2020).</p>

				<p>The Commodification of Sequestered Plastic – GEA White Paper
</p>

                </div>
            </div>


		</DIV>
		

		<div class="side">

		<div id="side-module-desktop-mobile">
                <img src="webp/tens-thousands.webp" width="100%" loading="lazy" alt="eco brik and earth building can make community centers">
                <h4>Ecobricks</h4>
                <h5>The GEA advocates ecobricking as a means to sequester plastic.  Only eco<span class="eco-brick"> </span>bricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
                <a class="module-btn" href="sequest.php">Learn More</a>
            </div>

		<div id="side-module-desktop-mobile">
				<img src="webp/earth-tree-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make tree benches">
				<br><h4>Following the Earth's Example</h4>
				<h5>Plastic Sequestration follows the Earth’s ancient example of compacting and securing carbon.</h5><br>
				<a class="module-btn" href="/plastic">Learn More</a>
                <br>
			</div>  
         

			<div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Plastic Transition</h4>
				<h5>Ecobricking accelerates petro-capital transition. Rather than see plastic as ‘waste’ we see it as a building block for our green visions.</h5><br>
				<a class="module-btn" href="transition.php">Learn More</a>
			</div>

            <div id="side-module-desktop-mobile">
				<img src="webp/spiral-circular-400px.webp" width="80%" loading="lazy" alt="eco brik applications are circular and spiral in design">
				<h4>Circular & Spiral Design</h4>
				<h5>Plastic Sequestration follows the principles of cyclical spiral design.</h5><br>
				<a class="module-btn" href="/circular">Learn More</a>
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

