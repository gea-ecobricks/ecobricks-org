<!--PAGE LANGUAGE:  ENGLISH--> 

<!DOCTYPE html>
<?php require_once ("lang.php");
echo <<<_END
<html lang="$lang">
_END;?>

<HEAD>
	
<meta charset="utf-8">
<!-- This loads the page's meta tags:  *be sure to add the page's name!*-->
<?php require_once ("meta/welcome-$lang.php");?>

<!--  Set any page specific graphics to preload-->
<link rel="preload" as="image" href="https://www.ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/cloud-back.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/ecobrickable-square.svg?v0.4">
<link rel="preload" as="image" href="https://www.ecobricks.org/webp/mountain-top2.webp">
<link rel="preload" as="image" href="https://www.ecobricks.org/webp/vision-bottom4.webp">



<!--This loads the page's header-->

<?php require_once ("header.php");?>

<!--This loads the page's header-->

<?php require_once ("styles-landing.php");?>

</head>

<!--MAIN CONTENT-->
	
	
<BODY id="full-page">

	<div id="load-background">

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

	<!-- This loads the page's top graphics-->

		<div id="clouds"><img src="webp/mountain-top2.webp" width="100%"></div>
		<div id="cloud-banner"><img src="webp/vision-bottom4.webp" width="100%" height="31%"></div>


	<!-- SLIDER CONTENT -->
	
		<div id="sliders">

		<div id="slider1">
		<div id="slider-image"><img src="svgs/ecobrickable-square.svg?v0.3" alt="How to make an ecobrick" width="100%" height="102%" style="min-width:175px;"></div>
					<div id="slider-textbox">
					<div id="slider-heading">Ecobrick Guidelines</div>
					<div id="slider-date">2022 Updated | Standards</div>
					<div id="slider-body">Did you know there are several kinds of ecobricks? Learn about what makes an ecobrick an ecobrick!  </div>
					<div id="slider-link"><a href="/what">About Ecobricks</var></a></div>
						
				</div>
			</div>


			<div id="slider2">

			<div id="slider-image">
				<img src="webp/brikmarket-400px.webp" width="92%" height="100%" alt="Our eco brick market place for arranging trades and droping off ecobricks">
			</div>
			<div id="slider-textbox">
				<div id="slider-heading">The Brik Market is Launched</div>
				<div id="slider-date">June, 2022 | GEA Annoucement</div>
				<div id="slider-body">After three years of development, we're excited to launch a place to exchange, trade, barter and drop-off your ecobricks.</div>
				<div id="slider-link">>> <a href="drop-off.php">The Brik Market</a></div>

				</div>
			</div>


			<div id="slider3">
				<div id="slider-image"><img src="webp/catalyst.webp" width="92%" height="100%" alt="Our eco brick enterprise program"></div>
					<div id="slider-textbox">
					<div id="slider-heading">Plastic Transition Platform for Enterprises</div>
					<div id="slider-date">GEA Announcements</div>
					<div id="slider-body">Our Catalyst program for keen green companies, organizations and projects is now live!  Track, disclose and accelerate your plastic transition.</div>
					<div id="slider-link"><a href="catalyst.php">Learn more</a></div>
				</div>
			</div>

			
			<div id="slider4">
			<div id="slider-image"><img src="webp/build-blue-450px.webp" style="width: 85%;"></div>	
				<div id="slider-textbox">
					<div id="slider-heading">Build with Ecobricks</div>
					<div id="slider-date">GEA Updated Content</div>
					<div id="slider-body">Learn about the various ways to put ecobricks to good use in everything from module to earth construction.</div>
					<div id="slider-link"><a href="build.php">Ecobrick Building</a></div>
				</div>
			</div>


		</div>

	<!--FIRST CONTENT SECTION-->

	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="svgs/dolphin-top-optimized.svg"width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean" loading="lazy"></div>
			<div class="big-header">Mempercepat Transisi Plastik</div>
			<div class="sub-text">
			<p>Bersama-sama kita bisa menjaga plastik kita terhindar dari lautan. Dengan ecobrick, kita dapat mengamankan plastik untuk membangun visi kami yang paling hijau dan memicu transisi regeneratif.</p>
			</div>
			 <a href="faqs.php" button class="main-button">Semua Tentang Ecobrick</a>
			<h6><a href="what.php">Apa itu ecobrick?</a> | <a href="/how">Bagaimana membuat? </a> | <a href="/why">Mengapa Membuat?</a></h6>
		</div>	
	</div>

	<!--SECOND CONTENT SECTION-->

	  
	<div id="content-sect2">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/earth-service-700px.webp" width="100%" height="96%" alt="eco bricks follow the Earth's example." max-width="700px">
			</div>
			<div class="big-header">Mencontoh Bumi</div>
			
			<div class="sub-text">
			<p>Ecobrick mengikuti contoh bumi dalam memusatkan dan mengamankan karbon dari biosfer. Mengikuti ilmu degradasi plastik dan prinsip-prinsip tanah liat, ecobrick adalah cara tanpa modal dan tanpa modal untuk penyerapan plastik.</p>
			</div>
			<a href="sequest.php" button class="main-button">Sekuestrasi Plastik</a>
			<h6><a href="/ayyew">Terinspirasi dari Ayyew</a> | <a href="/circular">Desain Melingkar</a> | <a href="/plastic">Menuju Transisi </a> | <a href="/principles">Prinsip Regeneratif</a> <!--| <a href="/reports">Reports & Whitepapers</a>--></h6>
		</div>
	</div>	
		
	<!--THIRD CONTENT SECTION-->

	<div id="content-sect3">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/spiral-circular-800px.webp" width="100%" max-width="777px" height="90%" alt="eco brick plastic brick building"></div>
			<div class="big-header">Masalah adalah Solusi</div>
			<div class="sub-text"><p>Ecobrick (batu bata ramah lingkungan) mengubah plastik bekas menjadi blok bangunan yang dapat digunakan kembali, ideal untuk aplikasi bangunan melingkar & spiral. Gunakan mereka untuk membuat modul, perabot rumah tangga, taman bermain, dan kebun hutan makanan. Dengan menggunakan solusi ini maka kita dapat membangun visi yang paling hijau.</p>
			</div> 

			<a href="build.php" button class="main-button">Membangun Aplikasi</a>
			
			<h6><a href="/earth">Bangunan Tanah & Ecobrick</a> | <a href="/earth-methods"> Metode Bangunan Tanah</a> | <a href="/modules">Modul Milstein</a> | <a href="/circular"> Spiral & Melingkar</a> | <a href="/openspaces">Open Spaces</a> | <a href="/fire">Keamanan Kebakaran</a></h6>
		</div>
	</div>

	<!--FOURTH CONTENT SECTION-->

	<div id="content-sect4">
		<div id="main-content">
			<div class="lead-graphic"><img src="webp/balancing-green.webp"  width="100%" height="100%"></div>
			<div class="lead-graphic"><img src="svgs/aes-brk.svg" width="100%" height="40%" alt="authenticated eco brick sequetration"></div><!--width="300px" height="254px"-->
			<!--<div class="lead-paragraph"><br>Introducing AES Plastic Offsetting</div>-->
			<div class="sub-text"><p><br>Lacak cepat perjalanan Anda menuju nol limbah melalui penggantian plastik. Offset plastik berkorelasi langsung dengan plastik ecobrick yang diautentikasi melalui blockchain manual Brikcoin.</p></div>
			<a href="https://gobrik.com/#offset" target="_blank" class="main-button">Plastik Offset</a>
			<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes">AES Plastik</a> | <a href="transition.php">Transisi Plastik</a> | <a href="about.php">Tentang GEA</a></h6><br><br>
			<p>Blockchain manual Brikcoin memungkinkan otentikasi, penilaian, dan vitalisasi ecobrick.<br><a href="https://gobrik.com/#offset" target="_blank">Seimbangkan (offset) generasi plastik rumah tangga atau perusahaan Anda bersama kami.</a></p><br>
			<img src="svgs/3brikcoins.svg" width="30%">

			<br><br>
			<h4>Eco-brick, eco brick, or ecobrick?</h4>

			<p>Kembali pada hari-hari awal memasukkan plastik ke dalam botol, kami menyebutnya begitu saja-- batu bata botol plastik! Kemudian ketika kami menyadari itu membantu sistem lingkungan di sekitar kami, namanya berubah menjadi "batu bata ramah lingkungan" atau "batu bata ramah lingkungan". Hari ini 'ecobrick' adalah istilah yang dikenal di <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">Wikipedia </a> untuk solusi tanpa modal, tanpa modal, tanpa karbon untuk <a href="https://en.wikipedia.org/wiki/plastic_sequestration" target="_blank">penyerapan plastik.</a></a></p>
				<p>Pelajari tentang fokus utama gerakan dan teknologi ecobrick:</p>
				<a href="transition.php" button class="main-button">Transisi Plastik</a>
			
		</div>
	</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>



	<!--FOOTER ENDS HERE-->

	

</div>
</body>
</html>
