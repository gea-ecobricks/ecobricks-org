
<?php require_once ("lang.php");?>

<?php echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

_END;?>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://www.ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/webp/brikchain-450px.webp">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/brik-market-banner3.svg">
<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/brikchain.css">-->


<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/brikchain-$lang.php");?>

<!--This loads the page's header-->

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>


<script>
$(document).ready(function() {
    $('#brikchain').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "ajax-brk-trans.php"
    } );
} );

</script>

<script>

	$.extend( $.fn.dataTable.defaults, {
    ordering:  false

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
<script>

$(document).ready(function() {
    $('#cash_tran').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "ajax-cash-trans.php"

    } );
} );

</script>




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

<!--This loads CSS specific to this page-->

<style>

#block1, #block2, #block3, #block4, #block5, #block6 {
	overflow: scroll ;
}


.live-data {
		
		font-size: 1.5em;
		font-family: "courier new, monospace" !important;
		color: #222;
		line-height: 1.3;
		font-weight: 300;
		background: #fbe9c8;
		padding: 20px;
		border-radius: 10px;
		margin: 12px;
}

.blink {
            animation: blinker 1.5s linear infinite;
            color: #00AA44;
            font-family: "courier new, monospace" !important;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
				
            }
        }



/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-color: #2A91DA;
		background-repeat: no-repeat;
		background-size: cover;
		
		text-align: left;
		height: 70vh;
		padding: 20px 5% 25px 5%;
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
		
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-repeat: no-repeat;
		background-size: cover;
		background-color: #2A91DA;
		
		text-align: left;
		min-height: 69vh;
		padding: 0px 7% 20px 7%;
		z-index: 5;
		position: relative;
    	background-repeat: no-repeat;
		margin: 0px 0 -20px 0;
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
		padding: 0px 30px 20px 0px;
		box-sizing: border-box;
		text-align: right;
		margin: auto;
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
	text-shadow: 0px 0px 8px #666;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.6em;
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
  text-shadow: 0px 0px 6px #666;
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
		padding: 0px 30px 0px 0px;
  }
} 


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #2A91DA;
	/*background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	margin-bottom: 40px;

	-webkit-transform: skewY(-3deg);
 	 -moz-transform: skewY(-3deg);
 	 -ms-transform: skewY(-3deg);
 	 -o-transform: skewY(-3deg);
 	 transform: skewY(-3deg);*/
	

}



/* Huh? */


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
  background-color: #2A91DA;
  color: white;
}


/* Huh? */


#cash_tran {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: 300;
}

#cash_tran td, #cash_tran th {
  border: 1px solid #ddd;
  padding-left: 8px;
}

#cash_tran tr:nth-child(even){background-color: #f2f2f2;}

#cash_tran tr:hover {background-color: #ddd;}

#cash_tran th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2A91DA;
  color: white;
}

.dataTables_wrapper {
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
}

#cash_tran td {
	padding: 3px 3px 0px 10px;
}
	
/* Huh? */


#ecobricks {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: 300;
}

#ecobricks td, #ecobricks th {
  border: 1px solid #ddd;
  padding-left: 8px;
}

#ecobricks tr:nth-child(even){background-color: #f2f2f2;}

#ecobricks tr:hover {background-color: #ddd;}

#ecobricks th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2A91DA;
  color: white;
}

.dataTables_wrapper {
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
}

#ecobricks td {
	padding: 3px 3px 0px 10px;
}

.overflow {
	margin: 5px;
	overflow: scroll !important;
}

</style>

</head>
							  
											  
									  
<BODY id="full-page">

	<div id="load-background">

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>