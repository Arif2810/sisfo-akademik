<?php

class Dashboard extends CI_Controller{

  function __construct(){
    parent::__construct();

    if(!isset($this->session->userdata['username'])){
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Anda belum login!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/auth');
    }
  }

  public function index(){
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
      'username' => $data->username,
      'level'    => $data->level,
    );
    
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('administrator/dashboard',$data);
    $this->load->view('templates_administrator/footer');
  }
}