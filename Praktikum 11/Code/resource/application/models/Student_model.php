<?php 

	class Student_model extends CI_Model {
		public $students = [
			["nim" => "0110215039", "nama" => "Aufa Billah", "jurusan" => "Teknik Informatika"],
			["nim" => "0110215033", "nama" => "Fitriana Auliawati", "jurusan" => "Pendidikan Bahasa Inggris"],
		];

		public function get_students() {
			return $this->students;
		}

		public function insert_student($student) {
			array_push($this->students, $student);
			return $this->students;
		}

		public function get_student($id) {
			return $this->students[$id];
		}

		public function update_student($student) {
			foreach ($this->students as $index => $value) {
				if ($value["nim"] == $student["nim"]) {
					$this->students[$index] = $student;
				}
			}

			return $this->students;
		}

		public function delete_student($id) {
			array_splice($this->students, $id, 1);
			return $this->students;
		}
	}

 ?>