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
<?php include 'https://ecobricks.org/db.php';?>
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
