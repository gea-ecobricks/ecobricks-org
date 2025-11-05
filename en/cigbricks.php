<?php $lang = basename(dirname($_SERVER['SCRIPT_NAME']));?>
<?php $version='1.8';?>
<?php $page='cigbricks';?>
<!DOCTYPE html>
<HTML lang="<?php $lang ;?>">
<HEAD>
<META charset="UTF-8">


<?php require_once ("../includes/cigbricks-inc.php");?>
<!--TOP PAGE BANNER-->


<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">Introducing a simple solution for cigarette pollution</div>
	    <div class="splash-sub" data-lang-id="002-splash-subtitle">The Cigbrick</div>
	</div>
	<div class="splash-image" data-lang-id="003-splash-image-alt-X"><img src="../svgs/oebs.svg" style="width: 95%" alt="The basics of ecobricking">
    </div>	
</div>
<div id="splash-bar"></div>

<!-- PAGE CONTENT-->

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<section id="ENTERECOBRICK">
                <div class="reg-content-block" id="block1">
		            <div class="opener-header">
		            	<div class="opener-header-text">
		            	    <h4 data-lang-id="004-block-1-opener-header">Enter the Ecobrick & Cigbrick</h4>
							<br>
						</div>
		           		<button onclick="toggleAccordion(1)" class="block-toggle" id="block-toggle-show1" aria-label="Open Secion One">+</button>
					</div>
					<div id="preclosed1">
				        <p data-lang-id="005-block-1-paragraph1">Many people don’t realize that cigarette filters are made from a form of plastic called acetate.  When acetate gets into the environment it can cause all sorts of problems. Ecobricks are designed to keep plastic (like filters!) out of the environment in order to make a reusable building block.</p>
				        <p data-lang-id="006-block-1-paragraph2">Ecobricks make use of plastic to secure plastic!  Ecobricks keep plastic from degrading into micro-plastics, gases and toxins! It is as simple as removing the cigarette paper from the acetate filter and adding it to your ecobrick.  If you’re really ambitious you can do a full ecobrick from filters!  We call this a <b><i>Cigbrick</i></b>.  One 600ml Cigbrick can contain over 1000 filters!</p>
			        	<p data-lang-id="007-block-1-paragraph3">Cigbricking enable us to take personal responsibility for our cigarette butts, to secure the plastic fibres from degrading and contaminating, and turn the routine of smoking into a conscious, inspiring and transformational ritual.</p>
	                </div>
				</div>
		    </section>


			<section id="SMALLBUTTBIG">
                <div class="reg-content-block" id="block2">
		            <div class="opener-header">
		            	<div class="opener-header-text">
		            	    <h4 data-lang-id="008-block-2-opener-header">A Small Butt Big Problem</h4>
							<br>
						</div>
		           		<button onclick="toggleAccordion(2)" class="block-toggle" id="block-toggle-show2" aria-label="Open Secion Two">+</button>
					</div>
					
					<div id="preclosed2">
						<p data-lang-id="009-block-2-paragraph1">Despite their small size, of all plastic wastes, cigarette filters are the most abundant and massive of all. It is a big problem: over 4.5 trillion cigarette butts are discarded every year (1). In beach clean ups around the world, they are the most picked up item (2). Many people aren’t aware that 95% of cigarette filters are made of cellulose acetate (a type of plastic).</p>
						<p data-lang-id="010-block-2-paragraph2">Many smokers assume that you can throw a cigarette butt on to the ground and it will biodegrade. Alas, this is <b><i>not the case</i></b>. Acetate does not biodegrade like a banana peel or paper.   A recent scientific examining the effect of filters concludes “Cellulose acetate is photodegradable but not bio-degradable.  Although ultraviolet rays from the sun will eventually break the filter into smaller pieces under ideal environmental conditions, the source material never disappears; it essentially becomes diluted in water or soil. (3) These micro-plastics cause all sorts of problems. Microplastics can have possible <b>direct ecotoxicological impacts, accumulate in food chains and cause economic damage because of food safety concerns.</b> (4)</p>
						<p data-lang-id="011-block-2-paragraph3">A 2011 study done by marine biologist at the University of San Diego clearly showed that a cornucopia of over 4000 chemicals in a used acetate filter leach out and are toxic to marine life (5).</p>
                        <div class="side2">
                        </div>
						<p data-lang-id="012-block-2-paragraph4">While the environmental impact of a single disposed cigarette filter is minimal, there were 1.35 trillion filtered cigarettes manufactured in the United States in 2007 alone. It is estimated that 875,000 tons of cigarette butts hit the biosphere every year (6).</p>
                        <br>
                        <p data-lang-id="013a-block-2-list-paragraph1">___________________________________________________________________</p>
                        <p data-lang-id="013b-block-2-list-paragraph2">1. <a href="https://www.ncbi.nlm.nih.gov/pubmed/19543415">Cigarettes butts and the case for an environmental policy on hazardous cigarette waste.</a> Int J Environ Res Public Health 2009;6:1691–705. Thomas E. Novotny 1,2,*, Kristen Lum, Elizabeth Smith, Vivian Wang and Richard Barnes</p>
                        <p data-lang-id="013c-block-2-list-paragraph3">2. Cigarettes and Cigarette Filters Collected in the United States in the International Coastal Cleanup, 1996–2007. Source: Ocean Conservancy 2007.</p>
                        <p data-lang-id="013d-block-2-list-paragraph4">3. <a href="https://www.ncbi.nlm.nih.gov/pubmed/19543415">Butts and the Case for an Environmental Policy on Hazardous Cigarette Waste</a>, page 3</p>
                        <p data-lang-id="013e-block-2-list-paragraph5">4. Ansje Lohr, Heidi Savelli, Raoul Beunen, Marco Kalz, Ad Ragas, Frank Van Belleghem, <i><a href="https://www.sciencedirect.com/science/article/pii/S1877343517300386?via%3Dihub">‘Solutions for global marine litter pollution‘</a>,</i> (sciencedirect.com, Current opinion in Environmental Sustainability, Vol 28, October 2017) 90-99</p>
                        <p data-lang-id="013f-block-2-list-paragraph6">5. Slaughter E, Gersberg RM, Watanabe K, et al, Toxicity of cigarette butts, and their chemical components, to marine and freshwater fish, Tobacco Control 2011;20:i25-i29. http://tobaccocontrol.bmj.com/content/20/Suppl_1/i25</p>
                        <p data-lang-id="013g-block-2-list-paragraph7">6. Carlozo, LR. Cigarettes: 1.7 billion pounds of trash. Chicago Tribune 2008.</p>
	                </div>
				</div>
		    </section>
	
            <section id="EASYSTUFF">
                <div class="reg-content-block" id="block3">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="014-block-3-opener-header">Easy Stuff: The Technique<h4>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(3)" class="block-toggle" id="block-toggle-show3" aria-label="Toggle Section Three">+</button>
                    </div>
                    <div id="preclosed3">
                        <div class="side2">
                            <a href="../wp-content/uploads/2017/02/Doc-23-Feb-2017-16.56-p1-231x300.jpg"><img src="../wp-content/uploads/2017/02/Doc-23-Feb-2017-16.56-p1-231x300.jpg" style="width:65%" alt="Click to enlarge instructions" loading ="lazy"></a>
                    	    <p data-lang-id="014c-block-3-main-p1"> Click to enlarge instructions</p>
                        </div>
                        <p data-lang-id="015-block-3-paragraph-1">Using cigarette filters to make an ecobrick is easy. Just remove the paper covering from the used butt and stuff the filter (plastic acetate) into a plastic bottle.  The paper is biodegradable, which, unlike the acetate, is not a toxic concern and can be thrown away.  Biodegradables, like paper, are not added to ecobricks (1). Then, use a stick to pack down and compress the filters and any other plastic you pack in. Was there a plastic wrapper around your cigarette box? Finished with that plastic lighter? You can pack those in too! Of course, to make a pure Cigbrick — use just the filters!</p>
                        <p data-lang-id="016-block-3-paragraph-2">If packed properly, the end result is a remarkably dense and solid building block that can be used for a whole bunch of exciting applications. Best of all, the otherwise toxic acetate is 100% contained and put to good use!</p>
                        <br>
                        <p data-lang-id="017a-block-3-list-paragraph1">___________________________________________________________________</p>
                        <p data-lang-id="017b-block-3-list-paragraph2">1. Adding paper and biodegradables to an ecobrick is not necessary (as unlike plastic, they are not toxic in the environment). In addition, biodegradables in particular can affect the safety and integrity of the ecobrick as a building block. They increase the risk of methane build up in the ecobrick and add a flammability risk over time. Plus, rotting stuff in your ecobrick doesn’t look very nice!</p>
                    </div>
                </div>
            </section>
            <section id="APPLICATION">
                <div class="reg-content-block" id="block4">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="018-block-4-opener-header">Application</h4>
                            <h5 data-lang-id="019-block-4-opener-subheader">Ecobricks can be used for everything from furniture, to gardens to structures. The same goes for Cigbricks.</h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(4)" class="block-toggle" id="block-toggle-show4" aria-label="Toggle Section Four">+</button>
                    </div>
                    <div id="preclosed4">
                        <p data-lang-id="020-block-4-paragraph-1">Perhaps the best application is the making of modular furniture, entirely from Cigbricks!  Mas Hindra is working on the first one. Using cut inner tubes to hold the ecobricks together, the color combination of beige and black makes a profound sitting stool. For those who would prefer to hide their Cigbricks, they make good building blocks for gardens and walls. There are tons of cool things you can build this way. We have a whole section on our web site dedicated to <a href="../earth.php">earth and ecobrick building.</a> The beauty of earth building is that the plastics are essentially buried into the bench or wall. Because plastics do not breakdown without the presence of light or heat, those cigbricks will effectively sequester the plastic acetate for decades or centuries.</p>
                        <p data-lang-id="021-block-4-paragraph-2">And… if the bench is broken down, the cigbricks can be taken out and used again! Ecobricks are a <a href="../cradle-to-cradle">cradle-to-cradle</a> solution.</p>
                        <div class="side2">
                            <a href="https://www.ecobricks.org/wp-content/uploads/2019/01/tire-band-5-300x225.jpg"><img src="../wp-content/uploads/2019/01/tire-band-5-300x225.jpg" style="width:65%" alt="Click to enlarge instructions" loading ="lazy"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="RITUAL">
                <div class="reg-content-block" id="block5">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="022-block-5-opener-header">Ritual vs Routine</h4>
                            <h5 data-lang-id="023-block-5-opener-subheader">Most people are not aware of the toxicity of their cigarette butts. Throwing “away” a used filter, is part of their smoking routine and often occurs with little thought or consciousness.  The process of cigbricking transforms the routine into a radical ritual.</h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(5)" class="block-toggle" id="block-toggle-show5" aria-label="Toggle Section Five">+</button>
                    </div>
                    <div id="preclosed5">
                        <div class="side2">
                            <p data-lang-id="024-block-5-paragraph-1">Mas Tarto, is a Global Ecobrick Trainer from Pemalang, Java, Indonesia. Mas Tarto is also a tobacco lover.  He makes cigbricking a personal daily ritual. Right after putting out his cigarette, he removes the paper, and packs it into the bottle he always carries with him. If the bottle is not with him, he puts the filter into his pocket for later packing. Sometimes, he even grabs other butts from the ashtray! His act is so astounding that it raises eyebrows wherever he goes.  Whether he is at home, at the cafe, or at a restaurant he is asked about it. He then explains himself, his ecological reasons and his concern for the environment.</p>
                            <p data-lang-id="025-block-5-paragraph-2">Mas Hindra, is another GEA Ecobrick Trainer who lives and works on a boat in the middle of the South China Sea. Although not a smoker himself, many of his 163 shipmates are.  In order to finish off his personal ecobricking projects, he requests and collects the cigarette butts of all the ship — asking them first to remove the paper. His request and project is so astounding that it gets everyone talking.  It leads to all sorts of interesting questions: “Where would the filter go if it had not been ecobricked?”  “What happens to plastic lighters?”  “What is acetate anyway?” He then explains his love and concern for the ocean, and the dangers of discarded filters.</p>
                            <p data-lang-id="026-block-5-paragraph-3">Shiloh Vermaak is lives in Durban, South Africa, where plastic is also a problem.  Shiloh is another GEA who also smokes!  As a way to contain and to keep track of her smoking, she also makes Cigbricks.  For her it is simply a focused personal and private habit.</p>
                            <p data-lang-id="027-block-5-paragraph-4">“Cigarette butts are a great example of the power of collective action. It’s such a small thing, but if everyone is throwing them a way, we have a massive problem. I just don’t want to part of the problem.”</p>
                            <p data-lang-id="028-block-5-paragraph-5">It is good to remember the history of tobacco.  It wasn’t so long ago, on the great plains of North America, the First Nations revered tobacco as a sacred plant. They smoked it with great respect, and used it in their rituals.  Often these rituals were focused on peace and healing.</p>
                            <p data-lang-id="029-block-5-paragraph-6">We’re inspired by the examples of Tarto, Hindra and Shiloh.  Through their courageous and simple acts, they have brought back a powerful ritual to tobacco smoking — just when we need the healing and peace the most.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="CREDITS">
                <div class="reg-content-block" id="block6">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="030-block-6-opener-header">Credits</h4>
                            <h5 data-lang-id="031-block-6-opener-subheader">Thank you to the Igorot people whose ancestral principle of <a href="http://www.russs.net/ayyew">Ayyew</a> (tighter and tighter cycling of resoures) underlies the concept.  Merci to George Beurnier who inspired the renewed refining of the cigbrick concept.</h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(6)" class="block-toggle" id="block-toggle-show6" aria-label="Toggle Section Six">+</button>
                    </div>
                    <div id="preclosed6">
                        <p data-lang-id="032-block-6-paragraph-1">Terimah Kasih to <a href="https://www.instagram.com/shirohyde/">Fabianus Bayu</a> for his help crafting our cartoon Ecobrick bottle, the animated happy-albatross-family, and our vision landscape. Thanks to Elena Molchanova whose animated ecobrick intro and credits set the tone in our <a href="https://youtu.be/rGaJYQuOs-0">Cigbrick 30 second movie.</a>  Salemat Po to El Tiburon Grande for his help with the original vision landscape in the movie. Maternuan to mas Tarto, Reksi and Aysha for prototyping the first Cigbricks. Danku Vel to Shiloh for helping us prototype the paper removal technique.  Thank you to Mas Hindra for going full-steam-ahead once we got the technique set up (he’s approaching 100,000 filters packed now!) and for logging the first proper Cigbrick on GoBrik. Terimah Kasih to <a href="../hindra">Mas Hindra</a> and Mas Suryadi for their photo and video contributions.  Thank you to Irfan Korchak for his editing and discussion of the concept and the redemption of tobacco.  Thank you to Ani Himawati for her executive direction in crafting the Cigbrick concept.</p>
                        <p data-lang-id="033-block-6-paragraph-2">Thank you to Nurkinanti Laraskusuma for their translation of the concept and the page to Indonesian.</p>
                    </div>
                </div>
            </section>
            <section id="ANCESTRAL">
                <div class="reg-content-block" id="block7">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="034-block-7-opener-header">Ancestral Inspiration</h4>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(7)" class="block-toggle" id="block-toggle-show7" aria-label="Toggle Section Seven">+</button>
                    </div>
                    <div id="preclosed7">
                        <p data-lang-id="035-block-7-paragraph-1">For centuries First Nation peoples used tobacco as a way to make offerings and prayers to Spirit.  To this day, on the Great Plains of what is now North America, First Nation peoples have used tobacco with great respect and consciousness.  Tobacco was used in ceremonies to promote physical, spiritual, emotional, and community well-being. Elders emphasized the importance of having good attitudes and thoughts when working with tobacco.  Tobacco was smoked as an offering to the Creator or to a person, place or being. Elders taught that the smoke from burned tobacco carried the thoughts and prayers to the spirit world or to the Creator.3</p>
                        <p data-lang-id="036-block-7-paragraph-2">Learning from our ancestors, we can reclaim the use of tobacco as a means to catalyse and raise ecological consciousness.  The actions required to make a Cigbrick are such that they can infuse the routine of tabacco smoking with conscious ritual.  With this, the transformative power of tobacco can be harnessed for the healing of Earth, Air and Water once again.</p>
                        <div class="side2">
                            <img src="../wp-content/uploads/2020/01/Circle-earth-Bench-300px-wide-212x300.png" style="width:65%" loading ="lazy">
                        </div>
                    </div>
                </div>
            </section>
        	<div class="page-paragraph">
                <iframe width="630" height="472"
                src="https://www.youtube.com/embed/Vxsk-GEw2Ho">
                </iframe>
    		</div>
        </div>
	
        <!-- PAGE SIDE BAR STARTS HERE-->

        <div class="side">

            <?php require_once ("side-modules/good-use.php");?>

            <?php require_once ("side-modules/sequest-module.php");?>

            <?php require_once ("side-modules/signup-now.php");?>
    
            <?php require_once ("side-modules/transition-module.php");?>

            <?php require_once ("side-modules/earthen-ethics.php");?>
        </div>
    </div>
</div>




	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2025.php");?>



<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="../js/accordion-scripts.js?v=2" defer></script>

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
