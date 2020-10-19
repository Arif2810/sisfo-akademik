<?php

class Tentang_kampus extends CI_Controller{

  public function index(){
    $data['tentang'] = $this->tentang_model->tampil_data('tentang_kampus')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/tentang_kampus', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update($id){
    $where = array('id'=>$id);

    $data['tentang'] = $this->tentang_model->edit_data($where, 'tentang_kampus')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/tentang_update', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi(){
    $id      = $this->input->post('id');
    $sejarah = $this->input->post('sejarah');
    $visi    = $this->input->post('visi');
    $misi    = $this->input->post('misi');

    $data = array(
      'sejarah' => $sejarah,
      'visi'    => $visi,
      'misi'    => $misi,
    );

    $where = array('id'=>$id);

    $this->tentang_model->update_data($where, $data, 'tentang_kampus');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data tentang berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/tentang_kampus');
  }

  public function hapus($id){
    $where = array('id' => $id);
    $this->user_model->hapus_data($where, 'users');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/users');
  }

  public function _rules(){
    $this->form_validation->set_rules('username', 'username', 'required', [
      'required' => 'Username wajib diisi!'
    ]);
    $this->form_validation->set_rules('password', 'password', 'required', [
      'required' => 'Password wajib diisi!'
    ]);
    $this->form_validation->set_rules('email', 'email', 'required', [
      'required' => 'Email wajib diisi!'
    ]);
    $this->form_validation->set_rules('level', 'level', 'required', [
      'required' => 'Level wajib diisi!'
    ]);
    $this->form_validation->set_rules('blokir', 'blokir', 'required', [
      'required' => 'Blokir wajib diisi!'
    ]);
  }

}