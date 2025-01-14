<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='2.33';?>
<?php $page='openbooks';?>

<?php require_once ("../includes/openbooks-inc.php");?>


<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">Our Open Books</div>
		<div class="splash-sub" data-lang-id="002-splash-subtitle">The Global Ecobrick Alliance's Financial Accounting</div>
	</div>
	<div class="splash-image" data-lang-id="003-splash-image-alt"><img src="../pngs/openbooks.png" style="width: 80%;" alt="Our Open Books financial accounting disclosure system">
	</div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->


<?php include '../gobrikconn_env.php';?>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph" >
                <p>🚧 IMPORTANT NOTICE 🚧  This page and its data are thus underconstruction. As of September 2024, our accounting was paused as we relaunched GoBrik and our Open Books on a new proprietary database.  Also as of January 2025 we are shifting from USD to Indonesian Rupiahs for our accounting.</p>

			</div>

			<div class="page-paragraph">

                <p data-lang-id="004-lead-page-paragraph">As a for-Earth enterprise we account and disclose all of our finances to meet our not-for-profit and net-green mandates.</p>
				  
				<p data-lang-id="005-first-page-paragraph">The <a href="about.php">Global Ecobrick Alliance</a>  is an Earth Enterprise.  This means that we that follows the principles of <a href="principles.php">Earthen ethics</a> in the management of our finances and our ecological impacts to ensure that both are of net benefit.  It also means that for everyone's awareness, our financial and ecological accounting are both disclosed publicly.</p>

				<p data-lang-id="006-second-page-paragraph">On this page you can review the disclosure of our finances.  We call this our Open Books accounting system.  For the disclosure of our ecological accounting see our <a href="regen-reports.php">Regen Reporting</a>.  To learn how the combination of both accountings generates the price per Kg for our plastic offsets sales see our <a href="offsets.php">offsetting page</a>.</p>
				
				<!-- <p>Our financial accounting has two parts: our regular fiat currency accounting and our brikcoin accounting.  The combination of the two generates our annual cost per kilogram of Authenticated Ecobrick Sequestered plastic (<a href="/ase">AES Plastic</a> for short).  This price is determined by dividing the total amount of plastic authenticated on the <a href="brikcoins.php">brikcoin blockchain</a> each year by the total operational costs incurred that year by the GEA.  This is price for which 1 kg of AES plastic are purchased as <a href="offsets.php">offsets credits</a> on our Gobrik app.</p>   -->
				
			</div>
		</div>
			
		<div class="side">

			<?php include 'side-modules/about-gea.php';?>
			
		</div>

	</div>



	<!--LIVE DATA-->
	<?php
// Include the GoBrik database connection credentials
require_once '../gobrikconn_env.php';

try {
    // Query the view to fetch all rows for aggregation
    $sql = "SELECT year,
                   brick_count,
                   total_brk,
                   weight,
                   tot_usd_exp_amt,
                   tot_usd_rev_amt,
                   final_aes_plastic_cost
            FROM vw_detail_sums_by_year";

    $result = $gobrik_conn->query($sql);

    if (!$result || $result->num_rows === 0) {
        throw new Exception("Failed to retrieve data or no data available.");
    }

    // Initialize sum variables
    $sum_ecobricks = 0;
    $sum_brikcoins = 0;
    $sum_weight = 0;
    $sum_expenses = 0;
    $sum_revenue = 0;
    $sum_costs = 0;
    $row_count = 0;

    // Aggregate data
    while ($row = $result->fetch_assoc()) {
        // Normalize values by removing commas and converting to float
        $sum_ecobricks += (float)str_replace(',', '', $row['brick_count']);
        $sum_brikcoins += (float)str_replace(',', '', $row['total_brk']);
        $sum_weight += (float)str_replace(',', '', $row['weight']);
        $sum_expenses += (float)str_replace(',', '', $row['tot_usd_exp_amt']);
        $sum_revenue += (float)str_replace(',', '', $row['tot_usd_rev_amt']);
        $sum_costs += (float)str_replace(',', '', $row['final_aes_plastic_cost']);
        $row_count++;
    }

    // Calculate average cost
    $avg_cost = $row_count > 0 ? $sum_costs / $row_count : 0;

    // Calculate AES rolling cost
    $aes_rolling = $sum_weight > 0 ? $sum_expenses / $sum_weight : 0;

    // Output the HTML
    echo '
    <div class="live-data" style="margin-top:30px;display:flex;flex-flow:row"">
        <div id="aes-image" style="width:15%">
                <img src="../svgs/aes-brk-vertical.svg?v=2" style="width:95%; margin-top:20px;"><p style="font-size: 1.0em; margin-top:5px;">
            </div>
        <div id="brikchain-totals">
            <p><span class="blink">◉  </span> ' . number_format($aes_rolling, 2) . ' &#8202;$ USD per 1 Kg of AES Plastic</p>
            <ul>
                <li>Total ecobricks authenticated: ' . number_format($sum_ecobricks) . '</li>
                <li>Total Brikcoins Generated: ' . number_format($sum_brikcoins) . '&#8202;ß</li>
                <li>Total Authenticatd Sequestered Plastic: ' . number_format($sum_weight, 2) . '&#8202;kg</li>
                <li>Total System Expenses: $' . number_format($sum_expenses, 2) . '&#8202;USD</li>

                <!--
                <li>Total AES Sales: $' . number_format($sum_revenue, 2) . '</li>
                <li>Avg AES Price: $' . number_format($avg_cost, 2) . '</li>-->
            </ul>
            <p style="font-size: 0.85em; margin-top:20px;" data-lang-id="006-current-pricing">
                The price per kg of <a href="offset.php">of AES plastic offsets</a> is a function of system authenticataed plastic and GEA system expenses.
            </p>
        </div>
    </div>';
} catch (Exception $e) {
    // Handle any errors and output a friendly message
    echo '<p>Error: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
}
?>



	<div class="reg-content-block" id="block3">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="009-live-revenues-title">Live Revenues</h4>
            <h5 data-lang-id="010-live-revenues-subtitle">A full listing of the GEA's ongoing revenue transactions.</h5>
            <div class="ecobrick-data"><p data-lang-id="010b-live-data"><span class="blink">⬤  </span> Data live & current</p></div>
        </div>
        <button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
    </div>
    <div id="preclosed3">
        <div class="page-paragraph">  
            <h6 data-lang-id="011-gea-revenue-transactions-header">All the GEA Revenue transactions</h6>
        </div>
        <div class="overflow">
            <table id="revenues" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th data-lang-id="012-id-column">ID</th>
                        <th data-lang-id="013-date-column">Date</th>
                        <th data-lang-id="014-sender-column">Sender</th>
                        <th data-lang-id="015-category-column">Category</th>
                        <th data-lang-id="016-tran-name-column">Transaction</th>
                        <th data-lang-id="017-amount-usd-column">Amount USD</th>
                        <th data-lang-id="018-amount-idr-column">Amount IDR</th>
                        <th data-lang-id="019-type-column">Type</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th data-lang-id="012-id-column">ID</th>
                        <th data-lang-id="013-date-column">Date</th>
                        <th data-lang-id="014-sender-column">Sender</th>
                        <th data-lang-id="015-category-column">Category</th>
                        <th data-lang-id="016-tran-name-column">Transaction</th>
                        <th data-lang-id="017-amount-usd-column">Amount USD</th>
                        <th data-lang-id="018-amount-idr-column">Amount IDR</th>
                        <th data-lang-id="019-type-column">Type</th>
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
						<h4 data-lang-id="021-live-expenses-title">Live Expenses</h4>
						<h5 data-lang-id="022-live-expenses-subtitle">A full listing of the GEA's ongoing expense transactions.</h5>
						<div class="ecobrick-data"><p data-lang-id="010b-live-data"><span class="blink">◉  </span> Data live & current</p></div>
					</div>
					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
		
				</div>
		
				<div id="preclosed4">
		
					<div class="page-paragraph">	
						<h6 data-lang-id="023-gea-expense-transactions-header">All the GEA Expense transactions</h6>
						
					</div>
					<div class="overflow">
						<table id="expenses" class="display" style="width:100%">
    <thead>
        <tr>
            <th data-lang-id="012-id-column">ID</th>
            <th data-lang-id="013-date-column">Date</th>
            <th data-lang-id="014-sender-column">Sender</th>
            <th data-lang-id="015-category-column">Category</th>
            <th data-lang-id="016-tran-name-column">Transaction</th>
            <th data-lang-id="017-amount-usd-column">Amount USD</th>
            <th data-lang-id="018-amount-idr-column">Amount IDR</th>
            <th data-lang-id="019-type-column">Type</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th data-lang-id="012-id-column">ID</th>
            <th data-lang-id="013-date-column">Date</th>
            <th data-lang-id="014-sender-column">Sender</th>
            <th data-lang-id="015-category-column">Category</th>
            <th data-lang-id="016-tran-name-column">Transaction</th>
            <th data-lang-id="017-amount-usd-column">Amount USD</th>
            <th data-lang-id="018-amount-idr-column">Amount IDR</th>
            <th data-lang-id="019-type-column">Type</th>
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
            <h4 data-lang-id="033-current-year-expenses-title">Current Year Expenses</h4>
            <h5 data-lang-id="034-current-year-expenses-summary">A summary of the GEA's current year expenses.</h5>
            <div class="ecobrick-data">
                <p data-lang-id="010b-live-data"><span class="blink">◉  </span> Data live & current</p>
            </div>
        </div>
        <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
    </div>

    <div id="preclosed1">
        <div class="overflow">
            <?php
            // Fetch expenses by year and category
            $sql = "SELECT * FROM vw_exp_by_year_category WHERE year = 2024 ORDER BY expense_category;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Expense</th>
                                <th>Transaction Count</th>
                                <th>Year Total (USD)</th>
                                <th>Year Total (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["expense_category"]}</td>
                            <td>{$row["no_of_transactions"]}</td>
                            <td>{$row["total_usd"]}&#8202;$ USD</td>
                            <td>{$row["total_idr"]} IDR</td>
                          </tr>";
                }
                echo '</tbody></table>';
            } else {
                echo "0 results";
            }
            ?>
            <br>

            <?php
            // Fetch total expenses for the year
            $sql = "SELECT * FROM vw_tot_exp_by_year WHERE year = 2024;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Total Transactions</th>
                                <th>Total Expenses (USD)</th>
                                <th>Total Expenses (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["year"]}</td>
                            <td>{$row["total_no_of_exp_transactions"]}</td>
                            <td>{$row["total_exp_usd_amount"]}&#8202;$ USD</td>
                            <td>{$row["total_exp_idr_amount"]} IDR</td>
                          </tr>";
                }
                echo '</tbody></table>';
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
            <h4 data-lang-id="036-current-year-revenue-title">Current Year Revenue</h4>
            <h5 data-lang-id="037-current-year-revenue-summary">A summary of the GEA's current year revenue.</h5>
            <div class="ecobrick-data">
                <p data-lang-id="010b-live-data"><span class="blink">⬤  </span> Data live & current</p>
            </div>
        </div>
        <button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
    </div>

    <div id="preclosed2">
        <div class="overflow">
            <?php
            // Fetch revenues by year and category
            $sql = "SELECT * FROM vw_rev_by_year_category WHERE year = 2024 ORDER BY revenue_category;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Transactions</th>
                                <th>Year Total (USD)</th>
                                <th>Year Total (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["revenue_category"]}</td>
                            <td>{$row["no_of_transactions"]}</td>
                            <td>{$row["total_usd"]}&#8202;$ USD</td>
                            <td>{$row["total_idr"]} IDR</td>
                          </tr>";
                }
                echo '</tbody></table>';
            } else {
                echo "0 results";
            }
            ?>
            <br>

            <?php
            // Fetch total revenues for the year
            $sql = "SELECT * FROM vw_tot_rev_by_year WHERE year = 2024;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Total Transactions</th>
                                <th>Total Revenue (USD)</th>
                                <th>Total Revenue (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["year"]}</td>
                            <td>{$row["total_no_of_rev_transactions"]}</td>
                            <td>{$row["total_rev_usd_amount"]}&#8202;$ USD</td>
                            <td>{$row["total_rev_idr_amount"]} IDR</td>
                          </tr>";
                }
                echo '</tbody></table>';
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
					<h4 data-lang-id="039-year-summaries-title">Year Summaries</h4>
					<h5 data-lang-id="040-year-summaries-description">OpenBooks totals from 2019 to current year.</h5>
				</div>

					<button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
		
				</div>
		
				<div id="preclosed5">
    <br><br>
    <div class="overflow">
        <?php
        // Fetch total expenses by year
        $sql = "SELECT * FROM vw_tot_exp_by_year ORDER BY `year` DESC;";
        $result = $gobrik_conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table id="brikchain" class="display">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Transactions</th>
                            <th>Expenses (USD)</th>
                            <th>Expenses (IDR)</th>
                        </tr>
                    </thead>
                    <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row["year"]}</td>
                        <td>{$row["total_no_of_exp_transactions"]}</td>
                        <td>{$row["total_exp_usd_amount"]}&#8202;$ USD</td>
                        <td>{$row["total_exp_idr_amount"]} IDR</td>
                      </tr>";
            }
            echo '</tbody></table>';
        } else {
            echo "No expense data available.";
        }
        ?>
        <br><br>

        <?php
        // Fetch total revenues by year
        $sql = "SELECT * FROM vw_tot_rev_by_year ORDER BY `year` DESC;";
        $result = $gobrik_conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table id="brikchain" class="display">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Transactions</th>
                            <th>Revenues (USD)</th>
                            <th>Revenues (IDR)</th>
                        </tr>
                    </thead>
                    <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row["year"]}</td>
                        <td>{$row["total_no_of_rev_transactions"]}</td>
                        <td>{$row["total_rev_usd_amount"]}&#8202;$ USD</td>
                        <td>{$row["total_rev_idr_amount"]} IDR</td>
                      </tr>";
            }
            echo '</tbody></table>';
        } else {
            echo "No revenue data available.";
        }
        ?>
        <br><br>
    </div>
</div>

		</div>
	</div>


	<div class="reg-content-block" id="block6">
    <div class="opener-header">
        <div class="opener-header-text" >
            <h4 data-lang-id="042-historical-aes-title">Historical AES Plastic Values</h4>
            <h5 data-lang-id="043-historical-aes-subtitle">Totals and values from 2019 to 2024.</h5>
        </div>
        <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
    </div>
    <div id="preclosed6">
        <br><br>
        <div class="page-paragraph">
            <p data-lang-id="044-aes-data-explanation">We use our data from the last year to calculate the cost per Kg of plastic offsets for this year.</p>
            <p data-lang-id="045-aes-example-explanation">For example, it works like this: In 2021 the Global Ecobrick Alliance incurred $24,483.24 expenses in order to authenticate 10,176.38 Kg AES of ecobricked plastic. That works out a cost of 2.41$ USD per Kg in maintaining the blockchain and authentication system. This set our valuation of the price per Kg of AES plastic in the year 2022.</p>
        </div>



							
					<div class="overflow">

					<?php

	$sql = "SELECT * FROM vw_detail_sums_by_year WHERE year > 2018 Order by `year` DESC ;";

	$result = $gobrik_conn->query($sql);

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



<?php $gobrik_conn->close(); ?>

	<br><br> 

	<div class="page-paragraph-reg">
    <div class="row">
        <div class="main2">
            <h3 data-lang-id="047-more-accounting-title">More Accounting!</h3>
            <p data-lang-id="048-accounting-intro">Who said accounting is boring?  We believe that accounting done right is far more than just financials.  Every year we not only count our coins, but also the very species we host in our space, as well as our give and take of plastic and CO2.  We also host the <a href="brikcoins.php">Brikcoin manual blockchain</a>, which we provide a full, live digital ledger.</p>
            <p data-lang-id="050-brikcoin-transactions"> <span class="blink">◉ </span>Brikcoin transactions are recorded separately on the <a href="brikchain.php">Brikchain Explorer.</a></p> 

            <p data-lang-id="052-ecological-accounting-disclosure"> <span class="blink">◉ </span>Our ecological accounting is disclosed separately in our <a href="regenreports">annual regenerative reports</a>.</p>

            <p data-lang-id="054-earthen-ethics-principles">Our accounting is grounded in the principles of Earthen Ethics.  Learn more about our principles of <a href="https://earthen.io/energy/" target="_blank">financial and ecological energy management, ecological accounting and disclosure.</a></p><br><br>
            <a class="action-btn" href="principles.php" data-lang-id="056-our-principles-action">🚀 Our Principles</a>
            <p style="font-size: 0.85em; margin-top:20px;" data-lang-id="057-guided-by-regenerative-principles">Our Accounting is guided by our regenerative principles</p>
        </div>
        <div class="side2" data-lang-id="058-eco-accounting-icon">
            <br><img src="../icons/eco-accounting-icon-from-ecobricks-org.svg?v=5" width="77%" padding="15%" alt="ecological accounting, the balance of grey and green impacts" loading="lazy">
        </div>
    </div>
</div>


			 <br><br>








</DIV>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>


<!-- CUSTOM PAGE SCRIPTS-->
<script>

    /*REVENUES  */
$(document).ready(function () {
    $('#revenues').DataTable({
        ajax: '../api/fetch_revenues_trans.php', // URL of the PHP file
        columns: [
            { data: 'ID', orderable: false },
            { data: 'Date' },
            { data: 'Sender' },
            { data: 'Category' },
            { data: 'Transaction' },
            {
                data: 'AmountUSD',
                render: function (data) {
                    return `$${data}`; // Add dollar sign to the Amount USD
                }
            },
            {
                data: 'AmountIDR',
                render: function (data) {
                    return `${data} IDR`; // Add "IDR" after the Amount IDR
                }
            },
            { data: 'Type' }
        ],
        columnDefs: [
            { targets: 0, className: 'dt-center' }, // Center-align the ID column
            {
                targets: [2, 3], // Hide these columns by default for smaller screens
                visible: true,
                responsivePriority: 3
            },
            {
                targets: [4], // "Transaction" visible only on tablet and desktop
                responsivePriority: 2
            }
        ],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate,
                type: ''
            },
            breakpoints: [
                { name: 'desktop', width: Infinity },
                { name: 'tablet', width: 1024 },
                { name: 'mobile', width: 700 }
            ]
        },

        order: [[1, 'desc']] // Sort by Date descending
    });
});



/*EXPENSES*/

/* EXPENSES */
$(document).ready(function () {
    $('#expenses').DataTable({
        ajax: '../api/fetch_expenses_trans.php', // URL of the PHP file for expenses
        columns: [
            { data: 'ID', orderable: false },
            { data: 'Date' },
            { data: 'Sender' },
            { data: 'Category' },
            { data: 'Transaction' },
            {
                data: 'AmountUSD',
                render: function (data) {
                    return `$${data}`; // Add dollar sign to the Amount USD
                }
            },
            {
                data: 'AmountIDR',
                render: function (data) {
                    return `${data} IDR`; // Add "IDR" after the Amount IDR
                }
            },
            { data: 'Type' }
        ],
        columnDefs: [
            { targets: 0, className: 'dt-center' }, // Center-align the ID column
            {
                targets: [2, 3], // Hide these columns by default for smaller screens
                visible: true,
                responsivePriority: 3
            },
            {
                targets: [4], // "Transaction" visible only on tablet and desktop
                responsivePriority: 2
            }
        ],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate,
                type: ''
            },
            breakpoints: [
                { name: 'desktop', width: Infinity },
                { name: 'tablet', width: 1024 },
                { name: 'mobile', width: 700 }
            ]
        },

        order: [[1, 'desc']] // Sort by Date descending
    });
});




function openDetailsPopup(cashTranId) {
    const url = `details-cash-trans.php?cash_tran_id=${cashTranId}`;
    window.open(url, '_blank', 'width=600,height=800,menubar=no,toolbar=no,status=no,scrollbars=yes,resizable=yes');
}





    </script>



<!-- This script is for pages that use the accordion content system-->
<script src="../accordion-scripts.js?v=2" defer></script>

</div>
</article>
</body>
</html>

