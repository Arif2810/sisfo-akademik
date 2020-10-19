<?php

class Tentang_model extends CI_Model{

  public $table = 'tentang_kampus';
  public $id = 'id';

  public function tampil_data($table){
    return $this->db->get($table);
  }

  public function edit_data($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

}