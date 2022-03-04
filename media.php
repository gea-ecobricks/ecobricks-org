<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="webp/earthcenter-banner-400px.webp">
<link rel="preload" as="image" href="svgs/gray-to-blue-media-banner2.svg">

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
		
		background: url(svgs/gray-to-blue-media-banner2.svg) bottom;
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
		
		background: url(svgs/gray-to-blue-media-banner2.svg) bottom;
		background-color: #0066FF;
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
	background-color: #0066FF;
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
	<div class="splash-image"><img src="webp/earthcenter-banner-400px.webp" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
			<p>We’ve assembled this kit as a guide to the generally accepted ecobrick terminology, how to properly attribute our content and to how to avoid common misconceptions. </p>
			</div>

			<div class="page-paragraph">
				<p>The Global Ecobrick Alliance uses terminology that has been collectively determined by the global ecobrick movement and established on the <a href="https://en.wikipedia.org/wiki/Plastic_sequestration" target="_blank">Wikipedia Ecobricks article</a> throughout our site and resources.</p>  
                <p>We encourage the same usage of terms and spellings by journalist, researchers and ecobrickers to add consistentcy and momentum to local and global grass roots plastic transition movements.</p>
                <p>Below we provide an overview of ecobrick terms, misconceptions, our creative commons licenses and our requisite attribution tags for using or texts, photos and videos.<p> 

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
					
					<p><b>Ecobrick</b></p>
                    <p><b>"ecobrick"</b> -- no space, hyphen or added capitalization is the recongnized spelling.  This is the recognized spelling of the ecobrick’s Wikipedia entry and url: <a href="https://en.wikipedia.org/wiki/ecobricks" target="_blank">wikipedia.org/wiki/<b>ecobricks.</b></a></p>

                    <p>In the past terms such as "bottle brick", "eco brick" and "eco-brick" have been used to refer to a PET bottle packed with plastic.  In 2014, plastic transition leaders around the world conferred and agreed that our concept deserved its own full fledged and normalized word.  The ecobrick wikipedia page was updated accordingly in 2016.</p> 
                    
                    <p>NOTE:  Other brick making technologies borrow the term ecobrick by using a variety of spellings.  Corporations such as Nestle have attempted to appropriate 'ecobrick' for their cement block corporate social responsibility programs. However, plastic sequestration in a PET bottle is the <a href="https://en.wikipedia.org/wiki/Eco-Brick" target="_blank">recognized wikipedia disambiguation for the non-hyphenated spelling.</a></p><br>

                    <p><b>Plastic Sequestration</b></p>
                    <p>The goal of ecobricking is the <a href="https://en.wikipedia.org/wiki/Plastic_sequestration">sequestration of plastic</a>.  This is the official term as defined and recognized on wikipedia.</p>
                    <br>
                    <p><b>Ecobricker</b></p>
                    <p>Someone who makes an ecobricks or who has committed to ecobricking all their plastic</p><br>
                    <p><b>Ecobricking</b><p>
                    <p>The act of sequestering plastic inside an ecobrick.</p>
                    <br>
                 			
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
					<p>

                    <ul>
			<li><b><i>“Ecobricks are made with plastic trash"</i></b> <br><br>
            The Global Ecobrick Alliance, approaches plastic from a regenerative and ayyew philosophy.  As such we do not refer to plastic as ‘trash’.  This is the antithesis of ecobricks which views plastic as a resource. Please avoid associating ecobricks with “waste” or “trash” and rather as "used plastic" or "discarded plastic".  See our <a href="ayyew">Ayyew Principle.</a><br><br></li>
            <li><b><i>“Ecobricks are for building schools and homes”</i></b> <br><br>
             Although you can build structures with them, 99% of ecobricks are applied in projects that use less than 20 ecobricks at a time (such as seats, furniture, tables, garden beds, etc.).  The GEA advocates small and useful applications as a means of empowering a wider section of society. See <a href="build">Ecobrick Applications</a><br><br></li>
            <li><b><i>“Ecobricks are for developing countries and poor people"</i></b> <br><br>
             Ecobricks are for anyone who wants to take responsibility for their plastic, and are relevant around the world.  Currently, there are more ecobrickers from the UK on our GoBrik app than anywhere else in the world. See <a href="https://www.gobrik.com/#global/country-stats/">GoBrik country stats</a></li><br><br>
            <li><b><i>“Ecobricks are for places where recycling isn’t an option”</i></b><br><br>
             Ecobricks are ideal for places with recycling.  Ecobricks help keep plastic out of the problematic recycling industry (preventing emissions and plastics eventual dispersion). See <a href="sequest">Plastic Sequestration</a><br><br></li>
            <li><b><i>“Ecobricks is a Sustainable Development technology”</i></b><br><br>
             The GEA explicitly differentiates itself from “sustainabity” and “development” paradigms. Instead: Ecobricks are a non-capital, collaboration powered, regenerative technology. See our <a href="principles">principles</a><br><br></li>
            <li><b><i>“The GEA is a Company or an NGO”</i></b> <br><br>
             The Global Ecobrick Alliance is not a company nor an NGO.  We are a not-for-profit Earth Enterprise.  See <a href="about">About us</a></li>
            </p>
			<br>

				</div>
			</div>

			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Quoting our texts</h4>
					<h5>Guidelines for using snippets from this site.</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					
					<p>When using written content from our site our resources please attribute to “The Global Ecobrick Alliance – Ecobricks.org”.  ‘Ecobricks.org” is not necessary if a hyperlink is added to the attribution.</p>
                    <p>For hyper-links, please use: https://ecobricks.org</p><br>
                    
				</div>
			</div>



			<div class="reg-content-block" id="block4">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>Photos & Images</h4>
                <h5>Guidelines for using and attritubuting our images.</h5>
                <br>
                </div>

                <button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
            </div>

            <div id="preclosed4">
                
                <p>All the photos and images on ecobricks.org are available for use under a Creative Commons Attribution-ShareAlike 4.0 International License. unless noted otherwise (such as our logos, icons and emblems).</p>
                <p>Please attribute to "The Global Ecobrick Alliance - Ecobricks.org"</p><br>
                <p><b>Galley of Stock Ecobrick Photos</b></p>
                <p>We've assembled a <a href="gallery">gallery of wide ranging of ecobrick related photos</a> that you can freely use under our CC-A-SA-4.0 license.</p>
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
					
					<p>All the videos on this site and on our <a href="https://youtube.com/ecobricks" tagert="_blank">Our Youtube Channel</a> are available for use under a Creative Commons Attribution-ShareAlike 4.0 International License unless otherwise noted.</p>
                    
                    <p> Please attribute to "The Global Ecobrick Alliance - Ecobricks.org"</p>
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
                
            <br>

            <p><b>The GEA in the United Kingdom</b></p>
            <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#117;&#107;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;">&#117;&#107;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;</a></p>
            <br>

            <p><b>The GEA in Indonesia</b></p>
            <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#117;&#107;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;">&#105;&#110;&#100;&#111;&#110;&#101;&#115;&#105;&#97;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;</a></p><br>

            <p><b>Direct Media Enquiries</b></p>

            <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#101;&#100;&#105;&#97;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;">&#109;&#101;&#100;&#105;&#97;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;</a></p><br>

            </div>
            </div>


            <div class="reg-content-block" id="block7">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>Past Coverage</h4>
                <h5>Examples of stories on ecobricks and the plastic transition movement.</h5>
                <br>
                </div>

                <button onclick="preclosed7()" class="block-toggle" id="block-toggle-show7">+</button>
            </div>

            <div id="preclosed7">
			<ul>
                <li><p><b>CNN Indonesia</b> | <a href="https://www.youtube.com/watch?v=peDg7qwWMKU" target="_blank">60 minute Interview with Desi Anwar, Ani Himawati, and Russell Maier on the Ecobrick movement</a></p></li>

                <li><p><b>Korea TV</b>  |  <a href="http://www.ytn.co.kr/_sp/0930_201603122050037614" target="_blank">Ecobricks Feature on National Korean TV</a></p></li>

                <li><p><b>Indonesia, Jogja TV</b>  |  <a href="http://jogjatv.tv/pemkot-luncurkan-ecobricks-untuk-atasi-sampah-plastik/" target="_blank">Ecobrick Convergence Featured on Jogja city TV</a></p></li>

                <li><p><b>Indonesia, NET.TV</b>  |  <a href="https://www.youtube.com/watch?v=fK-cc8SfSW8" target="_blank">Ecobrick Spread in Jogjakarta and the Jogja Ecobrick Team Featured on NET.TV</a></p></li>

                <li><p><b>Philippiines, Spot.ph</b>  | <a href="http://www.spot.ph/newsfeatures/newsfeatures-peopleparties/71089/interview-russel-maier-ecobricks-a00171-20170810-lfrm2" target="_blank">The history of ecobricking in the Philippines.</a></p></li>

                <li><p><b>Independent Documentary</b>  | <a href="https://www.youtube.com/watch?v=Ynh0RYORsOM" target="_blank">Solving Plastic One Bottle at a Time in the Northern Philippines: 10 minute documentary on Russell Maier, Irene Angway and the spread of Ecobricks in the Norther Philippines.</a></p></li>
				<br><br>

            </div>
            </div>

            <div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <br>
						 <h3>Try it Yourself.</h3>
                        
                         <p>Perhaps the best way to document ecobricks is to try it yourself!  We encourage you to save your household plastic for a month, weight it then ecobrick it.  Then save and weigh your plastic consumption the next month. Subrtrating your second month of consumption from your first, will show your <a href="transition">plastic transition</a> progress.  Now, that's a good story! 👍</p>
			<br><br>
			<a class="action-btn" href="how" target="_blank">How to Make An Ecobrick</a>
			<p style="font-size: 0.85em; margin-top:20px;">Follow our 10 Steps Guide to Ecobricking</a></p>
                    
                    </div></p>

                    <div class="side2">
                        <br><img src="svgs/eb-blue.svg" width="100%" alt="how to make an eco brick">
                    </div>
                </div>
            </div>

		
	</div>

		
		
		<div class="side">


		<div id="side-module-desktop-mobile">
				<img src="webp/gea-logo-400px.webp" width="90%">
				<h4>Global Ecobrick Alliance</h4>
				<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

        <div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%">
				<h4>Plastic Transition</h4>
				<h5>Ecobrick building is a transition technology. Rather than see plastic as ‘waste’ we see it as a building block for our green visions.</h5><br>
				<a class="module-btn" href="transition">Learn More</a>
			</div>

	
		

			<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="80%">
				<h4>For-Earth Enterprise</h4>
				<h5>By discolosing our carbon, plastic and biodiversity impacts and by ensuring that they are net-green, the GEA commits to for-Earth Enterprise</h5><br>
				<a class="module-btn" href="about">About Us</a>
			</div>

            <div id="side-module-desktop-mobile">
                <img src="webp/faqs-400px.webp" width="100%">
                <h4>Ecobricks</h4>
                <h5>The GEA advocates ecobricking as a means to sequester plastic.</h5><br>
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

