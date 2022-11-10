<?php


class Guru_model extends CI_Model
{
  public function getAllGuru()
  {
    return $this->db->get('tbguru')->result_array();
  }
  public function getAllGuru2()
  {
    return $this->db->get('tbguru');
  }
  public function getDetailSiswa($nik)
  {
    return $this->db->get_where('tbguru', ['nik' => $nik])->row_array();
  }
  public function input_data($data)
  {
    $this->db->insert('tbguru', $data);
  }
  public function getUbahGuru($nik)
  {
    return $this->db->get_where('tbguru', ['nik' => $nik])->row_array();
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function cariDataGuru()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nik', $keyword);
    $this->db->or_like('nama_guru', $keyword);
    return $this->db->get('tbguru')->result_array();
  }
}