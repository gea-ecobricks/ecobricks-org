<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='1.83';?>
<?php $page='media';?>

<title>Ecobrick Media Kit</title>

<?php require_once ("../includes/media-inc.php");?>
	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">Ecobrick Media Kit</div>
		<div class="splash-sub" data-lang-id="002-splash-subtitle">A short guide to reporting on ecobricks & the plastic transition movement.</div>
	</div>
	<div class="splash-image" data-lang-id="003-splash-alt"><img src="../webp/earthcenter-banner-400px.webp" style="width: 76%;"></div>	
</div>
<div id="splash-bar"></div>


<!-- PAGE CONTENT-->

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph" >
				
			<p data-lang-id="004-lead-page-paragraph">Covering ecobricks?  We’ve assembled this guide to avoiding ecobrick misconceptions, using generally accepted terminology and attributing our content to help you with your story.</p>
			</div>

			<div class="page-paragraph">
				<p data-lang-id="005-first-page-paragraph">The Global Ecobrick Alliance uses terminology that has been collectively determined by the global ecobrick movement and established on the <a href="https://en.wikipedia.org/wiki/Plastic_sequestration" target="_blank">Wikipedia Ecobricks article</a> throughout our site and resources.</p>  

                <p data-lang-id="006-second-page-paragraph">We encourage the same usage of terms and spellings by journalist, researchers and ecobrickers to add consistentcy and momentum to local and global grass roots plastic transition movements.</p>

                <p data-lang-id="007-third-page-paragraph">Below we provide an overview of ecobrick terms, misconceptions, our creative commons licenses and our requisite attribution tags for using or texts, photos and videos.<p> 

			</div>	

	<div class="reg-content-block" id="block1">
				
	<div class="opener-header">
					
		<div class="opener-header-text">
			<h4 data-lang-id="008-terms-title">Terms & Spellings</h4>
			<h5 data-lang-id="009-terms-subtitle">The generally accepted spelling for key terms.</h5>
		</div>
					

		<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
	</div>

	<div id="preclosed1">
		<br>
					
		<p data-lang-id="010-ecobrick-definition"><b>Ecobrick</b></p>
        <p data-lang-id="011-ecobrick-spelling"><b>"ecobrick"</b> — no space, hyphen or added capitalization is the recognized spelling.  This is the recognized spelling of the ecobrick’s Wikipedia entry and URL: <a href="https://en.wikipedia.org/wiki/ecobricks" target="_blank">wikipedia.org/wiki/ecobricks.</a></p>

        <p data-lang-id="012-ecobrick-history">In the past, terms such as "bottle brick", "eco brick" and "eco-brick" have been used to refer to a PET bottle packed with plastic.  In 2014, plastic transition leaders around the world conferred and agreed that our concept deserved its own full-fledged and normalized word.  The ecobrick Wikipedia page was updated accordingly in 2016.</p> 
                    
        <p data-lang-id="013-ecobrick-note">NOTE:  Other brick-making technologies borrow the term ecobrick by using a variety of spellings.  Corporations such as Nestle have attempted to appropriate 'ecobrick' for their cement block corporate social responsibility programs. However, plastic sequestration in a PET bottle is the <a href="https://en.wikipedia.org/wiki/Eco-Brick" target="_blank">recognized Wikipedia disambiguation for the non-hyphenated spelling.</a></p><br>

        <p data-lang-id="014-plastic-sequestration-definition"><b>Plastic Sequestration</b></p>
        <p data-lang-id="015-plastic-sequestration-goal">The goal of ecobricking is the <a href="https://en.wikipedia.org/wiki/Plastic_sequestration">sequestration of plastic</a>.  This is the official term as defined and recognized on Wikipedia.</p>
        <br>
        <p data-lang-id="016-ecobricker-definition"><b>Ecobricker</b></p>
        <p data-lang-id="017-ecobricker-description">Someone who makes an ecobrick or who has committed to ecobricking all their plastic</p><br>
        <p data-lang-id="018-ecobricking-definition"><b>Ecobricking</b><p>
        <p data-lang-id="019-ecobricking-description">The act of sequestering plastic inside an ecobrick.</p>
        <br>			
	</div>	
</div>


<div class="reg-content-block" id="block2">
	<div class="opener-header">
		<div class="opener-header-text">
			<h4 data-lang-id="020-misconceptions-title">Misconceptions</h4>
			<h5 data-lang-id="021-misconceptions-subtitle">Please avoid the common misconceptions about ecobricks.</h5><br>
		</div>
		<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
	</div>

	<div id="preclosed2">
		<p>

		<ul>
			<li data-lang-id="022-misconception-plastic-trash"><b><i>“Ecobricks are made with plastic trash."</i></b> <br><br>
            The Global Ecobrick Alliance, approaches plastic from a regenerative and ayyew philosophy.  As such we do not refer to plastic as ‘trash’.  This is the antithesis of ecobricks which views plastic as a resource. Please avoid associating ecobricks with “waste” or “trash” and rather as "used plastic" or "discarded plastic".  See our <a href="/ayyew">Ayyew Principle.</a><br><br></li>
            
			<li data-lang-id="023-misconception-building-structures"><b><i>“Ecobricks are for building schools and homes”</i></b> <br><br>
             Although you can build structures with them, 99% of ecobricks are applied in projects that use less than 20 ecobricks at a time (such as seats, furniture, tables, garden beds, etc.).  The GEA advocates small and useful applications as a means of empowering a wider section of society. See <a href="build.php">Ecobrick Applications</a><br><br></li>
             
			<li data-lang-id="024-misconception-developing-countries"><b><i>“Ecobricks are for developing countries and poor people"</i></b> <br><br>
             Ecobricks are for anyone who wants to take responsibility for their plastic, and are relevant around the world.  Currently, there are more ecobrickers from the UK on our GoBrik app than anywhere else in the world. See <a href="https://www.gobrik.com/#global/country-stats/">GoBrik country stats</a></li><br><br>
             
			<li data-lang-id="025-misconception-recycling-option"><b><i>“Ecobricks are for places where recycling isn’t an option”</i></b><br><br>
             Ecobricks are ideal for places with recycling!  In fact, avoiding industrial recycling and incineration is precisely why most ecobrickers ecobrick.  Intentionally, ecobricks help keep plastic out of the recycling industry.  This prevents the creation of more factories, prevents the emissions of running these factories and prevents fuel burned for exporting and transporting to and from these factories.  Keeping plastic out of industry also prevents the inevitable dispersion of the plastic that has been shown to eventually result. See <a href="sequest.php">Plastic Sequestration</a><br><br></li>
             
			<li data-lang-id="026-misconception-sustainable-development"><b><i>“Ecobricks are a Sustainable Development technology”</i></b><br><br>
             The GEA explicitly differentiates itself from “sustainability” and “development” paradigms. Instead: Ecobricks are a non-capital, collaboration powered, regenerative technology. See our <a href="/principles">principles</a><br><br></li>
             
			<li data-lang-id="027-misconception-GEA-NGO"><b><i>“The GEA is an NGO”</i></b> <br><br>
             The Global Ecobrick Alliance is not a company nor an NGO.  We distinguish between these two organizational structures and call ourselves a not-for-profit Earth Enterprise.  See <a href="about.php">About us</a></li>
		</ul>
		</p>
		<br>
	</div>
</div>

<div class="reg-content-block" id="block3">

	<div class="opener-header">
		
		<div class="opener-header-text">
			<h4 data-lang-id="028-quoting-title">Quoting our texts</h4>
			<h5 data-lang-id="029-quoting-subtitle">Guidelines for using snippets from this site.</h5>
			<br>
		</div>

		<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
	</div>

	<div id="preclosed3">
		
		<p data-lang-id="030-quoting-guidelines">When using written content from our site our resources please attribute to “The Global Ecobrick Alliance – Ecobricks.org”.  ‘Ecobricks.org” is not necessary if a hyperlink is added to the attribution.</p>
        <p data-lang-id="031-quoting-hyperlink">For hyper-links, please use: https://ecobricks.org</p><br>
        
	</div>
</div>



<div class="reg-content-block" id="block4">

	<div class="opener-header">
		
		<div class="opener-header-text">
			<h4 data-lang-id="032-photos-title">Photos & Images</h4>
			<h5 data-lang-id="033-photos-subtitle">Guidelines for using and attributing our images.</h5>
			<br>
		</div>

		<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
	</div>

	<div id="preclosed4">
		
		<p data-lang-id="034-photos-usage">All the photos and images on ecobricks.org are available for use under a Creative Commons Attribution-ShareAlike 4.0 International License, unless noted otherwise (such as our logos, icons, and emblems).</p>
		<p data-lang-id="035-photos-attribution">Please attribute to "The Global Ecobrick Alliance - Ecobricks.org"</p><br>
		<p data-lang-id="036-photos-gallery-title"><b>Gallery of Stock Ecobrick Photos</b></p>
		<p data-lang-id="037-photos-gallery-description">We've assembled a <a href="/gallery-kit">gallery of wide-ranging ecobrick related photos</a> that you can freely use under our CC-A-SA-4.0 license.</p>
		<br>

	</div>
</div>

<div class="reg-content-block" id="block5">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="028-videos-title">Videos</h4>
            <h5 data-lang-id="029-videos-subtitle">Guidelines for using our video content</h5>
            <br>
        </div>
        <button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
    </div>
    <div id="preclosed5">
        <p data-lang-id="030-videos-content">All the videos on this site and on our <a href="https://youtube.com/ecobricks" target="_blank">Our Youtube Channel</a> are available for use under a Creative Commons Attribution-ShareAlike 4.0 International License unless otherwise noted.</p>
        <p data-lang-id="031-videos-attribution">Please attribute to "The Global Ecobrick Alliance - Ecobricks.org"</p>
        <br>
    </div>
</div>

<div class="reg-content-block" id="block6">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="032-interviews-title">Interviews</h4>
            <h5 data-lang-id="033-interviews-subtitle">Contact our appropriate team to ask questions or arrange an interview.</h5>
            <br>
        </div>
        <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
    </div>
    <div id="preclosed6">
        <br>
        <p data-lang-id="034-contact-title"><b>The GEA in the United Kingdom</b></p>
            <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#117;&#107;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;">&#117;&#107;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;</a></p>
            <br>

            <p data-lang-id="035-contact-title"><b>The GEA in Indonesia</b></p>
            <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#117;&#107;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;">&#105;&#110;&#100;&#111;&#110;&#101;&#115;&#105;&#97;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;</a></p><br>

            <p data-lang-id="036-contact-title"><b>Direct Media Enquiries</b></p>

            <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#101;&#100;&#105;&#97;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;">&#109;&#101;&#100;&#105;&#97;&#64;&#101;&#99;&#111;&#98;&#114;&#105;&#99;&#107;&#115;&#46;&#111;&#114;&#103;</a></p><br>

    </div>
</div>

<div class="reg-content-block" id="block7">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="040-past-coverage-title">Past Coverage</h4>
            <h5 data-lang-id="041-past-coverage-subtitle">Examples of stories on ecobricks and the plastic transition movement.</h5>
            <br>
        </div>
        <button onclick="preclosed7()" class="block-toggle" id="block-toggle-show7">+</button>
    </div>
    <div id="preclosed7">
        <ul>
            <li data-lang-id="042-past-coverage-cnn-indonesia"><p><b>CNN Indonesia</b> | <a href="https://www.youtube.com/watch?v=peDg7qwWMKU" target="_blank">60 minute Interview with Desi Anwar, Ani Himawati, and Russell Maier on the Ecobrick movement</a></p></li>
            <li data-lang-id="043-past-coverage-korea-tv"><p><b>Korea TV</b> | <a href="http://www.ytn.co.kr/_sp/0930_201603122050037614" target="_blank">Ecobricks Feature on National Korean TV</a></p></li>
            <li data-lang-id="044-past-coverage-jogja-tv"><p><b>Indonesia, Jogja TV</b> | <a href="http://jogjatv.tv/pemkot-luncurkan-ecobricks-untuk-atasi-sampah-plastik/" target="_blank">Ecobrick Convergence Featured on Jogja city TV</a></p></li>
            <li data-lang-id="045-past-coverage-net-tv"><p><b>Indonesia, NET.TV</b> | <a href="https://www.youtube.com/watch?v=fK-cc8SfSW8" target="_blank">Ecobrick Spread in Jogjakarta and the Jogja Ecobrick Team Featured on NET.TV</a></p></li>
            <li data-lang-id="046-past-coverage-spot-ph"><p><b>Philippiines, Spot.ph</b> | <a href="http://www.spot.ph/newsfeatures/newsfeatures-peopleparties/71089/interview-russel-maier-ecobricks-a00171-20170810-lfrm2" target="_blank">The history of ecobricking in the Philippines.</a></p></li>
            <li data-lang-id="047-past-coverage-independent-documentary"><p><b>Independent Documentary</b> | <a href="https://www.youtube.com/watch?v=Ynh0RYORsOM" target="_blank">Solving Plastic One Bottle at a Time in the Northern Philippines: 10 minute documentary on Russell Maier, Irene Angway and the spread of Ecobricks in the Norther Philippines.</a></p></li>
        </ul>
        <br><br>
    </div>
</div>

<div class="page-paragraph-reg">
    <div class="row">
        <div class="main2">
            <br>
            <h3 data-lang-id="048-try-it-yourself">And... be sure to try it yourself!</h3>
            <p data-lang-id="049-try-it-yourself-content">The best way to document ecobricks is to try it yourself. We encourage you to save your household plastic for a month, weight it then ecobrick it. Then save and weigh your plastic consumption the next month. Subtracting your second month of consumption from your first, will show your <a href="transition.php">plastic transition</a> progress. Now, that's a good story! 👍</p>
            <br><br>
            <a class="action-btn" href="how.php" data-lang-id="050-learn-how">Lean How Make An Ecobrick</a>
            <p style="font-size: 0.85em; margin-top:20px;" data-lang-id="051-ecobrick-guide">See our 10 Step Ecobrick Making Guide</p>
        </div>
        <div class="side2">
            <br><img src="../svgs/eb-blue.svg" width="100%" alt="how to make an eco brick" loading="lazy" data-lang-id="052-ecobrick-image-alt">
        </div>
    </div>
</div>

</div>

		
		
		<div class="side">


	
		
            <?php require_once ("side-modules/about-gea.php");?>

            <?php require_once ("side-modules/for-earth.php");?>

            <?php require_once ("side-modules/sequest-module.php");?>

            <?php require_once ("side-modules/transition-module.php");?>





		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>


<!-- CUSTOM PAGE SCRIPTS-->


<!-- This script is for pages that use the accordion content system-->
<script src="../accordion-scripts.js?v=2" defer></script>

</div>
</body>
</html>



