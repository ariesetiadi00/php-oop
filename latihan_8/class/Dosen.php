<?php
class Dosen extends Manusia
{
    public $nid;

    // Contruct untuk mengisi nilai property
    public function __construct(
        $nama,
        $umur,
        $nid
    ) {
        parent::__construct($nama, $umur);
        $this->nid = $nid;
    }

    public function showInfo()
    {
        return "Dosen : " . parent::showInfo() . " - NID {$this->nid}";
    }
}
