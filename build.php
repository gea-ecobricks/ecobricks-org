<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="webp/build-blue-450px.webp">
<link rel="preload" as="image" href="webp/blue-ode-750px.webp">



_END;?>

<?php require_once ("meta/build-$lang.php");?>

<?php require_once ("header.php");?>




<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 77vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
        background-color: #FA8D04;
		background: url(webp/build-banner-1400px.webp) bottom;
		
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
		
        background-color: #FA8D04;
		background: url(webp/build-banner-1400px.webp) bottom;
		
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

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #FA8D04;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}
	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">Ecobrick Applications</div>
	<div class="splash-sub">Practical & Principled Ecobrick Building.</div>
	</div>
	<div class="splash-image"><img src="webp/build-blue-450px.webp" style="width: 85%;"></div>	
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
				<p>Ecobricks can build furniture, gardens, play parks, structures and more. The only limit is our imagination!</p>
    
			</div>
			
			
			<div class="page-paragraph">
                        <p>That said, building with ecobricks, and the plastic they contain, is a big responsibility.   To make sure that our plastic is <a href="sequest">sequestered</a> for the short and the long term the Global Ecobrick Alliance recommends certain ecobrick applications and has developed guidelines and building principles to help guide safe and secure construction.</p>

                        <!--<p>By using  circular design and regenerative design principles we leverage plastic’s long lasting properties to make ecobricks indefinitely reusable and put our plastic on a safe thousand year journey out of industry and out of the biosphere.   This means, with the help of GEA guidelines, not only can you build cool stuff with ecobricks, but you can be confident your making a greening contribution to the biosphere.</p>-->
							
            </div>	
			<a name="APPROVED"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Recommended Applications</h4>
                    <h5>Ecobricks can be used for short or long term applications which balance the benefits of utility and the securing of plastic.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                <br>
                <p><b>Short-term Applications</b><p>

                <p>Silicone or inner-tube-bands can be used as short-term, non-permanent attachment methods to create ecobrick applications that last for months and up to several years. As short-term applications are not usually covered up, they are typically for indoor use, in order to prevent the UV photodegradation of the bottles.  As short term methods have less barriers to replicability, they assist the spread of the ecobrick social movement by empowering the makers.  The benefit of short-term applications are practicality, utility, replicability, social empowerment and the dissemination of ecobricking</p>

                <br><p><b>Long-term Applications</b><p>
                
                <p>Earth and Ecobrick building techniques are used to create structures that can last years or decades (it is not uncommon for traditional constructions to last centuries!).  Earth mixes (i.e Cob (material), Wattle and daub, adobe) are used to lay ecobricks horizontally and completely cover them for full protection against all forms of degradation.  The main benefit of long-term applications is plastic sequestration– fully securing plastic from all forms of degradation for the long-haul.</p>
                
                
                 
                </div>
                </div>

            <a name="STORAGE"></a>
            <div class="reg-content-block" id="block10">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Ecobrick Storage</h4>
                    <h5>Before you build with ecobricks, it is essential to store them properly.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed10()" class="block-toggle" id="block-toggle-show10">+</button>
                </div>

                <div id="preclosed10">
        <br>

            <img src="photos/eco-brick-storage-1000px.jpg" width="100%" alt="An example of an eco brick storage depot to prepare for building">

            <br>
            <p>Before you build with ecobricks, it is essential to store them properly.  Ideally, ecobricks are stored off of the ground (on a floor or raised on wood) and fully protected from the sun and the elements.  Ecobricks are best stacked horizontally with their bottom pointed outwards.  This enables you to organize your ecobricks by colour and brand– which later facilitates project planning and making.</p>

            <img src="webp/storage-banner-990px.webp" width="100%">

            

            <br>

                <h5>ℹ️ Learn more about making ecobricks properly and their storage: <a href="how">How to make an ecobrick</a></h5>

         </div>
        </div>

                
                
            <a name="MILSTEINS"></a>
			<div class="reg-content-block" id="block3">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>1. Milstein Modules</h4>
						<h5>The easiest, fastest, and perhaps the most fun ecobrick application, are Milstein Module horizontal lego.</h5><br>
					</div>
					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">

                <img src="webp/milstein-modules-750px.webp" width="100%">
        
				
					
					<p>The easiest, fastest, and perhaps the most fun ecobrick application, are Milstein Modules (MMs). These are hexagon and triangle shaped configurations of ecobricks that are used for sitting, but can be combined together to form one or two level horizontal surfaces. Applications include tables, beds, stages, etc.  All you need is 12 ecobricks to start!  Generic silicone sealant or motorcycle inner tubes can be used to make MMs . Ecobrick Milstein Modules can then slide into deployment for classes, concerts, meetings and more to make horizontal surfaces.  They can be stacked one on top of the other to add one level of vertical height.  They can be stacked and stored vertically to save space.</p>

                    
                    <hr>
                    
                    <h4>🟡 Maintenance</h4>
                    <p>Modules should be cleaned once a year.  Broken modules can be repaired with silicone.</p>
                    
                    <hr>

                    <h4>🟢 Next Life</h4>
                    <p>  Well used ecobrick Milstein Modules wil last 2-3 years.  After this time, the silicone joints began to weaken and to fail.  Ecobricks also begin to loose their lustre as the colors of the contained plastic begin to fade.  This is a good opportunity to transition them to long term building applications where they are fully protected with earth.
                    
                    <hr>
                    <h4>🔴 Caution</h4>
                    <p>For indoor use only.   The UV rays in sunlight will degrade and fade your ecobricks and weaken the bottle’s plastic.
                    <p>
                    <hr>
                    <br>
                    

                    <a class="action-btn" href="milstein">🚀 Get started with Modules!</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Check our page all about Milstein modules.</a></p>

                    
				</div>
			</div>


			<a name="2. Dieleman Modules"></a>
            <div class="reg-content-block" id="block2">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>2. Dieleman Modules</h4>
                <h5>Ecobricks can be combined into modules that can be used to build vertically and horizontally much like LEGO.</h5>
                <br>
                </div>

                <button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
            </div>

            <div id="preclosed2">
            
            <p> <p>So this is pretty cool– ecobricks can make LEGO-like blocks!  Dieleman Modules, or DMs for short, are a way to turn bottles into modular bricks that can be stacked vertically.  Sixteen ecobricks are siliconed together to make one DM module.</p>
            <img src="https://cdn.statically.io/img/www.ecobricks.org/wp-content/uploads/2019/10/Dm-modules-flat.svg" width="100%">

                <div class="row">
                    <div class="main2">
                   
                     <p>DMs interconnect just like Legos.  They stack one upon the other and enable you to make walls, towers and columns, quickly and easily without any glue or mortar.  Best Usage:  Awesome for open spaces, indoor playgrounds and building structures for concerts or fairs in minutes. Can be taken apart and stored just as fast!</p>
                    </div>
                    <div class="side2"><img src="https://www.ecobricks.org/wp-content/uploads/2019/02/46377573_1021267181367108_2012240595342327808_o-300x224.jpg" width="80%">
                    </div>
                </div>

                <div class="row2">
                    <div class="main3">
                    <p>The DMs can then be disassembled just as easily.</p>
                    </div>
                    <div class="side3"><br><img src="https://www.ecobricks.org/wp-content/uploads/2019/02/46377573_1021267181367108_2012240595342327808_o-300x224.jpg" width="120px">
                    </div>
                </div>

              
                    
                <hr>
                    
                    <h4>🟡 Maintenance</h4>
                    <p>Modules should be cleaned once a year.  Broken modules can be repaired with silicone.</p>
                    
                    <hr>

                    <h4>🟢 Next Life</h4>
                    <p>  Well-used DMs wil last 2-3 years.  After this time, the silicone joints began to weaken and to fail.  Ecobricks also begin to loose their lustre as the colors of the contained plastic begin to fade.  This is a good opportunity to transition them to long term building applications where they are fully protected with earth.
                    
                    <hr>
                    <h4>🔴 Caution</h4>
                    <p>For indoor use only.  The UV rays in sunlight will degrade and fade your DMs and weaken the ecobrick's plastic.
                    <p>
                    <hr>
                    <br>
                    

                    <a class="action-btn" href="dms">🚀 Get started with Modules!</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Check our page all about Dieleman modules.</a></p>

            </div>
            </div>

            <a name="EARTHEN"></a>
            <div class="reg-content-block" id="block4">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>3. Earth Modules</h4>
                    <h5>Use the basic principles of Earth and Ecobrick Building to make outdoor stools, coffee tables and more with your ecobricks.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
                </div>

                <div id="preclosed4">

                <img src="https://cdn.ecobricks.org/wp-content/uploads/2021/01/Ashims-Module.png" width=100%">

                <p>Use the basic principles of Earth and Ecobrick Building to make outdoor stools, coffee tables and more with your ecobricks.  These modules are an ideal place to start to learn the basics of Earth building.  We use their construction in GEA Builder courses as a simple, non-structural start to the fundamental earth building techniques.</p>
                    <br><hr>

                    <h5>🌍 Learn more: <a href="earth" target="_blank">Earth & Ecobrick Building</a></h5>


                </div>
                </div>

           


            <a name="OPENSPACES"></a>
			<div class="reg-content-block" id="block5">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Modular Open Spaces</h4>
					<h5>Ecobrick Open Spaces are for community that have completed thousands of high quality ecobricks with consistent bottle sizes and brands. </h5>
					<br>
					</div>

					<button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
				</div>

				<div id="preclosed5">

                    <img src="https://www.ecobricks.org/wp-content/uploads/2019/10/48389253_10217573596633499_5321135820256575488_n.jpg" width="100%">

                    <div class="row">
                            <div class="main2">
                            <p>Ecobrick Open Spaces are for community that have completed thousands of high quality ecobricks with consistent bottle sizes and brands.  These ecobricks can then be combined into an assortment of Milstein and Dieleman modules to create a diverse set of several hundred modules.   These modules can then be deployed for confernces, exhibtions, fairs and other special events to create customized interactive spaces.   These spaces can either be setup in advance or invite participants to interact, play and create their own space.  </p>
                            </div>
                            <div class="side2"><img src="https://www.ecobricks.org/en/webp/openspace.webp" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Ecobrick communities that have amassed Open Space sets often rent out to events and venues to show case ecobrick modular technology and regenerative principles.</p>
                            </div>
                            <div class="side3"><br><img src="https://www.ecobricks.org/en/webp/openspace.webp" width="120px">
                            </div>
                        </div>
					
					
					<br><hr>

                

                    <h5>🌍 Learn more: <a href="openspace" target="_blank">Ecobrick Open Spaces</a></h5>

                  
			
				</div>
			</div>

            <a name="MORE"></a>
            <div class="reg-content-block" id="block6">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>And more ideas!</h4>
                    <h5>People around the world are building all sorts of great and unique things with their ecobricks!</h5>
                    <br>
                    </div>

                    <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
                </div>

                <div id="preclosed6">

                <p><b>In the same way that the Earth’s process steadily increased biodiversication, so too must our process of plastic sequestration.</b></p>

                    <div class="row">
                            <div class="main2">
                            <p>The Earth’s use of carbon enabled life to flourish and diversify. Likewise, the short-term use of sequestered plastic must be such that it supports life in the short term and enables biodiversity in the long-term.</p>
                            </div>
                            <div class="side2"><img src="webp/biodiversity-500px.webp" width="85%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>The outputs of plastic sequestration must be intended for applications that support biodiversity.</p>
                            </div>
                            <div class="side3"><br><img src="webp/biodiversity-500px.webp" width="120px">
                            </div>
                        </div>
                    
                    <p>When sequestration leads to short-term building blocks, these can be used in the creation of green spaces,  gardens and food-forest and the decontamination of plastic polluted areas.Critically, the plastic blocks must be used in such a way that they do not degrade or contaminate and thus impede life.</p>

                    <p>In the long-term sequestered plastic must be entirely protected from all forms of degradation (heat, light, friction, oxygen and micro-organism) so that it also does not contaminate and harm life and its diversity.</p>

                    <p>In contrast industrial plastic processing relies on factories, facilities and dump sites that occupy the spaces of what were once fields and forests.  These spaces can no longer support the surrounding ecology and result in a net decrease in biodiversity.</p>

                    <br>
                    <p><b>Plastic Transition Standards</b><p>
                    <p>Outputs of plastic sequestration must be designed for applications that demonstrably support life and its diversification.  Plastic sequestration enterprises must track and disclose their net-impact on local biodiversity.</p>
                    
                    <br><hr>
                    <h5>🌍 Learn more:<a href="https://medium.com/earthen/the-ethic-of-biodiversity-b5b600bc4a70" target="_blank">The Earthen Principle of Diversification</a></h5>

                </div>
               
            </div>

            <a name="MAINTENANCE"></a>
            <div class="reg-content-block" id="block7">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Maintenance</h4>
					<h5>It is important not to forget our responsibility when building with plastic.</h5>
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
                            <div class="side3"><br><img src="webp/ecological-consciousness-500px.webp" width="120px">
                            </div>
                        </div>
					
					<p>Industrial plastic management removes consumer participation and agency in the process.  Through long-distance export, the ecological impact of plastic processing is hidden from consumers. By purporting to have a plastic solution, industry has encouraged the unabated consumption of plastic.  This has led to a steady increase of plastic consumption, production and pollution over the last 50 years.</p>

					<p>Plastic sequestration must be transparent, open and accountable.  Plastic sequestration must return accurate data to those consuming plastic through an accounting of its ecological impacts near and far.</p>

					<p>Only if the process raises individual and collective awareness can it be considered plastic sequestration.</p>
                    <br>
                    <p><b>Plastic Transition Standards</b><p>
                    <p>The enterprise of plastic sequestration must track and publically disclose in carbon, plastic and biodiversity impacts.</p>
					<br><hr>
                    
                    <h5>🌍 Learn more: <a href="https://medium.com/earthen/towards-awareness-9b2f785ce44d" target="_blank">The Earthen Ethic of Awareness</a></h5>
			
				</div>
			</div>


             <br>
             <div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h4>A Safe Road into Time</h4>
                        
                        <p>By putting ecobricks to use in ways that follow the criteria of plastic sequestration, our goal is to put our plastic on a safe road through time.  Because plastic can last for so long, its important to plan far into the future and put plastic on a safe and secure road through time.</p>
                        <b><p>End of Life Agreements</p></b>
                        <p>The Global Ecobrick Alliance recommends that in community and commercial ecobrick builds (in particular using earthen construction) that end-of-life agreements be established.  These agreements plan for the end of the construction and the removal, responsibility and resuse of the ecobricks.</p>
                        <p><a href="">See a sample, free use, agreement here.</a>
                    </div></p>

                    <div class="side2">
                        <br><img src="webp/road-500px.webp" width="100%" alt="eco brick road into the distance">
                    </div>
                </div>
            </div>
            


        </div>
	

		<div class="side">
	
			<div id="side-module-desktop-mobile">
				<img src="svgs/circle-bench.svg" width="100%">
				<br><h4>Following the Earth's Example</h4>
				<h5>Plastic Sequestration follows the Earth’s example.  Learn about the ancient history of this modern methodology.</h5><br>
				<a class="module-btn" href="about">Plastic's Long Story</a>
                <br>
			</div>  
            <div id="side-module-desktop-mobile">
                <img src="webp/tens-thousands.webp" width="100%">
                <h4>Ecobricks</h4>
                <h5>The GEA advocates ecobricking as a means to sequester plastic.  Only ecobricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
                <a class="module-btn" href="catalyst">🚀 Learn More</a>
            </div>

			<div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%">
				<h4>Plastic Transition</h4>
				<h5>Ecobrick building is a transition technology. Rather than see plastic as ‘waste’ we see it as a building block for our green visions.</h5><br>
				<a class="module-btn" href="transition">Learn More</a>
			</div>

			

            <div id="side-module-desktop-mobile">
				<img src="webp/circular.webp" width="80%">
				<h4>Spiral Design</h4>
				<h5>Plastic Sequestration follows the principles of cyclical spiral design.</h5><br>
				<a class="module-btn" href="circular">Learn More</a>
			</div>

		

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->

	


<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js?v2" defer></script> 

</div>
</body>
</html>

