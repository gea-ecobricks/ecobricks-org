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
				<p>The full overview of the transaction on the Brikcoin blockchain.</a>.</p>
			
<!-- The DB connection creator -->
<?php include 'db.php';?>
<?php

// Get the contents from the Transaction table as an ordered View, using the transaction id from the URL.
$transactionId = $_GET['tran_id'];

$sql = "SELECT * FROM vw_brk_tran_desc WHERE trans_id = " . $transactionId;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<h1> Use Transaction Number from URL => " . $transactionId . "</h1>";
    //  Output data of each row
    while($array = $result->fetch_assoc()) {

		echo " <h3>Ecobrick Serial No: <var>" . $array["ecobrick_serial_no"] . "</var></h3> </br>";
		echo " <p>Transaction id: <var>" . $array["tran_id"] . "</var> </p>" ;
		echo " <p>Transaction name: <var>" . $array["tran_name"] . "</var></p>" ;
		echo " <p>Individual amount: <var>" . $array["individual_amt"] . "</var></p>" ;
		echo " <p>Status: <var>" . $array["status"] . "</var></p>" ;
		echo " <p>Dated: <var>" . $array["send_ts"] . "</var></p>" ;
		echo " <p>Sender ecobricker = <var>" . $array["sender_ecobricker"] . "</var></p>" ;
		echo " <p>Block transaction type: <var>" . $array["block_tran_type"] . "</var></p>" ;
		echo " <p>Block amountt = " . $array["block_amt"] ."</var><p>" ;
		echo " <p>Receiver or receivers: <var>" . $array["receiver_or_receivers"] . "</var></p>" ;
		echo " <p>Receiver 1: <var>" . $array["receiver_1"] . "</var> </p>" ;
		echo " <p>Receiver 2: <var>" . $array["receiver_2"] . "</var> </p>" ;
		echo " <p>Receiver 3: <var>" . $array["receiver_3"] . "</var> </p>" ;
		echo " <p>Receiver central reserve: <var>" . $array["receiver_central_reserve"] . "</var></p>" ;
		echo " <p>Sender central reserve: <var>" . $array["sender_central_reserve"] . "</var></p>" ;
		echo " <p>Transaction sender note <var>" . $array["tran_sender_note"] . "</var></p>" ;
		echo " <p>Product = <var>" . $array["product"] . "</var></p>" ;
		echo " <p>Send date = " . $array["send_dt"] . "</p>" ;
		echo " <p>Accomp payment = " . $array["accomp_payment"] . "</p>" ;
		echo " <p>Authenticator version = " . $array["authenticator_version"] . "</p>" ;
		echo " <p>Expense type = <var>" . $array["expense_type"] . "</var></p>" ;
		echo " <p>Gea accounting category = <var>" . $array["gea_accounting_category"] . "</var></p>" ;
		echo " <p>Shipping cost brk  = " . $array["shipping_cost_brk"] . "</p>" ;
		echo " <p>Product cost brk = " . $array["product_cost_brk"] . "</p>" ;
		echo " <p>Total cost incl shipping  = " . $array["total_cost_incl_shipping"] . "</p>" ;
		echo " <p>Shipping with currency = " . $array["shipping_with_currency"] . "</p>" ;
		echo " <p>Aes officially purchased = " . $array["aes_officially_purchased"] . "&#8202;ß</p>" ;
		echo " <p>Country of buyer = <var>" . $array["country_of_buyer"] . "</var></br>" ;
		echo " <p>Currency for shipping = " . $array["currency_for_shipping"] . "</p>" ;
		echo " <p>Credit other ecobricker Y/N = " . $array["credit_other_ecobricker_yn"] . "</p>" ;
		echo " <p>Catalyst name = <var>" . $array["catalyst_name"] . "</var></p>" ;

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
