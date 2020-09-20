<?php
class Cetak
{
    public function cetakInfo(Manusia $m)
    {
        return $m->showNama() . ", " . $m->showUmur();
    }
}
