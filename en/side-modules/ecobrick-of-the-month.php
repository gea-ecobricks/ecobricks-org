



<?php

require_once '../gobrikconn_env.php';

$sql = "SELECT * FROM vw_top_10_last_month ;";

    $result = $gobrik_conn->query($sql);

    if ($result->num_rows > 0) {

         echo '<div class="side-module-desktop-mobile">';

        // output data of each row
        //while($row = $result->fetch_assoc()) {

            $row = $result->fetch_assoc();
            
            echo '<a href="https://gobrik.com/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="https://gobrik.com/briks/ecobrick-'.$row["ecobrick_unique_id"].'-file.webp" width="80%" alt="Ecobrick '.$row["ecobrick_unique_id"].' basic pic"/></a>';
            echo '<h4>Ecobrick of the Month!</h4>
            <h5><a href="https://gobrik.com/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">Ecobrick '.$row["ecobrick_unique_id"].'</a> made the top tens this month with a validation score of '.$row["final_validation_score"].'</h5><br>
            
            <a class="module-btn" href="top-tens.php">Top Ten Briks</a><br>
        </div>';
            
        
        
        
        } else {
            echo "Failed to connect to database";
        }
        
        ?>