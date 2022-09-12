<?php
require 'function.php';

// ambil data dari tabel mahasiswa / query data mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
//m mysqli_fetch_object() // mengembalikan berupa object

// while( $mhs = mysqli_fect_assoc($result) ) {
//    var_dump($mhs);
//}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mahasiswa (CRUD)</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php"> Tambah Data Mahasiswa </a>
<br><br>

<table border="1" cellpadding="10" cellspacing="2">

    <tr>
        <td>No.</td>
        <td>Aksi</td>
        <td>Gambar</td>
        <td>NIM</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Jurusan</td>
    </tr>

    <?php  $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">UBAH</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?');">HAPUS</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="80" height="80"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>