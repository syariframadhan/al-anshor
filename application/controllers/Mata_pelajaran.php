<?php

class Mata_pelajaran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mata_pelajaran_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Data Mata Pelajaran';
    $data['mata_pelajaran'] = $this->Mata_pelajaran_model->getAllMataPelajaran();

    if ($this->input->post('keyword')) {
      $data['mata_pelajaran'] = $this->Mata_pelajaran_model->cariDataMataPelajaran();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('mata_pelajaran/index', $data);
    $this->load->view('templates/footer');
  }
  public function tambah()
  {
    $data['title'] = 'Form Tambah Data Mata Pelajaran';

    $kode_pelajaran     = $this->input->post('kode_pelajaran');
    $nama_pelajaran     = $this->input->post('nama_pelajaran');
    $kkm                = $this->input->post('kkm');

    $data = array(
      'kode_pelajaran'         => $kode_pelajaran,
      'nama_pelajaran'         => $nama_pelajaran,
      'kkm'                    => $kkm
    );
    $this->Mata_pelajaran_model->input_data($data, 'tbpelajaran');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('mata_pelajaran/index');
  }
  public function ubah($kode_pelajaran)
  {
    $data['title'] = 'Ubah Data Guru';
    $data['mata_pelajaran'] = $this->Mata_pelajaran_model->getUbahMataPelajaran($kode_pelajaran);

    $this->form_validation->set_rules('kode_pelajaran', 'kode_pelajaran', 'required');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('mata_pelajaran/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Mata_pelajaran_model->update_data();

      $this->session->set_flashdata('flash', 'Diubah');
      redirect('mata_pelajaran');
    }
  }
  public function hapus($kode_pelajaran)
  {
    $where = array('kode_pelajaran' => $kode_pelajaran);
    $this->Mata_pelajaran_model->hapus_data($where, 'tbpelajaran');
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('mata_pelajaran/index');
  }
}