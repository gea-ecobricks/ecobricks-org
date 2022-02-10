<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/eb-blue.svg">

_END;?>

<?php require_once ("meta/sequest-$lang.php");?>

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js?v1"></script> 


<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		background: url(svgs/BlUE-ode-to-plastic-Sequestration.svg) bottom;
		/*background-color: #8BBAF0;*/
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
		background: url(svgs/BlUE-ode-to-plastic-Sequestration.svg) bottom;
		/*background-color: #fff;*/
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin-top: 0px;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;
  flex: 25%;
  width: 250px;
	padding: 0px;
	box-sizing: border-box;
	margin: 0px 0px 0px 10px;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
  flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



.splash-heading { 
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
    font-family: Arvo, serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 3.3em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.1em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:100px;	
	
	position: relative;
	z-index: 0;

/*    box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #fff;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);*/

	margin-bottom: -50px;

}


	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">Plastic Sequestration</div>
	<div class="splash-sub">By following the Earth’s example with our plastic we can make a green contribution to the biosphere.</div>
	</div>
	<div class="splash-image"><img src="webp/earth-floating-500px.webp" style="width: 70%;"></div>	
</div>
<div id="splash-bar"></div>
<!--<div id="header-bar2"></div>-->


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				<p>The science is clear:  Plastic loose in the biosphere harms ecosystems, humans and animals.  The research is also clear:  For the last fifty years, industrial processing has dispersed plastic into the environment while becoming a major source of carbon emissions.</p>
    
			</div>
			
			
			<div class="page-paragraph">
                        <p>It has never been more important to take care of our plastic.  Plastic sequestration provides a principled alternative to industrial plastic management.  Following the <a href="plastic">Earth's example of carbon sequestration</a>, we have a proven methodology to not only secure our plastic out of the biosphere and out of industry, but also to accelerate our <a href="transition">plastic transition</a>.  </p>

                        <!--<p>
                            
                        In this way keeping plastic out of industrial re-processing is just as important as keeping plastic out of the biosphere.</p>

						<p>To acheive both, plastic sequestration follows the <a href="plastic">Earth's example of sequestering carbon to enrich the biosphere</a> and the ensuing principles of <a href="https://medium.com/earthen/the-six-earthen-ways-1b2db3d2b27">Earthen ethics</a>.  As a third-party Earth enterprise with a mandate of biosphere benefit, the <a href="about">Global Ecobrick Alliance</a>, maintains six criteria for the sequestration of plastic to ensure it is of benefit to the biosphere.  In order for plastic to be considered sequestered, it must not only meet these six criteria, it must also be independently authenticated to have done so.
                        
                        Just as the Earth sequestered carbon to cultivate and green the biosphere, so too can we compact, secure, cycle and store our plastic for the short and long-term. By following the Earth’s example we can be confident our enterprise of plastic management is making a valuable ecological contribution.</p>

                        <p>We call this, plastic sequestration.</p>-->
							
            </div>	
			<a name="THEORY"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Theory & Science</h4>
                    <h5>The goal of plastic sequestration is to follow the Earth's example of carbon sequestration as an ecological service.  This means preventing the degradation of plastic, the emissions and dispersal of industry in a way that is net-green.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                
                

                <p>Plastic degradation occurs physically (such as cracking, embrittlement, and flaking) and chemically (such as leaching).  Emissions and dispersal occur when plastic is industrially processed through recycling, incineration and land-filling.  In order to prevent these outcomes, plastic sequestration diverts plastic from industry and prevents the chemical and physical degration of plastic from the effects of light, heat, acids, friction, microbial action etc.</p>
                <br>
                <p><b>1. Preventing Degradation</b><p>
                <p>Plastic polymer degradation occurs on the exposed surface are of plastic.  Consequently, the rate of degradation is directly proportional to the amount of surface area exposed. Research indicates that that a thin film of HDPE plastic (which has a very large surface area) can degrade 1100 times faster than a bead of plastic of the same weight (very small surface area). </p>
                <p>By decreasing net surface area, the lifetime of collected plastic can be extended significantly (research shows thin film of plastic will <a href="https://pubs.acs.org/doi/10.1021/acssuschemeng.9b06635">degrade in 1.8 ± 0.4 years a bead of plastic will endure for 2000 ± 400 years</a>, in the same conditions..  By further removing exposure to all forms of chemical and physical degration through appropriate applications, plastic can remain intact indefinitely.</p>

                <br><p><b>2. Preventing Industrial Emissions</b><p>
                
                <p>Plastic that enters into industry results in a wide range of energy intensive activities from transportation, to smelting, to re-molding. The 2019 report, Plastic & Climate: The Hidden Costs of a Plastic Planet concluded that  the CO2 produced at various points in the life-cycle of plastic and concluded that the plastic industry will add more than 850 million metric tons of greenhouse gases to the atmosphere—equal to the emissions from 189 five- hundred-megawatt coal power plants.</p>
                
                <p>The goal of plastic sequestration is to prevent these emissions.</p>
                    
                <br><p><b>3. Preventing Industrial Plastic Dispersion</b></p>
                <p>Plastic that enters into industry is inevitably dispersed around the globe.  Research shows that of all the plastic generated since 1950, the industrial processing of plastic has dispersed <a href="https://www.science.org/doi/10.1126/sciadv.1700782">91% of all plastic into the biosphere</a>. There it is subject to the chemical and physical degradation pathways mentioned above.</p>
                
                <p>The goal of plastic sequestration is to prevent this dispersion.</p>

                <br><p><b>4. Preventing Ecological Disruption</b></p>
                <p>Plastic once loose in the biosphere has been shown to interfere with ecological cycles.  This can impede the ability of <a href="https://www.nature.com/articles/s41467-021-22554-w">phytoplankton to circulate oxygen</a> and <a href="https://www.theguardian.com/environment/2016/jun/02/microplastics-killing-fish-before-they-reach-reproductive-age-study-finds">disrupt fish reproduction</a>, and more.</p>
                <p>The goal of plastic sequestration is to prevents these disruptions.</p>

                <br><p><b>5. Net-Green Ecological Service</b><p>

                <p>Research has shown that covering plastic in earth is an effective method of preventing abiotic plastic degradation (i.e. preventing exposure to sunlight, friction, heat, etc.). Even plastic that is designed to degrade, when it is buried in low-oxygen soil, abiotic and biotic are prevented. Research also shows that submerging plastic in inert soil (minimal bacteria, micro-organisms) can further slow plastic.</p>

                <p>The Earth's billion year <a href="plastic">process of carbon sequestration</a> helped greened the planet.  To ensure that our process of plastic sequestration does the same, we follow <a href="">the six principles of the Earth's example</a>.  This way we can be sure that plastic sequestration is in fact an ecological contribution.</p>
                
                 
                </div>
                </div>

        <br>
        <div class="page-paragraph">
        <h3>Criteria & Standards</h3></div>
            <p>
            The <a href="about">Global Ecobrick Alliance</a>, as a third-party Earth enterprise with a mandate of biosphere benefit, , has developed a system of criteria and standards for the sequestration of plastic. Our criteria provide a guide to enterprises wishing to develope their own methodology or technology for plastic sequestration.  Our standards assists enterprises already sequestering plastic to ensure their outputs are of the highest quality-- and an ecological service.  In order for plastic to be considered sequestered, it must not only meet these six criteria and their respective standards, it must also be independently authenticated to have done so.</p>
        

                
                
            <a name="CONCEN"></a>
			<div class="reg-content-block" id="block3">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>1. Secured Concentration</h4>
						<h5>The process of plastic degradation must secure plastic from industrial processing and from all forms of chemical and physical degradation.</h5><br>
					</div>
					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">

                <p><b>In the same way that the Earth sequestered carbon by concentrating, securing and storing it indefinitely, plastic sequestration must do the same.</b></p>

					<div class="row">
						<div class="main2">
						
                        <p>The Earth’s cycles steadily led to to more and more carbon being secured from all forms of solar, chemical and organic degradation.  In the same way, plastic sequestration must concentrate plastic must do the same.  Keeping plastic as plastic and securing it into long-term, indefinite and secured storage is key to its sequestration. </p>
						</div>
						<div class="side2"><img src="webp/compacted-carbon.webp" width="92%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>Keeping plastic that has already been produced as plastic as plastic is an effective way to keep its carbon from getting loose.</p>
						
						</div>
						<div class="side3"><img src="webp/compacted-carbon.webp" width="150px">
						</div>
					</div>
					
					<p>Plastic degrades quickly when it is exposed to sun, fire, oxygen and/or friction.  Its degradation is in proportion to its surface area.   As the majority of of modern plastic is in the form of thin films, when it is loose and exposed, it is prone to rapid degradation. Plastic degrades by fragmenting into smaller and smaller particles, known as micro-plastics, green house gases and toxins.</p>

                    <p>By compacting thin, high-surface area plastic, the net exposed area is reduced a thousand-fold.  The GEA has found that a reaching a density of 0.33 g/ml achieves a terminal reduction of net surface area for the majority of modern thin film plastics.  Once compacted and contained plastic is secured from degradation and can remain intact indefinitely.</p>

                    <p><b>Sequestration Standard</b></p>
                    <p>To be considered plastic sequestration, the processing of plastic must achieve the minimum density of 0.33 g/ml and ensure secure, indefinite storage.</p>
                    <br><hr>

                    <h5>Learn more: <a href="https://medium.com/earthen/the-oysters-example-6172c62a9a0b" target="_blank">About the Earthen principle of Concentration</a></h5>

                    <p>
				</div>
			</div>


			<a name="SPIRAL"></a>
            <div class="reg-content-block" id="block2">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>1. Spiral Design</h4>
                <h5>The outputs of plastic sequestration must be reusable indefinitely, while tending towards earthen immersion and overall net-green impact.</h5>
                <br>
                </div>

                <button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
            </div>

            <div id="preclosed2">
                
                <div class="row">
                    <div class="main2">
                    <p><b>In the same way that the Earth's processes led to cycles of spiralling ecological enrichment so too must the process of plastic sequestration.</b></p>
                    <p>The Earth's process tend towards cycles of indefinite reuse.  These cycles spiral towards ever greater diversity, concentration and enrichment.  In the same way, the process of plastic sequestration, must do the same.  The products and process of plastic sequestration must also spiral towards concentration, diversity and enrichment.  This way we can be sure it is a net-green process.</p>
                    </div>
                    <div class="side2"><img src="webp/spiral-design-381px.webp" width="80%">
                    </div>
                </div>

                <div class="row2">
                    <div class="main3">
                    <p>As such plastic sequestration is by-definiton a non-industrial process.</p>
                    </div>
                    <div class="side3"><img src="webp/spiral-design-381px.webp" width="120px">
                    </div>
                </div>

                <p>Industrial plastic plastic management methods are by definition linear and circular.  Plastic recycling, incineration and landfilling spirals plastic towards dispersion, the reduction of biodiversity and the depletion of ecosystems.</p>


                <p>In comparison, the Earth has used carbon as a means– in a circular process.  Carbon molecules such as nucleic acids, proteins, lipids and glycans make up all organisms– and when one organism comes to an end, another begins by building itself with the other’s blocks.  This continues indefinitely, until the carbon is subsumed into long-term sequestration.</p><br>

                <p>Putting creations into greening cycles of reuse is also know as spiral design.  In this way, when our sequestration of plastic leads to short-term creations, they must be by spiral by design– with their next life-cycle built in.</p>

                <br><h5><a href="https://medium.com/earthen/towards-cycles-that-spiral-a2cea98b59c4">Learn more about the Earthen Ethic principle of spiral cycling.</h5></a>
                
            </div>
            </div>

            <a name="FOR-EARTH"></a>
            <div class="reg-content-block" id="block4">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>3. For-Earth Enterprise</h4>
                    <h5>The process of plastic sequestration must be firstly a not-for-profit enterprise with the priority of Earth service (as opposed to for-profit enterprise).</h5>
                    <br>
                    </div>

                    <button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
                </div>

                <div id="preclosed4">

                    <div class="row">
                            <div class="main2">
                            <p></b>In the same way that the Earth’s processes distribute benefits outwards, we must ensure that our plastic sequestration is first and foremost to benefit the biosphere.</p></b>
                            <p>At all levels of the biosphere, we can see that its many parts contributing upwards to the benefit of the whole.   In the way the cells of a leaf, the leaves of a tree, and the trees of a forests always work to the enrichment of the whole, the Earth’s ecosystems have steadily enriched the whole biosphere. In the same way, to be an ecological contribution, the enterprise of plastic sequestration must be first-and-foremost be for the benefit of the biosphere.</p>
                            </div>
                            <div class="side2"><img src="webp/for-earth500px.webp" width="95%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Industrial methods of plastic processing are driven by for-profit enterprise.</p>
                            </div>
                            <div class="side3"><img src="webp/for-earth500px.webp" width="120px">
                            </div>
                        </div>
                    
                    <p>In for-profit enterprise, profit has priority over all other intentions, and spirals benefits downward towards owners and shareholder.  This is contrary to the geometry of the Earth's ecological systems.</p>

                    <p>While industrial systems may have the best intentions, they operate within the petro-capital economy.  As such they are constrained to its forces. Industrial methods are driven by profit to recover the recover the capital-value of plastic. Once this value is exhausted, plastic is cycled out of industry to the biosphere.</p>

                    <p>As such, the enterprise of plastic sequestration must be must be not-for-profit and for the biosphere’s benefit.</p>
                    <br>

                    <h5>Learn more about the <a href="https://medium.com/@russellmaier/the-salmon-its-sharing-of-surpluses-a4f981978360" taret=_blank">Earthen principle of biosphere benefit.</a></h5>

                </div>
                </div>

           


            <a name="NET-SUB"></a>
			<div class="reg-content-block" id="block5">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>4. Net-Subtractive</h4>
					<h5>The process of plastic sequestration must result in the subtraction of more carbon and more plastic from the biosphere than it adds through emissions and replacement (as opposed to net-additive or zero-waste industry).</h5>
					<br>
					</div>

					<button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
				</div>

				<div id="preclosed5">

                    <p><b>Just as the Earth's cycles subtract more carbon from the biosphere than they add, so too must plastic Sequestration.</b></b>

                    <div class="row">
                            <div class="main2">
                            <p>The net result of the Earth's cycles has been the subtraction of more carbon from the atmosphere than was added back into it.  The steady sequestration of carbon led over time to the greening of the biosphere.   In the same way, plastic sequestration must subtract more carbon into secure storage than it adds back out.</p>
                            </div>
                            <div class="side2"><img src="icons/balance-glow-500px.webp" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>The processing of plastic within industry (recycling, incineration, dumping, etc.) results in the net-addition of significant carbon into the atmosphere.</p>
                            </div>
                            <div class="side3"><img src="icons/balance-glow-500px.webp" width="120px">
                            </div>
                        </div>
					
					
					<p>In this way, plastic sequestration must account for its various additive (grey) and subtractive (green) ecological impacts and it must show that the net result of the process is the subtraction of plastic and CO2 from the biosphere.  Only when it is net-subtractive can it be considered plastic sequestration.</p>

                    <br><br>
					<h5>Learn more about <a href="https://russellmaier.medium.com/towards-subtraction-1c76bc486fd0" target="_blank">the Earthern principle of net-subtraction</a></h5>
					<br>
			
				</div>
			</div>

            <a name="BIODIVERSITY"></a>
            <div class="reg-content-block" id="block6">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>5. Supporting Biodiversity</h4>
                    <h5>The process and outputs of plastic sequestration must support biodiversity (as opposed to large and contaminating processing, storage and dumping facilities).</h5>
                    <br>
                    </div>

                    <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
                </div>

                <div id="preclosed6">

                <p></b>In the same way that the Earth’s cycles steadily increased biodiversication, so too must our process of plastic sequestration.</b></p>

                    <div class="row">
                            <div class="main2">
                            <p>The Earth’s use of carbon enabled not just the building blocks of life, but also through sequestration, the stabilization of the planet’s climate so that even more life could emerge.</p>
                            </div>
                            <div class="side2"><img src="webp/biodiversity-500px.webp" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Likewise, the short-term use of sequestered plastic must be such that it supports life in the short term and enables biodiversity in the long-term.</p>
                            </div>
                            <div class="side3"><img src="webp/biodiversity-500px.webp" width="120px">
                            </div>
                        </div>
                    
                    <p>When sequestration leads to short-term building blocks, these can be used in the creation of green spaces,  gardens and food-forest and the decontamination of plastic polluted areas.  Critically, the plastic blocks must be used in such a way that they do not degrade or contaminate and thus impede life.</p>

                    <p>In the long-term sequestered plastic must be entirely protected from all forms of degradation (heat, light, friction, oxygen and micro-organism) so that it also does not contaminate or leach and impact life.</p>

                    <p>In contrast industrial plastic processing relies on factories, facilities and dump sites that occupy the spaces of what were once fields and forests.  These spaces can no longer support the surrounding ecology and result in a net decrease in biodiversity.</p>

                    <p>Only if the process and its short and long-term result support of existing biodiversity and promote increases in diversity can it be considered plastic sequestration.</p>
                    
                    <br><br>
                    <h5>Learn more about <a href="https://medium.com/earthen/the-ethic-of-biodiversity-b5b600bc4a70" target="_blank">the Earthen Ethic of diversification</a></h5>

                </div>
               
            </div>

            <a name="AWARING"></a>
            <div class="reg-content-block" id="block7">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>6. Ecological Awaring</h4>
					<h5>The process of plastic sequestration must track its plastic, carbon and biodiversity impacts and publicly disclose them so as to aware all those involved of its net ecological impacts.</h5>
					<br>
					</div>

					<button onclick="preclosed7()" class="block-toggle" id="block-toggle-show7">+</button>
				</div>

				<div id="preclosed7">   

                <p><b>In the same way that the Earth has cultivated ever greater ecological awareness, the enterprise of plastic sequestration must do the same through ecological impact accounting and disclosure.</b></p>

                    <div class="row">
                            <div class="main2">
                            <p>The Earth’s cycles lead to the an ever increasing awareness of those impacted in an ecosystem.  Plastic sequestration must likewise increase our awareness through an accounting and disclosure of the ecological impacts of the process.</p>
                            </div>
                            <div class="side2"><img src="webp/ecological-consciousness-500px.webp" width="90%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>In the past, industrial plastic processing distanced consumers from the ecological consequences of plastic consumption.</p>
                            </div>
                            <div class="side3"><img src="webp/ecological-consciousness-500px.webp" width="120px">
                            </div>
                        </div>
					
					<p>Industrial  plastic management removed consumer participation and agency in the process.  Through long-distance export, the ecological impact of plastic processing was hidden from plastic consumer. By purporting to have solve plastic, industry encouraged the unabated consumption of plastic.  This led to a steady increase of plastic consumption, production and pollution over the last 50 years.</p>

					<p>Plastic sequestration must be transparent, open and accountable.  Plastic sequestration must return accurate data to those consuming plastic through an accounting of its ecological impacts near and far.</p>

					<p>Only if the process raises individual and collective awareness can it be considered plastic sequestration.</p>
					<br><br>
                    <h5>Learn more about <a href="https://medium.com/earthen/towards-awareness-9b2f785ce44d" target="_blank">the Earthen ethic of awareness</a></h5>
			
				</div>
			</div>


     
            <a name="AUTHEN"></a>
            <div class="reg-content-block" id="block8">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Independent Authentication</h4>
                    <h5>The fulfillment of the above criteria must be independently verified by a not-for-profit, for-Earth third party who does not benefit from the process.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed8()" class="block-toggle" id="block-toggle-show8">+</button>
                </div>

                <div id="preclosed8">
                    <p><b>Plastic Sequestration must be independently validated to authenticate that the above criteria have been met.</b></p>
                    <div class="row">
                            <div class="main2">
                            <p>The way that plastic is processed can either harm or benefit the biosphere for centuries.  The resulting mass of plastic is either of ecological value– or not. Because the stakes are high, efforts at plastic sequestration must be reviewed to make sure that standards and the criteria above are met.</p>
                            </div>
                            <div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/confirmedexchange.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Through independent, not-for-profit review, set amounts of plastic can then be determined to sequestered (or not).</p>
                            </div>
                            <div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/confirmedexchange.png" width="120px">
                            </div>
                        </div>
                    
                    <p>In this way, authenticated sequestered plastic can then be quantified.  Sequestered plastic can then be referred to with confidence in terms of net weight (i.e. X kg of authenticated sequestered plastic).</p>

                    <p>Just like the process of plastic sequestration itself, the process of authentication must also be not-for-profit, net-greening and driven by biosphere benefit.    Only then can the mass be considered authenticated sequestered plastic.</p>

                </div>
                </div>

            


             <br>
             <div class="page-paragraph">
                 <h4>A Safe Road into Time</h4>

                 <div class="row">
                
                      <div class="main2">
                    
                        
                        <p>By following the criteria of plastic sequestration we are putting our plastic on a safe road through time that avoids the pittfalls of degradation and industry.  Because plastic can last for so long, its important to plan far into the future–  what we call putting plastic on a safe millennial road.</p>

                        <p>If we can do this, then the chances are it will be safe for even longer and a gift for a future age.</p> 

                    </div>	

                    <div class="side2">
                        <br><img src="webp/road-500px.webp" width="100%" alt="eco brick road into the distance">
                    </div>
                </div>
            </div>
            <br>
           
                <a name="CO2"></a>
                <div class="reg-content-block" id="block9">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>CO2 Equivalency</h4>
                    <h5>Plastic Sequestration prevents the release of CO2 from plastic degradation and industrial processing in way that can be calculated and quantified.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed9()" class="block-toggle" id="block-toggle-show9">+</button>
                </div>

                <div id="preclosed9">

                    
                
                <p> According to CIEL's 2019 report <i>Plastic & Climate: The Hidden Costs of a Plastic Planet</i> the production and incineration of plastic will add more than 850 million metric tons of greenhouse gases to the atmosphere—equal to the emissions from 189 five- hundred-megawatt coal power plants. At present rates, these greenhouse gas emissions from the plastic lifecycle threaten the ability of the global community to meet carbon emissions targets.</p>


                <br><p><b>Preventing Industrial Emissions & Dispersion</b><p>
                <p>Plastic that enters into industry results in a wide range of energy intensive activities from transportation, to smelting, to re-molding.  On average globally, each metric ton of plastic processed by recycling, land-filing and incineration <a href="coefficients.php#co2">generates 689kg, 65Kg and 2967kg of CO2e respectively</a>.  This can be prevented by plastic sequestration.<!--Given that on average globally 18% of plastics are recycled, 24% are incinerated and the remaining 58% are landfilled or directly reach the envioronment, on average each 1kg of industrially managed plastic results in-->

                <br><p><b>Accelerating Plastic Transtion</b><p>
                <p>All plastic disposal methods, result in the production of replacement plastic.  Once plastic is used and dispose, more must be made to replace the product or packaging that was just consumed.  Within traditional industrial disposal of plastic for every 1kg of plastic disposed, 0.91kg of plastic can be estimated to replace it.  In other words, industrial disposal has a 91% replacement rate.  Each replacement cycle results in the carbon emissions of the virgin plastic produced to replace it, the emissions of its disposal, replacement, disposal and so on, echoing through time until the original amount has been fully subsumed.</p>
                <p>In comparison, various plastic sequestration methodes result in different replacement rates.  The research of the Global Ecobrick Alliance estimates that a regular ecobrick has a replacement rate of 61%, cigbricks have a 75% replacement rate, and ocean ecobricks of 80%.  These methods still result in the production of virgin plastic, but not as much as before-- and without the carbon emissions of dispoal.</p>
                <p>Using the replacement rate of a particular method of plastic sequestration, the equivalent amount of carbon emissions prevented from industrial processing can be calculated for each kilogram of plastic that is authenticated as sequestered.</p>
                
                

                </div>
             </div>



            <br>
            <div class="page-paragraph">
            <h4>Is sequestration a final solution for plastic?</h4>
    
                <div class="row">
                    
                    <div class="main2">
                            
                            <p>In the cyclical systems of the biosphere, there’s never such thing as ‘final’.</p>

                            <p>Ecological cycles can be very short and they can be very long.   The Earth’s sequestration is an example of the latter– measured in billions of years.   By sequestering our carbon/plastic into long-term storage we’re putting it on another spin in this cycle.  In the same way the carbon was a gift to our age, we can gift our carbon to another. </p>

                            <p>Although we don’t know how it will be used, we do know that it makes a better gift for the future compacted and concentrated than scattered and loose in the biosphere.</p>
                     </div>

                    <div class="side2">
                        <br><img src="webp/ayyew.webp" width="100%"></a>
                    </div>
                </div>	
            
            </div>
        </div>
	

		<div class="side">
	
			<div id="side-module-desktop-mobile">
				<img src="webp/earthen-story-400px.webp" width="90%">
				<br><h4>Following the Earth's Example</h4>
				<h5>Plastic Sequestration follows the Earth’s example.  Learn about the ancient history of this modern methodology.</h5><br>
				<a class="module-btn" href="about">Plastic's Long Story</a>
                <br>
			</div>  

			<div id="side-module-desktop-mobile">
				<img src="webp/tens-thousands.webp" width="80%">
				<h4>Regenerative</h4>
				<h5>Plastic sequestration is a regeneartive technologiy. This means that rather than see plastic as ‘waste’ we can see it as opportunity to move towards greener ecological harmony.</h5><br>
				<a class="module-btn" href="about">About Ayyew</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/build-blue-450px.webp" width="80%">
				<h4>Ecobricks</h4>
				<h5>The GEA advocates ecobricking as a means to sequester plastic.  Only ecobricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
				<a class="module-btn" href="catalyst">🚀 Learn More</a>
			</div>

            <div id="side-module-desktop-mobile">
				<img src="webp/earthen-500px.webp" width="80%">
				<h4>Earthen Ethics</h4>
				<h5>Plastic Sequestration is based on following the Earth's example of ecological enrichment. The philosophy of Earthen Ethics.</h5><br>
				<a class="module-btn" href="https://medium.com/earthen/the-six-earthen-ways-1b2db3d2b27">Learn More</a>
			</div>

		

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->

	<!-- Localise translation script-->

<script src="https://global.localizecdn.com/localize.js"></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: '911e632bfc957',
    rememberLanguage: true,
  });
</script>

</div>
</body>
</html>

