<?php

// Untuk mengembalikan ke halaman login menggunakan fitur session
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// untuk menghubungkan file function.php
require 'function.php';

$id = $_GET["id"];


// cek apakah data berhasil ditambahkan atau tidak
    if( hapus($id) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Dihapus !');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus !');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>