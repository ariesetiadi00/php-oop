<?php

// Membuat class Manusia
class Manusia
{
    public $nama;
    public $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function showNama()
    {
        return $this->nama;
    }
    public function showUmur()
    {
        return $this->umur;
    }
}
