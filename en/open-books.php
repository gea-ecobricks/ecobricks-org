<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->


<?php require_once ("includes/brikchain-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("under-construction.php");?>

<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>GEA Open Books</div>
		<div class="splash-sub">A full disclosure of the Global Ecobrick Alliances Not-for-profit Financial Accounting</div>
	</div>
	<div class="splash-image"><img src="https://www.ecobricks.org/pngs/openbooks.png" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				
				<br><p>Search and explore all the GEA's revenues and expenses.</p>
			</div>

			<div class="page-paragraph">
				  
				<p>One of the core operational <a href="principles">principles</a> of the <a href="about">Global Ecobrick Alliance as an Earth Enterprise</a> is full financial transparency of our not-for-profit for-Earth management of our revenues and expenses. Here you will find our custom built Open Books: a live flow of our revenue and expenses. Use this page to review a full real time audit of our financials. Transactions that occur through GoBrik appear here automatically, while other GEA transactions are added monthly by our team.</p>
				
				<p>Brikcoin transactions are recorded seperately on the <a href="brikchain">Brikchain Explorer</a></p>.

				<p>Our ecological accounting is disclosed seperately in our <a href="regenreports">annual regenerative reports</a>.

</p>
			</div>
		</div>
		

		<div class="side">

			<div id="side-module-desktop-only">
				<img src="webp/gea-logo-400px.webp" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Earth Enterprise</h4>
				<h5>The Brikchain is maintained by the Global Ecobrick Alliance, a not-for-profit, for-Earth enterprise dedicated to accelerating plastic transition.</h5><br>
				<a class="module-btn" href="/about">About the GEA</a>
                <br>
			</div>   
         
		</div>
	</div>


	<div class="page-paragraph">	
		<h4>Revenues and Expenses</h4>
		
		<h6>All the GEAs transactions</h6>
		<div class="ecobrick-data"><p>🚧 Not yet live, data still in migration</p></div>

	</div>


    <div class="overflow">
			<table id="cash_tran" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Sender</th>
                <th>Receiver</th>
				<th>Tran Name</th>
				<th>Amount USD</th>
				<th>Native Amt</th>
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

	

	<br><br>
		
	<div class="page-paragraph">
			<h4>Yearly Totals</h4>
			
			<h6>Running and yearly brikchain totals.  Brikcoin pricing based on the Global Ecobrick Alliance's yearly costs for presiding over the blockhain as disclosed the GEA's yearly <a href="openbooks">Open Books</a> financial accounting</h6>
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

