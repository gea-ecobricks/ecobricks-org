
<link rel="preload" as="image" href="../svgs/building-methods.svg">
<link rel="preload" as="image" href="../webp/earth-banner-1400px.webp">



<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/earth-methods-$lang.php");?>



<STYLE>

/*New accordion stylesheet*/

/* Style for the content blocks */
/* .reg-content-block > div { */
/*     overflow: hidden; */
/*     transition: max-height 0.3s ease-out, background-color 0.3s ease; */
/*     max-height: 0;  *//* Start with content collapsed */
/*     background-color: var(--accordion-background); */
/* } */

/* When content is open */
/* .reg-content-block.open > div { */
/*     max-height: 1000px;  *//* A large enough value to cover the expanded height */
/*     background-color: var(--main-background); */
/* } */







.gal-photo {
  padding: 10px;
}

.gal-photo p {font-size: 0.9em;
  margin-bottom: 0px;
  
}

@media screen and (min-width: 700px) { 
.flex-gallery {
    display: flex;
  flex-direction: row;
  margin-bottom: 25px;
}
}

@media screen and (max-width: 699px) { 
.flex-gallery {
    display: flex;
  flex-direction: column;
  width: 100%;
  margin-bottom: 20px;
}
}



@media screen and (max-width: 700px) { 
	.splash-content-block {

       
		background: url(../webp/earth-banner-1400px.webp) bottom;
        background-color: #914D3D;

	}
}



@media screen and (min-width: 700px) { 
	.splash-content-block {
	
		background: url(../webp/earth-banner-1400px.webp) bottom;
        background-color: #914D3D;
	
}
} 



#splash-bar {

    background-color: #914D3D;


}


.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

	
</style>	

<?php require_once ("../header-2025.php");?>
