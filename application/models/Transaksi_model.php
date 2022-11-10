<?php


class Transaksi_model extends CI_Model
{
  public function getAllPembayaran()
  {
    return $this->db->get('tbpembayaran')->result_array();
  }
  public function input_data($data)
  {
    $this->db->insert('tbpembayaran', $data);
  }
  public function getNota($id_transaksi)
  {
    return $this->db->get_where('tbpembayaran', ['id_transaksi' => $id_transaksi])->result_array();
  }
  public function getDetailNota($id_transaksi)
  {
    $this->db->select('*');
    $this->db->from('tbpembayaran');
    $this->db->join('tbsiswa', 'tbsiswa.nis=tbpembayaran.nis');
    return $this->db->get()->result_array();
  }
}