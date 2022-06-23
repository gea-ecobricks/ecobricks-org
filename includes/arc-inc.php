<?php require_once ("lang.php");
echo <<<_END
<!DOCTYPE html>
<html lang="$lang">
_END;?>

<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://ecobricks.org/webp/arc-purple2.webp">
<link rel="preload" as="image" href="https://ecobricks.org/webp/arc-logos.webp">
<link rel="preload" as="image" href="https://ecobricks.org/webp/faq-bottom.webp">



<?php require_once ("meta/arc-$lang.php");?>

	<?php require_once ("header.php");?>




<!-- Arc CDN Script without delay-->
<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>



<STYLE>

#clouds {

    width: 100%;
	height: 70vh;
    display: flex;
    align-items: flex-end;
  /*  margin-bottom: -70px;*/
}


/*
#cloud-banner {
	z-index: 4;
	position: relative;
	height: 25vh;
}*/

	
@media screen and (max-width: 700px) { 
	#header-content-block {
		text-align: left;
		height: 60vh;
		padding: 10vh 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		background: url(https://ecobricks.org/webp/arc-purple2.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ECECEC;
		margin-top: 50px;

	}
}


@media screen and (min-width: 700px) { 
	#header-content-block {
		text-align: left;
		height: 60vh;
		padding: 20vh 7% 50px 7%;
		z-index: 5;
		position: relative;
		background: url(https://ecobricks.org/webp/arc-purple2.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ECECEC;
		margin: 0 0 -20px 0;

}
}


@media screen and (max-width: 700px) { 
#header-box {
  z-index: 5;
  position: relative;
  width: 100%;
  text-align: left;
}
}

@media screen and (min-width: 700px) { 
#header-box {
  z-index: 5;
  position: relative;
  width: 80%;
}
}


.header-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: green;
  font-weight: 300;
  text-shadow: 0 0 10px #fff;

}

@media screen and (max-width: 700px) {
	.header-heading {
      font-size: 3.6em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.header-heading {
      font-size: 4em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.header-sub {
  font-family: 'Arvo', Georgia, serif;
  color: grey;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
}

@media screen and (max-width: 700px) {
	.header-sub {
		font-size: 1.45em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.header-sub {
		font-size: 2.3em;
		line-height: 1.3;
		font-weight: 400;
  }
}


@media screen and (max-width: 769px) {

#header-box img {

	width: 60%;
	margin-left: 40%;
}
}


#grey-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #ECECEC;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 1;
	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);

	margin-bottom: 40px;
}


#main-content {
  margin: auto;
  box-sizing: border-box;
}
@media screen and (max-width: 700px) {
  #main-content {
      width: 90%;
	  margin-top: -20px;
  }
}
@media screen and (min-width: 700px) and (max-width: 1024px) {
  #main-content {
      width: 90%;
  }
}
@media screen and (min-width: 1024px) {
  #main-content {
      width: 80%;
  }
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}

/* Create two unequal columns that sits next to each other */


/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 15px 15px 15px 0px;
  box-sizing: border-box;
}

/* Sidebar/right column */

@media screen and (min-width: 700px) {
	.side {
	flex: 24%;
	padding: 20px;
	box-sizing: border-box;
	margin-top: -80px;
	padding-top: 80px;
	background: rgb(212,212,212);
	background: linear-gradient(126deg, rgba(212,212,212,1) 10%, rgba(251,251,251,1) 71%);
	}
	}

@media screen and (max-width: 700px) {
	.side {
	flex: 24%;
	padding: 20px;
	box-sizing: border-box;
	
	}
	}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

mark {
 background-color:#c0ffc8;
 color: white;	
}

.intro-quote {
	color: white ! important;
	text-align: right;
	background-color: #7440f5;
	padding: 0px 10px 0px 10px;
	line-height: 1.5;
}

#quote {padding: 30px 15px 15px 5px;
text-align: right;}


@media screen and (max-width: 769px) {
	.lead-page-paragraph {
      font-size: 1.25em;
      line-height: 1.4;
      margin: 37px 0px 15px 0px;
  }
}
@media screen and (min-width: 769px) {
	.lead-page-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 25px 0px 5px 0px;
  }
}



</style>	

</head>

			  
											  
<BODY id="full-page">

	<div id="load-background">

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

