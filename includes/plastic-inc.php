
<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../svgs/the-biosphere.svg">
<link rel="preload" as="image" href="../webp/plastic-long-story-1200px.webp?v=2">




<!--BOOKNOTES PLUGIN-->

<script src="https://api.earthen.io/booknotes/booknotes-curtain.js" defer></script>

<script src="https://api.earthen.io/booknotes/booknotes-scripts.js" defer></script>

<link rel="stylesheet" href="https://api.earthen.io/includes/booknotes-styles.css">




<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/plastic-$lang.php");?>




<!-- This loads CSS specific to this page -->

<STYLE>


@media screen and (max-width: 1300px) {
  .main {   
    width:100%;
  }

  .side {
    display:none;
    }

  }

.drop-cap {
    float: left;
    font-size: 4em;
    line-height: 0.8em;
    margin-top: 0em;
    margin-right: 0.05em;
}

@media screen and (max-width: 700px) { 
	.splash-content-block {
		
		
		background: url(../webp/plastic-long-story-1200px.webp?v=2) bottom;
    	background-repeat: no-repeat;
		background-size: cover;
		

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
	
		
		background: url(../webp/plastic-long-story-1200px.webp?v=2) bottom;
		
}
}

@media screen and (min-width: 700px) {
  .splash-heading {
    font-size: 3.2em;
  }
  .splash-sub {
    font-size: 2.1em;
  }
}
/* 
.splash-box {text-align: center !important;} */


.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
