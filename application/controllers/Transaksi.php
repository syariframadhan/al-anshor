<?php

class Transaksi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Transaksi_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title']               = 'Transaksi Pembayaran';
    $data['pembayaran']          = $this->Transaksi_model->getAllPembayaran();
    $data['bulan_bayar_dari']    = [
      'Januari 2020',
      'Februari 2020',
      'Maret 2020',
      'April 2020',
      'Mei 2020',
      'Juni 2020',
      'Juli 2020',
      'Agustus 2020',
      'September 2020',
      'Oktober 2020',
      'November 2020',
      'Desember 2020',
      'Januari 2021',
      'Februari 2021',
      'Maret 2021',
      'April 2021',
      'Mei 2021',
      'Juni 2021',
      'Juli 2021',
      'Agustus 2021',
      'September 2021',
      'Oktober 2021',
      'November 2021',
      'Desember 2021'
    ];
    $data['bulan_bayar_sampai']  = [
      'Januari 2020',
      'Februari 2020',
      'Maret 2020',
      'April 2020',
      'Mei 2020',
      'Juni 2020',
      'Juli 2020',
      'Agustus 2020',
      'September 2020',
      'Oktober 2020',
      'November 2020',
      'Desember 2020',
      'Januari 2021',
      'Februari 2021',
      'Maret 2021',
      'April 2021',
      'Mei 2021',
      'Juni 2021',
      'Juli 2021',
      'Agustus 2021',
      'September 2021',
      'Oktober 2021',
      'November 2021',
      'Desember 2021'
    ];
    $data['tahun_bayar']               = ['2020', '2021'];

    if ($this->input->post('keyword')) {
      $data['pembayaran'] = $this->Transaksi_model->cariDataPembayaran();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('transaksi/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['title'] = 'Transaksi Pembayaran';

    $id_transaksi           = $this->input->post('id_transaksi');
    $nis                    = $this->input->post('nis');
    $tgl_bayar              = $this->input->post('tgl_bayar');
    $bulan_bayar_dari       = $this->input->post('bulan_bayar_dari');
    $bulan_bayar_sampai     = $this->input->post('bulan_bayar_sampai');
    $tahun_bayar            = $this->input->post('tahun_bayar');
    $total_bayar            = $this->input->post('total_bayar');

    $data = array(
      'id_transaksi'           => $id_transaksi,
      'nis'                    => $nis,
      'tgl_bayar'              => $tgl_bayar,
      'bulan_bayar_dari '      => $bulan_bayar_dari,
      'bulan_bayar_sampai'     => $bulan_bayar_sampai,
      'tahun_bayar'            => $tahun_bayar,
      'total_bayar'            => $total_bayar
    );
    $this->Transaksi_model->input_data($data, 'tbpembayaran');
    $this->session->set_flashdata('flash', 'Ditambahkan');
    $this->pdf($id_transaksi);
    redirect('transaksi/index');
  }
  public function pdf($id_transaksi)
  {
    $this->load->library('dompdf_gen');
    $data['nota'] = $this->Transaksi_model->getDetailNota($id_transaksi);

    $this->load->view('nota', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html       = $this->output->get_output();

    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("nota.pdf", array('Attachment' => 0));
  }
}