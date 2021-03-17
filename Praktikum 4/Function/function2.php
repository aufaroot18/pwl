<?php

function perkenalan ($nama){
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Atrisa");

echo"</br>";

//memanggil function lagi
$namakamu = "Aufa";

perkenalan($namakamu);