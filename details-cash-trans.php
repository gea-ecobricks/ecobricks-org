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
<?php include 'ecobricks_env.php';?>
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

					if ( isset($array["expense_accounting_type"]) && $array["expense_accounting_type"] != '' ) { 
						echo " <p><b>expense_accounting_type:</b> " . $array["expense_accounting_type"] ."</p>" ;
					}
					if ( isset($array["revenue_accounting_type"]) && $array["revenue_accounting_type"] != '' ) { 
						echo " <p><b>revenue_accounting_type:</b> " . $array["revenue_accounting_type"] ."</p>" ;
					}
                    
//DETAILS
					echo '<div class="ecobrick-data">
					
					<p><b>>> Raw Cash Transaction Record</b></p>';

                    echo " <p><strong>Record ID:</strong>" . $array["knack_record_id"] ."</p>" ;
 
					echo " <p><b>Cash Transaction ID:</b> " . $array["cash_tran_id"] . " </p>" ;

					echo " <p><b>Sender (for display):</b> " . $array["sender_for_display"] ."</p>" ;

					echo " <p><b>Date Time Sent:</b>  " . $array["datetime_sent_ts"] ." </p>" ;

					echo " <p><b>type_of_transaction:</b>  " . $array["type_of_transaction"] ." </p>" ;

					echo " <p><b>type_of_transaction:</b>  " . $array["type_of_transaction"] ." </p>" ;

					echo " <p><b>Transaction name:</b> " . $array["tran_name_desc"] ."</p>" ;

					echo " <p><b>Native Currency Amount:</b> " . $array["native_ccy_amt_display"] ."</p>" ;

                    echo " <p><b>Exchange rate:</b> <var>" . $array["exchange_ratio"] ."</var> </p>" ;

					echo " <p><b>Amount USD:</b> <var>" . $array["usd_amount"] ."</var> </p>" ;

// DETAILS OPTIONAL

if ( isset($array["total_product_cost_incl_shipping"]) && $array["total_product_cost_incl_shipping"] != '0' ) { 
	echo " <p><b>Total product cost (incl. shipping):</b> <var>" . $array["total_product_cost_incl_shipping"] ."</var> </p>" ;
	}


if ( isset($array["product"]) && $array["product"] != '0' ) { 
		echo " <p><b>Product Price</b> <var>" . $array["product"] ."</var></p>" ;
		}

if ( isset($array["product_cost"]) && $array["product_cost"] != '0' ) { 
			echo " <p><b>Product cost:</b> <var>" . $array["product_cost"] ."</var></p>" ;
		}

		echo " <p><b>Transaction Date:</b> " . $array["transaction_date_dt"] ."</p>" ;

		if ( isset($array["shipping_cost"]) && $array["shipping_cost"] != '0' ) {
			echo " <p><b>Shipping Cost:</b> <var> " . $array["shipping_cost"] ."</var></p>" ;
		}

		if ( isset($array["shipping_cost_+ccy_display"]) && $array["shipping_cost_+ccy_display"] != '0' ) { 
					echo " <p><b>shipping_cost_+ccy_display:</b> " . $array["shipping_cost_+ccy_display"] ."</p>" ;
		}

		if ( isset($array["total_product_cost_+ccy_display"]) && $array["total_product_cost_+ccy_display"] != '' ) { 
			echo " <p><b>total_product_cost_+ccy_display:</b> " . $array["total_product_cost_+ccy_display"] ."</p>" ;
}

		if ( isset($array["receiving_gea_acct"]) && $array["receiving_gea_acct"] != '' ) { 
			echo " <p><b>receiving_gea_acct:</b> " . $array["receiving_gea_acct"] ."</p>" ;
		}

		if ( isset($array["sender_for_display"]) && $array["sender_for_display"] != '' ) { 
			echo " <p><b>sender_for_display:</b> " . $array["sender_for_display"] ."</p>" ;
		}
		if ( isset($array["receiver_for_display"]) && $array["receiver_for_display"] != '' ) { 
			echo " <p><b>receiver_for_display:</b> " . $array["receiver_for_display"] ."</p>" ;
		}
		if ( isset($array["receiver_gea_account"]) && $array["receiver_gea_account"] != '' ) { 
			echo " <p><b>receiver_gea_account:</b> " . $array["receiver_gea_account"] ."</p>" ;
		}
		if ( isset($array["expense_vendor"]) && $array["expense_vendor"] != '' ) { 
			echo " <p><b>expense_vendor:</b> " . $array["expense_vendor"] ."</p>" ;
		}
		if ( isset($array["purchase_method"]) && $array["purchase_method"] != '' ) { 
			echo " <p><b>purchase_method:</b> " . $array["purchase_method"] ."</p>" ;
		}
		if ( isset($array["recurring_trans_period"]) && $array["recurring_trans_period"] != '' ) { 
			echo " <p><b>recurring_trans_period:</b> " . $array["recurring_trans_period"] ."</p>" ;
		}

		//acct type
		if ( isset($array["expense_accounting_type"]) && $array["expense_accounting_type"] != '' ) { 
			echo " <p><b>expense_accounting_type:</b> " . $array["expense_accounting_type"] ."</p>" ;
		}
		if ( isset($array["revenue_accounting_type"]) && $array["revenue_accounting_type"] != '' ) { 
			echo " <p><b>revenue_accounting_type:</b> " . $array["revenue_accounting_type"] ."</p>" ;
		}

		if ( isset($array["tran_processor"]) && $array["tran_processor"] != '' ) { 
			echo " <p><b>tran_processor:</b> " . $array["tran_processor"] ."</p>" ;
		}
		if ( isset($array["connected_brk_tran_name"]) && $array["connected_brk_tran_name"] != '' ) { 
			echo " <p><b>connected_brk_tran_name:</b> " . $array["connected_brk_tran_name"] ."</p>" ;
		}
		if ( isset($array["aes_to_usd_rate"]) && $array["aes_to_usd_rate"] != '0' ) { 
			echo " <p><b>aes_to_usd_rate:</b> " . $array["aes_to_usd_rate"] ."</p>" ;
		}
		if ( isset($array["aes_plastic_offset_purchase_kg"]) && $array["aes_plastic_offset_purchase_kg"] != '0' ) { 
			echo " <p><b>aes_plastic_offset_purchase_kg:</b> " . $array["aes_plastic_offset_purchase_kg"] ."</p>" ;
		}
		if ( isset($array["usd_payment_for_aes"]) && $array["usd_payment_for_aes"] != '0' ) { 
			echo " <p><b>usd_payment_for_aes:</b> " . $array["usd_payment_for_aes"] ."</p>" ;
		}
		if ( isset($array["gbp_payment_for_aes"]) && $array["gbp_payment_for_aes"] != '0' ) { 
			echo " <p><b>gbp_payment_for_aes:</b> " . $array["gbp_payment_for_aes"] ."</p>" ;
		}
		if ( isset($array["native_conversion_of_aes"]) && $array["native_conversion_of_aes"] != '0' ) { 
			echo " <p><b>native_conversion_of_aes:</b> " . $array["native_conversion_of_aes"] ."</p>" ;
		}
		if ( isset($array["brk_cost_of_aes_display"]) && $array["brk_cost_of_aes_display"] != '0' ) { 
			echo " <p><b>brk_cost_of_aes_display:</b> " . $array["brk_cost_of_aes_display"] ."</p>" ;
		}
		if ( isset($array["credited_catalyst"]) && $array["credited_catalyst"] != '' ) { 
			echo " <p><b>credited_catalyst:</b> " . $array["credited_catalyst"] ."</p>" ;
		}
		if ( isset($array["brikcoins_purchased_display"]) && $array["brikcoins_purchased_display"] != '0' ) { 
			echo " <p><b>brikcoins_purchased_display:</b> " . $array["brikcoins_purchased_display"] ."</p>" ;
		}
		if ( isset($array["usd_paid_for_brk_+ccy_display"]) && $array["usd_paid_for_brk_+ccy_display"] != '0' ) { 
			echo " <p><b>usd_paid_for_brk_+ccy_display:</b> " . $array["usd_paid_for_brk_+ccy_display"] ."</p>" ;
		}
		if ( isset($array["connected_brk_trans"]) && $array["connected_brk_trans"] != '' ) { 
			echo " <p><b>connected_brk_trans:</b> " . $array["connected_brk_trans"] ."</p>" ;
		}



					if ( isset($array["connected_brk_trans"]) && $array["connected_brk_trans"] != '' ) {
						
						echo ' <p><b>connected_brk_trans:</b><a href="details-brk-trans.php?tran_id='. $array["connected_brk_trans"] .'" target="popup"
					onclick="window.open(\'details-brk-trans.php?tran_id=\'' . $array["connected_brk_trans"] .'\',\'popup\',\'width=600,height=800\'); return false;">' . $array["connected_brk_trans"] .'</a>' ;
					}

                    if ( isset($array["paymt_record_url"]) && $array["paymt_record_url"] != '' ) { 
						echo " <p><b>paymt_record_url:</b> " . $array["paymt_record_url"] ."</p>" ;
					}
					
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
