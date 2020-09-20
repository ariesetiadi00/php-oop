<?php

// Buat Class Manusia
class Manusia
{
    // Properti
    public $nama;
    public $umur;

    // Contruct untuk mengisi nilai property
    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Method
    public function showNama()
    {
        return "Hallo, Nama Saya " .  $this->nama;
    }

    public function showUmur()
    {
        return "Saya Berumur " . $this->umur . " Tahun";
    }
}
