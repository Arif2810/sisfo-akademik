<?php

class Hubungi_model extends CI_Model{

  public $table = 'hubungi';
  public $id = 'id_hubungi';

  public function tampil_data($table){
    return $this->db->get($table);
  }

  public function insert_data($data, $table){
    $this->db->insert($table, $data);
  }

  public function kirim_data($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }


}