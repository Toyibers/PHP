<?php
$mahasiswa = [
    [
        "nim" => "2121400015",
        "nama" => "Ayu Diana Fitri",
        "email" => "ayu12@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ayu.png"
    ],
    [
        "nim" => "2121400215",
        "nama" => "Dina Putri Ayuni",
        "email" => "dina14@gmail.com",
        "jurusan" => "Teknologi Informasi",
        "gambar" => "dina.png"
    ],
    [
        "nim" => "2121400200",
        "nama" => "Irfan Sanjaya",
        "email" => "irfan15@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "irfan.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Metode GET</title>
</head>
<body>

<h1>Daftar Mahasiswa : </h1>


<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nim=<?= $mhs["nim"]; ?>
        &email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>
        &gambar=<?= $mhs["gambar"]; ?>"> <?= $mhs ["nama"]; ?> </a>
    </li>

<?php endforeach; ?>
</ul>


</body>
</html>