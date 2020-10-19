<?php

class Transkrip_model extends CI_Model{

  public $table = 'transkrip_nilai';
  public $id = 'id_transkrip';

  public function insert($data){
    $this->db->insert($this->table, $data);
  }

  public function update($id, $data){
    $this->db->where($this->id, $id);
    $this->db->update($this->table, $data);
  }
}