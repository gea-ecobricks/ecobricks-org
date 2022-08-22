
<?php require_once ("lang.php");?>

<?php echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

_END;?>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://www.ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/webp/brikchain-450px.webp">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/gray-to-orange-brickable-banner.svg">
<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/brikchain.css">-->


<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/brickable-$lang.php");?>

<!--This loads the page's header-->

<?php require_once ("header.php");?>



<style>


action-btn {background-color: #FF7F2A;}

/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(https://ecobricks.org/svgs/gray-to-orange-brickable-banner.svg) bottom;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-color: #FF7F2A;
		background-repeat: no-repeat;
		background-size: cover;
		
		text-align: left;
		min-height: 70vh;
		padding: 20px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
    	
		margin-top: 25px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
		position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(https://ecobricks.org/svgs/gray-to-orange-brickable-banner.svg) bottom;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-repeat: no-repeat;
		background-size: cover;
		background-color: #FF7F2A;
		
		text-align: left;
		min-height: 69vh;
		padding: 0px 7% 20px 7%;
		z-index: 5;
		position: relative;
    	background-repeat: no-repeat;
		margin: 20px 0 -20px 0;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 100%;
		background-size: cover;
		position: relative;
}
}



/*This is the text box on the left of the splash that holds the splash header and sub text*/

@media screen and (max-width: 700px) { 
.splash-text-box {
		position: relative;
		flex: 100%;
		padding: 10px 10px 0px 0px;
		box-sizing: border-box;
		text-align: right;
		
}
}

@media screen and (min-width: 700px) { 
.splash-text-box {
		z-index: 5;
		position: relative;
		flex: 65%;
		padding: 60px 30px 20px 0px;
		box-sizing: border-box;
		text-align: right;
		margin: auto;
}
}


@media screen and (max-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: left;
		flex: 25%;
		width: 250px;
		padding: 0px;
		box-sizing: border-box;
		margin: 0px 0px 0px 10px;
}
}

/*This is the image on the right of the content block*/
@media screen and (min-width: 700px) { 
.splash-image {
		z-index: 5;
		position: relative;
		text-align: center;
		flex: 35%;
		padding: 0px;
		box-sizing: border-box;
		margin: auto;
}
}

.splash-heading { 

	font-family: 'Arvo', Georgia, serif;
  
	color: white;
	font-weight: 300;
	text-shadow: 0px 0px 8px #666;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.6em;
      line-height: 1.3;
      margin: 0px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 6em;
      line-height: 1.3;
      margin: auto;
  }
}

.splash-sub {
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  margin: 15px 0;
  text-shadow: 0px 0px 6px #666;
	/*text-shadow: 0px 0px 10px #fff;*/
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.45em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.2em;
		line-height: 1.3;
		font-weight: 400;
		padding: 0px 30px 0px 0px;
  }
} 


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #FF7F2A;
	/*background: url(wp-content/uploads/2020/01/Gray-to-green-catalyst-banner-1.svg) right top;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	margin-bottom: 40px;

	-webkit-transform: skewY(-3deg);
 	 -moz-transform: skewY(-3deg);
 	 -ms-transform: skewY(-3deg);
 	 -o-transform: skewY(-3deg);
 	 transform: skewY(-3deg);*/
	

}



</style>

</head>
							  
											  
									  
<BODY id="full-page">

	<div id="load-background">

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>