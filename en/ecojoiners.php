<?php $lang = basename(dirname($_SERVER['SCRIPT_NAME']));?>
<?php $version='2.2';?>
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
        <div class="splash-image" data-lang-id="003-splash-image-alt"><img src="../webp/ecojoiner-1000px-banner.webp" style="width: 95%" alt="Ecobrick joiners" loading="lazy"></div>
</div>
<div id="splash-bar"></div>

<!-- PAGE CONTENT-->

<div id="main-content">
<!-- The flexible grid (content) -->
        <div class="row">
                <div class="main">

                        <div class="lead-page-paragraph">
                        <p data-lang-id="004-lead-page-paragraph">Ecojoiners are bamboo connectors that lock ecobricks together into sturdy cubic frames for tables, chairs and more.</p>
                        </div>

                        <div class="page-paragraph">
                                <p data-lang-id="005-first-page-paragraph">Much like Lego, Ecojoiners open limitless possibilities for regenerative design. The technology is open source and plans will soon be available here. <b>This page is under construction.</b></p>
                        </div>

                </div>
<!-- PAGE SIDE BAR STARTS HERE-->
                <div class="side">

<?php require_once ("side-modules/good-use.php");?>

<?php require_once ("side-modules/sequest-module.php");?>

<?php require_once ("side-modules/signup-now.php");?>

<?php require_once ("side-modules/transition-module.php");?>

<?php require_once ("side-modules/earthen-ethics.php");?>

                </div>

        </div>
</div>

<!--FOOTER STARTS HERE-->

        <?php require_once ("../footer-2025.php");?>

<!-- CUSTOM PAGE SCRIPTS-->

</div>
</body>
</html>
