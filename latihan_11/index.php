<?php
// 11. Static Keyword

// Panggil Semua Class
require 'init.php';

// Instance Class Manusia menjadi object
// Masukan nama dan umur sebagai argument
$mahasiswa = new Mahasiswa("Tuarie", 20, 1234);
$dosen = new Dosen("Setiadi", 30, 4321);

// Masukan object aku sebagai parameter, agar informasi bisa dicetak
var_dump($mahasiswa->showInfo());
var_dump($dosen->showInfo());

echo '<hr>';

$m1 = new Manusia("Arie", 19);
$m2 = new Manusia("Suastra", 21);

// Panggil method statis langsung dari Class nya tanpa instance
var_dump(Manusia::showCount());
