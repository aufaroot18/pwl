<?php
class Kucing
{
    public $jenisKucing, $ownerKucing;

    public function __construct(
        $jenis = 'Short Hair',
        $owner = 'Aufa'
    ) {
        $this->jenisKucing = $jenis;
        $this->ownerKucing = $owner;
    }

    public function getData(): array
    {
        $data = [
            'owner' => $this->jenisKucing,
            'jenis' => $this->ownerKucing
        ];
        return $data;
    }

    public function __destruct()
    {
        echo "Selesai...";
    }
}

$Kucing1 = new Kucing();
echo $Kucing1->getData()['owner'];
echo "<br>" . $Kucing1->getData()['jenis'] . "<br>";
