
<!--PAGE LANGUAGE:  ENGLISH--> <?php require_once ("lang.php");?>
<!--  Set any page specific graphics to preload-->

<!--  Set any page specific graphics to preload-->
<link rel="preload" as="image" href="../photos/photo3-mobile.webp" media="(max-width: 699px)">
<link rel="preload" as="image" href="../photos/photo3-tablet.webp" media="(min-width: 700px) and (max-width: 1199px)">
<link rel="preload" as="image" href="../photos/photo3-desktop.webp" media="(min-width: 1200px)">


<?php require_once ("../meta/welcome-$lang.php");?>


<style>


/*  FEATURE CONTENT BOXES */



/*  FEATURED CONTENT BLOCKS  */ 

.feature-content-1-anchor-box{
width: 100%;
  margin-top: 0px;
  padding-top: 90px;
  overflow: clip;
  display: flex;
  flex-flow: column; 
}



@media (min-width: 701px) {
.featured-content-1 {
  height: 100%;
  background-size: cover;
  background-position: center;
  position: relative;
  overflow: hidden;
  margin-bottom: 13vh;
  margin-right: 22px;
  margin-left: 22px;
  border-radius: 20px;
  max-width: 100%;
  margin-top: -6px;
}

.featured-content-text {

text-align: left;
margin: auto 8% auto 8%;
/* transform: translate(-50%, -50%); */
}
}

@media (max-width: 700px) {
  .featured-content-1 {
    height: 100%;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-bottom: 9vh;
    margin-right: 16px;
    margin-left: 16px;
    border-radius: 18px;
    max-width: 100%;
    margin-top: -5px;
  }

  .featured-content-text {

text-align: left;
margin: auto 10px auto 18px;
/* transform: translate(-50%, -50%); */
}
}


.featured-content-shaded-box {
  position: absolute;
  width: 100%;
  background-color: #0000005e;
  display: flex;
}



.featured-content-title {
  font-family: 'Arvo';
  color: white;
  font-size: 1.8em;
}

.featured-content-subtitle {
  font-family: 'Mulish';
  color: rgba(255, 255, 255, 0.851);
  font-size: 1.1em;

}

.content1-button {
  border: none;
  color: var(--main-background);
  background-color: var(--emblem-orange);
  font-weight: bolder;
  align-self: center;
  cursor: pointer;
  justify-content: center;
  border-radius: 8px;
  padding: 7px;
  text-align: center;
  display: flex;
  opacity:0.88;


  display: inline-block;
  margin: 10px auto 25px auto;
  text-decoration: none;
  padding: 8px 15px 8px 15px;
  border: none;
  font-family: 'Mulish', sans-serif;
  }

  .content1-button:hover {
  opacity: 1;}



.featured-content-button {
  display: inline-block;
  margin-top: 12px;
  text-decoration: none;
  padding: 8px 15px 8px 15px;
  border: none;
  font-family: 'Mulish', sans-serif;
}

/* Background images for different devices */
@media (max-width: 700px) {

  .feature-content-1-anchor-box{
    height:92vh;
    max-height: 92vh;
  }

  .featured-content-1 {
    background-image: url('../photos/photo3-mobile.webp');
  }

  .featured-content-shaded-box {
    top: 62%;
    height: 40vh;
}
}

@media (min-width: 701px) and (max-width: 1200px) {
  .featured-content-1 {
    background-image: url('../photos/photo3-tablet.webp');
  }

  .featured-content-shaded-box {
    top: 65%;
    height: 35vh;
}

.feature-content-1-anchor-box{
  height:98vh;
  max-height: 98vh;
}

}

@media (min-width: 1201px) {
  .featured-content-1 {
    background-image: url('../photos/photo3-desktop.webp');
  }

  .featured-content-shaded-box {
    top: 70%;
    height: 30vh;
}
.feature-content-1-anchor-box{
  height:100vh;
  max-height: 100vh;
}
}





/* ECOBRICK AND PROJECT GALLERY */


/* FEATURED ECOBRICKS GALLERY FORMATING */
/* 
.brik-co2 {
  font-size: 0.7em;
  color: white;
  font-family: 'Impact', 'Haettenschweiler', 'Arial Narrow Bold', sans-serif;
  margin-top: -60px;
  text-align: left;
  padding: 0px 0px 10px 20px;
  background-color: black !important;
} */

.gallery-flex-container {
display: flex;
flex-wrap: wrap;
justify-content: center;
margin: 0px -15px 30px -15px}


@media screen and (min-width: 700px) { 

.gallery-flex-container > .gal-photo {

  padding: 5px;
  max-height: 100px;
  max-width:100px;
  width:100px;
  overflow: hidden;
}

.gallery-flex-container > .gal-project-photo {

padding: 5px;
max-height: 160px;
max-width:160px;
width:160px;
overflow: hidden;
}
/* 
.gallery-flex-container::before {
  content: '';
  flex: auto;
}

.gal-photo:nth-child(2n + 1):last-child {
  margin-left: auto;
} */



.gal-photo img {
  width:100px;
  height: 100px;
  background: grey;
  font-family: 'Mulish';
  font-size: 0.8em;
  cursor: pointer;
  color: var(--text-color);
}


.gal-project-photo img {
  width:160px;
  height: 160px;
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



.project-photo-box-end {

height: 160px;
width: 160px;
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
  max-height: 60px;
  max-width:60px;
  width:60px;
  overflow: hidden;
}

.gallery-flex-container > .gal-project-photo {
  max-height: 100px;
  max-width:100px;
  width:100px;
  overflow: hidden;
}


.gal-photo img {
  margin: 4px;
  width:60px;
  height: 60px;
  background: grey;
  font-family: 'Mulish';
  font-size: 0.6em;
  cursor: pointer;
  color: var(--text-color);
}

.gal-project-photo img {
  margin: 4px;
  width:100px;
  height: 100px;
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

.photo-project-box-end {

height: 100px;
width: 100px;
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
  border-radius: 15px 15px 0px 0px ;
  font-size: 0.9em;
  margin:15px auto -10px auto;
}



  @media screen and (min-width: 700px) { 

.feed-live {
width: 80%;
padding: 10px;


/* background-color: #DFDFDF; */
}

.feed-live p {
font-size: 0.9em;
font-family: courier new,monospace !important;
color: var(--subdued-text);
line-height: 1.1;
font-weight: 300;

}
  }


  @media screen and (max-width: 700px) { 
.feed-live {
width: 80%;
padding: 10px;
}

.feed-live p {
font-family: courier new,monospace !important;
line-height: 1.1em;
font-weight: 300;
font-size: 0.8em;

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
    margin-top: -40px;
    margin-bottom: 10px;
    margin-right: 16px;
    margin-left: 16px;
    border-radius: 15px;
    background-color: var(--gallery);
    justify-content: center;
  display: flex;
  flex-flow: column;
  }



  .featured-project-gallery {
    height: fit-content;
    background-size: contain;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
    margin-bottom: 10px;
    margin-right: 16px;
    margin-left: 16px;
    border-radius: 15px;
    background-color: var(--gallery);
    justify-content: center;
  display: flex;
  flex-flow: column;
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
    background-color: var(--ecobrick-preview); /* Semi-transparent black background */
    overflow: auto;
    z-index: 100;
}

/* Style for the close button */
.close-modal {
    position: absolute;
    top: 25px;
    right: 25px;
    font-size: 3.6em;
    color: var(--h1);
    cursor: pointer;
}

/* Style for the ecobrick image */
.ecobrick-modal img {
    display: block;
    margin: auto; /* Center the image */
    max-width: 80%; /* Adjust the width as needed */
    max-height:75%;
}

/* Style for the details link */
.ecobrick-modal a {
    display: block;
    text-align: center;
    color: var(--text-color);
    text-decoration: none;
    margin-top: 15px;
    font-family: 'Mulish',sans-serif;
}

.ecobrick-modal .ecobrick-details {
    text-align: center;
    color: var(--text-color);
    margin: 15px 0;
}



</style>





<?php require_once ("../header-2024.php");?>



