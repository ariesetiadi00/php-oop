<?php
// Panggil Kelas Manusia
require 'Manusia.php';

// Instance Class Manusia menjadi object
$aku = new Manusia();
$kamu = new Manusia();

// Set data pada class
$aku->nama = "Tuarie";
$aku->umur = 20;

$kamu->nama = "Setiadi";
$kamu->umur = 19;

// Tampilan nama dan umur menggunakan method
var_dump($aku->showNama());
var_dump($aku->showUmur());
