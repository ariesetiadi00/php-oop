<?php
class Cetak
{
    public function cetakInfo(Manusia $manusia)
    {
        return $manusia->showNama() . ", " . $manusia->showUmur();
    }
}
