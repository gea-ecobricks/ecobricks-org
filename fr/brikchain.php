<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='1.64';?>
<?php $page='brikchain';?>

<?php require_once ("../includes/brikchain2-inc.php");?>


<!--TOP PAGE BANNER-->


<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">Le Brikchain</div>
	    <div class="splash-sub" data-lang-id="002-splash-subtitle">Une blockchain de preuve de valeur manuelle basée sur la séquestration du plastique de la biosphère.</div>
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
				
				<p data-lang-id="005b-second-page-paragraph">Use the tools below to browse the Brikchain.  You can also view our <a href="open-books.php">Open Books</a> financial accounting.  To learn how the combination of our financial and <a href="regen-reports.php">ecological accounting</a> generates the price per Kg of AES sales see our <a href="offsets.php">offsetting page</a>.</p> </p>
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

		<p style="font-size: 0.85em; margin-top:20px;" data-lang-id="006-current-pricing">This is the current price for the <a href="offsets.php" target="_blank">sale of AES plastic offsets</a>.</p>
	</div>



	<div class="reg-content-block" id="block2">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="007-authenticated-header">Authenticated Ecobricks</h4>
            <h6 data-lang-id="008-authenticated-description">The archival chain of authenticated ecobricks.  Updated every six hours with the latest confirmed authentications.</h6>
            <div class="ecobrick-data"><p data-lang-id="009-data-live"><span class="blink">⬤  </span> Data live</p></div>
            <div class="ecobrick-data"><p data-lang-id="010-historical-data">🟠 Historical Data pending transfer</p></div>
        </div>
  


			<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>

		</div>

		<div id="preclosed2">

			<div class="overflow">

				<table id="ecobricks" class="display" style="width:100%">
					<thead>

						<tr>
							<th style="max-width: 150px !important;" data-lang-id="011-brik-header">Brik</th>
							<th data-lang-id="012-authenticated-header">Authenticated</th>
							<th data-lang-id="013-aes-plastic-header">AES Plastic</th>
							<th data-lang-id="014-maker-header">Maker</th>
							<th data-lang-id="015-value-header">Value</th>
							<th data-lang-id="016-co2e-header">CO2e</th>
							<th data-lang-id="017-serial-header">🔎 Serial</th>
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
            <h4 data-lang-id="018-blocks-transactions-header">Blocks & Transactions</h4>
            <h6 data-lang-id="019-full-chain-transactions-subheader">The full chain transactions chronicling the generation, exchange, and destruction of brikcoins.</h6>
            <div class="ecobrick-data"><p data-lang-id="020-data-live-current"><span class="blink">⬤  </span> Data live & current</p></div>
        </div>
    
        <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
    </div>

    <div id="preclosed1">
        <div class="overflow">
            <table id="brikchain" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th data-lang-id="021-transaction-header">🔎 Transaction</th>
                        <th data-lang-id="022-issued-header">Issued</th>
                        <th data-lang-id="023-sender-header">Sender</th>    
                        <th data-lang-id="024-recipient-header">Recipient</th>    
                        <th data-lang-id="025-type-header">Type</th>
                        <th data-lang-id="026-block-header">Block</th>
                        <th data-lang-id="027-shard-header">Shard</th>
                        <th data-lang-id="028-ecobrick-header">Ecobrick</th>
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
				<h4 data-lang-id="029-aes-plastic-valuations-header">AES Plastic Valuations</h4>
				<h6 data-lang-id="030-aes-value-description">Each year the value of 1 Kg of AES plastic is determined by the ecobricks authenticated in that year.  The net weight of the authenticated plastic is divided by the GEA's expenses maintaining the blockchain (see the GEA's yearly <a href="open-books.php" data-lang-id="031-open-books-link">Open Books</a> financial accounting)</h6>
				<div class="ecobrick-data"><p data-lang-id="032-brikcoin-data-live"><span class="blink">⬤  </span> Brikcoin Data live</p></div>
				<div class="ecobrick-data"><p data-lang-id="033-openbooks-accounting-live"><span class="blink">⬤  </span> OpenBooks Accounting live</p></div>
				<div class="ecobrick-data"><p data-lang-id="034-ecobrick-weight-estimated">🟠 Ecobrick weight data estimated (pending archival transfer)</p></div>
			</div>
			<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
		</div>


		<div id="preclosed3">

			<div class="overflow">

			<?php

			$sql = "SELECT * FROM vw_detail_sums_by_year Order by `year` DESC;";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			
				echo'<table id="brikchain" class="display">
				<tr>
					<th data-lang-id="035-year-header">Year</th>
					<th data-lang-id="036-brk-generated-header">BRK Generated</th>
					<!-- <th>Authenticated</th> -->
					<th data-lang-id="037-calculated-aes-plastic-header">Calculated AES plastic</th>
					<!-- <th>Tallied AES Plastic</th> -->
					<th data-lang-id="038-gea-year-expenses-header">GEA Year Expenses</th>
					<th data-lang-id="039-1kg-aes-value-header">1kg AES Value</th>
				</tr>
			';
			
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
            <h4 data-lang-id="040-total-brikcoin-pool-header">Total Brikcoin Pool</h4>
            <h6 data-lang-id="041-running-yearly-totals-description">Running and yearly totals of brikcoins generated, destroyed and in circulation. </h6>
            <div class="ecobrick-data"><p data-lang-id="042-data-live-current"><span class="blink">⬤  </span> Data live & current</p></div>
        </div>        
        <button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
    </div>

		<div id="preclosed4">

			<div class="overflow">
	

				<?php

				$sql = "SELECT * FROM vw_sum_brk_total ;";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

					echo'<table id="brikchain" class="display" ><tr><th>From</th><th>To</th><th>Total BRK Generated</th><th>Total BRK Destroyed</th><th>Total Brikcoins</th></tr>';

				// output data of each row  data-lang-id="042b-brik-total-table"
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


<br><br>
			
	<div class="page-paragraph-reg">   
    <div class="row">
        <div class="main2">
            <h3 data-lang-id="043-more-accounting-header">More Accounting!</h3>
            
            <p data-lang-id="044-accounting-intro">Who said accounting is boring?  We believe that accounting done right is far more than just financials.  Every year we not only count our coins, but also the very species we host in our spaces. We also account for our give and take of plastic and CO2.</p>

            <p data-lang-id="045-financial-transactions">🟢 All our financial transaction are maintained in our <a href="open-books.php" data-lang-id="046-open-books-link">Open Books</a> accounting system.</p> 

            <p data-lang-id="047-ecological-accounting">🟢 Our ecological accounting is disclosed separately in our <a href="regenreports" data-lang-id="048-annual-regen-reports-link">annual regenerative reports</a>.</p>
        </div>

        <div class="side2">
            <br><img src="../icons/eco-accounting-icon-from-ecobricks-org.svg?v=5" width="77%" padding="15%" alt="ecological accounting" loading="lazy">
        </div>
    </div>
    <p data-lang-id="049-earthen-ethics">Our accounting is grounded in the principles of Earthen Ethics.  Learn more about our principles of financial and ecological energy management, ecological accounting and disclosure.</p><br><br>
    
    <a class="action-btn" href="principles.php" data-lang-id="051-our-principles-btn">🚀 Our Principles</a>
    <p style="font-size: 0.85em; margin-top:20px;" data-lang-id="052-guided-by-principles">Our Accounting is guided by our regenerative principles</p>
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

