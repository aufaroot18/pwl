<?php
class Kucing
{
    public $jenisKucing;

    public function __construct($jenis)
    {
        $this->jenisKucing = $jenis;
    }

    public function cetakKucing()
    {
        return $this->jenisKucing;
    }
}

$kucing1 = new Kucing("Short Hair");

echo $kucing1->cetakKucing();