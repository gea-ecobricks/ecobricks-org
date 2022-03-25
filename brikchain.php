<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/eb-blue.svg">

_END;?>

<?php require_once ("meta/brikchain-$lang.php");?>

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<script src="accordion-scripts.js"></script> 

<STYLE>


/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		
		background: url(svgs/cloud-back-logo-blue.svg) top;
		background-color: #00E6FF;
		background-repeat: no-repeat;
		background-size: cover;
		
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
    	
		margin-top: 25px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
		position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background-color: #00E6FF;
		background: url(svgs/cloud-back-logo-blue.svg) top;
		background-repeat: no-repeat;
		background-size: cover;
		
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
		margin: auto;
}
}

.splash-heading { 

	font-family: 'Arvo', Georgia, serif;
  
  color: white;
  font-weight: 300;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.0em;
      line-height: 1.3;
      margin: 0px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 6em;
      line-height: 1.3;
      margin: auto;
  }
}

.splash-sub {
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  margin: 15px 0;
	/*text-shadow: 0px 0px 10px #fff;*/
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.45em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.2em;
		line-height: 1.3;
		font-weight: 400;
  }
}


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #00E6FF;
	/*background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top;*/
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


<!--

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/1.11.4/dataRender/hyperLink.js"></script>



<script>

// Display the hyperlink with 'Download', which open hyperlink in popup
  //        with size 600as width and 400 as height
  $('#brikchain').DataTable( {
    columnDefs: [ {
      targets: 2,
      render: $.fn.dataTable.render.hyperLink( 'Download', 'popup' )
    } ]
  } );
</script>
-->


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
  /*padding-left: 8px;*/
}

#ecobricks tr:nth-child(even){background-color: #f2f2f2;}

#ecobricks tr:hover {background-color: #ddd;}

#ecobricks th {
  /*padding-top: 12px;
  padding-bottom: 12px;*/
  text-align: left;
  background-color: #E39009;
  color: white;
}

.dataTables_wrapper {
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
}

#ecobricks td {
	padding: 3px 3px 0px 10px;


}

.overflow {
	margin: 4px;
	overflow: scroll;
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
		<div class="splash-heading"><br>Brikchain Explorer</div>
		<div class="splash-sub">Browse the Full Brikcoin Blockchain</div>
	</div>
	<div class="splash-image"><img src="webp/brikchain-450px.webp" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	

			<div class="lead-page-paragraph">
				
				<br>
				<br><p>The Global Ecobrick Alliance maintains the <a href="brikcoins.php">Brikcoin</a> blockchain and provides the Brikchain Explorer inline with <a href="/principles">our principles</a> of transparency and Earth service.</p>
			</div>

			<div class="page-paragraph">
				  
				<p>Here you can search and view the full brikchain of transactions, see the total money pool, and track the value of brikcoins and <a href="aes">ecobrick authenticated plastic</a>.</p>
			</div>

			<br>
			<hr>
			<br><br>
				
            
		
		
			<div class="page-paragraph">
			<h4>Brikcoin Money Supply</h4>
			<h6>An overview of the brikcoins generated each year on the brikchain</h6>
			</div>

		
			<div class="overflow">
			<table id="brikchain" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sent</th>
                <th>Sender</th>
                <th>Receivers</th>
				<th>Type</th>
                <th>Block Amount</th>
				<th>Single Amount</th>
				<th>Ecobrick</th>
				
				
            </tr>
        </thead>
        <tfoot>
            <tr>
			<th>ID</th>
                <th>Sent</th>
                <th>Sender</th>
                <th>Receivers</th>
				<th>Type</th>
                <th>Block Amount</th>
				<th>Single Amount</th>
				<th>Ecobrick</th>
			
            </tr>
        </tfoot>
    </table>
</div>

<br><br>
<div class="page-paragraph">
<h4>Central Reserve Satus</h4>
<h6>Running and yearly brikchain totals.</h6>
</div>		
			
<div class="overflow">
<?php include 'db.php';?>
		
<?php

$sql = "SELECT * FROM vw_brk_by_year Order by `year` DESC;";

	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	
		echo'<table id="brikchain" class="display"><tr><th>Year</th><th>From Date</th><th>To Date</th><th>Total</th></tr>';
	
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr><td><var>".$row["year"]."</var></td><td><var>".$row["from_date"]."</var></td><td>".$row["to_date"]."</var></td><td><var>".$row["total_brk"]."β) </var></td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
	</div>
	<br><br>

	<div class="page-paragraph">

<h4>Authenticated Ecobricks</h4>
<h6>All the ecobricks authenticated on the chain.</h6>
</div>

<div class="overflow">
			<table id="ecobricks" class="display" style="width:100%">
        <thead>
            <tr>
                <th style="width: 150px !important;">Image</th>
                <th>Logged</th>
                <th>Maker</th>
                <th>Weight</th>
				<th>Value</th>
				<th>Volume</th>
                <th>CO2</th>
				<th>Serial</th>
				
				
            </tr>
        </thead>
        <tfoot>
            <tr>
			<th>Image</th>
                <th>Logged</th>
                <th>Maker</th>
                <th>Weight</th>
				<th>Value</th>
				<th>Volume</th>
                <th>CO2</th>
				<th>Serial</th>
            </tr>
        </tfoot>
    </table>
</div>

</div>
</div>



			
		



	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>

