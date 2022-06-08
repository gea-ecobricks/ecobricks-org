<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 

<noscript>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />
</noscript>

<noscript>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />
</noscript>
		
<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
		
<!--<link rel="stylesheet" type="text/css" href="stylesheet-general.css?v0.14">
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<style>

button {
      margin-top: 15px;
      font-size: 1.1em;
      background-color: #ffffff82;
      padding: 8px 8px 15px;
      border-radius: 8px;
      color: #000000ad;
      border: none;
      margin-left: 60%;
      margin-bottom: 15px;
	  text-align: right;
	  border: 1px;

}


#main-details {
	background-color: #ffffff82;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-right: 0px;
	margin-left: 0px;
	width: 100%;
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
}


</style>

							  										  
<BODY>

<a name="top"></a>

	<div class="close-button"> <button onClick="javascript:window.close('','_parent','');">Close & Return Please</button>
	</div>

	<div id="main-details">

<!-- The DB connection creator -->

<?php

// Get the contents from the Transaction table as an ordered View, using the transaction id from the URL.
$transactionId = $_GET['tran_id'];

$sql = "SELECT * FROM tb_brk_transaction WHERE tran_id = " . $transactionId;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	//echo "</br><h3>" . $transactionId . "</h1>";
    //  Output data of each row
    while($array = $result->fetch_assoc()) {
		echo " <div class=\"transaction\"><b>Blockchain Transaction ID:</b> " . $array["tran_id"] . " </div><hr>" ;

		

		
    }
} else {
    echo "No results found for selected transaction number";
}
$conn->close();

?>
	
<br><br>

</body>
</html>
