<?php
session_start();

header("Content-type: image/png");

// buatlah variabel session menyimpan captcha yang tersimpan di daftarproses di anfiniticontroller
session('Captcha', '');

$gbr = imagecreate(200, 50);
imagecolorallocate($gbr, 69, 179, 157);

$color = imagecolorallocate($gbr, 253, 252, 252);
$font = "./Allura-Regular.otf";
$ukuran_font = 20;
$posisi = 32;

for ($i = 0; $i <= 5; $i++) {
    $angka = rand(0, 9);
    session('Captcha', session('Captcha') . $angka);

    $kemiringan = rand(20, 20);

    imagettftext($gbr, $ukuran_font, $kemiringan, 8 + 15 * $i, $posisi, $color, $font, $angka);


}

// $host = mysqli_connect('localhost', 'randigro_main', 'Randi_328', 'randigro_main');
// mysqli_query($host, 'INSERT INTO `accaptcha` (`captcha`) VALUES ('.$angka2.')' );
imagepng($gbr);
imagedestroy($gbr);
