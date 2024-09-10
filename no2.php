<?php
$today = date('l'); 
$total_pembelanjaan = 130000;
$diskon = 0;

if ($today == 'Tuesday' && $total_pembelanjaan > 100000){
    $diskon = 0.12 * $total_pembelanjaan;
}
else if ($today == 'Tuesday') {
    $diskon = 0.05 * $total_pembelanjaan;
} else if ($total_pembelanjaan > 100000) { 
    $diskon = 0.07 * $total_pembelanjaan;
}
//buat jumlah berapa yg harus dibayar setelah diberi diskon
$total_bayar = $total_pembelanjaan - $diskon;

echo "Hari ini hari : $today<br>";
echo "Total pembelanjaan : Rp. " . number_format($total_pembelanjaan, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar : Rp. " . number_format($total_bayar, 0, ',', '.') . "<br>";
// 0: buat nunjukin tidak ada desimal
// '.' : jika ribuan menggunakan koma
// ',' : desimal menggunakan titik
?>