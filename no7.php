<?php
function shortenText($text, $maxLength = 50) {
   // Memeriksa apakah panjang teks ST lebih besar dari batas maksimum ML.
    if (strlen($text) > $maxLength) { //strlen jumlah huruf
        return substr($text, 0, $maxLength) . '.....';
    }
    //kondisi kalo ga melebihi batas gaakan dipotong
    return $text;
}

$text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, aliquam voluptas repellendus at ea nam provident. Labore saepe obcaecati rerum recusandae sequi delectus quisquam unde ab quidem? Vel, pariatur debitis?";
$hasil = shortenText($text);

echo "Kalimat awal : ", $hasil;
?>