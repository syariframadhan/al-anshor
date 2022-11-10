<?php


class Siswa_model extends CI_Model
{
  public function getAllSiswa()
  {
    $this->db->select('*');
    $this->db->from('tbsiswa');
    $this->db->join('tbkelas', 'tbsiswa.kode_kelas=tbkelas.kode_kelas');
    return  $this->db->get()->result_array();
    //return $this->db->get('tbsiswa')->result_array();
  }
  public function getAllSiswa2()
  {
    return $this->db->get('tbsiswa');
  }
  public function getSiswaKelas1()
  {
    return $this->db->get_where('tbsiswa', ['kode_kelas' => 1])->result_array();
  }
  public function getSiswaKelas2()
  {
    return $this->db->get_where('tbsiswa', ['kode_kelas' => 2])->result_array();
  }
  public function getSiswaKelas3()
  {
    return $this->db->get_where('tbsiswa', ['kode_kelas' => 3])->result_array();
  }
  public function getDetailSiswa($nis)
  {
    return $this->db->get_where('tbsiswa', ['nis' => $nis])->row_array();
  }
  public function input_data($data)
  {
    $this->db->insert('tbsiswa', $data);
  }
  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function getUbahSiswa($nis)
  {
    //return $this->db->get_where('tbsiswa', ['nis' => $nis])->row_array();
    $this->db->select('*');
    $this->db->from('tbsiswa');
    $this->db->join('tbkelas', 'tbsiswa.kode_kelas=tbkelas.kode_kelas');
    $this->db->where('tbsiswa.nis', $nis);
    return  $this->db->get()->row_array();
  }
  public function update_data()
  {
    $data = [
      "nis"  => $this->input->post('nis', true),
      "nisn"  => $this->input->post('nisn', true),
      "nama_siswa"  => $this->input->post('nama_siswa', true),
      "nama_panggilan_siswa"  => $this->input->post('nama_panggilan_siswa', true),
      "tempat_lahir_siswa"  => $this->input->post('tempat_lahir_siswa', true),
      "tanggal_lahir_siswa"  => $this->input->post('tanggal_lahir_siswa', true),
      "jenis_kelamin_siswa"  => $this->input->post('jenis_kelamin_siswa', true),
      "nama_ayah"  => $this->input->post('nama_ayah', true),
      "nama_ibu"  => $this->input->post('nama_ibu', true),
      "alamat_siswa"  => $this->input->post('alamat_siswa', true),
      "kode_kelas"  => $this->input->post('kode_kelas', true),
    ];
    $this->db->where('nis', $this->input->post('nis'));
    $this->db->update('tbsiswa', $data);

    $this->session->set_flashdata('flash', 'Diubah');
    redirect('siswa/index');
  }
  public function cariDataSiswa()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nis', $keyword);
    $this->db->or_like('nisn', $keyword);
    $this->db->or_like('nama_siswa', $keyword);
    $this->db->or_like('nama_panggilan_siswa', $keyword);
    return $this->db->get('tbsiswa')->result_array();
  }
  public function getdata()
  {
    $query = $this->db->query("Select * FROM tbkelas");
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
}