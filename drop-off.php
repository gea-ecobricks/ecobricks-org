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
       
		background: url(svgs/brik-market-banner2.svg) bottom;
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
		
        
		background: url(svgs/brik-market-banner2.svg) bottom;
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
	margin: auto;
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
    margin: auto;
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
	    <div class="splash-sub">The place to arrange ecobrick exchanges, hubs, barters and drop-offs.</div>
	</div>
	<div class="splash-image"><img src="webp/brikmarket-400px.webp?v1.3" style="width: 80%">
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
				<p>Got ecobricks?  Need ecobricks? For Earth Day 2022, the Global Ecobrick Alliance is excited to launch the new Brik Market!  This is the place to arrange exchanges with local ecobrickers and community hubs!</p>
    
			</div>
			
			
			<div class="page-paragraph">

            <p>The<a ref="https://gobrik.com/#market" target="_blank"> Brik Market</a> has been under development for the last three years by the <a href="about.php">Global Ecobrick Alliance (GEA)</a>.  It is a space where ecobricked plastic can be used as a medium of local exchange and currency-- a key part of the GEA's mission of accelerating <a href="transition.php">plastic transition</a> and adding further value the ecological service of <a href="sequest.php">plastic sequestration</a>.  The Brik Market<a href="/gobrik">GoBrik platform</a> and connects to the <a href="brikcoins.php">Brikcoin manual blockchain</a>.</p>
		
            </div>	
			<a name="DROP"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Provide Ecobricks</h4>
                    <h5>Use the Brik Market to arrange exchanges or drop-offs of your ecobricks.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                <div class="row">
						<div class="main2">

                		<p>Ecobricks are awesome for small home projects.  However, sometimes ecobrickers do not have space in their home or they want to assist projects in their community.  On the Brik Market you can post an offer to give your ecobricks away, to trade or barter with them.  All you need is a (free) GoBrik account, a selection of logged and authenticated ecobricks.</p>

						</div>
						<div class="side2"><img src="webp/various-briks-400px.webp" width="100%">
						</div>
					</div>
					<div class="row2">
						<div class="main3">
						<p><b>Authenticated Ecobricks Only</b></p>
						</div>
						<div class="side3"><img src="webp/various-briks-400px.webp" width="150px">
						</div>
					</div>
                

                <p>The Brik Market only works with ecobricks that have been logged onto the GoBrik app and that have been sucessfully authenticated to meet GEA standards.  This way, community hubs and project leaders can review the ecobricks that are being offered, and be confident that they are properly made</p>

                <br>
                <!--<p><b>Sell</b></p>
                <p>On the Brik Market you can offer your ecobricks for exchange or delivery.  Ecobricks are priced on the Market per kg of authenticated ecobricked plastic.  Once you have offered the rate by which you wish to sell, the system calculates the batch price of your offer using the logged weight of the ecobricks you have selected to offer for sale.</p>-->

                <br><p><b>Offer for Nothing at All</b><p>
                <p>Alternatively you can offer your ecobricks gratis. Be sure to specify the details for delivery when you make your offer</p>
                
                <br><p><b>Trade & Barter</b></p>
                <p>Offer your ecobricks for a product or service.  You get to specify what you'd like to offer for exchange.</p>

                <br><p><b>Sell using Brikcoins</b></p>
                <p>Not yet available, but coming soon!</p>
                
                </div>
            </div>

            <a name="HUBS"></a>
            <div class="reg-content-block" id="block10">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Receive Ecobricks</h4>
                    <h5>Source ecobricks for your projects or store them for the community.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed10()" class="block-toggle" id="block-toggle-show10">+</button>
                </div>

                <div id="preclosed10">
        <br>

            <img src="photos/eco-brick-storage-1000px.jpg" width="100%" alt="An example of an eco brick storage depot to prepare for building" loading="lazy">

            <br>
            <p><b>Community Hubs</b></p>
            
            <p>Some ecobrickers offer the service of collecting, storing and distributing ecobricks to community projects.  This involves costs to them that they defer by charging for the service of collecting ecobricks or serving as drop-off centers.</p>

            <p>We refer to these locations as "Ecobrick Community Hubs".  They include cafes, zero-waste shops, restaurant and community centers that are helping accelerate plastic transition in their area.  Paying their requested 'hub fee' is a way to support their valuable service.  Hub fees are calculated as per Kg of AES plastic.  When offering ecobricks, the system will automatically calculate the net weight of your batch and the total fee to be paid to the community hub upon delivery.</p>
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

                <img src="https://cdn.ecobricks.org/wp-content/uploads/2020/04/2020-Manual-Blockchain.svg.png" width="90%" loading="lazy" alt="eco brik authentification process">
            
				<p>In order to provide a consistent means of pricing ecobricks across their various sizes and shapes, we cost then per kg of authenticated ecobricked sequestered plastic (AES plastic).  As only ecobricks that have been logged and authenticated on the GoBrik system are eligible for exchange, the net weight of each ecobrick is already recorded.  This enables the calculation of the total weight of the batch of selected ecobricks being offered for exchanges.</p>  . 

                 <p>Community Hubs specify their fee per Kg of AES plastic.  This fee is arbitrary, however it is guided by the global AES price set by the GEA each year (Current price: <a href="https://gobrik.com/#kg/" target="_blank"> 2.71$ USD per Kg of AES plastic</a>).  This fee is multiplied by the net weight of the offered batch up ecobricks. </p>
                    
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
                        <br><img src="webp/albo-offer-350px.webp" width="100%" alt="eco brick being bought with a brikcoin by a bird" loading="lazy" alt="eco brick being bought with a brikcoin by a bird.">
                    </div>
                </div>
                
			<a class="action-btn" href="https://gobrik.com/#market" target="_blank">🚀 Launch the Brik Market</a>
			<p style="font-size: 0.85em; margin-top:20px;">We'll send you over to GoBrik in a new window!</a></p>
					<br>
            </div>
            


        </div>
	

		<div class="side">
	
        <div id="side-module-desktop-mobile">
					<img src="webp/gea-logo-400px.webp" width="90%" alt="The Global Eco Brick Alliance">
					<h4>Global Ecobrick Alliance</h4>
					<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik and Brik Market platforms.</h5><br>
                    <a class="module-btn" href="about.php">Learn More</a>
					
				</div>

            <div id="side-module-desktop-mobile">
                <img src="webp/brikcoins-450px.webp" width="100%" loading="lazy" alt="eco brik brikcoin blockchain">
                <h4>Brikcoin Blockchain</h4>
                <h5>The Brik Market makes use of authenticated ecobrick sequestered plastic that has been validated on our chain.</h5><br>
                <a class="module-btn" href="brikcoins.php">Learn More</a>
            </div>

			<div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Plastic Transition</h4>
				<h5>Using ecobricks as a means of community barter and exchange is another way to go local and reduce our reliance on the petro-capital economy.</h5><br>
				<a class="module-btn" href="transition.php">Learn More</a>
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

