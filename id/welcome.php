<!--PAGE LANGUAGE:  INDONESIAN -->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("../includes/welcome-inc.php");?>


<!--MAIN CONTENT-->
		
<BODY id="full-page">

	<div id="load-background"> 

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

	<?php include 'ecobricks_env.php';?> 

			<div class="gallery10-content-block">
								
				<div class="flex-container10">
						
					<?php
					$sql = "SELECT * FROM vw_top_10_last_month ;";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {

					echo '
					<div class="gal-photo10">
					<a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["ecobrick_full_photo_url"].'?v=1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' Dari '.$row["ecobrick_owner"].' di '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' di '.$row["ecobrick_owner"].' di '.$row["location"].'" loading="lazy"/></a>';
					echo '<div class="gal10-photo-text"><b>Ecobrick '.$row["ecobrick_unique_id"].'</b><br>Dari '.$row["ecobrick_owner"].'<br>'.$row["location"].'</div></div>';

					}

					} else {
					echo "Gagal terhubung ke database Brikchain";
					}

					?>
							
				</div>
		
			</div>

			<div class="blue-back" style="background: #0ff;width:100%;">
		
				<div class="clouds-new">

		
		
					<!--<div class="feed-live"><p><span class="blink">←  ↔  →</span></div>-->
			
					<div id="main-content" style="padding-bottom: 90px; padding-top:15px">
				
						<div class="big-header">10 Ecobrick Teratas Bulan Ini</div>
						<div class="sub-text"><p>Setiap bulan ribuan ecobrick dicatat dan ditinjau oleh rekan sejawat. Lihat sepuluh ecobricks yang menerima skor autentikasi tertinggi bulan lalu.</p>
						</div> 

						<a href="top-tens.php" button class="main-button">10 Tertatas</a>
					</div>
				</div>
			</DIV>

	<!-- This loads the page's top graphics-->

		<!--<div id="clouds"><img src="https://www.ecobricks.org/webp/mountain-top2.webp?v4" width="100%"></div>-->
		<div id="cloud-banner"><img src="https://www.ecobricks.org/webp/vision-bottom4.webp?v3" width="100%" height="31%"></div>




	<!--FIRST CONTENT SECTION-->

	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="../svgs/dolphin-top-optimized.svg?v=5" width="100%" height="77%" alt="eco bricks help keep plastic out of the ocean" loading="lazy"></div>
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
			<div class="lead-graphic"><img src="../svgs/earth-service-animation.svg?v=4" width="100%" height="96%" alt="eco bricks follow the Earth's example." max-width="700px">
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
			<div class="lead-graphic"><img src="../webp/spiral-circular-800px.webp" width="100%" max-width="777px" height="90%" alt="eco brick plastic brick building"></div>
			<div class="big-header">Masalah adalah Solusi</div>
			<div class="sub-text"><p>Ecobrick (batu bata ramah lingkungan) mengubah plastik bekas menjadi blok bangunan yang dapat digunakan kembali, ideal untuk aplikasi bangunan melingkar & spiral. Gunakan mereka untuk membuat modul, perabot rumah tangga, taman bermain, dan kebun hutan makanan. Dengan menggunakan solusi ini maka kita dapat membangun visi yang paling hijau.</p>
			</div> 

			<a href="build.php" button class="main-button">Membangun Aplikasi</a>
			
			<h6><a href="earth.php">Bangunan Tanah & Ecobrick</a> | <a href="/earth-methods"> Metode Bangunan Tanah</a> | <a href="/modules">Modul Milstein</a> | <a href="/circular"> Spiral & Melingkar</a> | <a href="/openspaces">Open Spaces</a> | <a href="/fire">Keamanan Kebakaran</a></h6>
		</div>
	</div>

	<!--FOURTH CONTENT SECTION-->

	<div id="content-sect4">
		<div id="main-content">
			<div class="lead-graphic"><img src="../webp/balancing-green.webp"  width="100%" height="100%"></div>
			<div class="lead-graphic"><img src="../svgs/aes-brk.svg" width="100%" height="40%" alt="authenticated eco brick sequetration"></div><!--width="300px" height="254px"-->
			<!--<div class="lead-paragraph"><br>Introducing AES Plastic Offsetting</div>-->
			<div class="sub-text"><p><br>Lacak cepat perjalanan Anda menuju nol limbah melalui penggantian plastik. Offset plastik berkorelasi langsung dengan plastik ecobrick yang diautentikasi melalui blockchain manual Brikcoin.</p></div>
			<a href="https://gobrik.com/#offset" target="_blank" class="main-button">Plastik Offset</a>
			<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes">AES Plastik</a> | <a href="transition.php">Transisi Plastik</a> | <a href="about.php">Tentang GEA</a></h6><br><br>
			<p>Blockchain manual Brikcoin memungkinkan otentikasi, penilaian, dan vitalisasi ecobrick.<br><a href="https://gobrik.com/#offset" target="_blank">Seimbangkan (offset) generasi plastik rumah tangga atau perusahaan Anda bersama kami.</a></p><br>
			<img src="../svgs/3brikcoins.svg" width="30%">

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
