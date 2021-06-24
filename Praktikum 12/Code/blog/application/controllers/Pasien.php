<?php 

	class Pasien extends CI_Controller {
		public function __construct() {
			// jalankan method constructor parent
			parent::__construct();
			if (!$this->session->userdata('logged_in')) {
				redirect('login');
			}
		}

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

		public function list() {
			// load model
			$this->load->model('pasien_model');

			// memanggil method getAll
			$patiens = $this->pasien_model->getAll();

			$data['patiens'] = $patiens;

			// kirim data ke view
			$this->load->view('layouts/header');
			$this->load->view('pasien/list', $data);
			$this->load->view('layouts/footer');
		}

		public function detail($id) {
			// load model
			$this->load->model('pasien_model');

			// memanggil method getById sambil mengirim parameter
			$patien = $this->pasien_model->getById($id);

			$data['patien'] = $patien;

			// kirim ke view
			$this->load->view('layouts/header');
			$this->load->view('pasien/detail', $data);
			$this->load->view('layouts/footer');
		}
	}

 ?>