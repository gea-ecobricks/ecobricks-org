<!--PAGE LANGUAGE:  INDONESIAN--> 

<!-- Dear Translators & Contributors:  To edit this page, you'll first need a Github account. Once your logged in with your account, we suggest you set the page view to Word Wrap' for easier text editing.  Translators: please scroll down to the section where you see the text "Main Content for translation".  Replace all the English text snippets with html tags. Don't worry about translating these comments.  Be sure NOT to translate english page names, file names or actual code.-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://www.ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/eb-blue-no-clouds.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/top-clouds-animated-desktop.svg?v1">



<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/what-$lang.php");?>

<!--This loads the page's header-->

<?php require_once ("header.php");?>


<!--This loads CSS specific to this page-->

<STYLE>
	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		background-color: #00E6FF;
		background: url(svgs/top-clouds-mobile.svg) top;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-repeat: no-repeat;
    	background-size: cover;
		text-align: left;
		height: 70vh;
		padding: 10px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;    	
		margin-top: 20px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		background-color: #00E6FF;
		background: url(svgs/top-clouds-animated-desktop.svg?v1) top;
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

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>



<!--MAIN CONTENT FOR TRANSLATION-->

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("translate-please.php");?>


<!--Page Banner-->
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">
        Ecobrick adalah teknologi transisi plastik sederhana, berteknologi rendah, tanpa modal, yang mengikuti contoh perawatan karbon di Bumi.
</div>
		
	</div>
	<div class="splash-image"><img src="svgs/eb-blue-no-clouds.svg" style="width:85%;"></div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
			<p>Ecobrick adalah cara sederhana untuk mengambil tanggung jawab pribadi atas plastik kita dengan menjauhkannya dari industri dan biosfer.</p>
			</div>

			<div class="page-paragraph">
				<p>Ecobrick adalah botol PET yang dikemas padat dengan plastik bekas yang bersih dan kering. Ecobrick dibuat secara manual dengan kepadatan tertentu untuk <a href="sequest.php">menyerap plastik</a> dan membuat blok bangunan yang dapat digunakan kembali. Dengan cara ini, ecobrick menjaga plastik agar tidak terdegradasi  <a href="/why">menjadi racun dan mikroplastik</a> dan keluar dari proses industri berenergi tinggi dan beremisi tinggi. Namun yang terpenting, proses langsung dari ecobrick memperdalam kesadaran kita akan masalah ini dan alternatif regeneratifnya– yang kita sebut  <a href="transition.php">transisi plastik</a>.</p>
				<p>
				Setelah banyak ecobrick tersedia, mereka dapat digunakan untuk jangka pendek di <a href="/modules">unit modular</a>, <a href="/dms">furnitur lego</a>and <a href="/openspace">open spaces.</a> Ecobrick juga dapat digunakan untuk jangka panjang di <a href="/earth">taman dan bangunan tanah</a>.  Dalam pembuatan dan penerapannya, ecobrick mewujudkan <a href="/principles">prinsip-prinsip regeneratif</a> dan <a href="/ayyew">ayyew vision</a> yang didasarkan pada mengikuti contoh <a href="/plastic">Conto Bumi</a> mengamankan karbon lepas untuk menghijaukan biosfer.</p>
			</div>	

			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Standar Ecobrick</h4>
						<h5>GEA mempertahankan standar untuk ecobrick yang dibagi menjadi enam kategori</h5>
					</div>
					

					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>
					<div class="row">
						<div class="main2">
							<p>The <a href="about.php">Global Ecobrick Alliance (GEA)</a> menganjurkan ecobrick sebagai sarana<a href="transition.php">transisi petro-capital</a> dan <a href="sequest.php">sekuestrasi plastik.</a></p>
				
						<p>
						The GEA maintains standards for ecobricking that are divided into six categories based on the GEA’s six <a href="sequest.php">criteria for plastic sequestration</a>.  The GEA's ecobrick standards ensure that the criteria of plastic sequestration have been met and that our ecobriking is in line with the principles of Earthen Ethics and the<a href="/plastic">Earth’s example of greening the biosphere</a>.</p>
						</div>
						<div class="side2"><img src="pngs/authenticated-ecobrick.png" width="100%">
						</div>
					</div>
					<div class="row2">
						<div class="main3">
						<p>An ecobrick must fulfil the following crieria:</p>
						</div>
						<div class="side3"><img src="pngs/authenticated-ecobrick.png" width="125px">
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
					<br><br>
					<h5>ℹ️ Learn more about <a href="sequest.php">criteria of plastic sequestration.</a></h5>

					<h5>ℹ️ Learn more about <a href="/plastic">the Earth's example.</a></h5>
					<br>

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
						<div class="side2"><img src="webp/brik-cascade.webp" width="150px">
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
					</ul>
					<p>Only ecobricks that meet these standards can be authenticated and count as sequestered plastic.</p>
					<br><br>
					<a class="action-btn" href="/how">ℹ️ How to Make</a>
                    <p style="font-size: 0.85em; margin-top:20px;">View our 10 Step Guide on Making an Ecobrick</a></p>

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
						<p>Cigbricks are a class of ecobrick to secure the potentially toxic plastic/acetate of the cigarette filters-- one of the most prevalent and damaging of all plastic pollutants. Cigbricks are made exclusively from the packed acetate filters of cigarette butts once the paper and ash has been fully removed.</p>
						</div>
						<div class="side2"><img src="svgs/Cigbrick.svg" width="100%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>To be a Cigbrick the following standards must be met:</p>
						</div>
						<div class="side3"><img src="svgs/Cigbrick.svg" width="120px">
						</div>
					</div>
			

					<ul>
						<li>A density higher than 0.29 g/ml
						<li>A maximum density of 0.70g/ml
						<li>Only packed with acetate cigarette butts – the paper and ash have been removed.
						<li>The cigbrick is sealed tight with a screw down lid.
						<li>Care has been taken taken to prepare the cigbrick as a reuseable building block:</li>
							<ul>
							<li>The label has been removed and ecobricked.</li>
							<li>A bottom color has been added</li>
							<li>The weight has been recorded on the outside.</li>
							</ul></li>
						</ul>

						<p>Only cigbricks that meet these standards can be authenticated and count as sequestered plastic.</p>
						<br><br>

						<a class="action-btn" href="/cigbricks">ℹ️ Make a Cigbrick</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Learn more about Cibricks.</a></p>


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
						<img src="webp/oeb-400px.webp" width="100%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>To be an Ocean Ecobrick the following standards must be met:</p>
						</div>
						<div class="side3"><img src="webp/oeb-400px.webp" width="150px">
						</div>
					</div>

					<ul>
						<li>A density higher than 0.25 g/ml</li>
						<li>A maximum density of 0.70 g/ml</li>
						<li>Are packed with as much plastic as possible</li>
						<li>Sealed tight (but not air tight).</li>
						<li>Care has been taken taken to prepare the ocean ecobrick as a reuseable building block:
						<li>The bottle's label has been removed and ecobricked.</li>
						<li>A bottom color has been added</li>
						<li>The weight has been recorded on the outside.</li>
					</ul>
				
					<p>Only ocean ecobricks that meet these standards can be authenticated and count as <a href="sequest.php">sequestered plastic</a>.</p>
					<br><br>

					<a class="action-btn" href="/ocean">ℹ️ Make an Ocean Ecobrick</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Check our page all about Ocean Ecobricks.</a></p>

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
			<li><a href="/circular">Circular Design</a></li>
			<li><a href="build.php">Building with Ecobricks</a></li>
			<li><a href="/movement">The Movement</a></li>
			<li><a href="/dropoff">Dropping off ecobricks?</a></li>
			<li><a href="/trainings">Ecobrick Trainings</a></li>
		</ul>
		</div>

	</div>

	
<!-- PAGE SIDE BAR STARTS HERE-->

		<div class="side">

			<div id="side-module-desktop-mobile">
			<img src="webp/earthen-400px.webp" width="90%">
				<h4>Plastic Sequestration</h4>
				<h5>Ecobricking follows the Earth's example of carbon care to sequester plastics out of the biosphere.</h5><br>
				<a href="sequest.php" target="_blank" class="module-btn">Learn More</a>
			</div>
				
			<div id="side-module-desktop-only">
			<img src="webp/earth-home.webp" width="85%">
				<h4>Regenerative</h4>
				<h5>Ecobricking is based on following the Earth's example and is guided by seven green principles.</h5><br>
				<a class="module-btn" href="/principles">Principles</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/spiral-circular-400px.webp" width="90%">
				<h4>Circular Design</h4>
				<h5>Ecobricks and their building applications are circular by design.</h5><br>
				<a class="module-btn" href="/circular">Learn More</a>
			</div>

	
			<div id="side-module-desktop-mobile">
				<img src="webp/gea-logo-400px.webp" width="90%">
				<h4>Global Ecobrick Alliance</h4>
				<h5>The GEA is dedicated to accelerating plastic transition.  We preside over the GoBrik app and the Brikcoin blockchain.</h5><br>
				<a class="module-btn" href="about.php">About Us</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="80%">
				<h4>For-Earth Enterprise</h4>
				<h5>By discolosing our carbon, plastic and biodiversity impacts and by ensuring that they are net-green, the GEA commits to for-Earth Enterprise</h5><br>
				<a class="module-btn" href="2021-regenreport.php">Learn More</a>
			</div>

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="accordion-scripts.js" defer></script>


</div>
</body>
</html>

