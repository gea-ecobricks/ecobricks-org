
			
			
		<?php include 'db.php';?>
		
        <?php


            $sql = "SELECT tran_id, tran_name, block_tran_type, individual_amt, sender_ecobricker FROM brk_transaction";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            
               
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<tr><td>".$row["tran_id"]."</td><td>".$row["tran_name"]."</td><td>".$row["sender_ecobricker"]."</td><td>".$row["block_tran_type"]."</td><td>".$row["individual_amt"]."</td></tr>";
              }
         
            } else {
              echo "0 results";
            }
            $conn->close();
            ?>