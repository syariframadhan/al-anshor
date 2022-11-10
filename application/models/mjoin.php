<?php

class Mjoin extends CI_Model
{
  public function empattable()
  {

    $this->db->select('*');
    $this->db->from('tbnilai');
    $this->db->join('tbsiswa', 'tbsiswa.nis=tbnilai.nis');
    $this->db->join('tbpelajaran', 'tbpelajaran.kode_pelajaran=tbnilai.kode_pelajaran');
    $this->db->join('tbguru', 'tbguru.nik=tbnilai.nik');
    $this->db->join('tbkelas', 'tbkelas.kode_kelas=tbnilai.kode_kelas');

    $query = $this->db->get();

    return $query->result_array();
  }

  public function empattable_parameter($kode_pelajaran)
  {

    $this->db->select('*');
    $this->db->from('tbnilai');
    $this->db->join('tbsiswa', 'tbsiswa.nis=tbnilai.nis');
    $this->db->join('tbpelajaran', 'tbpelajaran.kode_pelajaran=tbnilai.kode_pelajaran');
    $this->db->join('tbguru', 'tbguru.nik=tbnilai.nik');
    $this->db->join('tbkelas', 'tbkelas.kode_kelas=tbnilai.kode_kelas');
    $this->db->where('tbnilai.kode_pelajaran', $kode_pelajaran);

    $query = $this->db->get();
    return $query->result_array();
  }
}