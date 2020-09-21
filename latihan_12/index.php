<?php
// 12. Constant / Konstanta - Nilai tidak dapat dirubah

// Define
// Global, tidak bisa di simpan dalam Class. Tidak cocok OOP.
define('NAMA', "Tuarie");

// Const
// Bsa digunakan dalam class / OOP.
const UMUR = 20;

var_dump(NAMA);
var_dump(UMUR);

// Contoh const dalam Class OOP
class Coba
{
    const NAMA = "Ariee";

    public static function test()
    {
        // Magic Const
        return __CLASS__ . " / " . __FUNCTION__;
    }
}

// Pemanggilan sama seperti static keyword
var_dump(Coba::NAMA);
var_dump(Coba::test());
