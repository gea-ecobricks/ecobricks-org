
<!-- PHP starts by laying out canonical URLs for the page and language -->

<?php
	$parts = explode ("/", $_SERVER['SCRIPT_NAME']);
	$name = $parts [count($parts)-1];
	;?>
	
 
	<meta charset="utf-8">
	<link rel="canonical" href="https://www.ecobricks.org/<?php echo ($lang); ;?>/<?php echo ($name); ;?>"> 
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

	<link rel="alternate" href="https://ecobricks.org/en/<?php echo ($name); ;?>" hreflang="en" />
	<link rel="alternate" href="https://ecobricks.org/id/<?php echo ($name); ;?>" hreflang="id" /> 
	<link rel="alternate" href="https://ecobricks.org/es/<?php echo ($name); ;?>" hreflang="es" /> 
	<link rel="alternate" href="http://ecobricks.org/<?php echo ($lang); ;?>/<?php echo ($name); ;?>" hreflang="x-default" />


<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 

<!-- Arvo loads very last to speed up first load.  See the script in the footer that triggers this-->

<noscript>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />
</noscript>
		
<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
		
<link rel="stylesheet" type="text/css" href="stylesheet-1-1.css?v0.23">

	
<!-- This calls our webmanifest wich turns our page into a progress web app (PWA) 
<link rel="manifest" href="manifest.webmanifest">-->

<!-- This allows Ecobricks.org to be used a PWA on iPhones
	
<meta name="apple-mobile-web-app-capable" content="yes">-->

<!--<meta name="viewport" content="width=device-width, initial-scale=1.8, target-densitydpi=160, maximum-scale=1, user-scalable = no">
-->

<!-- WHAT"S THIS? <meta http-equiv="Cache-control" content="no-store" Cache-Control: private, max-age=604800>
-->
<meta name="apple-mobile-web-app-title" content="Ecobricks.org">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	


<!-- Enables the nav menu grey circle on mobile by click-->

<script type="text/javascript">
	function appMenu() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
</script>


	

<!-- Arc CDN Script without delay - turned off for the moment-->
<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>


<!-- Inline styling to lay out the most important part of the page for first load view-->

<STYLE>

#cloud-banner img {
	width: 100% !important;
	margin-bottom: -10px;
}
	
#full-page {

	z-index: 0;

	position: relative;
	position: bottom;
	margin-top: 0px;
	padding-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
	overflow-x: hidden !important;
	width: 100%;
	max-width: 100%;

}

#header {  
	padding-top: 20px;
	padding-bottom: 14px;
	padding-left: 21px;
	z-index: 10;
	position: relative;
	background: white;
	box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.6);
	text-align: left;
	box-sizing: border-box;
}


@media screen and (min-width: 770px) and (max-width: 2000px) { 
#header object {
	width: 276px;
	height: 50px
	}
}

@media screen and (max-width: 769px) {
#header img {
  	width: 200px;
	}
}

#desktop-menu {
	margin-top: -72px;
	position: relative;
	z-index: 10;
	width: 100%;
	background-color: white;
	height: fit-content;  
	text-align: right;
	opacity: 1;
}



#preclosed1 {display: none;}
#preclosed2 {display: none;}
#preclosed3 {display: none;}
#preclosed4 {display: none;}
#preclosed5 {display: none;}
#preclosed6 {display: none;}
#preclosed7 {display: none;}
#preclosed8 {display: none;}
#preclosed9 {display: none;}
#preclosed10 {display: none;}



</style>	
