<?php

function perkenalan ($salam = "assalamu'alaikum", $nama){
    echo $salam."</br>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("hay", "Atrisa");

echo"</br>";

//memanggil function lagi
$namakamu = "Aufa";
$salam = "hallo";

perkenalan($salam,$namakamu);