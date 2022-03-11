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
		height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(webp/build-banner-1400px.webp) bottom;
        background-color: #FA8D04;
		
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
		
        
		background: url(webp/build-banner-1400px.webp) bottom;
        background-color: #FA8D04;
		
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
      font-size: 3.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4em;
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
		font-size: 1.9em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:80px;	
	
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
                        <p>That said, building with ecobricks, and the plastic they contain, is a big responsibility.   To make sure that our plastic is safe and <a href="sequest">sequestered</a> the Global Ecobrick Alliance has developed building recommendations, standards and principles principles to ensure your ecobrick applications are great over the short-term and the long.</p>

                        <!--<p>By using  circular design and regenerative design principles we leverage plastic’s long lasting properties to make ecobricks indefinitely reusable and put our plastic on a safe thousand year journey out of industry and out of the biosphere.   This means, with the help of GEA guidelines, not only can you build cool stuff with ecobricks, but you can be confident your making a greening contribution to the biosphere.</p>-->
							
            </div>	
			<a name="APPROVED"></a>
            <div class="reg-content-block" id="block1">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Thinking Short and Long</h4>
                    <h5>Ecobricks can be used for short or long term applications which balance the benefits of utility and the securing of plastic.</h5>   
                    <br>
                    </div>

                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

                <div id="preclosed1">

                <br>
                <p><b>Short-term Applications</b><p>

                <p>Silicone or inner-tube-bands can be used as short-term, non-permanent attachment methods to create ecobrick applications that last for months and up to several years.</p>
                <p> As short-term applications are not usually covered up, they are typically for indoor use, in order to prevent the UV photodegradation of the bottles.  Short term application are easier for people to make and accelerate the <a href="/mandalas">mandalic spread</a> of ecobricking. </p>

                <br><p><b>Long-term Applications</b><p>
                
                <p>Earth and Ecobrick building techniques are used to create structures that can last years or decades (it is not uncommon for traditional constructions to last centuries!).  Earth mixes (i.e Cob (material), Wattle and daub, adobe) are used to lay ecobricks horizontally and completely cover them for full protection against all forms of degradation.</p>
                <p>The main benefit of long-term applications is plastic sequestration– fully securing plastic from all forms of degradation for the long-haul.</p>
                
                
                 
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

            <img src="photos/eco-brick-storage-1000px.jpg" width="100%" alt="An example of an eco brick storage depot to prepare for building" loading="lazy">

            <br>
            <p>Before you build with ecobricks, it is essential to store them properly.  Ideally, ecobricks are stored off of the ground (on a floor or raised on wood) and fully protected from the sun and the elements.  Ecobricks are best stacked horizontally with their bottom pointed outwards.  This enables you to organize your ecobricks by colour and brand– which later facilitates project planning and making.</p>

            <img src="webp/storage-banner-990px.webp" width="100%" loading="lazy" alt="An example of how to store eco bricks properly">

            

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

                <img src="photos/milsteins-800px.jpg" width="100%" loading="lazy" alt="GEA trainers sitting at a table with eco brick milstein modules made from plastic">
            
					<p>The easiest, fastest, and perhaps the most fun ecobrick application, are Milstein Modules (MMs). These are hexagon and triangle shaped configurations of ecobricks that are used for sitting, but can be combined together to form one or two level horizontal surfaces. Applications include tables, beds, stages, etc.  All you need is 12 ecobricks to start!  Generic silicone sealant or motorcycle inner tubes can be used to make MMs . Ecobrick Milstein Modules can then slide into deployment for classes, concerts, meetings and more to make horizontal surfaces.  They can be stacked one on top of the other to add one level of vertical height.  They can be stacked and stored vertically to save space.</p>

                    <img src="webp/milstein-modules-750px.webp" width="100%" loading="lazy" alt="milstein eco-brick module building">
        
        
                    
                    <h4>🟡 Maintenance</h4>
                    <p>Modules should be cleaned once a year.  Broken modules can be repaired with silicone.</p>
                    
                    <hr>

                    <h4>🟢 Next Life</h4>
                    <p>  Well used ecobrick Milstein Modules wil last 2-3 years.  After this time, the silicone joints began to weaken and to fail.  Ecobricks also begin to loose their lustre as the colors of the contained plastic begin to fade.  This is a good opportunity to transition them to long term building applications where they are fully protected with earth.</p>
                    
                    <hr>
                    <h4>🔴 Caution</h4>
                    <p>For indoor use only.   The UV rays in sunlight will degrade and fade your ecobricks and weaken the bottle’s plastic.
                    <p>
                    <hr>
                    <br>
                    

                    <a class="action-btn" href="milstein">🚀 Learn more & make</a>
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

            
            <img src="photos/dielemans-900px.jpg" width="100%" loading="lazy" alt="Dieleman lego eco brick modules">

            
            <p> <p>So this is pretty cool– ecobricks can make LEGO-like blocks!  Dieleman Modules, or DMs for short, are a way to turn bottles into modular bricks that can be stacked vertically.  Sixteen ecobricks are siliconed together to make one DM module.</p>

            <p>DMs interconnect just like Legos.  They stack one upon the other and enable you to make walls, towers and columns, quickly and easily without any glue or mortar.  Best Usage:  Awesome for open spaces, indoor playgrounds and building structures for concerts or fairs in minutes. Can be taken apart and stored just as fast!</p>

            <p>The DMs can then be disassembled just as easily.</p>

            <img src="webp/dm-modules-1000px.webp" width="100%" loading="lazy" alt="Examples of the different types of dieleman lego modules">

        
                    
                    <h4>🟡 Maintenance</h4>
                    <p>Modules should be cleaned once a year.  Broken modules can be repaired with silicone.</p>
                    
                    <hr>

                    <h4>🟢 Next Life</h4>
                    <p>  Well-used DMs wil last 2-3 years.  After this time, the silicone joints began to weaken and to fail.  Ecobricks also begin to loose their lustre as the colors of the contained plastic begin to fade.  This is a good opportunity to transition them to long term building applications where they are fully protected with earth.</p>
                    
                    <hr>
                    <h4>🔴 Caution</h4>
                    <p>For indoor use only.  The UV rays in sunlight will degrade and fade your DMs and weaken the ecobrick's plastic.
                    <p>
                    <hr>
                    <br>
                    

                    <a class="action-btn" href="dms">🚀 Learn More & Make</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Check our page all about Dieleman modules.</a></p>

            </div>
            </div>

            <a name="EARTHMODS"></a>
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

                <img src="photos/earth-module-623px.jpg" width="100%" loading="lazy" alt="Eco brick earth modules for sitting or coffee table">

                <p>Use the basic principles of Earth and Ecobrick Building to make outdoor stools, coffee tables and more with your ecobricks.  These modules are an ideal place to start to learn the basics of Earth building.  We use their construction in GEA Builder courses as a simple, non-structural start to the fundamental earth building techniques.</p>
                    <br>
                    <hr>

                    
                    <h4>🟡 Maintenance</h4>
                    <p>Earth modules must be move around carefully as they can crack and break.</p>
                    
                    <hr>

                    <h4>🟢 Next Life</h4>
                    <p>  Once broken or cracked, modules can be destroyed and their ecobricks extracted and reused.  If pure cob has been used, this too can be wet and reused in earth building projects.</p>
                    
                    <hr>
                    <h4>🔴 Caution</h4>
                    <p>Avoid building fully with cement.  Cementing ecobricks make them often impossible to remove without the bottle being ruptured.</p>
                    <p>Often earth modules can also be very heavy and care must be used in moving them.
                    <p>
                    <hr>
                    <br>
                    

                    <a class="action-btn" href="dms">🚀 Learn More & Make</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Check our page all about earth and ecobrick building.</a></p>


                </div>
                </div>

           


            <a name="OPENSPACES"></a>
			<div class="reg-content-block" id="block5">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>4. Open Spaces</h4>
					<h5>Ecobrick Open Spaces are for community that have completed thousands of high quality ecobricks with consistent bottle sizes and brands. </h5>
					<br>
					</div>

					<button onclick="preclosed5()" class="block-toggle" id="block-toggle-show5">+</button>
				</div>

				<div id="preclosed5">

                    <img src="photos/openspace-960px.jpg" width="100%" alt="Eco-brick open spaces for use with eco brick modules of all kinds" loading="lazy">

                    <p>Ecobrick Open Spaces are for community that have completed thousands of high quality ecobricks with consistent bottle sizes and brands.  These ecobricks can then be combined into an assortment of Milstein and Dieleman modules to create a diverse set of several hundred modules.</p>

                    <div class="row">
                            <div class="main2">
                               <p>These modules can then be deployed for confernces, exhibtions, fairs and other special events to create customized interactive spaces.   These spaces can either be setup in advance or invite participants to interact, play and create their own space.  </p>
                            </div>
                            <div class="side2"><img src="https://www.ecobricks.org/en/webp/openspace.webp" width="100%" loading="lazy" alt="Examples of an eco brik open space".>
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Ecobrick communities that have amassed Open Space sets often rent out to events and venues to show case ecobrick modular technology and regenerative principles.</p>
                            </div>
                            <div class="side3"><br><img src="https://www.ecobricks.org/en/webp/openspace.webp" width="120px" loading="lazy" alt="Example eco brick open space">
                            </div>
                        </div>
					
					
					<br>
                    <hr>

                    
                    <h4>🟡 Maintenance</h4>
                    <p>Open space modules sets should be cleaned once a year.  Broken modules can be repaired with silicone.</p>
                    
                    <hr>

                    <h4>🟢 Next Life</h4>
                    <p>  Well used ecobrick modules wil last 2-3 years.  After this time, the silicone joints began to weaken and to fail.  Ecobricks also begin to loose their lustre as the colors of the contained plastic begin to fade.  This is a good opportunity to transition them to long term building applications where they are fully protected with earth.</p>
                    
                    <hr>
                    <h4>🔴 Caution</h4>
                    <p>Open spaces should be indoor or in covered spaces only.   The UV rays in sunlight will degrade and fade your ecobricks and weaken the bottle’s plastic.
                    <p>
                    <hr>
                    <br>
                    

                    <a class="action-btn" href="openspaces">🚀 Learn More & Make</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Check our page all about Ecobrick Open Spaces.</a></p>

                  
			
				</div>
			</div>


			<a name="EARTEHN"></a>
            <div class="reg-content-block" id="block6">

            <div class="opener-header">
                
                <div class="opener-header-text">
                <h4>5. Earth & Ecobrick Building</h4>
                <h5>The most enduring and greenest way to build with ecobricks is using Earth Building techniques.</h5>
                <br>
                </div>

                <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
            </div>

            <div id="preclosed6">

            <img src="https://www.ecobricks.org/wp-content/uploads/2017/05/green-space.jpg" width="100%" tag="eco brik green spaces" loading="lazy">
            
            <p>Our number one choice for structural building!  This method is strong, earthquake resilient, allows curved walls and designs, allows ecobricks to be recycled at the end of the construction, and relies only on 100% organic, locally-sourced materials that cost next to nothing.</p>
            
            <p> Earth building was used by our ancestors to build homes and structures that have endured for centuries.  This general method is known by different names in different languages and continents– cob, adobe, wattle-and-daub, etc.  By using local earth, straw and sand to make the mortar for the ecobricks we can build in ways that are resilient, strong, beautiful, and thermal-retentive.</p>

            <div class="row">
                            <div class="main2">
                            <p>Earth building is in full resonance with our principles— it is simple and replicable, non-capital, non-petroleum, collaboration powered, cradle-to-cradle and potently regenerative. Earth building techniques are gender and age transcendent:  involving men and women, young and old, and everyone in between in the building process.</p>
                            </div>
                            <div class="side2"><img src="https://www.ecobricks.org/wp-content/uploads/2020/04/cricle-bench-and-mango-tree-simple.svg" width="100%" loading="lazy" alt="eco brik and earth building can make tree benches">
                            </div><!--svgs/circle-bench.svg-->
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Earth and Ecobrick Building is ideal for constructing simple garden spaces – playgrounds and what we call ‘food forest play parks‘.</p>
                            </div>
                            <div class="side3"><br><img src="https://www.ecobricks.org/wp-content/uploads/2020/04/cricle-bench-and-mango-tree-simple.svg" width="120px" loading="lazy" alt="eco brik and earth building can make tree benches">
                            </div>
                        </div>
                        
                        

            
            
            <p>The Ecobrick and Earth Building techniques can then be extrapolated for wall and structure construction.</p>

            

            <p>The Earth Building technique can completely cover ecobricks, effectively securing them indefinitely in the construction.  This keeps them safe from UV light and other forms of degradation.  After 10, 20 or 100 years, when your structure comes to its end (as everything eventually does) the ecobricks can be extricated undamaged and fully repurposed.</p>

         <br>
                <hr>
                    
                    <h4>🟡 Maintenance</h4>
                    <p>Earth modules need to be regularily inspected.  Cracks and breaks to the wall are best quickly repaired to avoid erosion to the structure.</p>
                    
                    <hr>

                    <h4>🟢 Next Life</h4>
                    <p>  Earth and ecobrick constructions disassemble into crumbled cob mortar which can be returned to the earth without problem (or reused in another earth construction!).  The ecobricks can be removed from the crumbled cob to be reused in any way.</p>
                    
                    <hr>
                    <h4>🔴 Caution</h4>
                    <p>  It’s outside of the corporate construction paradigm: your bank won’t give you a mortgage, insurance companies won’t cover it, and your hands and feet will get dirty.
                    <p>
                    <hr>
                    <br>
                    

                    <a class="action-btn" href="earth">🚀 Learn More & Make</a>
                    <p style="font-size: 0.85em; margin-top:20px;">Check our page all about Earth & Ecobrick Building.</a></p>

            </div>
            </div>



            <a name="MORE"></a>
            <div class="reg-content-block" id="block7">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>And more ideas!</h4>
                    <h5>People around the world are building all sorts of great and unique things with their ecobricks!</h5>
                    <br>
                    </div>

                    <button onclick="preclosed7()" class="block-toggle" id="block-toggle-show7">+</button>
                </div>

                <div id="preclosed7">

                <img src="https://www.ecobricks.org/wp-content/uploads/2019/10/17264529_672787756215054_6682259577377211329_n.jpg" width="100%" loading="lazy" alt="Eco brick book shelf">

                <p>People around the world are building all sorts of great and unique things with their ecobrick!  Did you know that Ecobricks float really well?  We can’t wait to see the first ecobrick boats and islands. Have you seen or developed useful applications?  Please share with us, or help our team develop this page further.   Share your photos on the web with the hash tag #ecobricks.</p>
                <p>From baseball bats to boats, the sky is the limit on what you can use ecobricks for!  Ecobricks can be used for getting fit, for games and more.</p>


                </div>
               
            </div>

            <!--

            <a name="MAINTENANCE"></a>
            <div class="reg-content-block" id="block8">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Maintenance</h4>
					<h5>It is important not to forget our responsibility when building with plastic.</h5>
					<br>
					</div>

					<button onclick="preclosed8()" class="block-toggle" id="block-toggle-show8">+</button>
				</div>

				<div id="preclosed8">   

                <p>It is important not to forget our responsibility when building with plastic.  Ecobricks represent large amounts of secured plastic, and if our constructions lack planning and maintenance, there is the risk of the plastic escaping loose into the biosphere.  Planning for the maintence and the end of the construction is key.</p>

                   
					
					<p>Industrial plastic management removes consumer participation and agency in the process.  Through long-distance export, the ecological impact of plastic processing is hidden from consumers. By purporting to have a plastic solution, industry has encouraged the unabated consumption of plastic.  This has led to a steady increase of plastic consumption, production and pollution over the last 50 years.</p>

					<h4>Short Term Applications</h4>

					<p>Ecobrick furniture and modules need regular cleaning and repair.  Our GEA Trainer Team who have several hundred ecobrick modules that they regularily rent out to cities and exhibitions, spend one day a year cleaning their modules with a high powered hose and soap.  They also dismantle weak modules and repair them with silicone.</p>
                    
                    <p>Part of ensuring the longevity of ecobrick modules is to train those who use the modules how to handle them.  Modules should always be moved with two hands.  This is especially important with ecobrick Dieleman lego which new users are often tempted to grab with one hand.</p>

                    <p><b>Long-Term Applications</b><p>
                    <p> Earth and Ecobrick builds often represent large amounts of secured plastic.  When building on government or community land, it is key to establish a long term maintenance agreement with the custodians of the property.  This agreement must include yearly checkups and repairs and also a plan for the destruction of the construction to ensure the indefinite integrity of the ecobricks.<p> 

                    
                    
                
			
				</div>
			</div>
-->


             <br>
             <div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h4>A Safe Passage Through Time</h4>
                        
                         <p>Building with ecobricks is a significant responsibilty.  Ecobricks represent large amounts of secured plastic that will last a long time. If our constructions lack long-term planning and maintenance, plastic will eventually leach, degrade and escape. </p>
                        <p>  Planning for the maintence and the eventual end of your construction crucial.  This way we can put our plastic on a safe passage through time.  </p><br>
                        
                    
                    </div></p>

                    <div class="side2">
                        <br><img src="webp/road-500px.webp" width="100%" alt="eco brick road into the distance" loading="lazy" alt="eco brik are a form of sequestering plastic safely through time.">
                    </div>
                </div>
                <p><b>End of Life Agreements</b></p>
                        <p>The Global Ecobrick Alliance strongly recommends that in that end-of-life agreements be established with the constudians of the site.  These agreements must lay out the responsibilities for the construction's maintenance and end.  A plan must be made for the eventual removal, responsibility and resuse of the ecobricks.</p>
                        <p><a href="">See a sample, free use, agreement here.</a>
                        <p>View a sample GEA Ecobrick Construction Long term Custodian agreement:</p>
                    <ul>
                        <li>
                    <a href="https://www.ecobricks.org/wp-content/uploads/2019/10/GEA-Earth-Building-Terms-of-Transfer-ENG.pdf" target="_blank">GEA Earth Building Terms of Transfer ENG</a></p></li>
                    <li><a href="https://www.ecobricks.org/wp-content/uploads/2019/10/GEA-Earth-Building-Terms-of-Transfer-ID.pdf" target="_blank">GEA Earth Building Terms of Transfer INDONESIAN</a></li>
					<br>
            </div>
            


        </div>
	

		<div class="side">
	
			<div id="side-module-desktop-mobile">
				<img src="svgs/circle-bench.svg" width="100%" loading="lazy" alt="eco brik and earth building can make tree benches">
				<br><h4>Following the Earth's Example</h4>
				<h5>Plastic Sequestration follows the Earth’s example.  Learn about the ancient history of this modern methodology.</h5><br>
				<a class="module-btn" href="about">Plastic's Long Story</a>
                <br>
			</div>  
            <div id="side-module-desktop-mobile">
                <img src="webp/tens-thousands.webp" width="100%" loading="lazy" alt="eco brik and earth building can make community centers">
                <h4>Ecobricks</h4>
                <h5>The GEA advocates ecobricking as a means to sequester plastic.  Only ecobricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
                <a class="module-btn" href="sequest">Plastic Sequestration</a>
            </div>

			<div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Plastic Transition</h4>
				<h5>Ecobrick building is a transition technology. Rather than see plastic as ‘waste’ we see it as a building block for our green visions.</h5><br>
				<a class="module-btn" href="transition">Learn More</a>
			</div>

			

            <div id="side-module-desktop-mobile">
				<img src="webp/circular.webp" width="80%" loading="lazy" alt="eco brik applications are circular and spiral in design">
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

