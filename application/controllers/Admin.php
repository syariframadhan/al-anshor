<?php

class Admin extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Dashboard Administrator';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');

    $this->load->model('model_asset');
    $data['total_asset'] = $this->model_asset->hitungJumlahAsset();
  }
}