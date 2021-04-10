<?php

class Blog extends CI_Controller {
  public function index() {
    $data["nama"] = "Tutorial CI 3";
    $this->load->view('layouts/header');
    $this->load->view("blog/index", $data);
    $this->load->view("layouts/footer");
  }

  public function add() {
    // proses yang panjang
    $this->load->view("layouts/header");
    $this->load->view("blog/add");
    $this->load->view("layouts/footer");
  }
}

?>