<?php

class User extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'User';
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('admin/index');
    $this->load->view('templates/footer');
  }
}