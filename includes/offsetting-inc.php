
<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../icons/eco-accounting-icon-from-ecobricks-org-white.svg">
<link rel="preload" as="image" href="../svgs/earthwand-background-mobile.svg">
<link rel="preload" as="image" href="../svgs/earthwand-background.svg">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/offsetting-fr.php");?>




<!-- This loads CSS specific to this page -->

<STYLE>


#brk-values .module-btn {
  display:none;
}


@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		
		background: url(../svgs/earthwand-background-mobile.svg) bottom;
		/*background-color: #8BBAF0;*/
    	background-repeat: no-repeat;
		background-size: cover;
    height: 93vh !important;
	}

  .splash-heading {
    font-size: 3em  !important;
}

  .splash-sub{
    font-size: 1.6em !important;
}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
	
		
		background: url(../svgs/earthwand-background.svg) bottom;
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


.virtue-icons {
    padding:10px;
    margin-bottom: 10px;
    width:90%;
    margin-top: 10px;
}

.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

.earthwand-photo {width:40%;
padding: 10px; display: flex;}

.earthwand-photo img {width:100%;}

.earthwand-photo-duo {
    width:100%;
    display:flex; 
    flex-flow:row; 
    padding:0px;"
}
	
</style>	

<?php require_once ("../header-2024.php");?>
