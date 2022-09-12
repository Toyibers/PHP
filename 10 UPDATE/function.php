<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

// function tambah data
function tambah($data) {
    global $conn;

    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO `mahasiswa` VALUES ('','$nim','$nama','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);

    // Mengecek apakah bernilai 1 atau -1
    return mysqli_affected_rows($conn);
}

// function menghapus data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM `mahasiswa` WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// function mengubah data
function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
            ";

    // menghubungkan database dengan query database
    mysqli_query($conn, $query);

    // Mengecek apakah bernilai 1 atau -1
    return mysqli_affected_rows($conn);
    
}
?>

