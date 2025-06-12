<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='2.41';?>
<?php $page='openbooks';?>

<?php require_once ("../includes/openbooks-inc.php");?>


<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">Our Open Books</div>
		<div class="splash-sub" data-lang-id="002-splash-subtitle">The Global Ecobrick Alliance's Financial Accounting.</div>
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
<p>As of January 1st 2025, the Global Ecobrick Alliance's accounting will be fully in Indonesian Rupiahs.  The ongoing genocide in Gaza has made it clear to us the connection between our finances and the destructive dynamics of petro capital economy.  Consequently, we are closing all our USD accounts and ceasing our use of USD for accounting purposes.</p>

			</div>

			<div class="page-paragraph">

                <p data-lang-id="004-lead-page-paragraph">As a for-Earth enterprise we account and disclose all of our finances to meet our not-for-profit and net-green mandates.</p>

                <p>The upgrade of our Open Books systems to IDR represents a year of work.  Please bear with us as we get our accounting fully back on line.</p>





				
				<!--


				<p data-lang-id="005-first-page-paragraph">The <a href="about.php">Global Ecobrick Alliance</a>  is an Earth Enterprise.  This means that we that follows the principles of <a href="principles.php">Earthen ethics</a> in the management of our finances and our ecological impacts to ensure that both are of net benefit.  It also means that for everyone's awareness, our financial and ecological accounting are both disclosed publicly.</p>
<p>Our financial accounting has two parts: our regular fiat currency accounting and our brikcoin accounting.  The combination of the two generates our annual cost per kilogram of Authenticated Ecobrick Sequestered plastic (<a href="/ase">AES Plastic</a> for short).  This price is determined by dividing the total amount of plastic authenticated on the <a href="brikcoins.php">brikcoin blockchain</a> each year by the total operational costs incurred that year by the GEA.  This is price for which 1 kg of AES plastic are purchased as <a href="offsets.php">offsets credits</a> on our Gobrik app.</p>

				 <p data-lang-id="006-second-page-paragraph">On this page you can review the disclosure of our finances.  We call this our Open Books accounting system.  For the disclosure of our ecological accounting see our <a href="regen-reports.php">Regen Reporting</a>.  To learn how the combination of both our financial and ecological accountings generates the price per Kg for our plastic offsets sales see our <a href="offsets.php">offsetting page</a>.</p>-->
				
			</div>
		</div>
			
		<div class="side">

			<?php include 'side-modules/about-gea-accounting.php';?>


			
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
                   tot_idr_exp_amt,
                   tot_idr_rev_amt,
                   final_aes_plastic_cost_idr
            FROM vw_detail_sums_by_year_idr";

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
        $sum_expenses += (float)str_replace(',', '', $row['tot_idr_exp_amt']);
        $sum_revenue += (float)str_replace(',', '', $row['tot_idr_rev_amt']);
        $sum_costs += (float)str_replace(',', '', $row['final_aes_plastic_cost_idr']);
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
            <p><span class="blink">◉  </span> ' . number_format($aes_rolling, 2) . ' &#8202; IDR per 1 Kg of AES Plastic</p>
            <ul>
                <li>Total ecobricks authenticated: ' . number_format($sum_ecobricks) . '</li>
                <li>Total Brikcoins Generated: ' . number_format($sum_brikcoins) . '&#8202;ß</li>
                <li>Total Authenticatd Sequestered Plastic: ' . number_format($sum_weight, 2) . '&#8202;kg</li>
                <li>Total System Expenses: ' . number_format($sum_expenses, 2) . '&#8202;IDR</li>

                <!--
                <li>Total AES Sales: ' . number_format($sum_revenue, 2) . ' IDR</li>
                <li>Avg AES Price: ' . number_format($avg_cost, 2) . ' IDR</li>-->
            </ul>
            <p style="font-size: 0.85em; margin-top:20px;" data-lang-id="006-current-pricing">
                The price per kg of <a href="offsets.php">of AES plastic offsets</a> is a function of system authenticataed plastic and GEA system expenses.
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
            <h4 data-lang-id="033-current-year-expenses-title">2024 Year Expenses</h4>
            <h5 data-lang-id="034-current-year-expenses-summary">(2025 Pending) A summary of the GEA's current year expenses.</h5>
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
            $sql = "SELECT expense_category, no_of_transactions, total_idr FROM vw_exp_by_year_category WHERE year = 2024 ORDER BY expense_category;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Expense</th>
                                <th>Transaction Count</th>
                                <th>Year Total (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["expense_category"]}</td>
                            <td>{$row["no_of_transactions"]}</td>
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
            $sql = "SELECT year, total_no_of_exp_transactions, total_exp_idr_amount FROM vw_tot_exp_by_year WHERE year = 2024;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Total Transactions</th>
                                <th>Total Expenses (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["year"]}</td>
                            <td>{$row["total_no_of_exp_transactions"]}</td>
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
            <h4 data-lang-id="036-current-year-revenue-title">2024 Year Revenue</h4>
            <h5 data-lang-id="037-current-year-revenue-summary">(2025 Pending) A summary of the GEA's current year revenue.</h5>
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
            $sql = "SELECT revenue_category, no_of_transactions, total_idr FROM vw_rev_by_year_category WHERE year = 2024 ORDER BY revenue_category;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Transactions</th>
                                <th>Year Total (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["revenue_category"]}</td>
                            <td>{$row["no_of_transactions"]}</td>
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
            $sql = "SELECT year, total_no_of_rev_transactions, total_rev_idr_amount FROM vw_tot_rev_by_year WHERE year = 2024;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Total Transactions</th>
                                <th>Total Revenue (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["year"]}</td>
                            <td>{$row["total_no_of_rev_transactions"]}</td>
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
            $sql = "SELECT year, total_no_of_exp_transactions, total_exp_idr_amount FROM vw_tot_exp_by_year ORDER BY `year` DESC;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Transactions</th>
                                <th>Expenses (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["year"]}</td>
                            <td>{$row["total_no_of_exp_transactions"]}</td>
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
            $sql = "SELECT year, total_no_of_rev_transactions, total_rev_idr_amount FROM vw_tot_rev_by_year ORDER BY `year` DESC;";
            $result = $gobrik_conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table id="brikchain" class="display">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Transactions</th>
                                <th>Revenues (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row["year"]}</td>
                            <td>{$row["total_no_of_rev_transactions"]}</td>
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

$sql = "SELECT * FROM vw_detail_sums_by_year_idr WHERE year > 2018 ORDER BY `year` DESC;";
$result = $gobrik_conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table id="brikchain" class="display">
            <thead>
                <tr>
                    <th>Year</th>
                    <th>BRK Generated</th>
                    <th>Total AES Plastic</th>
                    <th>GEA Year Expenses (IDR)</th>
                    <th>1kg AES Value (IDR)</th>
                </tr>
            </thead>
            <tbody>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row["year"]}</td>
                <td>{$row["total_brk"]}&#8202;ß</td>
                <td>{$row["calculated_weight"]}&#8202;Kg</td>
                <td>{$row["tot_idr_exp_amt"]} IDR</td>
                <td>{$row["final_aes_plastic_cost_idr"]} IDR</td>
              </tr>";
    }
    echo '</tbody></table>';
} else {
    echo "No results found.";
}
?>


	<br><br>
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

	<?php require_once ("../footer-2025.php");?>


<!-- CUSTOM PAGE SCRIPTS-->
<script>

    /*show trans*/

    function openTransactionModal(transactionId) {
    // Select modal elements
    const modal = document.getElementById('form-modal-message');
    const modalBox = document.getElementById('modal-content-box');

    // Show the modal
    modal.style.display = 'flex';
    modalBox.style.flexFlow = 'column';

    // Lock scrolling for the body and blur the background
    document.getElementById('page-content')?.classList.add('blurred');
    document.getElementById('footer-full')?.classList.add('blurred');
    document.body.classList.add('modal-open'); // Locks scrolling

    // Set up the modal-content-box styles
    const modalContentBox = document.getElementById('modal-content-box');
    modalContentBox.style.maxHeight = '80vh'; // Ensure it doesn’t exceed 80% of the viewport height
    modalContentBox.style.overflowY = 'auto'; // Make the modal scrollable if content overflows

    // Clear previous modal content and set up the structure
    modalContentBox.innerHTML = `<h4>Transaction Details - ID: ${transactionId}</h4>
                                  <div id="transaction-table-container"><p>Loading transaction details...</p></div>`;

    // Show the modal
    modal.classList.remove('modal-hidden');

    // AJAX request to fetch transaction details
    $.ajax({
        url: 'https://ecobricks.org/api/fetch_cash_trans.php', // Backend PHP file
        type: 'GET',
        data: { cash_tran_id: transactionId }, // Pass the transaction ID
        success: function (response) {
            // Parse the JSON response from the server
            const data = JSON.parse(response);

            if (data.error) {
                // If there's an error, display it
                document.getElementById('transaction-table-container').innerHTML = `<p>${data.error}</p>`;
                return;
            }

            // Construct the HTML for the transaction details
            let transactionDetailsHTML = `
                <div id="main-details">
                    <div class="date"><b>Transaction ID:</b> ${data.cash_tran_id}</div>
                    ${data.paymt_record_url && data.paymt_record_url !== 'N/A' ? `
                        <div id="photo">
                            <img src="${data.paymt_record_url}" width="90%" />
                        </div>
                    ` : ''}
                    <div class="serial"><b>Amount:</b> <var>${data.native_ccy_amt} ${data.currency_code}</var></div>
                    <div class="general-field"><b>Transaction Name:</b> ${data.tran_name_desc}</div>
                    <div class="main"><b>Sender:</b> <var>${data.sender_for_display}</var></div>
                    <div class="main"><b>Sent:</b> <var>${data.datetime_sent_ts}</var></div>
                    <div class="main"><b>Type:</b> <var>${data.type_of_transaction}</var></div>
                    ${data.expense_accounting_type ? `
                        <div class="main"><b>Category:</b> ${data.expense_accounting_type}</div>
                    ` : ''}
                    ${data.revenue_accounting_type ? `
                        <div class="main"><b>Category:</b> ${data.revenue_accounting_type}</div>
                    ` : ''}
                    <div class="ecobrick-data">
                        <p><b>>> Raw Cash Transaction Record</b></p>
                        <p><b>Record ID:</b> ${data.knack_record_id}</p>
                        <p><b>Cash Transaction ID:</b> ${data.cash_tran_id}</p>
                        <p><b>Sender (for display):</b> ${data.sender_for_display}</p>
                        <p><b>Date Time Sent:</b> ${data.datetime_sent_ts}</p>
                        <p><b>Transaction Name:</b> ${data.tran_name_desc}</p>
                        <p><b>Amount USD:</b> ${data.usd_amount}</p>
                        ${data.native_ccy_amt_display !== "0.00" ? `
                            <p><b>Native Currency Amount:</b> ${data.native_ccy_amt_display}</p>
                        ` : ''}
                        <p><b>Exchange Rate:</b> ${data.exchange_ratio}</p>
                        ${data.connected_brk_trans ? `
                            <p><b>Connected BRK Transaction:</b>
                                <a href="details-brk-trans.php?tran_id=${data.connected_brk_trans}" target="_blank">
                                    ${data.connected_brk_trans}
                                </a>
                            </p>
                        ` : ''}
                    </div>
                </div>
            `;

            // Populate the modal with the transaction details
            document.getElementById('transaction-table-container').innerHTML = transactionDetailsHTML;
        },
        error: function (xhr, status, error) {
            // Display error message if AJAX fails
            document.getElementById('transaction-table-container').innerHTML = '<p>Error loading transaction details. Please try again later.</p>';
        }
    });
}


/* REVENUES */
$(document).ready(function () {
    $('#revenues').DataTable({
        ajax: 'https://ecobricks.org/api/fetch_revenues_trans.php', // URL of the PHP file
        columns: [
            {
                data: 'ID',
                orderable: false,
                render: function (data, type, row) {
                    // Properly escape and handle special characters for the transaction ID
                    const escapedData = String(data).replace(/"/g, '&quot;').replace(/'/g, '&#39;');

                    // Add onclick call to openTransactionModal with the transaction ID
                    return `<a href="#" onclick="openTransactionModal('${escapedData}')">${data}</a>`;
                },
                className: 'dt-center' // Center-align the ID column
            },
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
            // Columns to hide by default for responsive design
            {
                targets: [3, 5, 7], // Move 'Category', 'Amount USD', and 'Type' to the overflow
                visible: false, // Hide these columns by default
                responsivePriority: 4 // Lower priority for responsive view
            },
            {
                targets: [4], // Ensure "Transaction" is visible on tablet and desktop
                responsivePriority: 2
            }
        ],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate, // Use child row for overflow
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



/* EXPENSES */
$(document).ready(function () {
    $('#expenses').DataTable({
        ajax: 'https://ecobricks.org/api/fetch_expenses_trans.php', // URL of the PHP file for expenses
        columns: [
            {
                data: 'ID',
                orderable: false,
                render: function (data, type, row) {
                    // Add onclick call to openTransactionModal with the transaction ID
                    return `<a href="#" onclick="openTransactionModal('${data}')">${data}</a>`;
                },
                className: 'dt-center' // Center-align the ID column
            },
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
                targets: [3, 5, 7], // Move 'Category', 'Amount USD', and 'Type' to the overflow
                visible: false, // Hide these columns by default
                responsivePriority: 4 // Lower priority for responsive view
            },
            {
                targets: [4], // Ensure "Transaction" is visible on tablet and desktop
                responsivePriority: 2
            }
        ],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate, // Use child row for overflow
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






    </script>



<!-- This script is for pages that use the accordion content system-->
<script src="../accordion-scripts.js?v=2" defer></script>

</div>
</article>
</body>
</html>

