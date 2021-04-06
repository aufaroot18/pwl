<?php

class Blog extends CI_Controller {
  public function index() {
    $data["nama"] = "Tutorial CI 3";
    $this->load->view("blog/index", $data);
  }

  public function add() {
    // proses yang panjang
    $this->load->view("blog/add");
  }
}

?>