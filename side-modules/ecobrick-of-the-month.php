


<?php

$sql = "SELECT * FROM vw_top_10_last_month ;";

$result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo'<div id="side-module-desktop-mobile">';

        // output data of each row
        while($row = $result->fetch_assoc()) {
            

            echo'<img src="https://ecobricks.org/briks/ecobrick-190124-file.jpeg" width="100%" alt="Ecobrick basic pic"/>';
            
            echo '<h4>Ecobrick of the Month!</h4>
            <p></b>564g of plastic sequestered by John Malkovitch, East Village, NY, USA.<b></p>
            <h5>Of all the thousands of ecobricks logged each month we keep a running tally of those that receive the highest authentication scores.';
          
            echo '<a class="module-btn" href="top-tens.php">Top Ten Briks</a>'; 
        
            } 
            
        
        } else {
            echo "Failed to connect to Brikchain</div>";
        }
        
        ?>
