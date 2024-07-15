<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../ecobricks_env.php';

if (isset($_GET['id'])) {
    $ecobrick_unique_id = (int)$_GET['id'];

    // Fetch the ecobrick details from the database
    $sql = "SELECT serial_no, ecobrick_full_photo_url, ecobrick_thumb_photo_url, selfie_photo_url, selfie_thumb_url 
            FROM tb_ecobricks 
            WHERE ecobrick_unique_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ecobrick_unique_id);
    $stmt->execute();
    $stmt->bind_result($serial_no, $ecobrick_full_photo_url, $ecobrick_thumb_photo_url, $selfie_photo_url, $selfie_thumb_url);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "No ecobrick ID provided.";
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php $lang='en';?>
    <?php $version='2.42';?>
    <?php $page='log';?>
    <?php require_once ("../includes/log-inc.php");?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('deleteButton').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default action
                if (confirm('Are you sure you want to delete this ecobrick from the database? This cannot be undone.')) {
                    const ecobrickUniqueId = document.querySelector('input[name="ecobrick_unique_id"]').value;

                    fetch('delete-ecobrick.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams({
                            'ecobrick_unique_id': ecobrickUniqueId
                        })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Your ecobrick has been successfully deleted. You may now log another ecobrick...');
                                window.location.href = 'log.php';
                            } else {
                                alert('There was an error deleting the ecobrick: ' + data.error);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('There was an error processing your request.');
                        });
                }
            });
        });
    </script>
</head>
<body>
<div class="splash-content-block"></div>
<div id="splash-bar"></div>
<div id="photos-submission-box" style="display:flex;flex-flow:column;">
    <div class="form-container" id="upload-photo-form">
        <div class="step-graphic" style="width:fit-content;margin:auto;">
            <img src="../svgs/step3-log-project.svg" style="height:30px;margin-bottom:25px;" alt="Upload Successful!">
        </div>
        <div class="splash-form-content-block" style="text-align:center; display:flex;flex-flow:column;">
            <div class="splash-image-2" data-lang-id="003-weigh-plastic-image-alt">
                <img src="../svgs/Happy-turtle-dolphin-opti.svg" style="width:55%; margin:auto" alt="The Earth Thanks You">
            </div>
            <div>
                <h2 data-lang-id="001-form-title">Your Ecobrick <?php echo $serial_no; ?> has been successfully logged!</h2>
            </div>
            <div id="upload-success-message">
                <?php if ($ecobrick_full_photo_url): ?>
                    <div class="photo-container">
                        <img src="<?php echo $ecobrick_thumb_photo_url; ?>" alt="Basic Ecobrick Photo">
                        <p>Basic Ecobrick Photo</p>
                    </div>
                <?php endif; ?>
                <?php if ($selfie_photo_url): ?>
                    <div class="photo-container">
                        <img src="<?php echo $selfie_thumb_url; ?>" alt="Ecobrick Selfie Photo">
                        <p>Ecobrick Selfie Photo</p>
                    </div>
                <?php endif; ?>
            </div>
            <p data-lang-id="002-form-description2" style="text-align: center;">The Earth thanks You for your plastic sequestration and plastic transition!</p>
            <a class="confirm-button" href="details-ecobrick-page.php?serial_no=<?php echo $serial_no; ?>" data-lang-id="013-view-ecobrick-post">🎉 View Ecobrick Post</a>
            <form id="deleteForm" action="" method="POST">
                <input type="hidden" name="ecobrick_unique_id" value="<?php echo htmlspecialchars($ecobrick_unique_id); ?>">
                <input type="hidden" name="action" value="delete_ecobrick">
                <a class="confirm-button" style="background:red; cursor:pointer;" id="deleteButton" data-lang-id="014-delete-ecobrick">❌ Delete Ecobrick</a>
            </form>
            <a class="confirm-button" href="log.php" data-lang-id="015-log-another-ecobrick">➕ Log another ecobrick</a>
            <br>
        </div>
    </div>
    <br><br>
</div>
<!--FOOTER STARTS HERE-->
<?php require_once ("../footer-2024.php");?>
</body>
</html>
