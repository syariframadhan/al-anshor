<?php

class Guru extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Guru_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Data Guru';
    $data['guru'] = $this->Guru_model->getAllGuru();

    if ($this->input->post('keyword')) {
      $data['guru'] = $this->Guru_model->cariDataGuru();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('guru/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($nik)
  {
    $data['title'] = 'Detail Data Guru';
    $data['guru'] = $this->Guru_model->getDetailSiswa($nik);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('guru/detail', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['title'] = 'Form Tambah Data Guru';

    $nik     = $this->input->post('nik');
    $nama_guru     = $this->input->post('nama_guru');
    $tempat_lahir_guru  = $this->input->post('tempat_lahir_guru');
    $tanggal_lahir_guru   = $this->input->post('tanggal_lahir_guru');
    $agama_guru     = $this->input->post('agama_guru');
    $jenis_kelamin_guru   = $this->input->post('jenis_kelamin_guru');
    $telepon_guru   = $this->input->post('telepon_guru');
    $email_guru   = $this->input->post('email_guru');
    $alamat_guru   = $this->input->post('alamat_guru');
    $pendidikan_guru   = $this->input->post('pendidikan_guru');
    $status_kawin_guru   = $this->input->post('status_kawin_guru');
    $jabatan   = $this->input->post('jabatan');
    $status_aktif_guru   = $this->input->post('status_aktif_guru');
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
      'nik'                    => $nik,
      'nama_guru'              => $nama_guru,
      'tempat_lahir_guru'      => $tempat_lahir_guru,
      'tanggal_lahir_guru'     => $tanggal_lahir_guru,
      'agama_guru'             => $agama_guru,
      'jenis_kelamin_guru'     => $jenis_kelamin_guru,
      'telepon_guru'           => $telepon_guru,
      'email_guru'             => $email_guru,
      'alamat_guru'            => $alamat_guru,
      'pendidikan_guru'        => $pendidikan_guru,
      'status_kawin_guru'      => $status_kawin_guru,
      'jabatan'                => $jabatan,
      'status_aktif_guru'      => $status_aktif_guru,
      'foto'                   => $foto
    );
    $this->Guru_model->input_data($data, 'tbguru');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('guru/index');
  }
  public function ubah($nik)
  {
    $data['title'] = 'Ubah Data Guru';
    $data['guru'] = $this->Guru_model->getUbahGuru($nik);
    $data['jenis_kelamin_guru'] = ['Laki-laki', 'Perempuan'];
    $data['pendidikan_guru'] = ['SMK', 'S1', 'S2', 'S3'];
    $data['status_kawin_guru'] = ['Belum Menikah', 'Sudah Menikah'];
    $data['status_aktif_guru'] = ['Aktif', 'Tidak Aktif'];

    $this->form_validation->set_rules('nik', 'nik', 'required');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('guru/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Siswa_model->update_data();

      $this->session->set_flashdata('flash', 'Diubah');
      redirect('guru');
    }
  }
  public function hapus($nik)
  {
    $where = array('nik' => $nik);
    $this->Guru_model->hapus_data($where, 'tbguru');
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('guru/index');
  }
  public function pdf()
  {
    $this->load->library('dompdf_gen');

    $data['guru'] = $this->Guru_model->getAllGuru2('tbguru')->result();

    $this->load->view('laporan_guru_pdf', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html       = $this->output->get_output();

    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_guru.pdf", array('Attachment' => 0));
  }
}