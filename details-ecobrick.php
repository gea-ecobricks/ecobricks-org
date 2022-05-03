<?php require_once ("lang.php");
echo <<<_END
<!DOCTYPE html>
<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->
<!-- https://github.com/gea-ecobricks/ecobricks-org  -->
<html lang="$lang">
<HEAD>
<!--Image files to preload that are unique to this page-->
<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/eb-blue.svg">
_END;?>

<!-- PAGE CONTENT  it should have its own lang file too -->
<?php require_once ("meta/brikchain-$lang.php");?>

<?php require_once ("header.php");?>

<!-- CUSTOM PAGE SCRIPTS-->

<script src="accordion-scripts.js"></script> 

<STYLE>

/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(svgs/cloud-back.svg) top;
		background-color: #00FFFF;
		
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
		position: relative;

	}
}

@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(svgs/cloud-back.svg) bottom;
		background-color: #00FFFF;
		
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 100%;
		background-size: cover;
		position: relative;
}
}

/*This is the text box on the left of the splash that holds the splash header and sub text*/

@media screen and (max-width: 700px) { 
.splash-text-box {
		position: relative;
		flex: 100%;
		padding: 10px 10px 0px 0px;
		box-sizing: border-box;
		text-align: right;
}
}

@media screen and (min-width: 700px) { 
.splash-text-box {
		z-index: 5;
		position: relative;
		flex: 65%;
		padding: 10px 30px 0px 0px;
		box-sizing: border-box;
		text-align: right;
}
}

@media screen and (max-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: left;
		flex: 25%;
		width: 250px;
		padding: 0px;
		box-sizing: border-box;
		margin: 0px 0px 0px 10px;
}
}

/*This is the image on the right of the content block*/
@media screen and (min-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: center;
		flex: 35%;
		padding: 0px;
		box-sizing: border-box;
		margin-top: 0px;
}
}

.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 300;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 5em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}

.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: #fff;
  margin: 15px 0;
	/*text-shadow: 0px 0px 10px #fff;*/
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2em;
		line-height: 1.3;
		font-weight: 400;
  }
}

/* This is the angled bar at the bottom of the intro splash block */

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #00FFFF;
	/* background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top; */
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	margin-bottom: 40px;

	-webkit-transform: skewY(-3deg);
 	 -moz-transform: skewY(-3deg);
 	 -ms-transform: skewY(-3deg);
 	 -o-transform: skewY(-3deg);
 	 transform: skewY(-3deg);

}
	
</style>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

<script>

$(document).ready(function() {
    $('#brikchain').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "ajax.php"

    } );
} );

</script>
<script>

$(document).ready(function() {
    $('#ecobricks').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "ajax-ecobricks.php"

    } );
} );

</script>

<style>
#brikchain {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: 300;
}

#brikchain td, #brikchain th {
  border: 1px solid #ddd;
  padding: 8px;
}

#brikchain tr:nth-child(even){background-color: #f2f2f2;}

#brikchain tr:hover {background-color: #ddd;}

#brikchain th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #E39009;
  color: white;
}
</style>

<style>
#ecobricks {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: 300;
}

#ecobricks td, #ecobricks th {
  border: 1px solid #ddd;
  padding: 8px;
}

#ecobricks tr:nth-child(even){background-color: #f2f2f2;}

#ecobricks tr:hover {background-color: #ddd;}

#ecobricks th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #E39009;
  color: white;
}
</style>

</head>
							  										  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
	<?php include 'menu-bar.php';?>

<!--SPLASH SECTION-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>Ecobrick Detail</div>
		<div class="splash-sub">Complete Ecobrick infomation</div>
	</div>
	<!-- div class="splash-image"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5abaea5dfdbfad4d03858fe2/5b4c1165d44d5804c418a27e/original/brikcoinchaintransparency.png" style="width: 70%;"></div -->	
	<div class="splash-image"><img src="webp/eb-sky-400px.webp" style="width: 70%;"></div>	

</div>

<div id="splash-bar"></div>

<!-- PAGE CONTENT -->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
			<div class="lead-page-paragraph">
				<br><br>
				<p>The Global Ecobrick Alliance maintains the Ecobrick records and provides the Explorer <br> inline with <a href="principles">our principles</a> of transparency and Earth service.</p>
			</div>
			<div class="page-paragraph">
				<p>Here you can view the full ecobrick record, and track the value of ecobricks and <a href="aes">ecobrick authenticated plastic</a>.</p>
			</div>
			<hr>
			<br><br>
			<h3>Ecobrick Detail Page</h3>
			<p>An overview of the ecobrick generated by the ecobricker and recorded for that brik.</p>
<!-- The DB connection creator -->
<?php include 'db.php';?>

<?php

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM vw_ecobricks_desc WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>";
    //  Output data of each row
    while($array = $result->fetch_assoc()) {

		echo "</br><h3> Recovered Detail for Ecobrick Serial No: #" . $array["serial_no"] ."</h3> </br>";
		echo " Owner = " . $array["owner"] ." </br>" ;
		echo " Volume  = " . $array["volume_ml"] ." ml </br>" ;
		echo " Weight = " . $array["weight_g"] ." g </br>" ;
		echo " Density = " . $array["density"] ." </br>" ;
		echo " Dated = " . $array["date_logged_ts"] ." </br>" ;
		echo " CO2 = " . $array["CO2_kg"] ." kg </br>" ;
		echo " Sequestration type = <var>" . $array["sequestration_type"]."</var></br>" ;
		echo " Last validation time = " . $array["last_validation_ts"] ."</br>" ;
		echo " Validator 1 = <var>" . $array["validator_1"] ."</var> </br>" ;
		echo " Validator 2 = <var>" . $array["validator_2"] ."</var> </br>" ;
		echo " Validator 3 = <var>" . $array["validator_3"] ."</var> </br>" ;
		echo " Validation score avg = " . $array["validation_score_avg"] ."</br>" ;
		echo " Last ownership change = " . $array["last_ownership_change"] ."</br>" ;
		echo " Final validation score = " . $array["final_validation_score"] ."</br>" ;
		echo " Weight authenticated = " . $array["weight_authenticated_kg"] ."kg</br>" ;
		echo " Country = <var>" . $array["location_country"] ."</var></br>" ;
		echo " Region = <var>" . $array["location_region"] ."</var></br>" ;
		echo " City = <var>" . $array["location_city"] ."</var></br>" ;
		echo " Full location = <var>" . $array["location_full"] ."</var></br>" ;
		echo " Community = <var>" . $array["community_name"] ."</var></br>" ;
		echo " Brand  = <var>" . $array["brand_name"] ."</var></br>" ;
		echo " Bottom colour = <var>" . $array["bottom_colour"] ."</var></br>" ;
		echo " Plastic from  = <var>" . $array["plastic_from"] ."</var></br>" ;
		echo " Display value = " . $array["ecobrick_brk_display_value"] ."</br>" ;
		echo " BrickCoin amount = " . $array["ecobrick_brk_amt"] ."BRK </br>" ;
		
    }
} else {
    echo "No results found for selected ecobrick serial number";
}
$conn->close();

?>
	
	<br><br>

</div>

	<!--FOOTER STARTS HERE-->

	<?php include 'footer.php'; ?>

	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>