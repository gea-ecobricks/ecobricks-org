
<!--Image files to preload that are unique to this page-->


<link rel="preload" as="image" href="../pngs/openbooks.png">
<link rel="preload" as="image" href="../svgs/brik-market-banner3.svg">
<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/brikchain.css">-->


<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/open-books-$lang.php");?>



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
		"ajax": "../scripts/ajax-ecobricks.php"

    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#revenues').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "../scripts/ajax-revenues-trans.php"

    } );
} );

</script>

<script>

$(document).ready(function() {
    $('#expenses').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "../scripts/ajax-expenses-trans.php"

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

<!--This loads CSS specific to this page-->

<style>






/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(../svgs/brik-market-banner3.svg) bottom;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-color: #2A91DA;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(../svgs/brik-market-banner3.svg) bottom;
		background-repeat: no-repeat;
		background-size: cover;
		background-color: #2A91DA;
		

	
}
}


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {

	background-color: #2A91DA;
    color: black !important;

}

#block1, #block2, #block3, #block4, #block5, #block6 {
	overflow: scroll !important;
}

.live-data {background: var(--yellow-alert);}

/* Huh? */

#revenues {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: 300;
  color: var(--text-color);
}

#revenues td, #revenues th {
  border: 1px solid var(--table-background-hover);
  padding: 8px;
}

#revenues tr:nth-child(even){background-color: var(--table-background-2);}

#revenues tr:nth-child(odd){background-color: var(--table-background-1);}


#revenues tr:hover {background-color: var(--table-background-hover) ;}

#revenues th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--table-background-heading);
  color: var(--main-background);
}

label {
  color: var(--h1);
}

#revenues a {
  color: var(--text-color);
}

#revenues a:hover {
  color: var(--h1);
}

#expenses a {
  color: var(--text-color);
}

#expenses a:hover {
  color: var(--h1);
}


.dataTables_wrapper .dataTables_filter input {
  background-color: var(--table-background-1);
  margin-bottom: 20px;
  color: var(--text-color);
}

.dataTables_wrapper .dataTables_length select {
  background-color: var(--table-background-1);
  color: var(--text-color);
}

.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
  color: var(--text-color);
}

.dataTables_paginate {
  background-color: var(--table-background-heading);
}

#expenses_previous {
  color: white !important;
  filter: invert(100);
}
/* Huh? */


#expenses {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: 300;
  color: var(--text-color);
}

#expenses td, #expenses th {
  border: 1px solid var(--table-background-hover);
  padding: 8px;
}

#expenses tr:nth-child(even){background-color: var(--table-background-1);}
#expenses tr:nth-child(odd){background-color: var(--table-background-2);}

#expenses tr:hover {background-color: var(--table-background-hover);}

#expenses th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--table-background-heading);
  color: var(--main-background);
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


#brikchain {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: 300;
  color: var(--text-color);

}

#brikchain td, #brikchain th {
  border: 1px solid var(--table-background-hover);
  padding: 8px;


}

#brikchain tr:nth-child(even){background-color:  var(--table-background-1);}
#brikchain tr:nth-child(odd){background-color:  var(--table-background-2);}


#brikchain tr:hover {background-color: var(--table-background-hover);}

#brikchain th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: var(--table-background-heading);
  color: var(--main-background);
}


.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}
	


	

</style>	

<?php require_once ("../header-2024.php");?>
			  
