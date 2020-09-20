<?php
// 2. Class dan Object

// Panggil Class Manusia
require 'Manusia.php';


// Instance Class Manusia menjadi object
// Asign value using constructor
$aku = new Manusia("Tuarie", 20);

var_dump($aku->showNama());
