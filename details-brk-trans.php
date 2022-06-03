<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 

<!-- Arvo loads very last to speed up first load.  See the script in the footer that triggers this  -->

<noscript>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />
</noscript>
		
<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
		
<link rel="stylesheet" type="text/css" href="stylesheet-general.css?v0.14">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 
</head>



							  										  
<BODY id="full-page">

	<div id="load-background">

<a name="top"></a>

<div id="main-content">

			<div class="page-paragraph">
				<p>Blockchain Transaction Overview.</a>.</p><hr>
			
<!-- The DB connection creator -->
<?php include 'db.php';?>
<?php

// Get the contents from the Transaction table as an ordered View, using the transaction id from the URL.
$transactionId = $_GET['tran_id'];

$sql = "SELECT * FROM tb_brk_transaction WHERE tran_id = " . $transactionId;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	//echo "</br><h3>" . $transactionId . "</h1>";
    //  Output data of each row
    while($array = $result->fetch_assoc()) {
		echo " <h3><b>Transaction:</b> <var>" . $array["tran_id"] . "</var> </h3>" ;
		echo " <h2><b>Block amount:</b> " . $array["block_amt"] ."&#8202;ß</var></h2>" ;
		echo " <h4><i><var>" . $array["tran_name"] . "</var></i></h4><hr>" ;
		echo " <p><b>Shard Amount:</b> <var>" . $array["individual_amt"] . "&#8202;ß</var></p>" ;
		echo " <p><b>Status:</b> <var>" . $array["status"] . "</var></p>" ;
		echo " <p><b>Date:</b> <var>" . $array["send_ts"] . "</var></p>" ;
		echo " <p><b>Sender:</b><var>" . $array["sender_ecobricker"] . "</var></p>" ;
		echo " <p><b>Ecobrick Serial:</b> <var>" . $array["ecobrick_serial_no"] . "</var></p>";
		echo " <p><b>Block Type:</b> <var>" . $array["block_tran_type"] . "</var></p>" ;
		echo " <p><b>Receiver(s):</b> <var>" . $array["receiver_or_receivers"] . "</var></p>" ;
		//echo " <p><b>Receiver 1:</b> <var>" . $array["receiver_1"] . "</var> </p>" ;
		//echo " <p>Receiver 2: <var>" . $array["receiver_2"] . "</var> </p>" ;
		//echo " <p>Receiver 3: <var>" . $array["receiver_3"] . "</var> </p>" ;
		//echo " <p>Receiver central reserve: <var>" . $array["receiver_central_reserve"] . "</var></p>" ;
		//echo " <p>Sender central reserve: <var>" . $array["sender_central_reserve"] . "</var></p>" ;
		echo " <p><b>Transaction note:</b> <var>" . $array["tran_sender_note"] . "</var></p>" ;
		echo " <p><b>Product:</b> <var>" . $array["product"] . "</var></p>" ;
		//echo " <p>Send date = " . $array["send_dt"] . "</p>" ;
		echo " <p><b>Payment:</b> <var>" . $array["accomp_payment"] . "</var></p>" ;
		echo " <p><b>Authenticator:</b> <var>" . $array["authenticator_version"] . "</var></p>" ;
		echo " <p><b>Expense type:</b> <var>" . $array["expense_type"] . "</var></p>" ;
		echo " <p><b>Accounting category:</b> <var> " . $array["gea_accounting_category"] . "</var></p>" ;
		echo " <p><b>Shipping:</b> <var> " . $array["shipping_cost_brk"] . "&#8202;ß</var></p>" ;
		echo " <p><b>Product cost:</b> <var> " . $array["product_cost_brk"] . "&#8202;ß</var></p>" ;
		echo " <p><b>Total w/ shipping:</b> <var> " . $array["total_cost_incl_shipping"] . "&#8202;ß</var></p>" ;
		echo " <p><b>Shipping:</b> <var> " . $array["shipping_with_currency"] . "&#8202;ß</var></p>" ;
		echo " <p><b>AES Purchased:</b> <var>" . $array["aes_officially_purchased"] . "&#8202;kg</var></p>" ;
		echo " <p><b>Country of buyer:</b> " . $array["country_of_buyer"] . "</p>" ;
		echo " <p><b>Currency for shipping:</b><var> " . $array["currency_for_shipping"] . "</var></p>" ;
		echo " <p><b>Credit other ecobricker:</b> " . $array["credit_other_ecobricker_yn"] . "</p>" ;
		echo " <p><b>Catalyst:</b> <var>" . $array["catalyst_name"] . "</var></p>" ;
    }
} else {
    echo "No results found for selected transaction number";
}
$conn->close();

?>
	
<br><br>

</div>

</div>
</body>
</html>
