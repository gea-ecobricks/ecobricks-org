<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD>

<!--Image files to preload that are unique to this page-->

<HEAD>
	
<meta charset="utf-8">


<!--  Set any page specific graphics to preload-->
<link rel="preload" as="image" href="https://www.ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/top-clouds-mobile.svg?v1">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/top-clouds-animated-desktop?v1">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/ecobrickable-square.svg?v0.4">
<link rel="preload" as="image" href="https://www.ecobricks.org/webp/mountain-top2.webp?v2">
<link rel="preload" as="image" href="https://www.ecobricks.org/webp/vision-bottom4.webp">
<!--This loads CSS specific to the landing page-->
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/welcome.css?v1.1">

<!-- This loads the page's meta tags:  *be sure to add the page's name!*-->
<?php require_once ("meta/welcome-$lang.php");?>

<!--This loads the page's header-->

<?php require_once ("header.php");?>

</head>

