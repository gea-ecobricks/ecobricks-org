

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../webp/brikchain-450px.webp">
<link rel="preload" as="image" href="../svgs/brik-market-banner3.svg">
<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/brikchain.css">-->


<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/brikchain-$lang.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>


<script>
$(document).ready(function() {
    $('#brikchain').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "../scripts/ajax-brk-trans.php"
    } );
} );



	$.extend( $.fn.dataTable.defaults, {
    ordering:  false

} );



$(document).ready(function() {
    $('#ecobricks').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "../scripts/ajax-ecobricks.php"

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

@media screen and (max-width: 700px) { 
#block1, #block2, #block3, #block4, #block5, #block6 {
	overflow: scroll ;
} 
}

@media screen and (min-width: 701px) { 
#block1, #block2, #block3, #block4, #block5, #block6 {
	overflow: none ;
} 
}

#side-module-desktop-mobile {
	background: #f8b956;
	font-size: 1.1em;
}



/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-color: #2A91DA;
	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;

		background-color: #2A91DA;

}
}




#splash-bar {

	background-color: #2A91DA;
	

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

#brikchain tr:nth-child(even){background-color:  var(--table-background-1);}
#brikchain tr:nth-child(odd){background-color:  var(--table-background-2);}


#brikchain tr:hover {background-color: var(--table-background-heading);}

#brikchain th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--table-background-heading);
  color: var(--main-background);
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




.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
