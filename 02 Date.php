<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// time(), date(), mktime(), strtotime()
// time() = Fungsi time() digunakan untuk mengambil waktu sekarang pada komputer server dalam format timestamp
// date() = Fungsi date() digunakan untuk mengambil hari sekarang pada komputer server dalam format timestamp
// mktime() = Fungsi mktime()Ã‚Â (singkatan: make time) 
// pada PHP juga digunakan untuk mendapatkan waktu tertentu dengan formatÃ‚Â timestamp
// mktime(hour, minute, second, month, day, year)
// strtotime() = Fungsi strtotime()Ã‚Â (baca: string to time) pada PHP
// digunakan untuk menghasilkan waktu tertentu dengan format timestamp. 
// format penulisan strtotime(string, timestamp);
echo "<h2> date() </h2>";
echo date("l");
echo "<br>";
echo date("l, d-M-Y");

echo "<h2> time() </h2>";
// Time
// Unix Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
echo time(); // jumlah detik yang berlalu sejak 1 januari 1970
echo "<br>";
echo date("d M Y", time()-60*60*24*100);
echo "<br>";
echo date("l, d-M-Y", time()+60*60*24*7);

echo "<h2> mktime() </h2>";
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,8,25,1985));

echo "<h2> strtotime </h2>";
echo strtotime('now'); // Relative Format
echo "<br>";
echo strtotime('2017-01-16'); // Date format
echo "<br>";
echo strtotime('17:10:00'); // Time format
echo "<br>";
echo date('Y-m-d H:i:s'); // 2017-01-17 16:16:58
echo "<br>";
echo date('Y-m-d H:i:s', strtotime('next month')); // 2017-02-17 16:16:58
echo "<br>";
echo date('Y-m-d H:i:s', strtotime('previous day')); // 2017-01-16 16:16:58
echo "<br>";
echo date('Y-m-d H:i:s', strtotime('previous hour')); // 2017-01-17 15:16:58

// STRING
// strlen() = Mengembalikan length string
// strcmp() = Perbandingan string dari n karakter pertama (case-sensitive)
// explode() = Memecah string menjadi array
// htmlspecialchars() = Mengonversi beberapa karakter yang telah ditentukan menjadi entitas HTML

// Utility
// var_dump() = digunakan untuk mencetak isi dari sebuah variabel, array, object.
// isset() = digunakan untuk mengecek apakah sebuah variabel sudah 
// pernah dibuat atau belum yang hasilnya berupa true atau false
// empty() = digunakan untuk mengecek apakah variabel yang ada itu kosong atau tidak.
// die() = untuk memberhentikan program.
// sleep() = untuk memberhentikan program sementara.

?>