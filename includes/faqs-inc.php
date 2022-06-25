<!--Content Page template: v.1.0.0-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/webp/faq-bottom.webp">
<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/cloud-back.svg">
<link rel="preload" as="image" href="https://ecobricks.org/webp/faq-top.webp">
<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/regenreports-$lang.php");?>

<?php require_once ("header.php");?>

<STYLE>

#clouds {
	background: url(http://ecobricks.org/svgs/cloud-back.svg) center top;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
	height: 70vh;
   /* min-height: 500px;*/
	background-color: #00ffff;
    display: flex;
    align-items: flex-end;
    margin-top: 0px;
}

#cloud-banner {
	z-index: 4;
	position: relative;
	height: 25vh;
}

	

@media screen and (min-width: 770px) { 
	#header-content-block {
		text-align: center;
		background-color: #59c1fdb2;
		border-radius: 12px;
		height: 100vh;
		padding: 25px 7% 50px 7%;
		margin: -85vh 10% -50px 10%;
		z-index: 5;
}
}

@media screen and (max-width: 770px) { 
	#header-content-block {
		text-align: center;
		background-color: #59c1fdb2;  /*#74acffb2;*/
		border-radius: 12px;
		height: 80vh;
		padding: 25px 3% 25px 3%;
		margin-bottom: 0px;
		margin: -86vh 2.9% -60px 2.9%;
		z-index: 5;
	}
}

</style>


</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>
