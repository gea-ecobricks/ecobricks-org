<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='1.6';?>
<?php $page='brikchain';?>

<?php require_once ("../includes/brikchain2-inc.php");?>


<!--TOP PAGE BANNER-->


<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">Brikchain Explorer</div>
	    <div class="splash-sub" data-lang-id="002-splash-subtitle">All the Briks, Blocks & Transactions.</div>
	</div>
	<div class="splash-image" data-lang-id="003-splash-image-alt"><img src="../webp/brikchain-450px.webp" style="width: 85%" alt="The brikchain explorer: search all the briks, blocks and transactions">
    </div>	
</div>
<div id="splash-bar"></div>

<!-- PAGE CONTENT-->

<?php include '../ecobricks_env.php';?> 

<div id="main-content">
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
				<p data-lang-id="004-lead-page-paragraph">Search and explore the full chain of authenticated ecobricks, blocks and transactions that make up the brikcoin manual blockchain.</p>
			</div>

			<div class="page-paragraph">
				  
				<p data-lang-id="005-first-page-paragraph">Our <a href="brikchain.php">Brikchain is based on the ecological value of plastic <a href="sequest.php">sequestered</a> out of the biosphere and out of industry.  Every ecobrick that is authenticated on the <a href="/gobrik">GoBrik platform</a> is permanently recorded on the <a href="brikcoins.php">Brikcoin Manual Blockchain</a>.  With each authentication, the corresponding value of sequestered plastic (<a href="/aes">AES plastic</a>) is issued in brikcoins</a>.  Each issuance is made through a block of transactions that are recorded sequentially.  This chain of blocks, transaction and ecobricks is fully searchable here.  
				
				<p data-lang-id="005-second-page-paragraph">Use the tools below to browse the Brikchain.  You can also view our <a href="open-books.php">Open Books</a> financial accounting.  To learn how the combination of our financial and <a href="regen-reports.php">ecological accounting</a> generates the price per Kg of AES sales see our <a href="offsets.php">offsetting page</a>.</p> </p>
			</div>




		</div>
		

		<div class="side">

		
		<?php require_once ("side-modules/brikcoin-live-values.php");?>

         
		</div>

	</div>

	<div class="live-data" style="margin-top:30px">
		<?php
			$sql = "SELECT * FROM vw_detail_sums_by_year  WHERE year = 2023;"; $result = $conn->query($sql);
			if ($result->num_rows > 0) {
			
				while($row = $result->fetch_assoc()) {
				echo '<p><span class="blink">◉  </span>  '.$row["final_aes_plastic_cost"].' &#8202;$ USD per 1 Kg of AES Plastic</p>'  ; 
				}
					} else {
						echo "0 results";
					}
		?>

		<p style="font-size: 0.85em; margin-top:20px;">This is the current price for the <a href="offsets.php" target="_blank">sale of AES plastic offsets</a>.</p>
	</div>



	<div class="reg-content-block" id="block2">
		<div class="opener-header">
			<div class="opener-header-text">
				<h4>Authenticated Ecobricks</h4>
				<h6>The archival chain of authenticated ecobricks.  Updated every six hours with the latest confirmed authentications.</h6>
				<div class="ecobrick-data"><p><span class="blink">⬤  </span> Data live</p></div><div class="ecobrick-data"><p>🟠 Historical Data pending transfer</p></div>
			</div>
			
			<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>

		</div>

		<div id="preclosed2">

			<div class="overflow">

				<table id="ecobricks" class="display" style="width:100%">
					<thead>
						<tr>
							<th style="max-width: 150px !important;">Brik</th>
							<th>Authenticated</th>
							<th>AES Plastic</th>
							<th>Maker</th>
							<th>Value</th>
							<th>CO2e</th>
							<th>🔎 Serial</th>
						</tr>
					</thead>
					<!--<tfoot>
						<tr>
							<<th style="max-width: 150px !important;">Brik</th>
							<th>Logged</th>
							<th>AES Plastic</th>
							<th>Value</th>
							<th>CO2e</th>
							<th>Serial</th>
						</tr>
					</tfoot>-->
				</table>
			</div>
		</div>
	</div>



	<div class="reg-content-block" id="block1">
		<div class="opener-header">
			<div class="opener-header-text">
				<h4>Blocks & Transactions</h4>
				<h6>The full chain transactions chronicling the generation, exchange and destruction of brikcoins.</h6>
				<div class="ecobrick-data"><p><span class="blink">⬤  </span> Data live & current</p></div>
			</div>
		
			<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>

		</div>

		<div id="preclosed1">

			<div class="overflow">
				<table id="brikchain" class="display" style="width:100%">
					<thead>
						<tr>
							
						<th>🔎 Transaction</th>
						<th>Issued</th>
							<th>Sender</th>	
							<th>Recipient</th>	
							<th>Type</th>
							<th>Block</th>
							<th>Shard</th>
							<th>Ecobrick</th>

						</tr>
					</thead>
					<!--<tfoot>
						<tr>
						<th>Transaction</th>
						<th>Issued</th>
							<th>Sender</th>	
							<th>Type</th>
							<th>Block</th>
							<th>Shard</th>
							<th>Ecobrick</th>
						</tr>
					</tfoot>-->
				</table>
			</div>
		</div>
	</div>


	<div class="reg-content-block" id="block3">
				
		<div class="opener-header">
			
			<div class="opener-header-text">
			<h4>AES Plastic Valuations</h4>
	
			<h6>Each year the value of 1 Kg of AES plastic is determined by the ecobricks authenticated in that year.  The net weight of the authenticated plastic is divided by the GEA's expenses maintaining the blockchain (see the GEA's yearly <a href="open-books.php">Open Books</a> financial accounting)</h6>
			<div class="ecobrick-data"><p><span class="blink">⬤  </span> Brikcoin Data live</p></div>
			<div class="ecobrick-data"><p><span class="blink">⬤  </span> OpenBooks Accounting live</p></div><div class="ecobrick-data"><p>🟠 Ecobrick weight data estimated (pending archival transfer)</p></div>
			</div>
			<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>

		</div>

		<div id="preclosed3">

			<div class="overflow">

			<?php

			$sql = "SELECT * FROM vw_detail_sums_by_year Order by `year` DESC;";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			
				echo'<table id="brikchain" class="display"><tr>
				<th>Year</th>
				<th>BRK Generated</th>
				<!--<th>Authenticated</th>-->
				<th>Calculated AES plastic</th>
				<!--<th>Tallied AES Plastic</th>-->
				<th>GEA Year Expenses</th>
				<th>1kg AES Value</th></tr>';
			
			// output data of each row
			while($row = $result->fetch_assoc()) {
				
				echo "<tr>
				<td>".$row["year"]."</td>
				<td>".$row["total_brk"]."&#8202;ß</td>
				<!--<td>".$row["brick_count"]." ecobricks</td>-->
				<td>".$row["calculated_weight"]."&#8202;Kg</td>
				<!--<td>".$row["weight"]."&#8202;Kg</td>-->
				<td>".$row["tot_usd_exp_amt"]."&#8202;$ USD</td>
				<td>".$row["final_aes_plastic_cost"]."&#8202;$ USD</td>
				</tr>"; 
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
			?>
			</div>
		</div>
	</div>

	<div class="reg-content-block" id="block4">
				
		<div class="opener-header">
			<div class="opener-header-text">
				<h4>Total Brikcoin Pool</h4>
				<h6>Running and yearly totals of brikcoins generated, destroyed and in circulation. </h6>
				<div class="ecobrick-data"><p><span class="blink">⬤  </span> Data live & current</p></div>
			</div>
		
			<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>

		</div>

		<div id="preclosed4">

			<div class="overflow">
	

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
					echo "Failed to connect to database";
				}

			?>
			</div>
		</div>
	</div>


	<?php 	$conn->close();?>



			
	<div class="page-paragraph">   
                 <div class="row">
                
                    <div class="main2">
                         <h3>More Accounting!</h3>
                        
                         <p>Who said accounting is boring?  We believe that accounting done right is far more than just financials.  Every year we not only count our coins, but also the very species we host in our spaces We also account for our give and take of plastic and CO2.</p>

						<p>  🟢 All our financial transaction are maintained in our <a href="open-books.php">Open Books</a> accounting system.</p> 

						<p>  🟢 Our ecological accounting is disclosed separately in our <a href="regenreports">annual regenerative reports</a>.</p>

						
                 	</div>

                    <div class="side2">
                        <br><img src="../icons/eco-accounting-icon-from-ecobricks-org.svg?v=5" width="77%" padding="15%" alt="ecological accounting" loading="lazy" alt="financial and ecological accounting.">
                    </div>
                </div>
				<p>Our accounting is grounded in the principles of Earthen Ethics.  Learn more about our principles of <a href="https://earthen.io/energy/" target="_blank">financial and ecological energy management, ecological accounting and disclosure.</p><br><br>
                    
                        <a class="action-btn" href="principles.php">🚀 Our Principles</a>
                    	<p style="font-size: 0.85em; margin-top:20px;">Our Accounting is guided by our regenerative principles</a>
					</p>
                        
			</div>
			<br>
	</DIV>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>


<!-- CUSTOM PAGE SCRIPTS-->


<!-- This script is for pages that use the accordion content system-->
<script src="../accordion-scripts.js?v=2" defer></script>

</div>
</body>
</html>

