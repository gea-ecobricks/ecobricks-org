<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/cloud-back.svg">
<link rel="preload" as="image" href="webp/faq-top.webp">
<link rel="preload" as="image" href="webp/faq-bottom.webp">

_END;?>

<?php require_once ("meta/arc-$lang.php");?>

<?php require_once ("header.php");?>




<!-- CUSTOM PAGE SCRIPTS-->

<script>
	function general() {
	  var x = document.getElementById("general-questions");
	  if (x.style.display === "none") {
		x.style.display = "block";
	  } else {
		x.style.display = "none";
	  }

	
  var x = document.getElementById("toggle-hide");
  if (x.innerHTML === "⬆ Hide") {
    x.innerHTML = "⬇ Show";
  } else {
    x.innerHTML = "⬆ Hide";
  }
	}
</script>

<script>
	function concerns() {
	  var x = document.getElementById("concerns-questions");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
	
	var x = document.getElementById("toggle-show");
		if (x.innerHTML === "⬇ Show") {
			x.innerHTML = "⬆ Hide";
		} else {
			x.innerHTML = "⬇ Show";
		}
	}
</script>

<script>
	function building() {
	  var x = document.getElementById("building-questions");
	  if (x.style.display === "block") {
		x.style.display = "none";
	  } else {
		x.style.display = "block";
	  }

	  var x = document.getElementById("toggle-show2");
		if (x.innerHTML === "⬇ Show") {
			x.innerHTML = "⬆ Hide";
		} else {
			x.innerHTML = "⬇ Show";
		}
	}
	
	</script>

<script>
	function movement() {
	  var x = document.getElementById("movement-questions");
	  if (x.style.display === "block") {
		x.style.display = "none";
	  } else {
		x.style.display = "block";
	  }

	  var x = document.getElementById("toggle-show3");
		if (x.innerHTML === "⬇ Show") {
			x.innerHTML = "⬆ Hide";
		} else {
			x.innerHTML = "⬇ Show";
		}
	}
	</script>


<script>
	function gobrik() {
	  var x = document.getElementById("gobrik-questions");
	  if (x.style.display === "block") {
		x.style.display = "none";
	  } else {
		x.style.display = "block";
	  }

	  var x = document.getElementById("toggle-show4");
		if (x.innerHTML === "⬇ Show") {
			x.innerHTML = "⬆ Hide";
		} else {
			x.innerHTML = "⬇ Show";
		}
	}
	</script>

<script>
	function more() {
	  var x = document.getElementById("more-questions");
	  if (x.style.display === "block") {
		x.style.display = "none";
	  } else {
		x.style.display = "block";
	  }

	  var x = document.getElementById("toggle-show5");
		if (x.innerHTML === "⬇ Show") {
			x.innerHTML = "⬆ Hide";
		} else {
			x.innerHTML = "⬇ Show";
		}
	}
</script>

<STYLE>

#clouds {

    width: 100%;
	height: 70vh;


    display: flex;
    align-items: flex-end;
    margin-bttom: -70px;
}

#cloud-banner {
	z-index: 4;
	position: relative;
	height: 25vh;
}

	

@media screen and (min-width: 770px) { 
	#header-content-block {
		text-align: left;
		height: 60vh;
		padding: 20vh 7% 50px 7%;*/
		z-index: 5;
		background: url(webp/arc-purple.webp) right top;
    background-repeat: no-repeat;
    background-size: contain;
	background-color: #f3f3f3;
	margin: 0 0 -20px 0;

}
}

@media screen and (max-width: 770px) { 
	#header-content-block {
		text-align: center;
		height: 80vh;
		padding: 25px 3% 25px 3%;
		margin-bottom: 0px;
		margin: -86vh 2.9% -60px 2.9%;
		z-index: 5;
	}
}

#raised-text {
  z-index: 5;
  position: relative;
  color: white !important;
}

#grey-bar {
	margin-top: 20px;
	width: 100%;
background: grey;
height: 40px;
box-shadow: 0 -8px 7px rgba(85, 84, 84, 0.4);
z-index: 10;
border-radius: 0 0 5px 5px;
margin-bottom: -80px;
}

</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- Menu bar-->	
         
		<?php include 'menu-bar.php';?>

<!--Page banner-->

	
		<div id="header-content-block">
			<div id="raised-text">
					<h1>Speed & Green Your Data</h1>
			<h3>Arc.io and Ecobricks.org speeding up the internet and keeping plastic out of the biosphere.</h3>
		<img src="webp/arc-aes.webp">
	</div>
		</div>
		<div id="grey-bar"></div>

		<div id="content-sect1">

<!-- QUESTIONS CONTENT -->


<a name="top"></a>
<div id="main-content">

			<!--
		<div id="faq-content-block-1">
			
				
				<h2>Our team has been working on ecobricks issues for the last decade.</h2>
				<p>  We've organized short answers to the most common questions in four main categories:  </p>

		
		</div>-->

		<div id="block-border" class="greyish">
			<div id="faq-content-block" class="grey">

<h3>Speed up your website & Support the removal of plastic from the biosphere</h3>

     <div class="faq">
         <a name="plastic"></a>
             <div class="faq-box">
                    <div class="faq-texts">
                        <div class="faq-header"><h4>Arc.io | Content Delivery Network</h4></div>
                        <p>Arc is a content delivery network that distributes data over a decentralized network of web page visitors. Arc is a two-sided marketplace. On one side of the market, websites buy a fast, low-cost peer-to-peer CDN. On the other side, websites make money by contributing bandwidth to the peer-to-peer CDN. Arc's widget provides access to both sides. Arc turns bandwidth into dollars by uniting browsers into a distributed content delivery network that we rent. Think screaming-fast BitTorrent for every website that's seamless and native to the web. Websites pay Arc to make their sites faster by serving their static content (images, videos, JS, CSS, etc) from Arc's global, distributed network of browsers instead of from slower, more expensive, centralized servers.   </p>
                       
                   </div><!-- 
                    <div class="faq-image"><img src="webp/compacted-carbon.webp">
				</div>-->
					
             </div>

			<div class="faq-link"><h5>Learn more: <a href="plastic">Arc's Frequently Asked Questions</h5></a></div>
			<div class="faq-link"><h5>Get Arc: <a href="plastic">Arc for your website</h5></a></div>
			<div id="top-link">Back to <a href="#general">General Questions</a>
			</div>		
         </div>
		 </div>


		 <div class="faq">
         <a name="plastic"></a>
             <div class="faq-box">
                    <div class="faq-texts">
                        <div class="faq-header"><h4>Ecobricks.org | Plastic Offseting</h4></div>
                        <p>Ecobricks.org is an Earth Enterprise focused on securing plastic out of the biosphere and accelerating plastic transition. They provide a platform where ecobrickers around the world can log their hard work sequestering plastic into Ecobricks. This sequestration is authenticated on their manual blockchain through peer review. Authenticated plastic can then be purchased on their offsetting system in kilograms in a way that support Ecobricks.org and renumerates ecobrickers for their hard work.  </p>
                       
                  </div> <!-- 
                    <div class="faq-image"><img src="webp/compacted-carbon.webp">
				</div>-->
					
             </div>
			<div class="faq-link"><h5>Learn more: <a href="plastic">AES Plastic Offsetting</h5></a></div>
			<div class="faq-link"><h5>Learn more: <a href="plastic">Plastic Sequestration</h5></a></div>
			<div class="faq-link"><h5>Learn more: <a href="plastic">About Ecobricks</h5></a></div>
			<div id="top-link">Back to <a href="#general">General Questions</a>
			</div>		
         </div>
		 </div>
				

		 <div class="faq">
         <a name="plastic"></a>
             <div class="faq-box">
                    <div class="faq-texts">
                        <div class="faq-header"><h4>Green Popper | BETA</h4></div>
                        <p>Ecobricks.org and Arc are experimenting with a green popper. This unique Arc installation, enables websites and webmasters to speed up their site and contribute to the sequestration of plastic. Revenue from CDN traffic is directed to Ecobricks.org and directly correlated with the value of AES plastic.</p>

<p>By browsing a web page with the Arc + Ecobricks.org widget installed, extra bandwidth is used to help localize digital content for others viewing the same information. Instead of connecting to content on a server on the other side of the planet, the content can be served by the computer nearest you. This saves time and energy and is valuable service that websites pay for. By directing the service payments of the CDN clients through the Ecobricks.org manual blockchain, dollars, kilobytes and kilograms of plastic can directly correlated. Your visit to Arc websites with the green popper results in AES plastic offset credits purchased and the valuzation of the removal of plastic from the biosphere by ecobrickers around the world.</p>

<p>Currently, the green popper is available only by request and manual configuation. Contact the Ecobricks.org team if you would like to be part of the beta test. </p>
                       
                 </div> <!-- 
                    <div class="faq-image"><img src="webp/compacted-carbon.webp">
				</div>-->
					
             </div>
			<div class="faq-link"><h5>Request: <a href="plastic">Access to BETA</h5></a></div>
			<div class="faq-link"><h5>Get: <a href="plastic">Normal Arc for your site</h5></a></div>
	
			<div id="top-link">Back to <a href="#general">General Questions</a>
			</div>		
         </div>
		 </div>
				


</div>
				<a name="general"></a>
				<h2>Arc.io and Ecobricks.org speeding up the internet and keeping plastic out of the biosphere.</h2>
				<h3>Arc.io | Content Delievery Network</h3>
				<p>

Arc is a content delivery network that distributes data over a decentralized network of web page visitors. Arc is a two-sided marketplace. On one side of the market, websites buy a fast, low-cost peer-to-peer CDN. On the other side, websites make money by contributing bandwidth to the peer-to-peer CDN. Arc's widget provides access to both sides. Arc turns bandwidth into dollars by uniting browsers into a distributed content delivery network that we rent. Think screaming-fast BitTorrent for every website that's seamless and native to the web. Websites pay Arc to make their sites faster by serving their static content (images, videos, JS, CSS, etc) from Arc's global, distributed network of browsers instead of from slower, more expensive, centralized servers. .</p>
				

				<button onclick="general()" class="toggle" id="toggle-hide">⬆ Hide</button>

				<div id="general-questions">
				<hr>
				<h6>
					<ul>
						<li><a href="#plastic">What is plastic exactly?</a></li>
						<li><a href="#concern">Why should I be concerned about my plastic?</a></li>
						<li><a href="#worry">But isn't there more important stuff to worry about?</a></li>
						<li><a href="#dangerous">How is plastic troublesome and dangerous?</a></li>
						<li><a href="#what">So what is an ecobrick exactly?</a></li>
						<li><a href="#why">Why make ecobricks?</a></li>
						<li><a href="#how">How to make an ecobrick?</a></li>
						<li><a href="#build">What can you build with ecobricks?</a></li>
						<!--<li><a href="#build">How to start an Ecobrick Project?</a></li>-->
						<li><a href="#principles">What makes ecobricks different from other plastic stuff?</a></li>
						<li><a href="#dumping">Why not just landfill or dump my plastic?</a></li>
						<li><a href="#burning">Why not just burn or send my plastic to be incinerated?</a></li>
						<li><a href="#recycled">Why not just recycle my plastic?</a></li>
						<li><a href="#sequestration">So how is ecobricking different from recycling, dumping or burning?</a></li>
						<li><a href="#keen">I am keen to get going with ecobricking! What's the best way to start?</a></li>
					</ul>
					<br>
				</h6></div>
			</div>
		</div>

		<div id="block-border" class="greyish">
			<div id="faq-content-block" class="reddish">

				<a name="concerns"></a>
				<h4>Ecobrick Concerns</h4>
				<p>The worries and critiques.</p>
			
				<button onclick="concerns()" class="toggle" id="toggle-show">⬇ Show</button>

				<div id="concerns-questions">
					<hr>

					<h6>

					<ul>
						<li><a href="#dangerous-2">How does plastic get to be dangerous and toxic?</a></li>
						<li><a href="#matter">How can ecobricks be a final solution for plastic? Won't the plastic escape one day no matter what we do?</a></li>
						<li><a href="#transition">Don't ecobricks just encourage people to consume more plastic?</a></li>
						<li><a href="#sequest1">I've heared that ecobricks can leach poisons out into the environment.  Is it true?</a></li>
						<li><a href="#circular1">How can ecobricks be a final solution for plastic?  Won't the plastic escape one day no matter what we do?</a></li>
						<li><a href="#fire">What about Ecobricks and fire-- isn't it dangerous? </a></li>
						<li><a href="#circular3">But isn't building with ecobricks just delaying the problem?  How is this a final solution for plastic?</a></li>
						
					</ul>
					<br>
			
				</h6></div>
			</div>
		</div>


		<div id="block-border" class="greyish">
		<div id="faq-content-block" class="greenish">
			<a name="building-q"></a> 
			<h4>Building Questions</h4>
			<p>All about ecobrick applications.</p>
			
				<button onclick="building()" class="toggle" id="toggle-show2">⬇ Show</button>
				<div id="building-questions">
					<hr>
					<h6>
			
				<ul>
					<li><a href="#few">What can I build with a few ecobricks?</a></li>
					<li><a href="#dozens">What can I build with a dozen ecobricks?</a></li>
					<li><a href="#hundreds">What can I build with hundreds of ecobricks?</a></li>
					<li><a href="#thousands">What can I build with thousands of ecobricks?</a></li>
					<li><a href="#tens-thousands">What can I build with tens of thousands of ecobricks?</a></li>
					<li><a href="#circular">What happens when a module comes to it's end?</a></li>
					<li><a href="#earth">What exactly is Earth and Ecobrick building?</a></li>
					<li><a href="#earth-methods">How to build with Ecobricks and Earth?</a></li>
					<li><a href="#fire">What about Ecobricks and fire-- isn't it dangerous? </a></li>
					<li><a href="#circular3">But isn't building with ecobricks just delaying the problem?  How is this a final solution for plastic?</a></li>
				</ul>
				<br><br>
				</h6>
			</div>
			</div>
			
		</div>


		<div id="block-border" class="greyish">
		<div id="faq-content-block" class="pinkish">
			<a name="movement-q"></a><h4>Movement Questions</h4>
			<p>About us and the global plastic transition and ecobrick movement.</p>
			
			<button onclick="movement()" class="toggle" id="toggle-show3">⬇ Show</id></button>
			<div id="movement-questions">
				<hr>
				<h6>
				<ul>
					<li><a href="#movement">How to connect with the ecobrick movement?</a></li>
					<li><a href="#about-gea">Who are you guys?</a></li>
					<li><a href="#funds">If you don't receive sponsorship, donations, charity or grants how do you fund this amazing site, app and global team?</a></li>
					<li><a href="#mandalas"></a>How does the ecobrick movement spread?  Are people paid to do this?</a></li>
					<li><a href="#trainer-what">What is a "GEA certified Trainer"?</a></li>
					<li><a href="#trainings">How can I become a certified ecobrick trainer?</a></li>
					<li><a href="#catalyst">How can companies support ecobricking and plastic transition?</a></li>
			</ul>
			<br><br>
				</h6>
			</div>
			</div>
			
		</div>

		<div id="block-border" class="greyish">
		<div id="faq-content-block" class="blueish">

			<a name="gobrik-q"></a> 
			<h4>GoBrik Questions</h4>
			<p>All about our web based ecobrick app.</p>
			<button onclick="gobrik()" class="toggle" id="toggle-show4">⬇ Show</button>
			<div id="gobrik-questions">
				<hr>
			<h6>

				<ul>
					<li><a href="#gobrik">What is GoBrik?</a></li>
					<li><a href="#brikcoins">What are Brikcoins?</a></li>
					<li><a href="#start">How to sign up for an account on GoBrik?</a></li>
					<li><a href="#why-log">Why log ecobricks? (answer pending)</a></li>
				</ul>
				
			</h6>	<br><br></div>
			</div>
		</div>

		<div id="block-border" class="greyish">
		<div id="faq-content-block" class="orangeish">
			<a name="misc"></a>
			<h4>More Questions</h4>
			<p>All those other questions we haven't answered yet!</p>
			<button onclick="more()" class="toggle" id="toggle-show5">⬇ Show</button>
			<div id="more-questions">
				<hr>
				<h6>
				<ul>
					<li><a href="#ocean">What about plastic I pick up from the beach-- can it be ecobricked?</a></li>
					<li><a href="#cigbrick">What about cigarette filters-- can they be ecobricked?</a></li>
					<li><a href="#dropoff">How can I drop off my completed ecobricks?</a></li>
					<li><a href="#hubs">How can I get ecobricks for my project?</a></li>
					<li><a href="#media">I am with the media.  How do I do a story on ecobricks that avoids the common misconceptions?</a></li>
					<li><a href="#eco-bricks">How do you spell it?  Eco bricks?  Eco-bricks? Ecobricks?</a></li>
					<li><a href="#arcio">What's that green circle on the bottom of your webpage?  What is Arc.io doing?</a></li>

				</ul>
			</h6>
			<br><br>
			</div>	
		</div>
		</div>

</div>

<div id="main-content">
        
	
<div id="content-block">  <!--GENERAL QUESTIONS-->
	<div id="block-border" class="greyish"> <div id="faq-banner" class="grey"><h3>General Questions</h3></div></div>

     <div class="faq">
         <a name="plastic"></a>
             <div class="faq-box">
                    <div class="faq-texts">
                        <div class="faq-header"><h4>What is plastic?</h4></div>
                        <p>Plastic.  That convenient, colorful and ever so troublesome material that we all use every day is very easy to take for granted.  Fact is, it's crazily unique and valuable-- you literally can't find anything like it in elsewhere in our solar system.  Plastic is a petroleum by-product.  That means it is made from the carbon of ancient organisms-- algae, forest, dinausaurs that lived and died hundreds of millions of years ago.  As their bodies were buried, the Earth compacted and secured their carbon underground.  It was a process that removed more and more carbon from the atmosphere and greened the biosphere.  Today, we dig up these deposits as 'fossil fuels'.  But, this ancient carbon was never meant to be fuel!  Refining fossil fuels leads to lots of leftover chemicals-- which are perfect for making plastic and dangerous when let loose into the environment.  </p>
                       
                    </div>
                    <div class="faq-image"><img src="webp/compacted-carbon.webp">
				</div>
					
             </div>
			<div class="faq-link"><h5>Learn more: <a href="plastic">The Long Story of Plastic</h5></a></div>
			<div id="top-link">Back to <a href="#general">General Questions</a>
			</div>		
         </div>

			<div class="faq">
				<a name="concern"></a>
					<div class="faq-box">
						   <div class="faq-texts">
							   <div class="faq-header"><h4>Why should I be concerned about my plastic?</h4></div>
							   <p>Your plastic is an incredible opportunity! With your everyday plastic you can make tiny ripples that over time will turn into giant waves of ecological enrichment.  Plastic is the tip of the iceberg of a massive system based on the extraction of fossil fuels at the expense of ecosystems. Nobody wants to see an animal suffer.  Nor a rich ecosystem die.  Unfortunately, there is a direct correlation between what we consume today and these consequences tomorrow.  Concern about our plastic, ripples into tiny choices that takes our plastic, and us, out of the petrocapital system.  Such choices today reduce the system's momentum into the future and compounds into great greening consequences: the acceleration of a whole different kind of system! Ways of life with a lot less plastic and a lot richer ecosystems.   </p>
							   <div class="faq-link"><h5>Learn more: <a href="plastic">The Long Story of Plastic</h5></a></div>
								<div id="top-link">Back to <a href="#general">General Questions</a></div>
						   </div>
						   <div class="faq-image"><img src="webp/plastic-origins.webp"></div>
					</div>
					
				</div>


			<div class="faq">
				<a name="worry"></a>
					<div class="faq-box">
						   <div class="faq-texts">
							   <div class="faq-header"><h4>But aren't there bigger issues to worry about?</h4></div>
							   <p>Climate change.  Ocean acidification.  Species extinction.  These are big issues!  And they all have one thing in common:  <i>The way we humans are living on Earth.</i>  From brash billionaires to poisonous pollution... indeed, the way our world is working makes it easy to worry!   However, no matter how much we despair, there's no more powerful way to manifest change than by living it first ourselves.  As a petro-capital by-product, plastic is the penultimate representation of the Old Way we've been residing on Earth.  By changing the way we see plastic and what we do with it, we can shift our attitude from worry and despair to love and care.  By loving and caring for our plastic, we can begin to heal the roots of relationship with it and the Earth.  The very same roots that all the other big issues happen to share.</p>
							   <div class="faq-link"><h5>Learn more: <a href="plastic">The Long Story of Plastic</h5></a></div>
								<div id="top-link">Back to <a href="#general">General Questions</a></div>
						   </div>
						   <div class="faq-image"><img src="webp/petro-capital-age.webp"></div>
					</div>
					
				</div>

				<div class="faq">
					<a name="dangerous"></a>
						<div class="faq-box">
							   <div class="faq-texts">
								   <div class="faq-header"><h4>How is plastic troublesome and dangerous?</h4></div>
								   <p>Plastic is an incredibly useful and versatile material.  But in the wrong place it can become dangerous-- poisonous to us, animals and ecosystems as both chemicals and as particles.  When plastics get loose in the biosphere, the plastic degrades from the effects of friction, heat and sun.  As it degrades, dangerous chemicals are released.  These are toxins that don't fit into ecological systems and so contaminate.  Plastic's degradation also leads to smaller and smaller particles of plastic.  Organisms and animals that consume these 'micro-plastics' clog up their digestion and get sick.  Many die.  Eventually both chemical toxins and physical micro-plastics pass through the food chain to humans.  In our bodies they upset our hormonal balances, cause growth problems, and trigger cancer and health issues of all kinds. </p>
									<div class="faq-link"><h5>Learn more: <a href="poison">The Dangers of Plastic</h5></a></div>
									<div id="top-link">Back to <a href="#general">General Questions</a></div>
							   </div>
							   <div class="faq-image"><img src="pngs/fire.png"></div>
						</div>
						
					</div>
    
            

       <div class="faq">
            <a name="what"></a></p>
            <div class="faq-box">
                <div class="faq-texts">
                    <div class="faq-header"><h4>What is an ecobrick?</h4></div>
                    
                    <p>Ecobricks are a way to take advantage of plastic's pros while protecting against its cons.  Basically, an ecobrick is a plastic bottle packed with used plastic to a set density.  In so doing we take advantage of plastic's durability, longetivity, color and availability to make resuable building blocks.  Making an ecobrick is a low-tech, manual, zero-carbon method take responsibility for one's plastic.   Ecobricks follow the Earth's example of compacting and securing carbon indefinitely in order to secure plastic from the dangers of degradation. The goal of ecobricking is <i>sequestration</i> and <i>transition</i>: the removal of plastic from the biosphere <i>and</i> from carbon-intense petro-capital economy.   Ecobricks are then used for local short and long-term applications that embody and accelerate regenerative principles.  Like green spaces and gardens!</p>

                    <div class="faq-link"><h5>Learn more: <a href="what">Ecobrick Basics</h5></a></div>   
					<div id="top-link">Back to <a href="#general">General Questions</a></div>                 
                </div>
                <div class="faq-image"><img src="webp/faqs-400px.webp"></div>
            </div>
			
        </div>


		<div class="faq">
			<a name="why"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>Why make ecobricks?</h4></div>
					
					<p>Plastic is part of our petro-capital age.  No matter your culture or continent, you're going to be consuming some plastic!  Unlike other plastic management methods, ecobricking allows us to be 100% sure our plastic doesn't get into the biosphere.  Because ecobricking is hard work, it motivates us to consume less.  Having to pack our consumption piece by piece, it gets us thinking about the whole system behind our plastic!  And since we're not putting it back in the system, we can be confident lots more carbon and plastic aren't produced.  Then, since building with ecobricks is a hands-on, collaboration powered process, it brings us together with friends and family to make great green spaces that serve our communities.  As far as we know, there's nothing better one can do with the plastic that we've got now-- and the fastest way to speed up our transition from it.</p>

					<div class="faq-link"><h5>Learn more: <a href="why">Why Make Ecobricks?</h5></a></div> 
						<div id="top-link">Back to <a href="#general">General Questions</a></div>                   
				</div>
			
				<div class="faq-image"><img src="svgs/question.svg"></div>
			</div>
			
		</div>

        <div class="faq">
            <a name="how"></a>
                <div class="faq-box">
                       <div class="faq-texts">
                           <div class="faq-header"><h4>How to make an Ecobrick?</h4></div>
                           <p>Deep breath... First, save up and segregate your plastic, keeping them seperate from the organics.  If your plastics are dirty, clean and dry them. For your first ecobrick, start with a small, clear PET bottle that is common in your community (for projects you'll need bottles that are the same!).  Make sure you've got a solid stick (dowel, drumstick, branch, earthwand etc.). Start by inserting a soft, colored plastic down to bottom of the bottle. Stuff it down with other plastics of the same color until you have a 2-3cm base. Cut up other plastics and insert them losely into the bottle until it is almost full. Use your stick to pack the plastics down by pushing around on the sides.  Fill, pack, repeat. Leave 1-2cm of space at the top of the bottle.  Cap.  Then, weigh your ecobrick.  Make sure your ecobrick's density is over the GEA's recomended minimum 0.33g/ml (divide weight by the bottle's volume to get the density).  Good ecobricks are >0.4g/ml.  Log your ecobrick (keep a list or use our handy <a href="https://gobrik.com" target="_blank">GoBrik.com app</a>).  Store securely. Then, when you've got enough, put them together in a project.  And exhale!</p>
                            <div class="faq-link"><h5>Answer's a little too dense yeah? Better see: <a href="how">Our Comprehensive 10 Step Ecobricking Guide</h5></a></div>
							<div id="top-link">Back to <a href="#general">General Questions</a></div>
							</div>
                       <div class="faq-image"><img src="webp/eb-sky-400px.webp"></div>
                   </div>
				  
				
               </div>

		<div class="faq">
		<a name="build"></a>
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>What can you build with ecobricks?</h4></div>
				
				<p>So many things!  Ecobricks can be connected with tire bands, silicone, and cob to build furniture, gardens, green spaces and more. Ecobricks are being used in different ways around the world. Some households make a few modules for sitting stools while some cafes deploy hundreds to make their interactive co-working spaces. The ultimate way to build with ecobricks though is with earth.  Ecobrick and earth building is ideal for making parks, gardens and green spaces of all kinds for your community.  Some folks build simple circle benches and plant a tree inside, while others build shelters and structures.  Only your imagination is the limit! </p>

				<div class="faq-link"><h5>Learn more: <a href="build">General Ecobrick Applications</h5></a></div>                    
			</div>
			<div class="faq-image"><img src="webp/build-blue-450px.webp"></div>
		</div>
		<div id="top-link">Back to <a href="#general">General Questions</a></div>
	</div>

	<div class="faq">
		<a name="principles"></a>
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>What makes ecobricks and ecobrick applications different from other plastic stuff?</h4></div>
				
				<p>The methods of making ecobricks and building with them are guided by principles that are what we call "regenerative".  Regenerative principles are fundamentally different from the principles of "sustainability"  This means that from the ground up ecobricks making and applications are fundamentally different from our old uses of plastic.  Ecobrick applications are net-zero, localized, mandalic, transcaste, earthen, circular and open source.  Yep... that's a lot of new words and concepts!  But that's actually the point-- ecobricking is all about applying a whole new paradigm to our plastic so that we avoid sustaining the same problems and polluting results that came from the old way of doing things.</p>

				<div class="faq-link"><h5>Learn more: <a href="principles">Ecobrick Regenerative Principles</h5></a>
					<div id="top-link">Back to <a href="#general">General Questions</a></div>
				</div>                    
			</div>
			<div class="faq-image"><img src="webp/balancing-green.webp"></div>
		</div>
		
	</div>


	<div class="faq">
		<a name="dumping"></a></p>
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>Why not just landfill or dump my plastic?</h4></div>
				
				<p>When plastic is dumped or landfilled it's surface area ends up fully exposed to the sun, friction, fire and/or water.  The more plastic is exposed, the more plastic degrades-- releasing CO2, other green house gases, and toxins.  Eventually plastic breaks down into smaller and smaller pieces called micro-plastics.  Increasingly, scientists are showing that these toxins and micro-plastic infiltrate ecosystems causing problems for plants and animals.  Eventually, plastic's molecules reach us and our children where they adversely impact human metabolisms. Because of this, its important to not let our plastic get loose into the biosphere by littering or dumping it.</p>

				<div class="faq-link"><h5>Learn more: <a href="posion">Plastic can be Poisonous</h5></a>
					<div id="top-link">Back to <a href="#general">General Questions</a></div>
				</div>                    
			</div>
			<div class="faq-image"><img src="pngs/save-the-plastics.png"></div>
		</div>
		
	</div>

	<div class="faq">
		<a name="burning"></a></p>
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>Why not just burn or send my plastic to be incinerated?</h4></div>
				
				<p>Whether plastic is burned on the side of the road or in a high-tech waste-to-energy plant, it is a tremendous waste.  Plastic, as a fosil fuel by-product, is the result of hundreds of millions of years of work by the Earth to remove carbon from the atmosphere, to compact and secure it, and to green the biosphere.  When plastic is burned, in an instant, it's carbon is dispersed and released back into the atmosphere.  In many cases poisonous and toxic chemicals are also released. Incinerating plastic also encourages more new plastic to be made.  Because it is so deceptively easy to dispose of plastic by burning it, it makes it seem like there's no problem using it in the first place.  Because of this it is essential to keep our plastic from entering this dangerous and dirty spiral. The more plastic that is incinerated, the more ancient carbon is extracted, the more plastic is made, thrown away and the more carbon and toxins disperse into the biosphere.  </p>

				<div class="faq-link"><h5>Learn more: <a href="posion">Plastic can be Poisonous</h5></a></div>   
				<div id="top-link"><a href="#general">Back to General Questions</a></div>                 
			</div>
			<div class="faq-image"><img src="webp/incineration.webp"></div>
		</div>
	
	</div>


	<div class="faq">
		<a name="recycled"></a></p>
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>Why not just recycle my plastic?</h4></div>
				
				<p>Recyling plastic is a great idea-- in theory!  Unfortunately, when recycling is done <i>for-profit</i> rather than <i>for-Earth</i>, it doesn't work so well.  It has been clearly shown that industrial recycling only cyles plastic a few times before it ends up loose in the biosphere.  It has been also clearly shown that industrial recycling is designed to reduce consumer ecological consciousness. Industrial recycling also takes lots of energy.  The transportation, processing and smelting of pffinllastic is a process that is non-local and net-additive.  In other words, it adds lots of carbon back into the biosphere!  Recycling plastic, also leads to more products made from plastic-- the old plastic that being reused and necessarily new plastic additions.  Making new plastic products not only requires lots of energy, it most often also requires new plastic to be mixed in.  Putting plastics into industrial recycling puts energy into more industry, more plastic and more pollution.</p>

				<div class="faq-link"><h5>Learn more: <a href="recycled">Industrial Plastic Recycling</h5></a></div>                    
				<div id="top-link">Back to <a href="#general">General Questions</a></div>
			</div>
			<div class="faq-image"><img src="svgs/vsrecycling.svg"></div>
		</div>
		
	</div>

	<div class="faq">
		<p><a name="sequestration"></a></p>
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>So how is ecobricking different from recycling, dumping or burning?</h4></div>
				
				<p>Ecobricking is a form of plastic sequestration.  That means there's six principled reasons that set ecobricking apart.  Rather than being for-profit ecobricking is for-Earth.  Rather than letting plastic and carbon loose, ecobricking is all about their compaction and concentration.  Rather than cycling plastic only a few times, ecobriking creates indefinitely reusable building blocks. Rather than rely on marketing that lowers ecoogical awareness, ecobricking is a hands-on learning experience that raises it.  Rather than result in more products and factories that harm plants and animals, ecobricking leads to green spaces that give them a home.  Rather than un-attentive disposal, ecobricking is all about measuring, tracking and disclosing our plastics.  To sum it up... ecobricking is all about following the Earth's example to make sure that we're transitioning from plastic to greener ways of living. </p>

				<div class="faq-link"><h5>Learn more: <a href="sequest">The Principles of Plastic Sequestration</h5></p></div>                    
			</div>
			<div class="faq-image"></div>
		</div>
		<div id="top-link"><a href="#general">Back to General Questions</a></div>
	</div>
			
	<div class="faq">
		<p><a name="keen"></a></p>
		<div class="faq-box">
			<div class="faq-texts">
				<div class="faq-header"><h4>I am keen to get going with ecobricking!  What's the best way to start?</h4></div>

				<p>Start by writing down today's date.  Then, save your plastic for the next month!  Every single piece that comes into your household, be sure that it doesn't leave-- but instead gets cleaned, dried and placed in a special bin.  After 30 days, weigh all the plastic that your household has consumed, transfer it to another bin and... begin ecobricking (see the how to ecobrick).  If you don't finish all the plastic in one sitting that's ok.  Keep putting the plastic you consume in bin #1 and every month transfer your ecobrickable plastic into bin #2.  This way you're not only efficiently ecobricking, you're tracking your consumption, plastic reduction and plastic transition.</p>

					<div class="faq-link"><h5>Learn more: <a href="how">How to Make an Ecobrick</h5></a></div>                    
					<div id="top-link">Back to <a href="#general">General Questions</a></div>
				</div>
			<!--<div class="faq-image"></div>-->
		</div>
	</div>

</div>




<div id="content-block">    <!--ECOBRICK CONCERNS-->
	
	<div id="block-border" class="greyish">
		<div id="faq-banner" class="reddish"><h3>Ecobrick Concerns</h3></div>
	</div>


		           
		<div class="faq">
			<a name="dangerous-2"></a>
				<div class="faq-box">
					   <div class="faq-texts">
						   <div class="faq-header"><h4>How does plastic get to be dangerous and toxic?</h4></div>
						   <p>Plastic is an incredibly useful and versatile material.  But in the wrong place it can become dangerous-- poisonous to us, animals and ecosystems.  When it gets loose in the biosphere plastic degrades from the effects of friction, heat and sun.  As it degrades, dangerous chemicals are released.  These toxins don't fit into ecological systems and chemically contaminate.  Plastic's degradation also leads to smaller and smaller pieces of plastic.  Organisms and animals that consume these 'micro-plastics' clog up their digestion and get sick.  Many die.  Eventually both chemical toxins and physical micro-plastics pass through the food chain to humans.  In our bodies they upset our hormonal balances, cause growth problems, and trigger cancer and other health issues. </p>
							<div class="faq-link"><h5>Learn more: <a href="poison">The Dangers of Plastic</h5></a></div>
							<div id="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div> 
					   </div>
					   <div class="faq-image"><img src="pngs/fire.png"></div>
				</div>
				
		</div>


		<div class="faq">
			<p><a name="matter"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can ecobricks be a final solution for plastic?  Won't the plastic escape one day no matter what we do?</h4></div>
					
					<p>"Final solutions" aren't the way the Earth and its ecosystems work.  Rather than lines that start and end, ecosystems instead work in spiralling cycles-- using carbon molecules as building blocks that are used over and over again in a journey towards sequestration. By ecobricking our plastic (which is mainly carbon!) we're taking it out of the linear industrial systems,  and final-thinking paradigm.  Ecobricks are designed to be building blocks tha can be used over and over again.  Just like ecosystem they can be built with locally and with no extra energy.  This way our ecobricks can spiral through time and become gifts for future generations.  In the same way the Earth gifted us densely packed carbon (i.e. fossil fuels), we can gift our carbon to another age.  Like the dinausaurs, we can't imagine how the carbon of our age will be used in the future. However, we can be certain that it makes a better gift compacted and concentrated rather than scattered and dispersed, loose and leaching. </p>

					<div class="faq-link"><h5>Learn more: <a href="circular">Circular Design</h5></a></div>  
					<div id="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div>                  
				</div>
				
				<div class="faq-image"><img src="webp/ayyew.webp"></div>
			</div>
			
		</div>


		<div class="faq">
			<p><a name="transition"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>Don't ecobricks just encourage people to consume more plastic?</h4></div>
					
					<p>This is a question we get a lot from people who have yet to make an ecobrick.  Once you commit to taking full responsibility for your plastic and start packing every piece, you get very choosy about the plastic you buy!  Let's be honest, ecobricking isn't fun-- nor washing, drying your plastics every day to prep them for bricking.  In a 2021 cross-sectional survey of ecobrickers, we found that on average their monthly plastic consumption had decreased to 61% of their per capita average.  Rather than give an excuse to continue consuming plastic, ecobricking helps to increase plastic awareness and accelerate plastic transition.</p>

					<div class="faq-link"><h5>Learn more: <a href="transition">Plastic Transition</h5></a></div>     
					<div id="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div>                  
				</div>
				<!--<div class="faq-image"></div>-->
			</div>
			
		</div>

		<div class="faq">
			<p><a name="sequest1"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>I've heard that ecobricks can leach poisons out into the environment.  Is it true?</h4></div>
					
					<p>Yes!  If you were to set an ecobrick on fire, leave it in the sun, or boil it in a bucket of water, it certainly would leach poisons.  Just like pretty much anything made from plastic!  Anything used the wrong way can be dangerous after all.  However, the whole point of ecobricking is the safe securing of plastic.  Plastic is susceptible to degradation and leaching to the extent that its surface area is exposed to the elements.  When we pack plastic densely into a bottle we reduce the net-surface area a thousand-fold.  Then, when we put ecobricks to use in applications that cover and protect the plastic, the danger of leaching is near nil!  And don't forget, by not recycling plastic we avoid all the carbon that would be released industrially!</p>

					<div class="faq-link"><h5>Learn more: <a href="transition">Plastic Sequestration</h5></a></div>                    
					<div id="top-link">Back to <a href="#concerns">Ecobrick Concerns</a></div>   

				</div>
					<!--<div class="faq-image"></div>-->
			</div>
			
		</div>
	
	</div> <!-- STRAY-->
	

<div id="content-block">
	<div id="block-border" class="greyish">
		 <div id="faq-banner" class="greenish"><h3>Building Questions</h3></div>
	</div>
		

		<div class="faq">
			<p><a name="few"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with a few ecobricks?</h4></div>
					
					<p>A module!  Ecobrick modules are a simple, practical application of ecobricks.  All you need are a dozen to start and you can build a simple stool that can later be combined with other modules to make tables and chairs.  Milstein modules are the simplest type of module and allow you to build two layers vertically and expand horizontally to make couches, beds and even stages.</p>

					<div class="faq-link"><h5>Learn more: <a href="modules">Ecobrick Modules</a></h5></div> 
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="webp/milstein.webp"></div>
				</div>

		</div>

		<div class="faq">
			<p><a name="dozens"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with dozens of ecobricks?</h4></div>
					
					<p>Milstein modules!  The cool thing about modules is that they can inter-lock and combine indefinitely.  The hexagonal modules we call "Milsteins".  They are great for making a set of stools.  You can stack them and make a table too.  Milstein modules are super practical, easy to store and re-deploy for parties, gatherings and guests.  </p>

					<div class="faq-link"><h5>Learn more: <a href="milstein"> Ecobrick Milstein Modules</a></h5></div>     
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>         
				</div>
				<div class="faq-image"><img src="webp/module-table.webp"></div>
			</div>
			
		</div>

		<div class="faq">
			<p><a name="hundreds"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with hundreds of ecobricks?</h4></div>
					
					<p>Dieleman Lego! There is a special type of module, that works just like toy lego.  We call them "Dielemans". Dieleman modules are a geometric configuration of 16 ecobricks that enables vertical and horizontal inter-connection. In other words, they can be stacked horizontally and vertically indefinitely. Applications include indoor playgrounds, temporary stalls, sheds, and circular structures.</p>

					<div class="faq-link"><h5>Learn more: <a href="dms">Dieleman Lego Modules</a></h5></div>    
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>             
				</div>
				<div class="faq-image"><img src="pngs/MD-inter-lock-graphic.png"></div>
			</div>
		</div>

		<div class="faq">
			<p><a name="thousands"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with thousands of ecobricks?</h4></div>
					
					<p>Ecobrick open spaces!  By combining dozens, or hundreds of milstein and dieleman modules you've got a ecobrick lego that can be deployed at any time to make a customized social space.  Ideal for sitting, talking, meeting and playing open spaces, they can be deployed for festivals, showcases, markets, fairs, etc.  The modularity enables participants to playfully arrange a space that best suits the needs of the moment.</p>

					<div class="faq-link"><h5>Learn more: <a href="openspaces">More about Ecobrick Open Spaces</a></h5></div>        
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>               
				</div>
				<div class="faq-image"><img src="webp/openspace.webp"></div>
			</div>
			
		</div>

		<div class="faq">
			<p><a name="tens-thousands"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What can I make with tens of thousands of ecobricks?</h4></div>
					
					<p>A green space!  By combining ecobricks with tradional earth building techniques you can build parks, play areas, garden and food forests for your home or community.  Ecobricks are laid horizontally in earthen mortar (i.e. cob, adobe, etc.) to build up benches, garden beds, walls and even structures.  Of course, technically you only need dozens of ecobricks to start earth building-- but thousands is where the real possibilities begin!</p>

					<div class="faq-link"><h5>Learn more: <a href="earth">More about Earth & Ecobrick Building</a></h5></div>                    
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>   
				</div>
				<div class="faq-image"><img src="webp/tens-thousands.webp"></div>
			</div>
		</div>

		<div class="faq">
			<p><a name="circular"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What happens when a module comes to it's end?</h4></div>
					
					<p>Good question!  It's important to think about the next life of things we make-- what will happen to them when they come to their end.  We provide guidelines to make sure all ecobrick applications-- like modules-- have their next life built in.  By making modules with silicione or tire-bands, ecobricks can be removed from the module without damaging them.  Basically, we're leveraging the long lasting properties of plastic to make our design circular.  That means the module can be disbanded, rebuilt, repaired... or the ecobricks can be taken and used for an earth build.
					</p>

					<div class="faq-link"><h5>Learn more: <a href="circular">Ecobrick Circular Design</a></h5></div>                    
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>
				</div>
				<div class="faq-image"><img src="webp/circular-basic.webp" width="400px"></div>
			</div>
			
		</div>

		<div class="faq">
			<p><a name="earth"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What exactly is Earth and Ecobrick building?</h4></div>
					
					<p>Building with earth is an ancient tradition.  By combining it with ecobricks, anyone can build simple non-structural constructions.  In particular, earth and ecobrick building is ideal for making planters, benches and garden beds-- parks, food-forests, and in general green spaces that can serve our community and be a home for plants and other species.  Using local earth to make cob mortar, our ecobricks are covered up and secured from all forms of degradation.</p>

					<div class="faq-link"><h5>Learn more: <a href="earth">Earth & Ecobrick Buidling</a></h5></div>     
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="svgs/circle-bench.svg"></div>
			</div>
			
		</div>

		<div class="faq">
			<p><a name="earth-methods"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How to build with Ecobricks and Earth?</h4></div>
					
					<p>Building with earth and ecobricks is... well, pretty awesome!  First you start by learning about the ancient traditions in your area.  Then you get your ecobricks, friends and community together.  Using nothing but local materials you then get down and dirty digging a foundation, laying it down and building on up.  Layer by layer you add ecobricks, cob, ecobricks, cob.  As you go you curve and sculpt your bench, planter or wall.  When it's up and it's dry then you choose the appropriate outer skin and render it on.<br>That's obviously too short a summary! If you're serious, you'll want to check out our step by step directions and suggested techniques.    </p>

					<div class="faq-link"><h5>Learn more: <a href="earth-methods">Earth & Ecobrick Methods</a></h5></div>                    
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>
				</div>
				<div class="faq-image"><img src="webp/earth-build.webp"></div>
			</div>
		</div>
	

		<div class="faq">
			<p><a name="fire"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>Are ecobricks a fire hazard since they are made with flammable plastic?</h4></div>
					
					<p>Plastic, just like pretty much everything else, can be flammable.  Whether you're building with ecobricks or wood, it's all about building safely.  It all starts by making ecobricks properly.  When ecobricks are made according to GEA density standards, flammability is critically reduced.  Furthermore, by building and using ecobricks properly, their fire hazard is further reduced.  Ecobrick and earth building for green spaces, our most recommended ecobrick application, reduces flammability to virtually nil.</p>

					<div class="faq-link"><h5>Learn more: <a href="fire">Ecobricks & Fire Security</a></h5></p></div>  
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="webp/fire.webp"></div>
			</div>
		</div>


		<div class="faq">
			<p><a name="circular3"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>But isn't building with ecobricks just delaying the problem? How is this a final solution to plastic?</h4></div>
					
					<p>For hundreds of millions of years the molecules that make up our plastic weren't problematic.  In fact, by having secured carbon under ground, the Earth greened it's surface.  In the Earth's ecosystems "Final solutions" aren't the way things work. Thinking in lines is the way our petro-capital system tries to work when we buy, use, and throw-away. Ecosystems instead work in circles, cycling molecules over and over with less and less energy. By ecobricking our carbon/plastic we're getting out of 'final' thinking and back to following the example of the Earth. Ecobricks are designed to both secure their carbon/plastic and to be local building blocks-- just like in ecosystems! In the same way the Earth gifted us densely packed carbon (i.e. fossil fuels), we can gift our carbon to others in the future. Like the dinausaurs, we can't imagine how our plastic/carbon  will be used in the future. However, we can be certain that it makes a better gift compacted and concentrated into useful buildings rather than scattered and dispersed, loose and leaching. </p>

					<div class="faq-link"><h5>Learn more: <a href="sequest">Plastic Sequestration</a></h5></p></div>   
					<div id="top-link">Back to <a href="#building-q">Building Questions</a></div>                 
				</div>
				<div class="faq-image"><img src="webp/circular.webp"></div>
			</div>
			
		</div>

	


	<div id="content-block">
		<div id="block-border" class="greyish">
		<div id="faq-banner" class="pinkish"><h3>About the Movement</h3></div>
		</div>	

		<div class="faq">
			<a name="movement"></a>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How to connect with the ecobrick movement?</h4></div>
				
					<p>The global ecobrick movement is a fundamentally decentralized and distributed network of keen green folks, communities and companies around the world.  And there's tons of diversity!  Depending on what's available folks ecobrick in unique ways across culture and continents.  While many of these folks are not online at all, many are and use social media to connect and support their local ecobrick communities.  We keep a far-from-completelist of web pages and social media pages around the world to follow, make friends and join.</p>

					<div class="faq-link"><h5>Learn more: <a href="movement">Global Ecobrick Movement</h5></a></div>                    
					<div id="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
				</div>
			</div>
		</div>


		<div class="faq">
			<a name="about-gea"></a>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>Who are you guys?</h4></div>
					
					<p>We're a global alliance of ecobrickers!  We've come together to form the Global Ecobrick Alliance as a way to support the conceptual and technological infracstructure of the plastic transition movement.  Despite the diversity of the movement around the world, the problem of plastic connects us all.  So too does the consistentcy of PET bottles and plastic packaging!  We see plastic as a grand opportunity for collective ecological action.  We're not a company, a charity or NGO-- we're what we call an Earth Enterprise.  Unlike many companies we don't have shareholders or owners who profit from excess revenue.  Unlike many Charities and NGOs we generate our own revenue-- specifically by providing the valuable social service of training ecobrickers and the value ecological service of authenticating plastic sequestration.</p>

					<div class="faq-link"><h5>Learn more: <a href="about">Learn more about the GEA</h5></p></div>  
					<div id="top-link">Back to <a href="#movement-q">Movement Questions</a></div>                  
				</div>
				<div class="faq-image"><img src="svgs/shanti.svg"></div>
			</div>
		</div>




		<div class="faq">
			<a name="funds"></a>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>If you don't receive sponsorship, donations, charity or grants how do you fund this amazing site, app and global team?</h4></div>
					
					<p>Good question!  Asking where an enterprise gets its funds is important to understand their priority.  We generate our funds by providing ecological service and by raising ecological awareness.  Folks around the world join our on-site and online training and our Trainers remit 20% to the the GEA.  In addition our trainers sell our EarthWand ecobrick stick and remit 50% back to the GEA.  Finally, through GoBrik.com all the ecobricking that our block chain authenticates is quantified and available for purchase as AES plastic offset credits.  Buying Authenticated Ecobrick Sequestered plastic credits is a great way to take responsibility for your plastic generation and energize our work-- and through it the global plastic transition movement.</p>

					<div class="faq-link"><h5>Start: <a href="about">Buy AES Offset Credits</h5></p></div>  
					<div id="top-link">Back to <a href="#movement-q">Movement Questions</a></div>                  
				</div>
			</div>	
		</div>


		<div class="faq">
			<a name="mandalas"></a>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How does the ecobrick movement spread?  Are people paid to do this?</h4></div>
				
					<p>Nope!  Nobody gets paid to ecobrick.  The ecobrick movement is a non-capital movement powered by collaboration and green spirit.  In other words, the motivation to see our earth clean and green is firstly and foremostly what inspires not just ecobricking, but the training sessions done by our trainers, and the operation of the Global Ecobrick Alliance.  By adhering to clear principles and methodologies, the movement spread mandalically.   This quiet, subtle yet powerful social spread is what we call mandalic collaboration.   This philosophy helps to make sense of the paradox of our decentalized movement with a centralized focus!</p>

					<div class="faq-link"><h5>Learn more: <a href="mandalas">Mandalic Collaboration</h5></a></div>                    
					<div id="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
				</div>
				<div class="faq-image"><img src="webp/mandalic.webp"></div>
			</div>
		</div>



	

		<div class="faq">
			<p><a name="trainer-what"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What is a "GEA Certified Trainer"?</h4></div>
					
					<p>These are every day folks who are passionate about the planet and who have completeD our intensive Global Ecobrick Alliance trainer of trainer program.  GEA Trainers are skilled in making ecobricks, building modules and the ins-and-outs of plastic and its dangers.  They are certificed by the GEA to lead Ecobrick Starter Workshops. Our master trainers have signed off on their understanding and commitment and they are part of our global network.  Trainers are available to run ecobrick starter workshops for your group, company, or community.  They qualify to ask for a GEA standardized trainer fee which varies by country and currency.  20% of their fee is returned to the GEA.</p>

					<div class="faq-link"><h5>Learn more <a href="trainings">GEA Training Programs & etwork</h5></p></div>  
					<div id="top-link">Back to <a href="#movement-q">Movement Questions</a></div>                  
				</div>
			</div>	
		</div>

		

		<div class="faq">
				<p><a name="trainings"></a></p>
				<div class="faq-box">
					<div class="faq-texts">
						<div class="faq-header"><h4>How can I become a GEA certified ecobrick trainer?</h4></div>
					
						<p>We love to add your planet passion to our network.  There's no prequisites-- other than experience making your own ecobricks!  To get a feel for what's involved, you can join one of the GEA's starter workshops!  We've got them going on all the time, online and onffline around the world.  Once you're ready, you can register for one of our five session GEA Trainer of Trainer workshops.  While our ToTs happen online very two months, we also do them onsite by commision: for cities, governments and companies keen to deploy a local ecobricking movement.  We also have Earth & Building starter and trainer workshops too!</p>

						<div class="faq-link"><h5>Learn more: <a href="movement">GEA Trainer Programs</h5></a></div>              
						<div id="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
					</div>
				</div>
			</div>
		</div>


		<div class="faq">
			<p><a name="catalyst"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can my company assist the ecobrick and plastic transition movement?</h4></div>
				
					<p>By leading by example.  Companies around the world have commissioned GEA Trainers to show their staff how to manage, track and ecobrick their plastic.  Then after a while they train their keenest staff to be trainers themselves!  Some companies host ecobrick workshops on their premises, others send their trainers out to the community.  However they do it, they make sure that they are setting the example in reducing, sequestering and transitioning from plastic.  To help keen green companies, the GEA has some powerful tools!</p>

					<div class="faq-link"><h5>Learn more: <a href="catalyst">Catalyst Companies</h5></a></div>
					<div id="top-link">Back to <a href="#movement-q">Movement Questions</a></div>
				</div>
			
				<div class="faq-image"><img src="pngs/catalyst.png"></div>
			</div>
		</div>
</div>


	

	<div id="content-block">
		<div id="block-border" class="greyish">
			<div id="faq-banner" class="blueish"><h3>GoBrik Questions</h3></div>
		</div>

		<div class="faq">
			<p><a name="gobrik"></a></p>	
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What is this GoBrik app for ecobricking?</h4></div>
					
					<p>The GoBrik platform serves ecobrickers around the world, enabling them to log, manage, validate, authenticate and exchange their ecobricks. Ecobricks that are logged on GoBrik are given a serial number and their unique data (weight, color, volume, density, maker etc.) is saved and managed in the database. Once logged, ecobricks are automatically submitted to the validation queue where they are reviewed by the community of ecobrickers. Ecobricks that are successfully authenticated (the reviewers concur on the visible data) are then eligible to be exchanged and traded on the platform.</p>

					<div class="faq-link"><h5>Learn more: <a href="gobrik">GoBrik Platform</a><br>
					Launch: <a href="gobrik">GoBrik.com</a></h5>
					</div> 
					<div id="top-link">Back to <a href="#gobrik-q">GoBrik Questions</a></div>  
				</div>   
				<div class="faq-image"><img src="webp/eb-sky-400px.webp"></div>
			</div>
			
		</div>

		<div class="faq">
			<p><a name="brikcoins"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What are Brikcoins?</h4></div>
					
					<p>Brikcoins (<strong><span class="">ß</span></strong>) are a new medium of exchange founded on community collaboration and a healthy planet. Brikcoins are based on ecobricked, sequestered, plastic. Brikcoins are earned by helping to authenticate ecobricks on GoBrik and prove the sequestration of plastic. Every Brikcoin is backed by 100g of packed and secured plastic. Anyone with an account can start earning earning Brikcoins which can then be used to pay for GEA courses, exchange with GoBrik users, and more.</p>

					<div class="faq-link"><h5>Learn more: <a href="brikcoins">Brikcoin Manual Blockchain</a><br>
						Launch: <a href="gobrik">GoBrik.com</a></h5>
						</div> 
						<div id="top-link">Back to <a href="#gobrik-q">GoBrik Questions</a></div> 
					</div>   
					<div class="faq-image"><img src="webp/brk-cascade.webp"></div>
				</div>
				
			</div>

		<div class="faq">
			<p><a name="start"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How to join GoBrik?</h4></div>
					
					<p>GoBrik accounts are free!  GoBrik is a web app.  This means you can sign up and use it on your desktop computer-- or on your phone.  Signing up is easy with either your email address or your Facebook account.  We'll ask you some questions about your ecobricking, and then you're set to log ecobricks, earn brikcoins, and exchange ecobricks on our marketplace.  Visit GoBrik.com or reregister right here on Ecobricks.org</p>

					<div class="faq-link"><h5>Learn more: <a href="gobrik">GoBrik Platform</a><br>
						Launch: <a href="gobrik">GoBrik.com</a></h5>
						</div> 
						<div id="top-link">Back to <a href="#gobrik-q">GoBrik Questions</a></div> 
					</div>   
					<div class="faq-image"><img src="webp/eb-sky-400px.webp"></div>
				</div>
				
			</div>
	</div>



    <div id="content-block">
    	<div id="block-border" class="greyish">
		<div id="faq-banner" class="orangeish"><h3>More Questions</h3></div>
	</div>


		<div class="faq">
			<p><a name="dropoff"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can I drop off my completed ecobricks?</h4></div>
					
					<p>Before contributing your ecobricks to a community project, it's essential to make sure your ecobricks are high quality-- no one wants bottles filled with loose dirty plastic!  It's good to follow the GEA best practices.  It's even better to get your ecobricks first authenticated by peers-- you can do that on our GoBrik app.  When your ecobricks are ready, look for a community ecobrick hub near you.  We've got a searchable map on our GoBrik app and a marketplace where you can search for ecobrick requests.<br><br>
						
					<b>IMPORTANT:</b> Remember that ecobricks are all about taking personal responsibility for our plastic-- not a fancy way to get rid of it!  Putting your own ecobricks to use in your own projects is the essence of the movement.  Of course, more and more there's bigger ecobrick building projects happening...</p>
	
					<div class="faq-link"><h5>Learn more: <a href="gobrik.com/#hubs" target="_blank">Community Hub Map</h5></a></div>                    
						<div id="top-link">Back to <a href="#misc">More Questions</a></div>
				</div>
				<!--<div class="faq-image"></div>-->
			</div>
		</div>
	
		<div class="faq">
			<p><a name="hubs"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>How can I get ecobricks for my project?</h4></div>
					
					<p>It's important to remember that ecobricks aren't 'bricks' in the tradition sense of the word.  If you're keen to build something, in most cases your better off using normal bricks and construction techniques!  But if you're keen to build a space for your community, you can set yourself up as an Ecobrick Hub-- where folks drop off their ecobricks to help you with your project.</p>
	
					<div class="faq-link"><h5>Learn more: <a href="gobrik.com/#hubs" target="_blank">Community Hub Map</h5></a></div>                    
					<div id="top-link">Back to <a href="#misc">More Questions</a></div>
				</div>
				
			</div>
		</div>

		<div class="faq">
			<p><a name="ocean"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What about plastic I pick up from the beach-- can it be ecobricked?</h4></div>
				
					<p>Yes... and no!  Normal ecobricks are all about the mindful repurposing of the plastic that we consume personally.  This means caring for our plastic by segregating, cleaning and drying it.  The plastic that has washed up on the beach (or we find on the road side) tends to be wet, dirty and chunky.  So its not ideal for putting into a normal ecobrick.  However, it poses a contamination danger to the environment just as much as any other plastic.  To take care of it, you can pack it into what we call an ocean ecobrick.  Ocean ecobricks are made by cutting two PET bottles, packing both tight, and merging them into one.</p>

					<div class="faq-link"><h5>Learn more: <a href="ocean">Ocean Ecobricks</h5></a></div>   
					<div id="top-link">Back to <a href="#misc">More Questions</a></div>                 
				</div>
				
				<div class="faq-image"><img src="webp/oeb-400px.webp"></div>
			</div>
			
		</div>

		<div class="faq">
			<p><a name="cigbrick"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>What about cigarette filters-- can they be ecobricked?</h4></div>
				
					<p>YES.  Cigarette filters are made from plastic, and although small, are one of the biggest source of plastic pollution.  We've thus come up with a special technique and ecobricking just for cigarette butts.  Whenyou're done smoking, simply peel of the paper and remove the ash (this can be safely discarded).  Then, place the filter into your ecobrick.  If you're really keen, you can make an ecobrick entirely out of cigarette filters.  We call this a Cigbrick!</p>

					<div class="faq-link"><h5>Learn more: <a href="cigbrick">Cigbricks</h5></a>
					</div>                    
					<div id="top-link">Back to <a href="#misc">More Questions</a></div>
				</div>
				<div class="faq-image"><img src="svgs/Cigbrick.svg"></div>
			</div>
			
		</div>	

		<div class="faq">
			<p><a name="media"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
					<div class="faq-header"><h4>I am with the media. How do I get accurate information on ecobricks to write a story or do a report?</h4></div>
				
					<p>Well... that's what this site is for!  Even better, we have page for that.  Our press kit is designed to help journalist avoid the most common misconceptions about ecobricking.  </p>

					<div class="faq-link"><h5>Learn more: <a href="media">GEA Press Kit</h5></a></div>   
					<div id="top-link">Back to <a href="#misc">More Questions</a></div>                 
				</div>
				
			</div>
			
		</div>

		<div class="faq">
			<p><a name="eco-bricks"></a></p>
			<div class="faq-box">
				<div class="faq-texts">
				
				<div class="faq-texts">
					<div class="faq-header"><h4>How do you spell it:  eco-brick, eco brick, or ecobrick?</h4></div>
				
					<p>Back in the early days of putting plastic into a bottle we called it just that-- plastic bottle bricks!  Then when we realized it was helpful to the ecosystems around us, the name changed to eco bricks.  Then we got more confident and added a hyphen: eco-bricks!  However, once ecobricks were a clearly established global phenomenon and demonstrably more practical and ecological helpful solution than industrial equivalents-- leaders of the global movement conferred and deemed that a full fledged word was appropriate:  ecobricks!  The Global Ecobrick Alliance and the official wikipedia entry use 'ecobrick' (no space, no hypen, no strange capitalization) as the official term.</p>

					<div class="faq-link"><h5>Learn more: <a href="about">GEA History</h5></a></div>   
					<div id="top-link">Back to <a href="#misc">More Questions</a></div>                 
				</div>
				
			</div>

		</div>

		<div class="faq">
					<p><a name="arcio"></a></p>
					<div class="faq-box">
						<div class="faq-texts">
						
						<div class="faq-texts">
							<div class="faq-header"><h4>What's that green circle on the bottom of your webpage?  What is Arc.io doing?</h4></div>
						
							<p>Ecobricks.org and Arc enable a revolutionary opportunity for websites and webmasters to help make the planet a better place online for humans and offline for the oceans.  By connecting our two breakthrough technologies, anyone with a website can support both the decentralization of the internet and the removal of plastic from the biosphere.  Arc's peer-to-peer content delivery network enables websites and their users to by-pass centralized servers, speed up connectivity and transition on from invasive ad-driven revenue.  Meanwhile, Ecobricks.org and our AES plastic offsetting system connect directly to the decentralized global ecobrick movement.  Our underlying manual blockchain allows the valuation of preventing plastic from reaching the biosphere by rewarding ecobrickers doing the hard work.   By using Arc on a website, publishers can speed up the best of both worlds-- online and offline.<p>
							<p>By browsing a web page with the Arc + Ecobricks.org widget installed your extra bandwidth is used to help localize digital content for others viewing the same information.  Instead of connecting to content on a server on the other side of the planet, the content can be served by the computer nearest you!  This saves time and energy and is valuable service that websites pay for.  By directing the service payments of the CDN clients through the Ecobricks.org manual blockchain, dollars, kilobytes and kilograms of plastic can directly correlated.  Your visit to arc websites results in AES plastic offset credits purchased and the valuzation of the removal of plastic from the biosphere by ecobrickers around the world.
							</p>

							<div class="faq-link"><h5>Learn more: <a href="https://arc.io/about">Arc CDN</h5></a></div>   
							<div id="top-link">Back to <a href="#misc">More Questions</a></div>                 
						</div>
						
					</div>

				</div>
			</div>

	<br><br><br>




	<div id="block-border" class="greyish">
		<div id="faq-content-block" class="grey">
			<h2>Need to know more?</h2>
			<h5>In the answer, above click through to the corresponding page on our site.  You can go even deeper with our source materials and trainings:  </h5>
		
				<h6><ul>
					<li><b>Ecobricks & Brikcoin Whitepaper</b> <a href="https://files.mandala.team/s/depPsJ7YKnMRMHN" target="_blank">The Commodification of Sequestered Plastic</a></li>
					<li><b>Journalists:</b>  Be sure to check out <a href="media">our media kit!</a></li>
						<!--<li><b>Academics:</b>  Be sure to check out <a href="media">our reports and white papers!</a></li>--> 
						<li><b>Learn from a trainer</b>  Check out the current <a href="https://gobrik.com/#courses">Ecobrick Starter Workshop</a> course listing by certified GEA Trainers.</li>
						<li><b>Training others to make ecobricks?</b> Be sure to check out <a href="trainings">trainer of trainer program</a></li>
					</ul></h6>
		
				<h5>Need to chat about your idea or question? Join our Mattermost <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr">ecobricker community</a> and bring it up there!</h5><br><br>
		</div>
	</div>
	</div>
</div>
</div>

	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->
</div>
</body>
</html>

