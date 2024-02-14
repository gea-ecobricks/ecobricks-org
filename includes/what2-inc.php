

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../svgs/eb-blue-no-clouds.svg">
<link rel="preload" as="image" href="../svgs/top-clouds-mobile.svg?v1">
<link rel="preload" as="image" href="../svgs/top-clouds-animated-desktop.svg?v1">
<!--This loads CSS specific to this page-->

<STYLE>
	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		background-color: #00E6FF;
		background: url(../svgs/top-clouds-mobile.svg?v1) top;
	
	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
     
        	background-color: #00E6FF;
		background: url(../svgs/top-clouds-animated-desktop.svg?v2) top #00E6FF;
	

}
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #00E6FF;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 1;
	-webkit-transform: skewY(-3deg);
    -moz-transform: skewY(-3deg);
    -ms-transform: skewY(-3deg);
    -o-transform: skewY(-3deg);
    transform: skewY(-3deg);
	margin-bottom: 40px;  
    }


    .module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}


	</STYLE>


<?php require_once ("../header-2024.php");?>