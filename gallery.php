<!--PAGE LANGUAGE:  ENGLISH
Content Page template: v.1.0.0-->
   
<!-- TRANSLATORS:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("includes/gallery-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("under-construction.php");?>
<!--TOP PAGE BANNER-->


<?php include 'ecobricks_env.php';?> 
	
<div class="splash-content-block">
          
            
        <div class="flex-container">


            <?php

            $sql = "SELECT * FROM vw_gallery_feed ;";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {


            // output data of each row
            while($row = $result->fetch_assoc()) {

            //$row = $result->fetch_assoc();

            echo '<div class="gal-photo">
            <a href="https://ecobricks.org/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["photo_url"].'" style="height:300px" alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" loading="lazy"/></a></p>';
            echo '<p><b>'.$row["location"].'</b></p>';
            echo '<p>'.$row["ecobrick_owner"].' logged <a href="https://ecobricks.org/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">Ecobrick '.$row["ecobrick_unique_id"].'</a> with a weight of '.$row["weight_in_g"].'&#8202;g and a density of '.$row["density"].'&#8202;g/ml.</p>';
                

            echo '</div>';

            }

            } else {
            echo "Failed to connect to the Brikchain database";
            }

            ?>
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

                 
            
                    <div class="page-paragraph-reg">
                    
                        <h4>Learn how to make a great ecobrick!</h4>
                        
                            <p>Making a great ecobrick isn't easy.  It requires technique, patience and prepared plastic!  See our twelve step ecobrick guide to up your sequestration game.</p>
                    
                        <br><p>
                    
                        <a class="action-btn" href="how">🚀 How to Make an Ecobrick</a>
                        <p style="font-size: 0.85em; margin-top:20px;">Our comprehensive 12 step guide.</a></p>    

                    </div>
               
            </div>
        </div>

        <div class="side">

            
            <div id="side-module-desktop-mobile">
                    <img src="svgs/eb-blue-no-clouds.svg" width="90%" alt="The Global Eco Brick Alliance">
                    <h4>How to Make An Ecobrick</h4>
                    <h5>Making an ecobrick is hard, but... simple and straight-forward!  Start with our 12 step guide.</h5><br>
                    <a class="module-btn" href="/how">Learn More</a>
                    
            </div>
                
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