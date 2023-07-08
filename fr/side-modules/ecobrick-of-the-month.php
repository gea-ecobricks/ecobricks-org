



<?php

$sql = "SELECT * FROM vw_top_10_last_month ;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

         echo '<div class="side-module-desktop-mobile">';

        // output data of each row
        //while($row = $result->fetch_assoc()) {

            $row = $result->fetch_assoc();
            
            echo '<a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="https://ecobricks.org/briks/ecobrick-'.$row["ecobrick_unique_id"].'-file.jpeg" width="80%" alt="Ecobrick '.$row["ecobrick_unique_id"].' basic pic"/></a>';
            echo '<h4>Ecobrick du mois !</h4>
            <h5><a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">Ecobrick '.$row["ecobrick_unique_id"].'</a> fait partie des dix premiers ce mois-ci avec un score de validation de'.$row["final_validation_score"].'</h5><br>
            
            <a class="module-btn" href="top-tens.php">Top 10 des briks</a><br>
        </div>';
            
        
        
        
        } else {
            echo "Failed to connect to database";
        }
        
        ?>