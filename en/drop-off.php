<!--PAGE LANGUAGE:  ENGLISH
Content Page template: v.1.0.1-->

<!DOCTYPE html>
<HTML lang="en">
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.1';?>
<?php $page='drop-off';?>

<!-- TRANSLATORS:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("../includes/drop-off-inc.php");?>
	
<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<!--<?php require_once ("translate-please.php");?>-->

<title>Drop Off</title>
	
<!--TOP PAGE BANNER-->

<article id="Drop Off">
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">The Brik Market</div>
	    <div class="splash-sub">The place to arrange ecobrick exchanges, hubs, barters and drop-offs.</div>
	</div>
	<div class="splash-image"><img src="https://ecobricks.org/webp/brikmarket-400px.webp?v1.3" style="width: 70%">
    </div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">
			<div class="lead-page-paragraph">
				<p></p>
				<p></p>
				<p>Thank you for visiting us. We are sorry to inform you that the Brik Market is offline for the foreseeable future.</p>
			</div>
			<div class="page-paragraph">
  				<p>Please be aware that there are currently no drop off points as such. Now and again projects may ask for specific bricks to speed up their construction. These requests will usually be advertised locally on social media channels.</p>
  				<p>If you have Ecobricks, then why not make a small module for your home or garden? You could combine with your neighbours to make something for your community. To see completed projects from around the world scroll down to our homepage where you will find a gallery</p>
				<br>
				<p><a href="https://ecobricks.org.en">Ecobricks Home Page</a></p>
			</div>
		</div>
	</div>
</div>

	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<!-- This script is for pages that use the accordion content system

<script src="../accordion-scripts.js?v=<?php echo ($version); ;?>" defer></script>


-->

<!-- CUSTOM PAGE SCRIPTS-->
<script>

  function toggleAccordion(blockNumber) {
    // Toggle the display of the content block
    var contentBlock = document.getElementById("preclosed" + blockNumber);
    if (contentBlock.style.display === "block") {
        contentBlock.style.display = "none";
    } else {
        contentBlock.style.display = "block";
    }

    // Toggle the styling of the main block
    var mainBlock = document.getElementById("block" + blockNumber);
    if (mainBlock.style.display === "grid") {
        mainBlock.style.background = "var(--accordion-background)";
        mainBlock.style.display = "block";
    } else {
        mainBlock.style.background = "var(--main-background)";
        mainBlock.style.display = "grid";
    }

    // Toggle the button text
    var toggleButton = document.getElementById("block-toggle-show" + blockNumber);
    if (toggleButton.innerHTML === "+") {
        toggleButton.innerHTML = "-";
    } else {
        toggleButton.innerHTML = "+";
    }
}


</script>
</div>
</body>
</html>

