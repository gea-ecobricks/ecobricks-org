<?php $lang = basename(dirname($_SERVER['SCRIPT_NAME']));?>
<?php $version='2.31';?>
<?php $page='ecojoiners';?>
<!DOCTYPE html>
<HTML lang="<?php $lang ;?>">
<HEAD>
<META charset="UTF-8">

<?php require_once ("../includes/ecojoiners-inc.php");?>
<!--TOP PAGE BANNER-->

<div class="splash-content-block">
        <div class="splash-box">
                <div class="splash-heading" data-lang-id="001-splash-title">Introducing Ecojoiners</div>
            <div class="splash-sub" data-lang-id="002-splash-subtitle">Use bamboo to build furniture, structures and more with your ecobricks</div>
        </div>
        <div class="splash-image" data-lang-id="003-splash-image-alt-x"><img src="../webp/ecojoiner-6fc.webp" style="width: 95%" alt="Ecobrick joiners" loading="lazy"></div>
</div>
<div id="splash-bar"></div>

<!-- PAGE CONTENT-->

<div id="main-content">
<!-- The flexible grid (content) -->
        <div class="row">
                <div class="main">

                        <div class="lead-page-paragraph">
                        <p data-lang-id="004-lead-page-paragraph-x">Ecojoiners leverage the versatility of bamboo to create a powerful new way to build with bottles.</p>
                        </div>

                        <div class="page-paragraph">
                                <p data-lang-id="005-first-page-paragraph-x">We're thrilled to introduce a whole new way to connect your ecobricks.  After three years of research and development, the Global Ecobrick Alliance is launching <b>ecojoiners</b> as an open source (non-patented!) and fully Earthen technology (biodegradeable, spiral, modular, carbon sequestering) to create cubic latices.  That's a fancy way to say... if you can imagine it, you can use ecojoiners and ecobricks to build it green and great.  </p>

                        </div>





<!--ACCORDION CONTENT-->
<div class="reg-content-block" id="block1">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="007-block-1-header">Why Ecojoiners?</h4>
            <h5 data-lang-id="008-block-1-subheader">The story and Inspiration behind their development</h5>
        </div>
        <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1" aria-label="Plus">+</button>
    </div>

    <div id="preclosed1">

                <p data-lang-id="009-block-1-main-p1-x">Ecobricks are great.  They sequester plastic and you can build all sorts of stuff with them.  Consequently, folks around the world pack their plastic into bottles so that they can build their projects with them.</p>

                <p>But what if the stuff you could build was even more awesome?</p>
                <p data-lang-id="010-block-1-main-p2-x">
				For the last three years our R&D team, led by GEA co-founder Russell Maier, has been working on the situation that the true potential for ecobrick construction remained untapped.  Afterall, ecobricks are solid, resilient and strong.  Surely, we could do better than connecting into hexagons and triangular modules-- and if we could, it would provide a powerful and compelling incentive for folks around the world, concerned about plastic pollution, to ecobrick their plastic more-- and to dump, recycle and burn their plastic less.</p>

				<p>With the stakes high, the GEA team explored dozens of ways in which we could connect ecobricks.  Of course, our design process wasn't just based on function-- so too were we guided and constrained by the Earthen principles that guide the regenerative plastic transition movement.</p>

				<p>After considering 3D printed joiners, joiners using re-molded plastic and even wood, we finally settled on bamboo as our medium of choice.  When it comes to being green, bamboo is hard to beat!  Widely available in South East Asia, it is a strong, durable and extremely versatile material.  Best of all, bamboo groves and forests support biodiversity and their growth sequesters CO2 out of the atmosphere.</p>

				<p>Oh... and bamboo is circular-- perfect for embracing a bottle!</p>

        <h5 data-lang-id="022-block-1-info-1">ℹ️ Learn more about <a href="sequest.php">criteria of plastic sequestration.</h5>
        <h5 data-lang-id="023-block-1-info-2">ℹ️ Learn more about <a href="plastic.php">Earth's example.</a></h5>
    </div>
</div>


<div class="reg-content-block" id="block2">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="022-block-2-header">What can Ecojoiners Build?</h4>
            <h5 data-lang-id="023-block-2-subheader">From furniture to structures to matrices</h5>
        </div>
        <button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2" aria-label="Plus">+</button>
    </div>

    <div id="preclosed2">
        <div class="row">
            <div class="main2">
                <p data-lang-id="024-block-2-main-p1">Our first generation of ecojoiners enables cubic geometry.  Ecojoiners can be connected together into cubes that connect to other cubes-- enabling matrices that can serve as the basis for a wide variety of structures and applications.  Imagine minecraft for ecobricks!  These cubic joiners enable creations of 3D like pixels.</p>
            </div>
            <div class="side2" data-lang-id="025-block-2-img1-alt">
                <img src="../webp/ecojoiner-table-400px.webp" width="150" alt="Ecojoiner table" style="width:100%;" loading="lazy" >
            </div>
        </div>

        <p data-lang-id="026-block-2-p2-x">Completed ecobricks are packed solid enough that they can bear the weight of a person without deforming and to prohibit easy <a href="/fire">flammability</a> while maximizing its durability and re-usability.</p>

        <div class="row2">
            <div class="main3">
                <p data-lang-id="027-block-2-main-p3">To be an ecobrick, the following standards must be met:</p>
            </div>
            <div class="side3" data-lang-id="028-block-2-img2-alt">
                <img src="https://ecobricks.org/svgs/eb-blue.svg" width="120" style="width:100%;" alt="An ecobrick being made" loading="lazy" >
            </div>
        </div>

        <ul>
            <li data-lang-id="029-block-2-li-1">The ecobrick is made using a transparent plastic (PET) bottle</li>
            <li data-lang-id="030-block-2-li-2">The ecobrick is only packed with used plastics that are clean and dry.</li>
            <li data-lang-id="031-block-2-li-3">The ecobrick’s density is higher than 0.33g/ml.</li>
            <li data-lang-id="032-block-2-li-4">The ecobrick must have a density of 0.70g/ml or less</li>
            <li data-lang-id="033-block-2-li-5">The ecobrick is sealed tight with a screw down lid.</li>
            <li data-lang-id="034-block-2-li-6">Care has been taken taken to prepare the ecobrick as a reusable building block:
                <ul>
                    <li data-lang-id="035-block-2-li-6-1">The label has been removed and ecobricked.</li>
                    <li data-lang-id="036-block-2-li-6-2">A uniform colored plastic has been given to the ecobrick's bottom.</li>
                    <li data-lang-id="037-block-2-li-6-3">The weight has been permanently recorded on the outside.</li>
                </ul>
            </li>
        </ul>

        <p data-lang-id="038-block-2-p3">Only when these ecobrick standards are  met can the plastic inside be considered to be sequestered.</p>
		<br><br>
        <a class="action-btn" href="how.php" data-lang-id="039-block-2-btn">ℹ️ How to Make</a>
        <p style="font-size: 0.85em; margin-top:20px;" data-lang-id="040-block-2-p4">View our 10 Step Guide on Making an Ecobrick.</p>
    </div>
</div>

<div class="reg-content-block" id="block3">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="041-block-3-header">Principles behind the Design</h4>
            <h5 data-lang-id="042-block-3-subheader">Imagine structures that sequester more carbon and plastic than their making creates.</h5>
        </div>
        <button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3" aria-label="Plus">+</button>
    </div>

    <div id="preclosed3">
        <div class="row">
            <div class="main2">
                <p data-lang-id="043-block-3-main-p1">Cigbricks are a class of ecobrick to secure the potentially toxic plastic/acetate of the cigarette filters-- one of the most prevalent and damaging of all plastic pollutants. Cigbricks are made exclusively from the packed acetate filters of cigarette butts once the paper and ash has been fully removed.</p>
            </div>
            <div class="side2" data-lang-id="044-block-3-img1-alt">
                <img src="../svgs/Cigbrick.svg" width="300" style="width:100%;" alt="Cigbricks are for cigarettes" loading="lazy" >
            </div>
        </div>

        <div class="row2">
            <div class="main3">
                <p data-lang-id="045-block-3-main-p2">To be a Cigbrick the following standards must be met:</p>
            </div>
            <div class="side3" data-lang-id="046-block-3-img2-alt">
                <img src="../svgs/Cigbrick.svg" width="120" style="width:100%;" alt="Cigbricks are for cigarettes" loading="lazy" >
            </div>
        </div>

        <ul>
            <li data-lang-id="047-block-3-li-1">A density higher than 0.29 g/ml</li>
            <li data-lang-id="048-block-3-li-2">A maximum density of 0.70g/ml</li>
            <li data-lang-id="049-block-3-li-3">Only packed with acetate cigarette butts – the paper and ash have been removed.</li>
            <li data-lang-id="050-block-3-li-4">The cigbrick is sealed tight with a screw down lid.</li>
            <li data-lang-id="051-block-3-li-5">Care has been taken to prepare the cigbrick as a reusable building block:
                <ul>
                    <li data-lang-id="052-block-3-li-5-1">The label has been removed and ecobricked.</li>
                    <li data-lang-id="053-block-3-li-5-2">A bottom color has been added</li>
                    <li data-lang-id="054-block-3-li-5-3">The weight has been recorded on the outside.</li>
                </ul>
            </li>
        </ul>

        <p data-lang-id="055-block-3-p1">Only cigbricks that meet these standards can be authenticated and count as sequestered plastic.</p>

        <a class="action-btn" href="/cigbricks" data-lang-id="056-block-3-btn" style="margin-top:20px">ℹ️ About Cigbricks</a>
        <p style="font-size: 0.85em; margin-top:20px;" data-lang-id="057-block-3-p2">Learn more about Cibricks.</p>
    </div>
</div>



                        <div class="side-module-desktop-mobile" style="display:flex;flex-flow: row; width: 100%; padding: 10px; gap: 10px;">
                                <div>
                                    <img src="../webp/carbon-cube-chair-400px.webp" width="250" style="full-width-image" loading="lazy" alt="eco brik and earth building can make circular benches with trees planted in the middle">
                                </div>

                                <div>
                                    <h4>Carbon Cube Chair</h4>
                                    <p>Coming soon!  A simple, awesome and carbon sequestering cube chair that you can assemble with your ecobricks.</P>
                                    </p>
                                </div>
                        </div>

                    </div>


<!-- PAGE SIDE BAR STARTS HERE-->
                <div class="side">



<?php require_once ("side-modules/transition-module.php");?>

<?php require_once ("side-modules/earthen-ethics.php");?>

                </div>

        </div>
</div>

<!--FOOTER STARTS HERE-->

        <?php require_once ("../footer-2025.php");?>

<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="../js/accordion-scripts.js?v=2" defer></script>

</div>
</body>
</html>
