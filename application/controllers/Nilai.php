<?php


class Nilai extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('mjoin', '', TRUE);
    $this->load->model('Nilai_model', '', TRUE);
    $this->load->helper(array('form', 'url'));
  }
  public function index()
  {
    $data['title'] = 'Data Nilai';
    $data['mata_pelajaran'] = $this->Mata_pelajaran_model->getAllMataPelajaran();

    if ($this->input->post('keyword')) {
      $data['nilai'] = $this->Nilai_model->cariDataNilai();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('nilai/index', $data);
    $this->load->view('templates/footer');
  }

  public function input_nilai()
  {
    $data['title'] = 'Data Nilai';


    $data['title'] = 'Input Data Siswa';

    $data['nama_kelas'] = $this->Nilai_model->getdata();
    $data['nama_siswa'] = $this->Nilai_model->getdataSiswa();
    $data['nama_guru'] = $this->Nilai_model->getdataGuru();
    $data['nama_pelajaran'] = $this->Nilai_model->getdataPelajaran();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('nilai/tambah', $data);
    $this->load->view('templates/footer');
  }

  public function daftar_nilai()
  {
    $data['title'] = 'Daftar Nilai';

    $data['join4'] = $this->mjoin->empattable();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('nilai/daftar_nilai', $data);
    $this->load->view('templates/footer');
  }
  public function daftar_nilai_parameter($kode_pelajaran)
  {
    $data['title'] = 'Detail Data Nilai';




    $data['join5'] = $this->mjoin->empattable_parameter($kode_pelajaran);


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('nilai/daftar_nilai_parameter', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {

    $data['title'] = 'Form Tambah Data Nilai';

    $id_nilai     = $this->input->post('id_nilai');
    $kode_kelas     = $this->input->post('kode_kelas');
    $nis     = $this->input->post('nis');
    $nik  = $this->input->post('nik');
    $kode_pelajaran   = $this->input->post('kode_pelajaran');
    $semester     = $this->input->post('semester');
    $nilai_uts   = $this->input->post('nilai_uts');
    $nilai_uas   = $this->input->post('nilai_uas');
    $nilai_tugas   = $this->input->post('nilai_tugas');



    $data = array(
      'id_nilai'              => $id_nilai,
      'kode_kelas'            => $kode_kelas,
      'nis'                   => $nis,
      'nik'                   => $nik,
      'kode_pelajaran'        => $kode_pelajaran,
      'semester'              => $semester,
      'nilai_uts'             => $nilai_uts,
      'nilai_uas'             => $nilai_uas,
      'nilai_tugas'           => $nilai_tugas

    );
    $this->Nilai_model->input_data($data, 'tbnilai');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('nilai/daftar_nilai');
  }
}