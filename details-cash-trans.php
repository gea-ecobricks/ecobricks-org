<!--Content Includes Page template: v.1.0.2-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 

<META NAME="robots" CONTENT="noindex">
<title>OpenBooks Accounting | Ecobricks.org</title>


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
	margin-top: 0px;
	margin-bottom: 35px;
	margin-right: 0px;
	margin-left: -7px;
	width: 100%;
	padding: 5% 5% 5% 5%;
}


#details-content {
	margin: auto;
 	box-sizing: border-box;
  	width: 90%;
	margin-top: 30px;
}

.transaction {
	font-size: 1.1em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.2;
    font-weight: 400;
	margin-top: 40px;
}

.serial {
	font-size: 3.2em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;
	margin-top: 20px;

}

.date {
	font-size: 1.3em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;
	font-weight: bolder;
	padding-bottom: 15px;

}

.main {
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
 
p {
	font-size: 1.1em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 12px;
	font-weight: 300;
}

b {font-weight: 500;}

img {padding: 8%;}

#photo {width: 110%;
	background-color: #ded9d9;
	margin-left:-5%;}


#data-chunk {
  padding: 15px;
  background: #e6f3ff;}


.ecobrick-data p{
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


</style>
 
</head>



							  										  
<BODY id="full-page">

<div id="details-content">

<a name="top"></a>

				
				<button onClick="javascript:window.close('','_parent','');">Close & Return</button><br><br><br><br>
				<p>An overview of the GEA accounting transcation in our Open Books system.</p><br>
</div>
		
<!-- The DB connection creator -->
<?php include 'db.php';?>
<?php

// Get the contents from the Cash Tran table as an ordered View, using the serial_no from the URL.
            $cashTranId = $_GET['cash_tran_id'];

            // Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
            $sql = "SELECT * FROM tb_cash_transaction WHERE cash_tran_id = " . $cashTranId;

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row
                while($array = $result->fetch_assoc()) {

                    
					echo "<div id=\"main-details\"><div class=\"date\"> Transaction ID: " . $array["cash_tran_id"] ."</div>";

					if ( isset($array["paymt_record_url"]) && $array["paymt_record_url"] != 'N/A' ) {  
						echo '<div id="photo"><img src="'. $array["paymt_record_url"] .'" width="90%"/></div>';
					}

                    echo " <div class=\"serial\"><b>Amount:</b> <var>" . $array["native_ccy_amt"] ." " ;
                    echo " " . $array["currency_code"] ."</var></div>" ;

					echo " <div class=\"general-field\">" . $array["tran_name_desc"] ."</var><br><br></div>" ;

                    echo " <div class=\"main\"><b>Sender:</b> <var>" . $array["sender_for_display"] . "</var></div>" ;
                    
                    echo " <div class=\"main\"><b>Sent:</b> <var>" . $array["datetime_sent_ts"] ."</var></div>" ;
                
                    echo " <div class=\"main\"><b>Type:</b> <var>" . $array["type_of_transaction"]."</var></div></div>" ;
                    

					echo '<div class="ecobrick-data">
					
					<p><b>>> Raw Cash Transaction Record</b><br><br>
					----------------------------------------------------</p>';

                    echo " <p><strong>Record ID:</strong> <var>" . $array["knack_record_id"] ."</var></p>" ;


					echo " <p><b>Blockchain Transaction ID:</b> " . $array["cash_tran_id"] . " </p>" ;

					echo " <p><b>Transaction Date:</b> <var> " . $array["transaction_date_dt"] ."</var></p>" ;

					echo " <p><b>Transaction name:</b> " . $array["tran_name_desc"] ."</var></p>" ;

					echo " <p><b>Native Amount:</b> <var>" . $array["native_ccy_amt"] ."</var></p>" ;

                    echo " <p><b>Currency code:</b><var> " . $array["currency_code"] ."</var></p>" ;

					echo " <p><b>Native Currency Amount:</b><var> " . $array["native_ccy_amt_display"] ."</var></p>" ;

                    echo " <p><b>Exchange rate:</b> <var>" . $array["exchange_ratio"] ."</var> </p>" ;

					echo " <p><b>USD Amount:</b> <var>" . $array["usd_amount"] ."</var> </p>" ;

                    
					
					if ( isset($array["total_product_cost_incl_shipping"]) && $array["total_product_cost_incl_shipping"] != '' ) { 
					echo " <p><b>Total product cost (incl. shipping):</b> <var>" . $array["total_product_cost_incl_shipping"] ."</var> </p>" ;
					}

					if ( isset($array["product"]) && $array["product"] != '0' ) { 
                    echo " <p><b>Product Price</b> <var>" . $array["product"] ."</var></p>" ;
					}

                    if ( isset($array["product_cost"]) && $array["product_cost"] != '' ) { 
						echo " <p><b>Product cost:</b> <var>" . $array["product_cost"] ."</var></p>" ;
					}

					

					if ( isset($array["shipping_cost"]) && $array["shipping_cost"] != '' ) {
						echo " <p><b>Shipping Cost:</b> <var> " . $array["shipping_cost"] ."</var></p>" ;
					}
					
					if ( isset($array["total_product_cost_+ccy_display"]) && $array["total_product_cost_+ccy_display"] != '' ) {
					echo " <p><b>Total Product Cost:</b> <var> " . $array["total_product_cost_+ccy_display"] ."</var></p>" ; 	
					}
;

					echo " <p><b>Sender (for display):</b> <var><i>" . $array["sender_for_display"] ."</i></var> </p>" ;

                    echo " <p><b>Receiver (for display):</b> <var>" . $array["receiver_for_display"] ."</var></p>" ;

					echo " <p><b>Receiving GEA account:</b> <var> " . $array["receiver_gea_account"] ."</var></p>" ;



                    echo " <p><b>Receiving GEA acct:</b> " . $array["receiving_gea_acct"] ."</p>" ;

					echo " <p><b>Vendor:</b> <var> " . $array["expense_vendor"] ."</var></p>" ;

                    echo " <p><b>Purchase method:</b> <var>" . $array["purchase_method"] ."</var></p>" ;


					echo " <p><b>Reocurring Period:</b> <var>" . $array["recurring_trans_period"] ."</var></p>" ;

					echo " <p><b>Expense Accounting Type:</b> <var>" . $array["expense_accounting_type"] ."</var></p>" ;
					
					echo " <p><b>revenue_accounting_type:</b> <var>" . $array["revenue_accounting_type"] ."</var></p>" ;
					
					echo " <p><b>tran_processor:</b> <var>" . $array["tran_processor"] ."</var></p>" ;
					
					echo " <p><b>aes_to_usd_rate:</b> <var>" . $array["aes_to_usd_rate"] ."</var></p>" ;
					
					echo " <p><b>aes_plastic_offset_purchase_kg:</b> <var>" . $array["aes_plastic_offset_purchase_kg"] ."</var></p>" ;
					
					echo " <p><b>usd_payment_for_aes:</b> <var>" . $array["usd_payment_for_aes"] ."</var></p>" ;
					
					echo " <p><b>gbp_payment_for_aes:</b> <var>" . $array["gbp_payment_for_aes"] ."</var></p>" ;

					echo "<p><b>Native_conversion_of_aes:</b> <var>" . $array["native_conversion_of_aes"] ."</var></p>" ;

					echo " <p><b>brk_cost_of_aes_display:</b> <var>" . $array["brk_cost_of_aes_display"] ."</var></p>" ;

					echo " <p><b>credited_catalyst:</b> <var>" . $array["credited_catalyst"] ."</var></p>" ;

					echo " <p><b>brikcoins_purchased_display:</b> <var>" . $array["brikcoins_purchased_display"] ."</var></p>" ;

					echo " <p><b>usd_paid_for_brk_+ccy_display:</b> <var>" . $array["usd_paid_for_brk_+ccy_display"] ."</var></p>" ;

					echo " <p><b>connected_brk_trans:</b> <var>" . $array["connected_brk_trans"] ."</var></p>" ;

                    echo " <p><b>Payment record:</b> <var>" . $array["paymt_record_url"] ."</var></p>" ;
					
					echo '<p><< END.</p></div>';
                }
            } else {
                echo '<div class="ecobrick-data"><p><h4>Sorry!</h4><br><br>No results found for the specified Cash Transaction ID number.</p></div>';
            }
            $conn->close();

            ?>

            <br><br>

        </div>

    </div>
</body>
</html>
