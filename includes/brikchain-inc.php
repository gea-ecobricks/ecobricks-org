
<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

_END;?>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://www.ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/webp/brikchain-450px.webp">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/top-clouds-animated-desktop.svg?v1">
<!--This loads CSS specific to this page-->
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/brikchain.css">


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

<script>

$(document).ready(function() {
    $('#cash_tran').DataTable( {
		"processing": true,
        "serverSide": true,
		"ajax": "ajax-cash-trans.php"

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

<STYLE>


</head>
							  
											  
									  
<BODY id="full-page">

	<div id="load-background">

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>