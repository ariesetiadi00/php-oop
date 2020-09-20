<?php

// 3. Property dan Method

// Panggil Kelas Manusia
require 'Manusia.php';

// Instance Class Manusia menjadi object
$aku = new Manusia("Tuarie", 20);

// Set data pada class
$aku->nama = "Tuarie";
$aku->umur = 20;


// Tampilan nama dan umur menggunakan method
var_dump($aku->showNama());
var_dump($aku->showUmur());
