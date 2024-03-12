

<link rel="preload" as="image" href="../icons/ecobrickable-icon-from-ecobricks-org-white.svg?v=1">
<link rel="preload" as="image" href="../svgs/gray-to-orange-brickable-banner.svg">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/brickable-$lang.php");?>


<style>


.action-btn {background: #FF7F2A !important;}

/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		background: url(../svgs/gray-to-orange-brickable-banner.svg) bottom;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-color: #FF7F2A;
		

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(../svgs/gray-to-orange-brickable-banner.svg) bottom;
		background-repeat: no-repeat;
		background-size: cover;
		background-color: #FF7F2A;
		
		

}
}


#splash-bar {

	background-color: #FF7F2A;
	
}



.module-btn {
  background: var(--emblem-orange);
}
	
.module-btn:hover {
  background: var(--emblem-orange-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
