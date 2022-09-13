


<?php

$sql = "SELECT * FROM vw_top_10_last_month ;";

$result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo'<div id="side-module-desktop-mobile">';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            

            echo'<img src="'.($d).'" width="100" alt="Ecobrick basic pic"/>';
            
            echo '<img src="svgs/aes-brk.svg?v=2" style="width:70%; margin-top:25px;"><p style="font-size: 1.2em; margin-top:5px;">Current value of 1 Brikcoin:</p>
            <p><span class="courier" style="font-size: 1.5em;"><span class="blink">⬤<span style="font-size: 0.4em;"> </span></span>'.$row["plastic_value_g_per_brk"].'<span style="font-size: 0.1em;"> </span>g<span style="font-size: 0.3em;"> </span>AES</span></p>';
            echo '<p style="font-size: 1.2em; margin-top:10px;">Total Circulation:<br><b><span class="courier">'.$row["net_brk_in_circulation"].'&#8202;BRK</b></span></p>' ; 
            echo '<p style="font-size: 0.9em; margin-top:10px;">Unlike other currencies brikcoins <a href="/brikcoins.php">(BRK / ß)</a> are based in ecological value as measured in kilograms of authenticated ecobrick sequestered (<a href="sequestered.php">AES</a>)plastic.</p>
            <p style="color: white; font-size: 0.8em; margin-top:10px;"> Updated every 15 minutes</p></div>' ; 
        
            } 
            
        
        } else {
            echo "Failed to connect to Brikchain</div>";
        }
        ?>

<div id="side-module-desktop-mobile">
				<img src="pngs/transcaste-500px.png" width="80%" loading="lazy" alt="eco brick transcaste construction and building briks.">
				<h4>Transcate Collaboration</h4>
				<h5>In contrast to conventional construction, Earth and ecobricking building is transcaste, meaning that it is accessible to men and women, young and old, black and white, and everyone in between!</h5><br>
				<a class="module-btn" href="principles.php">Learn More</a>
			</div>