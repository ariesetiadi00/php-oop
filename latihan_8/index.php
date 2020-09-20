<?php

// Panggil Semua Class
require 'init.php';

// Instance Class Manusia menjadi object
// Masukan nama dan umur sebagai argument
$mahasiswa = new Mahasiswa("Tuarie", 20, 1234, 0);
$dosen = new Dosen("Setiadi", 30, 0, 4321,);
$cetak = new Cetak();

// Masukan object aku sebagai parameter, agar informasi bisa dicetak
var_dump($mahasiswa->showALl());
var_dump($dosen->showALl());
