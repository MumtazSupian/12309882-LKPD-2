<?php
function jenisKoin($jumlahKoin){
    $koin = [1000,500,200,50];
    $hasil = [];
    //menyimpan hasil jenis koin

    //diganti jadi $k
    foreach($koin as $k) {//ngambil nilai
        //jika lebih besar atau sama dengan 
        if($jumlahKoin >= $k) {
            $hasil[] = $k;
            $jumlahKoin -= intdiv($jumlahKoin, $k) * $k;
            //intdiv buat ilangin angka dibelakang koma
        }
    }
    //buat ngembalikan perhitungan berupa array
    return $hasil;
}

$jumlahKoin = 1750;
$jenisKoin = jenisKoin($jumlahKoin);

echo "jenis koin untuk Rp. $jumlahKoin";
foreach($jenisKoin as $nilai) {
    echo"<li> Rp. $nilai </li>";
}
?>