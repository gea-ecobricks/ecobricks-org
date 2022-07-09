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
<link rel="preload" as="image" href="https://ecobricks.org/webp/brikmarket-400px.webp?v1.3">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/brik-market-banner2.svg">


<?php require_once ("header.php");?>

<!-- Required script for something?? -->

<?php require_once ("meta/details-ecobrick-en.php");?>


<STYLE>

@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(https://ecobricks.org/svgs/brik-market-banner2.svg) bottom;
        background-color: #2A91DA;
		
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
		min-height: 65vh;
		max-height: 65vh;

		padding: 0px 7% 0px 15%;
		z-index: 5;
		position: relative;
		
        
		background: url(https://ecobricks.org/svgs/brik-market-banner2.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


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
    margin: auto;
}
}



.splash-heading { 
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
    font-family: Arvo, serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4em;
      line-height: 1.3;
      margin: auto;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.9em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:80px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #2A91DA;

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
	







button {
      margin-top: 15px;
      font-size: 1.3em;
	  padding: 8px 10px 8px 10px;
	  float: right;
	  margin-bottom: 20px;
      /*background: #ded9d9;

      border-radius: 8px;
      border: none;

      margin-bottom: 15px;

	  border: 1px;
	  border-color: grey;*/

}

/*
#main-details {
	background-color: #ded9d9;
	margin-top: 0px;
	margin-bottom: 35px;
	margin-right: 0px;
	margin-left: -7px;
	width: 100%;
	padding: 5% 5% 5% 5%;
}


#details-content {
	margin: auto;
 	box-sizing: border-box;
  	width: 90%;
	margin-top: 30px;
}

*/

.transaction {
	font-size: 1.1em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.2;
    font-weight: 400;
	margin-top: 40px;
}

/*
.serial {
	font-size: 3.2em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;
	margin-top: 20px;

}

.date {
	font-size: 1.3em;
	font-family: 'Arvo', Georgia, sans-serif;
  	color: black;
  	line-height: 1.3;
	font-weight: bolder;
	padding-bottom: 15px;

}
*/

.main {
	font-size: 1.3em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
	  font-weight: 300
}

.status {
	font-size: 1.1em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.4;
	  font-weight: 300
}

.general-field {
	font-size: 1.1em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 12px;
	font-weight: 300;
}
 
p {
	font-size: 1.1em;
	font-family: 'Mulish', Arial, Helvetica, sans-serif;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 12px;
	font-weight: 300;
}

b {font-weight: 500;}

img {padding-right: 5%;}

#photo {width: 100%;
	background-color: #ded9d9;
	margin-left:-5%;}

</style>

</head>
							  
											  
<BODY id="full-page">

	
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>


							  
											  

