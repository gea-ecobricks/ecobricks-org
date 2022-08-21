<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->


<?php require_once ("includes/open-books-inc.php");?>

<style>
	.live-data 
	
	{
		font-size: 1.5em;
font-family: "courier new, monospace" !important;
color: #222;
line-height: 1.3;
font-weight: 300;
background: #fbe9c8;
padding: 20px;
border-radius: 10px;
margin: 12px;
}

.blink {
            animation: blinker 1.5s linear infinite;
            color: #00AA44;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
				
            }
        }

</style>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page
<?php require_once ("under-construction.php");?>-->

<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>GEA Open Books</div>
		<div class="splash-sub">The Global Ecobrick Alliance's Financial Accounting</div>
	</div>
	<div class="splash-image"><img src="https://www.ecobricks.org/pngs/openbooks.png" style="width: 80%;"></div>	
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
				
				<br><p>As a for-Earth enterprise we account and disclose all of our finances to meet out our not-for-profit and net-green mandates.</p>
			</div>

			<div class="page-paragraph">
				  
				<p>The <a href="about">Global Ecobrick Alliance</a>  is an Earth Enterprise.  This means that we that follows the principles of <a href="https://earthen.io/imagine">ecological contribution</a> in the management of our finances and ecological impacts to ensure we are of benefit.  It also means, that for full transparency and awareness, our financial and ecological accounting is disclosed for public review and audit.</p>

				<p>Here on this page our OpenBooks system provides the disclosure of our finances.  See our <a href="regen-reports">Regen Reporting</a> for ecological accounting.</p>
				
				<p>Our financial accounting is joined with our blockchain accounting to generate our annual cost per 1Kg of Authenticated Ecobrick Sequestered plastic (<a href="/ase">AES Plastic</a> for short).  This price is determined by dividing the total amount of plastic authenticated on the <a href="brikcoins">brikcoin blockchain</a> each year by the total operational costs incurred that year by the GEA.</p>				
			</div>	
			
			<?php

	$sql = "SELECT * FROM vw_detail_sums_by_year  WHERE year = 2021;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<div class="live-data">';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo '<p><span class="blink">◉  </span>  '.$row["final_aes_plastic_cost"].' &#8202;$ USD per 1 Kg of AES Plastic</p>'  ; 
		}
		
	} else {
		echo "0 results";
	}
	?>
	<p style="font-size: 0.85em; margin-top:20px;">This is the current price for the <a href="https://gobrik.com/#offset" target="_blank">sale of AES plastic offsets</a>.</p></div>



		</div>
		

		<div class="side">

			<div id="side-module-desktop-only">
				<img src="webp/gea-logo-400px.webp" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Earth Enterprise</h4>
				<h5>The Global Ecobrick Alliance is a not-for-profit for-Earth enterprise dedicated to accelerating plastic transition.  All our revenue and expenses, including income summaries can be found here in our in-house developed, Open Books system.</h5><br>
				<a class="module-btn" href="/about">About the GEA</a>
                <br><br>
				
				<br>
			</div>   

			
         
		</div>
	</div>



	<div class="reg-content-block" id="block3">
				
		<div class="opener-header">
			
			<div class="opener-header-text">
				<h4>Live Revenues</h4>
				<h5>A full listing of the GEA's ongoing revenue transactions.</h5>
				<div class="ecobrick-data"><p><span class="blink">⬤  </span> Data live & current</p></div>
			</div>
			<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>

		</div>

		<div id="preclosed3">

			<div class="page-paragraph">	
				<h6>All the GEA Revenue transactions</h6>
				
			</div>
			<div class="overflow">
				<table id="revenues" class="display" style="width:100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Date</th>
							<th>Sender</th>
							<th>Category</th>
							<th>Tran Name</th>
							<th>Amount USD</th>
							<th>Final Amt</th>
							<th>Type</th>
						</tr>
					</thead>
					<tfoot>
						<tr> 
							<th>ID</th>
							<th>Date</th>
							<th>Sender</th>
							<th>Category</th>
							<th>Tran Name</th>
							<th>Amount USD</th>
							<th>Final Amt</th>
							<th>Type</th>
						</tr>
					</tfoot>
				</table>
				<br><br>
			</div>
		</div>
	</div>


	<div class="reg-content-block" id="block4">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Live Expenses</h4>
						<h5>A full listing of the GEA's ongoing expense transactions.</h5>
						<div class="ecobrick-data"><p><span class="blink">◉  </span> Data live & current</p></div>
					</div>
					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
		
				</div>
		
				<div id="preclosed4">
		
					<div class="page-paragraph">	
						<h6>All the GEA Expense transactions</h6>
						
					</div>
					<div class="overflow">
						<table id="expenses" class="display" style="width:100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Date</th>
									<th>Category</th>
									<th>Receiver</th>
									<th>Tran Name</th>
									<th>Amount USD</th>
									<th>Final Amt</th>
									<th>Type</th>
								</tr>
							</thead>
							<tfoot>
								<tr> 
									<th>ID</th>
									<th>Date</th>
									<th>Category</th>
									<th>Receiver</th>
									<th>Tran Name</th>
									<th>Amount USD</th>
									<th>Final Amt</th>
									<th>Type</th>
								</tr>
							</tfoot>
						</table>
						<br><br>
					</div>
				</div>
			</div>



	



	<div class="reg-content-block" id="block1">
				
		<div class="opener-header">
			
			<div class="opener-header-text">
				<h4>2022 Current Year Expenses</h4>
				<h5>A summary of the GEA's current year revenue.</h5>
				<div class="ecobrick-data"><p><span class="blink">◉  </span> Data live & current</p></div>
			</div>
			<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>

		</div>

		<div id="preclosed1">


    		<div class="overflow">
		
				<?php

				$sql = "SELECT * FROM vw_exp_by_year_category  WHERE year = 2022 ORDER BY expense_category;";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				
					echo'<table id="brikchain" class="display"><tr><th>Expense</th><th>Transaction count</th><th>Year Total</th></tr>';
				
				// output data of each row
				while($row = $result->fetch_assoc()) {
					
					echo "<tr><td>".$row["expense_category"]."</td><td>".$row["no_of_transactions"]."</td><td>".$row["total_usd"]."&#8202;$ USD</td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}
				
				?>
				<br>

				<?php

				$sql = "SELECT * FROM vw_tot_exp_by_year WHERE year = 2022;";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

					echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Total Transactions</th><th>Total Expenses</th></tr>';

				// output data of each row
				while($row = $result->fetch_assoc()) {
					
					echo "<tr><td>".$row["year"]."</td><td>".$row["total_no_of_exp_transactions"]."</td><td>".$row["total_exp_usd_amount"]."&#8202;$ USD</td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}

				?>
				<br><br>
			</div>
		</div>
	</div>


	<div class="reg-content-block" id="block2">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>2022 Current Year Revenue</h4>
						<h5>A summary of the GEA's current year revenue.</h5>
						<div class="ecobrick-data"><p><span class="blink">⬤  </span> Data live & current</p></div>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
		
				</div>
		
				<div id="preclosed2">
		
		
					<div class="overflow">

						<?php

						$sql = "SELECT * FROM vw_rev_by_year_category  WHERE year = 2022 ORDER BY revenue_category ;";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						
							echo'<table id="brikchain" class="display"><tr><th>Category</th><th>Transactions</th><th>Year Total</th></tr>';
						
						// output data of each row
						while($row = $result->fetch_assoc()) {
							
							echo "<tr><td>".$row["revenue_category"]."</td><td>".$row["no_of_transactions"]."</td><td>".$row["total_usd"]."&#8202;$ USD</td></tr>";
							}
							echo "</table>";
						} else {
							echo "0 results";
						}
						
						?>
						<br>

						<?php

						$sql = "SELECT * FROM vw_tot_rev_by_year WHERE year = 2022;";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {

							echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Total Transactions</th><th>total Revenue</th></tr>';

						// output data of each row
						while($row = $result->fetch_assoc()) {
							
							echo "<tr><td>".$row["year"]."</td><td>".$row["total_no_of_rev_transactions"]."</td><td>".$row["total_rev_usd_amount"]."&#8202;$ USD</td></tr>";
							}
							echo "</table>";
						} else {
							echo "0 results";
						}

					?>	
					<br><br>
			</div>
		</div>
	</div>





	

			<div class="reg-content-block" id="block5">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Year Summaries</h4>
						<h5>OpenBooks totals from 2019 to 2022.</h5>
					</div>
					<button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
		
				</div>
		
				<div id="preclosed5">
					<br><br>
						
							
					<div class="overflow">

						
					<?php

					$sql = "SELECT * FROM vw_tot_exp_by_year Order by `year` DESC ;";

					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					
						echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Transactions</th><th>Expenses</th></tr>';
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
						
						echo "<tr><td>".$row["year"]."</td><td>".$row["total_no_of_exp_transactions"]."</td><td>".$row["total_exp_usd_amount"]."&#8202;$ USD</td></tr>";
						}
						echo "</table>";
					} else {
						echo "0 results";
					}

					?>
					<br><br>

					<?php

					$sql = "SELECT * FROM vw_tot_rev_by_year Order by `year` DESC;";

					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

						echo'<table id="brikchain" class="display"><tr><th>Year</th><th>Transactions</th><th>Revenues</th></tr>';

					// output data of each row
					while($row = $result->fetch_assoc()) {
						
						echo "<tr><td>".$row["year"]."</td><td>".$row["total_no_of_rev_transactions"]."</td><td>".$row["total_rev_usd_amount"]."&#8202;$ USD</td></tr>";
						}
						echo "</table>";
					} else {
						echo "0 results";
					}

					?>
					<br><br>
				</div>
		</div>
	</div>



	<div class="reg-content-block" id="block6">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Historical AES Plastic Values</h4>
						<h5>Totals and values from 2019 to 2022.</h5>
					</div>
					<button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
		
				</div>
		
				<div id="preclosed6">
					<br><br>
						
					<div class="page-paragraph">
					
						<p>We use our data from the last year to calculate the cost per Kg of plastic offsets for this year.</p>

						<p>It works like this: Last year the Global Ecobrick Alliance incurred $24,483.24  expenses in order to authenticate 10,176.38  Kg AES of ecobricked plastic. That works out a cost of 2.41$ USD per Kg in maintaining the block chain and authentication system . This sets our valuation of the price per Kg of AES plastic for 2022.
						.</p>
							
					</div>		
							
					<div class="overflow">

					<?php

	$sql = "SELECT * FROM vw_detail_sums_by_year WHERE year > 2018 Order by `year` DESC ;";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>BRK Generated</th><th>Total AES plastic</th><th>GEA Year Expenses</th><th>1kg AES Value</th></tr>';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td>".$row["year"]."</td><td>".$row["total_brk"]."&#8202;ß</td><td>".$row["calculated_weight"]."&#8202;Kg</td><td>".$row["tot_usd_exp_amt"]."&#8202;$ USD</td><td>".$row["final_aes_plastic_cost"]." &#8202;$ USD</td></tr>"; 
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	?><br><br>
					</div>
	</div>
</div>



<?php $conn->close(); ?>

	<br><br> 

	<div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h3>More Accounting!</h3>
                        
                         <p>Who said accounting is boring?  We believe that accounting done right is far more than just financials.  Every year we not only count our coins, but also the very species we host in our space, as well as our give and take of plastic and CO2.  We also host the <a href="brikcoins.php">Brikcoin manual blockchain</a>, which we provide a full, live digital ledger.</a></p>
						 <p>  <span class="blink">◉ </span>Brikcoin transactions are recorded separately on the <a href="brikchain.php">Brikchain Explorer.</a></p> 

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






	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

	<!--FOOTER ENDS HERE-->

	<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="accordion-scripts.js" defer></script>


</div>
</body>
</html>

