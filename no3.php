<?php
$utama = 90;
// ngeloop dari 1-30
for ($i = 1; $i <= 30; $i++) {
    if (90 % $i == 0) { // $i buat meriksa itu faktor dari 90, % buat itung sisa pembagian  
        echo $utama . " : " . $i . " = ".($utama / $i);
        // kalo $i adalah faktor, itu buat nampilin hasil pembagian 
        // $utama / $i buat hitung hasil pembagian
        echo "<br>";
    }
}
?>
