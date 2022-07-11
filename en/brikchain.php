<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->


<?php require_once ("includes/brikchain-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("under-construction.php");?>

<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>Brikchain Explorer</div>
		<div class="splash-sub">Browse all the ecobricks & transactions of the Brikcoin manual blockchain.</div>
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
				
				<p>Use the tools below to search by either transition or by ecobrick.</p>
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
		<h4>Brikcoin Blocks & Transactions</h4>
		<h6>An overview of all brikcoins generated and exchanged.</h6>
		<div class="ecobrick-data"><p>🚧 Not yet live, data still in migration</p></div>
	</div>

	<div class="overflow">
		<table id="brikchain" class="display" style="width:100%">
			<thead>
				<tr>
					
					<th>Issued</th>
					<th>Sender</th>	
					<th>Type</th>
					<th>Amount</th>
					<th>Transaction</th>
					<th>Ecobrick</th>

				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Issued</th>
					<th>Sender</th>	
					<th>Type</th>
					<th>Amount</th>
					<th>Transaction</th>
					<th>Ecobrick</th>
				</tr>
			</tfoot>
		</table>
	</div>

	

	<br><br>
		
	<div class="page-paragraph">
			<h4>Brikcoin Yearly Valuations</h4>
			
			<h6>Running and yearly brikchain totals.  Brikcoin pricing based on the Global Ecobrick Alliance's yearly costs for presiding over the blockhain as disclosed the GEA's yearly <a href="open-books.php">Open Books</a> financial accounting</h6>
			<div class="ecobrick-data"><p>🚧 Does not yet reflect official values, data still in migration</p></div>
	</div>		
			
	<div class="overflow">
	
	<?php include 'db.php';?>
		
	<?php

	$sql = "SELECT * FROM vw_detail_sums_by_year Order by `year` DESC;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>From</th><th>To</th><th>Total BRK</th><th>Total Briks</th><th>Total Weight</th><th>Year Expenses</th><th>BRK Value</th></tr>';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td><var>".$row["year"]."</var></td><td><var>".$row["from_date"]."</var></td><td>".$row["to_date"]."</var></td><td><var>".$row["total_brk"]."&#8202;ß</var></td><td><var>".$row["brick_count"]."&#8202;briks</var></td><td><var>".$row["weight"]."&#8202;Kg</var></td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
	</div>
	<br><br>
				



</DIV>






	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

	<!--FOOTER ENDS HERE-->

</div>
</body>
</html>

