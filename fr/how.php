<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='1.45';?>
<?php $page='how';?>

<?php require_once ("../includes/how-inc2.php");?>


<!--TOP PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">How to Make an Ecobrick</div>
	    <div class="splash-sub" data-lang-id="002-splash-subtitle">GEA 10 Step Guide</div>
	</div>
	<div class="splash-image" data-lang-id="003-splash-image-alt"><img src="../webp/eb-sky-400px.webp" style="width: 85%" alt="How to make an eco brick">
    </div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->


<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">  

		<article id = "top">
		<div class="main">

			<div class="lead-page-paragraph">
				<h5 data-lang-id="004-lead-page-paragraph">Ecobricks can be made by the young, the old and everyone in between — no machines, special skills or experts required!  However, there are important guidelines to follow to ensure the quality and usability of your ecobricks.</h5>
    
			</div>
			
			
			<div class="page-paragraph">
                <p data-lang-id="005-first-page-paragraph">Be sure to start ecobricking right— this is a long-term life habit that you, your household and community are beginning.  Likewise, your ecobricks will set the example for everyone around you.  Sub-standard ecobricks will compromise the quality of furniture modules, constructions and the social spread of ecobricks while, well-done ecobricks can be put to good, safe use and will secure plastic for centuries.  We’ve put this 10 step guide together to help you on your journey of making great ecobricks.</p>	
            </div>	



			<section id="SAVE">
				<div class="reg-content-block" id="block1">
					<div class="opener-header">
						<div class="opener-header-text">
							<h4 data-lang-id="006-block-1-opener-header">1. Save, Segregate, Clean & Dry Plastics</h4>
							<h5 data-lang-id="007-block-1-opener-subheader">Ecobricks are made with clean and dry plastic.  Start by segregating your plastic from all other materials. </h5>   
							<br>
						</div>
						<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1" aria-label="Open Secion One">+</button>
					</div>

					<div id="preclosed1">
						<p data-lang-id="008-block-1-opener-main-image-alt">
						<img src="../pngs/01-Save-Segregate-Prep-your-Plastics-800px.png" width="640" loading="lazy" class="full-width-image" alt="Save, segragate, clean, dry plastics"></p>

						<p data-lang-id="009-block-1-opener-subheader"> Some ecobrickers bring a bottle with them everywhere they go.  Others save up their ecobrickable plastic in a bin til they have time to get to it.</p>
						<p data-lang-id="010-block-1-paragraph">If there is any food, oil or dirt on your plastic, be sure to wash it off.  Dirty plastic inside an ecobrick will lead to microbiological growth and methane forming inside your ecobrick (for a solution for dirty plastic see the Ocean Ecobrick).  Since ecobricks are often used to make home furniture you also want to avoid unsightly ecobricks, bloated bottles and in rare cases, caps popping off.</p>

						<p data-lang-id="011-block-1-opener-subheader">Its likewise important that the plastic is dry!  Wet and moist plastic will also encourage mircobial growth.  Ecobrikers around the world use different methods for drying their washed plastic– from laundry machines to cloths lines.</p>


						<div class="advanced-box" aria-expanded="false" role="region" aria-labelledby="advancedBoxLabel-1"> 
							<div class="advanced-box-header"  id="advancedBoxLabel-1">
								<div class="advanced-title" data-lang-id="012-block-1-advanced">Advanced</div>
								<div class="advanced-open-icon" >+
								</div>
							</div>
							<div class="advanced-box-content">
								<div class="row">
							
									<div class="main2">
										<p data-lang-id="013-block-1-advanced-paragraph">💡 Many ecobrickers track their household’s plastic consumption on a monthly basis in order to determine their <a href="../ptr">Plastic Transition Ratio (PTR)</a>.  Over the course of the calendar month they save, clean and dry their consumed plastic and put it into a dedicated bin.  At the end of the month, they weigh this plastic and record the amount (our GoBrik app can help you do this!).</p>
									</div>

									<div class="side2">
										<p data-lang-id="014-block-1-advanced-image-alt"><img src="../pngs/weighed-plastic-150x150.png" width="150" height="150" loading="lazy" alt="weighed plastic">
										</p>
									</div>

									<p data-lang-id="015-block-1-advanced-paragraph">They then transfer this plastic into their “To Ecobrick” bin, which anyone in the home can use to directly ecobrick.  Month by month ecobrickers track their plastic, and compare it to their month ecobrick.  This enables them to determine their PTR and their progress reaching zero waste and going beyond!</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


		</div>

		</article>


	

		<div class="side">

			<?php require_once ("side-modules/good-use.php");?>

			<?php require_once ("side-modules/sequest-module.php");?>

			<?php require_once ("side-modules/spiral-design.php");?>
				
			<?php require_once ("side-modules/transition-module.php");?>

			<?php require_once ("side-modules/earthen-ethics.php");?>
		</div>

	</div>
</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="../accordion-scripts.js?v=2" defer></script>


<script>
document.getElementById('play-button').addEventListener('click', function() {
    const iframe = document.createElement('iframe');
    iframe.setAttribute('loading', 'lazy');
    iframe.setAttribute('title', 'How to Make an Ecobrick');
    iframe.setAttribute('width', '600');
    iframe.setAttribute('height', '400');
    iframe.setAttribute('src', 'https://www.youtube.com/embed/RQoXtbJTvMs');
    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
    iframe.setAttribute('allowfullscreen', '');
    iframe.style.border = 'none';
    iframe.style.width = '100%';
    
    const placeholder = document.getElementById('video-placeholder');
    placeholder.replaceWith(iframe);
});

</script>

<script>
function toggleAdvancedBox(event) {
    // Get the current advanced box based on the clicked header
    let currentAdvancedBox = event.currentTarget.parentElement;

    // Assuming the element that will have the `aria-expanded` attribute is the header itself
    let header = currentAdvancedBox.querySelector('.advanced-box-header');

    // Find the content and icon specific to this advanced box
    let content = currentAdvancedBox.querySelector('.advanced-box-content');
    let icon = currentAdvancedBox.querySelector('.advanced-open-icon');
    
    // Check if the content is currently expanded or not
    let isExpanded = header.getAttribute('aria-expanded') === 'true';

    if (!isExpanded) {
        content.style.maxHeight = content.scrollHeight + 'px';  // Set to its full height
        icon.textContent = '−';  // Consider using a minus symbol for an open state for clarity
        header.setAttribute('aria-expanded', 'true'); // Update aria-expanded to true
    } else {
        content.style.maxHeight = '0px';  // Collapse it
        icon.textContent = '+';  // Set to plus symbol
        header.setAttribute('aria-expanded', 'false'); // Update aria-expanded to false
    }
}


// Attach the function to all header div's click events
document.addEventListener("DOMContentLoaded", function() {
    let headers = document.querySelectorAll('.advanced-box-header');
    headers.forEach(header => {
        header.addEventListener('click', toggleAdvancedBox);
    });
});



















</script>


</div>





</body>
</html>
