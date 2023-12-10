<!--PAGE LANGUAGE:  ENGLISH
Content Page template: v.1.0.0-->
   
<!-- TRANSLATORS:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("../includes/gallery-inc.php");?>

<!--This is the message indicating it is a live feed-->
<div id="feed-note">
    <a href="#" style="text-decoration: none; float: right; " onclick="this.parentNode.style.display = 'none'" > ❎ </a><br>
    <div class="feed-live"><p><span class="blink">⬤  </span>This is a live feed of authenticated selfie ecobricks from the <a href="brikchain.php">ecobrick manual blockchain</a>.  Click any brik to view.</p></div>
	</div>
</div>



<?php include 'ecobricks_env.php';?> 
	
<div class="splash-content-block">
          
            
        <div class="flex-container">
         <!--   <div class="gal-photo">
                <div class="photo-box-end"><a href="brikchain.php">...</a></div>
                <div class="gal-photo-text"></div>
             </div>-->
         
          
            <?php

            $sql = "SELECT * FROM vw_gallery_feed ;";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {


            // output data of each row
            while($row = $result->fetch_assoc()) {

            //$row = $result->fetch_assoc();

            echo '<div class="gal-photo"><div class="photo-box">
            <a href="https://ecobricks.org/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["thumb_url"].'?v=1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" loading="lazy"/></a></div>';
            echo '</div>';

            }

            } else {
            echo "Failed to connect to the Brikchain database";
            }

            ?>
            <div class="gal-photo">
                <div class="photo-box-end"><a href="brikchain.php">+</a></div>
                <div class="gal-photo-text"></div>
             </div>

             <div class="gal-photo" style="width: 200px; padding-bottom: 20px; text-align: left; margin-bottom: auto;"><div class="feed-live"><p><span class="blink">⬤ Live Feed:</span>
             50 latest selfie briks = 34kg plastic sequestered / 150kg CO2e / 340 BRK generated</p></div></div>
            <!-- <div class="feed-live"><p><span class="blink">⬤  </span>This is a live feed of authenticated selfie ecobricks from the <a href="brikchain.php">ecobrick manual blockchain</a>.  Click any brik to view.</p></div>-->

        </div>
        
	</div>
</div>


<div id="splash-bar"></div>

<!--
<div class="block">
  <div class="animation">
    <div class="first">
      <img src="http://fpoimg.com/200x200?text=First">
    </div>
    <div>
      <img src="http://fpoimg.com/200x200?text=Second">
    </div>
    <div>
      <img src="http://fpoimg.com/200x200?text=Third">
    </div>
    <div>
      <img src="http://fpoimg.com/200x200">
    </div>
    <div>
      <img src="http://fpoimg.com/200x200">
    </div>
    <div>
      <img src="http://fpoimg.com/200x200">
    </div>

  </div>
</div>

          -->



<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

            <div class="page-paragraph-reg">
            
                <br>
                <h2>Let the next Ecobrick be yours!</h2>
                    
                
                    <p>Ecobricking is a simple technique to take responsibility for your plastic and accelerate your <a href="transition.php">plastic transition</a>.  While making a great ecobrick isn't easy-- it is straightforward!  All you need is the right technique, patience and prepared plastic.</p>
                    
                    <p>Then, when you're done, you can log it on our GoBrik app.  Its a away to add your energy to global plastic transition movement.  GoBrik, let's you track the plastic you and your community have sequestered.  Logged ecobricks are added to our manual blockcahin.  There they can be applied to projects, traded and more.  With its unique serial anyone can look up the full details of an ecobrick using the serial number inscribed upon it.</p>
                        
                    <p>Get started with our twelve step guide to making a great ecobrick.</p>
            
                <br><p>
            
                <a class="action-btn" href="how">🚀 How to Make an Ecobrick</a>
                <p style="font-size: 0.85em; margin-top:20px;">Our comprehensive 12 step guide.</a></p>    

            </div>
               
        </div>
        

        <div class="side">

            
            <div id="side-module-desktop-mobile">
                    <img src="../svgs/eb-blue-no-clouds.svg" width="90%" alt="The Global Eco Brick Alliance">
                    <h4>What is an Ecobrick Exactly?</h4>
                    <h5>Learn all about the specs, types and requirements of an ecobrick.</h5><br>
                    <a class="module-btn" href="/what">Ecobricks</a>
                    
            </div>
                
        </div>
	</div>
</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

    


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="../scripts/accordion-scripts.js" defer></script>


</div>
</body>
</html>