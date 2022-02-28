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

<?php require_once ("meta/media-$lang.php");?>

<?php require_once ("header.php");?>




<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		background: url(webp/gray-to-green-catalyst-banner2.webp) bottom;
		background-color: #5A8D37;
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
		
		background: url(svgs/gray-to-green-catalyst-banner3.svg) bottom;
		background-color: #4f8a28ff;
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
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
    font-family: Arvo, serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.0em;
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
  color: #fff;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.9em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #4f8a28ff;
	/*background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top;*/
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

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">Media Kit</div>
		<div class="splash-sub">Key points for the coverage of ecobricks and the plastic transition movement.</div>
	</div>
	<div class="splash-image"><img src="svgs/question.svg" style="width: 90%;"></div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
			<p>We’ve assembled this guide to help journalists avoid common misconceptions and connect with generally accepted ecobrick concepts and principles. </p>
			</div>

			<div class="page-paragraph">
				<p>The Global Ecobrick Alliance endorses the spelling and terminology that have been collectively determined by the ecobrick movement and we encourage like usage.   The terminology, principles and concepts listed here are mirrored on the official wikipedia Ecobricks page.  For Global Ecobrick Alliance content, please follow our attribution guidelines for quotations, videos and photos.><p> 

				

			</div>	

			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Terms & Spellings</h4>
						<h5>The generally accepted spelling for key terms.</h5>
					</div>
					

					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>
					
					<p>In 2016, ecobrick leaders around the world conferred and agreed that our concept deserved its own full fledged and normalized word.  The agreement was made to spell ‘ecobrick‘, as a common noun (non-hyphenated, without spaces or special capitalization).  Since 2017 this is the endorsed spelling of the ecobrick’s Wikipedia entry and url: https://en.wikipedia.org/wiki/Ecobricks.  We refer to the act and lifestyle of making ecobricks as ‘ecobricking’ and those who make ecobricks as ‘ecobrickers’.</p>
                    
						
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Misconceptions</h4>
						<h5>Please avoid the common misconceptions about ecobricks.</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					<p>:

“Ecobricks are made with plastic trash”— No where in Global Ecobrick Alliance materials do we refer to plastic as ‘trash’.  This is the antithesis of ecobricks which views plastic as a resource. Please avoid associating ecobricks with “trash” or “garbage”.
“Ecobricks are for building schools and homes”— Although you can build structures with them, 99% of ecobricks are being used for small home, school and community creations.  We focus on tiny applications, like furniture models, Lego, and especially gardens as per our principles.
“Ecobricks are for developing countries and poor people”— Ecobricks are for anyone who wants to take responsibility for their plastic, and are relevant around the world.  See our transcaste principle.
“Ecobricks are for places where recycling isn’t an option” — Ecobricks are ideal for places with recycling.  Ecobricks help keep plastic out of the failing recycling industry.
“Ecobricks is a Sustainable Development technology”: The ecobrick movement explicitly differentiates itself from “sustainabity” and “development” paradigms. Please do not refer to ecobricks in this light. Ecobricks is a non-capital, collaboration powered, regenerative technology.
“The GEA is a Company or an NGO”: The Global Ecobrick Alliance is not a company nor an NGO.  We are a not-for-profit Earth Enterprise.</p>

				</div>
			</div>

			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Text Quotations</h4>
					<h5>Guidelines for using snippets from this site.</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>
					
			

					<p>When using written content from our site our resources please attribute to “The Global Ecobrick Alliance – Ecobricks.org”.  ‘Ecobricks.org” is not necessary if a hyperlink is added to the attribution.</p><br>
                    
				</div>
			</div>



			<div class="reg-content-block" id="block4">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>Photos</h4>
                <h5>Guidelines for using our photos.</h5>
                <br>
                </div>

                <button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
            </div>

            <div id="preclosed4">
                
                <p>All the photos on this site (unless containing specific photo credits) available for you to use under our Creative Commons Attribution-ShareAlike 4.0 International License. Please attribute to Ecobricks.org</p>
                <br>

            </div>
            </div>



			<div class="reg-content-block" id="block5">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Videos</h4>
					<h5>Guidelines for using our video content</h5>
					<br>
					</div>

					<button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
				</div>

				<div id="preclosed5">
					
					<p>All the videos on this site and on our YouTube channel are available for you use under the Creative Commons Attribution-ShareAlike 4.0 International License. Please attribute to Ecobricks.org</p>
					<br>
			
				</div>
			</div>


			<div class="reg-content-block" id="block6">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>Interviews</h4>
                <h5>Contact our appropriate team to ask questions or arrange an interview.</h5>
                <br>
                </div>

                <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
            </div>

            <div id="preclosed6">
                
                <p>Contact our team to arrange interviews:</p>
                <p>Interational: vision@ecobricks.org</p>
                <p>UK: ukecobricks@gmail.com</p>
                <br>

            </div>
            </div>

            <div class="reg-content-block" id="block7">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>Past Coverage</h4>
                <h5>Examples of stories on ecobricks and the plastic transition movement.</h5>
                <br>
                </div>

                <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
            </div>

            <div id="preclosed6">
                
                <p>CNN Indonesia:  60 minute Inrussmaier@gmail.com, lizrex08@gmail.comsight Interview with Desi Anwar, Ani Himawati, and Russell Maier on the Ecobrick movement</p>

                <p>Spot.ph:  “This Canadian Accidentally Discovered How to Solve Our Plastic Problem” An interview on Russell’s time in the Philippines and the history and current state of Ecobricking there.</p>

                <p>Ecobricks Feature on National Korean TV</p>

                <p>Ecobrick Convergence Featured on Jogja city TV</p>

                <p>Ecobrick Spread in Jogjakarta and the Jogja Ecobrick Team Featured on NET.TV</p>

                <p>Life Athletics Pod Cast with Nik Wood:  Rusell Maier Ecobricks and Frisboo</p>

                <p>Solving Plastic One Bottle at a Time in the Northern Philippines: 10 minute documentary on Russell Maier and the spread of Ecobricks in the Norther Philippines.</p>

            </div>
            </div>

			
	


		<div class="page-paragraph">
			<br><br>
			<h2>Try it Yourself!</h2>
			<p>Perhaps the best way to document ecobricks is to try it yourself.  We encourage you to save your household plastic for a month, weight it then ecobrick it.  Then save and weigh your plastic the next month and observe the reduction in your plastic generation.</p>
			<br><br>
			<a class="action-btn" href="how" target="_blank">How to Make An Ecobrick</a>
			<p style="font-size: 0.85em; margin-top:20px;">Follow our 10 Steps Guide to Ecobricking</a></p>
		</div>
		
		</div>
<!--
		<h4>Learn More</h4>
		
		<p>Many powerful concepts underlie the Catalyst Program. .
		</p>
		<ul>
			<li><a href="aes">AES Plastic Offsetting</a></li>
			<li><a href="brikcoin">Brikcoin Manual Blockchain</a></li>
			<li><a href="sequest">Plastic Sequestration</a></li>
			<li><a href="mandalas">Leading by Example</a></li>
			<li><a href="principles">Regenerative Principles</a></li>
			<li><a href="https://medium.com/earthen">The Earthen Ethics Theory of Green</a></li>
		</ul>
-->
		
		<div class="side">


			
        <div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%">
				<h4>Plastic Transition</h4>
				<h5>Ecobrick building is a transition technology. Rather than see plastic as ‘waste’ we see it as a building block for our green visions.</h5><br>
				<a class="module-btn" href="transition">Learn More</a>
			</div>

	
			<div id="side-module-desktop-mobile">
				<img src="webp/gea-logo-400px.webp" width="90%">
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

            <div id="side-module-desktop-mobile">
                <img src="webp/tens-thousands.webp" width="100%">
                <h4>Ecobricks</h4>
                <h5>The GEA advocates ecobricking as a means to sequester plastic.  Only ecobricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
                <a class="module-btn" href="sequest">Plastic Sequestration</a>
            </div>

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->


<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js" defer></script> 

</div>
</body>
</html>

