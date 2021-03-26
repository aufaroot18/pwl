<?php
// suatu hari aufa ingin membuat indomie, langkah langka apa saja yang harus diselesaikan?

// membuat class bernama indomie
class indomie{

    //mempersiapkan bahan atau membuat propertry terlebih dahulu
    var $chef;

    function nyalakankompor(){
        echo " siapkan panci, lalu masukan air panas dan mie nya tunggu hingga matang";
    }

    function matikankompor(){
        echo "jika sudah lalu matikan kompor dan tiriskan mie lalu sajikan";
    }
}

//kita akan panggil class indomie menggunakan objek (instalisasi)
$indomie_aufa = new indomie();
// $indomie_azka = new indomie();

//kita akan set property chef
$indomie_aufa->chef="Chef Aufa";
echo "<br/>";

//tampilkan property chef 
echo $indomie_aufa->chef;

//tampilkan method untuk menyalakan kompor agar mie bisa dimasak
echo $indomie_aufa->nyalakankompor();
echo "<br/>";
echo $indomie_aufa->matikankompor();