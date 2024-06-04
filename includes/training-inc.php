

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../svgs/brik-market-banner3.svg">
<link rel="preload" as="image" href="../svgs/shanti.svg">

<?php require_once ("../meta/training-$lang.php");?>


<STYLE>




.featured-content-gallery {
    height: fit-content;
    background-size: contain;
    background-position: center;
    position: relative;
    overflow: hidden;
    margin-top: -20px;
    margin-bottom: 10px;
    margin-right: 5px;
    margin-left: 16px;
    border-radius: 15px;
    background-color: var(--gallery);
    justify-content: center;
  display: flex;
  flex-flow: column;
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
}

.modal-photo img{
    min-height: 400px;
    min-width: 400px;
    transition: 0.3s;
}
.vision-quote {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: var(--h1);
  font-weight: 300;
  /* text-shadow: 0 0 10px #fff; */
}
@media screen and (max-width: 769px) {
	.vision-quote {
      font-size: 2.4em;
      line-height: 1.2;
      padding: 10px 6% 0px 6%;
	  margin-bottom: -18px;
  }
}
@media screen and (min-width: 769px) {
	.vision-quote {
      font-size: 3em;
      line-height: 1.3;
      padding: 5px;
	  margin-top: -40px;
	  margin-bottom: -26px;
  }
}

/* Sidebar/right column */

.row-details {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}

@media screen and (min-width: 700px) {
.main-details {
  flex: 60%;

  padding: 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main-details {
  flex: 100%;
  box-sizing: border-box;
}
}

@media screen and (min-width: 700px) {
	.side-details {
	flex: 40%;
	padding-left: 10px;
	box-sizing: border-box;
	margin-top: 30px;
	background: #ECECEC;
	padding: 10px;
	height: fit-content;
		}
	}

@media screen and (max-width: 700px) {
	.side-details {
	flex: 90%;
	margin: 0px 5% 0px 5%;
	box-sizing: border-box;
	background: #ECECEC;
	padding: 10px;
	
	
	}
	}

#data-chunk {margin: 16px;}

	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		background: url(../svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
	}
}

@media screen and (min-width: 700px) { 
	.splash-content-block {
		background: url(../svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
	}
}

.splash-image img {
	border-width: 10px;
	border-color: #97C4E3;
	width: 85%;
	margin-top:-20px;
	box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
	border-style: solid;
}

#splash-bar {
    background-color: #2A91DA;
}

/* hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}
 */


.module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}
	

</style>	

<?php require_once ("../header-2024.php");?>
			  
						  

