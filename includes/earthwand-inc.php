
<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../icons/earthwand-shadow.svg">
<link rel="preload" as="image" href="../webp/blue-ode-750px.webp">
<link rel="preload" as="image" href="../svgs/earthwand-background.svg">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/earthwand-$lang.php");?>




<!-- This loads CSS specific to this page -->

<STYLE>

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		
		background: url(../webp/blue-ode-750px.webp) bottom;
		/*background-color: #8BBAF0;*/
    	background-repeat: no-repeat;
		background-size: cover;
		

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
	
		
		background: url(../svgs/earthwand-background.svg) bottom;
		
}
}



.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

.earthwand-photo {width:40%;}
	
</style>	

<?php require_once ("../header-2024.php");?>
