<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="../pngs/community.png">
<link rel="preload" as="image" href="../webp/about-banner-1500px-b.webp">
<link rel="preload" as="image" href="../webp/about-banner-800px.webp">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/story-$lang.php");?>


<STYLE>

/*This sets up the the first splash content block that is unique to the top of each page*/

@media screen and (max-width: 700px) {
	.splash-content-block {

		background: url(../webp/about-banner-800px.webp) bottom;
		background-color: #3FB104;;

	}
}


@media screen and (min-width: 700px) {
	.splash-content-block {

		background: url(../webp/about-banner-1500px-b.webp) bottom;
		background-color: #3FB104;;

}
}



/*This is the text box on the left of the splash that holds the splash header and sub text*/



@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 1.8em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 2.9em;
      line-height: 1.3;
      margin: 0px 0px 10px 0px;
  }
}

.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: #8DD2BF;
  margin: 15px 0;
	/*text-shadow: 0px 0px 10px #fff;*/
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 1.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


/*This is the angled bar at the bottom of the intro splash block*/

#splash-bar {

	background-color: #3FB104;

}

.module-btn {
  background: var(--emblem-green);
}

.module-btn:hover {
  background: var(--emblem-green-over);
}

hr.story-divider {
  border: none;
  border-top: 2px solid var(--emblem-green);
  margin: 30px 0;
}

.video-placeholder {
  width: 100%;
  min-height: 240px;
  height: 375px;
  background-color: #000;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  cursor: pointer;
  position: relative;
  margin: 20px 0;
}

.play-button {
  width: 60px;
  height: 60px;
  background-color: rgba(0, 0, 0, 0.7);
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  cursor: pointer;
}

.play-button::after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 15px 0 15px 26px;
  border-color: transparent transparent transparent #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.story-hero-image {
  display: block;
  width: 100%;
}

/* Give the body text in the story block a normal margin on mobile,
   while letting the hero image and video thumbnails stay full-bleed */
@media screen and (max-width: 700px) {
  #block1 {
    padding: 0 20px;
    box-sizing: border-box;
  }

  #block1 .story-hero-image,
  #block1 .video-placeholder {
    width: calc(100% + 40px);
    margin-left: -20px;
    margin-right: -20px;
  }
}

</style>

<?php require_once ("../header-2025.php");?>
