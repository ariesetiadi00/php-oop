<?php

// Buat Class Manusia
class Manusia
{
    // Properti
    private $nama;
    private $umur;

    // Contruct untuk mengisi nilai property
    protected function __construct(
        $nama,
        $umur
    ) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Setter dan Getter

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    // End Getter Setter


    // Method
    public function showNama()
    {
        return "Hallo, Nama Saya " .  $this->nama;
    }

    public function showUmur()
    {
        return "Saya Berumur " . $this->umur . " Tahun";
    }

    public function showInfo()
    {
        // Prepare String untuk cetak and Return
        return "{$this->nama}, Umur {$this->umur}";
    }
}
