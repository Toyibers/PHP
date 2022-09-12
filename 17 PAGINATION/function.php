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
    

    // upload gambar atau jalankan fungsi gambar
    $gambar = upload();
    if( !$gambar ){
        return false;
    }

    $query = "INSERT INTO `mahasiswa` VALUES ('','$nim','$nama','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);

    // Mengecek apakah bernilai 1 atau -1
    return mysqli_affected_rows($conn);
}

// function untuk mengupload data gambar atau image
function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script> 
                alert('pilih gambar terlebih dahulu !');
             </script>";
             return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "<script> 
                alert('yang anda upload bukan gambar ! ');
             </script>";
             return false;
    }

    // cek jika ukurannya terlalu besar | 1000000 = 1MB
    if( $ukuranFile > 1000000 ) {
        echo "<script> 
                alert('Ukuran gambar terlalu besar !');
             </script>";
             return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate / mengacak nama gambar baru agar tidak sama dan menimpa file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

    return $namaFileBaru;

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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    
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


// function untuk mencari data
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa 
                WHERE
                nama LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' 
             ";
    return query($query);
}


// function untuk menerima data dari form registrasi
function registrasi($data) {
    global $conn;

    $username =  strtolower(stripslashes($data["username"]));
    $password =  mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar');
             </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
             </script>";
        return false;
    }

    // enkripsi password
    $password =  password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan userBaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}


?>

