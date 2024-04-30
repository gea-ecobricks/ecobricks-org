<?php
// Use class_exists to check if PHPMailer is loaded
if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
    echo 'PHPMailer is installed.';
} else {
    echo 'PHPMailer is not installed.';
}
?>
