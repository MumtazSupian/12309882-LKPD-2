<?php
//untuk memeriksa jawabansiswa dan menghitung jumlah jawaban benar dan salah
function cekJawaban($nama, $jawabanSiswa, $jawabanBenar) {
    $jumlahBenar = 0;

    // Menghitung jumlah jawaban benar dengan cara membandingkan setiap jawaban siswa dengan jawaban benar
    foreach ($jawabanSiswa as $index => $jawaban) {
        // Jika jawaban siswa sama dengan jawaban benar pada indeks yang sama
        if ($jawaban === $jawabanBenar[$index]) {
            $jumlahBenar++;
        }
    }

    // buat ngehitung jumlah jawabansalah dengan mengurangi total jumlah soal dengan jumlah jawaban benar
    $jumlahSalah = count($jawabanBenar) - $jumlahBenar;

    echo "Nama : $nama";  
    echo "<br>";  
    echo "Jumlah Jawaban Benar : $jumlahBenar";  
    echo "<br>";  
    echo "Jumlah Jawaban Salah : $jumlahSalah"; 
}

$namaSiswa = "Mumtaz";  // Nama siswa
$jawabanSiswa = ['A','B','C','C','A','A','E','C','E','E'];  // Jawaban yang diberikan oleh siswa
$jawabanBenar = ['A','D','C','C','B','A','E','B','A','E'];  // Jawaban yang benar untuk soal

cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
?>
