

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../webp/faq-bottom.webp">
<link rel="preload" as="image" href="../svgs/top-clouds-animated-desktop?v1">
<link rel="preload" as="image" href="../webp/faq-top.webp">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/faqs-$lang.php");?>



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
		border-radius: 12px;
		height: 100vh;
		padding: 25px 7% 50px 7%;
		margin: -77vh 10% -250px 10%;
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
		margin: -77vh 2.9% -160px 2.9%;
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

.top-link {
  text-align: left !important;
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  font-size: 1em;
  font-weight: 500;
  color: var(--emblem-blue);
  margin: 10px 20px 10px 0;

}

#top-link a {
  color: var(--emblem-blue);
  text-decoration: underline;
}
#top-link a:hover {
  color: var(--emblem-blue-over);
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


.toggle {
    background-color: var(--show-hide);
    color: var(--text-color);
}



@media screen and (min-width: 1000px) {
  .toggle {
      margin-top: 0;
      font-size: 1.2em;

      padding: 10px 15px 15px;
      border-radius: 11px 11px 0 0;

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
      padding: 8px 8px 15px;
      border-radius: 11px 11px 0 0;
      border: none;
      margin-left: 85%;
      margin-bottom: -9px;
  }
}
button:hover {
  border: 1px;
  background: rgba(255, 255, 255, 0.815);
  cursor: pointer;
}


.greyish {

  padding: 6px;
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
  padding-top: 100px;
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


.module-btn {
  background: var(--emblem-green);
}
	
.module-btn:hover {
  background: var(--emblem-green-over);
}
	


	

</style>	

<?php require_once ("../header-2024.php");?>
			  
