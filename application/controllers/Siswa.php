<?php

class Siswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Siswa_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Data Siswa';
    $data['siswa'] = $this->Siswa_model->getAllSiswa();

    $data['nama_kelas'] = $this->Siswa_model->getdata();
    $data['nama_siswa'] = $this->Siswa_model->getdataSiswa();


    if ($this->input->post('keyword')) {
      $data['siswa'] = $this->Siswa_model->cariDataSiswa();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('siswa/index', $data);
    $this->load->view('templates/footer');
  }

  public function kelas1()
  {
    $data['title'] = 'Data Siswa';
    $data['siswa'] = $this->Siswa_model->getSiswaKelas1();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('siswa/index', $data);
    $this->load->view('templates/footer');
  }

  public function kelas2()
  {
    $data['title'] = 'Data Siswa';
    $data['siswa'] = $this->Siswa_model->getSiswaKelas2();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('siswa/index', $data);
    $this->load->view('templates/footer');
  }
  public function kelas3()
  {
    $data['title'] = 'Data Siswa';
    $data['siswa'] = $this->Siswa_model->getSiswaKelas3();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('siswa/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($nis)
  {
    $data['title'] = 'Detail Data Siswa';
    $data['siswa'] = $this->Siswa_model->getDetailSiswa($nis);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('siswa/detail', $data);
    $this->load->view('templates/footer');
  }
  public function tambah()
  {
    $data['title'] = 'Form Tambah Data Siswa';

    $nis     = $this->input->post('nis');
    $nisn     = $this->input->post('nisn');
    $nama_siswa  = $this->input->post('nama_siswa');
    $nama_panggilan_siswa   = $this->input->post('nama_panggilan_siswa');
    $tempat_lahir_siswa     = $this->input->post('tempat_lahir_siswa');
    $tanggal_lahir_siswa     = $this->input->post('tanggal_lahir_siswa');
    $jenis_kelamin_siswa   = $this->input->post('jenis_kelamin_siswa');
    $nama_ayah   = $this->input->post('nama_ayah');
    $nama_ibu   = $this->input->post('nama_ibu');
    $alamat_siswa   = $this->input->post('alamat_siswa');
    $kode_kelas   = $this->input->post('kode_kelas');
    $foto     = $_FILES['foto'];
    if ($foto = '') {
      $foto = 'default.jpg';
    } else {
      $config['upload_path']    = './assets/img';
      $config['allowed_types']  = 'jpg|png|gif';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto')) {
        $foto = 'default.jpg';
      } else {
        $foto = $this->upload->data('file_name');
      }
    }

    $data = array(
      'nis'                    => $nis,
      'nisn'                   => $nisn,
      'nama_siswa'             => $nama_siswa,
      'nama_panggilan_siswa'   => $nama_panggilan_siswa,
      'tempat_lahir_siswa'     => $tempat_lahir_siswa,
      'tanggal_lahir_siswa'    => $tanggal_lahir_siswa,
      'nama_ayah'              => $nama_ayah,
      'nama_ibu'               => $nama_ibu,
      'jenis_kelamin_siswa'    => $jenis_kelamin_siswa,
      'alamat_siswa'           => $alamat_siswa,
      'kode_kelas'             => $kode_kelas,
      'foto'                   => $foto
    );
    $this->Siswa_model->input_data($data, 'tbsiswa');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('siswa/index');
  }
  public function hapus($nis)
  {
    $where = array('nis' => $nis);
    $this->Siswa_model->hapus_data($where, 'tbsiswa');
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('siswa/index');
  }
  public function ubah($nis)
  {
    $data['title'] = 'Ubah Data Siswa';
    $data['siswa'] = $this->Siswa_model->getUbahSiswa($nis);
    $data['jenis_kelamin_siswa'] = ['Laki-laki', 'Perempuan'];

    $this->form_validation->set_rules('nis', 'nis', 'required');

    $data['nama_kelas'] = $this->Siswa_model->getdataKelas();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('siswa/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Siswa_model->update_data();

      $this->session->set_flashdata('flash', 'Diubah');
      redirect('siswa');
    }
  }

  public function pdf()
  {
    $this->load->library('dompdf_gen');

    $data['siswa'] = $this->Siswa_model->getAllSiswa2('tbsiswa')->result();

    $this->load->view('laporan_siswa_pdf', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html       = $this->output->get_output();

    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_mahasiswa.pdf", array('Attachment' => 0));
  }
}