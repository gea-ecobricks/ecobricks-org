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



<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/featured-$lang.php");?>

<?php require_once ("header.php");?>


<STYLE>
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: grey;
}

.flex-container > .gal-photo {
  background-color: #DFDFDF;
  margin: 2px;
  padding: 10px;
 /*text-align: center;*/
}

.gal-photo {
    padding: 10px;
	width: 225px;
	max-width:225px;
	overflow: hidden;
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
		min-height: 73vh;
		/*padding: 50px 5% 25px 5%;*/
		margin-bottom: 0px;
		z-index: 5;
       
	
        background-color: grey;
		
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
		/*padding: 50px 7% 50px 7%;*/
		z-index: 5;
		position: relative;
        
        background-color: grey;
		
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


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:80px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: grey;

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
