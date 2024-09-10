<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$gabung = array_merge($bil1, $bil2);
//array_unique buat menghapus duplikat
$urut = array_unique($gabung);
//mengurutkan 
rsort($urut);
//implode gabungin elemen' jadi satu string dipisahkan dengan koma
echo "Hasil : " . implode(", ", $urut);
?>
