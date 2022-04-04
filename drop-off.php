<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="webp/build-blue-450px.webp">
<link rel="preload" as="image" href="webp/blue-ode-750px.webp">



_END;?>

<?php require_once ("meta/drop-off-$lang.php");?>

<?php require_once ("header.php");?>




<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(svgs/brik-market-banner.svg) bottom;
        background-color: #2A91DA;
		
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
		
        
		background: url(svg/brik-market-banner.svg) bottom;
        background-color: #2A91DA;
		
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
	
	height:80px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #2A91DA;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}
	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">The Brik Market</div>
	    <div class="splash-sub">Drop off, sell, trade or buy ecobricks or offer your space as a community exchange hub.</div>
	</div>
	<div class="splash-image"><img src="webp/brik-market-400px.webp" style="width: 85%">
    </div>	
</div>
<div id="splash-bar"></div>
<!--<div id="header-bar2"></div>-->


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				<p>Introducing a new service to facilitate the trade of ecobricks amoung ecobrickers, projects, businesses and communities.</p>
    
			</div>
			
			
			<div class="page-paragraph">
                        <p>Connecting ecobrick makers, builders, project leaders and investors in plastic sequestration our new Brik Market enables the exchange of authenticated sequestered plastic.  Post your ecobricks for pickup.  Share your service of receiving ecobricks.  Ask for ecobricks for a project.</p>

                      
							
            </div>	
			<a name="DROP"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Dropping Off Ecobricks</h4>
                    <h5>Use the Brik Market to find community hubs and projects that are taking ecobricks.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                <br>
                <p><b>Short-term Applications</b><p>

                <p>Silicone or inner-tube-bands can be used as short-term, non-permanent attachment methods to create ecobrick applications that last for months and up to several years.</p>
                <p> As short-term applications are not usually covered up, they are typically for indoor use, in order to prevent the UV photodegradation of the bottles.  Short term application are easier for people to make and accelerate the <a href="/mandalas">mandalic spread</a> of ecobricking. </p>

                <br><p><b>Long-term Applications</b><p>
                
                <p>Earth and Ecobrick building techniques are used to create structures that can last years or decades (it is not uncommon for traditional constructions to last centuries!).  Earth mixes (i.e Cob (material), Wattle and daub, adobe) are used to lay ecobricks horizontally and completely cover them for full protection against all forms of degradation.</p>
                <p>The main benefit of long-term applications is plastic sequestration– fully securing plastic from all forms of degradation for the long-haul.</p>
                
                
                 
                </div>
                </div>

            <a name="HUBS"></a>
            <div class="reg-content-block" id="block10">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Ecobrick Community Hubs</h4>
                    <h5>Register to receive payment for collecting, storing and distrubuting ecobricks for community projects.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed10()" class="block-toggle" id="block-toggle-show10">+</button>
                </div>

                <div id="preclosed10">
        <br>

            <img src="photos/eco-brick-storage-1000px.jpg" width="100%" alt="An example of an eco brick storage depot to prepare for building" loading="lazy">

            <br>
            <p>Before you build with ecobricks, it is essential to store them properly.  Ideally, ecobricks are stored off of the ground (on a floor or raised on wood) and fully protected from the sun and the elements.  Ecobricks are best stacked horizontally with their bottom pointed outwards.  This enables you to organize your ecobricks by colour and brand– which later facilitates project planning and making.</p>

            <img src="webp/storage-banner-990px.webp" width="100%" loading="lazy" alt="An example of how to store eco bricks properly">

            

            <br>

                <h5>ℹ️ Learn more about making ecobricks properly and their storage: <a href="/how">How to make an ecobrick</a></h5>

         </div>
        </div>

                
                
            <a name="PRICING"></a>
			<div class="reg-content-block" id="block3">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Pricing Ecobricked Plastic</h4>
						<h5>On the Brik Market We a use a system of pricing per Kg of authenticated ecobricked plastic.</h5><br>
					</div>
					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">

                <img src="photos/milsteins-800px.jpg" width="100%" loading="lazy" alt="GEA trainers sitting at a table with eco brick milstein modules made from plastic">
            
					<p>On the Brik Market, ecobricks are bought and sold by their net weight as a batch. This enables a consistent price per kg across offers. 
</p>
<p>"Authenticated Ecobrick Sequestered Plastic" (AES plastic for short) represents the valuable ecological service of securing plastic, making a building block and of accelerating plastic transition. Three independent validators review each ecobrick and must concur that it is has been made according to GEA Best Practices and Guidelines. in order for the it to be fully authenticated. This process ensures that the plastic has been effectively sequestered, is safe to use as a building block and won't be processed industrially. Brikcoins are generated each time ecobricked plastic is authenticated. AES credits can be purchased with Brikcoins and with cash as a way to offset personal and business plastic footprints. </p>


                    
				</div>
			</div>





             <br>
             <div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h4>Start Exchanging</h4>
                        
                         <p>Starting perusing the Brik Market today!  You'll need your GoBrik account to take or post offers, but that's ok, its easy and free to create one</p>
                        
                        
                    
                    </div></p>

                    <div class="side2">
                        <br><img src="webp/albo-offer-350px.webp" width="100%" alt="eco brick road into the distance" loading="lazy" alt="eco brik are a form of sequestering plastic safely through time.">
                    </div>
                </div>
                <p>Sign up button coming soon.</p><br>
					<br>
            </div>
            


        </div>
	

		<div class="side">
	
			<div id="side-module-desktop-mobile">
				<img src="webp/earth-tree-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make tree benches">
				<br><h4>Following the Earth's Example</h4>
				<h5>Plastic Sequestration follows the Earth’s ancient example of compacting and securing carbon.</h5><br>
				<a class="module-btn" href="/plastic">Learn More</a>
                <br>
			</div>  
            <div id="side-module-desktop-mobile">
                <img src="webp/tens-thousands.webp" width="100%" loading="lazy" alt="eco brik and earth building can make community centers">
                <h4>Ecobricks</h4>
                <h5>The GEA advocates ecobricking as a means to sequester plastic.  Only eco<span class="eco-brick"> </span>bricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
                <a class="module-btn" href="sequest.php">Learn More</a>
            </div>

			<div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Plastic Transition</h4>
				<h5>Ecobrick building is a transition technology. Rather than see plastic as ‘waste’ we see it as a building block for our green visions.</h5><br>
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





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->

	


<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js?v2" defer></script> 

</div>
</body>
</html>

