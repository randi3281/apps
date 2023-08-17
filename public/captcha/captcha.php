<!-- buatlah kode captcha untuk ukuran yang pas di foler anficititate/login.blade.php dengan kode php-->
<?php
session_start();
$random = rand(1000, 9999);
// buatlah $random menjadi gambar captcha
$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 22, 86, 165);
$fg = imagecolorallocate($im, 255, 255, 255);
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $random, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);

imagedestroy($im);
$_SESSION['Captcha'] = $random;

?>