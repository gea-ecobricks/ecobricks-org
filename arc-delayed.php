<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="webp/arc-purple2.webp">
<link rel="preload" as="image" href="webp/arc-logos.webp">
<link rel="preload" as="image" href="webp/faq-bottom.webp">

_END;?>

<?php require_once ("meta/arc-$lang.php");?>

	<?php require_once ("header.php");?>

	<script type="text/javascript" defer>

document.addEventListener("DOMContentLoaded", function(event) {
	setTimeout(addScript, 7000)
  });
  
  function addScript() {
  
	script = document.createElement('script');
	script.type = 'text/javascript';
	script.async = true;
	script.onload = function() {
	  console.log("Added Script");
	};
	script.src = 'https://arc.io/widget.min.js#mJFtQsHF';
	document.getElementsByTagName('head')[0].appendChild(script);
  }
</script>


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
		background: url(webp/arc-purple2.webp) right top;
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
		background: url(webp/arc-purple2.webp) right top;
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
  color: green;
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
		<div class="header-heading">Speed & Green Your Website</div>
		<div class="header-sub">Connect Kbs of data acceleration<br>
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

			<div class="lead-page-paragraph">
				
			<p>Arc.io & Ecobricks.org are developing a way to speed up your website & support securing of plastic out of the biosphere.</p>
		
			</div>

			<div class="faq">
				<a name="plastic"></a>
				<div class="faq-box">
					<div class="faq-texts">
						<div class="faq-header"><h4>What is Arc?</h4></div>

						<p>Arc is a website content delivery network service (CDN).  Their service can be installed by webmasters onto any site.  We've got it running on our site right now! Rather than loading sites from centralized servers that are often far away (ours is in Singapore) instead Arc can use the internet to share the data from our site that someone else in your city has downloaded just before you!  It saves time, server work and energy.</p>

						<p>It's like a screaming-fast BitTorrent for websites in which everyone wins.</p>						
					</div>
				</div>
				<div class="faq-link"><h5>Learn more: <a href="https://arc.io/faq" target="_blank">Arc's Frequently Asked Questions</h5></a></div>	
			</div>


				
			<div class="faq">
				<div class="faq-box">
					<div class="faq-texts">
						<div class="faq-header"><h4>What does Ecobricks.org do?</h4></div>

						<p>Ecobricks.org is us– the Gobal Ecobrik Alliance.  We're an <a href="/about">Earth Enterprise</a> focused on securing plastic out of the biosphere and accelerating plastic transition. Among <a href="/about">many other things</a>, we maintain the <a href="https://gobrik.com" target="_blank">GoBrik</a> platform where ecobrickers around the world can log their hard work sequestering plastic into Ecobricks. </p>

						<p>Each ecobrick is peer reviewed to determine whether its plastic meets the stringent requirements of plastic sequestration. Each authenticated gram of sequestered plastic is then recorded on our <a href="/brikcoins">manual blockchain</a>.  To support ecobrikers around the world doing the hard work of sequestration and the platform, Authenticated plastic offset credits can then be purchased through the GEA.</p>
					</div> 	
				</div>
				<div class="faq-link"><h5>Learn more: <a href="aes">AES Plastic Offsetting</h5></a></div>
				<div class="faq-link"><h5>Learn more: <a href="sequest">Plastic Sequestration</h5></a></div>
				<div class="faq-link"><h5>Learn more: <a href="what">About Ecobricks</h5></a></div>		
			</div>



			<div class="faq">
				<div class="faq-box">
					<div class="faq-texts">
					<div class="faq-header"><h4>So how does it work?</h4></div>
						
					<p>Arc works like a two-sided marketplace. On one side of the market, websites buy a fast, low-cost peer-to-peer CDN. On the other side, arc pays websites running Arc on their sites and which enable the network.  Arc's widget (the floating circle you see in the bottom left corner of our site) provides access to both sides.</p> 

					<p>Websites share the revenue for the kilobytes of accelerated data that has been paid to Arc by CDN clients.  This opportunity is available for any website now-- <a href="https://arc.io/?ref=ecobricks.org#signUp" target="_blank">it only takes a few lines of code to get their purple widget going.</a></p><br><br>
					
					<div class="faq-header"><h4>Going Green</h4></div>

					<p>To make things even more awesome, Arc & Ecobricks.org have developed a version of their widget in which websites opt to direct their revenue generation directly to plastic offsetting.  By connecting this revenue to the purchase of AES plastic on the Brikcoin blockchain, we can track the amount of plastic sequestered by your website down to the gram.  AES offset certification (with a record in the blockchain) is then be issued annually to participating websites.  Soon this will also include CO2 offset credits.</p>

					<p>It's a no cost way that you can speed up your website and contribute to the global plastic tansition movement.</p>
					
				</div>
			</div>


			<div class="faq">
				<div class="faq-box">
					<div class="faq-texts">
						<div class="faq-header"><h4>Help us beta test the Green Popper</h4></div>

						<p>The green popper is now in beta testing!  We're looking for webmasters with high traffic websites, who have they authorization and technical capabilities to manually add a javascipt embed to their site.</p>

						<p>Contact: devteam (at) ecocobricks.org / Let us know your site URL, monthly traffic estimate and intention.</p>
					</div>
				</div>

				<div class="faq-link"><h5>Request: <a mailto="devteam@ecobricks.org">Access to BETA</h5></a></div>
				<div class="faq-link"><h5>Get: <a href="https://arc.io/?ref=ecobricks.org#signUp">Normal Arc for your site</h5></a></div>		
			</div>
		
		</DIV>
		</DIV>
		

		<div class="side">

			<div id="side-module-desktop-mobile">
				<img src="webp/arc-green-popper.webp" width="70%">
				<h4>Arc.io</h4>
				<h5>Arc has pioneered a decentralized content delivery network to provide an alternative to online advertisements.</h5><br>
				<a href="https://arc.io/faq" target="_blank" class="module-btn">Arc FAQ</a>

			</div>
				
			<div id="side-module-desktop-only">
				<img src="https://cdn.ecobricks.org/wp-content/uploads/2020/05/Regenerative-Living-Home-400px.png" width="80%">
				<h4>Plastic Sequestration</h4>
				<h5>Ecobricking is based on the concept of following the Earth's example in concentrating and securing our plastic indefinitely"</h5><br>
				<a class="module-btn" href="sequest">Plastic Sequestration</a>
			</div>

	
			<div id="side-module-desktop-mobile">
				<img src="https://cdn.ecobricks.org/wp-content/uploads/2020/07/GEA-Logo-v2.3-with-perspective-1000px-300x300.png" width="80%">
				<h4>Global Ecobrick Alliance</h4>
				<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="80%">
				<h4>For-Earth Enterprise</h4>
				<h5>By discolosing our carbon, plastic and biodiversity impacts and by ensuring that they are net-green, the GEA commits to for-Earth Enterprise</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->

   

	<!--SCRIPT TO DEFER ARVO FONT LOAD TIL END-->
	
	<script type="text/javascript">
/* First CSS File */
var giftofspeed = document.createElement('link');
giftofspeed.rel = 'stylesheet';
giftofspeed.href = 'https://fonts.googleapis.com/css2?family=Arvo&display=swap';
giftofspeed.type = 'text/css';
var godefer = document.getElementsByTagName('link')[0];
godefer.parentNode.insertBefore(giftofspeed, godefer);

</script>
	
	<!--FOOTER STARTS HERE-->
	
	<div id="footer-full">
	<div id="ocean-vision"><img src="svgs/ocean-footer3.svg" width="100%" height="63%" alt="Keeping the ocean free from plastic pollution"; position="absolute"; bottom="0"; ></div>
	
	
	<div class="footer-vision">We envision a Transition in our Households, Communities and Enterprises from Plastic to ever Greener Harmony with Earth's Cycles.</div>
	
	<!--
	<div class="footer-invite">Connect with us on our various platforms and servers.</div>-->
	</div>

	<div class="footer-icons-container">
		<div class="footer-icons"><!--WIKIPEDIA-->
			<a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank" rel="noopener">
			<img src="icons/wikipedia.svg" width="100%" height="100%" alt="Check out the official Ecobricks wikipedia page" title="Check out the official Ecobricks wikipedia page"></a>
			
		</div>

		<div class="footer-icons">
			<a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr" target="_blank" rel="noopener"><!--MATTERMOST-->
			<img src="icons/mattermost.svg" width="100%" height="100%" alt="Join our Circles Ecobrick Support Community"  title="Join our Circles Ecobrick Support Community"></a>
			<!--<div class="icon-name">/ecobricks</div>
			<div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>-->
		</div>

		<div class="footer-icons"><!--GOBRIK-->
			<a href="https://gobrik.com" target="_blank">
			<img src="icons/gobrik.svg" width="100%" height="100%" alt="Sign up for our GoBrik app" title="Sign up for our GoBrik app"></a>
			
		</div>

		<div class="footer-icons">
			<a href="https://medium.com/earthen/" target="_blank" rel="noopener"><!--MEDIUM-->
			<img src="icons/medium.svg" width="100%" height="100%" alt="Follow our Medium.com Earthen publication"  title="Follow our Medium.com Earthen publication"></a>
			
		</div>

		<div class="footer-icons"> <!--GITHUB-->
			<a href="https://github.com/gea-ecobricks/ecobricks-org" target="_blank" rel="noopener">
			<img src="icons/github.svg" width="100%" height="100%" alt="Contribute to our Ecobricks.org Github repository" title="Contribute to our Ecobricks.org Github repository"></a>
			
		</div>
		
		<div class="footer-icons"><!--FACEBOOK-->
			<a href="https://facebook.com/ecobricks.org" target="_blank" rel="noopener">
			<img src="icons/facebook.svg" width="100%" height="100%" alt="Follow our Facebook page"  title="Follow our Facebook page"></a>
		</div>

		<div class="footer-icons"><!--YOUTUBE-->
			<a href="https://www.youtube.com/c/Ecobricks" target="_blank" rel="noopener">
			<img src="icons/youtube.svg" width="100%" height="100%" alt="Subscribe to our Ecobricks YouTube channel"  title="Subscribe to our Ecobricks YouTube channel"></a>
			
		</div>

		<div class="footer-icons"><!--INSTAGRAM-->
			<a href="https://www.instagram.com/ecobricks.plastic.transition/" target="_blank" rel="noopener">
			<img src="icons/instagram.svg" width="100%" height="100%" alt="Instagram: Ecobricks.Plastic.Transition"  title="Instagram: Ecobricks.Plastic.Transition"></a>
			
		</div>

		<!--<div class="footer-icons">--NEXTCLOUD
			<a href="https://files.mandala.team/" target="_blank" rel="noopener">
			<img src="icons/nextcloud.svg" width="100%" height="100%"></a>
			<div class="icon-name">/ecobricks</div>
			<div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
		</div>-->
			
	</div>


	
	<div class="footer-content">

		<div class="footer-box">
			<div class="footer-header">Wikipedia Ecobricks</div>
				<div class="footer-subtext">Also know as eco bricks, eco-bricks, EcoBricks, ecolladrillos, and bottle bricks the Global Ecobrick Alliance and <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">Wikipedia</a> endorse <i>'ecobrick'</i> to refer to the sequestration of plastic in a PET bottle to make a reusable building block.<br><br>
				</div>
				<div class="footer-header">Tech Partners</div>
				<div class="footer-subtext">Thank you to our Technology Partners <a href="https://www.dewaweb.com/" target="_blank">DewaWeb Hosting</a>, <a href="https://wpml.org/" target="_blank" rel="noopener">WPML The WordPress Multilingual Plugin</a><a href="https://Knack.com" target="_blank"></a> and <a href="https://statically.io" target="_blank" rel="noopener">Statically</a> who give us special access to their amazing services.</div>
			</div>
			<div class="footer-box">
				<div class="footer-header">Ecobricker Support</div>
				<div class="footer-subtext">Got questions about ecobricking?  Join Circles, our own communication platform, running on opensource Mattermost.  Get help from trainers and ecobrickers around the world. <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr">Sign up!</a><br><br></div>
				<!--<div class="footer-header">Trainer Support</div>-->
				<div class="footer-subtext">GEA Trainers access your <a href="https://www.ecobricks.org/webmail" target="_blank">webmail</a>, <a href="https://www.ecobricks.org/wp-admin" target="_blank" rel="noopener">wordpress</a>, <a href="https://gobrik.com/#my-trainer" target="_blank" rel="noopener">GoBrik</a> or <a href="https://files.mandala.team" target="_blank" rel="noopener">NextCloud File Server</a> panels.</div>
			</div>
			<div class="footer-box">
				<div class="footer-header">Earth Enterprise</div>
				<div class="footer-subtext">The <a href="/about">Global Ecobrick Alliance</a> is a for-Earth, not-for-profit, enterprise based on <a href="/principles">regenerative principles.</a><br><br></div>
			<!--<div class="footer-header">Deep Green</div>-->
				<div class="footer-subtext">On principle we have no corporate, government or company sponsors and receive no grants nor donations. We generate revenue by providing <a href="https://russellmaier.medium.com/towards-subtraction-1c76bc486fd0">deep green</a> ecological <a href="brikcoins">value</a>.<br><br>We fully disclose our receipt and usage of funds on our <a href="https://gobrik.com/#openbooks" target="_blank" rel="noopener">open books system.</a></div>
			</div>
			<div class="footer-box">
				<div class="footer-header">Our Ecological Impact</div>
				<div class="footer-subtext">We make sure to subtract more CO2 and plastic than we add to the biosphere, to acheive circularity in all our creations, increase biodiversity in all our spaces, put ecological contribution before profit, and to fully disclose all our ecological impacts.  See our <a href="https://files.mandala.team/s/nptzWnNRkX3cJfr" target="_blank" rel="noopener">Regenerativity Report for 2020</a>.  See our <a href="https://www.gobrik.com/#my-catalyst/enterprise-disclosure/5e1f513586a7fe0015e77628/">live ecological impact accounting for 2021.</a>
				</div>
			</div>
		</div>
				
	<div class="footer-bottom">
	

	<div class="footer-conclusion">	
					<a href="https://www.gobrik.com/#my-catalyst/enterprise-disclosure/5e1f513586a7fe0015e77628/"><img src="webp/disclose-500px.webp" width="330px" height="" alt="Click through to see a full and live breakdown of our 2021 ecological impacts on the GoBrik.com" title="Click through to see a full and live breakdown of our 2021 ecological impacts on the GoBrik.com"></a></div>
					<!--<a href="https://www.websitecarbon.com/website/ecobricks-org/"><img src="webp/web-carbon.webp" width="330px"></a>-->
					<br>

					<div id="wcb" class="carbonbadge wcb-d"></div>
					<script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
				</div>

		<div class="footer-conclusion">	
			The educational content of this site is made available by the Ecobrick Alliance under a <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>. Please attribute all usage to "Ecobricks.org - Global Ecobrick Alliance" using the same license.</div>
			
		<div class="footer-conclusion">	
				<a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons BY SA 4.0 License" style="border-width:0" src="icons/cc-by-sa.svg" width="200px" height="45px"/></a>
		</div>
		<div class="footer-invite">
			This website is a 100% volunteer and open source project.  Contribute on <a href="https://github.com/gea-ecobricks/gobrik/blob/master/README.md" target="_blank" rel="noopener">Github.</a>
		</div>
		<div class="footer-conclusion">	
			The AES, GEA and GoBrik logos and emblems are copyright 2021 by the Global Ecobrick Alliance.
			<br><br>
		</div>
	</div>
</div>

	<!--FOOTER ENDS-->




<!-- ARC DELAY LOAD SCRIPT  This is a special script to load the arc script 8 seconds after the full page has loaded, this prevents Arc from slowing down our page load and boost our google page speed score-->



<!-- UNIVERSAL SITE JAVA SCRIPTS-->
	
		
<!-- Localise translation scripts-->

<script src="https://global.localizecdn.com/localize.js"></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: '911e632bfc957',
    rememberLanguage: true,
  });
</script>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>

