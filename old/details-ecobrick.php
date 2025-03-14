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

img {padding-right: 5%;}

#photo {width: 110%;
	background-color: #ded9d9;
	margin-left:-5%;}


</style>
 
</head>



							  										  
<BODY id="full-page">

<div id="details-content">

<a name="top"></a>

				
				<button onClick="javascript:window.close('','_parent','');">Close & Return</button><br><br><br><br>
				<p>An overview of the ecobrick recorded on the brikchain upon its authentication.</p><br>
</div>
		


<!-- The DB connection creator -->
<?php include 'ecobricks_env.php';?>

<?php

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = '" . $serialNo . "'";
echo $sql ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<div id="photo"><img src="'. $array["ecobrick_full_photo_url"] .'" width="100%" alt="Ecobrick basic pic"/></div>';
		echo "<div id=\"main-details\"><div class=\"serial\">Serial: <var>" . $array["serial_no"] ."</var></div> </br>";
		echo " <div class=\"date\"><b>Logged on </b><var>" . $array["date_logged_ts"] ."</var></div>" ;

	
		echo " <div class=\"main\"><b>Volume:</b> <var>" . $array["volume_ml"] ."&#8202;ml</div>" ;
		echo " <div class=\"main\"><b>Weight:</b> <var>" . $array["weight_g"] ."&#8202;g</var></div>" ;
		echo " <div class=\"main\"><b>Density:</b> <var>" . $array["density"] ."&#8202;g/ml</var></div>" ;
		echo " <div class=\"main\"><b>CO2e:</b><var> " . $array["CO2_kg"] ."&#8202;kg</var></div>" ;
		echo " <div class=\"main\"><b>Brikcoin value:</b> <var>" . $array["ecobrick_dec_brk_val"] ."&#8202;ß</var></div></div>" ;


		echo "  <div id=\"details-content\"><div class=\"general-field\"><b>Maker:</b> <var><i>" . $array["owner"] ."</i></var> </div>" ;
		echo "  <div class=\"general-field\"><b>Sequestration:</b> <var>" . $array["sequestration_type"]."</var></div>" ;
		echo " <div class=\"general-field\"><b>Brand:</b> <var>" . $array["brand_name"] ."</var></div>" ;
		echo "  <div class=\"general-field\"><b>Bottom colour:</b> " . $array["bottom_colour"] ."</var></div></div>" ;
		
		echo "  <div id=\"details-content\"><div class=\"general-field\"><b>Plastic source:</b> " . $array["plastic_from"] ."</var></div>" ;

		echo "  <div class=\"general-field\"><b>Community:</b> <var>" . $array["community_name"] ."</var></div>" ;
		echo "  <div class=\"general-field\"><b>City:</b> <var>" . $array["location_city"] ."</var></div>" ;
		echo "  <div class=\"general-field\"><b>Region:</b> <var>" . $array["location_region"] ."</var></div>" ;
		echo "  <div class=\"general-field\"><b>Country:</b> " . $array["location_country"] ."</div>" ;
		echo "  <div class=\"general-field\"><b>Full location:</b> <var>" . $array["location_full"] ."</var></div></div>" ;


		echo "  <div id=\"details-content\"><div class=\"general-field\"><b>Validation:</b> " . $array["last_validation_ts"] ."</var></div>" ;
		echo "  <div class=\"general-field\"><b>Validator 1:</b> <var>" . $array["validator_1"] ."</var> </div>" ;
		echo " <div class=\"general-field\"><b>Validator 2:</b> <var>" . $array["validator_2"] ."</var> </div>" ;
		echo "  <div class=\"general-field\"><b>Validator 3:</b> <var>" . $array["validator_3"] ."</var> </div>" ;
		echo "  <div class=\"general-field\"><b>Validation score avg.:</b> <var>" . $array["validation_score_avg"] ."</var></div>" ;
		//echo " <p><b>Last ownership change:</b> <var>" . $array["last_ownership_change"] ."</var></p>" ;
		echo "  <div class=\"general-field\"><b>Validation score final:</b> <var>" . $array["final_validation_score"] ."</var></div>" ;
		echo " <div class=\"general-field\"><b>Authenticated weight:</b> <var> " . $array["weight_authenticated_kg"] ."&#8202;kg</var></div>" ;



		
	



		
		
    }
} else {
    echo "<div id=\"main-details\"><div class=\"serial\">Sorry :-(</div></div><div id=\"details-content\"><div class=\"general-field\">No results for ecobrick serial number $serialNo in the Brikchain.  This is most likely because the Brikchain is still being populated with legacy data. TEST $sql</div>";
	echo $sql ;
}
$conn->close();

?>
	
	<br><br>

</div>

</div>
</body>
</html>