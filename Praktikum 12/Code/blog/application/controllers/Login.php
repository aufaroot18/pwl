<?php 

	class Login extends CI_Controller {
		public function index() {
			$this->load->view('layouts/header');
			$this->load->view('login/index');
			$this->load->view('layouts/footer');
		}

		public function auth() {
			// tangkap username dan password
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// jika username dan password adalah admin: redirect ke admin (pasien)
			if ($username == "admin" && $password == "admin") {
				// siapkan data session
				$userdata = [
					// username dan status login
					"username" => $username,
					"logged_in" => TRUE,
				];
				// set session
				$this->session->set_userdata($userdata);

				redirect('pasien');
			}
			// jika salah: redirect ke halaman login lagi
			else {
				redirect('login');
			}
		}

		public function logout() {
			// hapus session
			$this->session->sess_destroy();
			redirect('login');
		}
	}

 ?>