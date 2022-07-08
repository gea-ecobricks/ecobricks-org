<!--Content Includes Page template: v.1.0.2-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 

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
            $sql = "SELECT * FROM vw_cash_tran_desc WHERE cash_tran_id = " . $cashTranId;

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row
                while($array = $result->fetch_assoc()) {

                    echo "<div id=\"main-details\"><div class=\"date\"> Transaction ID: " . $array["cash_tran_id"] ."</div>";

                    if ( isset($array["paymt_record_url"]) ) {  
                        echo '<div id="photo"><img src="'. $array["paymt_record_url"] .'" width="90%"/></div>';
                    }

                    echo " <div class=\"serial\"><b>Amount:</b> <var>" . $array["native_ccy_amt"] ." " ;
                    echo " " . $array["currency_code"] ."</var></div>" ;

                    
                    echo " <div class=\"main\"><b>Sender:</b> <var>" . $array["sender_ecobricker"] . "</var></div>" ;
                    
                    echo " <div class=\"main\"><b>Sent:</b> <var>" . $array["datetime_sent_ts"] ."</var></div>" ;
                
                    echo " <div class=\"main\"><b>Type:</b> <var>" . $array["type_of_transaction"]."</var></div></div>" ;
                    

                    echo " <div id=\"details-content\"><div class=\"general-field\"><b>Transaction name:</b> " . $array["tran_name_desc"] ."</var></div>" ;
                    echo " <div class=\"general-field\"><b>Native ccy amt</b> <var>" . $array["native_ccy_amt"] ."</var> </div>" ;
                    echo " <div class=\"general-field\"><b>Currency code:</b><var> " . $array["currency_code"] ."</var></div>" ;
                    echo " <div class=\"general-field\"><b>Exchange ratio</b> <var>" . $array["exchange_ratio"] ."</var> </div>" ;
                    echo " <div class=\"general-field\"><b>Total product cost incl shipping:</b> <var>" . $array["total_product_cost_incl_shipping"] ."</var> </div>" ;
                    echo " <div class=\"general-field\"><b>Product</b> <var>" . $array["product"] ."</var></div>" ;
                    echo " <div class=\"general-field\"><b>Product cost:</b> <var>" . $array["product_cost"] ."</var></div>" ;
                    echo " <div class=\"general-field\"><b>Total product cost+ccy display:</b> <var> " . $array["total_product_cost_+ccy_display"] ."&#8202;kg</var></div>" ;
                    echo " <div class=\"general-field\"><b>Receiving GEA acct:</b> " . $array["location_country"] ."</div>" ;
                    echo " <div class=\"general-field\"><b>Receiver for display:</b> <var>" . $array["receiver_for_display"] ."</var></div>" ;
                    echo " <div class=\"general-field\"><b>Purchase method:</b> <var>" . $array["purchase_method"] ."</var></div></div>" ;

                    
                    echo " <div id=\"details-content\"><div class=\"general-field\"><b>Sender (for display):</b> <var><i>" . $array["sender_for_display"] ."</i></var> </div>" ;
                    echo " <div class=\"general-field\"><b>Payment record:</b> <var>" . $array["paymt_record_url"] ."</var></div>" ;
                    echo " <div class=\"general-field\"><b>Transaction date:</b> " . $array["transaction_date_dt"] ."</var></div>" ;
                }
            } else {
                echo "No results found for the specified Cash Transaction ID number";
            }
            $conn->close();

            ?>

            <br><br>

        </div>

    </div>
</body>
</html>
