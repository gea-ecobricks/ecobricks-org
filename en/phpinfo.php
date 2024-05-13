<?php
phpinfo();
?>

<?php
echo 'Maximum upload file size: ' . ini_get('upload_max_filesize') . "\n";
echo 'Maximum POST size: ' . ini_get('post_max_size');
echo gd_info()['WebP Support'] ? 'WebP is supported' : 'WebP is not supported';
?>

