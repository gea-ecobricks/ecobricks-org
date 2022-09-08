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

<?php include 'ecobricks_env.php';?> 

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
				<p>Search and explore the full chain of authenticated ecobricks, blocks and transactions that underly the brikcoin manual blockchain.</p>
			</div>

			<div class="page-paragraph">
				  
				<p>The <a href="brikchain.php">Brikchain is based on the ecological value of plastic <a href="sequest">sequestered</a> out of the biosphere and out of industry.  Every ecobrick that is authenticated on the <a href="/gobrik">GoBrik platform</a> is permanently recorded on the <a href="brikcoins">Brikcoin Manual Blockchain</a>.  With each authentication, the corresponding value of sequestered plastic (<a href="aes">AES plastic</a>) is issued in brikcoins</a>.  Each issuance is made through a block of transactions that are recorded sequentially.  This chain of blocks, transaction and ecobricks is fully searchable here.  
				
				<p>Use the tools below to browse the Brikchain.  You can also view our <a href="open-books.php">Open Books</a> financial accounting.</p>
			</div>




		</div>
		

		<div class="side">

		


<?php

			$sql = "SELECT * FROM vw_sum_brk_total ;";

			$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						echo'<div id="side-module-desktop-mobile">';

					// output data of each row
					while($row = $result->fetch_assoc()) {
						
						 
						echo '<img src="svgs/aes-brk.svg?v=2" style="width:70%; margin-top:25px;"><p style="font-size: 1.2em; margin-top:5px;">Current value of 1 Brikcoin:</p>
						<p><span class="courier" style="font-size: 1.5em;"><span class="blink">⬤</span>' .$row["plastic_value_kg_per_brk"].'Kg AES</span></p>' ; 
						echo '<p style="font-size: 1.2em; margin-top:10px;">Total Circulation:<br><b><span class="courier">'.$row["net_brk_in_circulation"].'&#8202;BRK</b></span></p>' ; 
						echo '<p style="font-size: 0.9em; margin-top:10px;">Unlike other currencies brikcoins <a href="/brikcoins.php">(BRK / ß)</a> are based in ecological value as measured in kilograms of authenticated ecobrick sequestered (<a href="sequestered.php">AES</a>)plastic.</p>
						<p style="color: white; font-size: 0.8em; margin-top:10px;"> Updated: 2022-09-07T09:14:13+00:00</p></div>' ; 
					
						} 
						
					} else {
						echo "Failed to connect to Brikchain</div>";
					}
					?>
         
		</div>

	</div>


	<div class="reg-content-block" id="block1">
		<div class="opener-header">
			<div class="opener-header-text">
				<h4>Blocks & Transactions</h4>
				<h6>An overview of all brikcoins generated and exchanged.</h6>
				<div class="ecobrick-data"><p><span class="blink">⬤  </span> Data live & current</p></div>
			</div>
		
			<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>

		</div>

		<div id="preclosed1">

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
		</div>
	</div>



	<div class="reg-content-block" id="block2">
		<div class="opener-header">
			<div class="opener-header-text">
				<h4>Authenticated Ecobricks</h4>
				<h6>All the ecobricks authenticated and archived on chain.</h6>
				<div class="ecobrick-data"><p>🟠 Not yet live, data still in migration</p></div>
			</div>	
		
			<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>

		</div>

		<div id="preclosed2">

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
		</div>
	</div>

	<div class="reg-content-block" id="block3">
				
		<div class="opener-header">
			
			<div class="opener-header-text">
			<h4>AES Plastic Valuations</h4>
	
			<h6>Each year the value of 1 Kg of AES plastic is determined by the ecobricks authenticated in that year.  The net weight of the authenticated plastic is divided by the GEA's expenses maintaining the block chain (see the GEA's yearly <a href="open-books.php">Open Books</a> financial accounting)</h6>
			<div class="ecobrick-data"><p>🟠 Data still in migration</p></div>
			</div>
			<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>

		</div>

		<div id="preclosed3">

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
			</div>
		</div>
	</div>

	<div class="reg-content-block" id="block4">
				
		<div class="opener-header">
			<div class="opener-header-text">
				<h4>Total Brikcoin Pool</h4>
				<h6>Running and yearly brikchain totals. </h6>
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


	<br><br> 

	<div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h3>More Accounting!</h3>
                        
                         <p>Who said accounting is boring?  We believe that accounting done right is far more than just financials.  Every year we not only count our coins, but also the very species we host in our spaces We also account for our give and take of plastic and CO2.</p>

						 <p>  <span class="blink">◉ </span>All our financial transaction are maitained in <a href="brikchain.php">Our Open Books.</a></p> 

						<p>	<span class="blink">◉ </span>Our ecological accounting is disclosed separately in our <a href="regenreports">annual regenerative reports</a>.</p>

						<p>Our accounting is grounded in the principles of Earthen Ethics.  Learn more about our principles of <a href="https://earthen.io/energy/" target="_blank">financial and ecological energy management, ecological accounting and disclosure.</p><br><br>
                    
                        <a class="action-btn" href="principles.php">🚀 Our Principles</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Our Accounting is guided by our regenerative principles</a></p>
                        
                 </div>

                    <div class="side2">
                        <br><img src=" https://ecobricks.org/en/icons/eco-accounting-icon-from-ecobricks-org.svg?v=5" width="77%" padding="15%" alt="ecological accounting" loading="lazy" alt="financial and ecological accounting.">
                    </div>
                </div>
             </div>






</DIV>



<!-- This script is for pages that use the accordion content system-->
<script src="accordion-scripts.js" defer></script>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

	<!--FOOTER ENDS HERE-->

</div>
</body>
</html>

