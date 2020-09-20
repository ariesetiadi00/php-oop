<?php
class Mahasiswa extends Manusia
{
    public function showAll()
    {
        return "Mahasiswa : {$this->showInfo()} - NIM {$this->nim}";
    }
}
