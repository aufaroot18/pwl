<?php 

	class Bmipasien_model extends CI_Model {
		// siapkan property
		public $id, $pasien, $tanggal, $bmi;

		// method insert pasien
		public function insert_pasien($data) {
			// query builder untuk insert data
			$this->db->insert('bmi_pasien', $data);
		}
	}

 ?>