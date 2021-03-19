<?php

//1. membuat class induk bernama Komputer
class Komputer{
    public function belikompdanlaptop(){
        return "beli komputer dan laptop  baru";
    }
}

//2. membuat turunan class induk yaitu Komputer ke anak induk yaitu Laptop
class Laptop extends Komputer{
    public function lihat_merk(){
        return "merk asus";
    }
}

//3. membuat objek dari class Laptop 
$LaptopBaru = new Laptop();

//4. panggil method objek
echo $LaptopBaru->belikompdanlaptop();
echo "</br>";
echo $LaptopBaru->lihat_merk();