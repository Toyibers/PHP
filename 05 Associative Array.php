<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
    <title>Associative Array</title>
</head>
<body>

<h2> Latihan Pertama </h2>
<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]; 
?>
<?php foreach( $angka as $ang ) : ?>
    <?php foreach( $ang as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

<h2>Latihan Kedua</h2>
<?php
$mahasiswa = [["Ayuni Firdaus","2121400015","ayuni678188@gmail.com","Teknik Informatika"],
              ["Riska Putri Ayuni","2121400020","riska67@gmail.com","Sistem Informasi"],
              ["Dina Sintiayana","212140035","DinaSinti345@gmail.com","Rekayasa Perangkat Lunak"]
];
?>
    <h3>Daftar Mahasiswa </h3>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><?php echo $mhs[0]; ?></li>
        <li><?php echo $mhs[1]; ?></li>
        <li><?php echo $mhs[2]; ?></li>
        <li><?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>


<h2>Latihan Ketiga</h2>
<?php
// Array Associative
// Definisiny sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Ayuni Firdaus",
        "gambar" => "ayu.png",
        "nim" => "2121400015",
        "email" => "ayuni678188@gmail.com",
        "jurusan" => "Teknik Informatika",
        "tugas" => [100,90,85]
    ],
    [   "nama" => "Riska Putri Ayuni",
        "gambar" => "riska.png",
        "nim" => "2121400020",
        "email" => "riska67@gmail.com",
        "jurusan" => "Sistem Informasi",
        "tugas" => [45,60,35]
    ],
    [
        "nama" => "Dina Sintiayana",
        "gambar" => "dina.png",
        "nim" => "2121400035",
        "email" => "DinaSinti345@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "tugas" => [80,76,45]
    ]
];
?>
<h3>Contoh dibawah :</h3>
<?php
echo $mahasiswa[1]["email"];
echo "<br>";
echo $mahasiswa[0]["nama"];
echo "<br>";
echo "Tugas : " . $mahasiswa[2]["tugas"][0];
?>
<h3>Menggunakan Foreach</h3>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>NAMA : <?= $mhs["nama"]; ?></li>
        <li>NIM : <?= $mhs["nim"]; ?></li>
        <li>JURUSAN : <?= $mhs["jurusan"]; ?></li>
        <li>TUGAS : <?= $mhs["tugas"][0] . " ". $mhs["tugas"][1] . " " . $mhs["tugas"][2];?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>