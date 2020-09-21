<?php
require 'Manusia.php';
class Mahasiswa extends Manusia
{

    public function __construct($langkah)
    {
        parent::__construct($langkah);
    }

    public function jalan()
    {
        return $this->langkah;
    }
}
