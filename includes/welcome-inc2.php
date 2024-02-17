
<!--PAGE LANGUAGE:  ENGLISH--> <?php require_once ("lang.php");?>
<!--  Set any page specific graphics to preload-->

<!--  Set any page specific graphics to preload-->
<link rel="preload" as="image" href="../photos/photo3-mobile.webp" media="(max-width: 699px)">
<link rel="preload" as="image" href="../photos/photo3-tablet.webp" media="(min-width: 700px) and (max-width: 1199px)">
<link rel="preload" as="image" href="../photos/photo3-desktop.webp" media="(min-width: 1200px)">

<!-- for light mode -->

<link rel="preload" as="image" href="../icons/search-day.svg" media="(prefers-color-scheme: light)">
<link rel="preload" as="image" href="../icons/search-day-over.svg" media="(prefers-color-scheme: light)">
<link rel="preload" as="image" href="../icons/main-menu-over.svg" media="(prefers-color-scheme: light)">
<link rel="preload" as="image" href="../icons/main-menu.svg" media="(prefers-color-scheme: light)">
<link rel="preload" as="image" href="../icons/settings-icon.svg" media="(prefers-color-scheme: light)">
<link rel="preload" as="image" href="../icons/settings-icon-over.svg" media="(prefers-color-scheme: light)">
 


<!-- for dark  mode -->
<link rel="preload" as="image" href="../icons/search-night.svg" media="(prefers-color-scheme: dark)">
<link rel="preload" as="image" href="../icons/search-night-over.svg" media="(prefers-color-scheme: dark)">
<link rel="preload" as="image" href="../icons/main-menu-night.svg" media="(prefers-color-scheme: dark)">
<link rel="preload" as="image" href="../icons/main-menu-dark-over.svg" media="(prefers-color-scheme: dark)">
<link rel="preload" as="image" href="../icons/settings-icon-dark.svg" media="(prefers-color-scheme: dark)">
<link rel="preload" as="image" href="../icons/settings-icon-over-dark2.svg" media="(prefers-color-scheme: dark)">



<style>


/* GALLERY */


/* FEATURED ECOBRICKS GALLERY FORMATING */

.brik-co2 {
  font-size: 0.7em;
  color: white;
  font-family: 'Impact', 'Haettenschweiler', 'Arial Narrow Bold', sans-serif;
  margin-top: -60px;
  text-align: left;
  padding: 0px 0px 10px 20px;
  background-color: black !important;
}

.flex-container {
display: flex;
flex-wrap: wrap;
background-color: #DFDFDF;
margin-top: 10px;
flex-wrap: wrap-reverse;
}


@media screen and (min-width: 700px) { 

.flex-container > .gal-photo {
  background-color: #DFDFDF;
  margin: 2px;
  padding: 2px;
  max-height: 190px;
  overflow: hidden;
  text-align: center;
}

/*	.photo-box {
  max-height: 225px;
  overflow: hidden;
  background: grey;
}
  */

.gal-photo img {
  max-height: 190px;
  height: 190px;
}


.gal-photo-text {
  background-color: #DFDFDF;
  margin: 0px;
  text-align: center;
  padding: 2px;
  overflow: hidden;
      font-size: 0.9em;
}


.photo-box-end {

  height: 190px;
  width: 120px;
  overflow: hidden;
  background: grey;
  line-height: 190px;
  color: #dfdfdf;
  text-align: center;
  font-size: 4em;
  padding: 2px;
  text-decoration: none;
  animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;}

}

@media screen and (max-width: 700px) { 

.flex-container > .gal-photo {
  background-color: #DFDFDF;
  margin: 0px;
  padding: 2px;
  height: 81px;
  overflow: hidden;
}

.gal-photo img {
  height: 81px;
  display: block;
  margin: auto;

}

.photo-box-end {
  max-height: 81px;
  width: 60px;

  overflow: hidden;
  background: grey;
  line-height: 75px;
  color: #dfdfdf;
  text-align: center;
  font-size: 2em;
  padding: 2px;
  text-decoration: none;
  animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;}

}



.photo-box-end a {
color: #dfdfdf;
text-decoration: none;}


  @media screen and (min-width: 700px) { 
.feed-live {
width: 100%;
text-align: center;
line-height: 1.5;
margin: auto;
padding: 10px;
background-color: #DFDFDF;
margin-bottom: 35px;
}

.feed-live p {
font-size: .9em;
font-family: courier new,monospace !important;
color: #222;
line-height: 1.3;
margin-top: 5px;
font-weight: 300;

}
  }

  @media screen and (max-width: 700px) { 
.feed-live {
width: 100%;
text-align: center;
padding: 10px;
line-height: 1.5;
background-color: #DFDFDF;
margin-bottom: 25px;}

.feed-live p {
font-size: .8em;
font-family: courier new,monospace !important;
color: #222;
line-height: 1.3;
margin-top: 5px;
font-weight: 300;

}
  }




@media screen and (max-width: 700px) { 
.gallery-content-block {
  text-align: center;
  min-height: 67vh;
  z-index: 5;
  position: relative;   
      background-color: #DFDFDF;
  display: flex;
   flex-wrap: wrap;
   box-sizing: border-box;
  flex-direction: row;
  width: 120%;
    margin-right: -5%;
    margin-left: -5%;
  margin-top: 33px;
      padding-top: 12px;
  overflow: hidden;
  /*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
  margin-bottom: 40px;
  padding-bottom: 15px;*/
}

}


@media screen and (min-width: 700px) { 
.gallery-content-block {		
  text-align: center;
  min-height: 67vh;
  z-index: 5;
  position: relative;   
      background-color: #dfdfdf;
  display: flex;
   flex-wrap: wrap;
   box-sizing: border-box;
  flex-direction: row;
  width: 120%;
    margin-right: -5%;
    margin-left: -5%;
  margin-top: 0px;
  overflow: hidden;

      padding-top: 10px;

  /*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
  margin-bottom: 40px;
  padding-bottom: 15px;*/

}
} 


.full-width-image {
  width: 100%;
  height: auto;
}




/*TOP TEN GALLERY*/

.gallery-background {
    text-align: center;
    margin-bottom: 120px;
    padding-bottom: 20px;
    background: #e5e5e559;
    margin-top: 50px;
}


@media screen and (max-width: 700px) { 
	.gallery10-content-block {
		text-align: center;
		z-index: 5;
		position: relative;   
        background-color: #0ff;
		display: flex;
 		box-sizing: border-box;
		flex-direction: row;
		width: 110%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;
        padding-top: 5px;
        overflow: auto;
        white-space: nowrap;
     
	}

}


@media screen and (min-width: 700px) { 
	.gallery10-content-block {		
		text-align: center;
		/*min-height: 67vh;
        flex-wrap: wrap;*/
		z-index: 5;
		position: relative;   
        background-color: #0ff /*#dfdfdf*/;
		display: flex;
 		box-sizing: border-box;
		flex-direction: row;
		width: 120%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;
        margin-top: 70px;
        padding-top: 20px;
        padding-bottom: 15px;
		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/
        overflow: auto;
        white-space: nowrap;
     

	}
} 

.flex-container10 {
  display: flex;
  margin-top: -10px;
  margin-bottom: 0px;
}


@media screen and (min-width: 700px) { 

.flex-container10 > .gal-photo10 {
    background-color: #0ff /*#dfdfdf*/;
    margin: 0px;
    padding: 2px;
   /* max-height: 520px;
    overflow: hidden;*/
    text-align: center;
    margin-top: -35px;
}

/*
.photo-box10 {
    max-height: 520px;
    overflow: hidden;
    
}*/

.gal-photo10 img {

    height: 520px;
    max-height: 520px;

    
}
}



.gal10-photo-text {
    background-color: #8DF9F9 /*#DFDFDF*/;
    margin: 0px;
    text-align: left;
    padding: 3px;
    overflow: hidden;    
    font-size: 0.8em;
    font-family: Mulish;
    width: 235px;
    color: #504f4f;
    border-radius: 0px 0px 10px 10px;
padding: 15px;
width: 80%;
margin-top: -10px;
margin-right: auto;
margin-left: 0px;
}



@media screen and (max-width: 700px) { 

.flex-container10 > .gal-photo10 {
    background-color: #0ff;/*#0ff*/
    margin: 0px;
    padding: 4px;
    /*overflow: hidden;*/

}

/*
.photo-box10 {
    max-height: 225px;
    overflow: hidden;
    
}*/

.gal-photo10 img {
    max-width: 235px;
    min-height: 305px;

}
}

/*
.gal-photo-text {
    background-color: #DFDFDF;
    margin: 2px;
    text-align: center;
    padding: 8px;
    width: 205px;
    max-width:205px;
    overflow: hidden;
        margin-bottom: 0px;
}*/

.gal-photo10 p {
    font-size: 0.9em;
}

.clouds-new  {
    background: url(https://www.ecobricks.org/webp/mountain-top2.webp?v4) no-repeat center bottom;
    width:100%;
    text-align:center;
}

@media screen and (min-width: 770px) { 
    .clouds-new  {
        background-size:contain;
        padding-bottom: 50px;
        height: fit-content;
    }
}

@media screen and (max-width: 770px) { 
    .clouds-new  {
        background-size:contain;
        padding-bottom: 10px;
    }
}



</style>

<!-- This loads the page's meta tags:  *be sure to add the page's name!*-->
<?php require_once ("../meta/welcome-$lang.php");?>

<!--This loads the page's header-->



<?php require_once ("../header-2024.php");?>



