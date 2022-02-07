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
				<p>The science is clear:  Plastic loose in the biosphere harms ecosystems, humans and animals.  The research is also clear:  For the last fifty years, industrial and for-profit plastic processes have accelerated plastic consumption, production and pollution while becoming a major source of global CO2 emissions.</p>
    
			</div>
			
			
			<div class="page-paragraph">
                        <p>In this way keeping plastic out of industrial re-processing is just as important as keeping plastic out of the biosphere.</p>

						<p>To acheive both, plastic sequestration follows the <a href="plastic">Earth's example of sequestering carbon to enrich the biosphere</a> and the ensuing principles of <a href="https://medium.com/earthen/the-six-earthen-ways-1b2db3d2b27">Earthen ethics</a>.  As a third-party Earth enterprise with a mandate of biosphere benefit, the <a href="about">Global Ecobrick Alliance</a>, maintains six criteria for the sequestration of plastic to ensure it is of benefit to the biosphere.  In order for plastic to be considered sequestered, it must not only meet these six criteria, it must also be independently authenticated to have done so.</p>

                        <!--<p>Just as the Earth sequestered carbon to cultivate and green the biosphere, so too can we compact, secure, cycle and store our plastic. By following the Earth’s example of biosphere benefit, consciousness raising and net-greening we can be confident of making a valuable ecological contribution.</p>

                        <p>We call this, plastic sequestration.</p>-->
							
            </div>	
			
		


			<div class="reg-content-block" id="block2">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>1. Spiral Design</h4>
                    <h5>In the same way that the Earth's processes led to cycles of spiralling ecological enrichment so too must the process of plastic sequestration.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
                </div>

                <div id="preclosed2">
                    
                    <div class="row">
                        <div class="main2">
                        <p>The Earth's process tend towards cycles of indefinite reuse.  These cycles spiral towards ever greater diversity, concentration and enrichment.  In the same way, the process of plastic sequestration, must do the same.  The products and process of plastic sequestration must also spiral towards concentration, diversity and enrichment.  This way we can be sure it is a net-green process.</p>
                        </div>
                        <div class="side2"><img src="pngs/cyclical-500px.png" width="80%">
                        </div>
                    </div>

                    <div class="row2">
                        <div class="main3">
                        <p>As such plastic sequestration is by-definiton a non-industrial process.</p>
                        </div>
                        <div class="side3"><img src="webp/cyclical-500px.png" width="120px">
                        </div>
                    </div>

                    <p>Industrial plastic plastic management methods are by definition linear and circular.  Plastic recycling, incineration and landfilling spirals plastic towards dispersion, the reduction of biodiversity and the depletion of ecosystems.</p>


                    <p>In comparison, the Earth has used carbon as a means– in a circular process.  Carbon molecules such as nucleic acids, proteins, lipids and glycans make up all organisms– and when one organism comes to an end, another begins by building itself with the other’s blocks.  This continues indefinitely, until the carbon is subsumed into long-term sequestration.</p><br>

                    <p>Putting creations into greening cycles of reuse is also know as spiral design.  In this way, when our sequestration of plastic leads to short-term creations, they must be by spiral by design– with their next life-cycle built in.</p>

                    <br><h5><a href="https://medium.com/earthen/towards-cycles-that-spiral-a2cea98b59c4">Learn more about the Earthen Ethic principle of spiral cycling.</h5></a>
                    
                </div>
                </div>

			<div class="reg-content-block" id="block3">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>2. Secured Concentration</h4>
						<h5>In the same way that the Earth sequestered carbon by concentrating, securing and storing it indefinitely, plastic sequestration must do the same.</h5><br>
					</div>
					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<div class="row">
						<div class="main2">
						<p>The Earth’s cycles steadily led to to more and more carbon being secured from all forms of solar, chemical and organic degradation.  In the same way, plastic sequestration must concentrate plastic must do the same.  Keeping plastic as plastic and securing it into long-term, indefinite and secured storage is key to its sequestration. </p>
						</div>
						<div class="side2"><img src="webp/compacted-carbon.webp" width="92%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<br><p>Keeping plastic that has already been produced as plastic as plastic is an effective way to keep its carbon from getting loose.</p>
						
						</div>
						<div class="side3"><img src="webp/compacted-carbon.webp" width="150px">
						</div>
					</div>
					
					<p>Plastic degrades quickly when it is exposed to sun, fire, oxygen and/or friction.  Its degradation is in proportion to its surface area.   As the majority of of modern plastic is in the form of thin films, when it is loose and exposed, it is prone to rapid degradation. Plastic degrades by fragmenting into smaller and smaller particles, known as micro-plastics, green house gases and toxins.</p>

                    <p>By compacting thin, high-surface area plastic, the net exposed area is reduced a thousand-fold.  The GEA has found that a reaching a density of 0.33 g/ml achieves a terminal reduction of net surface area for the majority of modern thin film plastics.  Once compacted and contained plastic is secured from degradation and can remain intact indefinitely.</p>

                    <p>To be considered plastic sequestration, the processing of plastic must achieve the minimum density of 0.33 g/ml and ensure secure, indefinite storage.</p>
                    <br><br>

                    <h5>Learn more: <a href="https://medium.com/earthen/the-oysters-example-6172c62a9a0b" target="_blank">About the Earthen principle of Concentration</a></h5>

                    <p>
				</div>
			</div>


            <div class="reg-content-block" id="block4">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>3. For-Earth Enterprise</h4>
                    <h5>In the same way that the Earth’s processes distribute benefits outwards, we must ensure that our plastic sequestration is first and foremost to benefit the biosphere.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
                </div>

                <div id="preclosed4">

                    <div class="row">
                            <div class="main2">
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

           



			<div class="reg-content-block" id="block5">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>4. Net-Subtractive</h4>
					<h5>Just as the Earth's cycles subtract more carbon from the biosphere than they add, so too must plastic Sequestration.</h5>
					<br>
					</div>

					<button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
				</div>

				<div id="preclosed5">

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


            <div class="reg-content-block" id="block6">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>5. Supporting Biodiversity</h4>
                    <h5>In the same way that the Earth’s cycles steadily increased biodiversication, so too must our process of plastic sequestration.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
                </div>

                <div id="preclosed6">

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


            <div class="reg-content-block" id="block7">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>6. Ecological Awaring</h4>
					<h5>In the same way that the Earth has cultivated ever greater ecological awareness, the enterprise of plastic sequestration must do the same through ecological impact accounting and disclosure.</h5>
					<br>
					</div>

					<button onclick="preclosed7()" class="block-toggle" id="block-toggle-show7">+</button>
				</div>

				<div id="preclosed7">   

                    <div class="row">
                            <div class="main2">
                            <p>The Earth’s management of carbon has led to consciousness that was more and more aware of its inter-connectivity.  From single-celled, to multi-celled, to bacteria ever larger organisms (like us!), the Earth has cultivated an ever more aware biosphere.  The sequestration of plastic must likewise increase our individual and collective ecological consciousness through an accounting and disclosure of the ecological impacts of the process.</p>
                            </div>
                            <div class="side2"><img src="pngs/eco-consciousness-500.png" width="90%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>In the past, industrial plastic processing distanced consumers from the ecological consequences of plastic consumption.</p>
                            </div>
                            <div class="side3"><img src="pngs/eco-consciousness-500.png" width="120px">
                            </div>
                        </div>
					
					<p>Industrial  plastic management removed consumer participation and agency in the process.  Through propaganda and the long-distance export of plastics and marketing the accumulation of plastic pollution was hidden from those consuming it. This has led to a steady increase of plastic consumption and production over the last 50 years.  By marketing itself as a solution for plastic, it has encouraged the unabated consumption of plastic.  Industrial plastic processing results in the addition of plastic to the biosphere.</p>

					<p>In contrast, plastic sequestration must be transparent, open and accountable and spread accurate information about plastic itself.  It must involve those consuming plastic and it must involve an accounting of its ecological impacts near and far.  In so doing, it must raise awareness of plastic’s story, its dangers and its connection to petro-capital economy.</p>

					<p>Only if the processing of plastic raises  individual and collective consciousness can it be considered plastic sequestration.</p>
					<br><br>
                    <h5>Learn more about <a href="https://medium.com/earthen/towards-awareness-9b2f785ce44d" target="_blank">the Earthen ethic of awarensss</h5>
			
				</div>
			</div>


     

            <div class="reg-content-block" id="block8">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Independent Authentication</h4>
                    <h5>Plastic Sequestration must be independently validated to authenticate that the above criteria have been met</h5>
                    <br>
                    </div>

                    <button onclick="preclosed8()" class="block-toggle" id="block-toggle-show8">+</button>
                </div>

                <div id="preclosed8">

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

                
                <div class="reg-content-block" id="block9">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>CO2 Equivalency</h4>
                    <h5>Plastic Sequestration also prevents the release of CO2 from plastic degradation and industrial processing.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed9()" class="block-toggle" id="block-toggle-show9">+</button>
                </div>

                <div id="preclosed9">

                    <div class="row">
                            <div class="main2">
                            <p>The 2019 report, Plastic & Climate: The Hidden Costs of a Plastic Planet concluded that <i>“the plastic pollution crisis that overwhelms our oceans is also a significant and growing threat to the Earth’s climate.”</i> The report examined the CO2 produced at various points in the life-cycle of plastic.</p>
                            </div>
                            <div class="side2"><img src="https://www.ciel.org/wp-content/uploads/2019/05/CIEL-FIG-2-Emissions-growth-summary-01.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>It examined the impact of extraction and transport, refining and manufacture, waste management and plastic in the environment.</p>
                            </div>
                            <div class="side3"><img src="https://www.ciel.org/wp-content/uploads/2019/05/CIEL-FIG-2-Emissions-growth-summary-01.png" width="120px">
                            </div>
                        </div>
                    
                    <p> The report also observed that the production and incineration of plastic will add more than 850 million metric tons of greenhouse gases to the atmosphere—equal to the emissions from 189 five- hundred-megawatt coal power plants. At present rates, these greenhouse gas emissions from the plastic lifecycle threaten the ability of the global community to meet carbon emissions targets.</p>

                    <p>In this way, plastic sequestration, by keeping plastic out of industry, has a subtractive CO2 equivalency impact.</p>

                    <ul>
					<li><a href="https://gaia.org" target="_blank">Sequestered plastic won’t be incinerated and won’t release its stored carbon</a></li>
					<li><a href="https://www.ciel.org/plasticandclimate/">Sequestered plastic won’t generate more CO2 through its processing in the recycling industry</a></li>
					<li><a href="https://www.ciel.org/plasticandclimate/">Sequestered plastic won’t photodegrade releasing CO2 and other green house gases</a></li>
					<li><a href="https://www.ciel.org/plasticandclimate/">Sequestered plastic won’t degrade into 
                        micro-plastics and interfere with zoo plankton and their work sequestering carbon in the oceans</a></li>
					<li><a href="principles">Sequestration, as a by-definition, non-capital activity, represents time not spent participating in the petro-capital economy (buying, consuming, etc) and the CO2 generation.</a></li>
					<li><a href="https://medium.com/earthen">Sequestration raises ecological consciousness and encourages the lowering of plastic consumption and its associated CO2 generation</a></li>
					<li><a href="catalyst">Sequestration accelerates plastic transition and disassociation from the petrol-capital economy and its CO2 generation.</a></li>
				</ul>

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
            <div class="page-paragraph">
                <h4>Ecobricks as Plastic Sequestration</h4>
                 <div class="row">
                    <div class="main2">
                            
                            <p>The Global Ecobrick Alliance advocates ecobricking as a means of plastic sequestration.  The ecobricking proces raises ecological consciousness to accelereate plastic transition.  Ecobricks that meet GEA standards, have compacted plastic, secured it out of industry and out of profit enterprise to put plastic on a safe millenial road. 
                            </p>
                            <p>
                            When validated as such, the plastic inside the ecobrick is referred to as authenticated ecobrik sequestered plastic (AES Plastic).</p> 
                        
                    </div>

                    <div class="side2">
                            <br><img src="webp/eb-sky-400px.webp" width="100%"></a>
                    </div>
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

