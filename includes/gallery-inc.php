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
<link rel="preload" as="image" href="https://ecobricks.org/pngs/gobriktrophy.png">
<link rel="preload" as="image" href="https://ecobricks.org/webp/build-banner-1400px.webp">



<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/top-tens-$lang.php");?>

<?php require_once ("header.php");?>


<STYLE>
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: #D4D4D4;
}

.flex-container > .gal-photo {
  background-color: white;
  margin: 2px;
  padding: 10px;
 /*text-align: center;*/
}

.gal-photo {
    padding: 10px;
	width: 200px;
}

@media screen and (min-width: 700px) { 
.flex-gallery {
    display: flex;
  flex-direction: row;
  margin-bottom: 25px;
}
}

@media screen and (max-width: 699px) { 
.flex-gallery {
    display: flex;
  flex-direction: column;
  width: 100%;
  margin-bottom: 20px;
}
}



.gal-photo {
    padding: 10px;
}

.gal-photo p {font-size: 0.9em;
    margin-bottom: 0px;
    
}
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(https://ecobricks.org/webp/build-banner-1400px.webp) bottom;
        background-color: #FA8D04;
		
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
		min-height: 67vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
        
		background: url(https://ecobricks.org/webp/build-banner-1400px.webp) bottom;
        background-color: #FA8D04;
		
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

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
	padding: 0px;
	box-sizing: border-box;
	margin: auto;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
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


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:80px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #F98D03;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}
	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>
