
<!--PAGE LANGUAGE:  INDONESIA
Special Ecobrick View Page: v.1.1-->
 
<?php 
require_once ("../includes/details-ecobrick-page-inc.php");

include '../ecobricks_env.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = '" . $serialNo . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

echo 
'<div class="splash-content-block">
	<div class="splash-box">

		<div class="splash-heading">Ecobrick ' . $array["serial_no"] .'</div>
		
		<div class="splash-sub">'. $array["weight_authenticated_kg"] .'&#8202;kg plastik telah diamankan dari biosfer di '. $array["location_full"] .'.</div>
	</div>
	
	<div class="splash-image">
		<a href="ecobrick_full_photo_url"><img src="'. $array["ecobrick_full_photo_url"] .'" style="	border-width: 10px;
	border-color: #97C4E3;
	width: 85%;
	margin-top:-20px;
	box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
	border-style: solid;" alt="Ecobrick Serial '. $array["serial_no"] .' dibuat di '. $array["location_full"] .' dan diautentikasi pada ' . $array["last_validation_ts"] .'"
	title="Ecobrick Serial '. $array["serial_no"] .' dibuat di '. $array["location_full"] .' dan diautentikasi pada ' . $array["last_validation_ts"] .'"></a>
	</div>	
</div>

<div id="splash-bar"></div>
';

echo '
<a name="top"></a>
<div id="main-content">
	<div class="row">
		<div class="main">
			<div class="row-details">';

	if ( isset($array["vision"]) && $array["vision"] != '' ) {
			//	echo '<p><div class="vision-quote">'. $array["vision"] .'</div></p>';
		                echo '<p><div class="vision-quote"> '. str_replace('"', "", $array["vision"]) . '  </div></p>';
			}
	
			
			echo '<div class="lead-page-paragraph">
						<p><b>'. $array["owner"] .' memiliki ecobrick '. $array["weight_g"] .'&#8202;g plastik bekas di '. $array["location_city"] .', '. $array["location_country"] .' menggunakan botol '. $array["volume_ml"] .'  untuk membuat '. $array["sequestration_type"].'.</b></p>
					</div>';

	

				

			echo ' <div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p>Ecobrick ini selesai dengan kepadatan '. $array["density"] .'&#8202;g/ml dan mewakili '. $array["CO2_kg"] .'&#8202;kg dari C02 yang diasingkan. Ecobrick secara permanen ditandai dengan Nomor Seri '. $array["serial_no"] .' dan di '. $array["date_logged_ts"] .' secara otomatis ditambahkan ke antrian validasi.  Berbasis di '. $array["location_region"] .', '. $array["owner"] .' dan komunitas mereka '. $array["community_name"] .', bekerja keras untuk menjaga plastik keluar dari biosfer di '. $array["location_country"] .'. </p>

						<p>Pada '. $array["date_logged_ts"] .' ecobrick ini diautentikasi dengan skor validasi rata-rata sebesar '. $array["final_validation_score"] .'. Otentikasi ecobrick dihasilkan '. $array["ecobrick_dec_brk_val"] .'&#8202;ß. Ecobrick diberi peringkat dengan skor di '. $array["validation_score_avg"] .'.</p>
						<br>
					</div>
				</div>';

			

			if ( isset($array["selfie_photo_url"]) && $array["selfie_photo_url"] != '' ) {
				echo '<div class="side-details">
				<img src="'. $array["selfie_photo_url"] .'" width="100%">
			</div>
		';
			}
				

			echo '
			
			</div>
			<div id="data-chunk">
				<div class="ecobrick-data">
					<p style="margin-left: -32px;font-weight: bold;">>> Catatan Data Brikchain Mentah</p><br>
					<p>--------------------</p>
					<p>MULAI REKAMAN BRIK ></p>';
			echo ' <p><b>Tautan ke brk trans:</b><var>  Belum ada tautan</var></p>' ;
			echo ' <p><b>Logged:</b> ' . $array["date_logged_ts"] .'</p>' ;
			echo ' <p><b>Volume:</b> <var>'. $array["volume_ml"] .' &#8202;ml</var></p>' ;
			echo ' <p><b>Berat:</b> <var>' . $array["weight_g"] .'&#8202;g</var></p>' ;
			echo ' <p><b>Kepadatan:</b> <var>' . $array["density"] .'&#8202;g/ml</var></p>' ;
			echo ' <p><b>CO2e:</b>  <var>' . $array["CO2_kg"] .' &#8202;kg</var></p>' ;
			
			echo ' <p><b>Nilai Brikcoin:</b> <var>' . $array["ecobrick_dec_brk_val"] .'&#8202;ß</var></p>' ;

			echo ' <p><b>Pembuat:</b> <var><i>' . $array["owner"] .'</i></var> </p>' ;
			echo ' <p><b>Pengasingan:</b> <var>' . $array["sequestration_type"].'</var></p>' ;
			echo ' <p><b>Merek:</b> <var>' . $array["brand_name"] .'</var></p>' ;
			echo ' <p><b>Warna bawah:</b> ' . $array["bottom_colour"] .'</p>' ;

			echo ' <p><b>Sumber plastik:</b>  ' . $array["plastic_from"] .'</p>' ;

			echo ' <p><b>Masyarakat:</b> <var>' . $array["community_name"] .'</var></p>' ;
			echo ' <p><b>Kota:</b> <var>' . $array["location_city"] .'</var></p>' ;
			echo ' <p><b>Wilayah:</b> <var>' . $array["location_region"] .'</var></p>' ;
			echo ' <p><b>Negara:</b> ' . $array["location_country"] .'</p>' ;
			echo ' <p><b>Lokasi lengkap:</b> <var>' . $array["location_full"] .'</var></p>' ;


			echo ' <p><b>Waktu validasi:</b> ' . $array["last_validation_ts"] .'</var></p>' ;
			echo ' <p><b>Validator 1:</b> <var>' . $array["validator_1"] .'</var> </p>' ;
			echo ' <p><b>Validator 2:</b> <var>' . $array["validator_2"] .'</var> </p>' ;
			echo ' <p><b>Validator 3:</b> <var>' . $array["validator_3"] .'</var> </p>' ;
			echo ' <p><b>Rata-rata skor validasi:</b> <var>' . $array["validation_score_avg"] .'</var></p>' ;

			echo ' <p><b>Skor validasi akhir:</b> <var>' . $array["final_validation_score"] .'</var></p>' ;
			echo ' <p><b>Berat yang diautentikasi:</b> <var> ' . $array["weight_authenticated_kg"] .'&#8202;kg</p>
			<p>> REKAMAN AKHIR.</p>
				</div>
			</div>
			' ;

			echo '
			<br><hr><br> 
			<div class="page-paragraph">
				<h3><p>The Brikchain</p></h3>
			
				<p>Ketika ecobrick diautentikasi, seperti yang di atas, ecobrick dipublikasikan ke blockchain manual brikcoin dan koin dikeluarkan sesuai dengan nilai ekologisnya. Inilah yang kami sebut Brikchain. Di Brikchain, Anda dapat menemukan ecobrick ini dan semua ecobrick lainnya, blok, dan transaksi yang mendukung mata uang gratis Brickoin.</p>

			<p>Sebagai proses manual non-kapital, Brikcoins mendukung siapa pun di mana pun yang mau bekerja dengan tangan mereka untuk memberikan kontribusi ekologis yang berarti.</p>
				<br><br>
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Jelajahi Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">Rantai langsung transaksi dan ecobrick.</a></p>
				</div>
			</div>';
			
			echo '	<div class="side">

			<div id="side-module-desktop-mobile">
					<img src="..webp/auth-brik-455px.webp" width="90%" alt="Mengikuti contoh Bumi melalui eco bricking">
					<br><h4>Diautentikasi!</h4>
					<h5>Ecobrick ini telah diautentikasi oleh tiga validator independen yang memenuhi standar sekuestrasi plastik.</h5><br>
					<a class="module-btn" href="/about">Tentang Ecobricks</a>
					<br><br>
				</div>   ';

	}


} else {
    echo '<META NAME="robots" CONTENT="noindex">';

	echo '

</head>

<BODY id="full-page">

	  ';

require_once ("../menus/menu-$lang.php");



echo '
<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
	
			echo 'Sorry! :-(</div>
			<div class="splash-sub">Tidak ada hasil untuk ecobrick '. $serialNo .' di Brikchain. Kemungkinan besar ini karena data Brikchain masih dalam proses migrasi.</div>
		</div>
		<div class="splash-image"><img src="../webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="empty ecobrick"></div>	
	</div>
	<div id="splash-bar"></div>

	<a name="top"></a>

	<div id="main-content">
		<div class="row">
			<div class="main">
				<br><br>

				
			
			<div class="ecobrick-data">
			<p>🚧 Data untuk ecobrick '. $serialNo .' belum bermigrasi ke blockchain.
				</p></div><br><br><br><br>
				
				<div class="page-paragraph">
				<p><h3>The Brikchain</h3></p>
			
				<p>Ketika ecobrick diautentikasi, seperti yang di atas, ecobrick dipublikasikan ke blockchain manual brikcoin dan koin dikeluarkan sesuai dengan nilai ekologisnya. Inilah yang kami sebut Brikchain. Di Brikchain, Anda dapat menemukan ecobrick ini dan semua ecobrick lainnya, blok, dan transaksi yang mendukung mata uang gratis Brickoin.</p>

			<p>Sebagai proses manual non-kapital, Brikcoins mendukung siapa pun di mana pun yang mau bekerja dengan tangan mereka untuk memberikan kontribusi ekologis yang berarti.</p>
				<br><br><br>
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Jelajahi Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">Rantai langsung transaksi dan ecobrick.</a></p>
				</div>
			</div>

			<div class="side">
		  
		';
		}
		$conn->close();

		?>



				
	

			
			

		
	

            <div id="side-module-desktop-mobile">
				<img src="../webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<h5>Berat plastik di dalam ecobrick terautentikasi adalah apa yang kami sebut sebagai Plastik Ecobrick Terotentikasi (Plastik AES).</h5><br>
				<a class="module-btn" href="/aes" target="_blank">Tentang AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="../webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Brikcoins</h4>
				<h5>Ketika ecobrick diautentikasi, brikcoin dihasilkan untuk mewakili nilai ekologi plastik AES-nya.</h5><br>
				<a class="module-btn" href="brikcoins.php">Tentang Brikcoins</a><br><br>
			</div>



		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footers/footer-$lang.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="../scripts/accordion-scripts.js" defer></script>


</div>
</body>
</html>
