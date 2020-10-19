<?php

class Identitas extends CI_Controller{

  public function index(){
    $data['identitas'] = $this->identitas_model->tampil_data('identitas')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/identitas', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update($id){
    $where = array('id_identitas'=>$id);

    $data['identitas'] = $this->identitas_model->edit_data($where, 'identitas')->result();
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/identitas_update', $data);
    $this->load->view('templates_administrator/footer');
  }

  public function update_aksi(){
    $id            = $this->input->post('id_identitas');
    $judul_website = $this->input->post('judul_website');
    $alamat        = $this->input->post('alamat');
    $telp          = $this->input->post('telp');
    $email         = $this->input->post('email');

    $data = array(
      'judul_website' => $judul_website,
      'alamat'        => $alamat,
      'email'         => $email,
      'telp'          => $telp
    );

    $where = array('id_identitas'=>$id);

    $this->identitas_model->update_data($where, $data, 'identitas');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data identitas berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/identitas');
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