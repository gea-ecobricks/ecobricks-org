
<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../webp/earthen-400px.webp">
<link rel="preload" as="image" href="../webp/blue-ode-750px.webp">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/sequest-$lang.php");?>




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
	
		
		background: url(../svgs/BlUE-ode-to-plastic-Sequestration.svg) bottom;
		
}
}



.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
