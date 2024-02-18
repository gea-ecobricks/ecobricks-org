
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

.gallery-flex-container {
display: flex;
flex-wrap: wrap;
/* background-color: #DFDFDF; */
margin-top: 10px;
/* flex-wrap: wrap-reverse; */
justify-content: left;
margin: 20px 0px 20px 0px;
flex-flow:
}


@media screen and (min-width: 700px) { 

.gallery-flex-container > .gal-photo {

  padding: 5px;
  max-height: 100px;
  max-width:100px;
  width:100px;
  overflow: hidden;

}



.gal-photo img {
  width:100px;
  height: 100px;
  background: grey;
  font-family: 'Mulish';
  font-size: 0.8em;
  cursor: pointer;
  color: var(--text-color);
}



.photo-box-end {

  height: 100px;
  width: 100px;
  margin: 5px;
  overflow: hidden;
  animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;
  background: url(../icons/gobrik-icon-darker.svg) no-repeat center;
  background-size: contain;
  background-color: var(--emblem-green);
}
}

@media screen and (max-width: 700px) { 

.gallery-flex-container > .gal-photo {
  padding: 3px;
  max-height: 60px;
  max-width:60px;
  width:60px;
  overflow: hidden;
}


.gal-photo img {
  padding: 3px;
  width:60px;
  height: 60px;
  background: grey;
  font-family: 'Mulish';
  font-size: 0.6em;
  cursor: pointer;
  color: var(--text-color);
}

.photo-box-end {

  height: 60px;
  width: 60px;
  margin: 3px;

  animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;
  background: url(../icons/gobrik-icon-darker.svg) no-repeat center;
  background-size: contain;
  background-color: var(--emblem-green);
}
}


.feed-live {
  text-align:center;
  background: var(--darker);
  border-radius: 10px;
}



  @media screen and (min-width: 700px) { 

.feed-live {
width: 80%;
line-height: 1.1;
margin: auto;
padding: 10px;
/* background-color: #DFDFDF; */
}

.feed-live p {
font-size: .9em;
font-family: courier new,monospace !important;
color: var(--subdued-text);
line-height: 1.3;
margin-top: 5px;
font-weight: 300;

}
  }


  @media screen and (max-width: 700px) { 
.feed-live {
width: 90%;
padding: 10px;
line-height: 1.5;
}

.feed-live p {
font-family: courier new,monospace !important;
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


/* .full-width-image {
  width: 100%;
  height: auto;
} */




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
		z-index: 5;
		position: relative;   
		display: flex;
 		box-sizing: border-box;
		flex-direction: row;
		width: 120%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;
        margin-top: 70px;
        padding-top: 20px;
        padding-bottom: 35px;
        overflow: hidden;
        white-space: nowrap;
        scrollbar-width: thin;  /* For Firefox */
    scrollbar-color: #333 #f0f0f0; /* For Firefox */

	}
} 

.flex-container10 {
  display: flex;
  margin-top: -10px;
  margin-bottom: 0px;
}


@media screen and (min-width: 700px) { 

.flex-container10 > .gal-photo10 {
    background-color: var(--show-hide:);
    margin: 0px;
    padding: 2px;

    text-align: center;
    margin-top: -35px;
}

.gal-photo10 img {

    height: 520px;
    max-height: 520px;

    
}
}



.gal10-photo-text {
    background-color: var(--show-hide);
    margin: 0px;
    text-align: left;
    padding: 3px;
    overflow: hidden;    
    font-size: 0.8em;
    font-family: 'Mulish',sans-serif;
    width: 235px;
    color: var(--text-color);
    border-radius: 0px 0px 10px 10px;
padding: 15px;
width: 80%;
margin-top: -10px;
margin-right: auto;
margin-left: 0px;
}



@media screen and (max-width: 700px) { 

.flex-container10 > .gal-photo10 {
    background-color: var(--darker);
    margin: 0px;
    padding: 4px;
    margin-bottom: 30px;
    /*overflow: hidden;*/

}

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

/* .clouds-new  {
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

 */


/* -------------------------------------------------------------------------- */

/*	4. Main page Content Formating

/* -------------------------------------------------------------------------- */


.featured-content-gallery {
    height: fit-content;
    background-size: contain;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-top: -50px;
    margin-bottom: 100px;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 15px;
    background-color: var(--gallery);
  }

.featured-content-2 {
    height: fit-content;
    background-size: contain;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 15px;
  }


  .featured-content-top10s {
    height: fit-content;
    background-size: contain;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 15px;
    background-color: var(--gallery);
  }




  .featured-content-3 {
    height: fit-content;
    background-size: contain;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 15px;
  }

  .featured-content-4 {
    height: fit-content;
    background-size: contain;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 0px;
    margin-right: 20px;
    margin-left: 20px;
    border-radius: 15px;
  }

.feature-content-box {
    margin: auto;
    display: flex;
    flex-flow: column;
    height:fit-content;
    }

    @media screen and (max-width: 769px) {
    .feature-content-box {
      width: 90%;
    }
    }

    @media screen and (min-width: 770px) and (max-width: 1024px) {
    .feature-content-box {
      width: 80%;
    }
    }

    @media screen and (min-width: 1024px) {
    .feature-content-box {
      width: 70%;
    }
    }


    .featured-content-img {
        position: relative;
        margin: auto;
        height: fit-content;
        width: fit-content;
        margin-top: 20px;
        margin-bottom: 10px;
        
        }
        @media screen and (max-width: 699px) {
            .featured-content-img {
            width: 300px;
            height: 300px;
        }
        }
        @media screen and (min-width: 700px) and (max-width: 1199px) {
            .featured-content-img {
            width: 400px;
            height: 400px;
            margin-top: 25px;
        }
        }
        @media screen and (min-width: 1200px) {
            .featured-content-img{
            width: 500px;
            height: 500px;
            margin-top: 20px;

        }
        }
     
.feature-big-header {
  font-family: 'Arvo', serif;
  text-align: center;
  line-height: 1.3;
  text-shadow: 0 0 10px var(--background-color);
  font-weight: 500;
  color: var(--h1);
  margin-bottom: 10px;
}

@media screen and (max-width: 769px) {
  .feature-big-header {
      font-size: 1.9em;
  }
}
@media screen and (min-width: 770px) and (max-width: 1200px) {
  .feature-big-header {
      font-size: 2.7em;
  }
}
@media screen and (min-width: 1201px) {
  .feature-big-header {
      font-size: 3.5em;
  }
}


.feature-sub-text {
    font-family: 'Mulish', sans-serif;
    text-align: center;
    line-height: 1.4;
    color: var(--text-color);
    margin-bottom: 20px;
  }


  @media screen and (max-width: 769px) {
    .feature-sub-text {
        font-size: 1.1em;
    }
  }
  @media screen and (min-width: 770px) and (max-width: 1024px) {
    .feature-sub-text {
        font-size: 1.4em;
    }
  }
  @media screen and (min-width: 1024px) {
    .feature-sub-text {
        font-size: 1.6em;
    }
  }


  .feature-button {
    font-family: 'Mulish', sans-serif;
  
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
    border:none;
    margin: auto;
    text-align: center;
  }

  .feature-button:hover {
    background: #3cb0fd;
    background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
    background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
    text-decoration: underline;
  }

  .feature-reference-links {
    width: fit-content;
    margin: auto;
    margin-bottom: 30px;
    text-align: center;
    font-size: small;


  }

  

/* 
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

@media screen and (min-width: 770px) and (max-width: 2000px) {
  .main-statement {
      font-size: 2.3vw !important;
  }
}
@media screen and (max-width: 769px) {
  .main-statement {
      font-size: 2.3em !important;
  }
} */


/* Style for the modal */
.ecobrick-modal {
    display: flex;
    flex-flow:column;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
    overflow: auto;
    z-index: 100;
}

/* Style for the close button */
.close-modal {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 24px;
    color: #fff;
    cursor: pointer;
}

/* Style for the ecobrick image */
.ecobrick-modal img {
    display: block;
    margin: auto; /* Center the image */
    max-width: 80%; /* Adjust the width as needed */
    max-height:80%;
    padding: 20px;
}

/* Style for the details link */
.ecobrick-modal a {
    display: block;
    text-align: center;
    color: #fff;
    text-decoration: none;
    margin-top: 15px;
}

.ecobrick-modal .ecobrick-details {
    text-align: center;
    color: #fff;
    margin: 15px 0;
}



</style>





<?php require_once ("../header-2024.php");?>



