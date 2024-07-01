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

<?php require_once ("../meta/what-$lang.php");?>

<?php require_once ("../header.php");?>



<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		background-color: #00E6FF;
		background: url(svgs/cloud-back-logo-blue.svg) top;
		background-repeat: no-repeat;
    	background-size: cover;
		
		

		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;    	
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		background-color: #00E6FF;
		background: url(svgs/cloud-back-logo-blue.svg) top;
		background-repeat: no-repeat;
    	background-size: cover;
		

		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;

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
	margin-top: -65px;
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
	margin: auto;
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
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 300;
  text-shadow: 0 0 10px #4c4b4b;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 3em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: grey;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.3em;
		line-height: 1.3;
		font-weight: 400;
  }
}





#splash-bar {
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



	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">Ecobricks are a simple, low-tech, non-capital, plastic transition technology that follows the Earth’s example of carbon care.</div>
		<!--<div class="header-sub">A Solution For Plastic transition</div>-->
	</div>
	<div class="splash-image"><img src="../svgs/eb-blue.svg" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
			<p>Ecobricking is a simple way to take personal responsibility for our plastic by keeping it out of industry and out of the biosphere.</p>
			</div>

			<div class="page-paragraph">
				<p>An ecobrick is a PET bottle packed solid with clean and dry used plastic.  Ecobricks are made manually to a set density to <a href="sequest.php">sequester plastic</a> and create reusable building blocks.  In this way ecobricks keep plastic from <a href="/why">degrading into toxins and microplastics</a> and out of high-energy, high-emission industrial processes.  But most of all, the hands-on process of ecobricking deepens our awareness of these issues and their regenerative alternatives– what we call <a href="transition.php">plastic transition</a>.</p>
				<p>
				Once many ecobricks are available, they can be put to short-term use in <a href="/modules">modular units</a>, <a href="/dms">lego-furniture </a>and <a href="/openspace">open spaces.</a> Ecobrick can also be put to long-term use in <a href="/earth">earthen gardens and structures</a>.  In their making and application, ecobricks embody <a href="/principles">regenerative principles</a> and an <a href="/ayyew">ayyew vision</a> that is based on follow the <a href="plastic.php">Earth's example</a> of securing loose carbon to green the biosphere.</p>
			</div>	

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
							<p>The <a href="about.php">Global Ecobrick Alliance (GEA)</a> advocates ecobricking as means of <a href="transition.php">petro-capital transition</a> and <a href="sequest.php">plastic sequestration.</a></p>
				
						<p>
						The GEA maintains standards for ecobricking that are divided into six categories based on the GEA’s six <a href="sequest.php">criteria for plastic sequestration</a>.  The GEA's ecobrick standards ensure that the criteria of plastic sequestration have been met and that our ecobriking is in line with the principles of Earthen Ethics and the<a href="plastic.php">Earth’s example of greening the biosphere</a>.</p>
						</div>
						<div class="side2"><img src="../pngs/authenticated-ecobrick.png" width="100%">
						</div>
					</div>
					<div class="row2">
						<div class="main3">
						<p>An ecobrick must fulfil the following crieria:</p>
						</div>
						<div class="side3"><img src="../pngs/authenticated-ecobrick.png" width="125px">
						</div>
					</div>

					<ul>
						<li>Be created by a not-for-profit process that is for-Earth benefit.</li>
						<li>Manually compact and secure used plastic into a transparent, building block that can be indefinitely reused in the short and long term.</li>
						<li>Result in more plastic and CO2 being subtracted from the biosphere than was added by the process of making</li>
						<li>Result in building applications that contribute to the maintenance and encouragement of biodiversity</li>
						<li>Raise the individual and collective ecological consciousness of those involved in the process.</li>
					</ul></p>
					<p>
					Plastic that has been packed according to these standards and authenticated as such is considered by the GEA as a valuable ecological contribution.  The GEA maintains the <a href="/brikcoin">Brikcoin blockchain</a> and the <a href="/gobrik">GoBrik platform</a> to enable the authentication of ecobricks according to these standards.  Authentication results in commodification of <a href="/aes">authenticated ecobricked plastic.</a></p>

					<p>Currently, the GEA recognizes three types of ecobricks, regular ecobricks, cigbricks and ocean ecobricks.  See below the technical standards for each type of ecobrick.
					<p>Ecobricking and sequestration standards were developed by ecobrickers around the world and have been refined and are maintained by the GEA.</p>
					<h6>
					Learn more about the <a href="sequest.php"><strong>criteria of plastic sequestration.</strong></a>

					Learn more about the<a href="plastic.php"><strong> Earth’s Example</strong></a>
					</h6>
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Regular Ecobricks</h4>
						<h5>A normal PET packed with plastic</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					<div class="row">
						<div class="main2">
						<p>Normal ecobricks are made with any size of transparent PET plastic bottle. The bottle and the packed plastic are clean and dry to prevent the growth of bacteria. Typically, ecobrickers use a wood or bamboo stick to manually pack plastic into the plastic bottle.  Plastic is cut or ripped into small pieces then packed little by little, alternating between adding the plastic and compacting it, layer by layer. The bottle is rotated with each press to ensure the plastic is evenly compacted throughout the bottle. This helps prevent voids and that the packing reaches the requisite solidity needed for a building block applications.</p>
						</div>
						<div class="side2"><img src="../webp/brik-cascade.webp" width="150px">
						</div>
					</div>

					<p>Completed ecobricks are packed solid enough that they can bear the weight of a person without deforming and to prohibit easy <a href="/fire">flammability</a> while maximizing its durability and re-usability.</p>

					<div class="row2">
						<div class="main3">
						<p>To be an ecobrick, the following standards must be met:</p>
						</div>
						<div class="side3"><img src="https://ecobricks.org/svgs/eb-blue.svg" width="120px">
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
						<p>Cigbricks are a class of ecobrick to secure the potentially toxic plastic/acetate of the cigarette filters. Cigbricks are made exclusively from the packed acetate filters of cigarette butts (with the paper removed).</p>
						</div>
						<div class="side2"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/5cfc9bc8451bc4000aef50a0/original/cigbrickstandalone.png" width="100%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>To be a Cigbrick the following standards must be met:</p>
						</div>
						<div class="side3"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/5cfc9bc8451bc4000aef50a0/original/cigbrickstandalone.png" width="120px">
						</div>
					</div>
			

					<p><ul>
						<li>A density higher than 0.29 g/ml
						<li>A maximum density of 0.70g/ml
						<li>Only packed with acetate cigarette butts – the paper and ash have been removed.
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
					<h5>Sequestration for plastic collected from beaches, ocean and rivers.</h5><br>
					</div>

					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
				</div>

				<div id="preclosed4">
					<br>	
					<div class="row">
						<div class="main2">
						<p>Ocean Ecobricks are a class of ecobrick designed for plastics found on beaches, rivers and in the ocean. These plastics tend to be large, chunky, dirty, and wet and are not suited to make a regular ecobrick. The Ocean Ecobrick technique enables these plastics to be easily transformed into a practical, useful, and reusable building block.</p>
						</div>
						<div class="side2">
						<img src="https://www.gobrik.com/images/oceanecobrick.png" width="100%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>To be an Ocean Ecobrick the following standards must be met:</p>
						</div>
						<div class="side3"><img src="https://www.gobrik.com/images/oceanecobrick.png" width="150px">
						</div>
					</div>

					<ul>
						<li>A density higher than 0.25 g/ml</li>
						<li>A maximum density of 0.70 g/ml</li>
						<li>Are packed with as much plastic as possible</li>
						<li>Sealed tight (but not air tight).</li>
						<li>Care has been taken taken to prepare the ocean ecobrick as a reuseable building block:
					<ul>
						<li>The bottle's label has been removed and ecobricked.</li>
						<li>A bottom color has been added</li>
						<li>The weight has been recorded on the outside.</li>
					</ul>
					</li>
					</ul>
					<p>Only ocean ecobricks that meet these standards can be authenticated and count as <a href="sequest.php">sequestered plastic</a>.</p>

					<h6><a href="/ocean"><strong>Learn more about Ocean Ecobricks</strong></a></h6>
					<br><br>
				</div>
			</div>

		
		<div class="page-paragraph">
			<br><br>
		
		<h4>Personal & Community Empowerment</h4>
		<p>Ecobricking is a both an individual and collaborative endeavour.  It unites across class, continents and cultures around the shared intention of caring for the local and global biosphere. The personal ecobricking process raise awareness of the consequences of consumption and the dangers of plastic to accelerate <a href="transition.php">plastic transition</a>. The collaborative process gives individual and communities an hands on experience of <a href="/principles">regenerative living</a> and points in the direction of other regenerative technologies, such as <a href="/earth">earth building</a> and permaculture.</p>
		<br><br>

		<h4>Learn More</h4>
		
		<p>The Global Ecobrick Alliance has developed extensive, free and open source resources (like this page!) to get you started ecobricking right.  Our goal is to empower you and your community with the know-how to make ecobricks and build with them.  The pages on this site are the result of years of research, experimentation and trial and error by plastic transition leaders around the world.
		</p>
		<ul>
			<li><a href="/why">Why Make Ecobricks?</a></li>
			<li><a href="/how">How to Ecobrick?</a></li>
			<li><a href="/circular">Cradle to Cradle</a></li>
			<li><a href="build.php">Building with Ecobricks</a></li>
			<li><a href="movement.php">The Movement</a></li>
			<li><a href="/dropoff">Dropping off ecobricks?</a></li>
			<li><a href="/trainings">Ecobrick Trainings</a></li>
		</ul>
		</div>

	</div>

	


		<div class="side">

			<div id="side-module-desktop-mobile">
			<img src="../webp/earth-home.webp" width="90%">
				<h4>Plastic Sequestration</h4>
				<h5>Ecobricking is a form of plastic sequestration.  Ecobricks secure plastics out of the biosphere and accelerates plastic transition.</h5><br>
				<a href="sequest.php" target="_blank" class="module-btn">Learn More</a>
			</div>
				
			<div id="side-module-desktop-only">
			<img src="../webp/earth-example.webp" width="80%">
				<h4>Regenerative</h4>
				<h5>Ecobricking is based on following the Earth's example and is guided by seven green principles.</h5><br>
				<a class="module-btn" href="/principles">Principles</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="../webp/spiral-circular-400px.webp" width="90%">
				<h4>Spiral & Circular</h4>
				<h5>Ecobricks and their building applications are circular by design.</h5><br>
				<a class="module-btn" href="/circular">Learn More</a>
			</div>

	
			<div id="side-module-desktop-mobile">
				<img src="../webp/gea-logo-400px.webp" width="90%">
				<h4>Global Ecobrick Alliance</h4>
				<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5><br>
				<a class="module-btn" href="about.php">About Us</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="../webp/for-earth500px.webp" width="80%">
				<h4>For-Earth Enterprise</h4>
				<h5>By discolosing our carbon, plastic and biodiversity impacts and by ensuring that they are net-green, the GEA commits to for-Earth Enterprise</h5><br>
				<a class="module-btn" href="2021-regenreport.php">Learn More</a>
			</div>

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->

	<?php include 'footer.php'; ?>


<!-- CUSTOM PAGE SCRIPTS-->

<script src="../scripts/accordion-scripts.js" defer></script>


</div>
</body>
</html>

