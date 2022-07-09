<!--Content Page template: v.1.0.0-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD>  

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://ecobricks.org/webp/brikmarket-400px.webp?v1.3">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/brik-market-banner2.svg">

<?php require_once ("meta/details-ecobrick-en.php");?>

<?php require_once ("header.php");?>




<STYLE>


</style>

</head>
							  
											  
<BODY id="full-page">

	  <div id="load-background">
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>


							  
											  

