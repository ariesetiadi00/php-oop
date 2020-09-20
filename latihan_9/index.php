<?php

// Panggil Semua Class
require 'init.php';

// Instance Class Manusia menjadi object
// Masukan nama dan umur sebagai argument
$mahasiswa = new Mahasiswa("Tuarie", 20, 1234);
$dosen = new Dosen("Setiadi", 30, 4321);

// Masukan object aku sebagai parameter, agar informasi bisa dicetak
var_dump($mahasiswa->showInfo());
var_dump($dosen->showInfo());
