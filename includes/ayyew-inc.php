<!--Content Includes Page template: v.2-->

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../webp/principles-banner-1600px.webp?v3">
<link rel="preload" as="image" href="../svgs/earth-home-animated-v4.svg"> 

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->


<!--BOOKNOTES PLUGIN-->

<script src="https://api.earthen.io/booknotes/booknotes-curtain.js?v=3.6"></script>

<script src="https://api.earthen.io/booknotes/booknotes-scripts.js?v=3.5"></script>

<link rel="stylesheet" type="text/css" href="https://api.earthen.io/booknotes/booknotes-styles.css?v=3.5">



<?php require_once ("../meta/ayyew-$lang.php");?>


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
		
		background: url(../webp/principles-banner-1600px.webp?v6) bottom;

		background-color: #088408;

	}

  .splash-heading {
    font-size: 2.5em  !important;
}

  .splash-sub{
    font-size: 1.45em !important;
}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(../webp/principles-banner-1600px.webp?v6) top;
		background-size: contain;
		background-color: #088408;
    	
}
.splash-heading {
    font-size: 2.5em;
}

  .splash-sub{
    font-size: 2em !important;
}
}


#splash-bar {

	background-color: #088408; 

}


.module-btn {
  background: var(--emblem-green);
}
	
.module-btn:hover {
  background: var(--emblem-green-over);
}
	



</style>


<script>
    // Declare the global variables
    var lang = "en";
    var book = "Ecobricks.org";
    var chapNo = "2";
    var chapName = "The Ayyew Ecological Ethos";
    var chaptURL = "ayyew.php"



</script>


<?php require_once ("../header-2024.php");?>
