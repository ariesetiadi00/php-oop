<?php
// Panggil Kelas Manusia
require 'Manusia.php';

// Instance Class Manusia menjadi object
// Masukan nama dan umur sebagai argument
$aku = new Manusia("Tuarie", 20);

// Tampilan nama dan umur menggunakan method
var_dump($aku->showNama());
var_dump($aku->showUmur());
