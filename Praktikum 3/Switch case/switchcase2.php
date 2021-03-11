<?php
$hari = "Selasa";

switch ($hari)
{
	case 'Senin' :
		echo 'Hari ini hari ' . $hari . ', semoga kembali fresh<br/>';
		break;
	case 'Kamis' :
		echo 'Hari ini hari ' . $hari . ', semoga masih semangat<br/>';
		break;
	case 'Sabtu' :
		echo 'Hari ini hari ' . $hari . ', selamat menjalani weekend<br/>';
		break;
	default : 
		echo 'Hari ini hari ' . $hari . ' tetap semangat!!';
}

?>