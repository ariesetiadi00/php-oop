<?php
// 5. Object Type

// Panggil Kelas Manusia dan Cetak
require 'Manusia.php';
require 'Cetak.php';

// Instance Class Manusia menjadi object
// Masukan nama dan umur sebagai argument
$aku = new Manusia("Tuarie", 20);
$cetak = new Cetak();

// Masukan object aku sebagai parameter, agar informasi bisa dicetak
var_dump($cetak->cetakInfo($aku));
