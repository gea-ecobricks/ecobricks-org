

<!--Image files to preload that are unique to this page-->
 
<!-- <link rel="preload" as="image" href="../logos/gea-horizontal.svg"> -->
<link rel="preload" as="image" href="../webp/eb-sky-400px.webp">
<link rel="preload" as="image" href="../webp/build-banner-1400px.webp">

<!-- <link rel="stylesheet" type="text/css" href="../stylesheet-content-2024.css?v=2.3">  -->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/how-$lang.php");?>

  
<STYLE>


img {
  max-width: 100%;
}

#play-button {
    width: 60px;
    height: 60px;
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;
}

#play-button::after {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 15px 0 15px 26px;
    border-color: transparent transparent transparent #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}


.advanced-box-content {
    padding: 2px 15px 15px 15px;
    max-height: 0;  /* Initially set to 0 */
    overflow: hidden;  /* Hide any overflowing content */
    transition: max-height 0.5s ease-in-out;  /* Transition effect */
	font-size:smaller;
	margin-top:-10px;
}


.advanced-box-header:hover {
	color:white;
}

.dropdown {
  float: right;
  overflow: hidden;
  margin-bottom: -10px;
}

@media screen and (max-width: 700px) { 
	.splash-content-block {
	
		    background: url(../webp/build-banner-1400px.webp) bottom;
        background-color: #FA8D04;
        /* filter: hue-rotate(-30deg); */
		

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
	
		    background: url(../webp/build-banner-1400px.webp) bottom;
        background-color: #FA8D04;
        /* filter: hue-rotate(-30deg); */
		
}
} 


#splash-bar {

    background-color: #FA8D04;
    /* filter: hue-rotate(-30deg); */
}


.module-btn {
  background: var(--emblem-orange);
}
	
.module-btn:hover {
  background: var(--emblem-orange-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
