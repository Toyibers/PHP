<?php
/* 

untuk masuk ke database 
buka xampp terus pilih shell

1. ketikkan :

mysql -h localhost -u root -p

2. cek database :

show databases;

3. buat database bernama phpdasar :

create database phpdasar;

4. pakai databes phpdasar:

use phpdasar;

5. buat tabel baru bernama mahasiswa :

create table mahasiswa (
    id int primary key auto_increment,
    nama varchar(100),
    nim char(10),
    email varchar(100),
    jurusan varchar(100),
    gambar varchar(100)
);

6. melihat tabel yang telah dibuat :

show tables;

7. melihat detail  tabel mahasiswa :

describe mahasiswa;

8. memasukkan data ke dalam tabel mahasiwa :

insert into mahasiswa (' ', 'Mochammad Toyib','2121400015','mochtoyib12@gmail.com',
'Teknik Informatika','mochtoyib.jpg');

9. mengecek data masuk atau tidak :

select * from mahasiswa;

10. mmengecek nim dan nama :

select nim, nama form mahasiswa;

11. mengecek data mahasiswa dengan nim nya :

select * from mahasiswa where nim = '2121400015';

12.  melakukan update sesuai id nya :

update mahasiswa set jurusan = 'Teknik Industri' where id=2;

13. delete baris atau field sesuai idnya :

delete from mahasiswa  where id=3;

14 delete tabel :

drop table mahasiswa;

15 delete database :

drop database phpdasar;

*/
?>