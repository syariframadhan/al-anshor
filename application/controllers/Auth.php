<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index()
  {
    // if ($this->session->userdata('username')) {
    //   redirect('dashboard');
    // }

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Page';
      $this->load->view('templates/header', $data);
      $this->load->view('admin/login');
    } else {
      $this->_login();
    }
  }
  private function _login()
  {
    $username   = $this->input->post('username');
    $password   = $this->input->post('password');

    $user     = $this->db->get_where('tbuser', ['username' => $username])->row_array();



    // usernya ada
    if ($user) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {
        // cek password
        if ($password == $user['password']) {
          $data = [
            'username'    => $user['username'],
            'role_id'     => $user['role_id'],
            'nama'        => $user['nama']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum terdaftar!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password salah!</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');
    $this->session->unset_userdata('nama');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
    redirect('auth');
  }
}