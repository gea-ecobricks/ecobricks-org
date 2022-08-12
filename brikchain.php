<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->


<?php require_once ("includes/brikchain-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("under-construction.php");?>

<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>Brikchain Explorer</div>
		<div class="splash-sub">All the Briks, Blocks & Transactions.</div>
	</div>
	<div class="splash-image"><img src="webp/brikchain-450px.webp" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
				<p>Search and explore the full chain of authenticated ecobricks, blocks and transactions that underly the brikcoin manual blockchain.</p>
			</div>

			<div class="page-paragraph">
				  
				<p>Every ecobrick that is authenticated on the <a href="/gobrik">GoBrik platform</a> is permanently recorded as a non-fungible-brik (NFB) in the <a href="brikcoins">Brikcoin Manual Blockchain</a>.  With each authentication, the corresponding value of  ecobrick sequestered plastic (<a href="aes">AES plastic</a>) is issued in brikcoins</a>.
				
				<p>All blocks and transaction are recorded for a full and searcable public accounting.  Yearly summations of the AES Plastic recorded, brikcoins generated and the cost of running the blockchain are used to generate the yearly value of 1Kg of AES value for <a href="https://gobrikc.om/#offset" target="_blank" rel="noopener" >plastic offseting</a>.  All authenticated ecobricks are recorded as a historical archive of each brik and to assist in the exchange of physical NFBs on the <a href="drop-off">GoBrik Marketplace</a>.</p>
				
				<p>Use the tools below to search by either transaction or by ecobrick.  You can also view our <a href="open-books.php">Open Books accounting</a>.</p>
			</div>
		</div>
		

		<div class="side">

			<div id="side-module-desktop-only">
				<img src="webp/for-earth500px.webp" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Earth Enterprise</h4>
				<h5>The Brikchain is maintained by the Global Ecobrick Alliance, a not-for-profit, for-Earth enterprise dedicated to accelerating plastic transition.</h5><br>
				<a class="module-btn" href="/about">About the GEA</a>
                <br>
			</div>   
         
		</div>
	</div>




		

	<div class="page-paragraph">
		<h4>Blocks & Transactions</h4>
		<h6>An overview of all brikcoins generated and exchanged.</h6>
		<div class="ecobrick-data"><p>🚧 Not yet live.  Migration completed.  Sync pending.</p></div>
	</div>

	<div class="overflow">
		<table id="brikchain" class="display" style="width:100%">
			<thead>
				<tr>
					
				<th>Transaction</th>
				<th>Issued</th>
					<th>Sender</th>	
					<th>Type</th>
					<th>Amount</th>
					<th>Ecobrick</th>

				</tr>
			</thead>
			<tfoot>
				<tr>
				<th>Transaction</th>
				<th>Issued</th>
					<th>Sender</th>	
					<th>Type</th>
					<th>Amount</th>
					<th>Ecobrick</th>
				</tr>
			</tfoot>
		</table>
	</div>

	

	<br><br>
	



	<div class="page-paragraph">	
		<h4>Authenticated Ecobricks</h4>
		
		<h6>All the ecobricks authenticated and archived on chain.</h6>
		<div class="ecobrick-data"><p>🚧 Not yet live, data still in migration</p></div>

	</div>

	<div class="overflow">
		<table id="ecobricks" class="display" style="width:100%">
			<thead>
				<tr>
					<th style="width: 150px !important;">Brik</th>
					<th>Authenticated</th>
					<th>AES Plastic</th>
					<th>Value</th>
					<th>CO2e</th>
					<th>Serial</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th style="width: 150px !important;">Brik</th>
					<th>Logged</th>
					<th>AES Plastic</th>
					<th>Value</th>
					<th>CO2e</th>
					<th>Serial</th>
				</tr>
			</tfoot>
   		</table>
	</div>

	<br><br><br><br>


	<div class="page-paragraph">
			<h4>Total Brikcoin Pool</h4>
			
			<h6>Running and yearly brikchain totals. </h6>
			<div class="ecobrick-data"><p>🟠 Data not yet live: Migrating...</p></div>
	</div>	
	
		<br><br><br><br>
	
	<?php include 'ecobricks_env.php';?>
	
	<div class="overflow">

	<div class="page-paragraph">
			<h4>AES Plastic Valuations</h4>
			
			<h6>Each year the value of 1 Kg of AES plastic is determined by the ecobricks authenticated in that year.  The net weight of the authenticated plastic is divided by the GEA's expenses maintaining the block chain (see the GEA's yearly <a href="open-books.php">Open Books</a> financial accounting)</h6>
			<div class="ecobrick-data"><p>🚧 Does not yet reflect official values, data still in migration</p></div>
	</div>		
			
	<div class="overflow">
	
		
	<?php

	$sql = "SELECT * FROM vw_detail_sums_by_year Order by `year` DESC;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>BRK Generated</th><th>Authenticated</th><th>Calculated AES plastic</th><th>Tallied AES Plastic</th><th>GEA Year Expenses</th><th>1kg AES Value</th></tr>';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td>".$row["year"]."</td><td>".$row["total_brk"]."&#8202;ß</td><td>".$row["brick_count"]." ecobricks</td><td>".$row["calculated_weight"]."&#8202;Kg</td><td>".$row["weight"]."&#8202;Kg</td><td>".$row["tot_usd_exp_amt"]."&#8202;$ USD</td><td>".$row["final_aes_plastic_cost"]." &#8202;$ USD</td></tr>"; 
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	?>

<br><br><br><br>

	<?php

$sql = "SELECT * FROM vw_sum_brk_total ;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	echo'<table id="brikchain" class="display"><tr><th>From</th><th>To</th><th>Total BRK Generated</th><th>Total BRK Destroyed</th><th>Total Brikcoins</th></tr>';

// output data of each row
//until($row = $result->fetch_assoc()) {
	$row = $result->fetch_assoc();
	echo "<tr><td>".$row["from_date"]."</td><td>".$row["to_date"]."</td><td>".$row["total_brk"]."&#8202;ß</td><td>".$row["aes_purchased"]."&#8202;kg</td><td>".$row["net_brk_in_circulation"]."&#8202;ß</td></tr>";
//	}
	echo "</table>";
} else {
	echo "0 results??? test1";
}

?>
</div>


	</div>

	<?php 	$conn->close();?>
	<br><br>
				



</DIV>






	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

	<!--FOOTER ENDS HERE-->

</div>
</body>
</html>

