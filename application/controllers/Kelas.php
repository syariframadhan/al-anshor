<?php

class Kelas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kelas_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Data Kelas';
    $data['kelas'] = $this->Kelas_model->getAllKelas();

    if ($this->input->post('keyword')) {
      $data['kelas'] = $this->Kelas_model->cariDataKelas();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('kelas/index', $data);
    $this->load->view('templates/footer');
  }
  public function tambah()
  {
    $data['title'] = 'Form Tambah Data Kelas';

    $kode_kelas     = $this->input->post('kode_kelas');
    $nama_kelas     = $this->input->post('nama_kelas');
    $kapasitas_kelas    = $this->input->post('kapasitas_kelas');
    $wali_kelas         = $this->input->post('wali_kelas');

    $data = array(
      'kode_kelas'         => $kode_kelas,
      'nama_kelas'         => $nama_kelas,
      'kapasitas_kelas'    => $kapasitas_kelas,
      'wali_kelas'         => $wali_kelas
    );
    $this->Kelas_model->input_data($data, 'tbkelas');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('kelas/index');
  }
  public function ubah($kode_kelas)
  {
    $data['title'] = 'Ubah Data Kelas';
    $data['kelas'] = $this->Kelas_model->getUbahKelas($kode_kelas);

    $this->form_validation->set_rules('kode_kelas', 'kode_kelas', 'required');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('kelas/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Kelas_model->update_data();

      $this->session->set_flashdata('flash', 'Diubah');
      redirect('kelas');
    }
  }
  public function hapus($kode_kelas)
  {
    $where = array('kode_kelas' => $kode_kelas);
    $this->Kelas_model->hapus_data($where, 'tbkelas');
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('kelas/index');
  }
}