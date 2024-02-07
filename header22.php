<!-- PHP starts by laying out canonical URLs for the page and language -->
<?php
	$parts = explode ("/", $_SERVER['SCRIPT_NAME']);
	$name = $parts [count($parts)-1];
	if (strcmp($name, "welcome.php") == 0)
  $name = "";
	;?>
	
	<link rel="canonical" href="https://ecobricks.org/<?php echo ($lang); ;?>/<?php echo ($name); ;?>"> 
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

	<link rel="alternate" href="https://ecobricks.org/en/<?php echo ($name); ;?>" hreflang="en">
	<link rel="alternate" href="https://ecobricks.org/id/<?php echo ($name); ;?>" hreflang="id"> 
	<link rel="alternate" href="https://ecobricks.org/es/<?php echo ($name); ;?>" hreflang="es"> 
	<link rel="alternate" href="https://ecobricks.org/fr/<?php echo ($name); ;?>" hreflang="fr"> 
	<link rel="alternate" href="http://ecobricks.org/en/<?php echo ($name); ;?>" hreflang="x-default">

<!-- Arc CDN Script without delay
<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>-->

<meta property="og:site_name" content="Ecobricks.org">
<meta property="article:publisher" content="https://web.facebook.com/ecobricks.org">


<!-- This allows Ecobricks.org to be used a PWA on iPhones-->
	
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-title" content="Ecobricks.org">
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<link rel="apple-touch-icon" sizes="57x57" href="../icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	

 
<link rel="stylesheet" type="text/css" href="../stylesheet-2024.css?v=2>">
<link rel="stylesheet" type="text/css" href="../footer-stylesheet.css">
<link rel="stylesheet" type="text/css" href="https://api.earthen.io/subscription-stylesheet.css">



<!--This enables the Light and Dark mode switching-->
<script type="module" src="https://api.earthen.io/dark-mode-toggle.mjs.js"></script>
<script src="https://api.earthen.io/subscription-system.js?v=1"></script>
<script src="https://api.earthen.io/core-functions.js"></script>


<!-- <script type="module" src="../mode-toggle.mjs.js"></script> -->
<link rel="stylesheet" type="text/css" href="mode-slider.css">
<!--Default Light Styles to load first-->
<link rel="preload" href="../mode-light.css" as="style" onload="this.rel='stylesheet'">
 <!--Stylesheets for light and dark mode.  They need to be called here-->
<link rel="stylesheet" href="../mode-light.css?v5.8" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
<link rel="stylesheet" href="../mode-dark.css?v=7.2" media="(prefers-color-scheme: dark)">
 
<!-- <link rel="stylesheet" type="text/css" href="../stylesheet-general.css?v=4.4">  -->

<script>

/*ROLL CALL*/

window.onload = function() {
    var siteName = 'Ecobricks.org'; // Default language code
  var currentLanguage = 'fr'; // Default language code
  switchLanguage('fr')
  updateLogoColor(); 

}
</script>


<!-- Inline styling to lay out the most important part of the page for first load view-->

<STYLE>

@font-face {
  font-family: "Mulish";
  src: url("../fonts/Mulish-Light.ttf");
  font-display: swap;
  font-weight: 300;
 }

 @font-face {
  font-family: "Mulish";
  src: url("../fonts/Mulish-Regular.ttf");
  font-display: swap;
  font-weight: 500;
 } 

 @font-face {
  font-family: "Arvo";
  src: url("../fonts/Arvo-Regular.ttf");
  font-display: swap;
 }



</style>