<?php
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