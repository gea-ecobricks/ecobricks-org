<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("includes/how.php");?>

<script>
// Set the date we're counting down to
var countDownDate = new Date("April 23, 2023 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<!--MAIN CONTENT-->
		
<BODY id="full-page"> 
	
	<div id="load-background"> 

	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>

	<!-- This loads the page's top graphics-->

		<div id="clouds"><img src="https://www.ecobricks.org/webp/mountain-top2.webp?v4" width="100%"></div>
		<div id="cloud-banner"><img src="https://www.ecobricks.org/webp/vision-bottom4.webp?v3" width="100%" height="31%"></div>

	<div>
	
	
	
		<!-- SLIDER CONTENT -->
	
		<div id="intro" style="  width: 100%;
  margin-bottom: 0;
  position: absolute;
  z-index: 9;
  top: 224px;
">
		<div class="big-header" style="color:white;">Schedule</div>
		<div class="sub-text">Speakers, Events & Workshops</div>
		<h2 id="demo" style="text-align:center"></h2>

		</div>

    	<!--FIRST CONTENT SECTION-->

    
</div>
</body>
</html>
