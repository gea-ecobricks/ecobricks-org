
<link rel="preload" as="image" href="../webp/earthcenter-banner-400px.webp">
<link rel="preload" as="image" href="../svgs/gray-to-blue-media-banner2.svg">
<link rel="preload" as="image" href="../webp/gray-to-blue-800px.webp">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/media-$lang.php");?>

<?php require_once ("../header.php");?>


<STYLE>

@media screen and (max-width: 700px) { 
	.splash-content-block {

		background: url(../webp/gray-to-blue-800px.webp) bottom;
		background-color: #0066FF;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {

		background: url(https://ecobricks.org/svgs/gray-to-blue-media-banner2.svg) bottom;
		background-color: #0066FF;

}
}



#splash-bar {
	background-color: #0066FF;
}	


.module-btn {
  background: var(--emblem-orange);
}
	
.module-btn:hover {
  background: var(--emblem-orange-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
