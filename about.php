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

<?php require_once ("meta/about-$lang.php");?>

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<script>
	function preopen() {
	  var x = document.getElementById("preopen");
	  if (x.style.display === "none") {
		x.style.display = "block";
	  } else {
		x.style.display = "none";
	  }

	
  var x = document.getElementById("toggle-hide");
  if (x.innerHTML === "⬆ Hide") {
    x.innerHTML = "⬇ Show";
  } else {
    x.innerHTML = "⬆ Hide";
  }
	}
</script>

<script>
	function preclosed1() {
	  var x = document.getElementById("preclosed1");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}

	var y = document.getElementById("block1");
	if (y.style.display === "grid") {
		y.style.background = "#f6f6f6";
		y.style.display = "block";
	} else {
		y.style.background = "#fff";
		y.style.display = "grid";
	}
	
	var x = document.getElementById("block-toggle-show1");
		if (x.innerHTML === "+") {
			x.innerHTML = "-";
		} else {
			x.innerHTML = "+";
		}
	}
</script>

<script>
	function preclosed2() {
	  var x = document.getElementById("preclosed2");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}

	
		var y = document.getElementById("block2");
	if (y.style.display === "grid") {
		y.style.background = "#f6f6f6";
		y.style.display = "block";
	} else {
		y.style.background = "#fff";
		y.style.display = "grid";
	}
	
	var x = document.getElementById("block-toggle-show2");
		if (x.innerHTML === "+") {
			x.innerHTML = "-";
		} else {
			x.innerHTML = "+";
		}
	}
</script>

<script>
	function preclosed3() {
	  var x = document.getElementById("preclosed3");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}

	var y = document.getElementById("block3");
	if (y.style.display === "grid") {
		y.style.background = "#f6f6f6";
		y.style.display = "block";
	} else {
		y.style.background = "#fff";
		y.style.display = "grid";
	}
	
	var x = document.getElementById("block-toggle-show3");
		if (x.innerHTML === "+") {
			x.innerHTML = "-";
		} else {
			x.innerHTML = "+";
		}
	}
</script>


<script>
	function preclosed4() {
	  var x = document.getElementById("preclosed4");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}

	var y = document.getElementById("block4");
	if (y.style.display === "grid") {
		y.style.background = "#f6f6f6";
		y.style.display = "block";
	} else {
		y.style.background = "#fff";
		y.style.display = "grid";
	}
	
	var x = document.getElementById("block-toggle-show4");
		if (x.innerHTML === "+") {
			x.innerHTML = "-";
		} else {
			x.innerHTML = "+";
		}
	}
</script>


<script>
	function preclosed5() {
	  var x = document.getElementById("preclosed5");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}

	var y = document.getElementById("block5");
	if (y.style.display === "grid") {
		y.style.background = "#f6f6f6";
		y.style.display = "block";
	} else {
		y.style.background = "#fff";
		y.style.display = "grid";
	}
	
	var x = document.getElementById("block-toggle-show5");
		if (x.innerHTML === "+") {
			x.innerHTML = "-";
		} else {
			x.innerHTML = "+";
		}
	}
</script>



<STYLE>


#preclosed1 {display: none;}
#preclosed2 {display: none;}
#preclosed3 {display: none;}
#preclosed4 {display: none;}

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
	.header-content-block {
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		/*background: url(webp/gray-to-green-catalyst-banner2.webp) bottom;*/
		background-color: #4F8A28;
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
	.header-content-block {
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
		/*background: url(svgs/gray-to-green-catalyst-banner3.svg) bottom;*/
		background-color: #4F8A28;
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
.header-image {
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
.header-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



@media screen and (max-width: 700px) { 
.header-image {
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
.header-box {
	position: relative;
  flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



.header-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 300;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.header-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.header-heading {
      font-size: 3em;
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
		font-size: 1.2em;
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


#header-bar {
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


#header-bar2 {
	margin-top: -50px;
	width: 100%;
	background-color: #95B97E;
	/*background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top;*/
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	-webkit-transform: skewY(-5deg);
  -moz-transform: skewY(-5deg);
  -ms-transform: skewY(-5deg);
  -o-transform: skewY(-5deg);
  transform: skewY(-5deg);

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
      width: 100%;
	  margin-top: 0px;
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

/* Create two unequal columns that sits next to each other */

/*
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

*/


@media screen and (max-width: 700px) {
	.lead-page-paragraph {
      font-size: 1.25em;
      line-height: 1.4;
      margin: 35px 6% 25px 6%;
  }
}

@media screen and (max-width: 700px) {
	.page-paragraph {
      font-size: 1em;
      line-height: 1.4;
      margin: 20px 5% 30px 5%;
  }
}


@media screen and (min-width: 700px) {
	.lead-page-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 25px 10px 5px 10px;
  }
}


@media screen and (min-width: 700px) {
	.page-paragraph {
      font-size: 1.1em;
      line-height: 1.3;
      margin: 25px 10px 50px 10px;
  }
}


@media screen and (max-width: 700px)  {
		.reg-content-block {
		text-align: left;
		padding: 15px 7% 15px 7%;
		border-radius: 0px;
		margin: 35px 0px 0px 0px;
/*
		border-color: grey;
		border-width: 1px;
		border-style: dashed;*/
}
	}


	@media screen and (min-width: 700px) {
		.reg-content-block {
			text-align: left;
			padding: 18px 5% 22px 5%;
			border-radius: 15px;
			margin: 30px 0px 20px 0px;
			
			border-color: grey;
			border-width: 1px;
			border-style: dashed;
 
}
	}

#block1 {
	background: #f6f6f6;
	display: block;
}

#block2 {
	background: #f6f6f6;
	display: block;
}

#block3 {
	background: #f6f6f6;
	display: block;
}

#block4 {
	background: #f6f6f6;
	display: block;
}

.opener-header {
	display: flex;
  box-sizing: border-box;

}

.opener-header-text {
	flex: 85%;
}



@media screen and (max-width: 700px) {
  .block-toggle {
      margin: 5px;
      font-size: 2.0em;
      background: #ffffff;
      padding: 15px 20px 15px 20px;
      border-radius: 10px;
      color: grey;
      border: none;
	  flex: 15%;
	 
  }
}

@media screen and (min-width: 700px) {
  .block-toggle {

      font-size: 3em;
      background: #fff;
      padding: 15px;
      border-radius: 15px;
      color: grey;
	  flex: 15%;
      margin-bottom: 10px;
	  border: none;
	  border: gray;

  }
}

button:hover {
  background: white;
  cursor: pointer;
  color: black;
  border-bottom: black;
  border-bottom-width: 1px;

  /*
	  border-top-width: 1px;
border-right-width: 1px;

border-left-width: 1px;
		border-style: dashed;*/
}


ul {  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  font-weight: 300;
  -webkit-font-smoothing: antialiased;
  color: #222222;
  font-size: 1.07em;
      line-height: 1.3;
  
}

ul a {
	color: #222222;
}
ul a:hover {
text-decoration: none;
}

.action-btn {
  -webkit-border-radius: 14px;
  -moz-border-radius: 14px;
  border-radius: 14px;
font-family: Mulish;
color: #fff;
font-size: 20px;
background: #4f8a28ff;
padding: 11px 17px;
text-decoration: none;
font-weight: 500;
margin-top: 40px;
}

.action-btn:hover {
  background: #00A317;
  text-decoration: none;
}

	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="header-content-block">
	<div class="header-box">
		<div class="header-heading">We envision a Transition from Plastic in our Households, Communities and Enterprises to an ever Greener Harmony with Earth’s Cycles.</div>
		<!--<div class="header-sub">A Solution For Plastic transition</div>-->
	</div>
	<div class="header-image"><img src="webp/gea-logo-400px.webp" style="width: 70%;"></div>	
</div>
<div id="header-bar"></div>
<!--<div id="header-bar2"></div>-->


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
			<p>The Global Ecobrick Alliance is an Earth Enterprise accelerating local and global plastic transition and sequestration.  We do so through the mandalic dissemination of principled and practical ecobricking to raise ecological consciousness.</p>
			</div>

			<div class="page-paragraph">
				<p>The Global Ecobrick Alliance (GEA) represents the coming together of plastic transition leaders around the world.  We’re made of 300+ trainers from all walks of life, ages and backgrounds from around the world.  We share a deep concern for the biosphere and its harm by plastic pollution.  We are united by our passion for transitioning from plastic to ever greener modes of living.  </i><p>

				<p>To do so, we beleive that raising our personal and collective ecological consciousness is crucial.</p>  

				<p>The GEA was started in the green valley of the Chico River in the land of Igorot people– the indigenous people of the Filipino Cordilleras.  We are guided by their Ayyew vision and regenerative principles.  After seeing the failure of capital and profit guided plastic initiatives, we are convinced that truly solving plastic requires a new and careful relationship with petro-capital.  As such we established the GEA as a not-for-profit Earth Enterprise.  In this way we can maintain global standards for ecobricking and the criteria of plastic sequestration, without profit motif, and instead with a full focus on Earth service.</p>
				
			

			</div>	

			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Being the Change</h4>
						<h5>We strive to lead by example.</h5>
					</div>
					

					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>
					<div class="row">
						<div class="main2">
							<p>As ecobrickers ourselves, we have been ecobricking our own plastic and building with our ecobricks for a while now.  Our ecobricking has given us a chance to reflect on our own plastic consumption.  We feel that solving plastic is a lot more complex than banning straws or bringing a bag shopping.  While such small steps are essential, deeply solving plastic requires an extensive journey from personal, to household, to community, to economic shift.</p>
						</div>
						<div class="side2"><img src="webp/balancing-green.webp" width="80%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<br><p><b>We observe that the consumption and production of plastic is rooted in the global petro-capital economy.</b></p>
					
						</div>
						<div class="side3"><img src="webp/balancing-green.webp" width="125px">
						</div>
					</div>
					<p>Plastic is bound to the petroleum and capital that makes the global economy spin.  However, rather than stress about these big system issues, we’ve chosen to focus on our own personal plastic consumption.  This is something we can be sure to do something about!<p> 
					<P>Although seemingly small, we feel that our own plastic is so important that ‘leading by personal example’ is one of our core principles.  As we have come together as the Global Ecobrick Alliance, we’ve realized that to deeply solve plastic, we also have to lead by our allied action, enterprise structure and principles…</p>
					
						
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Earth Enterprise</h4>
						<h5>Our not-for-profit enterprise is focused on Earth service.</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
				<p>The Global Ecobrick Alliance operates as a not-for-profit enterprise with the mandate of for-Earth service.  This means that unlike many companies, we have no share-holders or owners to whom profits are funneled.  It aso, means that unlike many organizations, we do not receive charity, grants or CSR funds from companies.  Instead, our enterprise generates tangible ecological value, that is quantified and sold (see AES plastic offsets).  We also provide workshops and trainings that raise ecological consciousness and promote the generation of further ecological enrichment.</p>
				<p>Unlike many companies and organizations, our trainers, members and core team are not remunerated for their work generating profit, but for the value they bring fulfilling our mission and vision.  We hold the space and set the parameters to ensure that our trainers and our principles can receive a fair and abundant remuneration for their valuable service to the earth.  Our trainers, members and core team are fully autonomous and instead receive renumeration for the GEA trainings, workshops, consultations, services and products that they provide indepently.  Many of them work hard and contribute greatly of their own time and energy to build the infrastructure to enable this.</p>
				<p><b>Unlike a Foundation…</b></p>
				<p>Unlike many foundations and companies we spend no money on advertising or marketing– instead relying on our authenticity and the principles of collaborative mandalic manifestation.</p>
				<p>Unlike an NGO we do not rely on volunteers to make things happen– all of our operations are manifested through our GEA Trainer and Core Team– folks who have been through one of our advanced trainings and are perpetually committed and resonant with our mission, vision and principles.  Our trainer team is constantly running GEA Trainings around the world, and are remunerated professionally for these services by the community groups, companies, governments, NGOs or organizations that hire them.</p>
				<br>
				<p><i>    “In a world with NFP business at its heart, profit is a means by which social and environmental well-being is achieved; it is not a goal in itself.”</i></p>

				<p>– How on Earth, Hinton & Maclurcan (2016)</p>
				</div>
			</div>	


			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Principled Practice</h4>
					<h5>As an Earth Enterprise the GEA follows seven principles that ensure our goals, operations and our results are deeply in line with our vision and mission in both the short and long-term…</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>

					<p><b>1. For-Earth</b></p>
						<p>We track and disclose our ecological impacts to ensure that the net result of our enterprise is the subtraction of CO2 and plastic from the biosphere and the support of biodiversification.  We work to raise ecological consciousness and empower others to follow our example.</p><br>

					<p><b>2. Leading by Example</b></p>
					<p>We ensure that the processes, methods, products and services of our enterprise are fully in line with the principles of the ecobrick movement and the other Earth Enterprise principles below.  We are careful to ensure, through our trainings and organizational parameters, that every member of our team instantiates and embodies these principles in their life and work.  The operation of our enterprise, of our core team embodies the principles of collaborative mandalic manifestation.  The GEA does this by holding the space (the core intentions and principles) of the mandalically unfolding  global ecobrick movement.</p><br>

					<p><b>3. Open Source</b></p>
					<p>By sponsoring workshops in your community, the ecobricks of new ecobrickers are credited to your enterprise.  By sponsoring GEA training of trainers workshops, the future trainers in these events, their ecobrickers and the communities they start, generate AES credits for your enterprise.
					</p>

					<p><b>4. Gender, Age, Status Transcendent</b></p>
					<p>We strive to craft methods and processes that do not restrict the involvement and participation from men and women, young and old, rich and poor and everyone in between.  Furthermore we recognize and actively encourage co-creative partnerships between folks on the extremes of age, gender, and status.
					</p>

					<p><b>5. Fair & Abundant Remuneration for Earth Service</b></p>
					<p>We actively cultivate the space and parameters so that our trainers, staff and principles receive fair and abundant remuneration for their service to the earth.  As our enterprise expands we will ensure a wage bracket to maintain a defined ratio from the highest to the lowest paid person in the organization.
					</p>
					<p><b>6. Financial and Impact Transparency</b></p>
					<p>We strive to make all our financials, both in fiat currency and on our Brikcoin blockchain transparent and accessible.  We also disclose our net impacts in terms of CO2 and Plastic.
					</p>
					<p><b>7. Not for Profit</b></p>
					<p>No individuals or shareholders will profit from the operation of the enterprise.  At the end of the year, any unspent funds will be reinvested back into the fulfillment of our mission and vision.	
					</p>

					<h6><a href="/principles">Learn more about ecobricking principles</a></h6><br>
				</div>
			</div>

			<div class="reg-content-block" id="block4">

				<div class="opener-header">	
					<div class="opener-header-text">
					<h4>Our Work.</h4>
					<h5>What we do.</h5>
					<br>
					</div>

					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
				</div>

			<div id="preclosed4">
					
				<p>The GEA maintains and develops the technical and philosophical infrastructure to serve local and global ecobrick movements and energize plastic transition. </p>

				<p><b>Ecobricks.org</b></p>
				<p>We maintain Ecobricks.org (this site) as the go-to source for up-to-date ecobrick information, methods, data and best-practices.  The site is run our own Ubuntu server using WordPress software.</p>

				<p><b>GoBrik.com</b></p>
				<p>The GEA maintains and develops the free GoBrik.com web app to support and connect ecobrickers and their communities.  The platform is run on the Knack database development platform.</p>

				<p><b>Brikcoin Manual Blockchain</b></p>
				<p>
				The GEA has developed and now maintains the Brikcoin manual blockchain as a means to value the plastic sequestration service of ecobrickers and to develop a medium of exchange based on the value of secured plastic.  Brikcoins are generated and exchanged on our GoBrik webapp platform with free account signup.</p>

				<p><b>Ecobrick Best Practices</p>
				<p>
				We maintain and develop ecobrick best practices for the making and application of ecobricks.  We strive to develop, make available, and disseminate guides and resources to facilitate and encourage the adoption of best practice methods.</p>

				<p><b>Circle - Community Server</b></p>
				<p>We maintain GEA Circles as a social media alternative for the global ecobricker community</p>

				<p><b>Reports & Whitepapers</b></p>
				<p>We actively are developing and releasing reports, research and white papers on ecobrick and plastic transition topics.</p>

				<p><b>Ecobrick Learning Resources</b.</p>
				<p>The GEA develops and deploys resources such as video tuturials on our youtube channel, photocopiable PDF guidebooks,  Ecobrickable Design parameters and ecobrick trainings.</p>
			</div>
		</div>

			<div class="page-paragraph">
				<br>
				<h2>Get Started!</h2>
				<p>Setup your Catalyst account today.  Use your GoBrik account to get started.  If you don't have a GoBrik account yet, be sure to register first for a free personal account.</p>
				<br><br>
				<a class="action-btn" href="https://gobrik.com/#catalyze" target="_blank">🚀 Launch Catalyst Setup</a>
				<p style="font-size: 0.85em; margin-top:20px;">We'll send you over to GoBrik in a new window.</a></p>
			</div>
		
		</div>
<!--
		<h4>Learn More</h4>
		
		<p>Many powerful concepts underlie the Catalyst Program. .
		</p>
		<ul>
			<li><a href="aes">AES Plastic Offsetting</a></li>
			<li><a href="brikcion">Brikcoin Manual Blockchain</a></li>
			<li><a href="sequest">Plastic Sequestration</a></li>
			<li><a href="mandalas">Leading by Example</a></li>
			<li><a href="principles">Regenerative Principles</a></li>
			<li><a href="https://medium.com/earthen">The Earthen Ethics Theory of Green</a></li>
		</ul>
-->
		



	


		<div class="side">


			
		<div id="side-module-desktop-only">
        <img src="wp-content/uploads/2021/08/Regen-Report-2021-GEA.webp" width="90%">
				<h4>2021 Regen Report</h4>
				<h5>We're proud to publish our net-green ecological impact for the past year.</h5><br>
				<a class="action-btn" href="https://gobrik.com/#catalyze" target="_blank">🚀 Launch</a><br><br>
			</div>

	
			<div id="side-module-desktop-mobile">
				
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
				<img src="webp/balancing-green.webp" width="80%">
				<h4>Plastic Offsetting</h4>
				<h5>Our Catalyst Program allows you to offset your plastic generation and support the global ecobrick movement.</h5><br>
				<a class="module-btn" href="aes">Learn More</a>
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

