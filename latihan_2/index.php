<?php
// Membuat Class Manusia
class Manusia
{
    public $nama;
    public $umur;

    public function showNama()
    {
        return $this->nama;
    }
    public function showUmur()
    {
        return $this->umur;
    }
}

// Instance Class Manusia menjadi object
$aku = new Manusia();
$kamu = new Manusia();

// Set data pada class
$aku->nama = "Tuarie";
$aku->umur = 20;

$kamu->nama = "Setiadi";
$kamu->umur = 19;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan OOP 2</title>
</head>

<body>
    <!-- Panggil method untuk menampilkan nama dan umur -->
    <h1>Hai Aku <?= $aku->showNama() ?></h1>
    <h4>Aku Berumur <?= $aku->showUmur() ?></h4>

    <h1>Kamu Adalah <?= $kamu->showNama() ?></h1>
    <h4>Umur Kamu <?= $kamu->showUmur() ?></h4>
</body>

</html>