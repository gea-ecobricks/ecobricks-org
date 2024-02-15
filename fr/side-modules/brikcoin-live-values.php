 
<?php

$sql = "SELECT * FROM vw_sum_brk_total ;";

$result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo '<div class="side-module-desktop-mobile">';

            // output data of each row
            while ($row = $result->fetch_assoc()) {
            
                echo '<img src="../svgs/aes-brk-vertical.svg?v=4" style="width:95%; margin-top:20px;"><p style="font-size: 1.0em; margin-top:5px;">Valeur actuelle du Brikcoin en direct :</p>
            
                        <p>
                        <span class="courier">
                            <span class="blink" style="font-size: 1.0em; padding-bottom: 10px">⬤</span>
                            <span style="font-size: 1.4em;">' . $row["plastic_value_g_per_brk"] . 'g AES</span>
                            </span>
                        </p>';
                echo '<p style="font-size: 1.0em; margin-top:10px;">Prix actuel en 2024 pour 1 kg de plastique AES :<br><span class="courier">2.41 USD</span></p>';
                echo '<p style="font-size: 1.0em; margin-top:10px;">Circulation totale :<br><b><span class="courier">' . $row["net_brk_in_circulation"] . '&#8202;BRK</b></span></p>';
                echo '<p style="font-size: 0.75em; margin-top:10px;">Les Brikcoins <a href="/brikcoins.php">(BRK / ß)</a> sont marchandisés en valeur écologique mesurée en kilogrammes de plastique écologique séquestré authentifié (<a href="sequestered.php">AES</a>).</p>
                        <p><a class="module-btn" href="aes/">ℹ️ Plastique AES</a></p>
                        </div>';
            
            }
            
            } else {
                echo "Échec de la connexion à Brikchain</div>";
            }
            ?>
            

        <!--<p style="color: grey; font-size: 0.8em; margin-top:10px;">Links open to the GoBrik platform.</p>-->