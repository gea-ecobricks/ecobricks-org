
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
    <div class="side-module-desktop-mobile">
        <img src="../svgs/aes-brk-vertical.svg?v=2" style="width:95%; margin-top:20px;">
        <p style="font-size: 1.0em; margin-top:5px;">Live Brikcoin value:</p>
        <div id="brikchain-totals">
            <p><span class="blink">◉  </span> ' . number_format($aes_rolling, 2) . ' &#8202; IDR per 1 Kg of AES Plastic</p>
            <ul style="text-align:left">
                <li>Total ecobricks authenticated: ' . number_format($sum_ecobricks) . '</li>
                <li>Total Brikcoins Generated: ' . number_format($sum_brikcoins) . '&#8202;ß</li>
                <li>Total Authenticatd Sequestered Plastic: ' . number_format($sum_weight, 2) . '&#8202;kg</li>
                <li>Total System Expenses: ' . number_format($sum_expenses, 2) . '&#8202;IDR</li>

                <!--
                <li>Total AES Sales: ' . number_format($sum_revenue, 2) . ' IDR</li>
                <li>Avg AES Price: ' . number_format($avg_cost, 2) . ' IDR</li>-->
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

