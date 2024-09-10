<?php
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
//array_map buat ngejalanin aksi strtoupper buat manggil array dan diubah jadi kapital
//array_unique hapus duplikat
print_r($uniqueJurusan);
?>