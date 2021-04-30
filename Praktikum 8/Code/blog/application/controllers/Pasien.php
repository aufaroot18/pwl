<?php 

	class Pasien extends CI_Controller {
		public function index() {
			// load atau memanggil model
			$this->load->model('pasien_model', 'pasien1');

			// object model 1
			$this->pasien1->id = '1';
			$this->pasien1->nama = 'aufa';
			$this->pasien1->kode = '011021';
			$this->pasien1->gender = 'L';

			// load model 2
			$this->load->model('pasien_model', 'pasien2');

			// object model 2
			$this->pasien2->id = '2';
			$this->pasien2->nama = 'diana';
			$this->pasien2->kode = '011029';
			$this->pasien2->gender = 'P';

			// simpan object ke dalam array
			$patiens = [$this->pasien1, $this->pasien2];

			// siapin data untuk dikirim ke view
			$data['patiens'] = $patiens;

			// render view
			$this->load->view('layouts/header');
			$this->load->view('pasien/index', $data);
			$this->load->view('layouts/footer');
		}
	}

 ?>