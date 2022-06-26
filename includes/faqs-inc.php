<!--Content Page template: v.1.0.0-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/webp/faq-bottom.webp">
<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://www.ecobricks.org/svgs/top-clouds-animated-desktop?v1">
<link rel="preload" as="image" href="https://ecobricks.org/webp/faq-top.webp">



<!--This loads CSS specific to this page
<link rel="preload" as="image" href="https://ecobricks.org/svgs/cloud-back.svg">
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/css/what.css?v1.1">-->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/faqs-$lang.php");?>

<?php require_once ("header.php");?>

<STYLE>

#main-content-faq {
  margin: auto;
  box-sizing: border-box;
}
@media screen and (max-width: 700px) {
  #main-content-faq {
      width: 90%;
	  margin-top: 0px;
  }
}
@media screen and (min-width: 700px) and (max-width: 1024px) {
  #main-content-faq {
      width: 85%;
  }
}
@media screen and (min-width: 1024px) {
  #main-content-faq {
      width: 77%;
  }
}



#clouds {
	background: url(https://www.ecobricks.org/svgs/top-clouds-animated-desktop.svg?v1) center top;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
	height: 70vh;
   /* min-height: 500px;*/
	background-color: #19E8FF;
    display: flex;
    align-items: flex-end;
    margin-top: 0px;
}

#cloud-banner {
	z-index: 4;
	position: relative;
	height: 25vh;
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


/*FAQ PAGE*/

#faq-banner {
  padding: 20px;
  border-radius: 12px;
  margin: 60px -20px 20px;
  color: #fff !important;
  opacity: 200%;
}

#top-link-right {
  text-align: right !important;
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  font-size: 1.2em;
  font-weight: 500;
  color: #585858;
  margin: -0px 20px 10px 0;

}

#top-link-right a {
  color: #fff;
}

#top-link {
  text-align: left !important;
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  font-size: 1em;
  font-weight: 500;
  color: #585858;
  margin: 10px 20px 10px 0;

}

#top-link a {
  color: #585858;
  text-decoration: underline;
}
#top-link a:hover {
  color: #1d3085;
  text-decoration: none;
}

#raised-text {
  z-index: 5;
  position: relative;
}

#faq-content-block {
  text-align: left;
  padding: 15px 4% 0;
  border-radius: 12px;
  margin-bottom: 0;
}
@media screen and (min-width: 1000px) {
  .toggle {
      margin-top: 0;
      font-size: 1.2em;
      background-color: #ffffff82;
      padding: 10px 15px 15px;
      border-radius: 11px 11px 0 0;
      color: #000000ad;
      margin-left: 70%;
      width: 30%;
      max-width: 250px;
      min-width: 200px;
      border: none;
      margin-bottom: -9px;
  }
}
@media screen and (max-width: 1000px) {
  .toggle {
      margin-top: 18px;
      font-size: 1.0em;
      background-color: #ffffff82;
      padding: 8px 8px 15px;
      border-radius: 11px 11px 0 0;
      color: #000000ad;
      border: none;
      margin-left: 67%;

      margin-bottom: -9px;
  }
}
button:hover {
  border: 1px;
  background: rgba(255, 255, 255, 0.815);
  cursor: pointer;
}

.grey {
  background: rgb(235,235,235);
  background: linear-gradient(132deg, rgba(235,235,235,1) 0%, rgba(199,199,199,1) 100%);
}

.reddish {
  background: rgb(255,238,238);
  background: linear-gradient(132deg, rgba(255,238,238,1) 0%, rgba(254,195,195,1) 100%);
}

.greenish {
  background: rgb(239,255,238);
  background: linear-gradient(132deg, rgba(239,255,238,1) 0%, rgba(198,254,195,1) 100%);
}

.blueish {
  background: rgb(235,253,255);
  background: linear-gradient(132deg, rgba(235,253,255,1) 0%, rgba(195,250,254,1) 100%);
}

.orangeish {
  background: rgb(255,248,235);
  background: linear-gradient(132deg, rgba(255,248,235,1) 0%, rgba(254,234,195,1) 100%);
}

.pinkish {
  background: rgb(254,235,255);
  background: linear-gradient(132deg, rgba(254,235,255,1) 0%, rgba(248,195,254,1) 100%);
}

.greyish {
  background: #F6F6F6;
  /*background: linear-gradient(126deg, rgba(212,212,212,1) 10%, rgba(251,251,251,1) 71%);*/
  padding: 4px;
  border-radius: 15px;
  margin-bottom: 20px;
  border-style: dashed;
  border-color: grey;
  border-width: 1px;

}

#content-block {
  text-align: left;
  margin-top: 50px;
  margin-bottom: 50px;
}

.faq {
  width: 100%;
  padding: 20px 0;
}
@media screen and (max-width: 770px) {
  .faq-box {
      display: flex;
      box-sizing: border-box;
      flex-direction: column;
  }
}
@media screen and (min-width: 770px) {
  .faq-box {
      display: flex;
      box-sizing: border-box;
      flex-direction: row;
  }
}
@media screen and (max-width: 770px) {
  .faq-texts {
      margin-bottom: 0;
      flex: 50%;
      padding-right: 15px;

  }
}
@media screen and (min-width: 770px) {
  .faq-texts {
      margin-bottom: 0;
      flex: 50%;
      padding-right: 15px;
  }
}
@media screen and (max-width: 770px) {
  .faq-image {
      flex: 50%;
      text-align: left;
      margin: auto;

  }
}
@media screen and (min-width: 770px) {
  .faq-image {
      flex: 25%;
      text-align: center;

  }
}

.faq-image img {
  width: 90%;
  max-width: 400px;
  margin-block: auto;
  min-width: 360px;
}

.faq-link h5 {
  font-weight: 500;
}

/* OBSOLETE?


@media screen and (min-width: 1000px) {

#faq-content-block-1 {
text-align: center;
padding: 5.5%;
padding-top: 130px;
padding-bottom: 100px;


background: rgb(179,239,225);
background: linear-gradient(180deg, rgba(179,239,225,1) 0%, rgba(81,197,255,1) 100%); 
border-radius: 12px;
margin: 0px -3% -50px -3%;
border-color: black;
border-width: 5px;

}}


@media screen and (max-width: 1000px) {

#faq-content-block-1 {
  text-align: center;
  padding: 6%;
  padding-top: 40px;
  padding-bottom: 90px;
  margin: 0px -3% -50px -3%;}
}
*/

#concerns-questions {
  display: none;
}

#building-questions {
  display: none;
}

#movement-questions {
  display: none;
}

#gobrik-questions {
  display: none;
}

#more-questions {
  display: none;
}


</style>


</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>
