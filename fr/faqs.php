<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='1.89';?>
<?php $page='faqs';?>


<?php require_once ("../includes/faqs2-inc.php");?>


<!--TOP PAGE BANNER-->
<div id="cloud-box">
    <div id="clouds" data-lang-id="001-our-vision-alt"><img src="https://ecobricks.org/webp/faq-top.webp?v1.0" width="300" style="width:100%;" alt="Our vision of a green new world that is possible through plastic transition"></div>
    <div id="cloud-banner" data-lang-id="002-our-vision-alt"><img src="https://ecobricks.org/webp/faq-bottom.webp" width="300" style="width:100%;" alt="Our vision of a green new world that is possible through plastic transition"></div>
</div>

<section id="top">
    <div id="header-content-block">
        <div id="raised-text">
            <h1 data-lang-id="003-frequently-asked-questions">Frequently Asked Questions</h1>
            <p data-lang-id="004-all-your-ecobrick-questions">All your ecobrick questions.  All our answers.</p>
        </div>
    </div>
</section>

<div id="content-sect1">
    <!-- QUESTIONS CONTENT -->
    <div class="main-content-faq">
        <!--GENERAL QUESTION-->
        <div id="general" class="greyish">
            <div class="grey faq-content-block">
                <h4 data-lang-id="005-general-questions">General Questions</h4>
                <p data-lang-id="006-the-basics-about-plastic">The basics about plastic and ecobricks.</p>
                <button onclick="general()" class="toggle" id="toggle-hide">⬆ Hide</button>
                <div id="general-questions">
                    <hr>
                    <ul>
                        <li><a href="#plastic" data-lang-id="007-what-is-plastic">What is plastic exactly?</a></li>
                        <li><a href="#concern" data-lang-id="008-why-concerned-about-plastic">Why should I be concerned about my plastic?</a></li>
                        <li><a href="#worry" data-lang-id="009-more-important-stuff">But isn't there more important stuff to worry about?</a></li>
                        <li><a href="#dangerous" data-lang-id="010-how-plastic-troublesome">How is plastic troublesome and dangerous?</a></li>
                        <li><a href="#what" data-lang-id="011-what-is-ecobrick">So what is an ecobrick exactly?</a></li>
                        <li><a href="#why" data-lang-id="012-why-make-ecobricks">Why make ecobricks?</a></li>
                        <li><a href="#how" data-lang-id="013-how-to-make-ecobrick">How to make an ecobrick?</a></li>
                        <li><a href="#build" data-lang-id="014-what-build-with-ecobricks">What can you build with ecobricks?</a></li>
                        <li><a href="#principles" data-lang-id="015-what-makes-different">What makes ecobricks different from other plastic stuff?</a></li>
                        <li><a href="#dumping" data-lang-id="016-why-not-landfill">Why not just landfill or dump my plastic?</a></li>
                        <li><a href="#burning" data-lang-id="017-why-not-burn">Why not just burn or send my plastic to be incinerated?</a></li>
                        <li><a href="#recycled" data-lang-id="018-why-not-recycle">Why not just recycle my plastic?</a></li>
                        <li><a href="#sequestration" data-lang-id="019-how-ecobricking-different">So how is ecobricking different from recycling, dumping, or burning?</a></li>
                        <li><a href="#keen" data-lang-id="020-keen-to-get-going">I am keen to get going with ecobricking! What's the best way to start?</a></li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
<!--ECOBRICK CONCERNS-->
<div id="concerns" class="greyish">
    <div class="reddish faq-content-block">
        <h4 data-lang-id="021-ecobrick-concerns">Ecobrick Concerns</h4>
        <p data-lang-id="022-the-worries-and-critiques">The worries and critiques.</p>
        <button onclick="concerns()" class="toggle" id="toggle-show">⬇ Show</button>
        <div id="concerns-questions">
            <hr>
            <ul>
                <li><a href="#dangerous-2" data-lang-id="023-how-plastic-dangerous">How does plastic get to be dangerous and toxic?</a></li>
                <li><a href="#matter" data-lang-id="024-ecobricks-final-solution">How can ecobricks be a final solution for plastic? Won't the plastic escape one day no matter what we do?</a></li>
                <li><a href="#transition" data-lang-id="025-ecobricks-encourage-consume">Don't ecobricks just encourage people to consume more plastic?</a></li>
                <li><a href="#sequest1" data-lang-id="026-ecobricks-leach-poisons">I've heard that ecobricks can leach poisons out into the environment. Is it true?</a></li>
                <li><a href="#baddies" data-lang-id="027-when-ecobricks-bad">When and how are ecobricks bad?</a></li>
                <li><a href="#circular1" data-lang-id="028-ecobricks-final-solution-repeat">How can ecobricks be a final solution for plastic? Won't the plastic escape one day no matter what we do?</a></li>
                <li><a href="#fire" data-lang-id="029-ecobricks-and-fire">What about Ecobricks and fire— isn't it dangerous?</a></li>
                <li><a href="#circular3" data-lang-id="030-building-delaying-problem">But isn't building with ecobricks just delaying the problem? How is this a final solution for plastic?</a></li>
            </ul>
            <br>
        </div>
    </div>
</div>

<!--BUILD QUESTIONS-->
<div id="building-q" class="greyish">
    <div class="greenish faq-content-block">
        <h4 data-lang-id="031-building-questions">Building Questions</h4>
        <p data-lang-id="032-about-ecobricks-applications">All about eco<span class="eco-brick"> </span>bricks applications.</p>
        <button onclick="building()" class="toggle" id="toggle-show2">⬇ Show</button>
        <div id="building-questions">
            <hr>
            <ul>
                <li><a href="#few" data-lang-id="033-build-with-few">What can I build with a few ecobricks?</a></li>
                <li><a href="#dozens" data-lang-id="034-build-with-dozen">What can I build with a dozen ecobricks?</a></li>
                <li><a href="#hundreds" data-lang-id="035-build-with-hundreds">What can I build with hundreds of ecobricks?</a></li>
                <li><a href="#thousands" data-lang-id="036-build-with-thousands">What can I build with thousands of ecobricks?</a></li>
                <li><a href="#tens-thousands" data-lang-id="037-build-with-tens-thousands">What can I build with tens of thousands of ecobricks?</a></li>
                <li><a href="#circular" data-lang-id="038-module-comes-end">What happens when a module comes to its end?</a></li>
                <li><a href="#earth" data-lang-id="039-what-is-earth-ecobrick-building">What exactly is Earth and Ecobrick building?</a></li>
                <li><a href="#earth-methods" data-lang-id="040-how-to-build-with-earth">How to build with Ecobricks and Earth?</a></li>
                <li><a href="#fire" data-lang-id="041-ecobricks-and-fire-repeat">What about Ecobricks and fire— isn't it dangerous?</a></li>
                <li><a href="#circular3" data-lang-id="042-building-delaying-problem-repeat">But isn't building with ecobricks just delaying the problem? How is this a final solution for plastic?</a></li>
            </ul>
            <br><br>
        </div>
    </div>
</div>

<!--MOVEMENT Q-->
<div id="movement-q" class="greyish">
    <div class="pinkish faq-content-block">
        <h4 data-lang-id="043-movement-questions">Movement Questions</h4>
        <p data-lang-id="044-about-us-global-transition">About us and the global plastic transition and ecobricks movement.</p>
        <button onclick="movement()" class="toggle" id="toggle-show3">⬇ Show</button>
        <div id="movement-questions">
            <hr>
            <ul>
                <li><a href="#movement" data-lang-id="045-how-to-connect">How to connect with the ecobrick movement?</a></li>
                <li><a href="#about-gea" data-lang-id="046-who-are-you-guys">Who are you guys?</a></li>
                <li><a href="#funds" data-lang-id="047-funding-methods">If you don't receive sponsorship, donations, charity, or grants how do you fund this amazing site, app and global team?</a></li>
                <li><a href="#mandalas" data-lang-id="048-ecobrick-movement-spread">How does the ecobrick movement spread? Are people paid to do this?</a></li>
                <li><a href="#trainer-what" data-lang-id="049-gea-certified-trainer">What is a "GEA certified Trainer"?</a></li>
                <li><a href="#trainings" data-lang-id="050-become-certified-trainer">How can I become a certified ecobrick trainer?</a></li>
                <li><a href="#catalyst" data-lang-id="051-companies-support">How can companies support ecobricking and plastic transition?</a></li>
            </ul>
            <br><br>
        </div>
    </div>  
</div>

<!--GOBRIK-->
<div id="gobrik-q" class="greyish">
    <div class="blueish faq-content-block">
        <h4 data-lang-id="052-gobrik-questions">GoBrik Questions</h4>
        <p data-lang-id="053-about-gobrik-app">All about our web-based ecobrick app.</p>
        <button onclick="gobrik()" class="toggle" id="toggle-show4">⬇ Show</button>
        <div id="gobrik-questions">
            <hr>
            <ul>
                <li><a href="#gobrik" data-lang-id="054-what-is-gobrik">What is GoBrik?</a></li>
                <li><a href="#brikcoins" data-lang-id="055-what-are-brikcoins">What are Brikcoins?</a></li>
                <li><a href="#start" data-lang-id="056-sign-up-account">How to sign up for an account on GoBrik?</a></li>
                <li><a href="#why-log" data-lang-id="057-why-log-ecobricks">Why log ecobricks? (answer pending)</a></li>
            </ul>
            <br><br>
        </div>
    </div>
</div>

<!--MORE QUESTIONS-->
<div id="misc" class="greyish">
    <div class="orangeish faq-content-block">
        <h4 data-lang-id="058-more-questions">More Questions</h4>
        <p data-lang-id="059-other-unanswered-questions">All those other questions we haven't answered yet!</p>
        <button onclick="more()" class="toggle" id="toggle-show5">⬇ Show</button>
        <div id="more-questions">
            <hr>
            <ul>
                <li><a href="#ocean" data-lang-id="060-plastic-from-beach">What about plastic I pick up from the beach— can it be ecobricked?</a></li>
                <li><a href="#cigbrick" data-lang-id="061-cigarette-filters">What about cigarette filters— can they be ecobricked?</a></li>
                <li><a href="#dropoff" data-lang-id="062-drop-off-ecobricks">How can I drop off my completed ecobricks?</a></li>
                <li><a href="#hubs" data-lang-id="063-get-ecobricks-for-project">How can I get ecobricks for my project?</a></li>
                <li><a href="#media" data-lang-id="064-media-story-common-misconceptions">I am with the media. How do I do a story on ecobricks that avoids the common misconceptions?</a></li>
                <li><a href="#eco-bricks" data-lang-id="065-spelling-ecobricks">How do you spell it? Eco bricks? Eco-bricks? Ecobricks?</a></li>
                <li><a href="#arcio" data-lang-id="066-green-circle-arcio">What's that green circle on the bottom of your webpage? What is Arc.io doing?</a></li>
            </ul>
            <br><br>
        </div>  
    </div>
</div>

<!-- +++++++++++++++++++++++
	
GENERAL ANSWERS

+++++++++++++++++++++++++++  -->


<div id="main-content-faq">
<div class="content-block">  
    <div class="greyish"> <div class="grey faq-banner"><h3 data-lang-id="067-general-questions">General Questions</h3></div></div>

    <div class="faq" id="plastic">
        <div class="faq-box">
            <div class="faq-texts">
                <div class="faq-header"><h4 data-lang-id="068-what-is-plastic-exactly">What is plastic exactly?</h4></div>
                <p data-lang-id="069-plastic-description">Plastic. That convenient, colorful and ever so troublesome material that we all use every day is very easy to take for granted. Fact is, it's incredibly unique and valuable— you literally can't find anything like it in elsewhere in our solar system! Plastic is a petroleum by-product. That means it is made from the carbon of ancient organisms— algae, forest, dinosaurs that lived and died hundreds of millions of years ago. As their bodies were buried, the Earth compacted and secured their carbon underground. Over time, this process of carbon sequestration removed more and more carbon from the atmosphere and greened the biosphere. Today, we dig up these deposits as 'fossil fuels'. But, this ancient carbon was never meant to be fuel! Refining fossil fuels leads to lots of leftover chemicals— which are perfect for making plastic and dangerous when let loose into the environment.</p>
                <div class="faq-link" data-lang-id="070-learn-more-the-long-story-of-plastic"><h5 >Learn more: <a href="/plastic">The Long Story of Plastic</a></h5></div>
                <div class="top-link" data-lang-id="071-back-to-general-questions">Back to <a href="#general" >General Questions</a></div>
            </div>
            <div class="faq-image" data-lang-id="072-faq-image-compacted-carbon"><img src="../webp/compacted-carbon.webp" alt="compacted plastic eco brick sequestration" loading="lazy"></div>
        </div>      
    </div>
 
    
<div class="faq" id="concern">
    <div class="faq-box">
        <div class="faq-texts">
            <div class="faq-header"><h4 data-lang-id="073-why-concern-about-plastic">Why should I be concerned about my plastic?</h4></div>
            <p data-lang-id="074-plastic-concern-description">Your plastic represents an incredible opportunity! With your everyday plastic you can make tiny ripples that over time will turn into giant waves of ecological enrichment. Plastic is the tip of the iceberg of a massive system powered by the extraction and burning of ancient carbon deposits. As this carbon gets loose in the atmosphere and oceans, it adversely affects the biosphere. While no one wants to see a rich ecosystem deplete or an animal suffer, unfortunately, there is a direct correlation between the plastic that we consume today and these consequences tomorrow. Small adjustments in our relationship with plastic can thus point us out of the petro-capital system. Small choices today can reduce the system's momentum into the future and compounds into great greening consequences: the acceleration of a whole different kind of system with a lot less plastic and a lot richer ecosystems.</p>
            <div class="faq-link" data-lang-id="075-learn-more-long-story-plastic"><h5>Learn more: <a href="/plastic">The Long Story of Plastic</a></h5></div>
            <div class="top-link" data-lang-id="076-back-to-general-questions">Back to <a href="#general">General Questions</a></div>
        </div>
        <div class="faq-image" data-lang-id="077-faq-image-plastic-origins"><img src="../webp/plastic-origins.webp" alt="eco bricks and the origins of plastic" loading="lazy"></div>
    </div>
</div>


<div class="faq" id="worry">
    <div class="faq-box">
        <div class="faq-texts">
            <div class="faq-header"><h4 data-lang-id="078-bigger-issues-worry">But aren't there bigger issues to worry about?</h4></div>
            <p data-lang-id="079-worry-description">Climate change. Ocean acidification. Species extinction. These are big issues! And they all have one thing in common: <i>The way we humans relate to the Earth.</i> From brash billionaires to poisonous pollution... indeed, the way we currently relate, makes it easy to worry! However, there's no more powerful way to manifest change than by living it first ourselves. As a product of both the Earth and the petro-capital economy, plastic is the ultimate representation of the old Way we've been relating to the Earth. By changing the way we see plastic and what we do with it, we can shift our attitude from worry and despair to love and care. By loving and caring for our plastic, we can begin to heal the roots of our relationship with it and the Earth: The very same roots that all the other big issues happen to share.</p>
            <div class="faq-link" data-lang-id="080-learn-more-story-plastic"><h5>Learn more: <a href="/plastic">The Long Story of Plastic</a></h5></div>
            <div class="top-link" data-lang-id="081-back-to-general-questions">Back to <a href="#general">General Questions</a></div>
        </div>
        <div class="faq-image" data-lang-id="082-faq-image-petro-capital"><img src="../webp/petro-capital-age.webp" alt="petro capital transition" loading="lazy"></div>
    </div>
</div>

<div class="faq" id="dangerous">
    <div class="faq-box">
        <div class="faq-texts">
            <div class="faq-header"><h4 data-lang-id="083-dangerous-plastic">How is plastic troublesome and dangerous?</h4></div>
            <p data-lang-id="084-dangerous-description">Plastic is an incredibly useful and versatile material. However, in the wrong place plastic can become poisonous to humans, animals and ecosystems. When plastics get loose in the biosphere, they degrade through friction, heat and sun into chemicals and into particles. These are chemicals don't fit into ecological systems, so they contaminate ecosystems and poison organisms. Plastic's degradation also leads to smaller and smaller particles of plastic. When organisms consume these 'micro-plastics' their digestion gets clogged up and they get sick. Many die. Eventually both chemical toxins and physical micro-plastics pass through the food chain to humans. In our bodies they upset our hormonal balances, cause growth problems, and trigger cancer and health issues of all kinds.</p>
            <div class="faq-link" data-lang-id="085-learn-more-dangers-plastic"><h5>Learn more: <a href="/poison">The Dangers of Plastic</a></h5></div>
            <div class="top-link" data-lang-id="086-back-to-general-questions">Back to <a href="#general">General Questions</a></div>
        </div>
        <div class="faq-image" data-lang-id="087-faq-image-fire-safety"><img src="../pngs/fire.png" alt="eco bricks and fire safety. Make sure ecobricks are used safely" loading="lazy"></div>
    </div>
</div>

<div class="faq" id="what">
    <div class="faq-box">
        <div class="faq-texts">
            <div class="faq-header"><h4 data-lang-id="088-what-is-ecobrick">What is an ecobrick?</h4></div>
            <p data-lang-id="089-ecobrick-description">Ecobricks are a way to take advantage of plastic's pros while protecting against its cons. Basically, an ecobrick is a plastic bottle packed with used plastic to a set density. In so doing we take advantage of plastic's durability, longevity, color and availability to make reusable building blocks. Making an eco<span class="eco-brick"> </span>bricks is a low-tech, manual, zero-carbon method take responsibility for one's plastic. Ecobricks follow the Earth's example of compacting and securing carbon indefinitely in order to secure plastic from the dangers of degradation. The goal of ecobricking is <i>sequestration</i> and <i>transition</i>: the removal of plastic from the biosphere <i>and</i> from carbon-intense petro-capital economy. Ecobricks are then used for local short and long-term applications that embody and accelerate regenerative principles. Like green spaces and gardens!</p>
            <div class="faq-link" data-lang-id="090-learn-more-ecobrick-basics"><h5>Learn more: <a href="what.php">Ecobrick Basics</a></h5></div>
            <div class="top-link" data-lang-id="091-back-to-general-questions">Back to <a href="#general">General Questions</a></div>
        </div>
        <div class="faq-image" data-lang-id="092-faq-image-what-ecobrick"><img src="../webp/faqs-400px.webp" alt="What is an eco brick?" loading="lazy"></div>
    </div>
</div>

<div class="faq" id="why">
    <div class="faq-box">
        <div class="faq-texts">
            <div class="faq-header"><h4 data-lang-id="093-why-make-ecobricks">Why make ecobricks?</h4></div>
            <p data-lang-id="094-why-make-ecobricks-description">Plastic is part of our petro-capital age. No matter your culture or continent, you're going to be consuming some plastic! Unlike other plastic management methods, ecobricking allows us to be 100% sure our plastic doesn't get into the biosphere or cause more factories to spin. Because ecobricking is hard work, it motivates us to consume less. If you've made an ecobrick, you know that having to pack one's consumption piece by piece, gets one thinking about the whole system behind our plastic! And since we're not putting it back in the system, we can be confident lots more carbon and plastic aren't produced. Finally, since building with ecobricks is a hands-on, collaboration powered process, it brings us together with friends and family to make great green spaces that serve our communities. As far as we know, there's nothing better one can do with the plastic that we've got now— and the fastest way to speed up our transition from it.</p>
            <div class="faq-link" data-lang-id="095-learn-more-why-make-ecobricks"><h5>Learn more: <a href="/why">Why Make Ecobricks?</a></h5></div>
            <div class="top-link" data-lang-id="096-back-to-general-questions">Back to <a href="#general">General Questions</a></div>
        </div>
        <div class="faq-image" data-lang-id="097-faq-image-question"><img src="../svgs/question.svg" alt="Why make an eco brick?"></div>
    </div>
</div>

<div class="faq" id="how">
    <div class="faq-box">
        <div class="faq-texts">
            <div class="faq-header"><h4 data-lang-id="098-how-to-make-ecobrick">How to make an Ecobrick?</h4></div>
            <p data-lang-id="099-how-to-make-ecobrick-description">Deep breath... First, save up and segregate your plastic, keeping them separate from the organics. If your plastics are dirty, clean and dry them. For your first ecobrick, start with a small, clear PET bottle that is common in your community. Make sure you've got a solid stick (dowel, drumstick, branch, <a href="/earthwand">earthwand</a> etc.). Start by inserting a soft, colored plastic down to the bottom of the bottle. Stuff it down with other plastics of the same color until you have a 2-3cm base. Cut up other kinds of plastics and insert them loosely into the bottle until it is almost full. Use your stick to pack the plastics down by pushing around on the sides. Fill, pack, repeat and repeat! Leave 1-2cm of space at the top of the bottle. Cap. Then, weigh your ecobrick. Make sure your ecobrick's density is over the GEA's recommended minimum 0.33g/ml (divide weight by the bottle's volume to get the density). Good ecobricks are above 0.4g/ml. Log your ecobrick (keep a list, spreadsheet or use our handy <a href="https://gobrik.com" target="_blank">GoBrik.com app</a>). Store securely. Then, when you've got enough, put them together in a project... and exhale!</p>
            <div class="faq-link" data-lang-id="100-learn-more-dense-answer"><h5>Answer's a little too dense? Better: <a href="how">Our Comprehensive 10 Step Ecobricking Guide</a></h5></div>
            <div class="top-link" data-lang-id="101-back-to-general-questions">Back to <a href="#general">General Questions</a></div>
        </div>
        <div class="faq-image" data-lang-id="102-faq-image-how-to-make"><img src="../webp/eb-sky-400px.webp" alt="How to make an eco brick?"></div>
    </div>
</div>

<div class="faq" id="build">
    <div class="faq-box">
        <div class="faq-texts">
            <div class="faq-header"><h4 data-lang-id="103-what-build-with-ecobricks">What can you build with ecobricks?</h4></div>
            <p data-lang-id="104-what-build-description">So many things! Ecobricks can be connected with tire bands, silicone, and cob to build furniture, gardens, green spaces, and more. Ecobricks are being used in different ways around the world. Some households make a few modules for sitting stools while some cafes deploy hundreds to make their interactive co-working spaces. The ultimate way to build with ecobricks though is with earth. Ecobrick and earth building is ideal for making parks, gardens, and green spaces of all kinds for your community. Some folks build simple circle benches and plant a tree inside, while others build shelters and structures. Only your imagination is the limit!</p>
            <div class="faq-link" data-lang-id="105-learn-more-general-applications"><h5>Learn more: <a href="build.php">General Ecobrick Applications</a></h5></div>
            <div class="top-link" data-lang-id="106-back-to-general-questions">Back to <a href="#general">General Questions</a></div>
        </div>
        <div class="faq-image" data-lang-id="107-faq-image-build"><img src="../webp/build-blue-450px.webp" alt="Eco bricks can build all sorts of stuff"></div>
    </div>
</div>


<div class="faq" id="principles">
	<div class="faq-box">
		<div class="faq-texts">
			<div class="faq-header"><h4 data-lang-id="108-principles-header">What makes ecobricks and ecobrick applications different from other plastic products?</h4></div>
			
			<p data-lang-id="109-principles-content">The methods of making ecobricks and building with them are guided by regeneartive principles.  Regenerative principles are fundamentally different from the principles of "sustainability"  This means that from the ground up ecobricks making and applications are fundamentally different from our old uses of plastic.  Ecobrick applications are net-zero, localized, mandalic, transcaste, earthen, circular and open source.  Yep... that's a lot of new words and concepts!  But that's actually the point— ecobricking is all about applying a whole new paradigm to our plastic so that we avoid sustaining the same problems and polluting results that came from the old way of doing things.</p>

			<div class="faq-link"><h5 data-lang-id="110-learn-more-principles">Learn more: <a href="principles.php">Ecobrick Regenerative Principles</a></h5>
				<div class="top-link">Back to <a href="#general">General Questions</a></div>
			</div>                    
		</div>
		<div class="faq-image"><img src="../webp/balancing-green.webp" width="350" style="width:80%;" alt="Eco bricks are different from other plastic stuff in several ways." loading="lazy"></div>
	</div>
	
</div>

<div class="faq" id="dumping">
	<div class="faq-box">
		<div class="faq-texts">
			<div class="faq-header"><h4 data-lang-id="111-dumping-header">Why not just landfill or dump my plastic?</h4></div>
			
			<p data-lang-id="112-dumping-content">When plastic is dumped or landfilled it's surface area ends up fully exposed to the sun, to friction, fire and/or water.  The more plastic is exposed, the more plastic degrades— releasing CO2, other green house gases, and toxins.  Eventually plastic breaks down into smaller and smaller pieces called micro-plastics.  Increasingly, scientists are realizing that these toxins and micro-plastic infiltrate ecosystems causing problems for plants and animals.  Eventually, plastic's molecules reach us and our children where they adversely impact human metabolisms. Because of this, its important to not let our plastic get loose into the biosphere by littering or dumping it.</p>

			<div class="faq-link"><h5 data-lang-id="113-learn-more-dumping">Learn more: <a href="/posion">Plastic can be Poisonous</a></h5>
				<div class="top-link">Back to <a href="#general">General Questions</a></div>
			</div>                    
		</div>
		<div class="faq-image"><img src="../pngs/save-the-plastics.png" alt="Eco bricks prevent plastic from going into a landfill."></div>
	</div>
	
</div>

<div class="faq" id="burning">
	<div class="faq-box">
		<div class="faq-texts">
			<div class="faq-header"><h4 data-lang-id="114-burning-header">Why not just burn or send my plastic to be incinerated?</h4></div>
			
			<p data-lang-id="115-burning-content1">Whether plastic is burned on the side of the road or in a high-tech waste-to-energy plant, it is a momentous tragedy.  The carbon that composes our modern plastic is the result of hundreds of millions of years of work by the Earth to remove carbon from the atmosphere.  Through the Earth's gradual subtraction of this carbon underground, the Earth's climate stabilized and the biosphere greened.  When plastic is burned, in an instant, millions of years of Earthen process are reversed.  Plastic's carbon is dispersed and released back into the atmosphere, while poisonous and toxic chemicals are often created through the combustion.</p>
			<p data-lang-id="116-burning-content2">Worse, incinerating plastic also encourages more new plastic to be made, more ancient carbon to be extraction, and yet more incineration.  Because it seems so easy to dispose of plastic by burning it, it makes it seem like there's no problem using plastic in the first place.  Because of this, it is essential to keep our plastic from entering this dangerous spiral.</p>

			<div class="faq-link"><h5 data-lang-id="117-learn-more-burning">Learn more: <a href="/posion">Plastic can be Poisonous</a></h5></div>   
			<div class="top-link"><a href="#general">Back to General Questions</a></div>                 
		</div>
		<div class="faq-image"><img src="../webp/incineration.webp" alt="Eco bricks prevent plastic from being incinerated."></div>
	</div>

</div>



	<div class="faq" id="recycled">
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>Why not just recycle my plastic?</h4></div>
				
				<p>Recyling plastic is a great idea— in theory!  Unfortunately, when recycling is done <i>for-profit</i> rather than <i>for-Earth</i>, it does not acheive the green effects we hope for.  In fact, the very opposite.  Industrial recycling tends to downcycle plastic into lower and lower grades that have less and less likelyhood of being recycled.  Eventually the utility value of the old plastic is exhausted and no more profit can be made.  This plastic then ends up <a href="#dump">dumping</a> or <a href="#burning">burned</a>— causing the ecological issues mentioned in the answers above.  Its also important to remember that industrial recycle is hardly ever local.  Plastic must be transported, melted, molded, repackage and transported again— often between stores and far-away factories.  This requires fuel, energy and releases further carbon into the biosphere.</p>
				<p>Most significantly, recycling plastic leads to more and more products made from plastic.  Precisely because recycling seems to be a solution, it encourages us to keep consuming things made from plastic.  And those new products made with old plastic?  They not only requires lots of energy, but most often new plastic to be mixed in.  In short, putting plastics into industrial recycling encourages more industry, more plastic and more pollution.</p>

				<div class="faq-link"><h5>Learn more: <a href="/recycled">Industrial Plastic Recycling</a></h5></div>                    
				<div class="top-link">Back to <a href="#general">General Questions</a></div>
			</div>
			<div class="faq-image"><img src="../svgs/vsrecycling.svg" alt="Eco bricks are an alternative to recycling."></div>
		</div>
		
	</div>

	<div class="faq" id="sequestration">
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>So how is ecobricking different from recycling, dumping or burning?</h4>
			</div>
				
				<p>Ecobricking is a form of <a href="https://en.wikipedia.org/wiki/Plastic_sequestration" target="_blank">plastic sequestration</a>.  That means there's six principled reasons that set ecobricking apart.  Rather than being for-profit ecobricking is for-Earth.  Rather than letting plastic and carbon loose, ecobricking is all about their compaction and concentration.  Rather than cycling plastic only a few times, ecobriking creates indefinitely reusable building blocks. Rather than rely on marketing that lowers ecoogical awareness, ecobricking is a hands-on learning experience that raises it.  Rather than result in more products and factories that harm plants and animals, ecobricking leads to green spaces that give them a home.  Rather than un-attentive disposal, ecobricking is all about measuring, tracking and disclosing our plastics.  To sum it up... ecobricking is all about following the Earth's example of carbon care to make sure that we're transitioning from plastic to greener ways of living.</p>

				<div class="faq-link">
					<h5>Learn more: <a href="sequest.php">The Principles of Plastic Sequestration</a></h5>
				</div>                    
			</div>
			<div class="faq-image">
				<img src="../webp/dial-example.webp" alt="Eco bricks are beyond zero waste">
			</div>
		</div>
		<div class="top-link">
			<a href="#general">Back to General Questions</a>
		</div>
	</div>
			
	<div class="faq" id="keen">
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>I am keen to get going with ecobricking!  What's the best way to start?</h4></div>

				<p>Start by writing down today's date.  Then, save your plastic for the next month!  Every single piece that comes into your household, be sure that it doesn't leave— but instead gets cleaned, dried and placed in a special bin.  After 30 days, weigh all the plastic that your household has consumed, transfer it to another bin and... begin ecobricking (see the how to ecobrick).  If you don't finish all the plastic in one sitting that's ok.  Keep putting the plastic you consume in bin #1 and every month transfer your ecobrickable plastic into bin #2.  This way you're not only efficiently ecobricking, you're tracking your consumption, plastic reduction and plastic transition.  A year from now, keep track of a month of your plastic consumption.  Note the difference!</p>

				<div class="faq-link"><h5>Learn more: <a href="how.php">How to Make an Ecobrick</a></h5></div>                    
				<div class="top-link">Back to <a href="#general">General Questions</a></div>
			</div>
			<div class="faq-image"><img src="../webp/weigh-plastic.webp" style="width: 50% !important;"  alt="Eco bricks are an alternative to recycling. Start by plastic tracking."></div>
		</div>
	</div>

</div>




<div class="content-block">    <!--ECOBRICK CONCERNS-->
	
	<div id="block-border" class="greyish">
		<div  class="reddish faq-banner" ><h3>Ecobrick Concerns</h3></div>
	</div>


		           
		<div class="faq" id="dangerous-2">
				<div class="faq-box">
					   <div class="faq-texts">
						   <div class="faq-header"><h4>How does plastic get to be dangerous and toxic?</h4></div>
						   <p>Plastic is an incredibly useful and versatile material.  But in the wrong place it can become dangerous— poisonous to us, animals and ecosystems.  When it gets loose in the biosphere plastic degrades from the effects of friction, heat and sun.  As it degrades, dangerous chemicals are released.  These toxins don't fit into ecological systems and chemically contaminate.  Plastic's degradation also leads to smaller and smaller pieces of plastic.  Organisms and animals that consume these 'micro-plastics' clog up their digestion and get sick.  Many die.  Eventually both chemical toxins and physical micro-plastics pass through the food chain to humans.  In our bodies they upset our hormonal balances, cause growth problems, and trigger cancer and other health issues. </p>
							<div class="faq-link"><h5>Learn more: <a href="/poison">The Dangers of Plastic</a></h5></div>
							<div class="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div> 
					   </div>
					   <div class="faq-image"><img src="../pngs/fire.png" alt="Eco bricks keep plastic safe"></div>
				</div>
				
		</div>


		<div class="faq" id="matter">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can ecobricks be a final solution for plastic?  Won't the plastic escape one day no matter what we do?</h4></div>
					
					<p>"Final solutions" aren't the way Earth and its ecosystems work.  Rather than lines that start and end, ecosystems instead work in spiralling cycles— using carbon molecules as building blocks that are used over and over again in a journey towards sequestration. By ecobricking our plastic (which is mainly carbon!) we're taking it out of linear industrial systems and the "final solution" paradigm.</p>
					<p>In contrast, ecobricks are designed to be building blocks tha can be used over and over again.  Just like in an ecosystem, ecobricks are used locally and with no extra energy needed.  This way our ecobricks can spiral through time and become gifts for future generations.</p>
					
					<p>In the same way Earth gifted us densely packed carbon (i.e. fossil fuels), we can gift our compacted carbon to another age.  Like the dinausaurs, we can't imagine how the carbon of our age will be used in the future. However, we can be certain that it makes a better gift compacted and concentrated rather than scattered and dispersed, loose and leaching. </p>

					<div class="faq-link"><h5>Learn more: <a href="spiral.php">Spiral Design</a></h5></div>  
					<div class="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div>                  
				</div>
				
				<div class="faq-image"><img src="../webp/ayyew.webp" alt="Eco bricks apply ayyew principles"></div>
			</div>
			
		</div>


		<div class="faq" id="transition">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>Don't ecobricks just encourage people to consume more plastic?</h4></div>
					
					<p>This is a question we get a lot from people who have yet to make an ecobrick.  Once you commit to taking full responsibility for your plastic and start packing every piece, you get very choosy about the plastic you buy!  Let's be honest, ecobricking isn't fun— nor is washing and drying your plastics every day to prep them for ecobricking!  In a 2021 cross-sectional survey of ecobrickers, we found that on average their monthly plastic consumption had decreased to 61% of their per capita average.  Rather than give an excuse to continue consuming plastic, ecobricking helps to increase plastic awareness and accelerate plastic transition.</p>

					<div class="faq-link"><h5>Learn more: <a href="transition.php">Plastic Transition</a></h5></div>     
					<div class="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div>                  
				</div>
				<!--<div class="faq-image"></div>-->
			</div>
			
		</div>

		<div class="faq" id="sequest1">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>I've heard that ecobricks can leach poisons out into the environment.  Is it true?</h4></div>
					
					<p>Yes!  If you were to set an ecobrick on fire, leave it in the sun, or boil it in a bucket of water, it certainly would leach poisons.  Just like pretty much anything made from plastic!  In fact, anything used the wrong way can be dangerous.  This is he point of ecobricking: to secure plastic and keep it safe.  Ecobricking is done based on the knowledge that plastic is susceptible to degradation and leaching to the extent that its surface area is exposed to the elements.  When we pack plastic densely into a bottle we reduce the net-surface area a thousand-fold.  Then, when we put ecobricks to use in applications that cover and protect the plastic, the danger of leaching is near nil!  Oh... and don't forget, by not recycling plastic we avoid all the carbon that would be released industrially!</p>

					<div class="faq-link"><h5>Learn more: <a href="sequest.php">Plastic Sequestration</a></h5></div>                    
					<div class="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div>   

				</div>
					<!--<div class="faq-image"></div>-->
			</div>
			
		</div>

		<div class="faq" id="baddies">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>When and how are ecobricks bad?</h4></div>
					
					<p>Ecobricks are bad when they aren't made and used properly.  If you were to set an ecobrick on fire, leave it in the sun, or boil it in a bucket of water, it certainly would leach poisons.  Just like pretty much anything made from plastic!  Anything used the wrong way can be dangerous after all.  However, the whole point of ecobricking is the safe securing of plastic.  Plastic is susceptible to degradation and leaching to the extent that its surface area is exposed to the elements.  When we pack plastic densely into a bottle we reduce the net-surface area a thousand-fold.  Then, when we put ecobricks to use in applications that cover and protect the plastic, the danger of leaching is near nil!  And don't forget, by not recycling plastic we avoid all the carbon that would be released industrially!</p>

					<div class="faq-link"><h5>Learn more: <a href="transition.php">Plastic Sequestration</a></h5></div>                    
					<div class="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div>   

				</div>
					<!--<div class="faq-image"></div>-->
			</div>
			
		</div>
	
	</div> <!-- STRAY-->
	

<div class="content-block">
	<div id="building-questions-full" class="greyish">
		 <div class="greenish faq-banner"><h3>Building Questions</h3></div>
	</div>
		

		<div class="faq" id="few">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with a few ecobricks?</h4></div>
					
					<p>A module!  Ecobrick modules are a simple, practical application of ecobricks.  All you need are a dozen to start and you can build a simple stool that can later be combined with other modules to make tables and chairs.  Milstein modules are the simplest type of module and allow you to build two layers vertically and expand horizontally to make couches, beds and even stages.</p>

					<div class="faq-link"><h5>Learn more: <a href="modules.php">Ecobrick Modules</a></h5></div> 
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="../webp/milstein.webp" alt="Eco bricks can make sitting stools"></div>
				</div>

		</div>

		<div class="faq" id="dozens">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with dozens of ecobricks?</h4></div>
					
					<p>Milstein modules!  The cool thing about modules is that they can inter-lock and combine indefinitely.  The hexagonal modules we call "Milsteins".  They are great for making a set of stools.  You can stack them and make a table too.  Milstein modules are super practical, easy to store and re-deploy for parties, gatherings and guests.  </p>

					<div class="faq-link"><h5>Learn more: <a href="/milstein"> Ecobrick Milstein Modules</a></h5></div>     
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>         
				</div>
				<div class="faq-image"><img src="../webp/module-table.webp" alt="Eco bricks can make modules."></div>
			</div>
			
		</div>

		<div class="faq" id="hundreds">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with hundreds of ecobricks?</h4></div>
					
					<p>Dieleman Lego! There is a special type of module, that works just like toy lego.  We call them "Dielemans". Dieleman modules are a geometric configuration of 16 ecobricks that enables vertical and horizontal inter-connection. In other words, they can be stacked horizontally and vertically indefinitely. Applications include indoor playgrounds, temporary stalls, sheds, and circular structures.</p>

					<div class="faq-link"><h5>Learn more: <a href="/dms">Dieleman Lego Modules</a></h5></div>    
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>             
				</div>
				<div class="faq-image"><img src="../pngs/MD-inter-lock-graphic.png" alt="Eco bricks can make dieleman lego."></div>
			</div>
		</div>

		<div class="faq" id="thousands">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with thousands of ecobricks?</h4></div>
					
					<p>Ecobrick open spaces!  By combining dozens, or hundreds of milstein and dieleman modules you've got a ecobrick lego that can be deployed at any time to make a customized social space.  Ideal for sitting, talking, meeting and playing open spaces, they can be deployed for festivals, showcases, markets, fairs, etc.  The modularity enables participants to playfully arrange a space that best suits the needs of the moment.</p>

					<div class="faq-link"><h5>Learn more: <a href="/openspace">More about Ecobrick Open Spaces</a></h5></div>        
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>               
				</div>
				<div class="faq-image"><img src="../webp/openspace.webp" alt="Eco bricks can make open spaces"></div>
			</div>
			
		</div>

		<div class="faq" id="tens-thousands">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with tens of thousands of ecobricks?</h4></div>
					
					<p>A green space!  By combining ecobricks with tradional earth building techniques you can build parks, play areas, garden and food forests for your home or community.  Ecobricks are laid horizontally in earthen mortar (i.e. cob, adobe, etc.) to build up benches, garden beds, walls and even structures.  Of course, technically you only need dozens of ecobricks to start earth building— but when you've got thousands, that is when the real fun begin!</p>

					<div class="faq-link"><h5>Learn more: <a href="earth.php">More about Earth & Ecobrick Building</a></h5></div>                    
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>   
				</div>
				<div class="faq-image"><img src="../webp/tens-thousands.webp" alt="Using tens of thousands of eco bricks to make green spaces"></div>
			</div>
		</div>

		<div class="faq" id="circular">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What happens when an ecobrick application comes to it's end?</h4></div>
					
					<p>Good question!  It's important to think about the next life of things we make— what will happen to them when they come to their end.  We provide guidelines to make sure all ecobrick applications— from modules to earth build— have their next life built in.  By making modules with silicione or tire-bands, ecobricks can be removed from the module without damaging them.  Basically, we're leveraging the long lasting properties of plastic to make our design circular.  That means the module can be disbanded, rebuilt, repaired... or the ecobricks can be taken and used for an earth build.
					</p>

					<div class="faq-link"><h5>Learn more: <a href="spiral.php">Ecobrick Spiral Design</a></h5></div>                    
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>
				</div>
				<div class="faq-image"><img src="../svgs/circular-applications.svg" width="400" alt="Spiral & Circular eco brick design applies to a module" ></div>
			</div>
			
		</div>

		<div class="faq" id="earth">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What exactly is Earth and Ecobrick building?</h4></div>
					
					<p>Building with earth is an ancient human tradition found around the world in nations ancient and ongoing.  By combining it with ecobricks, anyone can build simple non-structural constructions.  In particular, earth and ecobrick building is ideal for making planters, benches and garden beds— parks, food-forests, and in general green spaces that can serve our community and be a home for plants and other species.  Using local earth to make cob mortar, our ecobricks are covered up and secured from all forms of degradation.</p>

					<div class="faq-link"><h5>Learn more: <a href="earth.php">Earth & Ecobrick Buidling</a></h5></div>     
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="../webp/earth-tree-400px.webp" alt="A circular eco brick bench"></div>
			</div>
			
		</div>

		<div class="faq" id="earth-methods">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How to build with Ecobricks and Earth?</h4></div>
					
					<p>Building with earth and ecobricks is... pretty awesome!  First you start by learning about the ancient earth traditions in your area.  Then you get your ecobricks, friends and community together.  Using nothing but local materials you then get down and dirty digging a foundation, laying it down and building on up.  Layer by layer you add ecobricks, cob, ecobricks, cob.  As you go you curve and sculpt your bench, planter or wall.  When it's up and it's dry then you choose the appropriate outer skin and render it on.<br>That's obviously too short a summary! If you're serious, you'll want to check out our step by step directions and suggested techniques.</p>

					<div class="faq-link"><h5>Learn more: <a href="/earth-methods">Earth & Ecobrick Methods</a></h5></div>                    
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>
				</div>
				<div class="faq-image"><img src="../webp/earth-build.webp" alt="Earth and Eco brick buiding"></div>
			</div>
		</div>
	

		<div class="faq" id="fire">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>Are ecobricks a fire hazard since they are made with flammable plastic?</h4></div>
					
					<p>Yes. Plastic, just like pretty much everything else, can be flammable.  Whether you're building with wood, bamboo or ecobrikcks it's all about doing so to minimize fire harzards.  Ecobrick fire safety, starts by making ecobricks properly.  When ecobricks are made according to GEA density standards, flammability is critically reduced.  Furthermore, by building with ecobricks properly, their flamability is yet further reduced.  In fact, ecobrick and earth building for outdoor green spaces (our recommended ecobrick application) reduces flammability to virtually nil by completely encasing ecobricks in cob.  In fact, other than test earth and ecobrick walls that have been deliberately set on fire (and it wasn't easy), we know of no ecobrick green spaces that have ever caught fire. </p>

					<div class="faq-link"><h5>Learn more: <a href="/fire">Ecobricks & Fire Security</a></h5></div>  
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="../webp/fire.webp" alt="Eco brick fire safety"></div>
			</div>
		</div>


		<div class="faq" id="circular3">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>But isn't building with ecobricks just delaying the problem? How is this a final solution to plastic?</h4></div>
					
					<p>For hundreds of millions of years the molecules that make up our plastic weren't problematic.  In fact, by having secured carbon under ground, the Earth greened it's surface.  In the Earth's ecosystems "Final solutions" aren't the way things work. Thinking in lines is the way our petro-capital system tries to work when we buy, use, and throw-away. Ecosystems instead work in circles, cycling molecules over and over with less and less energy. By ecobricking our carbon/plastic we're getting out of 'final' thinking and back to following the example of the Earth. Ecobricks are designed to both secure their carbon/plastic and to be local building blocks— just like in ecosystems! In the same way the Earth gifted us densely packed carbon (i.e. fossil fuels), we can gift our carbon to others in the future. Like the dinausaurs, we can't imagine how our plastic/carbon  will be used in the future. However, we can be certain that it makes a better gift compacted and concentrated into useful buildings rather than scattered and dispersed, loose and leaching. </p>

					<div class="faq-link"><h5>Learn more: <a href="sequest.php">Plastic Sequestration</a></h5></div>   
					<div class="top-link">Back to <a href="#building-q">Building Questions</a></div>                 
				</div>
				<div class="faq-image"><img src="../webp/spiral-circular-400px.webp" alt="eco brick circular design"></div>
			</div>
			
		</div>

	


	<div class="content-block">
		<div class="greyish">
		<div class="pinkish faq-banner"><h3>About the Movement</h3></div>
		</div>	

		<div class="faq" id="movement">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How to connect with the ecobrick movement?</h4></div>
				
					<p>The global ecobrick movement is a fundamentally decentralized and distributed network of keen green folks, communities and companies around the world.  And there's tons of diversity!  Depending on what's available folks ecobrick in unique ways across culture and continents.  While many of these folks are not online at all, many are and use social media to connect and support their local ecobrick communities.  We keep a far-from-complete list of web pages and social media pages around the world to follow, make friends and join.</p>

					<div class="faq-link"><h5>Learn more: <a href="/movement">Global Ecobrick Movement</a></h5></div>                    
					<div class="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
				</div>
				<div class="faq-image"><img src="../pngs/community.png" alt="community powered collaboration" loading="lazy"></div>
			</div>
		</div>


		<div class="faq" id="about-gea">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>Who are you guys?</h4></div>
					
					<p>We're a global alliance of ecobrickers!  We've come together to form the Global Ecobrick Alliance as a way to support the conceptual and technological infracstructure of the plastic transition movement.  Despite the diversity of the movement around the world, the problem of plastic connects us all.  And so too does the consistentcy of PET bottles and plastic packaging!  We see plastic as a grand opportunity for collective ecological action.  We're not a company, a charity or NGO— we're what we call an Earth Enterprise.  Unlike many companies we don't have shareholders or owners who profit from excess revenue.  Unlike many Charities and NGOs we generate our own revenue— specifically by providing valuable social service of training ecobrickers and the valuable ecological service of authenticating plastic sequestration.</p>

					<div class="faq-link"><h5>Learn more: <a href="about.php">Learn more about the GEA</a></h5></div>  
					<div class="top-link">Back to <a href="#movement-q">Movement Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="../svgs/shanti.svg" style="width: 40% !important;" loading="lazy" alt="Shanti one of our GEA Ecobrick Trainers"></div>
			</div>
		</div>




		<div class="faq" id="funds">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>If you don't receive sponsorship, donations, charity or grants how do you fund this amazing site, app and global team?</h4></div>
					
					<p>Good question!  Asking where an enterprise receives its funding is key to understanding their priorities and principles.  We generate our funds by providing ecological service and by raising ecological awareness.  Folks around the world join our on-site and online <a href="/trainings">training</a> and our Trainers remit 20% to the the GEA.  In addition our trainers sell our <a href="earthwands.php">EarthWand</a> ecobrick stick and remit 50% back to the GEA.  Finally, through GoBrik.com all the ecobricking that our block chain authenticates is quantified and available for purchase as <a href="https://gobrik.com/offset" target="_blank"> AES plastic offset credits</a>.  Buying Authenticated Ecobrick Sequestered plastic credits is a great way to take responsibility for your plastic generation and energize our work— and through it the global plastic transition movement.</p>

					<div class="faq-link"><h5>Start: <a href="offset.php">Offset your plastic with us</a></h5></div>  
					<div class="top-link">Back to <a href="#movement-q">Movement Questions</a></div>                  
				</div>
			</div>	
		</div>


		<div class="faq" id="mandalas">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How does the ecobrick movement spread?  Are people paid to do this?</h4></div>
				
					<p>Nope!  Nobody gets paid to ecobrick.  The ecobrick movement is a non-capital movement powered by collaboration and green spirit.  In other words, the motivation to see our earth clean and green is firstly and foremostly what inspires not just ecobricking, but the training sessions done by our trainers, and the operation of the Global Ecobrick Alliance.  By adhering to clear principles and methodologies, the movement spreads "mandalically".   This quiet and subtle yet potent and powerful social spread is what we call mandalic collaboration.   This philosophy helps to make sense of the paradox of our decentalized movement presided over by a centralized for-Earth enterprise.</p>

					<div class="faq-link"><h5>Learn more: <a href="/mandalas">Mandalic Collaboration</a></h5></div>                    
					<div class="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
				</div>
				<div class="faq-image"><img src="../webp/mandalic.webp" alt="than mandalic unfolding of eco bricks" loading="lazy"></div>
			</div>
		</div>



	

		<div class="faq" id="trainer-what">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What is a "GEA Certified Trainer"?</h4></div>
					
					<p>These are every day folks who are passionate about the planet and who have completeD our intensive Global Ecobrick Alliance trainer of trainer program.  GEA Trainers are skilled in making ecobricks, building modules and the ins-and-outs of plastic and its dangers.  They are certificed by the GEA to lead Ecobrick Starter Workshops. Our master trainers have signed off on their understanding and commitment and they are part of our global network.  Trainers are available to run ecobrick starter workshops for your group, company, or community.  They qualify to ask for a GEA standardized trainer fee which varies by country and currency.  20% of their fee is returned to the GEA.</p>

					<div class="faq-link"><h5>Learn more <a href="trainings">GEA Training Programs & etwork</a></h5></div>  
					<div class="top-link">Back to <a href="#movement-q">Movement Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="../webp/gea-logo-400px.webp" alt="than mandalic unfolding of eco bricks" loading="lazy"></div>
			</div>	
		</div>

		

		<div class="faq" id="trainings">
				<div class="faq-box">
					<div class="faq-texts">
						<div class="faq-header"><h4>How can I become a GEA certified ecobrick trainer?</h4></div>
					
						<p>We love to add your planet passion to our network.  There's no prequisites— other than experience making your own ecobricks!  To get a feel for what's involved, you can join one of the GEA's starter workshops!  We've got them going on all the time, online and onffline around the world.  Once you're ready, you can register for one of our five session GEA Trainer of Trainer workshops.  While our ToTs happen online very two months, we also do them onsite by commision: for cities, governments and companies keen to deploy a local ecobricking movement.  We also have Earth & Building starter and trainer workshops too!</p>

						<div class="faq-link"><h5>Learn more: <a href="/trainings">GEA Trainer Programs</a></h5></div>              
						<div class="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
					</div>
				</div>
			</div>
		</div>


		<div class="faq" id="catalyst">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can my company assist the ecobrick and plastic transition movement?</h4></div>
				
					<p>By leading by example.  Companies around the world have commissioned GEA Trainers to show their staff how to manage, track and ecobrick their plastic.  Then after a while they train their keenest staff to be trainers themselves!  Some companies host ecobrick workshops on their premises, others send their trainers out to the community.  However they do it, they make sure that they are setting the example in reducing, sequestering and transitioning from plastic.  To help keen green companies, the GEA has some powerful tools!</p>

					<div class="faq-link"><h5>Learn more: <a href="catalyst.php">Catalyst Companies</a></h5></div>
					<div class="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
				</div>
			
				<div class="faq-image"><img src="../webp/catalyst-logo.webp" alt="enterprises to go green" loading="lazy"></div>
			</div>
		</div>
</div>


	

	<div class="content-block">
		<div id="gobrik-questions-full" class="greyish">
			<div  class="blueish faq-banner"><h3>GoBrik Questions</h3></div>
		</div>

		<div class="faq" id="gobrik">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What is this GoBrik app for ecobricking?</h4></div>
					
					<p>The GoBrik platform serves ecobrickers around the world, enabling them to log, manage, validate, authenticate and exchange their ecobricks. Ecobricks that are logged on GoBrik are given a serial number and their unique data (weight, color, volume, density, maker etc.) is saved and managed in the database. Once logged, ecobricks are automatically submitted to the validation queue where they are reviewed by the community of ecobrickers. Ecobricks that are successfully authenticated (the reviewers concur on the visible data) are then eligible to be exchanged and traded on the platform.</p>

					<div class="faq-link"><h5>Learn more: <a href="/gobrik">GoBrik Platform</a><br>
					Launch: <a href="gobrik">GoBrik.com</a></h5>
					</div> 
					<div class="top-link">Back to <a href="#gobrik-q">GoBrik Questions</a></div>  
				</div>   
				<div class="faq-image"><img src="../webp/eb-sky-400px.webp" alt="An eco brick being made" loading="lazy"></div>
			</div>
			
		</div>

		<div class="faq" id="brikcoins">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What are Brikcoins?</h4></div>
					
					<p>Brikcoins (<strong><span class="">ß</span></strong>) are a new medium of exchange founded on community collaboration and a healthy planet. Brikcoins are based on ecobricked, sequestered, plastic. Brikcoins are earned by helping to authenticate ecobricks on GoBrik and prove the sequestration of plastic. Every Brikcoin is backed by 100g of packed and secured plastic. Anyone with an account can start earning earning Brikcoins which can then be used to pay for GEA courses, exchange with GoBrik users, and more.</p>

					<div class="faq-link"><h5>Learn more: <a href="brikcoins.php">Brikcoin Manual Blockchain</a><br>
						Launch: <a href="gobrik">GoBrik.com</a></h5>
						</div> 
						<div class="top-link">Back to <a href="#gobrik-q">GoBrik Questions</a></div> 
					</div>   
					<div class="faq-image"><img src="../webp/brk-cascade.webp" style="width: 40% !important;" alt="various eco bricks cascading" loading="lazy"></div>
				</div>
				
			</div>

		<div class="faq" id="start">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How to join GoBrik?</h4></div>
					
					<p>GoBrik accounts are free!  GoBrik is a web app.  This means you can sign up and use it on your desktop computer— or on your phone.  Signing up is easy with either your email address or your Facebook account.  We'll ask you some questions about your ecobricking, and then you're set to log ecobricks, earn brikcoins, and exchange ecobricks on our marketplace.  Visit GoBrik.com to register.</p>

					<div class="faq-link"><h5>Learn more: <a href="/gobrik">GoBrik Platform</a><br>
						Launch: <a href="gobrik">GoBrik.com</a></h5>
						</div> 
						<div class="top-link">Back to <a href="#gobrik-q">GoBrik Questions</a></div> 
					</div>   
					<div class="faq-image"><img src="../webp/eb-sky-400px.webp" alt="eco brick making" loading="lazy"></div>
				</div>
				
			</div>
	</div>



<div class="content-block">
    	<div id="block-border1" class="greyish">
			<div class="orangeish faq-banner"><h3>More Questions</h3></div>
		</div>


		<div class="faq" id="dropoff">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can I drop off my completed ecobricks to a community project?</h4></div>
					
					<p>Remember that ecobricks are all about taking personal responsibility for our plastic and not another way to dispose of it.  Putting your own ecobricks to use in your own projects is the essence of the movement.  Of course, more and more ecobrick building projects happening that need ecobrick contributions.</p>
					
					<p>Before contributing your ecobricks to a community project, it's essential to make sure your ecobricks are high quality— no one wants bottles filled with loose dirty plastic!  Be sure to follow the <a href="about.php">GEA best practices</a>.  Even better: get your ecobricks authenticated. You can do that by logging your ecobricks on our GoBrik app, where they are validated through a peer review process.</p>
					<!-- <p>When your ecobricks are ready, look for a community ecobrick hub near you that is taking ecobricks.  To help you connect with community hubs and projects we maintain a Brik Market on the GoBrik app.  Here you can post your ecobricks to see if anyone needs them, or find people looking for them.<br><br>
	
					<div class="faq-link"><h5>Learn more: <a href="dropoff.php">About the Brik Market</a></h5></div> 
					<div class="faq-link"><h5>Launch: <a href="https://gobrik.com/#market " target="_blank">The Brik Market</a></h5></div> -->
					                  
						<div class="top-link">Back to <a href="#misc">More Questions</a></div>
				</div>
				<div class="faq-image"><img src="../webp/brikmarket-400px.webp" alt="eco brick making" loading="lazy"></div>
			</div>
		</div>
	
		<div class="faq" id="hubs">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can I get ecobricks for my project?</h4></div>
					
					<p>It's important to remember that ecobricks aren't 'bricks' in the traditional sense of the word.  The making of ecobricks and building with them is a fundamentally collaborative process.  In fact, ff you're keen to build a normal building for yourself, in most cases your better off using normal bricks and construction techniques.  Of course, if you're keen to build a space for your community, you can set yourself up as an Ecobrick Hub— where folks drop off their ecobricks to help you with your project.</p>
					<!-- <p>To faciliate the sourcing of ecobricks from your community for projects, we maitain the Brik Market.  There you can post your requests for ecobricks— while specifying the specifics of the ecobricks you require.</p>
	
					<div class="faq-link"><h5>Learn more: <a href="dropoff.php">About the Brik Market</a></h5></div> 
					<div class="faq-link"><h5>Launch: <a href="https://gobrik.com/#market " target="_blank">The Brik Market</a></h5></div> -->

					<div class="top-link">Back to <a href="#misc">More Questions</a></div>
				</div>
				<div class="faq-image"><img src="../webp/various-briks-400px.webp" alt="eco brick making" loading="lazy"></div>
				
			</div>
		</div>

		<div class="faq" id="ocean">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What about plastic I pick up from the beach— can it be ecobricked?</h4></div>
				
					<p>Yes... and no!  Normal ecobricks are all about the mindful repurposing of the plastic that we consume personally.  This means caring for our plastic by segregating, cleaning and drying it.  The plastic that has washed up on the beach (or we find on the road side) tends to be wet, dirty and chunky.  So its not ideal for putting into a normal ecobrick.  However, it poses a contamination danger to the environment just as much as any other plastic.  To take care of it, you can pack it into what we call an ocean ecobrick.  Ocean ecobricks are made by cutting two PET bottles, packing both tight, and merging them into one.</p>

					<div class="faq-link"><h5>Learn more: <a href="/ocean">Ocean Ecobricks</a></h5></div>   
					<div class="top-link">Back to <a href="#misc">More Questions</a></div>                 
				</div>
				
				<div class="faq-image"><img src="../webp/oeb-400px.webp" alt="ocean eco bricks" loading="lazy"></div>
			</div>
			
		</div>

		<div class="faq" id="cigbrick">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What about cigarette filters— can they be ecobricked?</h4></div>
				
					<p>YES!  Cigarette filters are made from plastic, and although small, are one of the biggest source of plastic pollution.  We've thus come up with a special technique and ecobricking just for cigarette butts.  When you're done smoking, simply peel of the paper and remove the ash (this can be safely discarded).  Then, place the filter into your ecobrick.  If you're really keen, you can make an ecobrick entirely out of cigarette filters.  We call this a "cigbrick"!</p>

					<div class="faq-link"><h5>Learn more: <a href="/cigbrick">Cigbricks</a></h5>
					</div>                    
					<div class="top-link">Back to <a href="#misc">More Questions</a></div>
				</div>
				<div class="faq-image"><img src="../svgs/Cigbrick.svg" alt="Cigbricks eco brick" loading="lazy"></div>
			</div>
			
		</div>	

		<div class="faq" id="media">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>I am with the media. How do I get accurate information on ecobricks to write a story or do a report?</h4></div>
				
					<p>Well... that's what this site is for!  Even better, we have page for that.  Our press kit is designed to help journalist avoid the most common misconceptions about ecobricking.  </p>

					<div class="faq-link"><h5>Learn more: <a href="media.php">GEA Press Kit</a></h5></div>   
					<div class="top-link">Back to <a href="#misc">More Questions</a></div>                 
				</div>
				
			</div>
			
		</div>

		<div class="faq" id="eco-bricks">
			<div class="faq-box">
				<div class="faq-texts">
				
				<div class="faq-texts">
					<div class="faq-header"><h4>How do you spell it:  eco-brick, eco brick, or ecobrick?</h4></div>
				
					<p>Back in the early days of putting plastic into a bottle we called it just that— plastic bottle bricks!  Then when we realized it was helpful to the ecosystems around us, the name changed to eco bricks.  Then we got more confident and added a hyphen: eco-bricks!  However, once ecobricks were a clearly established global phenomenon and demonstrably more practical and ecological helpful solution than industrial equivalents— leaders of the global movement conferred and deemed that a full fledged word was appropriate:  ecobricks!  The Global Ecobrick Alliance and the official wikipedia entry use 'ecobrick' (no space, no hypen, no strange capitalization) as the official term.</p>

					<div class="faq-link"><h5>Learn more: <a href="about.php">GEA History</a></h5></div>   
					<div class="top-link">Back to <a href="#misc">More Questions</a></div>                 
				</div>
				
			</div>
		</div>

		<div class="faq" id="arcio">
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What's that green circle on the bottom of your webpage?  What is Arc.io doing?</h4></div>
				
					<p>The green circle shows that our Green Arc.io service is operating.  This content delivery netwrok system enables websites to be faster and greener by enabling common visitors of a website that are local to each other.  The Arc + Ecobricks.org widget enables other visitors of a site that are geographically local to you to share access to the same data.  Instead of connecting to content on a server on the other side of the planet, the content can be served by the computer nearest you.  This saves time and energy and is valuable service that websites pay for.  By directing the service payments of the CDN clients through the Ecobricks.org manual blockchain, dollars, kilobytes and kilograms of plastic can directly correlated.  Your visit to arc websites results in AES plastic offset credits purchased and the valuzation of the removal of plastic from the biosphere by ecobrickers around the world.
					</p>

					<div class="faq-link"><h5>Learn more: <a href="arc.php">Arc CDN</a></h5>
					</div>                    
					<div class="top-link">Back to <a href="#misc">More Questions</a></div>
				</div>
				<div class="faq-image"><img src="../webp/arc-green-popper.webp" alt="green cdn service" loading="lazy" style="width: 50% !important;"></div>
			</div>
			
		</div>	
					
	</div>


	<br><br><br>

	<div id="block-border2" class="greyish">
		<div class="grey faq-content-block">
			<h2>Need to know more?</h2>
			<h5>In the answer, above click through to the corresponding page on our site.  You can go even deeper with our source materials and trainings:  </h5>
		
				<p><ul>
					<li><b>Ecobricks & Brikcoin Whitepaper</b> <a href="https://files.ecobricks.org/s/pC52memM4S2a6LX" target="_blank">The Commodification of Sequestered Plastic</a></li>
					<li><b>Journalists:</b>  Be sure to check out <a href="media.php">our media kit!</a></li>
						<!--<li><b>Academics:</b>  Be sure to check out <a href="media">our reports and white papers!</a></li>--> 
						<li><b>Learn from a trainer</b>  Check out the current <a href="https://gobrik.com/courses">Ecobrick Starter Workshop</a> course listing by certified GEA Trainers.</li>
						<li><b>Training others to make ecobricks?</b> Be sure to check out <a href="/trainings">trainer of trainer program</a></li>
					</ul></p>

					<br><br><br>
		
				
		</div>
	</div>
</div>
</div>
</div>

<br><br>
</div>
  




	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>


<!-- CUSTOM PAGE SCRIPTS-->


<!-- This script is for pages that use the accordion content system-->
<script src="../accordion-scripts.js?v=2" defer></script>

</div>
</body>
</html>

