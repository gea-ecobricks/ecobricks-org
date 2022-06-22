<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://www.ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/eb-blue-no-clouds.svg">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/top-clouds-mobile.svg?v1">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/top-clouds-animated-desktop.svg?v1">
<!--This loads CSS specific to this page-->
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/what-$lang.php");?>

<!--This loads the page's header-->

<?php require_once ("header.php");?>

</head>
							  				  
<BODY id="full-page">

	<div id="load-background">

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

<!--Page Banner-->