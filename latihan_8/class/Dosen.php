<?php
class Dosen extends Manusia
{

    public function showAll()
    {
        return "Dosen : {$this->showInfo()} - NID {$this->nid}";
    }
}
