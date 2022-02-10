


        <?php
 

 $sql = "SELECT tran_id, tran_name, block_tran_type, individual_amt, sender_ecobricker FROM brk_transaction";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
 
   echo'<table id="brikchain2" class="display"><tr><th>ID</th><th>Transaction Name</th><th>Sender</th><th>Block Type</th><th>Amount</th></tr>';
 
 // output data of each row
 while($row = $result->fetch_assoc()) {
   
   echo "<tr><td>".$row["tran_id"]."</td><td>".$row["tran_name"]."</td><td>".$row["sender_ecobricker"]."</td><td>".$row["block_tran_type"]."</td><td>".$row["individual_amt"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "0 results";
 }
 $conn->close();
 
// SQL server connection information
$sql_details = array(
    'user' => 'ecobricks_russs',
    'pass' => '12345',
    'db'   => 'ecobricks_gobrik_msql_db',
    'host' => 'localhost'
);
 
		
			
?>

<p>Testing.</p>