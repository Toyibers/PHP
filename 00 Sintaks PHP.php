<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h2>Halo, Selamat Datang <?php echo "Moch Toyib"; $nama="Moch toyib"; ?></h2>
    <h3>Nama aku biasanya bisa dipanggil <?php echo $nama?></h3>
</body>
</html>

<?php
// Operator
// Aritmatika
// + - * / %
 $x = 10;
 $y = 20;
 echo $x + $y;
 ?>
 <br>
<?php
 // penggabung string / concatenation / concat
 // .
 $nama_depan = "Mochammad";
 $nama_belakang = "Toyib";
 echo $nama_depan . " " . $nama_belakang;
?>
<br>
<?php
 // Assignment
 // =, +=, -=, *=, /=, %=, .=
 $x = 1;
 $x -= 5;
 echo $x; 
 $nama = "Mochammad";
 $nama .= " ";
 $nama .= "Toyib";
 echo $nama;
?>
<br>
<?php
// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1");

// Identitas
// ===, !==
var_dump(1 === "1");

// Logika
// && (and), || (or)
$x = 30;
var_dump($x < 20 || $x % 2 == 0)

?>

