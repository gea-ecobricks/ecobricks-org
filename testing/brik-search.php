<!--PAGE LANGUAGE:  ENGLISH
Content Page template: v.1.0.0-->
   
<!-- TRANSLATORS:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("includes/build-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<!--<?php require_once ("translate-please.php");?>-->

<!--TOP PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" style="font-size:xx-large;">Search</div>
	    <div class="splash-sub">Ecobrick Lookup</div>
	</div>
	<div class="splash-image"><img src="https://ecobricks.org/svgs/search-brik.svg2" style="width: 85%">
    </div>	
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
				<p>Search our brikchain repository of authenticated ecobricks.</p>
                
                <input></input>
    
			</div>
			
			
			<div class="page-paragraph">
                        <h6>Search by serial number, location and maker.  Our records go back to 2020.</h6>
<br><br><br>

<hr>
                        <!--<p>By using  circular design and regenerative design principles we leverage plastic’s long lasting properties to make ecobricks indefinitely reusable and put our plastic on a safe thousand year journey out of industry and out of the biosphere.   This means, with the help of GEA guidelines, not only can you build cool stuff with ecobricks, but you can be confident your making a greening contribution to the biosphere.</p>-->
							
            </div>	


            


             <br>
             <div class="page-paragraph-reg">
                 
                 <div class="row">
                
                      <div class="main2">
                         <h4>Our Brikchain Repository</h4>
                        
                         <p>The Global Ecobrick Alliance maintains a repository of all the authenticated ecobricks that have been logged on the GoBrik platform.  Our goal is to keep this information accessible for at least the next hundred years so that ecobricks may be looked up by their serial number by anyone anywhere in the future.</p>
                        <br><p>
                    
                        <a class="action-btn" href="/earth">ℹ️ Learn about GoBrik</a>
                    <p style="font-size: 0.85em; margin-top:20px;">An overview of our ecobrick logging platform.</a></p>
                        
                    
                 </div>

                    <div class="side2">
                        <br><img src="webp/road-500px.webp" width="100%" alt="eco brick road into the distance" loading="lazy" alt="eco brik are a form of sequestering plastic safely through time.">
                    </div>
                </div>
             </div>

        </div>
	

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

	<?php require_once ("footers/footer-$lang.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="accordion-scripts.js" defer></script>


</div>
</body>
</html>