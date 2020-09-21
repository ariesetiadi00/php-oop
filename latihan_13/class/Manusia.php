<?php

// Buat Abstract Class Manusia
abstract class Manusia
{
    protected $langkah;

    public function __construct($jumlah)
    {
        $this->langkah = $jumlah;
    }

    abstract public function jalan();
}
