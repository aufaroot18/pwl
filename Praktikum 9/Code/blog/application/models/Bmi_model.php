<?php 

	class Bmi_model extends CI_Model {
		// siapkan property
		public $berat, $tinggi;

		// membuat method menghitung BMI
		public function hitungBMI() {
			$bmi = $this->berat / pow($this->tinggi/100, 2);
			return $bmi;
		}

		// membuat method untuk mengetahui status BMI
		public function statusBMI() {
			$bmi = $this->hitungBMI();

			if ($bmi < 18.5) {
				return "Kekurangan Berat Badan";
			}
			else if ($bmi < 25.0) {
				return "Normal (ideal)";
			}
			else if ($bmi < 30.0) {
				return "Kelebihan Berat Badan";
			}
			else {
				return "Kegemukan";
			}
		}
	}

 ?>