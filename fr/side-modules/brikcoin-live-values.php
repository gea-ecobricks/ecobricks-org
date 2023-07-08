
<?php

$sql = "SELECT * FROM vw_sum_brk_total ;";

$result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo'<div class="side-module-desktop-mobile">';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            

            echo '<img src="svgs/aes-brk.svg?v=2" style="width:65%; margin-top:20px;"><p style="font-size: 1.2em; margin-top :5px;">Valeur actuelle de 1 Brikcoin :</p>
             <p><span class="courier"><span class="blink" style="font-size : 1.1em ; padding-bottom : 5px">⬤</span><span style="font-size : 0.4 em;"> </span><span style="font-size: 1.6em;">'.$row["plastic_value_g_per_brk"].'<span style="font-size: 0.1em;"> </span >g<span style="font-size: 0.3em;"> </span>AES</span></p>' ;
             echo '<p style="font-size: 1.2em; margin-top:10px;">Prix au Kg AES :<br><b><span class="courier">2.41</span><span style ="font-size: 0.3em;"> </span>USD</b></span></p>' ;
             echo '<p style="font-size: 1.2em; margin-top:10px;">Diffusion totale :<br><b><span class="courier">'.$row["net_brk_in_circulation"]' &#8202;BRK</b></span></p>' ;
             echo '<p style="font-size: 0.9em; margin-top:10px;">Les Brikcoins <a href="/brikcoins.php">(BRK / ß)</a> sont valorisés en valeur écologique mesurée en kilogrammes de plastique séquestré ecobrick authentifié (<a href="sequestered.php">AES</a>).</p>
             <p><a class="module-btn" href="https://gobrik.com/offset.php" target="_blank">Acheter des compensations en plastique</a></p>
             <p style="color: gray; font-size: 0.8em; margin-top:10px;">Liens ouverts vers la plateforme GoBrik.</p></div>' ;
        
            } 
            
        } else {
            echo "Impossible de se connecter à Brikchain</div>";
        }
        ?>