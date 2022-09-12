<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Get & Post</title>
</head>
<body>

<?php
/*
echo "<h2> Variabel Global </h2>";
// Variabel Scope / lingkup variabel
$x = 12;
$y = 10;
function buka() {
    global $x; // variabel global berfungsi untuk mengambil nilai di luar function
    global $y;
    echo "Hasil dari perkalian $x dan $y adalah : ".$y*$x;
}
buka();
*/
?>

<h2> Superglobal </h2>
<?php 
// $_GET     = Penyimpanan data / array nya melalui mekanisme URL
// $_POST    = Penyimpanan data / array nya melalui mekanisme form html
// $_REQUEST =
// $_SESSION = untuk mengecek apakah sebuah array tersebut ada data atau tidak di array nya
// $_COOKIE  =
// $_SERVER  = Untuk melihat detai server yang kita gunakan
// $_ENV     =
?>
<?php
// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];
var_dump($_GET); // http://localhost/Belajar%20PHP/16%20Get%20and%20Post.php?nama=toyib
// tambah tanda tanya (?) untuk menambahkan variabel baru pada $_GET
?>
</body>
</html>