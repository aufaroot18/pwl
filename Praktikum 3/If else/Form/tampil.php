<?php

$nilai = $_POST['nilai'];


if ($nilai > 89){
    echo "nilai anda mendapatkan A";
}elseif ($nilai > 79){
    echo "nilai anda mendapatkan B";
}elseif ($nilai > 69){
    echo "nilai anda mendapatkan c";
} else {
    echo "anda salah memasukan nilai";
}

?>