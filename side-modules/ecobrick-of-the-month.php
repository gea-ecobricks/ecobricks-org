


 <div id="side-module-desktop-mobile">
    <img src="https://ecobricks.org/briks/ecobrick-190124-file.jpeg" width="100%" alt="Ecobrick basic pic"/>
    <h4>Ecobrick of the Month!</h4>
    <h5><a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no=190124">Pondok Pesantren Al Ikhlas Putri has ecobricked 269 g of community plastic in Jombang, Indonesia using a 600 bottle to make a Regular Ecobrick</a></h5>
    <h5>Of all the thousands of ecobricks logged each month we keep a running tally of those that receive the highest authentication scores.</h5><br>
    <a class="module-btn" href="top-tens.php">Top Ten Briks</a>
</div>
  



<?php

$sql = "SELECT * FROM vw_top_10_last_month ;";

                $result = $conn->query($sql);

				if ($result->num_rows > 0) {

            echo'ding';

        // output data of each row
        //while($row = $result->fetch_assoc()) {

            $row = $result->fetch_assoc();
            
            echo'ding2';
        
        
        
        } else {
            echo "Failed to connect to database";
        }
        
        ?>