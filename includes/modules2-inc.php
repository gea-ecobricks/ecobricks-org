

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/svgs/building-methods.svg">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/module-banner.svg">


<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/modules-$lang.php");?>



<STYLE>

.action-btn {
	background-color: #23A3E8
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



.gal-photo {
    padding: 10px;
}

.gal-photo p {font-size: 0.9em;
    margin-bottom: 0px;
    
}

@media screen and (max-width: 700px) { 
	.splash-content-block {

		background: url(../svgs/module-banner.svg) bottom;
        background-color: #23a3e8ff;
		
	}
}



@media screen and (min-width: 700px) { 
	.splash-content-block {
		
		background: url(../svgs/module-banner.svg) bottom;
        background-color: #23a3e8ff;
		
}
} 



#splash-bar {

    background-color: #23a3e8ff;


}

.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
