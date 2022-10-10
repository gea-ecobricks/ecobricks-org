<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD>

<!--Image files to preload that are unique to this page-->

<HEAD> 
	
<meta charset="utf-8">


<!--  Set any page specific graphics to preload-->
<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/top-clouds-mobile.svg">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/top-clouds-animated-desktop">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/ecobrickable-square.svg">
<link rel="preload" as="image" href="https://ecobricks.org/webp/mountain-top2.webp">
<link rel="preload" as="image" href="https://ecobricks.org/webp/vision-bottom5.webp">
<!--This loads CSS specific to the landing page
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/welcome.css?v1.3">-->

<!-- This loads the page's meta tags:  *be sure to add the page's name!*-->
<?php require_once ("meta/welcome-$lang.php");?>

<!--This loads the page's header-->

<?php require_once ("header.php");?>


<STYLE>


.block {
  overflow: hidden;
  width: 800px;
  margin: 50px auto;
  background: #fff;
}
.animation {
  width: auto;
  height: 100px;
  font-size: 0px;
}
.animation div {
  display: inline-block;
  width: auto;
  float: none;
  padding: 0 10px;
}



/* FEATURED ECOBRICKS GALLERY FORMATING */

.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: #DFDFDF;
  margin-top: -8px;
}


@media screen and (min-width: 700px) { 

	.flex-container > .gal-photo {
		background-color: #DFDFDF;
		margin: 2px;
		padding: 2px;
		max-height: 200px;
		overflow: hidden;
		text-align: center;
	}

	.photo-box {
		max-height: 225px;
		overflow: hidden;
		/*background: grey;*/
	}

	.gal-photo img {
		max-height: 200px;
		height: 200px;
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

	.gal-photo p {
		font-size: 0.9em;
	}

	.photo-box-end {

		height: 200px;
		width: 150px;
		overflow: hidden;
		background: grey;
		line-height: 92px;
		color: #dfdfdf;
		text-align: center;
		font-size: 2.5em;
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
width: fit-content;
text-align: left;
padding: 10px;
line-height: 1.5;
margin: auto;}

.feed-live p {
  font-size: .9em;
  font-family: courier new,monospace !important;
  color: #222;
  line-height: 1.3;
  margin-top: 5px;
  font-weight: 300;

}
    }

    @media screen and (min-width: 700px) { 
.feed-live {
width: fit-content;
text-align: center;
padding: 22px;
line-height: 1.5;}

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
		margin-bottom: 20px;
        padding-bottom: 12px;
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

        margin-top: 70px;
        padding-top: 20px;
        padding-bottom: 15px;
		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/

	}
} 




/*TOP TEN GALLERY*/

.gallery-background {
    text-align: center;
    margin-bottom: 120px;
    padding-bottom: 20px;
    background: #e5e5e559;
}


@media screen and (max-width: 700px) { 
	.gallery10-content-block {
		display: none;
        /*text-align: center;
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
		margin-bottom: 20px;
        padding-bottom: 12px;
        padding-top: 12px;
		overflow: hidden;
		box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/
	}

}


@media screen and (min-width: 700px) { 
	.gallery10-content-block {		
		text-align: center;
		/*min-height: 67vh;
        flex-wrap: wrap;*/
		z-index: 5;
		position: relative;   
        background-color: #dfdfdf;
		display: flex;
 		
 		box-sizing: border-box;
		flex-direction: row;
		width: 200%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;


        margin-top: 70px;
        padding-top: 20px;
        padding-bottom: 15px;
		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/

	}
} 

.flex-container10 {
  display: flex;
  flex-wrap: wrap;
  background-color: #DFDFDF;
  margin-top: -8px;
  overflow-x: scroll;
}


@media screen and (min-width: 700px) { 

.flex-container10 > .gal-photo10 {
    background-color: #DFDFDF;
    margin: 2px;
    padding: 2px;
    max-height: 520px;
    overflow: hidden;
    text-align: center;
}


.photo-box10 {
    max-height: 520px;
    overflow: hidden;
    
}

.gal-photo10 img {
    max-height: 500px;
    height: 500px;
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



</style>

<style>

@media screen and (max-width: 770px) { 
.slider-btn {    
    -webkit-border-radius: 8;
    -moz-border-radius: 8;
    border-radius: 8px;
    font-family: Mulish;
    color: #fff;
    font-size: 1.1em;
    background: #00000065;
    padding: 5px 14px;
    text-decoration: none;
    overflow-x: none;
    margin: 26px 5px 0px 0px;
    float: right;
}
}

@media screen and (min-width: 770px) { 
.slider-btn {    
    -webkit-border-radius: 10;
    -moz-border-radius: 10;
    border-radius: 10px;
    font-family: Mulish;
    color: #fff;
    font-size: 1.6em;
    background: #00000065;
    padding: 8px 18px;
    text-decoration: none;
    overflow-x: none;
    margin: 30px 15px 0px 0px;
    float: right;
}
}

.slider-btn:hover {
    background: #00000085;
}

@media screen and (min-width: 770px) { 

#clouds {
  background-color: #00ffff;
  /*background: url("https://ecobricks.org/svgs/top-clouds-animated-desktop.svg?v3") center top;*/
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 73vh;
  /* min-height: 500px;*/
  
    display: flex;
    align-items: flex-end;
    margin-top: 0px;
}

}

@media screen and (max-width: 769px) { 

#clouds {
  background-color: #00ffff;
  background: url("https://ecobricks.org/svgs/top-clouds-mobile.svg?v2") center top;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 85vh;
  /* min-height: 500px;*/
  
    display: flex;
    align-items: flex-end;
    margin-top: 0px;
}

}


#cloud-banner {
background: url("https://ecobricks.org/webp/vision-bottom5.webp") center top;
background-repeat: no-repeat;
background-size: cover;
z-index: 4;
position: relative;
width: 100%;
height: 31%;
min-height: 25vh;
background-color: #00ffff;
}

/*

#clouds {
background: url(svgs/cloud-back.svg) center top;
background-repeat: no-repeat;
background-size: cover;
width: 100%;
height: 73vh;
background-color: #00ffff;
display: flex;
align-items: flex-end;
margin-top: 0px;
}

*/

#cloud-banner {
background: url(https://ecobricks.org/webp/vision-bottom5.webp) center top;
background-repeat: no-repeat;
background-size: cover;
z-index: 4;
position: relative;
width: 100%;
height: 31%;
min-height: 25vh;
background-color: #00ffff;
}



@media screen and (min-width: 770px) { 
#header-content-block {
text-align: center;
background-color: #59c1fdb2;
border-radius: 12px;
height: 100vh;
padding: 25px 7% 50px 7%;
margin: -85vh 10% -50px 10%;
z-index: 5;
}
}

@media screen and (max-width: 770px) { 
#header-content-block {
text-align: center;
background-color: #59c1fdb2;  /*#74acffb2;*/
border-radius: 12px;
height: 80vh;
padding: 25px 3% 25px 3%;
margin-bottom: 0px;
margin: -86vh 2.9% -60px 2.9%;
z-index: 5;
}
}

#main-content {
margin: auto;
}
@media screen and (max-width: 769px) {
#main-content {
  width: 90%;
}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
#main-content {
  width: 80%;
}
}
@media screen and (min-width: 1024px) {
#main-content {
  width: 70%;
}
}

.eco-brick {font-size: 0.2em !important}




/* -------------------------------------------------------------------------- */

/*	4. Main page Content Formating

/* -------------------------------------------------------------------------- */

#cloud-banner img {
width: 100% !important;
margin-bottom: -10px;
}


.big-header {
font-family: 'Mulish', sans-serif;
text-align: center;
line-height: 1.3;
text-shadow: 0 0 10px #fff;
font-weight: 300;
color: rgb(58, 58, 58);
}
@media screen and (max-width: 769px) {
.big-header {
    font-size: 2.3em;
}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
.big-header {
    font-size: 4em;
}
}
@media screen and (min-width: 1024px) {
.big-header {
    font-size: 3.5em;
}
}

.lead-paragraph {
font-family: 'Arvo', serif;
text-align: center !important;
line-height: 1.3 !important;
margin: 20px 0 13px;
text-shadow: 0 0 6px #fff;
color: rgb(59, 59, 59);
}
@media screen and (max-width: 769px) {
.lead-paragraph {
    font-size: 1.3em;
}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
.lead-paragraph {
    font-size: 2.5vw;
}
}
@media screen and (min-width: 1024px) {
.lead-paragraph {
    font-size: 2.2vw;
}
}

.sub-text {
font-family: 'Mulish', sans-serif;
text-align: center;
line-height: 1.4;
color: #302f2f;
margin-bottom: 20px;
}
@media screen and (max-width: 769px) {
.sub-text {
    font-size: 1.0em;
}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
.sub-text {
    font-size: 2vw;
}
}
@media screen and (min-width: 1024px) {
.sub-text {
    font-size: 1.4vw;
}
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
.main-statement {
    font-size: 2.3vw !important;
}
}
@media screen and (max-width: 769px) {
.main-statement {
    font-size: 2.3em !important;
}
}



/* -------------------------------------------------------------------------- */

/*	1. BUTTONS
migrated from GoBrik.com CSS
/* -------------------------------------------------------------------------- */

.main-button {
font-family: 'Arvo', serif !important;

background: #00a1f2;
background-image: -webkit-linear-gradient(top, #00a1f2, #008ad4);
background-image: -moz-linear-gradient(top, #00a1f2, #008ad4);
background-image: -ms-linear-gradient(top, #00a1f2, #008ad4);
background-image: -o-linear-gradient(top, #00a1f2, #008ad4);
background-image: linear-gradient(to bottom, #00a1f2, #008ad4);
-webkit-border-radius: 8;
-moz-border-radius: 8;
border-radius: 8px !important;
color: #fff;
font-size: 1.4em;
padding: 8px 18px 8px 18px !important;
text-decoration: none !important;
margin-top: 18px;
margin-bottom: 16px;
font-weight: 500;
cursor: pointer;
text-decoration: none;
display: inline-block;
}
.main-button:hover {
background: #3cb0fd;
background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
text-decoration: none;
}


/* -------------------------------------------------------------------------- */

/*	2. SLIDERS

/* -------------------------------------------------------------------------- */


#sliders {
width: 100%;

margin-bottom: 0;
position: absolute;
z-index: 9;
top: 24px;
}

#content-sect0 {
width: 100%;
position: absolute;
height: 40vh;
}

@media screen and (min-width: 1000px) {
#content-sect0-curved-bottom {
width: 100%;
/*background: url(/svgs/vision-bottom-bottom.svg);
background-position: center top;
background-size: cover;
background-repeat: no-repeat;*/
height: 100vh;
margin-top: 0;
margin-bottom: -500px;
position: relative;

}}

@media screen and (max-width: 1000px) {
  #content-sect0-curved-bottom {
  width: 100%;
  /*background: url(/svgs/vision-bottom-bottom.svg);
background-position: center top;
background-size: cover;
background-repeat: no-repeat;*/
  height: 100vh;
  margin-top: 0;
  margin-bottom: -180px;
  position: relative;
  }
  }


#under-sliders {
width: 100%;
position: absolute;
z-index: 1;
height: 80vh;
background: #dadddd;
background: url("/svgs/vision-bottom-bottom.svg");
background-position: center bottom;
background-size: cover;
background-repeat: no-repeat;
;
}
@media screen and (min-width: 0px) and (max-width: 800px) {
#under-sliders {
    margin-top: 0;
}
}
@media screen and (min-width: 770px) /*and (max-width: 2000px)*/ {
#slider-image {
    margin-right: 65%;
    height: 400px;
    margin-bottom: 50px;
    width: 35%;
    padding-top: 30px;
    padding-left: 5%;
}
}

@media screen and (min-width: 770px) {
#slider-image img {
width: 85%;

height: auto;

margin: auto;
}
}

@media screen and (max-width: 769px) {
#slider-image {
    display: block;
    width: 185px;
    min-width: 185px;
    min-height:185px;
    margin: auto;
    margin-right: 5px;
    margin-bottom: -35px;
    margin-top: 15px;


}
}
/*
@media screen and (max-width: 770px) {
#slider-image img {



}
}
*/



@media screen and (min-width: 770px) and (max-width: 2000px) {
#slider-textbox {
    margin-left: 40%;
    margin-right: 4%;
    height: fit-content;
    text-align: left;
    margin-top: -415px;
    padding-top: 20px;

}
}
@media screen and (max-width: 769px) {
#slider-textbox {
    margin-left: 5%;
    margin-right: 5%;
    height: fit-content;
    text-align: left;

    padding-top: 20px;

}
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#slider-heading {
    font-size: 3.6vw;
    text-align: left;
    font-family: 'Mulish', sans-serif;
    font-weight: 500;
    color: white;
    padding-top: 17px;
}
}
@media screen and (max-width: 769px) {
#slider-heading {
    font-size: 2em;
    text-align: left;
    font-family: 'Mulish', sans-serif;
    font-weight: 500;
    color: white;
    padding-top: 17px;
}
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#slider-body {
    font-size: 2em;
    text-align: left;
    font-family: 'Mulish', sans-serif;
    color: #181818;
    padding-top: 15px;
    font-weight: 300;
}
}
@media screen and (max-width: 769px) {
#slider-body {
    font-size: 1.3em;
    text-align: left;
    font-family: 'Mulish', sans-serif;
    color: #181818;
    padding-top: 18px;
    font-weight: 300;
}
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#slider-link {
    font-size: 1.8em;
    text-align: right;
    font-family: 'Mulish', sans-serif;
    color: rgba(255, 255, 255, 0.534);
    padding: 14px 70px 0 0;
    font-weight: 500;
}
}
@media screen and (max-width: 770px) {
#slider-link {
    font-size: 1.3em;
    text-align: right;
    font-family: 'Mulish', sans-serif;
    color: rgba(255, 255, 255, 0.534);
    padding: 16px 10px 0 0;
    font-weight: 300;
}
}

#slider-link a {
color: #181818;
text-decoration: underline;
}
#slider-link a:hover {
color: white;
text-decoration: none;
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#slider-date {
    font-size: 1.2em;
    text-align: left;
    color: black;
    font-family: 'Mulish', sans-serif;
    padding-right: 20%;
    color: #3d3d3d;
    padding-top: 20px;
}
}
@media screen and (max-width: 769px) {
#slider-date {
    font-size: 0.9em;
    text-align: left;
    color: black;
    font-family: 'Mulish', sans-serif;
    padding-right: 20%;
    color: #333333;
    padding-top: 20px;
}
}

/*SLIDER 1*/

#slider1 {
will-change: transform, opacity;
background-color: rgba(5, 163, 255, 0.8);
height: fit-content;
opacity: 1;
position: absolute;
z-index: 9;
transform: translateX(-50%);

-webkit-animation: slider1 12s forwards;
-webkit-animation-delay: 0s;

animation: slider1 12s forwards;
animation-delay: 0s;
}
@media screen and (min-width: 1024px) and (max-width: 2000px) {
#slider1 {
    width: 80%;
    height: fit-content;
    margin: auto;
    padding: 75px 20px 80px 2px;
    margin-top: 0;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
#slider1 {
    width: 85%;
    margin: auto;
    padding: 75px 20px 70px 10px;
    margin-top: 0;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (max-width: 769px) {
#slider1 {
    width: 89%;
    padding: 80px 5px 30px;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
    margin-top: 0;
}
}
@-webkit-keyframes slider1 {
/*  0% {
    left: 47%;
    opacity: 1;
}

4% {
    left: 53%;
    opacity: 1;
}*/

0% {
  left: 50%;
  opacity: 1;
}

4% {
left: 50%;
opacity: 1;
}

7%,
88% {
    left: 50%;
    opacity: 1;
}

93% {
    left: 46%;
    opacity: 1;
}

100% {
    left: 100%;
    opacity: 0;
}

}
@keyframes slider1 {
0% {
  left: 50%;
  opacity: 1;
}

4% {
  left: 50%;
  opacity: 1;
}

7%,
88% {
    left: 50%;
    opacity: 1;
}

93% {
    left: 46%;
    opacity: 1;
}

100% {
    left: 100%;
    opacity: 0;
}

}

/* SLIDER 2 */

#slider2 {
will-change: transform, opacity;
background-color: rgba(2, 187, 26, 0.8);
height: fit-content;
position: absolute;
opacity: 0;
z-index: 9;
transform: translateX(-50%);

-webkit-animation: slider2 10s forwards;
-webkit-animation-delay: 12s;

animation: slider2 10s forwards;
animation-delay: 12s;
}
@media screen and (min-width: 1024px) and (max-width: 2000px) {
#slider2 {
    width: 80%;
    height: fit-content;
    margin: auto;
    padding: 75px 20px 80px 2px;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
#slider2 {
    width: 85%;
    margin: auto;
    padding: 70px 20px 35px 10px;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (max-width: 769px) {
#slider2 {
    width: 89%;
    padding: 80px 5px 30px;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@-webkit-keyframes slider2 {
0% {
    left: 0;
    opacity: 0;
}

8% {
    left: 54%;
    opacity: 1;
}

12%,
88% {
    left: 50%;
    opacity: 1;
}

93% {
    left: 46%;
    opacity: 1;
}

100% {
    left: 100%;
    opacity: 0;
}

}
@keyframes slider2 {
0% {
    left: 0;
    opacity: 0;
}

8% {
    left: 54%;
    opacity: 1;
}

12%,
88% {
    left: 50%;
    opacity: 1;
}

93% {
    left: 46%;
    opacity: 1;
}

100% {
    left: 100%;
    opacity: 0;
}

}

/* SLIDER 3  */

#slider3 {

will-change: transform, opacity;
background-color: rgba(211, 3, 248, 0.5);
height: fit-content;
opacity: 0;
position: absolute;
z-index: 9;
transform: translateX(-50%);

-webkit-animation: slider3 10s forwards;
-webkit-animation-delay: 23s;

animation: slider3 10s forwards;
animation-delay: 23s;
}
@media screen and (min-width: 1024px) and (max-width: 2000px) {
#slider3 {
    width: 80%;
    height: fit-content;
    margin: auto;
    padding: 75px 20px 80px 2px;

    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);

}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
#slider3 {
    width: 85%;
    margin: auto;
    padding: 50px 20px 25px 10px;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (max-width: 769px) {
#slider3 {
    width: 89%;
    padding: 70px 5px 30px;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@-webkit-keyframes slider3 {
0% {
    left: 0;
    opacity: 0;
}

8% {
    left: 54%;
    opacity: 1;
}

12%,
88% {
    left: 50%;
    opacity: 1;
}

93% {
    left: 46%;
    opacity: 1;
}

100% {
    left: 100%;
    opacity: 0;
}

}
@keyframes slider3 {
0% {
    left: 0;
    opacity: 0;
}

8% {
    left: 54%;
    opacity: 1;
}

12%,
88% {
    left: 50%;
    opacity: 1;
}

93% {
    left: 46%;
    opacity: 1;
}

100% {
    left: 100%;
    opacity: 0;
}

}

#slider4 {

will-change: transform, opacity;
background-color: rgba(248, 135, 6, 0.849);
height: fit-content;
opacity: 0;
position: absolute;
z-index: 9;
transform: translateX(-50%);

-webkit-animation: sliderEnd 10s forwards;
-webkit-animation-delay: 33s;

animation: sliderEnd 10s forwards;
animation-delay: 33s;
}
@media screen and (min-width: 1024px) and (max-width: 2000px) {
#slider4 {
    width: 80%;
    height: fit-content;
    margin: auto;
    padding: 75px 20px 80px 2px;

    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);

}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
#slider4 {
    width: 85%;
    margin: auto;
    padding: 50px 20px 25px 10px;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (max-width: 769px) {
#slider4 {
    width: 89%;
    padding: 70px 5px 30px;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@-webkit-keyframes sliderEnd {
0% {
    left: 0;
    opacity: 0;
}

8% {
    left: 54%;
    opacity: 1;
}

100%,
12% {
    left: 50%;
    opacity: 1;
}

}
@keyframes sliderEnd {
0% {
    left: 0;
    opacity: 0;
}

8% {
    left: 54%;
    opacity: 1;
}

100%,
12% {
    left: 50%;
    opacity: 1;
}

}

/*What is sldier6??!

#slider6 {
will-change: transform, opacity;
background-color: rgba(5, 163, 255, 0.8);
height: fit-content;
opacity: 1;
position: absolute;
z-index: 9;
transform: translateX(-50%);
left: 50%;
}
@media screen and (min-width: 1024px) and (max-width: 2000px) {
#slider6 {
    width: 80%;
    height: fit-content;
    margin: auto;
    padding: 75px 20px 80px 2px;
    margin-top: 0;
    border-radius: 0 0 20px 20px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (min-width: 770px) and (max-width: 1024px) {
#slider6 {
    width: 85%;
    margin: auto;
    padding: 75px 20px 70px 10px;
    margin-top: 0;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
}
}
@media screen and (max-width: 769px) {
#slider6 {
    width: 89%;
    padding: 80px 5px 30px;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.3);
    margin-top: 0;
}
}


/* -------------------------------------------------------------------------- */

/*	6. Contect Sect1 - Dolphin Section

/* -------------------------------------------------------------------------- */

#content-sect1 {
width: 100%;
text-align: center !important;

/*
-webkit-animation: menuFadeIn 1s forwards;
-webkit-animation-delay: 3.5s;

animation: menuFadeIn 1s forwards;
animation-delay: 3.5s;  
}

@-webkit-keyframes menuFadeIn {
0% { 
opacity: 0;
}
100% { 
opacity: 1;}

}

@keyframes menuFadeIn {
0% { 
opacity: 0;
}
100% { 
opacity: 1;}*/

}

#dolphin-graphic {
position: relative;
z-index: 8;
margin: auto;
}
@media screen and (min-width: 0px) and (max-width: 769px) {
#dolphin-graphic {
    width: 80%;
    margin-top: -122px;
}
}
@media screen and (min-width: 770px) and (max-width: 1023px) {
#dolphin-graphic {
    width: 600px;
    margin-top: 0;
}
}
@media screen and (min-width: 1024px) {
#dolphin-graphic {
    width: 600px;
    margin-top: -201px;
    min-height: 200px;
}
}

/* -------------------------------------------------------------------------- */

/*	6. Second Content Section2 - blue plastic and earth
/* -------------------------------------------------------------------------- */

.lead-graphic {
display: block;
text-align: center;
margin: auto;
}

#content-sect2 {
width: 100%;
padding-bottom: 30px;
background: url("/webp/blue-ode-1600.webp") center top;
background-repeat: no-repeat;
text-align: center;
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#content-sect2 {
    background-size: contain;
    margin-top: 120px;
}
}
@media screen and (min-width: 0px) and (max-width: 769px) {
#content-sect2 {
    background-size: 1000px;
    margin-top: 50px;

}
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#content-sect2 .lead-graphic {
    width: 600px;
    margin-bottom: -20px;
}
}
@media screen and (min-width: 0px) and (max-width: 769px) {
#content-sect2 .lead-graphic {
    width: 95%;
    margin-bottom: -20px;
}
}

/* -------------------------------------------------------------------------- */

/*	6. Third Content Section - building

/* -------------------------------------------------------------------------- */

#content-sect3 {
width: 100%;
box-sizing: border-box;
text-align: center;
}


@media screen and (min-width: 770px) and (max-width: 2000px) {
#content-sect3 {
    background: url("https://ecobricks.org/webp/visionscape.webp");
    background-position: center bottom;
    background-size: contain;
    background-repeat: no-repeat;
    padding-bottom: 300px;
    margin-top: 150px;
    margin-bottom: 100px;
    text-align: center;

}
}
@media screen and (min-width: 0px) and (max-width: 769px) {
#content-sect3 {
    background: url("https://ecobricks.org/webp/visionscape-800.webp");
    background-position: right bottom;
    background-size: contain;
    background-repeat: no-repeat;
    padding-bottom: 120px;
    background-size: 600px;
    margin-top: 140px;
    margin-bottom: -30px;
}
}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#content-sect3 .lead-graphic img {
    margin-top: -100px;
    width: 600px;
    margin-bottom: 20px;
}
}
@media screen and (max-width: 769px) {
#content-sect3 .lead-graphic img {
    width: 88%;
    margin-top: -100px;
    margin-bottom: 10px;
}
}

/* -------------------------------------------------------------------------- */

/*	6. Fourth Content Section

/* -------------------------------------------------------------------------- */

#content-sect4 {
width: 100%;
text-align: center;

}
@media screen and (min-width: 770px) and (max-width: 2000px) {
#content-sect4 .lead-graphic {
    margin-top: 0;
    width: 475px;
    margin-bottom: -35px;
}
}
@media screen and (min-width: 0px) and (max-width: 769px) {
#content-sect4 .lead-graphic {
    width: 300px;
    margin-bottom: -20px;
}
}



</style>

</head>

