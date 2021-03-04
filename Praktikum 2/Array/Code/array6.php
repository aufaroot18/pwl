<?php

$data= array("jurusan1"=>"Teknik Informatika","jurusan2"=>"Sistem Informasi","jurusan3"=>"Teknik Komputer","jurusan4"=>"Manajemen Informatika");

foreach($data as $index => $nilai) {
    echo "Kata kunci Index=  " . $index . ", Nilai = " . $nilai;
    echo "<br>";
}

?>