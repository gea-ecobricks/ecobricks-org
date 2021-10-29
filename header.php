

<!-- This calls GEA typography -->

<!-- Menu icons -- not so necessary
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="print" onload="this.media='all'">

<link href="https://fonts.gstatic.com" rel="stylesheet" media="print" onload="this.media='all'">


<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 


<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Mulish:wght@300;400&display=swap" rel="stylesheet"> 

<link rel="defer" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet"> -->


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 
		
<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
		
<link rel="stylesheet" type="text/css" href="stylesheet-1-1.css?v0.2">

	
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
	
 


<!-- UNIVERSAL SITE JAVA SCRIPTS-->
	
		
<!-- Localise translation scripts-->


<script src="https://global.localizecdn.com/localize.js" async></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: '911e632bfc957',
    rememberLanguage: true,
  });
</script>


<!-- enables the nav menu on mobile by click-->
	
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

<!-- ARC DELAY LOAD SCRIPT  This is a special script to load the arc script 8 seconds after the full page has loaded, this prevents Arc from slowing down our page load and boost our google page speed score-->

<script type="text/javascript" defer>

document.addEventListener("DOMContentLoaded", function(event) {
	setTimeout(addScript, 8000)
  });
  
  function addScript() {
  
	script = document.createElement('script');
	script.type = 'text/javascript';
	script.async = true;
	script.onload = function() {
	  console.log("Added Script");
	};
	script.src = 'https://arc.io/widget.min.js#mJFtQsHF';
	document.getElementsByTagName('head')[0].appendChild(script);
  }
</script>


<!-- Arc CDN Script 

<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>-->




<STYLE>
	


	#full-page {
	z-index: 0;
	text-align: center;
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

#clouds {
	background: url(svgs/cloud-back.svg) center top;
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
	/*background-color: #00ffff;*/
}

 #cloud-banner img {
	width: 100% !important;
	margin-bottom: -10px;
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
