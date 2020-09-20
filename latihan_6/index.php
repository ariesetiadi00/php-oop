<?php
// 6. Inheritance 1

// Panggil Kelas Manusia dan Cetak
require 'Manusia.php';
require 'Cetak.php';

// Instance Class Manusia menjadi object
// Masukan nama dan umur sebagai argument
$mahasiswa = new Manusia("Tuarie", 20, 1234, 0, "Mahasiswa");
$dosen = new Manusia("Setiadi", 30, 0, 4321, "Dosen");
$cetak = new Cetak();

// Masukan object aku sebagai parameter, agar informasi bisa dicetak
var_dump($mahasiswa->showALl());
var_dump($dosen->showALl());
