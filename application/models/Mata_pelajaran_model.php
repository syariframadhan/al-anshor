<?php


class Mata_pelajaran_model extends CI_Model
{
  public function getAllMataPelajaran()
  {
    return $this->db->get('tbpelajaran')->result_array();
  }
  public function input_data($data)
  {
    $this->db->insert('tbpelajaran', $data);
  }
  public function getUbahMataPelajaran($kode_pelajaran)
  {
    return $this->db->get_where('tbpelajaran', ['kode_pelajaran' => $kode_pelajaran])->row_array();
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function cariDataMataPelajaran()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('kode_pelajaran', $keyword);
    $this->db->or_like('nama_pelajaran', $keyword);
    return $this->db->get('tbpelajaran')->result_array();
  }
  public function update_data()
  {
    $data = [
      "kode_pelajaran"  => $this->input->post('kode_pelajaran', true),
      "nama_pelajaran"  => $this->input->post('nama_pelajaran', true),
      "kkm"             => $this->input->post('kkm', true),
    ];
    $this->db->where('kode_pelajaran', $this->input->post('kode_pelajaran'));
    $this->db->update('tbpelajaran', $data);
  }
}