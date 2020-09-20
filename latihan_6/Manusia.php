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
        $nid,
        $type
    ) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->nim = $nim;
        $this->nid = $nid;
        $this->type = $type;
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

    public function showALl()
    {
        // Prepare String untuk cetak
        $str = "{$this->type} : {$this->nama}, Umur {$this->umur}";

        // Jika Mahasiswa, cetak NIM
        // JIka Dosen, cetak NID
        switch ($this->type) {
            case "Mahasiswa":
                $str .= " -- NIM {$this->nim}";
                break;
            case "Dosen":
                $str .= " -- NID {$this->nid}";
                break;
        }

        // Return String
        return $str;
    }
}
