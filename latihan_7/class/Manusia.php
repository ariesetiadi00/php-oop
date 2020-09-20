<?php

// Buat Class Manusia
class Manusia
{
    // Properti
    public $nama;
    public $umur;

    // Dosen punya NID, Mahasiswa punya NIM
    public $nim;
    public $nid;

    // Type Manusia
    public $type;

    // Contruct untuk mengisi nilai property
    public function __construct(
        $nama,
        $umur,
        $nim,
        $nid
    ) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->nim = $nim;
        $this->nid = $nid;
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

    public function showInfo()
    {
        // Prepare String untuk cetak and Return
        return "{$this->nama}, Umur {$this->umur}";
    }
}
