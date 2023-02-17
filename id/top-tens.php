<!--PAGE LANGUAGE:  INDONESIAN
Content Page template: v.1.1-->
   
<!-- TRANSLATORS:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("includes/top-tens-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<!--<?php require_once ("under-construction.php");?>-->
<!--TOP PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">10 Teratas Ecobrick</div>
	    <div class="splash-sub">Ecobrick autentikasi dengan peringkat tertinggi bulan ini.</div>
	</div>
	<div class="splash-image"><img src="https://ecobricks.org/pngs/gobriktrophy.png" style="width: 55%" alt="Trofi Sepuluh Teratas Ecobrick Bulan Ini">
    <!--https://ecobricks.org/svgs/eb-blue-no-clouds.svg-->
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
				<p>Setiap bulan kami menampilkan ecobrick yang menerima skor autentikasi tertinggi dari komunitas ecobrick global di<a href="gobrik">GoBrik</a> app.</p>
			</div>
	
			<div class="page-paragraph">
                <p>Dan inilah mereka...</p>
                
            </div>	

            <?php include 'ecobricks_env.php';?> 

            
            
            <div class="page-paragraph">


<?php

$sql = "SELECT * FROM vw_top_10_last_month ;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        
        // output data of each row
        while($row = $result->fetch_assoc()) {

            //$row = $result->fetch_assoc();
            
            echo '<p><a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["ecobrick_full_photo_url"].'" style="max-width:100%; width:600px;" alt="Top Ten Ecobrick '.$row["ecobrick_unique_id"].' dari '.$row["ecobrick_owner"].' di '.$row["location"].'" loading="lazy"/></a></p>';
            echo '<h4><p><b>'.$row["location"].'</b></p></h4>';
            echo '<p>'.$row["ecobrick_owner"].' di buat <a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">Ecobrick '.$row["ecobrick_unique_id"].'</a> dengan berat '.$row["weight_in_g"].'&#8202;g dengan kepadatan '.$row["density"].'&#8202;g/ml.   It made this months top ten ecobricks dengan skor validasi sebesar '.$row["final_validation_score"].'.</p>';
            
            echo '<p><a class="module-btn" href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">🔎 Coba lihat</a>';
            echo '</p><br><br>';
    
        }
        
        } else {
            echo "Gagal terhubung ke database Brikchain";
        }
        
        ?>

    </div>
            
      
        
<hr>
            <br>
                 
            <div class="row">
                
                <div class="main2">
                    <div class="page-paragraph-reg">
                 
                        <h4>Pelajari cara membuat ecobrick yang hebat!</h4>
                        
                         <p>Membuat ecobrick yang bagus tidaklah mudah. Itu membutuhkan teknik, kesabaran, dan plastik siap pakai! Lihat panduan ecobrick dua belas langkah kami untuk meningkatkan permainan sekuestrasi Anda.</p>
                    
                        <br><p>
                    
                        <a class="action-btn" href="how">🚀 Cara Membuat Ecobrick</a>
                        <p style="font-size: 0.85em; margin-top:20px;">Panduan 12 langkah komprehensif kami.</a></p>    
        
                    </div>
                </div>

                <div class="side2">
                    <br><img src="webp/road-500px.webp" width="100%" alt="eco brick jalan plastik" loading="lazy" alt="eco brik adalah bentuk plastik sekuestrasi dengan aman melalui waktu.">
                </div> 
            </div>
</div>



    
	

		<div class="side">
	
		
            <?php require_once ("side-modules/about-gea.php");?>

            <?php require_once ("side-modules/sequest-module.php");?>

            <?php require_once ("side-modules/spiral-design.php");?>
                
            <?php require_once ("side-modules/brikcoin-live-values.php");?>

        <?php 	$conn->close();?>

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