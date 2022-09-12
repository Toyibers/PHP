<?php

// Untuk mengembalikan ke halaman login menggunakan fitur session
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); // ceil perintah untuk melipatkan bil desimal keeatas
// operator ternary / perbandingan pada pagination
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
// halaman = 2, awalData = 3
$awalData = ( $jumlahDataPerHalaman * $halamanAktif  ) - $jumlahDataPerHalaman;


// ambil data dari tabel mahasiswa / query data mahasiswa  | LIMIT 1, 2 note ( data keberapa, jumlah data tertampil )
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// mengurutkan isi tabel dari atas ke bawah ( id yg terkecil )
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

// mengurutkan isi tabel dari bawah ke atas ( id yang terbesar )
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}


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

<a href="logout.php">logout</a>

<h1>Daftar Mahasiswa</h1>


<a href="tambah.php"> Tambah Data Mahasiswa </a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus
    placeholder="masukkan keyword pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>

</form>

<br>

<!-- Navigsi Pagination-->

<!-- logic untuk menampilkan panah ke kiri -->
<?php if( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i =1; $i <= $jumlahHalaman; $i++ ) : ?>
    <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
<?php endfor; ?>

<!-- logic untuk menampilkan panah ke kanan -->
<?php if( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br> <br>

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
        <td><?= $i + $awalData; ?></td>
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