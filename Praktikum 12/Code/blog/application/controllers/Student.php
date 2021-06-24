<?php 

	class Student extends CI_Controller {
		public function __construct() {
			$this->load->model('student_model');
		}

		// menampilkan data mahasiswa
		public function index() {
			$this->student_model->getStudents();
			
			$this->load->view('student/index');
		}

		// menambah data mahasiswa
		public function create() {
			$this->load->view('student/create');
		}

		// menyimpan data mahasiswa
		public function store() {
			$this->student_model->insert_student($data);

		}

		// mengedit data mahasiswa
		public function edit() {
			$this->student_model->getStudent();

			$this->load->view('student/edit');
		}

		public function update() {
			$this->student_model->update_student($data);

			// render view lain atau redirect
		}

		public function delete() {
			$this->student_model->delete_student($data);

			// render view lain atau redirect
		}
	}

 ?>