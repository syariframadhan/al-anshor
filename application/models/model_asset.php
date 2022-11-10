<?php

class Model_asset extends CI_Model
{
  public function hitungJumlahAsset()
  {
    $query = $this->db->get('tbsiswa');
    if ($query->result() > 0) {
      return $query->result();
    } else {
      return 0;
    }
  }
}