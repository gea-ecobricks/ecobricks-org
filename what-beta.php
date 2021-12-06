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

<?php require_once ("meta/what-beta-$lang.php");?>

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
		/*background: url(webp/arc-purple2.webp) right top;*/
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #00E6FF;
		margin-top: 50px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	}
}


@media screen and (min-width: 700px) { 
	.header-content-block {
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		/*background: url(svgs/cloud-back.svg) right top;*/
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #00E6FF;
		margin: 0 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;

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
	margin-top: -65px;
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
	margin: -40px 0px 0px 10px;
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
  text-shadow: 0 0 10px #4c4b4b;

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
	background-color: #00E6FF;
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
.row {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}

/* Create two unequal columns that sits next to each other */


/* Main column */

@media screen and (min-width: 700px) {
.main {
  flex: 70%;

  padding: 15px 40px 15px 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main {
  flex: 100%;

  box-sizing: border-box;
}
}


@media screen and (min-width: 700px) {
.main2 {
  flex: 70%;

  padding: 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main2 {
  flex: 100%;

  box-sizing: border-box;
}
}


@media screen and (max-width: 700px) {
.main3 {
  flex: 70%;
  padding: 0px;
  box-sizing: border-box;
}
}

@media screen and (min-width: 700px) {
.main3 {
  flex: 100%;
  box-sizing: border-box;
}
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

/* Sidebar/right column */

@media screen and (min-width: 700px) {
	.side2 {
	flex: 24%;
	padding-left: 10px;
	box-sizing: border-box;
		}
	}

@media screen and (max-width: 700px) {
	.side2 {
	display: none;
	
	}
	}

/* Sidebar/right column */

@media screen and (min-width: 700px) {
	.side3 {
	display: none;
	
	}
	}

@media screen and (max-width: 700px) {
	.side3 {
	flex: 24%;
	padding-left: 10px;
	box-sizing: border-box;
		}
	}



#side-module-desktop-only {
	
	border-radius: 12px;
	margin-bottom: 20px;
	margin-top: 10px;
	padding: 15px 15px 28px 15px;
	border-width: 1px;
	text-align: center;
	background-color: #ECECEC;
	text-align: center;
	border-color: white;
}

#side-module-desktop-mobile {
	
	border-radius: 12px;
	margin-bottom: 20px;
	padding: 15px 15px 28px 15px;
	border-width: 1px;
	text-align: center;
	background-color: #ECECEC;
	text-align: center;
	border-color: white;
  
  }

@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}
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

/*
.opener-header-toggler {
	flex: 15%;
	margin-top: 18px;
      font-size: 3.0em;
      background-color: #ffffff82;
      padding: 8px 8px 15px;
      border-radius: 11px 11px 0 0;
      color: #000000ad;
      border: none;

}
*/

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

	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="header-content-block">
	
<div class="header-box">
		<div class="header-heading">Ecobricks are a simple, low-tech plastic transition technology that follows the Earth’s example of carbon care.</div>

		
		<!--<div class="header-sub">A Solution For Plastic transition</div>-->
	</div>
	<div class="header-image"><img src="svgs/eb-blue.svg" style="width: 80%;"></div>

	
</div>
<div id="header-bar"></div>



<!-- PAGE CONTENT <div id="content-sect1">-->

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
			<p>We make ecobricks as a way to take personal responsibility for our plastic by keeping it out of industry and out of the biosphere.</p>
			</div>

			<div class="page-paragraph">
				<p> An ecobrick is a PET bottle packed solid with clean and dry used <a href="/plastic">plastic</a>.  Ecobricks are made to a set density to <a href="/build">create reusable building blocks</a> that <a href="/sequest">sequester plastic</a>.  Ecobricks are a form of plastic sequestration that keeps plastic from <a href="/why">degrading into toxins and microplastics and from out of emission intensive industrial processes.</a>.Ecobricks can be put to short term use in <a href="/modules">modular units</a>, <a href="https://www.ecobricks.org/dms/">lego-furniture </a>and <a href="https://www.ecobricks.org/openspace/">open spaces.</a> Ecobrick can also be put to long-term use in <a href="/earth">earthen gardens and structures</a>.  In their making and in all their applications ecobrick's embody <a href="/principles">regenerative principles</a> and an <a href="/ayyew">ayyew vision</a> that is based on Earthen Ethics— the following of the Earth's ancient example in our care of carbon.</p>
			</div>
		<!--	
			
			<p>Ecobricks put our plastic to good use in short and long term applications that are circular, awaring and a greening contribution to the biosphere.</p>
		
			<p>Ecobricking is a both an individual and collaborative endeavour.  It unites across class, continents and cultures around the shared intention of caring for the local and global biosphere. The personal ecobricking process raise awareness of the consequences of consumption and the dangers of plastic to accelerate <a href="/transition">plastic transition</a>. The collaborative process gives individual and communities an hands on experience of <a href="/principles">regenerative living</a> and points in the direction of other regenerative technologies, such as <a href="/earth">earth buildin</a>g and permaculture.</p>-->
		

				<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Ecobricking Standards</h4>
					<h5>The GEA maintains standards for ecobricking that are divided into six categories</h5>
					</div>
					

					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

					<div id="preclosed1">
						<br>
						<div class="row">
							<div class="main2">
								<p>The <a href="https://www.ecobricks.org/about">Global Ecobrick Alliance (GEA)</a> advocates ecobricking as means of <a href="https://www.ecobricks.org/transition">petro-capital transition</a> and plastic sequestration.</p>
					
							<p>
							The GEA maintains standards for ecobricking that are divided into six categories based on the GEA’s six <a href="https://www.ecobricks.org/sequest">criteria for plastic sequestration</a>.  The GEA ecobrick standards ensure that the criteria of plastic sequestration have been met and that our ecobriking is in line with the <a href="https://www.ecobricks.org/plastic">Earth’s example of greening the biosphere</a>.</p>
							</div>
							<div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2021/01/authenticated-ecobrick.png" width="100%">
							</div>
						</div>
						<div class="row">
							<div class="main3">
							<p>An ecobrick must fulfil the following crieria:</p>
							</div>
							<div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2021/01/authenticated-ecobrick.png" width="35px">
							</div>
						</div>

						<ul>
							<li>Be a short-term building block that can be indefinitely reused in the short term.</li>
							<li>Compact, secured and store plastic safely out of industry and out of the biosphere for the long-term</li>
							<li>Result in more plastic and CO2 being subtracted from the biosphere than was added by the process</li>
							<li>Raise the individual and collective ecological consciousness of those involved in the process</li>
							<li>Contributing to the maintenance and encouragement of biodiversity</li>
							<li>Be created with the priority of biosphere benefit</li>
						</ul></p>
						<p>
						Plastic that has been packed according to these standards and authenticated as such is considered by the GEA as a valuable ecological contribution.  The GEA maintains the <a href="https://www.ecobricks.org/brikcoin">Brikcoin blockchain</a> and the <a href="https://www.ecobricks.org/gobrik">GoBrik platform</a> to enable the authentication of ecobricks according to these standards.  Authentication results in commodification of <a href="https://www.ecobricks.org/aes">authenticated ecobricked plastic.</a></p>

						<p>Currently, the GEA recognizes three types of ecobricks, regular ecobricks, cigbricks and ocean ecobricks.  See below the technical standards for each type of ecobrick.  Ecobricking standards were developed by ecobrickers around the world and have been refined and are maintained by the GEA.</p>

						<h6>

						Learn more about the <a href="https://www.ecobricks.org/sequest"><strong>criteria of plastic sequestration.</strong></a>

						Learn more about the<a href="https://www.ecobricks.org/plastic"><strong> Earth’s Example</strong></a>

						</h6>
					</div>
				</div>

			<div class="reg-content-block" id="block2">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Regular Ecobricks</h4>
					<h5>A normal PET packed with plastic</h5>
					<br>
					</div>

					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					<div class="row">
						<div class="main2">
						<p>Normal ecobricks are made with any size of transparent PET plastic bottle. The bottle and the packed plastic are clean and dry to prevent the growth of bacteria. Typically, ecobrickers use a wood or bamboo stick to manually pack plastic into the plastic bottle.  Plastic is cut or ripped into small pieces then packed little by little, alternating between adding the plastic and compacting it, layer by layer. The bottle is rotated with each press to ensure the plastic is evenly compacted throughout the bottle. This helps prevent voids and that the packing reaches the requisite solidity needed for a building block applications.</p>

						</div>
						<div class="side2"><img src="webp/brik-cascade.webp" width="150px">
							</div>
						</div>

						<p>Completed ecobricks are packed solid enough that they can bear the weight of a person without deforming and to prohibit easy flammability while increasing its durability and re-usability.</p>

						<div class="row">
							<div class="main3">
							<p>To be an ecobrick, the following standards must be met:</p>
							</div>
							<div class="side3"><img src="webp/brik-cascade.webp" width="50px">
							</div>
						</div>
						<ul>
						<li>The ecobrick is made using a transparent PET bottle</li>
						<li>The ecobrick is only packed with used plastics that have been cleaned and dried.</li>
						<li>The ecobrick’s density is higher than 0.33g/ml</li>
						<li>The ecobrick must have a density of 0.70g/ml or less</li>
						<li>The ecobrick is sealed tight with a screw down lid.</li>
						<li>Care has been taken taken to prepare the ecobrick as a reusable building block:
							<ul>
							<li>The label has been removed and ecobricked.</li>
							<li>A bottom color has been added</li>
							<li>The weight has been permanently recorded on the outside.</li>
							</ul></li>
						</ul></p>
					<p>Only ecobricks that meet these standards can be authenticated and count as sequestered plastic.</p>
					<br>
					<h6><a href="/how">View our 10 Step Guide on Making an Ecobrick</a></h6>
				</div>
			</div>

			
	

			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Cigbricks</h4>
					<h5>Plastic sequestration for cigarette filers.</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>
					<div class="row">
						<div class="main2">
						<p>Cigbricks are a class of ecobrick design to transform the habit of smoking and the acetate from the cigarette filter into a personal and environmental solution. Cigbricks are made exclusively from the packed acetate filters of cigarette butts (with the paper removed).</p>
						</div>
						<div class="side2"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/5cfc9bc8451bc4000aef50a0/original/cigbrickstandalone.png" width="100%">
						</div>
					</div>

					<div class="row">
						<div class="main3">
						<p>To be a Cigbrick the following standards must be met:</p>
						<div>
						<div class="side3"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/5cfc9bc8451bc4000aef50a0/original/cigbrickstandalone.png" width="50px">
						</div>
					</div>
			

					<p><ul>
						<li>A density higher than 0.29 g/ml
						<li>A maximum density of 0.70g/ml
						<li>Are only packed with acetate cigarette butts – the paper and ash have been removed..
						<li>The cigbrick is sealed tight with a screw down lid.
						<li>Care has been taken taken to prepare the cigbrick as a reuseable building block:
							<ul>
							<li>The label has been removed and ecobricked.
							<li>A bottom color has been added
							<li>The weight has been recorded on the outside.
							</ul></li>
						</ul></p>

						<p>Only cigbricks that meet these standards can be authenticated and count as sequestered plastic.</p>
					<h6><a href="/cigbricks">Learn more about Cibricks</a></h6>
				</div>
			</div>

				
		
						

		<div class="reg-content-block" id="block4">

			<div class="opener-header">
				
				<div class="opener-header-text">
				<h4>Ocean Ecobricks</h4>
				<h5>Ecobricks for ocean and river collected plastic.</h5>
				<br>
				</div>

				<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
			</div>

			<div id="preclosed4">
				<br>
					
				<div class="row">
					<div class="main2">
					<p>The Ocean Ecobrick is a  class of ecobrick designed for plastics found on beaches, rivers and in the ocean. These plastics tend to be large, chunky, dirty, and wet and are not suited to make a regular ecobrick. The Ocean Ecobrick technique						 enables these plastics to be easily transformed into a practical, useful, and reusable building block.</p>
					</div>
					<div class="side2"><img src="https://www.gobrik.com/images/oceanecobrick.png" width="100%">
					</div>
				</div>

				<div class="row">
					<div class="main3">
					<p>To be an Ocean Ecobrick the following standards must be met:</p>
					</div>
					<div class="side3"><img src="https://www.gobrik.com/images/oceanecobrick.png" width="50px">
					</div>
				</div>

				
				<ul>
					<li>A density higher than 0.25 g/ml</li>
					<li>A maximum density of 0.70 g/ml</li>
					<li>Are packed with as much plastic as possible</li>
					<li>Is sealed tight.</li>
					<li>Care has been taken taken to prepare the ocean ecobrick as a reuseable building block:
				<ul>
					<li>The label has been removed and ecobricked.</li>
					<li>A bottom color has been added</li>
					<li>The weight has been recorded on the outside.</li>
				</ul>
				</li>
				</ul>
				<p>Only ocean ecobricks that meet these standards can be authenticated and count as <a href="/sequest">sequestered plastic</a>.</p>

				<h6><a href="/ocean"><strong>Learn more about Ocean Ecobricks</strong></a></h6>
				<br><br>
			</div>
		</div>

		
		<div class="page-paragraph">
			<br><br>
		<h4>Learn More</h4>
		
		<p>We’ve developed extensive, free and open source resource to get you started ecobricking right!  Our goal is to empower you and your community with the know-how to make ecobricks and build with them.  The pages on this site are the result of years of research, experimentation and trial and error by our trainer network around the world.

		<ul>
			<li><a href="why">Why Make Ecobricks?</a></li>
			<li><a href="how">How to Ecobrick?</a></li>
			<li><a href="circular">Cradle to Cradle</a></li>
			<li><a href="build">Building with Ecobricks</a></li>
			<li><a href="movement">The Movement</a></li>
			<li><a href="dropoff">Dropping off ecobricks?</a></li>
			<li><a href="trainings">Ecobrick Trainings</a></li>
		</ul>
		</div>

	</div>

	


		<div class="side">

			<div id="side-module-desktop-mobile">
			<img src="https://cdn.ecobricks.org/wp-content/uploads/2020/05/Regenerative-Living-Home-400px.png" width="80%">
				<h4>Plastic Sequestration</h4>
				<h5>Ecobricking is a form of plastic sequestration – it secures plastics out of the biosphere and accelerates plastic transition.</h5><br>
				<a href="sequester" target="_blank" class="module-btn">Plastic Sequestration</a>
			</div>
				
			<div id="side-module-desktop-only">
			<img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/Bare-biosphere-1000px-3-297x300.png" width="80%">
				<h4>Regenerative</h4>
				<h5>Ecobricking is based on following the Earth's example and is guided by seven green principles.</h5><br>
				<a class="module-btn" href="princles">Principles</a>
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


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>

