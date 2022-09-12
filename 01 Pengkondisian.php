<?php
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for
for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World ! <br>";
}

// while
$i = 0;
while( $i < 5) {
    echo "Mochammad Toyib <br>";
    $i++;
}

// Do.. while
$i = 0;
do {
    echo "Menggunakan Do.. While <br>";
    $i++;
} while( $i < 10 );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
        .warna-pertama {
            background-color: silver;
        }
        .warna-kedua {
            background-color: tomato;
        }
    </style>
</head>
<body>
    <h2>Membuat tabel 3x5</h2>
    <table border="1", cellpadding="10" cellspacing="0">
    <?php
        for( $i = 1; $i <= 3; $i++ ){
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++ ) { 
                echo "<td> $i, $j </td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    <h2>Membuat tabel 4x5</h2>
    <table border="1", cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 4 ; $i++ ){ ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) { ?>
                <td><?php echo "$i, $j"; ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    <h2>Membuat tabel 5x5</h2>
    <table border="1", cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
    <h2>Percabangan</h2>
    <?php 
    // Percabangan
    $x = 30;
    if( $x < 20) {
        echo "benar";
    } else if( $x == 20 ) {
        echo "bingo !";
    } else {
        echo "salah";
    }
    ?>
    <h2>Membuat Tabel 10x10</h2>
    <table border="1", cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if ( $i % 2 == 1 ) : ?>
            <tr class="warna-pertama">
        <?php else : ?>
            <tr class="warna-kedua">
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>