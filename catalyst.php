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

<?php require_once ("meta/catalyst-$lang.php");?>

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
		
		background: url(webp/gray-to-green-catalyst-banner.webp) top;
		background-color: #5A8D37;
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;

		box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
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
		
		background: url(svgs/gray-to-green-catalyst-banner2.svg) top;
		background-color: #5A8D37;
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

		  box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
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
  font-weight: 500;
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
	background-color: #96B77F;
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
background: #3BB74B;
padding: 12px 18px;
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
		<div class="header-heading">A Program for Keen Green Enterprises to Track, Disclose & Accelerate their Plastic Transition.</div>
		<!--<div class="header-sub">A Solution For Plastic transition</div>-->
	</div>
	<div class="header-image"><img src="wp-content/uploads/2021/04/Catalyst-Company-Logo-square-v1.3-with-shadow-500px-2.png" style="width: 70%;"></div>	
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
				
			<p>Take your enterprise's green intentions to next level. Transform your plastic problem into a regenerative launch pad.  Blast off with us into regenerative, net-green and net-subtractive operations.</p>
			</div>

			<div class="page-paragraph">
				<p>An enterprise's plastic transition is one of the most telling indicators of its green.  Whether your on your way down to zero waste, or whether your already moving beyond, there's only one starting point: Plastic tracking and disclosure.<p>

					<p>This is so important, that for 2022, we're waiving all the fees for our program that does just this.  We're making the platform we've developed over the last four years accessible to everyone. Then, using the data from our Brikcoin blockchain, we can certify your progress as third party.  You then can disclose your transition and help inspire other enterprises striving to go green.</p>
			<p>Together we can catalyze <a href="transition">plastic transition</a> in our local and global communities.</p>

			</div>	

			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Plastic Transition Tracking</h4>
						<h5>Monitor your grey and green plastic impacts over the year.</h5>
					</div>
					

					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>
					<div class="row">
						<div class="main2">
							<p>Today its clear that the vast majority of the plastic we use eventually makes its way to the biosphere. Tracking your company's production and consumption of plastic is the first step in reducing one's grey impact on the environment.</p>
						</div>
						<div class="side2"><img src="webp/balancing-green.webp" width="80%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>The Catalyst program gets you going in 10 minutes using your estimates of your yearly plastic generation.</p>
						</div>
						<div class="side3"><img src="webp/balancing-green.webp" width="125px">
						</div>
					</div>
					<p>
					Month by month, your team will receive reports, reminding them of these impacts and ecouraging them to step up their reduction and subtraction initiatives.</p>
				<p>For more advanced companies that are already keeping detailed stats on their plastic generation, the program allows for month by month data entry.</p>
				<p>Meanwhile, all the ecobricking done by your staff is logged and credited to your enterprise.  Reaching out to your community?  Those ecobricks can be credited to your enterprise also!  Over the course of the year you can track in real time the increase of your green impact.</p>
						
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Plastic Transition Disclosure</h4>
						<h5>Certification & Hosting of your Report</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					<div class="row">
						<div class="main2">
						<p>You're passionate about the planet and so is your enterprise.  So let the world know.  Plastic transition disclosure allows you to showcase your efforts, lead by example and inspire others.</p>
						</div>
						<div class="side2"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/60c86875d6dbb7001ef8ed79/original/disclosedial.png" width="150px">
						</div>
					</div>

					<p>The Catalyst allows you to create yearly plastic impact reports that summarize your grey and green impacts.  As a third-party host, we certify your green plastic impacts so that you can confidently share them with your customers, clients and government reviews.</p>

					<div class="row2">
						<div class="main3">
						<p>Link to your reports and showcase your plastic transition.</p>
						</div>
						<div class="side3"><img src="https://ecobricks.org/svgs/eb-blue.svg" width="120px">
						</div>
					</div>
					<p>Showcase your plastic transition with our GEA certified banners on your website, products and marketing.</p>
				</div>
			</div>

			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Plastic Transition Acceleration</h4>
					<h5>Ecobricking, Offseting & Workshop Catalyzation.</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>
					<div class="row">
						<div class="main2">
						<p>But best of all, the Catalyst program allows you to take decisive and quantifiable action to green your company's impact.  You can use our system to log your ecobricks, buy plastic offsets and mobilize communities.  The green impact of all these goes to the credit of your enterprise.</p>
						</div>
						<div class="side2"><img src="https://www.ecobricks.org/wp-content/uploads/2020/09/AES-Plastic-Logo-full-vector-shadowed.svg" width="100%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>There are three types of green impacts that can be certified as AES credit.</p>
						</div>
						<div class="side3"><img src="https://www.ecobricks.org/wp-content/uploads/2020/09/AES-Plastic-Logo-full-vector-shadowed.svg" width="120px">
						</div>
					</div>
			

					<p><b>Ecobricking</b></p>
						<p>Ecobricks logged by the staff in your company, then which are successfully authenticated on the Brikcoin blockchain, qualify as AES plastic.</p><br>
					<p><b>Plastic Offsetting</b></p>
					<p>Your enterprise can purchase plastic offset credit on the GoBrik platform using Brikcoins or cash, to credit you year end reporting.</p><br>
					<p><b>Community Catalyzation</b></p>
					<p>By sponsoring workshops in your community, the ecobricks of new ecobrickers are credited to your enterprise.  By sponsoring GEA training of trainers workshops, the future trainers in these events, their ecobrickers and the communities they start, generate AES credits for your enterprise.
					</p>
					<h6><a href="/trainings">Learn more about GEA Trainings</a></h6><br>
				</div>
			</div>

			
		
		<div class="page-paragraph">
			<br>
			<h4>Get Started!</h4>
			<p>Setup your Catalyst account today.  As of 2022, we're doing away with out old fee structure.  All catalyst accounts, for enterprises large and small are free.  Use your GoBrik account to get started (or register first for a free personal account).</p>
			<br><br>
			<a class="action-btn" href="https://gobrik.com/#catalyze" target="_blank">🚀 Launch Catalyst Setup</a>
			<p style="font-size: 0.85em; margin-top:20px;">We'll send you over to GoBrik in a new window.</a></p>
		</div>

		<div class="page-paragraph">
			
			<h4>See How We Do It</h4>
			<p>The Global Ecobrick Alliance is an enterprise too!  And despite all our best efforts, we consume and produce plastic in our operations.  We use the catalyst program to track, disclose and accelerate our plastic impacts.  In the footer of our site and apps, we link to our public, past year reporting-- just click on this banner to see how we're doing:</p><br>
			<a href="https://www.gobrik.com/#my-catalyst/enterprise-disclosure/5e1f513586a7fe0015e77628/" target="_blank"><img src="banners/gea-disclose-300px.png"></a>
			<p style="font-size: 0.85em; margin-top:8px;">This will open our report in a new window.</a></p>
		
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
		

	</div>

	


		<div class="side">


			
		<div id="side-module-desktop-mobile">
			
				<h4>Get Started</h4>
				<h5>Setup your Catalyst Account today.</h5><br>
				<a class="action-btn" href="https://gobrik.com/#catalyze" target="_blank">🚀 Launch Catalyst Setup</a>
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

