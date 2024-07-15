<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <META charset="UTF-8">
    <?php $lang='en';?>
    <?php $version='2.42';?>
    <?php $page='log';?>

    <?php require_once ("../includes/log-inc.php");?>

    <div class="splash-content-block"></div>
    <div id="splash-bar"></div>
    <div id="photos-submission-box" style="display:flex;flex-flow:column;">
        <div class="form-container" id="upload-photo-form">
            <div class="step-graphic" style="width:fit-content;margin:auto;">
                <img src="../svgs/step3-log-project.svg" style="height:30px;margin-bottom:25px;" alt="Upload Successful!">
            </div>
        <div>

        <div class="splash-form-content-block" style="text-align:center; display:flex;flex-flow:column;">
            <div class="splash-image-2" data-lang-id="003-weigh-plastic-image-alt">
                <img src="../svgs/success.svg" style="width:55%; margin:auto" alt="The Earth Thanks You">
            </div>
            <div>
                <h2 data-lang-id="001-form-title">Your Ecobrick <?php echo $serial_no; ?> has been successfully logged!</h2>
            </div>
            <div id="upload-success-message"></div>
        </div>

            <p data-lang-id="002-form-description2" style="text-align: center;">The Earth thanks You for your plastic sequestration and plastic transition!</p>

            <a class="confirm-button" href="ecobrick.php?ecobrick_unique_id=<?php echo $_GET['ecobrick_unique_id']; ?>" data-lang-id="013-view-ecobrick-post">🎉 View Ecobrick Post</a>
<!--            <a class="confirm-button" data-lang-id="014-edit-ecobrick" href="edit-ecobrick.php?ecobrick_unique_id=--><?php //echo $_GET['ecobrick_unique_id']; ?><!--">Edit Ecobrick Post</a>-->

            <form id="deleteForm" action="" method="POST">
                <input type="hidden" name="ecobrick_unique_id" value="<?php echo htmlspecialchars($_GET['ecobrick_unique_id']); ?>">
                <input type="hidden" name="action" value="delete_ecobrick">
                <a class="confirm-button" style="background:red; cursor:pointer;" id="deleteButton" data-lang-id="014-delete-ecobrick">❌ Delete Ecobrick</a>
            </form>

            <br>
        </div>
    </div>
    <br><br>
</div>
<!--FOOTER STARTS HERE-->
<?php require_once ("../footer-2024.php");?>
</div>
</body>
</html>
