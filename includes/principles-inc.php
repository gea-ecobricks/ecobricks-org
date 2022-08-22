<!--Content Includes Page template: v.1.0.2-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://ecobricks.org/webp/principles-banner-1600px.webp?v3">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/svgs/earth-home-animated-v4.svg">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/principles-$lang.php");?>

<?php require_once ("header.php");?>


<STYLE>

ul {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  font-weight: 300;
  color: #222222;
  font-size: 1.2em;
  line-height: 1.4;}

  li {
  margin-bottom: 15px;
}

/*This sets up the the first splash content block that is unique to the top of each page*/

	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		
		background: url(webp/principles-banner-1600px.webp?v6) bottom;

		background-color: #088408;
		
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
		background: url(webp/principles-banner-1600px.webp?v6) bottom left;
		background-color: #088408;
    	background-repeat: no-repeat;
		/*margin: -3px 0 -20px 0;*/
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 100%;
		position: relative;
		margin: auto;
}
}


@media screen and (min-width: 700px) { 
.splash-image {
  	z-index: 5;
  	position: relative;
  	text-align: center;
  	flex: 35%;
	padding: 30px;
	box-sizing: border-box;
	margin-top: 0px;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 0px 30px 0px 0px;
	box-sizing: border-box;
	text-align: left;
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



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
  flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



.splash-heading { 
	font-family: 'Arvo', Georgia, serif;
  	color: white;
  	font-weight: 300;
  	text-shadow: 0 0 10px #243f01;
}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color:  #e9ffcc;
  /*text-shadow: 0px 0px 10px #fff;*/
  	margin: 15px 0;
  	
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.3em;
		line-height: 1.3;
		font-weight: 400;
  }
}

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #088408; 

}

</style>

</head>
							  
											  
<BODY id="full-page">

	  <div id="load-background">
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>
