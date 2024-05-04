



<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.991';?>
<?php $page='ecojoiners';?>


<?php require_once ("../includes/ecojoiners-inc.php");?>


<div class="splash-content-block"></div>
<div id="splash-bar"></div>

 <!-- PAGE CONTENT-->

 <div id="form-submission-box">
    <div class="form-container">


    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.2.1/build/spline-viewer.js"></script>

<div id="viewer" style="padding: 20px;
  background: #2d2e32;
  border-radius: 20px;
  margin-bottom: 15px;
  height: 500px;
  display:flex; flex-flow:column;"><div>
<spline-viewer url="https://prod.spline.design/IHSMbi56bMqgyJxV/scene.splinecode"></spline-viewer></div>
<div id="spline-instructions" style="font-size:smaller; color:grey;font-family:'Mulish',sans-serif;width: 100%; text-align:left;padding: 5px;margin-top: auto;
  margin-bottom: 5px;">Double touch or drag to interact</div>
</div>

        

        <div class="splash-form-content-block">  
            <div class="splash-box">
        
                <h1 class="splash-heading" data-lang-id="001-splash-title" style="text-align: center;">Introducing Ecojoiners</h1>
            </div>
            <!-- <div class="splash-image" data-lang-id="003-splash-image-alt">
                <img src="../svgs/building-methods.svg" style="width:65%" alt="There are many ways to build with ecobricks">
            </div> -->
        </div>

  
        <h3 data-lang-id="002-form-description" style="text-align: center;">A revolutionary new way to connect ecobricks and construct versatile, practical and stunning geometric matrixes using bottles and reclaimed plastic.</h3>

            <div class="step-graphic" style="margin:auto;display: flex;
  justify-content: center;">
            <img src="../webp/ecojoiners-examples.webp" style="width:90%;">
        </div>

        

        <p class="lead-page-paragraph" style="text-align: center;">Remolded from locally-sourced, reclaimed-plastic, ecoJoiners enable ecobricks to be interconnected in a wide variety of ways.  Simple ecoJoiners (green) enable  vertices of any length and are held fast with sliders (orange) that take advantage of an ecobrick's slight compressibility to lock constructions rigidly in place— all the while ensuring any construction can be easily taken apart and each piece can be used again and again.</p>
        
        <div class="step-graphic" style="width:fit-content;margin:auto;margin-top:30px">
            <img src="../webp/ecojoiner-sphere.webp" style="height:300px;width:300px">
        </div>
        
        <h4 style="text-align: center;">A world of possibilities await.  Coming soon to ecobricks.org!</h4>

        <div class="step-graphic" style="width:fit-content;margin:auto;margin-top:30px">
            <img src="../logos/ecojoiner-logo.svg" style="height:70px;">
        </div>

      

    </div>
</div>








<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var div = document.getElementById("spline-instructions");
        div.style.display = "none";
        setTimeout(function() {
            div.style.display = "block";
        }, 10000); // 10 seconds
    });
</script>


</body>
</html>
