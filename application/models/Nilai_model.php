<?php


class Nilai_model extends CI_Model
{
  public function getAllNilai()
  {
    $this->db->select('*');
    $this->db->from('tbguru', 'tbkelas', 'tbnilai', 'tbsiswa');
    $this->db->join('comments', 'comments.id = blogs.id');
    $query = $this->db->get();
    return $this->db->get('tbnilai')->result_array();
  }
  public function input_data($data)
  {
    $this->db->insert('tbnilai', $data);
  }

  public function getdata()
  {
    $query = $this->db->query("Select * FROM tbkelas ");
    return $query->result();
  }
  public function getdataSiswa()
  {
    $query = $this->db->query("Select * FROM tbsiswa");
    return $query->result();
  }
  public function getdataKelas()
  {
    $query = $this->db->query("Select * FROM tbkelas");
    return $query->result();
  }
  public function getdataGuru()
  {
    $query = $this->db->query("Select * FROM tbguru");
    return $query->result();
  }
  public function getdataPelajaran()
  {
    $query = $this->db->query("Select * FROM tbpelajaran");
    return $query->result();
  }
  public function cariDataNilai()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nis', $keyword);
    return $this->db->get('tbnilai')->result_array();
  }
}