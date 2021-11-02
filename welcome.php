
<!DOCTYPE html>

<html lang="<?php include 'lang.php';?>">

<HEAD>





	<link rel="preload" as="image" href="logos/gea-horizontal.svg">
	<link rel="preload" as="image" href="svgs/cloud-back.svg">
	<!--<link rel="preload" as="image" href="webp/vision-bottom3b.webp">-->
	<link rel="preload" as="image" href="webp/mountain-top2.webp">



	<!-- Meta tags for page display and search engine listing-->


    <title>Ecobricks.org | Plastic Transition</title>

<meta name="keywords" content="ecobricks, plastic offsets, ecobrick, plastic solved, eco-brick, gobrik, bottle brick, plastic solution, recycling, upcycling, plastic sequestration, plastic transition, petrocapital transition">

<meta name="description" content="Together we can secure plastic out of the biosphere, out of industry and into building the green world for all, that we all long to see.">
	
	
	<!-- Facebook Open Graph Tags for social sharing-->

  <meta property="og:url"           content="https://www.ecobricks.org/en/">
  <meta property="og:type"          content="website">
 <meta property="og:title"         content="Ecobricks.org | Plastic Transition">
  <meta property="og:description"   content="Together we can secure plastic out of the biosphere, out of industry and into building the green new world we all long to see."/>
  <meta property="og:image"         content="https://www.ecobricks.org/pngs/social-banner2.png"/>
  <meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="638" />
  <meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it."/>
	
	<?php include 'header.php';?>

<style>
#clouds {
	background: url(svgs/cloud-back.svg) center top;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
	height: 73vh;
   /* min-height: 500px;*/
	background-color: #00ffff;
    display: flex;
    align-items: flex-end;
    margin-top: 0px;
}

#cloud-banner {
	background: url(webp/vision-bottom5.webp) center top;
    background-repeat: no-repeat;
    background-size: cover;
	z-index: 4;
	position: relative;
	width: 100%;
	height: 31%;
	min-height: 25vh;
	background-color: #00ffff;
}

	

@media screen and (min-width: 770px) { 
#header-content-block {
    text-align: center;
    background-color: #59c1fdb2;
    border-radius: 12px;
	height: 100vh;
	padding: 25px 7% 50px 7%;
	margin: -85vh 10% -50px 10%;
	z-index: 5;
}
}

@media screen and (max-width: 770px) { 
#header-content-block {
    text-align: center;
    background-color: #59c1fdb2;  /*#74acffb2;*/
    border-radius: 12px;
	height: 80vh;
	padding: 25px 3% 25px 3%;
	margin-bottom: 0px;
	margin: -86vh 2.9% -60px 2.9%;
	z-index: 5;
}
}

</style>


</head>
	
	
<BODY id="full-page">
	<div id="load-background">

	<?php include 'menu-bar.php';?>


    <div id="clouds"><img src="webp/mountain-top2.webp" width="100%"></div>
	<div id="cloud-banner"><img src="webp/vision-bottom4.webp" width="100%" height="31%"></div>

<!-- SLIDER CONTENT -->
	
	<div id="sliders">
<!--
		<div id="slider1">
			<div id="slider-image"><img src="webp/catalyst.webp" width="92%" height="100%"></div>
				<div id="slider-textbox">
				<div id="slider-heading">Version 2.0 of the Enterprise Catalyst Program Launched</div>
				<div id="slider-body">Plastic impact management for keen green companies, organizations and projects.  <a href="catalyst">Learn more</a></div>
				<div id="slider-date">July 7th, 2021 | GEA Announcements</div>
			</div>
		</div>
-->
	<!--	<div id="slider1">
			<div id="slider-image"><img src="webp/german.webp"  width="100%" height="78%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">German Resources & Courses Ready!</div>
				<div id="slider-body">Our team has completed the translation of our GEA core resources into German.  Free online starter workshop now open for Augst 14th. </div>
				<div id="slider-date">August, 2021 | GEA Courses</div>
				<div id="slider-link">>> <a href="https://www.gobrik.com/#courses/review-course/60c0ea65e9e88a001ff2d740/" target="_blank">First German Course August 14th</a></div>
			</div>
		</div>


			
		<div id="slider2">

			<div id="slider-image"><img src="webp/ayyew.webp"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Inspired by Igorot Ancestral Wisdom</div>
				<div id="slider-date">July 27th, 2021 | GEA Update Content</div>
				<div id="slider-body">Ecobricking principles are inspired by the deep green ways and wisdom of the Igorots-- the unconquered indegenous people of the Filipino Cordilleras.  Learn more about how ancient wisdom inspires a modern modvement</div>
				<div id="slider-link">>> <a href="ayyew"> Ayyew Inspired</a></div>
			
			</div>
		</div>


		<div id="slider4">
			<div id="slider-image"><img src="webp/mandalic.webp"></div>
			<div id="slider-textbox">
				<div id="slider-heading">The Ancient Future of Working Together</div>
				<div id="slider-date">July 27th, 2021 | GEA Updated Content</div>
				<div id="slider-body">Ecobricking and its spread is powered by the principles of mandalic collaboration.  Learn more about the decentralized mobilization of the plastic transition movement.</div>
				<div id="slider-link">>> <a href="mandalas"> Mandalic Collaboration</a></div>
				
			</div>
		</div>

			<div id="slider1">
			<div id="slider-image"><img src="webp/ToT-course-icon.webp"  width="100%" height="73%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">September Training of Trainer Course</div>
				<div id="slider-body">
					Join an intensive, five week online course that will get you up and running as a GEA Ecobrick Trainer. Learn the principles and techniques behind ecobricking, how to build, and how to share ecobricks. </div>
				<div id="slider-date">September 16th, 2021 | GEA Courses</div>
				<div id="slider-link">>> <a href="https://www.gobrik.com/#courses/review-course/6127c35fe67f24001e6f60c4/" target="_blank">Intro Course Sept. 11th</a></div>
			</div>
		</div>


		-->


		<div id="slider1">
			<div id="slider-image"><img src="photos/portmadog.webp"  width="100%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Carbon Zero Building Award</div>
				<div id="slider-body">
                The Earth & Ecobrick Roundhouse project in Bwyd Bendigedig Portmadog, by Incredible Edible's (GEA Trainer Lizzie Wynn, Wales, UK) is the second place finalist in the UK's Carbon Zero Efficient Building Awards. </div>
				<div id="slider-date">October 28th, 2021 | GEA News</div>
				<div id="slider-link">>> <a href="https://www.thenational.wales/environment/19652035.carbon-zero-efficient-building-award/" target="_blank">The National Reporting, Wales, UK</a></div>
			</div>
		</div>

		<div id="slider2">

			<div id="slider-image"><img src="webp/ayyew.webp"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Inspired by Igorot Ancestral Wisdom</div>
				<div id="slider-date">Sep 15th, 2021 | GEA Update Content</div>
				<div id="slider-body">Ecobricking principles are inspired by the deep green ways and wisdom of the Igorots the indegenous people of the Filipino Cordilleras.  Learn how their Ayyew ecological ethos inspires a modern modvement</div>
				<div id="slider-link">>> <a href="ayyew"> Ayyew Inspired</a></div>
			
			</div>
		</div>
<!--
		<div id="slider2">
			<div id="slider-image"><img src="webp/starter-course-icon.webp"  width="100%" height="73%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Learn the Basics of Ecobricking</div>
				<div id="slider-body">Join a Starter Workshop!  This September our Indian trainers are running an open online presentation of 'Plastic, the Biosphere & Ecobricks'.  Learn the fundamentals from experts!</div>
				<div id="slider-date">September 11th, 2021 | GEA Courses</div>
				<div id="slider-link">>> <a href="https://gobrik.com/#courses/review-course/60f243eacd377c001faa6c57/" target="_blank">Intro Course Sept. 11th</a></div>
			</div>
		</div>-->

		
		<div id="slider3">

			<div id="slider-image"><img src="webp/2020-regen-report.webp"></div>
			<div id="slider-textbox">
				<div id="slider-heading">GEA 2020 Regen Report Released</div>
				<div id="slider-date">Sept. 20, 2021 | GEA Center Circle</div>
				<div id="slider-body">We've issued an exhaustive ecological impact accounting for the GEA's operations in the previous year.  In 2020, we removed over 30,000 kg of carbon and 10,000 kg of plastic for the biosphere 🎉.</div>
				<div id="slider-link">>> <a href="2020-gea-regenerativity-report-launched/"> 2020 Regen Report</a></div>
			
			</div>
		</div>

		<div id="slider4">

			<div id="slider-image"><br><img src="svgs/aes.svg"  width="100%" height="85%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Offset Your Plastic</div>
				<div id="slider-date">GEA Services</div>
				<div id="slider-body">Our plastic offsetting system allows you to take personal responsibility for your household or enterprise plastic generation... and energize the global plastic transition movement!</div>
				<div id="slider-link">>> <a href="aes"> AES Plastic & Offsetting</a></div>
			
			</div>
		</div>

	</div>

   
        		
		</div>
	</div>
 


	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="svgs/dolphin-top-optimized.svg"width="100%" height="76%" ></div>
			<div class="big-header">Welcome to Plastic Transition</div>
			<!--<div class="lead-paragraph">Together we can keep our plastic out of the oceans.  With ecobricks we can secure plastic to build our greenest visions and ignite regenerative transition.</div>-->
			<div class="sub-text">
			<p>Together we can keep our plastic out of the oceans.  With ecobricks we can secure plastic to build our greenest visions and ignite regenerative transition.</p>
			<!--<p>When we save, segregate and pack plastics into bottles, we can make building blocks that can be reused over and over again. Together we can build green spaces that enrich our community and safely secure plastic out of the biosphere.  Together we can transition from plastic to ever greener harmony with Earth’s cycles.</p>-->
			</div>
			 <a href="faqs.php" button class="main-button">All About Ecobricks</a>
			<h6><a href="what">What is an Ecobrick?</a> | <a href="how">How to Make?</a> | <a href="why">Why Make?</a></h6>
		</div>	
	
	</div>

	  
<div id="content-sect2">
	<div id="main-content">
		<div class="lead-graphic"><img src="svgs/earth-service3.svg" width="100%" height="96%"></div>
		<div class="big-header">An Earth Based Solution</div>
        <!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
		<div class="sub-text">
		<p>Ecobricking follows the Earth's example of carbon sequestration.  Based on indegenous wisdom, the science of plastic degradation and earthen ethics, ecobricking is a non-capital and zero-carbon alternative to industrial plastic management.</p></div>
		<a href="sequest" button class="main-button">Plastic Sequestration</a>
		<h6><a href="/ayyew">Ayyew Inspired</a> | <a href="/circular">Circular by Design</a> | <a href="/plastic">Towards Transition</a> | <a href="/principles">Regenerative</a> <!--| <a href="/reports">Reports & Whitepapers</a>--></h6>
	</div>
</div>	
	  

<div id="content-sect3">
	<div id="main-content">
		<div class="lead-graphic"><img src="webp/build-circular4.webp" width="100%" height="90%"></div>
		<div class="big-header">The Problem is the Solution.</div>
		<!--<div class="lead-paragraph">Using Ecobricked Plastic we can Build our Greenest Visions.</div>-->
		<div class="sub-text"><p>Ecobricks make reusable building blocks ideal for building green spaces.  Use them make modules, home furniture, play parks, and food-forest gardens.  Using the problem, we can build the solution.</p>
		</div> 
		<a href="build" class="main-button">Building Applications</a>
		
		<h6><a href="earth">Earth & Ecobrick Building</a> | <a href="earth-methods">E&B Methods</a> | <a href="modules">Milstein Modules</a> | <a href="dms">Dieleman Modules</a> | <a href="openspaces">Open Spaces</a> | <a href="fire">Fire Safety</a></h6>
	</div>
</div>


<div id="content-sect4">
	<div id="main-content">
		<div class="lead-graphic"><img src="webp/balancing-green.webp"  width="100%" height="100%"></div>
		<div class="lead-graphic"><img src="svgs/aes-brk.svg" width="100%" height="40%" ></div><!--width="300px" height="254px"-->
		<!--<div class="lead-paragraph"><br>Introducing AES Plastic Offsetting</div>-->
		<div class="sub-text"><p><br>Fast track your journey to zero-waste through plastic offsetting.  Plastic offsets are directly correlated to authenticated ecobricked plastic through the Brikcoin manual blockchain.</p></div>
		<a href="what" class="main-button">Plastic Offsetting</a>
		<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes">AES Plastic</a> | <a href="/transition">Plastic Transition</a> | <a href="about">About the GEA</a></h6><br><br>
		<p>The Brikcoin manual blockchain enables the authentication, valuation and vitalization of ecobrikcing.<br><a href="https://gobrik.com/#offset" target="_blank">Offset your household or company plastic generation with us.</p><br>
		<img src="svgs/3brikcoins.svg" width="30%">
	</div>
</div>

	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>
