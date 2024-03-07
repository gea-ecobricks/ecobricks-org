
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
		height: 93vh !important;
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
	
		
		background: url(../svgs/BlUE-ode-to-plastic-Sequestration.svg) bottom;
		min-height: 85vh !important;
    padding: 0px 7% 0px 7% !important;
		
}

.splash-heading {
    font-size: 3.4em  !important;
}

  .splash-sub{
    font-size: 2em !important;
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
