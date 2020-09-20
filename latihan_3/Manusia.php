<?php

// Buat Class Manusia
class Manusia
{
    // Properti
    public $nama;
    public $umur;

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
