
<?php

$sql = "SELECT * FROM vw_sum_brk_total ;";

$result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo'<div id="side-module-desktop-mobile">';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            

            echo '<img src="svgs/aes-brk.svg?v=2" style="width:65%; margin-top:20px;"><p style="font-size: 1.2em; margin-top:5px;">Nilai saat ini dari 1 Brikcoin:</p>
            <p><span class="courier"><span class="blink" style="font-size: 1.1em; padding-bottom: 5px">⬤</span><span style="font-size: 0.4em;"> </span><span style="font-size: 1.6em;">'.$row["plastic_value_g_per_brk"].'<span style="font-size: 0.1em;"> </span>g<span style="font-size: 0.3em;"> </span>AES</span></p>';
            echo '<p style="font-size: 1.2em; margin-top:10px;">2023 Harga per Kg AES:<br><b><span class="courier">2.41</span><span style="font-size: 0.3em;"> </span>USD</b></span></p>' ; 
            echo '<p style="font-size: 1.2em; margin-top:10px;">Sirkulasi Total:<br><b><span class="courier">'.$row["net_brk_in_circulation"].'&#8202;BRK</b></span></p>' ; 
            echo '<p style="font-size: 0.9em; margin-top:10px;">Brikcoins <a href="/brikcoins.php">(BRK / ß)</a>dinilai dalam nilai ekologis yang diukur dalam kilogram plastik terasing ecobrick yang diautentikasi (<a href="sequestered.php">AES</a>).</p>
            <p><a class="module-btn" href="https://gobrik.com/offset.php" target="_blank">Beli Offset Plastik</a></p>
            <p style="color: grey; font-size: 0.8em; margin-top:10px;">Tautan terbuka ke platform GoBrik.</p></div>' ; 
        
            } 
            
        } else {
            echo "Gagal terhubung ke Brikchain</div>";
        }
        ?>