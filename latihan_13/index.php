<?php
// 13. Abstract Class 1
require 'class/Mahasiswa.php';
// Kelas kosongan sebagai template turunannya
// Kelas turunan wajib meng implement semua method abstractnya
// Boleh menggunakan property dan method reguler dan static

$m = new Mahasiswa(10);

var_dump($m->jalan());
