<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->


<?php require_once ("includes/brikchain-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<!--<?php require_once ("translate-please.php");?>-->

<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>Brikchain Explorer</div>
		<div class="splash-sub">Browse the ecobricks & transactions of the full brikcoin blockchain.</div>
	</div>
	<div class="splash-image"><img src="webp/brikchain-450px.webp" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	

			<div class="lead-page-paragraph">
				
				<br>
				<br><p>The Global Ecobrick Alliance maintains the <a href="brikcoins.php">brikcoin manual blockchain</a> inline with <a href="/principles">our regenerative and for-Earth principles</a>.</p>
			</div>

			<div class="page-paragraph">
				  
				<p>Here on the Brikchain explorer you can search and view the full brikchain of transactions, see the total money pool, and track the value of brikcoins and ecobricked authenticated plastic (<a href="aes">AES plastic</a>).</p>

			</div>

			<br>
			<hr>
			<br><br>
				
            
		
		
			<div class="page-paragraph">
			<h4>Brikcoin Money Supply</h4>
			<h6>An overview of the brikcoins generated each year on the brikchain</h6>
			</div>

		
			<div class="overflow">
			<table id="brikchain" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sent</th>
                <th>Sender</th>
                <th>Receivers</th>
				<th>Type</th>
                <th>Block Amount</th>
				<th>Single Amount</th>
				<th>Ecobrick</th>
				
				
            </tr>
        </thead>
        <tfoot>
            <tr>
			<th>ID</th>
                <th>Sent</th>
                <th>Sender</th>
                <th>Receivers</th>
				<th>Type</th>
                <th>Block Amount</th>
				<th>Single Amount</th>
				<th>Ecobrick</th>
			
            </tr>
        </tfoot>
    </table>
</div>

<br><br>
<div class="page-paragraph">
<h4>Central Reserve Satus</h4>
<h6>Running and yearly brikchain totals.</h6>
</div>		
			
<div class="overflow">
<?php include 'db.php';?>
		
<?php

$sql = "SELECT * FROM vw_detail_sums_by_year Order by `year` DESC;";

	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>From</th><th>To</th><th>Total BRK</th><th>Total Briks</th><th>Total Weight</th></tr>';
	
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

	<div class="page-paragraph">

<h4>Authenticated Ecobricks</h4>
<h6>All the ecobricks authenticated and archived on chain.</h6>
</div>

<div class="overflow">
			<table id="ecobricks" class="display" style="width:100%">
        <thead>
            <tr>
                <th style="width: 150px !important;">Image</th>
                <th>Logged</th>
                <th>Maker</th>
                <th>Weight</th>
				<th>Value</th>
				<th>Volume</th>
                <th>CO2</th>
				<th>Serial</th>
				
				
            </tr>
        </thead>
        <tfoot>
            <tr>
			<th>Image</th>
                <th>Logged</th>
                <th>Maker</th>
                <th>Weight</th>
				<th>Value</th>
				<th>Volume</th>
                <th>CO2</th>
				<th>Serial</th>
            </tr>
        </tfoot>
    </table>
</div>
<br><br>





	<div class="page-paragraph">

<h4>Cash Transactions</h4>
<h6>All the GEA's fiat currency transactions.</h6>
</div>

<div class="overflow">
			<table id="cash_tran" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Sender</th>
                <th>Receiver</th>
				<th>Description</th>
				<th>Amount</th>
				<th>Currency</th>
                <th>Type</th>
				
				
            </tr>
        </thead>
        <tfoot>
            <tr>
		    <th>ID</th>
                <th>Date</th>
                <th>Sender</th>
                <th>Receiver</th>
				<th>Description</th>
				<th>Amount</th>
				<th>Currency</th>
                <th>Type</th>
            </tr>
        </tfoot>
    </table>
</div>


</div>
</div>



</div>
</div>

	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

	<!--FOOTER ENDS HERE-->

</div>
</body>
</html>

