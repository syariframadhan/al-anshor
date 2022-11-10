<?php


class Kelas_model extends CI_Model
{
  public function getAllKelas()
  {
    return $this->db->get('tbkelas')->result_array();
  }
  public function input_data($data)
  {
    $this->db->insert('tbkelas', $data);
  }
  public function getUbahKelas($kode_kelas)
  {
    return $this->db->get_where('tbkelas', ['kode_kelas' => $kode_kelas])->row_array();
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function cariDataKelas()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('kode_kelas', $keyword);
    $this->db->or_like('nama_kelas', $keyword);
    return $this->db->get('tbkelas')->result_array();
  }
  public function update_data()
  {
    $data = [
      "kode_kelas"  => $this->input->post('kode_kelas', true),
      "nama_kelas"  => $this->input->post('nama_kelas', true),
      "kapasitas_kelas"  => $this->input->post('kapasitas_kelas', true),
      "wali_kelas"  => $this->input->post('wali_kelas', true),
    ];
    $this->db->where('kode_kelas', $this->input->post('kode_kelas'));
    $this->db->update('tbkelas', $data);
  }
}