
<link rel="preload" as="image" href="../webp/gea-perspective-400px.webp">
<link rel="preload" as="image" href="../webp/about-banner-1500px-b.webp">
<link rel="preload" as="image" href="../webp/about-banner-800px.webp">
<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/richard-$lang.php");?>

<STYLE>

/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(../webp/about-banner-800px.webp) bottom;
		background-color: #3FB104;;
		


	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(../webp/about-banner-1500px-b.webp) bottom;
		background-color: #3FB104;;
		
	
}
}



.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 300;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 1.8em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 2.9em;
      line-height: 1.3;
      margin: 0px 0px 10px 0px;
  }
}

.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: #8DD2BF;
  margin: 15px 0;
	/*text-shadow: 0px 0px 10px #fff;*/
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
		font-size: 1.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {

	background-color: #3FB104;

}

	

.module-btn {
  background: var(--emblem-green);
}
	
.module-btn:hover {
  background: var(--emblem-green-over);
}
	


	

</style>	

<?php require_once ("../header-2024.php");?>
			  
