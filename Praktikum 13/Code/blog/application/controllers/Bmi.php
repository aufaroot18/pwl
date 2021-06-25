<?php

	class Bmi extends CI_Controller {
		public function index() {
			echo "halaman index";
		}

		public function create() {
			// load model
			$this->load->model('pasien_model');

			$patients = $this->pasien_model->getAll();

			$data['patients'] = $patients;

			// render view
			$this->load->view('layouts/header');
			$this->load->view('bmi/create', $data);
			$this->load->view('layouts/footer');
		}

		public function store() {
			// load model bmi dan bmi pasien
			$this->load->model('bmi_model');
			$this->load->model('bmipasien_model');

			// menangkap data form
			$data['tanggal'] = $this->input->post('tanggal');
			$data['pasien_id'] = $this->input->post('pasien_id');
			$data['berat'] = $this->input->post('berat');
			$data['tinggi'] = $this->input->post('tinggi');

			// jalankan model bmi
			$this->bmi_model->berat = $data['berat'];
			$this->bmi_model->tinggi = $data['tinggi'];

			$data['bmi'] = $this->bmi_model->hitungBMI();
			$data['status_bmi'] = $this->bmi_model->statusBMI();

			// menjalankan method insert_pasien
			$this->bmipasien_model->insert_pasien($data);

			// arahkan atau redirect ke Controller Bmi, method index;
			redirect('/bmi/index');
		}
	}

?>