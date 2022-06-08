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
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<style>

button {
      margin-top: 15px;
      font-size: 1.1em;
      /*background: #ded9d9;
      padding: 8px 10px 8px 10px;
      border-radius: 8px;
      border: none;
      margin-left: 70%;
      margin-bottom: 15px;
	  text-align: right;
	  border: 1px;
	  border-color: grey;*/

}


#main-details {
	background-color: #ded9d9;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-right: 0px;
	margin-left: 0px;
	width: 100%;
	padding: 5%;
}


#details-content {
	margin: auto;
 	box-sizing: border-box;
  	width: 90%;
}

.transaction {
	font-size: 1.0em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.2;
    font-weight: 400;
}

.block {
	font-size: 3.0em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;

}

.type {
	font-size: 1.2em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;
	font-weight: bolder;

}

.amount {
	font-size: 1.5em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
}

.generated {
	font-size: 1.5em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
}

.general-field {
	font-size: 1.2em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 10px;
}

b {font-weight: 600;}


</style>
 
</head>



							  										  
<BODY id="full-page">

<div id="details-content">

<a name="top"></a>

				
				<button onClick="javascript:window.close('','_parent','');">Close & Return</button><br><br>


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
		echo " <div class=\"transaction\"><b>Blockchain Transaction ID:</b> " . $array["tran_id"] . " </div><hr></div>" ;

		echo " <div id=\"main-details\"><div class=\"block\"><b>Block:</b> " . $array["block_amt"] ."&#8202;ß</var></div>" ;

		echo " <div class=\"type\">" . $array["block_tran_type"] . "</div>" ;

		echo " <div class=\"amount\"><b>Transfer amount:</b> <var>" . $array["individual_amt"] . "&#8202;ß</var></div>" ;

		echo "  <div class=\"generated\"><b>Generated:</b> " . $array["send_ts"] . "</p>" ;
		echo " <p><b>Status:</b> " . $array["status"] . "</div></div>" ;



		if ( isset($array["ecobrick_serial_no"]) && $array["ecobrick_serial_no"] != '' ) {  
			echo " <div class=\"general-field\"><b>Authenticated Ecobrick:</b> " . $array["ecobrick_serial_no"] . "</var></div>";
		}

		echo " <div class=\"general-field\"><b>Sender:</b> <var>" . $array["sender_ecobricker"] . "</var></div>" ;

		echo " <div class=\"general-field\"><b>Receiver(s):</b> <var>" . $array["receiver_or_receivers"] . "</var></div>" ;
		
		if ( isset($array["authenticator_version"]) && $array["authenticator_version"] != '' ) {  
			echo " <div class=\"general-field\"><b>Authenticator:</b> Version " . $array["authenticator_version"] . "</var></div>" ;
		}
		if ( isset($array["tran_name"]) && $array["tran_name"] != '' ) {
		echo " <div class=\"general-field\"><b>Description:</b> <var>" . $array["tran_name"] . "</var></div>" ;
		}

		//echo " <p><b>Receiver 1:</b> <var>" . $array["receiver_1"] . "</var> </p>" ;
		//echo " <p>Receiver 2: <var>" . $array["receiver_2"] . "</var> </p>" ;
		//echo " <p>Receiver 3: <var>" . $array["receiver_3"] . "</var> </p>" ;
		//echo " <p>Receiver central reserve: <var>" . $array["receiver_central_reserve"] . "</var></p>" ;
		//echo " <p>Sender central reserve: <var>" . $array["sender_central_reserve"] . "</var></p>" ;
		if ( isset($array["tran_sender_note"]) && $array["tran_sender_note"] != '' ) {
			echo " <div class=\"general-field\"><b>Transaction note:</b> <var>" . $array["tran_sender_note"] . "</var></div>" ;
		}

		if ( isset($array["product"]) && $array["product"] != '' ) {
			echo " <div class=\"general-field\"><b>Product:</b> <var>" . $array["product"] . "</var></div>" ;
		}

		//echo " <p>Send date = " . $array["send_dt"] . "</p>" ;
		
		if ( isset($array["accomp_payment"]) && $array["accomp_payment"] != '' ){                                              
			echo " <div class=\"general-field\"><b>Payment:</b> <var>" . $array["accomp_payment"] . "</var></div>" ;
 		}	

 		if ( isset($array["expense_type"]) && $array["expense_type"] != '' ) { 
		echo " <div class=\"general-field\"><b>Expense type:</b> <var>" . $array["expense_type"] . "</var></div>" ;
		 }

		 if ( isset($array["gea_accounting_category"]) && $array["gea_accounting_category"] != '' ) { 
			echo " <div class=\"general-field\"><b>Accounting category:</b> <var> " . $array["gea_accounting_category"] . "</var></div>" ;
		 }

		 if ( isset($array["shipping_cost_brk"]) && $array["shipping_cost_brk"] != '' ) { 
			echo " <div class=\"general-field\"><b>Shipping:</b> <var> " . $array["shipping_cost_brk"] . "&#8202;ß</var></div>" ;
		 }
		 
		 if ( isset($array["product_cost_brk"]) && $array["product_cost_brk"] != '' ) { 
			echo " <div class=\"general-field\"><b>Product cost:</b> <var> " . $array["product_cost_brk"] . "&#8202;ß</var></div>" ;
		 }
		 
		 if ( isset($array["total_cost_incl_shipping"]) && $array["total_cost_incl_shipping"] != '' ) { 
			echo " <div class=\"general-field\"><b>Total w/ shipping:</b> <var> " . $array["total_cost_incl_shipping"] . "&#8202;ß</var></div>" ;
		 }
		 if ( isset($array["shipping_with_currency"]) && $array["shipping_with_currency"] != '' ) { 
			echo " <div class=\"general-field\"><b>Shipping:</b> <var> " . $array["shipping_with_currency"] . "&#8202;ß</var></div>" ;
		 }

		 if ( isset($array["aes_officially_purchased"]) && $array["aes_officially_purchased"] != '' ) { 
			echo " <div class=\"general-field\"><b>AES Purchased:</b> <var>" . $array["aes_officially_purchased"] . "&#8202;kg</var></div>" ;
		 }

		 if ( isset($array["country_of_buyer"]) && $array["country_of_buyer"] != '' ) { 
			echo " <div class=\"general-field\"><b>Country of buyer:</b> " . $array["country_of_buyer"] . "</div>" ;
		 }
		 if ( isset($array["currency_for_shipping"]) && $array["currency_for_shipping"] != '' ) { 
			echo " <div class=\"general-field\"><b>Currency for shipping:</b><var> " . $array["currency_for_shipping"] . "</var></div>" ;
		 }

		if ( isset($array["credit_other_ecobricker_yn"]) && $array["credit_other_ecobricker_yn"] != '' ) { 
			echo " <div class=\"general-field\"><b>Credit other ecobricker:</b> " . $array["credit_other_ecobricker_yn"] . "</div>" ;
		}

		if ( isset($array["catalyst_name"]) && $array["catalyst_name"] != '' ) { 
			echo " <div class=\"general-field\"><b>Catalyst:</b> <var>" . $array["catalyst_name"] . "</var></div>" ;
		}

		
    }
} else {
    echo "No results found for selected transaction number";
}
$conn->close();

?>
	
<br><br>

</body>
</html>
