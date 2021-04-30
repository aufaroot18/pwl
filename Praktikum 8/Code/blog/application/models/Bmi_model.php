<?php 

	class Bmi_model extends CI_Model {
		// siapkan property
		public $berat, $tinggi;

		// membuat method menghitung nilai BMI
		public function hitungBMI() {
			$bmi = $this->berat / pow($this->tinggi, 2);
			return $bmi;
		}

		// membuat method untuk mengetahui status berat badan
		public function statusBMI() {
			
		}
	}

 ?>