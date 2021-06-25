<?php 

	class Pasien_model extends CI_Model {
		// buat property atau variabel
		public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir, $email;

		// membuat method untuk mendapatkan semua data
		public function getAll() {
			// selecting data
			$query = $this->db->get('pasien');
			
			return $query->result();
		}

		// membuat method untuk mendapatkan data tertentu
		public function getById($id) {
			// select spesifik data
			$query = $this->db->get_where('pasien', ['id' => $id]);
			return $query->row();
		}

		public function insert_pasien($data) {
			$this->db->insert('pasien', $data);
		}
	}

 ?>