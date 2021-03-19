<?php

class kucing{
    var $warna;
    var $jenis;

    function tampilkan_warna(){
        return "kucing ini berwarna orange </br>";
    }

    function tampilkan_jenis(){
        return "kucing ini berjenis short hair anggora </br>";
    }
}

$kucing = new kucing();

echo $kucing -> tampilkan_warna();
echo $kucing -> tampilkan_jenis();
