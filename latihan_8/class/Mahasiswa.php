<?php
class Mahasiswa extends Manusia
{
    public $nim;

    // Contruct untuk mengisi nilai property
    public function __construct(
        $nama,
        $umur,
        $nim
    ) {
        parent::__construct($nama, $umur);
        $this->nim = $nim;
    }

    public function showInfo()
    {
        return "Mahasiswa : " . parent::showInfo() .  " - NIM {$this->nim}";
    }
}
