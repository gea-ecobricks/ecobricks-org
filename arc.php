<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="webp/arc-purple.webp">
<link rel="preload" as="image" href="webp/arc-logos.webp">
<link rel="preload" as="image" href="webp/faq-bottom.webp">

_END;?>

<?php require_once ("meta/arc-$lang.php");?>

<?php require_once ("header.php");?>



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
		background: url(webp/arc-purple.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ececec;
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
		background: url(webp/arc-purple.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ececec;
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
  color: green;
  font-weight: 300;
  text-shadow: 0 0 10px #fff;
}

@media screen and (max-width: 700px) {
	.header-heading {
      font-size: 3.7em;
      line-height: 1.3;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.header-heading {
      font-size: 4em;
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
	background-color: #f3f3f3;
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
    }
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

#side-module-desktop-only {
	
	border-radius: 12px;
	margin-bottom: 20px;
	padding: 15px;
	border-width: 1px;
	text-align: center;
	background-color: #ffffff30;
	text-align: center;
	border-color: white;
}

#side-module-desktop-mobile {
	
	border-radius: 12px;
	margin-bottom: 20px;
	padding: 15px;
	border-width: 1px;
	text-align: center;
	background-color: #ffffff30;
	text-align: center;
	border-color: white;
  
  }

@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

mark{
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

.lead-page-paragraph {
	font-size: 

}

@media screen and (max-width: 769px) {
	.lead-page-paragraph {
      font-size: 1.25em;
      line-height: 1.4;
      margin: 10px 0 25px 0;
  }
}
@media screen and (min-width: 769px) {
	.lead-page-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 12px 0 5px;
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
		<div class="header-heading">Speed & Green Your Website</div>
		<div class="header-sub">Connect Kbs of data accelearation<br>
		to Kgs of plastic removed<br>
		from the biosphere</div>
		<img src="webp/arc-logos.webp">
	</div>
</div>
<div id="grey-bar"></div>



<!-- PAGE CONTENT <div id="content-sect1">-->

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">
			<!--<div id="quote">
				<h3><span class="intro-quote">Arc.io & Ecobricks.org are developing a way to speed up your website & support the removal of plastic from the biosphere</h3>
			</div>-->

			<div class="lead-page-paragraph"><p>Arc.io & Ecobricks.org are developing a way to speed up your website & support the removal of plastic from the biosphere.</p></div>

			<div class="faq">
						<a name="plastic"></a>
						<div class="faq-box">
							<div class="faq-texts">
								<div class="faq-header"><h4>What is Arc?</h4></div>
								<p>Arc is a content delivery network service that distributes data over a decentralized network of web page visitors. Arc works like a two-sided marketplace. On one side of the market, websites buy a fast, low-cost peer-to-peer CDN. On the other side, websites make money by contributing bandwidth to the peer-to-peer CDN. Arc's widget (the green popper you see in the bottom left corner of the page) provides access to both sides. Arc turns bandwidth into dollars by uniting browsers into a distributed content delivery network that we rent. Think screaming-fast BitTorrent for every website that's seamless and native to the web. Websites pay Arc to make their sites faster by serving their static content (images, videos, JS, CSS, etc) from Arc's global, distributed network of browsers instead of from slower, more expensive, centralized servers.   </p>
								
							</div><!-- 
							<div class="faq-image"><img src="webp/compacted-carbon.webp">
						</div>-->
							
						</div>

					<div class="faq-link"><h5>Learn more: <a href="plastic">Arc's Frequently Asked Questions</h5></a></div>
					<div class="faq-link"><h5>Get Arc: <a href="plastic">Arc for your website</h5></a></div>
					<div id="top-link">Back to <a href="#general">General Questions</a>
					</div>		
					</div>



			<div class="faq">
					<a name="plastic"></a>
							<div class="faq-box">
								<div class="faq-texts">
								
									
									<p>By browsing a web page with the Arc + Ecobricks.org widget installed, extra bandwidth is used to help localize digital content for others viewing the same information. Instead of connecting to content on a server on the other side of the planet, the content can be served by the computer nearest you. This saves time and energy and is valuable service that websites pay for. By directing the service payments of the CDN clients through the Ecobricks.org manual blockchain, dollars, kilobytes and kilograms of plastic can directly correlated. Your visit to Arc websites with the green popper results in AES plastic offset credits purchased and the valuzation of the removal of plastic from the biosphere by ecobrickers around the world.</p>

														
							</div> <!-- 
								<div class="faq-image"><img src="webp/compacted-carbon.webp">
							</div>-->
								
							</div>
							<div class="faq-link"><h5>Request: <a href="plastic">Access to BETA</h5></a></div>
							<div class="faq-link"><h5>Get: <a href="plastic">Normal Arc for your site</h5></a></div>
				
							<div id="top-link">Back to <a href="#general">General Questions</a>
							</div>		
					</div>

				
					<div class="faq">
						<a name="plastic"></a>
							<div class="faq-box">
									<div class="faq-texts">
										<div class="faq-header"><h4>Ecobricks.org | Plastic Offseting</h4></div>
										<p>Ecobricks.org is an Earth Enterprise focused on securing plastic out of the biosphere and accelerating plastic transition. They provide a platform where ecobrickers around the world can log their hard work sequestering plastic into Ecobricks. This sequestration is authenticated on their manual blockchain through peer review. Authenticated plastic can then be purchased on their offsetting system in kilograms in a way that support Ecobricks.org and renumerates ecobrickers for their hard work.  </p>
									
									</div> <!-- 
									<div class="faq-image"><img src="webp/compacted-carbon.webp">
								</div>-->		
							</div>
							<div class="faq-link"><h5>Learn more: <a href="plastic">AES Plastic Offsetting</h5></a></div>
							<div class="faq-link"><h5>Learn more: <a href="plastic">Plastic Sequestration</h5></a></div>
							<div class="faq-link"><h5>Learn more: <a href="plastic">About Ecobricks</h5></a></div>
							<div id="top-link">Back to <a href="#general">General Questions</a>
							</div>		
					</div>

					<div class="faq">
					<a name="plastic"></a>
							<div class="faq-box">
								<div class="faq-texts">
									<div class="faq-header"><h4>Green Popper | BETA Testing</h4></div>

									<p>Currently, the green popper is available only by request and manual configuation. Contact the Ecobricks.org team if you would like to be part of the beta test. </p>
														
							</div> <!-- 
								<div class="faq-image"><img src="webp/compacted-carbon.webp">
							</div>-->
								
							</div>
							<div class="faq-link"><h5>Request: <a href="plastic">Access to BETA</h5></a></div>
							<div class="faq-link"><h5>Get: <a href="plastic">Normal Arc for your site</h5></a></div>
				
							<div id="top-link">Back to <a href="#general">General Questions</a>
							</div>		
					</div>
				</div>

	<div class="side">

	<div id="side-module-desktop-mobile">
		<img src="webp/arc-green-popper.webp" width="70%">
		<h4>Arc.io</h4>
		<h5>Arc has pioneered a decentralized content delivery network to provide an alternative to online advertisements.</h5>
		</div>


		<div id="side-module-desktop-only">
		<img src="https://cdn.ecobricks.org/wp-content/uploads/2020/05/Regenerative-Living-Home-400px.png" width="80%">
		<h4>Plastic Sequestration</h4>
		<h5>Ecobricking is based on the concept of following the Earth's example in concentrating and securing our plastic indefinitely"</h5>
		</div>

		

		<div id="side-module-desktop-mobile">
		<img src="https://cdn.ecobricks.org/wp-content/uploads/2020/07/GEA-Logo-v2.3-with-perspective-1000px-300x300.png" width="80%">
		<h4>Global Ecobrick Alliance</h4>
		<h5>The GEA is an Earth Enterprise dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5>
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

