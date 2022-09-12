<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array Daftar Mahasiswa</title>
</head>
<body>
<?php $mahasiswa = [ 
    ["Toyib","2121400015","Teknik Informatika","mochtoyib118@gmil.com"],
    ["Dono","2121400020","Teknik Informatika","dono908@gmil.com"],
    ["Hani","2121400015","Sistem Informasi","Hani08@gmil.com"],
    ["Mamad","2121400130","Pendidikan Agama Islam","mamad112@gmil.com"]

]; ?>
<h2>Daftar Mahasiswa</h2>
<?php foreach( $mahasiswa as $mhs): ?>
<ul>
    <li>Nama    : <?= $mhs[0]; ?></li>
    <li>NIM     : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email   : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>