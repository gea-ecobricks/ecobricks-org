<!--Content Includes Page template: v.1.0.2-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 

<!-- PHP starts by laying out canonical URLs for the page and language -->

<META NAME="robots" CONTENT="noindex">

<?php
	$parts = explode ("/", $_SERVER['SCRIPT_NAME']);
	$name = $parts [count($parts)-1];
	;?>

<meta charset="utf-8"> <!--OBSOLETE BUT MUST BE ADDED TO ALL OTHER PAGES FIRST-->

<link rel="canonical" href="https://www.ecobricks.org/<?php echo ($lang); ;?>/<?php echo ($name); ;?>"> 
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

<link rel="alternate" href="https://ecobricks.org/en/<?php echo ($name); ;?>" hreflang="en" />
<link rel="alternate" href="https://ecobricks.org/id/<?php echo ($name); ;?>" hreflang="id" /> 
<link rel="alternate" href="https://ecobricks.org/es/<?php echo ($name); ;?>" hreflang="es" /> 
<link rel="alternate" href="https://ecobricks.org/fr/<?php echo ($name); ;?>" hreflang="fr" /> 
<link rel="alternate" href="http://ecobricks.org/en/<?php echo ($name); ;?>" hreflang="x-default" />

<!-- Arc CDN Script without delay
<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>-->

<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
	
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/stylesheet-general.css?v0.7">


<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 

<!-- Arvo loads very last to speed up first load.  See the script in the footer that triggers this  

<noscript>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />
</noscript>


<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet" media="print" onload="this.media='all'">-->
	

<!-- This calls our webmanifest wich turns our page into a progress web app (PWA) 
<link rel="manifest" href="manifest.webmanifest">-->

<!-- This allows Ecobricks.org to be used a PWA on iPhones

<meta name="apple-mobile-web-app-capable" content="yes">-->

<!--<meta name="viewport" content="width=device-width, initial-scale=1.8, target-densitydpi=160, maximum-scale=1, user-scalable = no">
-->

<!-- WHAT"S THIS? <meta http-equiv="Cache-control" content="no-store" Cache-Control: private, max-age=604800>
-->
<meta name="apple-mobile-web-app-title" content="Ecobricks.org">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 

<!-- Arvo loads very last to speed up first load.  See the script in the footer that triggers this  -->

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />

		
<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<style>

button {
      margin-top: 15px;
      font-size: 1.3em;
	  padding: 8px 10px 8px 10px;
	  float: right;
	  margin-bottom: 20px;
      /*background: #ded9d9;

      border-radius: 8px;
      border: none;

      margin-bottom: 15px;

	  border: 1px;
	  border-color: grey;*/

}


#main-details {
	background-color: #ded9d9;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-right: 0px;
	margin-left: -7px;
	width: 100%;
	padding: 5% 5% 5% 5%;
}


#details-content {
	margin: auto;
 	box-sizing: border-box;
  	width: 90%;
}

.transaction {
	font-size: 1.1em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.2;
    font-weight: 400;
	margin-top: 40px;
}

.block {
	font-size: 3.2em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;

}

.type {
	font-size: 1.3em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;
	font-weight: bolder;
	padding-bottom: 15px;

}

.amount {
	font-size: 1.6em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
	  font-weight: 300
}

.status {
	font-size: 1.6em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.4;
	  font-weight: 300
}

.general-field {
	font-size: 1.3em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 12px;
	font-weight: 300;
}


#data-chunk {
  padding: 15px;
  background: #e6f3ff;}


.trans-data p{
	font-size: 0.9em;
	font-family: 'Courier New', monospace !important;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 12px;
	/*font-weight: 300;*/
  	background: aliceblue;
	padding: 10px;
	border-radius: 5px;
}

b {
  font-weight: bold !important;
}

strong {
  font-weight: bold !important;
}


b {font-weight: 500;}


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

$sql = "SELECT * FROM vw_brk_tran_ledgerid_asc WHERE chain_ledger_id = " . $transactionId;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	//echo "</br><h3>" . $transactionId . "</h1>";
    //  Output data of each row
    while($array = $result->fetch_assoc()) {
		echo " <div class=\"transaction\"><b>Chain Ledger ID:</b> " . $array["chain_ledger_id"] . " </div></div><div id=\"main-details\">" ;
		if ( isset($array["block_amt"]) && $array["block_amt"] != '0' ) { 
		echo " <div class=\"block\"><b>Block:</b> " . $array["block_amt"] ."&#8202;ß</var></div>" ;
	}
		echo " <div class=\"type\">" . $array["block_tran_type"] . "</div>" ;

		echo " <div class=\"amount\"><b>Transfer amount:</b> <var>" . $array["individual_amt"] . "&#8202;ß</var></div>" ;

		if ( isset($array["ecobrick_serial_no"]) && $array["ecobrick_serial_no"] != '' ) {  
			echo ' <div class="status"><b>Authenticated Ecobrick:</b>  <a href="details-ecobrick-page.php?serial_no=' . $array["ecobrick_serial_no"] . '" target="_parent">' . $array["ecobrick_serial_no"] . '</a></var></div>';
		}

		echo "  <div class=\"status\"><b>Generated:</b> " . $array["send_ts"] . "</div>" ;
		echo " <div class=\"status\"><b>Status:</b> " . $array["status"] . "</div></div><div id=\"details-content\">" ;

	
//DETAILS

echo '<div class="trans-data">
					
	<p><b>>> Raw BRK Transaction Record</b></p>';

echo " <p><strong>Chain Ledger ID:</strong>" . $array["chain_ledger_id"] ."</p>" ;

echo " <p><strong>Legacy Tran ID:</strong>" . $array["tran_id"] ."</p>" ;


if ( isset($array["tran_name"]) && $array["tran_name"] != '' ) {
	echo " <p><strong>Tran name:  </strong>" . $array["tran_name"] ."</p>" ;
	}
if ( isset($array["individual_amt"]) && $array["individual_amt"] != '' ) {
	echo " <p><strong>Indiv Amt:  </strong>" . $array["individual_amt"] ."</p>" ;
}

if ( isset($array["status"]) && $array["status"] != '' ) {
	echo " <p><strong>Status:  </strong>" . $array["status"] ."</p>" ;
}

if ( isset($array["send_ts"]) && $array["send_ts"] != '' ) {
	echo " <p><strong>Authenticated:  </strong>" . $array["send_ts"] ."</p>" ;
}

if ( isset($array["sender_ecobricker"]) && $array["sender_ecobricker"] != '' ) {
	echo " <p><strong>sender_ecobricker:  </strong>" . $array["sender_ecobricker"] ."</p>" ;
}

if ( isset($array["block_tran_type"]) && $array["block_tran_type"] != '' ) {
	echo " <p><strong>block_tran_type:  </strong>" . $array["block_tran_type"] ."</p>" ;
} 	

if ( isset($array["block_amt"]) && $array["block_amt"] != '0' ) {
	echo " <p><strong>block_amt:  </strong>" . $array["block_amt"] ."</p>" ;
} 

if ( isset($array["sender"]) && $array["sender"] != '' ) {
	echo " <p><strong>sender:  </strong>" . $array["sender"] ."</p>" ;
} 

if ( isset($array["receiver_or_receivers"]) && $array["receiver_or_receivers"] != '' ) {
	echo " <p><strong>receiver_or_receivers:  </strong>" . $array["receiver_or_receivers"] ."</p>" ;
} 

if ( isset($array["receiver_1"]) && $array["receiver_1"] != '' ) {
	echo " <p><strong>receiver_1:  </strong>" . $array["receiver_1"] ."</p>" ;
} 

if ( isset($array["receiver_2"]) && $array["receiver_2"] != '' ) {
	echo " <p><strong>receiver_2:  </strong>" . $array["receiver_2"] ."</p>" ;
} 
if ( isset($array["receiver_1"]) && $array["receiver_1"] != '' ) {
	echo " <p><strong>receiver_3:  </strong>" . $array["receiver_3"] ."</p>" ;
} 
if ( isset($array["receiver_central_reserve"]) && $array["receiver_central_reserve"] != '' ) {
	echo " <p><strong>receiver_central_reserve:  </strong>" . $array["receiver_central_reserve"] ."</p>" ;
}
if ( isset($array["sender_central_reserve"]) && $array["sender_central_reserve"] != '' ) {
	echo " <p><strong>sender_central_reserve:  </strong>" . $array["sender_central_reserve"] ."</p>" ;
}
if ( isset($array["ecobrick_serial_no"]) && $array["ecobrick_serial_no"] != '0' ) {
	echo " <p><strong>ecobrick_serial_no:  </strong>" . $array["ecobrick_serial_no"] ."</p>" ;
}
if ( isset($array["tran_sender_note"]) && $array["tran_sender_note"] != '' ) {
	echo " <p><strong>tran_sender_note:  </strong>" . $array["tran_sender_note"] ."</p>" ;
}
if ( isset($array["product"]) && $array["product"] != '' ) {
	echo " <p><strong>product:  </strong>" . $array["product"] ."</p>" ;
}
if ( isset($array["send_dt"]) && $array["send_dt"] != '' ) {
	echo " <p><strong>send_dt:  </strong>" . $array["send_dt"] ."</p>" ;
}
if ( isset($array["accomp_payment"]) && $array["accomp_payment"] != '' ) {
	echo " <p><strong>accomp_payment:  </strong>" . $array["accomp_payment"] ."</p>" ;
}
if ( isset($array["authenticator_version"]) && $array["authenticator_version"] != '' ) {
	echo " <p><strong>authenticator_version:  </strong>" . $array["authenticator_version"] ."</p>" ;
}
if ( isset($array["expense_type"]) && $array["expense_type"] != '' ) {
	echo " <p><strong>expense_type:  </strong>" . $array["expense_type"] ."</p>" ;
}
if ( isset($array["gea_accounting_category"]) && $array["gea_accounting_category"] != '' ) {
	echo " <p><strong>gea_accounting_category:  </strong>" . $array["gea_accounting_category"] ."</p>" ;
}
if ( isset($array["shipping_brk_cost"]) && $array["shipping_brk_cost"] != '0' ) {
	echo " <p><strong>shipping_brk_cost:  </strong>" . $array["shipping_brk_cost"] ."</p>" ;
}
if ( isset($array["product_cost_brk"]) && $array["product_cost_brk"] != '0' ) {
	echo " <p><strong>product_cost_brk:  </strong>" . $array["product_cost_brk"] ."</p>" ;
}
if ( isset($array["total_cost_incl_shipping"]) && $array["total_cost_incl_shipping"] != '0' ) {
	echo " <p><strong>total_cost_incl_shipping:  </strong>" . $array["total_cost_incl_shipping"] ."</p>" ;
}
if ( isset($array["shipping_with_currency"]) && $array["shipping_with_currency"] != '0' ) {
	echo " <p><strong>shipping_with_currency:  </strong>" . $array["shipping_with_currency"] ."</p>" ;
}
if ( isset($array["aes_officially_purchased"]) && $array["aes_officially_purchased"] != '0' ) {
	echo " <p><strong>aes_officially_purchased:  </strong>" . $array["aes_officially_purchased"] ."</p>" ;
}
if ( isset($array["country_of_buyer"]) && $array["country_of_buyer"] != '' ) {
	echo " <p><strong>country_of_buyer:  </strong>" . $array["country_of_buyer"] ."</p>" ;
}
if ( isset($array["currency_for_shipping"]) && $array["currency_for_shipping"] != '' ) {
	echo " <p><strong>currency_for_shipping:  </strong>" . $array["currency_for_shipping"] ."</p>" ;
}
if ( isset($array["credit_other_ecobricker_yn"]) && $array["credit_other_ecobricker_yn"] != '' ) {
	echo " <p><strong>credit_other_ecobricker_yn:  </strong>" . $array["credit_other_ecobricker_yn"] ."</p>" ;
}
if ( isset($array["catalyst"]) && $array["catalyst"] != '' ) {
	echo " <p><strong>catalyst:  </strong>" . $array["catalyst"] ."</p>" ;
}


		echo " <div class=\"general-field\"><b>Block Amount:</b> <var>" . $array["block_amt"] . "</var></div>" ;
		 


		echo " <div class=\"general-field\"><b>Receiver(s):</b> <var>" . $array["receiver_or_receivers"] . "</var></div>" ;
		
		if ( isset($array["authenticator_version"]) && $array["authenticator_version"] != '' ) {  
			echo " <div class=\"general-field\"><b>Authenticator:</b> Version " . $array["authenticator_version"] . "</var></div>" ;
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
    echo "<div id=\"main-details\"><div class=\"serial\">Sorry :-(</div></div><div id=\"details-content\"><div class=\"general-field\">No results found for transaction ID $transactionId.</div>";
}
$conn->close();

?>
	
<br><br>

</body>
</html>
