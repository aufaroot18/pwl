<?php

    
    $nama = $_GET['nama'];
    $nilai = $_POST['nilai'];
    
    echo "nama anda adalah "  . $nama . "<br/>";

    if ( $nilai >= 90){
        echo "anda mendapatkan A ";
    } else if ( $nilai >= 80 ) {
        echo "anda mendapatkan B";
    } else if  ($nilai >= 70 ){
        echo "anda mendapatkan C";
    } else {
        echo "nilai yang anda masukan salah";
    }


?>