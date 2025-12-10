<?php $lang = basename(dirname($_SERVER['SCRIPT_NAME']));?>
<?php $version='2.4';?>
<?php $page='cigbricks';?>
<!DOCTYPE html>
<HTML lang="<?php $lang ;?>">
<HEAD>
<META charset="UTF-8">


<?php require_once ("../includes/cigbricks-inc.php");?>
<style>
    .split-page-paragraph {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    .split-page-paragraph .split-text {
        width: 100%;
    }

    .split-page-paragraph .split-image {
        display: flex;
        justify-content: center;
        max-width: 277px;
        width: 100%;
    }

    .split-page-paragraph .split-image img {
        width: 100%;
        height: auto;
    }

    @media (min-width: 769px) {
        .split-page-paragraph {
            flex-direction: row;
            align-items: flex-start;
        }

        .split-page-paragraph .split-text {
            flex: 1;
        }

        .split-page-paragraph .split-image {
            max-width: 300px;
            padding: 10px;
        }
    }

    .footnotes {
        margin-top: 10px;
        margin-left: 15px;
    }

    .footnotes ol {
        font-size: 0.9em;
        padding-left: 20px;
        margin: 0;
        list-style: decimal;
    }

    .footnotes li {
        margin-bottom: 8px;
    }

    .footnotes a {
        text-decoration: none;
    }

    .credit-list {
        margin: 0 0 10px 20px;
        padding-left: 0;
        list-style: disc;
    }

    .credit-list li {
        margin-bottom: 6px;
    }

    .feature-image {
        margin-bottom: 15px;
        text-align: center;
    }

    .feature-image img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
    }

    .feature-image figcaption {
        font-size: 0.9em;
        color: #555;
        margin-top: 6px;
    }
</style>
<!--TOP PAGE BANNER-->


<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title-new">The Cigbrick</div>
	    <div class="splash-sub" data-lang-id="002-splash-subtitle-new">Introducing a simple solution for cigarette pollution</div>
	</div>
        <div class="splash-image" data-lang-id="003b-splash-image-alt"><img src="../svgs/cigbrick.svg" style="width: 95%" alt="The cigbrick is the green solution for cigarette butts">
    </div>
</div>
<div id="splash-bar"></div>

<!-- PAGE CONTENT-->

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

                        <div class="lead-page-paragraph">
                            <div class="page-paragraph split-page-paragraph">
                                <div class="split-text">
                                    <p data-lang-id="005b-first-page-paragraph">Cigarette filters are made from a form of plastic called acetate.  When acetate gets into the environment it breaks down into microplastic and leaches out chemicals.  This can cause also sorts of health problems for all living creatures.</p>
                                </div>
                                <div class="split-image">
                                    <img src="../webp/Characters-Albatross-Cigar.gif" alt="Albatross nest with cigarette pollution disapearing" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <p data-lang-id="006-second-page-paragraph-b">Enter the cigbrick!  Like all ecobricks, cigbricks secure plastic into a bottle to make a sturdy, reusable building block.  This prevents plastic from degrading into micro-plastics, off-gasing and from leaching chemicals.  It is as simple as removing the cigarette paper from the acetate filter and adding it to your ecobrick.  However, for dramatic effect, you can do a full ecobrick from filters!  <i>This</i> is a <b><i>cigbrick</i></b>.  A single 600ml cigbrick can contain over 1000 filters!</p>

                        <p data-lang-id="007-third-page-paragraph-b">Cigbricking enable us to take personal responsibility for our cigarette butts and turn the routine of smoking into a conscious and transformational ritual.</p>



			<section id="SMALLBUTTBIG">
                <div class="reg-content-block" id="block1">
		            <div class="opener-header">
		            	<div class="opener-header-text">
		            	    <h4 data-lang-id="008-block-1-opener-header">A Small Butt Big Problem</h4>
		            	    <h5 data-lang-id="009-block-1-opener-subheader">Despite their small size, of all plastic wastes, cigarette filters are the most abundant and massive of all.</h4>
							<br>
						</div>
		           		<button onclick="toggleAccordion(1)" class="block-toggle" id="block-toggle-show1" aria-label="Open Section One">+</button>
					</div>
					
					<div id="preclosed1">
                                                <p data-lang-id="010-block-1-paragraph1">It is a big problem: over 4.5 trillion cigarette butts are discarded every year <sup id="fnref1"><a href="#fn1">1</a></sup>. In beach clean ups around the world, they are the most picked up item <sup id="fnref2"><a href="#fn2">2</a></sup>. Many people aren’t aware that 95% of cigarette filters are made of cellulose acetate (a type of plastic).</p>
                                                <p data-lang-id="011-block-1-paragraph2">Many smokers assume that you can throw a cigarette butt on to the ground and it will biodegrade. Alas, this is <b><i>not the case</i></b>. Acetate does not biodegrade like a banana peel or paper.   A recent scientific examining the effect of filters concludes “Cellulose acetate is photodegradable but not bio-degradable.  Although ultraviolet rays from the sun will eventually break the filter into smaller pieces under ideal environmental conditions, the source material never disappears; it essentially becomes diluted in water or soil." <sup id="fnref3"><a href="#fn3">3</a></sup> These micro-plastics cause all sorts of problems. Microplastics can have possible <b>direct ecotoxicological impacts, accumulate in food chains and cause economic damage because of food safety concerns.</b> <sup id="fnref4"><a href="#fn4">4</a></sup></p>
                                                <p data-lang-id="012-block-1-paragraph3">A 2011 study done by marine biologist at the University of San Diego clearly showed that a cornucopia of over 4000 chemicals in a used acetate filter leach out and are toxic to marine life <sup id="fnref5"><a href="#fn5">5</a></sup>.</p>
                                                <p data-lang-id="013-block-1-paragraph4">While the environmental impact of a single disposed cigarette filter is minimal, there were 1.35 trillion filtered cigarettes manufactured in the United States in 2007 alone. It is estimated that 875,000 tons of cigarette butts hit the biosphere every year <sup id="fnref6"><a href="#fn6">6</a></sup>.</p>
                        <br>
                        <hr>
                        <div class="footnotes">
                            <ol>
                                <li id="fn1" data-lang-id="013b-block-1-list-paragraph2"><a href="https://www.ncbi.nlm.nih.gov/pubmed/19543415">Cigarettes butts and the case for an environmental policy on hazardous cigarette waste.</a> Int J Environ Res Public Health 2009;6:1691–705. Thomas E. Novotny 1,2,*, Kristen Lum, Elizabeth Smith, Vivian Wang and Richard Barnes</li>
                                <li id="fn2" data-lang-id="013c-block-1-list-paragraph3">Cigarettes and Cigarette Filters Collected in the United States in the International Coastal Cleanup, 1996–2007. Source: Ocean Conservancy 2007.</li>
                                <li id="fn3" data-lang-id="013d-block-1-list-paragraph4"><a href="https://www.ncbi.nlm.nih.gov/pubmed/19543415">Butts and the Case for an Environmental Policy on Hazardous Cigarette Waste</a>, page 3</li>
                                <li id="fn4" data-lang-id="013e-block-1-list-paragraph5">Ansje Lohr, Heidi Savelli, Raoul Beunen, Marco Kalz, Ad Ragas, Frank Van Belleghem, <i><a href="https://www.sciencedirect.com/science/article/pii/S1877343517300386?via%3Dihub">‘Solutions for global marine litter pollution‘</a></i> (sciencedirect.com, Current opinion in Environmental Sustainability, Vol 28, October 2017) 90-99</li>
                                <li id="fn5" data-lang-id="013f-block-1-list-paragraph6">Slaughter E, Gersberg RM, Watanabe K, et al, Toxicity of cigarette butts, and their chemical components, to marine and freshwater fish, Tobacco Control 2011;20:i25-i29. http://tobaccocontrol.bmj.com/content/20/Suppl_1/i25</li>
                                <li id="fn6" data-lang-id="013g-block-1-list-paragraph7">Carlozo, LR. Cigarettes: 1.7 billion pounds of trash. Chicago Tribune 2008.</li>
                            </ol>
                        </div>
                        </div>
                                </div>
		    </section>
	
            <section id="EASYSTUFF">
                <div class="reg-content-block" id="block2">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="014-block-2-opener-header">Easy Stuff: The Technique<h4>
                            <h5 data-lang-id="015-block-2-opener-subheader">Using cigarette filters to make an ecobrick is easy. </h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(2)" class="block-toggle" id="block-toggle-show2" aria-label="Toggle Section Two">+</button>
                    </div>
                    <div id="preclosed2">
                        <div class="side2">
                            <a href="../svgs/cigbrick-slide-3.svg"><img src="../svgs/cigbrick-slide-3.svg" style="width:65%" alt="Cigbrick Instructions" loading ="lazy"></a>
                        </div>
                        <p data-lang-id="016-block-2-paragraph-1">Just remove the paper covering from the used butt and stuff the filter (plastic acetate) into a plastic bottle.  The paper is biodegradable, which, unlike the acetate, is not a toxic concern and can be thrown away.  Biodegradables, like paper, are not added to ecobricks <sup id="fnref-easy1"><a href="#fn-easy1">1</a></sup>. Then, use a stick to pack down and compress the filters and any other plastic you pack in. Was there a plastic wrapper around your cigarette box? Finished with that plastic lighter? You can pack those in too! Of course, to make a pure cigbrick — use just the filters!</p>
                        <p data-lang-id="017-block-2-paragraph-2">If packed properly, the end result is a remarkably dense and solid building block that can be used for a whole bunch of exciting applications. Best of all, the otherwise toxic acetate is 100% contained and put to good use!</p>
                        <br>
                        <hr>
                        <div class="footnotes">
                            <ol>
                                <li id="fn-easy1" data-lang-id="017b-block-2-list-paragraph2">Adding paper and biodegradables to an ecobrick is not necessary (as unlike plastic, they are not toxic in the environment). In addition, biodegradables in particular can affect the safety and integrity of the ecobrick as a building block. They increase the risk of methane build up in the ecobrick and add a flammability risk over time. Plus, rotting stuff in your ecobrick doesn’t look very nice!</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section id="APPLICATION">
                <div class="reg-content-block" id="block3">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="018-block-3-opener-header">Application</h4>
                            <h5 data-lang-id="019-block-3-opener-subheader">Ecobricks can be used for everything from furniture, to gardens to structures. The same goes for cigbricks.</h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(3)" class="block-toggle" id="block-toggle-show3" aria-label="Toggle Section Three">+</button>
                    </div>
                    <div id="preclosed3">
                        <p data-lang-id="020-block-3-paragraph-1b">Perhaps the best application is the making of modular furniture, entirely from cigbricks!  Mas Hindra is working on the first one. Using cut inner tubes to hold the ecobricks together, the color combination of beige and black makes a profound sitting stool.</p>

                        <p data-lang-id="020-block-3-paragraph-2">For those who would prefer to hide their cigbricks, they make good building blocks for gardens and walls. There are tons of cool things you can build this way. We have a whole section on our web site dedicated to <a href="../earth.php">earth and ecobrick building.</a> The beauty of earth building is that the plastics are essentially buried into the bench or wall. Because plastics do not breakdown without the presence of light or heat, those cigbricks will effectively sequester the plastic acetate for the long term</p>
                        <p data-lang-id="021-block-3-paragraph-2">And… if the bench is broken down, the cigbricks can be taken out and used again for another application. Cigbricks and ecobricks are a fundamentally <a href="spiral.php">spiral</a> buidling material.</p>

                    </div>
                </div>
            </section>
            <section id="RITUAL">
                <div class="reg-content-block" id="block4">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="022-block-4-opener-header">Ritual vs Routine</h4>
                            <h5 data-lang-id="023-block-4-opener-subheader">Most people are not aware of the toxicity of their cigarette butts. Throwing “away” a used filter, is part of their smoking routine and often occurs with little thought or consciousness.  The process of cigbricking transforms the routine into a radical ritual.</h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(4)" class="block-toggle" id="block-toggle-show4" aria-label="Toggle Section Four">+</button>
                    </div>
                    <div id="preclosed4">
                        <div class="side2">
                            <a href="../svgs/mas-tarto.svg"><img src="../svgs/mas-tarto.svg" style="width:65%" alt="Mas Tarto" loading ="lazy"></a>
                            <p data-lang-id="024b-image-paragraph-1">Mas Tarto saves every single cigarette that he smokes and uses it for his cigbrick.</p>
                        <div>
                        <p data-lang-id="024-block-4-paragraph-1">Mas Tarto, is a Global ecobrick trainer from Pemalang, Java, Indonesia. Mas Tarto is also a tobacco lover.  He makes cigbricking a personal daily ritual. Right after putting out his cigarette, he removes the paper, and packs it into the bottle he always carries with him. If the bottle is not with him, he puts the filter into his pocket for later packing. Sometimes, he even grabs other butts from the ashtray! His act is so astounding that it raises eyebrows wherever he goes.  Whether he is at home, at the cafe, or at a restaurant he is asked about it. He then explains himself, his ecological reasons and his concern for the environment.</p>
                        <p data-lang-id="025-block-4-paragraph-2">Mas Hindra, is another GEA ecobrick trainer who lives and works on a boat in the middle of the South China Sea. Although not a smoker himself, many of his 163 shipmates are.  In order to finish off his personal ecobricking projects, he requests and collects the cigarette butts of all the ship — asking them first to remove the paper. His request and project is so astounding that it gets everyone talking.  It leads to all sorts of interesting questions: “Where would the filter go if it had not been ecobricked?”  “What happens to plastic lighters?”  “What is acetate anyway?” He then explains his love and concern for the ocean, and the dangers of discarded filters.</p>
                        <div class="side2">
                            <a href="../svgs/hindra.svg"><img src="../svgs/hindra.svg" style="width:65%" alt="Mas Hindra" loading ="lazy"></a>
                            <p data-lang-id="025b-image-paragraph-1">Hindra, a GEA Trainer from Tanjung Pinang, Kepulauan Riau, Indonesia, shows the first ever cigbrick, properly made and logged on the GoBrik app!</p>
                        <div>
                        <div class="side2">
                            <a href="../svgs/Cigbrick-1.svg"><img src="../svgs/Cigbrick-1.svg" style="width:65%" alt="Shiloh" loading ="lazy"></a>
                            <p data-lang-id="026b-image-paragraph-1">Shiloh uses her cigbrick as a way to keep her filters out of the South African biosphere and to track her smoking habit</p>
                        <div>
                        <p data-lang-id="026-block-4-paragraph-3">Shiloh Vermaak is lives in Durban, South Africa, where plastic is also a problem.  Shiloh is another GEA who also smokes!  As a way to contain and to keep track of her smoking, she also makes cigbricks.  For her it is simply a focused personal and private habit.</p>
                        <p data-lang-id="027-block-4-paragraph-4">“Cigarette butts are a great example of the power of collective action. It’s such a small thing, but if everyone is throwing them a way, we have a massive problem. I just don’t want to part of the problem.”</p>
                        <p data-lang-id="028-block-4-paragraph-5">It is good to remember the history of tobacco.  It wasn’t so long ago, on the great plains of North America, the First Nations revered tobacco as a sacred plant. They smoked it with great respect, and used it in their rituals.  Often these rituals were focused on peace and healing.</p>
                        <p data-lang-id="029-block-4-paragraph-6">We’re inspired by the examples of Tarto, Hindra and Shiloh.  Through their courageous and simple acts, they have brought back a powerful ritual to tobacco smoking — just when we need the healing and peace the most.</p>
                    </div>
                </div>
            </section>
            <section id="ANCESTRAL">
                <div class="reg-content-block" id="block5">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="030-block-5-opener-header">Ancestral Inspiration</h4>
                            <h5 data-lang-id="031-block-5-opener-subheader">For centuries First Nation peoples used tobacco as a way to make offerings and prayers to Spirit.</h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(5)" class="block-toggle" id="block-toggle-show5" aria-label="Toggle Section Five">+</button>
                    </div>
                    <div id="preclosed5">
                        <figure class="feature-image">
                            <img src="../photos/1st-pipe-ceremony-james-roderick.jpg" alt="1st Pipe Ceremony is a painting by James RODERICK" loading="lazy">
                            <figcaption>1st Pipe Ceremony is a painting by James Roderick<a href="https://fineartamerica.com/featured/1st-pipe-ceremony-james-roderick.html">Wikimedia Commons</a>.</figcaption>
                        </figure>
                        <p data-lang-id="032-block-5-paragraph-1">To this day, on the Great Plains of what is now North America, First Nation peoples have used tobacco with great respect and consciousness.  Tobacco was used in ceremonies to promote physical, spiritual, emotional, and community well-being. Elders emphasized the importance of having good attitudes and thoughts when working with tobacco.  Tobacco was smoked as an offering to the Creator or to a person, place or being. Elders taught that the smoke from burned tobacco carried the thoughts and prayers to the spirit world or to the Creator.</p>
                        <p data-lang-id="033-block-5-paragraph-2">Learning from our ancestors, we can reclaim the use of tobacco as a means to catalyse and raise ecological consciousness.  The actions required to make a cigbrick are such that they can infuse the routine of tabacco smoking with conscious ritual.  With this, the transformative power of tobacco can be harnessed for the healing of Earth, Air and Water once again.</p>
                        <p>See:  <a href="https://www.uvic.ca/research/centres/cisur/assets/docs/iminds/war-smoking-pipe-outline.pdf" target="_blank">Smoking the Pipe: Peace or War?</p>
                    </div>
                </div>
            </section>
            <section id="CREDITS">
                <div class="reg-content-block" id="block6">
                    <div class="opener-header">
                        <div class="opener-header-text">
                            <h4 data-lang-id="034-block-6-opener-header">Credits</h4>
                            <h5 data-lang-id="035-block-6-opener-subheader">Thank you to the Igorot people whose ancestral principle of <a href="http://www.russs.net/ayyew">Ayyew</a> (tighter and tighter cycling of resoures) underlies the concept.  Merci to George Beurnier who inspired the renewed refining of the cigbrick concept.</h5>
                            <br>
                        </div>
                        <button onclick="toggleAccordion(6)" class="block-toggle" id="block-toggle-show6" aria-label="Toggle Section Six">+</button>
                    </div>
                    <div id="preclosed6">
                        <ul class="credit-list">
                            <li>Terimah Kasih to <a href="https://www.instagram.com/shirohyde/">Fabianus Bayu</a> for crafting our cartoon ecobrick bottle, the animated happy-albatross-family, and our vision landscape.</li>
                            <li>Thanks to Elena Molchanova whose animated ecobrick intro and credits set the tone in our <a href="https://youtu.be/rGaJYQuOs-0">cigbrick 30 second movie.</a></li>
                            <li>Salemat Po to El Tiburon Grande for help with the original vision landscape in the movie.</li>
                            <li>Maternuan to mas Tarto, Reksi and Aysha for prototyping the first cigbricks.</li>
                            <li>Danku Vel to Shiloh for helping us prototype the paper removal technique.</li>
                            <li>Thank you to Mas Hindra for going full-steam-ahead once we got the technique set up (he’s approaching 100,000 filters packed now!) and for logging the first proper cigbrick on GoBrik.</li>
                            <li>Terimah Kasih to <a href="../hindra">Mas Hindra</a> and Mas Suryadi for their photo and video contributions.</li>
                            <li>Thank you to Irfan Korchak for his editing and discussion of the concept and the redemption of tobacco.</li>
                            <li>Thank you to Ani Himawati for her executive direction in crafting the cigbrick concept.</li>
                        </ul>
                        <p data-lang-id="037-block-6-paragraph-2">Thank you to Nurkinanti Laraskusuma for their translation of the concept and the page to Indonesian.</p>
                    </div>
                </div>
            </section>
            <br>
            <br>
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
