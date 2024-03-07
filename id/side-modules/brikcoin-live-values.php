
<?php

$sql = "SELECT * FROM vw_sum_brk_total ;";

$result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo'<div class="side-module-desktop-mobile">';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            

            echo '<img src="../svgs/aes-brk-vertical.svg?v=2" style="width:95%; margin-top:20px;"><p style="font-size: 1.0em; margin-top:5px;">Live Brikcoin value:</p>

            <p>
            <span class="courier">
                <span class="blink" style="font-size: 1.0em; padding-bottom: 10px">⬤</span>
                <span style="font-size: 1.4em;">'.$row["plastic_value_g_per_brk"].'g AES</span>
                </span>
            </p>';
            echo '<p style="font-size: 1.0em; margin-top:10px;">Harga Saat Ini 2024 per 1 Kg plastik AES:<br><span class="courier">3.23 USD</span></p>' ; 
            echo '<p style="font-size: 1.0em; margin-top:10px;">Total Circulation:<br><b><span class="courier">'.$row["net_brk_in_circulation"].'&#8202;BRK</b></span></p>' ; 
            echo '<p style="font-size: 0.75em; margin-top:10px;">Brikcoin <a href="/brikcoins.php">(BRK / ß)</a> dikomodifikasi berdasarkan nilai ekologis yang diukur dalam kilogram plastik ecobrick yang diasingkan dan diautentikasi (<a href="sequestered.php">AES</a>).</p>
            <p><a class="module-btn" href="offsetting.php">ℹ️ Pengoffsetan AES</a></p>
            </div>' ; 
        
            } 
            
        } else {
            echo "Gagal terhubung ke Brikchain</div>";
        }
        ?>

        <!--<p style="color: grey; font-size: 0.8em; margin-top:10px;">Links open to the GoBrik platform.</p>-->