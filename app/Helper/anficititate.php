<?php
function pecahKataPertama($kalimat){
    $kali = explode(' ', $kalimat);
    $lika = end($kali);
    $kalimat = $lika;

    return $kalimat;
}
?>