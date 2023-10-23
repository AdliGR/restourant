<?php
session_start();
$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 6);
$_SESSION['captcha_code'] = $captcha_code;

//echo $_SESSION['captcha_code'];
$target_layer = imagecreatetruecolor(140, 60);
$captcha_background = imagecolorallocate($target_layer, 255, 160, 199);
imagefill($target_layer, 0, 0, $captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
imagestring($target_layer, 5, 20, 20, $captcha_code, $captcha_text_color);

header("content-type:image/jpeg");
imagejpeg($target_layer);
?>