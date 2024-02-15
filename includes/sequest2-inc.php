
<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../webp/earthen-400px.webp">
<link rel="preload" as="image" href="../webp/blue-ode-750px.webp">

<!--This loads CSS specific to this page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/sequest-$lang.php");?>




<!-- This loads CSS specific to this page -->

<STYLE>

@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 77vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		background: url(../webp/blue-ode-750px.webp) bottom;
		/*background-color: #8BBAF0;*/
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 70vh;
		padding: 10px 7% 10px 7%;
		z-index: 5;
		position: relative;
		
		background: url(../svgs/BlUE-ode-to-plastic-Sequestration.svg) bottom;
		/*background-color: #fff;*/
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
	    flex-direction: row;
		width: 100%;
		background-size: cover;
	    position: relative;
}
}


@media screen and (min-width: 700px) { 
.splash-image {
        z-index: 5;
        position: relative;
        text-align: center;
        flex: 35%;
	    padding: 0px;
	    box-sizing: border-box;
	    margin-top: 0px;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
        z-index: 5;
        position: relative;
        flex: 65%;
	    padding: 10px 30px 30px 0px;
	    box-sizing: border-box;
	    text-align: right;
        margin: auto;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
        z-index: 5;
        position: relative;
        text-align: left;
        flex: 25%;
        width: 250px;
	    padding: 0px;
	    box-sizing: border-box;
	    margin: 0px 0px 0px 10px;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	    position: relative;
        flex: 100%;
	    padding: 10px 10px 0px 0px;
	    box-sizing: border-box;
	    text-align: right;
}
}



.splash-heading { 
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
        font-family: Arvo, serif;
        color: white;
        font-weight: 500;
        text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
        font-size: 2.0em;
        line-height: 1.1;
        margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
        font-size: 3.3em;
        line-height: 1.3;
        margin: auto;
  }
}


.splash-sub {
    font-family: 'Mulish', Arial, Helvetica, sans-serif;
    color: #fff;
    /*text-shadow: 0px 0px 10px #fff;*/
    margin: 15px 0;
    text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.1em;
		line-height: 1.3;
		font-weight: 400;
  }
}

#splash-bar {
	margin-top: -50px;
	width: 100%;	
	height:100px;	
	position: relative;
	z-index: 0;
	margin-bottom: -50px;
	box-shadow: none !important;
}


.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

	
</style>	

<?php require_once ("../header-2024.php");?>
