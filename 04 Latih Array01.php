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
            background-color: tomato;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
    <title>Latihan Array Menggunakan Cell</title>
</head>
<body>
<h2>Latih Pertama </h2>
<?php $angka = [0,12,3,56,7,8,10,12]; ?>
<?php for( $i= 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>
<div class="clear"></div>
<h2> Latih Kedua </h2>
<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>