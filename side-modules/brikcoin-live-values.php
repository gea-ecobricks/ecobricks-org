
<?php

$sql = "SELECT * FROM vw_sum_brk_total ;";

$result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo'<div id="side-module-desktop-mobile">';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            

            echo '<img src="svgs/aes-brk.svg?v=2" style="width:70%; margin-top:25px;"><p style="font-size: 1.2em; margin-top:5px;">Current value of 1 Brikcoin:</p>
            <p><span class="courier"><span class="blink" style="font-size: 1.1em;>⬤<span style="font-size: 0.4em;"> </span></span><span style="font-size: 1.6em;">'.$row["plastic_value_g_per_brk"].'<span style="font-size: 0.1em;"> </span>g<span style="font-size: 0.3em;"> </span>AES</span></p>';
            echo '<p style="font-size: 1.2em; margin-top:10px;">2022 Price per Kg AES:<br><b><span class="courier">2.41&#8202;S USD</b></span></p>' ; 
            echo '<p style="font-size: 1.2em; margin-top:10px;">Total Circulation:<br><b><span class="courier">'.$row["net_brk_in_circulation"].'&#8202;BRK</b></span></p>' ; 
            echo '<p style="font-size: 0.9em; margin-top:10px;">Unlike other currencies brikcoins <a href="/brikcoins.php">(BRK / ß)</a> are based in ecological value as measured in kilograms of authenticated ecobrick sequestered (<a href="sequestered.php">AES</a>)plastic.</p>
            <a class="module-btn" href="https://gobrik.com/offset.php">Buy Plastic Offsets</a>
            <a class="module-btn" href="https://gobrik.com/#market">Bid for Brikcoins</a>
            <p style="color: white; font-size: 0.8em; margin-top:10px;">↗️ Links will take you to the GoBrik platform</p></div>' ; 
        
            } 
            
        } else {
            echo "Failed to connect to Brikchain</div>";
        }
        ?>