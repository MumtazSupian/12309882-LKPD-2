<?php

$hbd = "Selamat Ulang Tahun yang ke-17!!!";
//preg_match_all() buat nyari pola yang digunain di dalem string
//(variabel)$srt array berisi simbol simbol yg cocok
if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $hbd, $srt)) {
    echo "Teks : $hbd";
    echo "<br>";
    //implode(', ', $srt[0]) buat nge gabungin simbol yang ditemuin dan dipisahkan pake koma
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]);
} else {
    echo "Teks : $hbd";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}
?>