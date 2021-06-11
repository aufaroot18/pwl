<?php 

	class Student extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model("student_model");
		}

		public function index() {
			$students = $this->student_model->get_students();
			$data["students"] = $students;
			$this->load->view("student/index", $data);
		}

		public function create() {
			$this->load->view("student/create");
		}

		public function store() {
			$student = ["nim" => "0110215050", "nama" => "John", "jurusan" => "Sistem Informasi"];
			$students = $this->student_model->insert_student($student);
			$data["students"] = $students;
			$this->load->view("student/index", $data);
		}

		public function edit($id) {
			$student = $this->student_model->get_student($id);
			$data["student"] = $student;
			$this->load->view('student/edit', $data);
		}

		public function update() {
			$student = ["nim" => "0110215039", "nama" => "John", "jurusan" => "Hukum"];
			$students = $this->student_model->update_student($student);
			$data["students"] = $students;
			$this->load->view("student/index", $data);
		}

		public function delete($id) {
			$students = $this->student_model->delete_student($id);
			$data["students"] = $students;
			$this->load->view("student/index", $data);
		}
	}

 ?>