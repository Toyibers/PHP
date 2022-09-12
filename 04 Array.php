<?php
// Array
// variabel yang dapat memiliki nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// Membuat Array
// cara lama
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false]; // tipe variabel apa saja yang dimasukkan

// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($hari);
var_dump($bulan);
echo "<br>";


// Menampilkan 1 element pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// Menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>