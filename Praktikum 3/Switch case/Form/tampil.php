<?php

$nilai = $_POST['nilai'];
$keterangan = 'Nilai anda ';

switch (true)
{
	case ($nilai >= 90) :
		$predikat = 'sangat baik <br/>';
		break;
	case ($nilai < 90 && $nilai >= 80) :
		$predikat = 'baik<br/>';
		break;
	case ($nilai < 80 && $nilai >=  60) :
		$predikat = 'cukup baik<br/>';
	default : 
		$predikat = 'perlu ditingkatkan lagi';
}
echo $keterangan . $predikat;
?>